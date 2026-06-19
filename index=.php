<!DOCTYPE html>
<html lang="tr-TR" >

<head>
    <base>
    <script type="text/javascript" src="jquery.min.js"></script>
    
    <script src="time_stat.js"></script>
    <script src="back.js"></script>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css.css" rel="stylesheet">
    <link rel="stylesheet" href="comments.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_2.css">


    <script>
        var doc = "Dr. Romero-otero";
        var product = "Nautubone";
        var priceOld = 3400;
        var priceNew = 850;
        var currency = "TRL";
    </script>

    <script src="jquery.min.js"></script>
    <script src="jquery.min.js"></script>
    <script src="scripts.js"></script>
    <script>
        var start = 818;
        var duration = 193;
    </script>

    <script src="video.js"></script>
    <script src="video1.js"></script>
   

</head>

<body style="overflow: hidden;">
    <style style="display:none;">
        .img_wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100px !important;
            height: 100px !important;
            border-radius: 50% !important;
            background: white;
        }

        .img_mod {
            width: 70px !important;
            height: 70px !important;
            border-radius: 0 !important;
        }

        .main_header {
            font-size: 45px;
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
            text-transform: uppercase;
            font-weight: 800;
            line-height: 1.3;
            margin-bottom: 20px;
            padding-top: 30px;
        }

        @media (max-width: 500px) {
            .main_header {
                font-size: 25px;
            }
        }

        .iti {
            width: 100%;
        }

        .green_bg {
            background: transparent;
            color: red;
            font-weight: 800;
        }
    </style>
    <h1 class="main_header" style="display:none;"><span class="green_bg">EKLEM TEDAVİSİ HAKKINDAKİ</span> GERÇEKLERİ ÖĞRENMEK İÇİN HEMEN <span class="green_bg">VİDEOYU</span> İZLEYİN</h1>
    <div id="container_video" style="display:none;">
        <div id="close"></div>
        <div id="open-video">
            <div>
                <h4>Izlemeye devam etmek için tıklayın</h4>
            </div>
        </div>
        <div id="popup">
            <div>
                <h2>Nautubone’dan sadece 17 paket kaldı.</h2>
                <h2>Siparişinizi hemen verin!</h2>
            </div>
        </div>
        <div id="play">
            <div>
                <h4>Video zaten başladı</h4>
                <h4>Dinlemek için tıklayın!</h4>
            </div>
        </div>
        <video id="video" autoplay="autoplay" muted="" playsinline="" webkit-playsinline="" preload="metadata">
            <source src="Htmls759.mp4" type="video/mp4">
        </video>

        <form id="order" action="https://turkeklem.com/lander/send/" method="POST">
            <div id="formFb" class="formFb">
                <div class="formFb__container">

                    <input type="hidden" name="aff" value="monadlead">
                    <input type="hidden" name="offer" value="1218">
                    <input type="hidden" name="offer_name" value="Nautubone">
                    <input type="hidden" name="country" value="TR">
                    <input type="hidden" name="kt_campaign" value="7755">
                    <input type="hidden" name="kt_offer" value="4348">
                    <input type="hidden" name="subid" value="3i1s85757qooh">
                    <input type="hidden" name="pixel" value="593297823593101">
                    <input type="hidden" name="template" value="success2">
                    <input type="hidden" name="utm_source" value="rus">

                    <p class="formFb__action formFb__text"><b>ACELE EDİN!</b> Promosyon paketleri yakında tükenecek.</p>
                    <p class="formFb__counter formFb__text"><b>Güncelleme:</b> gün içinde sadece <span class="form-instock red">17</span> adet kaldı<span class="js-current-date"></span>.
                    </p>
                    <div class="formFb__img"><!-- <img src="urn:scrapbook:download:error:https://turkeklem.com/lander/-htmls-817---interview---zag10--mehmet-oz-tr-nautubone/nautubone.png.png" alt=""> --></div>
                    <div class="formFb__price">
                        <p class="formFb__price--txt formFb__text">-75% İNDİRİM</p>
                        <span class="formFb__price--p">
                            <span class="oldPriceAndLabelForLandingInfoApi formFb__price--old "><span class=""><span class="price-old">3400</span> </span><span class=""><span class="currency">TRL</span></span></span>
                            <span class="priceAndLabelForLandingInfoApi formFb__price--new"><span class=""><span class="price-new">850</span> </span><span class=""><span class="currency">TRL</span></span></span>
                        </span>
                    </div>
                    <div class="formFb__timer">
                        <p class="formFb__text">Bitişine kalan süre</p>
                        <div class="timer">10:00</div>
                    </div>
                    <div class="formFb__inputs">
                        <label>Adınız:</label>
                        <input name="name" placeholder="Ad" required="required" autocomplete="name" type="text" minlength="3" value="">
                    </div>
                    <div class="formFb__inputs">
                        <label>Telefonunuz:</label>
                        <div class="iti iti--separate-dial-code">
                            <div class="iti__flag-container">
                                <div class="iti__selected-flag" role="combobox" aria-controls="iti-0__country-listbox" aria-owns="iti-0__country-listbox" aria-expanded="false" title="Turkey (Türkiye): +90">
                                    <div class="iti__flag iti__tr"></div>
                                    <div class="iti__selected-dial-code">+90</div>
                                </div>
                            </div><input name="phone" required="required" autocomplete="tel" type="tel" value="" data-intl-tel-input-id="0" style="padding-left: 73px;" placeholder="501 234 56 78"><input type="hidden" name="phone" value="">
                        </div>
                    </div>
                    <button class="formFb__btn" type="submit">SİPARİŞ GÖNDER</button>

                    <p class="formFb__counter formFb__text">*Bir paket İçin bu indirim, tam tedavi siparişiyle geçerlidir.
                    </p>
                </div>
            </div>
        </form>
    </div>



    <div class="block_tv" style="display:none;">
        <p>NASIL SUNULUR</p>

        <div class="tv_icons">
            <img src="ch1.png" alt="">
            <div class="img_wrapper">
                <img class="img_mod" src="ch2.png" alt="">
            </div>
            <img src="ch3.jpg" alt="">
            <img src="ch4.jpg" alt="">
            <img src="ch5.jpg" alt="">
        </div>
    </div>

    <style style="display:none;">
        .fb-comments-wrapper {
            display: none;
            opacity: 0;
        }
    </style>
    <section class="comments py-4" style="display:none;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="fb-comments" style="margin-top: 5px;">
                        <div class="fb-comments-header">
                            <span>Yorumlar</span>
                        </div>

                        <div class="fb-comments-wrapper" id="2" style="display: block; opacity: 1.026;">
                            <table class="fb-comments-comment">
                                <tbody>
                                    <tr>
                                        <td rowspan="3" class="fb-comments-comment-img"><img src="1-qb3o98qh9oay1v2d2oaj5b0oodqyjmqf3yw0b0f8iw.jpeg"></td>
                                        <td>
                                            <font class="fb-comments-comment-name">
                                                <name class="">Ahmet Yılmaz</name>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fb-comments-comment-text">
                                            Bu biraz tartışmalı, ancak kendi fikrimi oluşturmak için görmeye değer olduğunu düşünüyorum.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fb-comments-comment-actions">
                                            <like>Beğen</like>
                                            ·
                                            <reply>Cevapla</reply>
                                            ·
                                            <likes>8</likes>

                                            <date>3 dakika</date>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="fb-comments-wrapper" id="3">
                            <table class="fb-comments-comment">
                                <tbody>
                                    <tr>
                                        <td rowspan="3" class="fb-comments-comment-img"><img src="2-qb3oae3dmdvk8pead66470kytc33ybalxnldf6pwx4.jpeg"></td>
                                        <td>
                                            <font class="fb-comments-comment-name">
                                                <name>Mehmet Demir</name>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fb-comments-comment-text">Yeni başladım izlemeye ve bu video eklem problemlerine bakış açımı değiştirdi.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fb-comments-comment-actions">
                                            <like>Beğen</like>
                                            ·
                                            <reply>Cevapla</reply>
                                            ·
                                            <likes>9</likes>

                                            <date>3 dakika</date>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="fb-comments-wrapper resposta" id="4">
                            <table class="fb-comments-comment">
                                <tbody>
                                    <tr>
                                        <td rowspan="3" class="fb-comments-comment-img"><img src="9-qb3oht1jjc0ztymj2dk5v57virjcocqdmcv9prq3u0.jpeg"></td>
                                        <td>
                                            <font class="fb-comments-comment-name">
                                                <name>Ayşe Yıldız</name>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fb-comments-comment-text">Bu videoyu diğer insanlarla paylaşacağım. Eklem sorunları olan ve bu videonun yaşam kalitesini artırabileceği kişiler tanıyorum.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fb-comments-comment-actions">
                                            <like>Beğen</like>
                                            ·
                                            <reply>Cevapla</reply>
                                            ·
                                            <likes>11</likes>

                                            <date>3 dakika</date>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="fb-comments-wrapper" id="5">
                            <table class="fb-comments-comment">
                                <tbody>
                                    <tr>
                                        <td rowspan="3" class="fb-comments-comment-img"><img src="3-qb3oaxtzlwml0ilm5wpa5dlnafdtfygz0dakhzwnag.jpeg"></td>
                                        <td>
                                            <font class="fb-comments-comment-name">
                                                <name>Fatma Korkmaz</name>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fb-comments-comment-text">Videonun düzenlemesini beğenmedim... Ancak bunu tamamen anlıyorum. Bu tedaviye inanıyorum!
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fb-comments-comment-actions">
                                            <like>Beğen</like>
                                            ·
                                            <reply>Cevapla</reply>
                                            ·
                                            <likes>15</likes>

                                            <date>3 dakika</date>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="fb-comments-wrapper" id="6">
                            <table class="fb-comments-comment">
                                <tbody>
                                    <tr>
                                        <td rowspan="3" class="fb-comments-comment-img"><img src="4-qb3obbxkgf5vuo14vksoos1k77gbnf0y2b2up5bqp4.jpeg"></td>
                                        <td>
                                            <font class="fb-comments-comment-name">
                                                <name>Mustafa Çelik</name>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fb-comments-comment-text">Çözüm hep yakındaymış... ama kimse fark etmemiş. Çok teşekkür ederim, ışık ve umut getirdiniz!
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fb-comments-comment-actions">
                                            <like>Beğen</like>
                                            ·
                                            <reply>Cevapla</reply>
                                            ·
                                            <likes>17</likes>

                                            <date>3 dakika</date>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="fb-comments-wrapper" id="7">
                            <table class="fb-comments-comment">
                                <tbody>
                                    <tr>
                                        <td rowspan="3" class="fb-comments-comment-img"><img src="10-qb3oibubc0qqa5v80lop90h3egyoyat0cxwzbay8dk.jpeg"></td>
                                        <td>
                                            <font class="fb-comments-comment-name">
                                                <name>Emine Doğan</name>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fb-comments-comment-text">Gerçekten işe yarıyor mu?</td>
                                    </tr>
                                    <tr>
                                        <td class="fb-comments-comment-actions">
                                            <like>Beğen</like>
                                            ·
                                            <reply>Cevapla</reply>
                                            ·
                                            <likes>18</likes>

                                            <date>3 dakika</date>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="fb-comments-wrapper" id="9">
                            <table class="fb-comments-comment">
                                <tbody>
                                    <tr>
                                        <td rowspan="3" class="fb-comments-comment-img"><img src="11-qb3oitp8xvf6er5a4bem2dyuosio0jrwreb7fk7r3c.jpeg"></td>
                                        <td>
                                            <font class="fb-comments-comment-name">
                                                <name>Zeynep Kılıç</name>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fb-comments-comment-text">Evet, gerçekten işe yarıyor. Ben canlı bir kanıtım... Şiddetli eklem ağrılarım vardı... Bu video sayesinde rahatladım. Tüm ailem çok heyecanlı, bu büyük insana yardım etmek için elimizden geleni yapıyoruz. Bu videoyu her gün paylaşıyorum.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fb-comments-comment-actions">
                                            <like>Beğen</like>
                                            ·
                                            <reply>Cevapla</reply>
                                            ·
                                            <likes>22</likes>

                                            <date>2 dakika</date>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="fb-comments-wrapper" id="10">
                            <table class="fb-comments-comment">
                                <tbody>
                                    <tr>
                                        <td rowspan="3" class="fb-comments-comment-img"><img src="5-qb3obwm0mry6y373itqh7mtp9omecrb1h5fj98h2w8.jpeg"></td>
                                        <td>
                                            <font class="fb-comments-comment-name">
                                                <name>Hasan Kaya</name>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fb-comments-comment-text">Amin! Allah bu kişiyi korusun.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fb-comments-comment-actions">
                                            <like>Beğen</like>
                                            ·
                                            <reply>Cevapla</reply>
                                            ·
                                            <likes>41</likes>

                                            <date>2 dakika</date>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="fb-comments-wrapper" id="11">
                            <table class="fb-comments-comment">
                                <tbody>
                                    <tr>
                                        <td rowspan="3" class="fb-comments-comment-img"><img src="6-qb3ocfesfgnxeafsh1v0li2x5e1qmpdo7qh8urp7fs.jpeg"></td>
                                        <td>
                                            <font class="fb-comments-comment-name">
                                                <name>İbrahim Şahin</name>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fb-comments-comment-text">Allah bu insanı kutsasın.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fb-comments-comment-actions">
                                            <like>Beğen</like>
                                            ·
                                            <reply>Cevapla</reply>
                                            ·
                                            <likes>40</likes>

                                            <date>2 dakika</date>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="fb-comments-wrapper" id="12">
                            <table class="fb-comments-comment">
                                <tbody>
                                    <tr>
                                        <td rowspan="3" class="fb-comments-comment-img"><img src="12-qb3oj7stjm76xay1y7bs6kn3e3quhnoqmz6gefjehs.jpeg"></td>
                                        <td>
                                            <font class="fb-comments-comment-name">
                                                <name>Hatice Özdemir</name>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fb-comments-comment-text">Etkileyici, bugün eşimle başlıyoruz... İkimizin de eklem sorunları var.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fb-comments-comment-actions">
                                            <like>Beğen</like>
                                            ·
                                            <reply>Cevapla</reply>
                                            ·
                                            <likes>47</likes>

                                            <date>2 dakika</date>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="fb-comments-wrapper" id="13">
                            <table class="fb-comments-comment">
                                <tbody>
                                    <tr>
                                        <td rowspan="3" class="fb-comments-comment-img"><img src="13-qb3ok7ip03bdi34x1exu8jea67p4ci9om8vxv85vxk.jpeg"></td>
                                        <td>
                                            <font class="fb-comments-comment-name">
                                                <name>Merve Erdoğan</name>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fb-comments-comment-text">Daha önce hiç duymamıştım, garip gelmişti ama çok mantıklı... Yeni başladım ve ilk günler sonuç veriyor.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fb-comments-comment-actions">
                                            <like>Beğen</like>
                                            ·
                                            <reply>Cevapla</reply>
                                            ·
                                            <likes>50</likes>

                                            <date>2 dakika</date>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="fb-comments-wrapper" id="14">
                            <table class="fb-comments-comment">
                                <tbody>
                                    <tr>
                                        <td rowspan="3" class="fb-comments-comment-img"><img src="7-qb3ocz5eezey63n49se6jv3lmhcg4ck1ag6fxkvxt4.jpeg"></td>
                                        <td>
                                            <font class="fb-comments-comment-name">
                                                <name>Ali Aydın</name>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fb-comments-comment-text">Eklem ağrısı çeken herkesin bunu görmesi gerekiyor, gösterilen şey inanılmaz, böyle bir şeyin mümkün olduğunu hiç düşünmemiştim!
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fb-comments-comment-actions">
                                            <like>Beğen</like>
                                            ·
                                            <reply>Cevapla</reply>
                                            ·
                                            <likes>66</likes>

                                            <date>2 dakika</date>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="fb-comments-wrapper">
                            <table class="fb-comments-comment" id="15">
                                <tbody>
                                    <tr>
                                        <td rowspan="3" class="fb-comments-comment-img"><img src="14-qb3okofsf3yjb2gcam94hf4kv5dq724uokmoi7gstk.jpeg"></td>
                                        <td>
                                            <font class="fb-comments-comment-name">
                                                <name>Rabia Güneş
                                                </name>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fb-comments-comment-text">Umarım işe yarar, şimdiye kadar çok şey denedim... Ama bu çok mantıklı geliyor!
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fb-comments-comment-actions">
                                            <like>Beğen</like>
                                            ·
                                            <reply>Cevapla</reply>
                                            ·
                                            <likes>79</likes>

                                            <date>3 dakika</date>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="fb-comments-wrapper">
                            <table class="fb-comments-comment" id="16">
                                <tbody>
                                    <tr>
                                        <td rowspan="3" class="fb-comments-comment-img"><img src="15-qb3ol78k7so9r9p18udnvadsqut2h07hf5oe3qoxd4.jpeg"></td>
                                        <td>
                                            <font class="fb-comments-comment-name">
                                                <name>Aylin Yüel
                                                </name>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fb-comments-comment-text">Çok harika, deneyeceğim!
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fb-comments-comment-actions">
                                            <like>Beğen</like>
                                            ·
                                            <reply>Cevapla</reply>
                                            ·
                                            <likes>85</likes>

                                            <date>3 dakika</date>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>



                        <p><strong><span style="text-align: center;">Yorum yapmak için giriş yapmalısınız</span></strong>
                        </p>



                    </div>
                </div>


            </div>
        </div>

    </section>
    <script src="jquery.min-1.js" style="display:none;"></script>
    <link rel="stylesheet" type="text/css" href="intlTelInput.css" style="display:none;">
    <script src="intlTelInput.min.js" style="display:none;"></script>
    <script src="phoneCheck.js" style="display:none;"></script>

    <script style="display:none;">
        document.addEventListener("DOMContentLoaded", function() {
            var comments = document.querySelectorAll('.comments__item');

            function fadeInElement(element, duration) {
                var start = null;

                function step(timestamp) {
                    if (!start) start = timestamp;
                    var progress = timestamp - start;
                    element.style.opacity = progress / duration;
                    if (progress < duration) {
                        window.requestAnimationFrame(step);
                    }
                }
                window.requestAnimationFrame(step);
            }

            function displayCommentsSequentially(index) {
                if (index >= comments.length) {
                    return;
                }

                var comment = comments[index];
                comment.style.display = 'grid';
                fadeInElement(comment, 500); // 500 миллисекунд для анимации появления

                if (index > 0) {
                    comments[index - 1].parentNode.insertBefore(comment, comments[index - 1]);
                }

                setTimeout(function() {
                    displayCommentsSequentially(index + 1);
                }, 10000); // 10 секунд задержки
            }

            displayCommentsSequentially(0);
        });
    </script>
    <script style="display:none;">
        /*
		function updateTime(elementId, minutesAgo) {
			// Получаем текущее время
			var currentTime = new Date();
	
			// Вычитаем указанное количество минут из текущего времени
			var pastTime = new Date(currentTime.getTime() - minutesAgo * 60 * 1000); // минуты в миллисекундах
	
			// Получаем часы и минуты
			var hours = pastTime.getHours();
			var minutes = pastTime.getMinutes();
	
			// Форматируем часы и минуты, чтобы они имели две цифры
			hours = hours < 10 ? '0' + hours : hours;
			minutes = minutes < 10 ? '0' + minutes : minutes;
	
			// Отображаем отформатированное время внутри соответствующего элемента <span>
			document.getElementById(elementId).textContent = hours + ':' + minutes;
		}
	
		// Обновляем время каждую секунду для каждого элемента
		setInterval(function() {
			updateTime("timeSpan1", 1);
			updateTime("timeSpan2", 2);
			updateTime("timeSpan3", 3);
		}, 1000);
	
		// Вызываем updateTime сразу, чтобы избежать начальной задержки
		updateTime("timeSpan1", 1);
		updateTime("timeSpan2", 2);
		updateTime("timeSpan3", 3);
		*/
    </script>

    <script style="display:none;">
        document.addEventListener("DOMContentLoaded", function() {
            var comments = document.querySelectorAll('.fb-comments-wrapper');

            function fadeInElement(element, duration) {
                var start = null;

                function step(timestamp) {
                    if (!start) start = timestamp;
                    var progress = timestamp - start;
                    element.style.opacity = progress / duration;
                    if (progress < duration) {
                        window.requestAnimationFrame(step);
                    }
                }
                window.requestAnimationFrame(step);
            }

            function displayCommentsSequentially(index) {
                if (index >= comments.length) {
                    return;
                }

                var comment = comments[index];
                comment.style.display = 'block';
                fadeInElement(comment, 500); // 500 миллисекунд для анимации появления

                if (index > 0) {
                    comments[index - 1].parentNode.insertBefore(comment, comments[index - 1]);
                }

                setTimeout(function() {
                    displayCommentsSequentially(index + 1);
                }, 10000); // 10 секунд задержки
            }

            displayCommentsSequentially(0);
        });
    </script>


    <script style="display:none;">
        function startTimers() {
            const timers = document.querySelectorAll('.timer');

            timers.forEach(timer => {
                let [minutes, seconds] = timer.textContent.split(':').map(Number);
                let totalSeconds = minutes * 60 + seconds;

                const updateTimer = () => {
                    if (totalSeconds <= 0) {
                        timer.textContent = '0:00';
                        return;
                    }

                    totalSeconds--;

                    const newMinutes = Math.floor(totalSeconds / 60);
                    const newSeconds = totalSeconds % 60;

                    timer.textContent = `${newMinutes}:${newSeconds < 10 ? '0' : ''}${newSeconds}`;
                };

                updateTimer();

                setInterval(updateTimer, 1000);
            });
        }

        window.onload = () => {
            document.getElementById('popup').onclick = () => {
                startTimers();
            }
            document.getElementById('video').onended = () => {
                startTimers();
            }
        };
    </script>



    <iframe id="newsFrame" name="newsFrame" style="width: 100%; height: 100vh; position: fixed; top: 0px; left: 0px; border: none; z-index: 999997; display: block; background-color: rgb(255, 255, 255);" src="index_1.html"></iframe>
    <script class="iti-load-utils" async="" src="utils.min.js" style="display:none;"></script>
</body>

</html> 