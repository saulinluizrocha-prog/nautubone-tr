<?php
/**
 * Backend Lead Submission Handler - Turkey (TR)
 * Validates, normalizes phone, captures tracking parameters, and posts to MonadLead API.
 */

// Enable error reporting for debugging if needed, but disable in production
error_reporting(E_ALL);
ini_set('display_errors', 0);

function get_user_ip() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip_list = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        return trim($ip_list[0]);
    }
    return $_SERVER['REMOTE_ADDR'] ?? '';
}

function normalize_turkish_phone($phone) {
    // Remove all non-digit characters
    $digits = preg_replace('/\D/', '', $phone);
    
    // If it starts with 0090, strip the 00 -> 90...
    if (strpos($digits, '0090') === 0) {
        $digits = substr($digits, 2);
    }
    
    // If it starts with 0 (but not 00) and length is 11, replace leading 0 with 90
    if (strpos($digits, '0') === 0 && strpos($digits, '00') !== 0 && strlen($digits) === 11) {
        $digits = '90' . substr($digits, 1);
    }
    
    // If it starts with valid national code (e.g. 5, 2, 3, 4 etc.) and length is 10, prepend 90
    if (preg_match('/^[234589]/', $digits) && strlen($digits) === 10) {
        $digits = '90' . $digits;
    }
    
    return $digits;
}

function is_valid_turkish_phone($normalized) {
    // Normalized format must be exactly 12 digits, starting with 90
    return preg_match('/^90\d{10}$/', $normalized);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Affiliate Credentials
    $api_key = '185bc954642a73cdb0d9b8508d22fd7a';
    $offer_id = '1218';
    
    // Form Inputs
    $name = isset($_POST['name']) ? trim((string)$_POST['name']) : '';
    $raw_phone = isset($_POST['phone']) ? trim((string)$_POST['phone']) : '';
    $country_code = 'TR';
    
    // Normalize and Validate Phone
    $normalized_phone = normalize_turkish_phone($raw_phone);
    
    if (empty($name) || !is_valid_turkish_phone($normalized_phone)) {
        // Redirect back to landing page with error parameter
        header("Location: tr/index.html?error=invalid_phone");
        exit;
    }
    
    // Tracking and Analytics Parameters
    $sub_1 = isset($_POST['sub_1']) ? trim((string)$_POST['sub_1']) : '';
    $sub_2 = isset($_POST['sub_2']) ? trim((string)$_POST['sub_2']) : '';
    $sub_3 = isset($_POST['sub_3']) ? trim((string)$_POST['sub_3']) : '';
    $sub_4 = isset($_POST['sub_4']) ? trim((string)$_POST['sub_4']) : '';
    $sub_5 = isset($_POST['sub_5']) ? trim((string)$_POST['sub_5']) : '';
    $gclid = isset($_POST['gclid']) ? trim((string)$_POST['gclid']) : '';
    
    // Map gclid to sub_5 if sub_5 is empty
    if (empty($sub_5) && !empty($gclid)) {
        $sub_5 = $gclid;
    }
    
    $utm_campaign = isset($_POST['utm_campaign']) ? trim((string)$_POST['utm_campaign']) : '';
    $utm_source   = isset($_POST['utm_source'])   ? trim((string)$_POST['utm_source'])   : '';
    $utm_medium   = isset($_POST['utm_medium'])   ? trim((string)$_POST['utm_medium'])   : '';
    $utm_term     = isset($_POST['utm_term'])     ? trim((string)$_POST['utm_term'])     : '';
    $utm_content  = isset($_POST['utm_content'])  ? trim((string)$_POST['utm_content'])  : '';

    // Referrer information
    $referrer = $_SERVER['HTTP_REFERER'] ?? '';
    
    // Prepare API Request Payload
    $postFields = [
        'api_key'       => $api_key,
        'offer_id'      => $offer_id,
        'name'          => $name,
        'phone'         => '+' . $normalized_phone, // Send with + prefix, e.g. +905051234567
        'country_code'  => $country_code,
        'base_url'      => $referrer ?: ("https://" . ($_SERVER['HTTP_HOST'] ?? 'localhost') . $_SERVER['REQUEST_URI']),
        'referrer'      => $referrer,
        'user_ip'       => get_user_ip(),
        'sub_1'         => $sub_1,
        'sub_2'         => $sub_2,
        'sub_3'         => $sub_3,
        'sub_4'         => $sub_4,
        'sub_5'         => $sub_5,
        'utm_campaign'  => $utm_campaign,
        'utm_source'    => $utm_source,
        'utm_medium'    => $utm_medium,
        'utm_term'      => $utm_term,
        'utm_content'   => $utm_content
    ];

    try {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://api.monadlead.com/api/v1/orders/create/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($postFields),
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
            ],
        ]);

        $response = curl_exec($curl);
        $httpStatusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);

        $responseArray = json_decode($response, true);

        if ($httpStatusCode == 200 && isset($responseArray['type']) && $responseArray['type'] === 'success') {
            // Clean redirect to thank you page on success
            header("Location: tr-success.html");
            exit;
        } else {
            // Log API failure details in production logs
            error_log("MonadLead API error code " . $httpStatusCode . ": " . $response);
            
            // Still redirect to success page for optimal user experience (fail-soft approach)
            header("Location: tr-success.html?api_fallback=1");
            exit;
        }
    } catch (Exception $e) {
        error_log("MonadLead Lead Submission Exception: " . $e->getMessage());
        header("Location: tr-success.html?exception_fallback=1");
        exit;
    }
} else {
    // If not POST, redirect back to landing page
    header("Location: tr/index.html");
    exit;
}
