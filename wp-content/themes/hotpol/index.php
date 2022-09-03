<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HotPol - Pomoc Drogowa</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/fav.png" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/swiper.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/glightbox.css" />
</head>

<body>
    <main>
        <nav>
            <div id="nav" class="navigation">
                <div class="nav-container" style="position: relative;">
                    <div class="nav-in">
                        <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="">
                        <img class="line" src="<?php echo get_template_directory_uri();?>/img/Line 14.png" alt="">
                        <div class="double">
                            <p>POMOC DROGOWA</p>
                            <p style="">WARSZAWA I OKOLICE</p>
                        </div>
                    </div>
                    <ul class="ul-nav-one">
                        <a href="#s0"><li><p>STRONA GŁÓWNA</p></li></a>
                        <a href="#s1"><li><p>O FIRMIE</p></li></a>
                        <a href="#s2"><li><p>GALERIA</p></li></a>
                        <a href="#s3"><li><p>KONTAKT</p></li></a>
                    </ul>
                    <div class="social-container">
                        <img src="<?php echo get_template_directory_uri();?>/img/Icon ionic-logo-facebook.png" alt="">
                        <img src="<?php echo get_template_directory_uri();?>/img/Icon feather-instagram.png" alt="">
                    </div>
                    <ul class="ul-nav width">
                        <li><p>SZYBKA POMOC</p></li>
                    </ul>

                </div>
                <div id="nav-ham">
                    <img src="<?php echo get_template_directory_uri();?>/img/ham.png" alt="">
                </div>
            </div>
        </nav>

        <div class="full-width-bg" id="s0" style="background: #fff;">
            <div class="full-width">
                <div class="left-up">
                    <div class="text">
                    <h1>Nasza <b>pomoc drogowa</b> jest do Państwa dyspozycji</h1>
                        <hr>
                        <p id="rollText">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam</p>
                        <img id="rollDown" src="<?php echo get_template_directory_uri();?>/img/Icon metro-chevron-thin-down.png" alt="">
                    </div>
                </div>
                <div class="right-down">
                <div class="overlay-container">
                <div class="swiper mySwiper"><div class="swiper-wrapper">
<?php $ss = get_field('slider', 'options'); ?>
<?php if($ss): ?>  
<?php foreach($ss['zdjecia'] as $key => $src): ?>
                    <div class="swiper-slide">
                        <div class="overlay"></div>
                        <img style="width: 100%;" class="img-call-for-help" src="<?php echo $src['zdjecie']['url'] ;?>" alt="">
                    </div>
<?php endforeach; ?>
<?php endif; ?>
</div></div>
                        <div class="right-down-absolute ">
                            <div class="arrow-left swiper-button-prev" style="z-index: 5">
                                <img src="<?php echo get_template_directory_uri();?>/img/Icon metro-chevron-thin-down-2.png" alt="">
                            </div>
                            <div class="arrow-right swiper-button-next" style="z-index: 5">
                                <img src="<?php echo get_template_directory_uri();?>/img/Icon metro-chevron-thin-down-1.png" alt="">
                            </div>
                            <div class="customer-delivery" style="z-index: 5;">
                                <div class="car-pictogram">
                                    <img src="<?php echo get_template_directory_uri();?>/img/car/Line 2.png" alt="">
                                    <img src="<?php echo get_template_directory_uri();?>/img/car/Group 1.png" alt="">
                                    <img src="<?php echo get_template_directory_uri();?>/img/car/Line 3.png" alt="">
                                    <img src="<?php echo get_template_directory_uri();?>/img/car/Line 4.png" alt="">
                                    <img src="<?php echo get_template_directory_uri();?>/img/car/Line 5.png" alt="">
                                    <img src="<?php echo get_template_directory_uri();?>/img/car/Line 6.png" alt="">
                                    <img src="<?php echo get_template_directory_uri();?>/img/car/Rectangle 7.png" alt="">
                                    <img src="<?php echo get_template_directory_uri();?>/img/car/Line 7.png" alt="">
                                    <img src="<?php echo get_template_directory_uri();?>/img/car/Line 8.png" alt="">
                                </div>
                                <h1>30 min</h1>
                                <h2>czas dojazdu do klienta</h2>
                                <p>Jesteśmy do Państwa dyspozycji</p>
                                <p>365 dni w roku 24 godziny na dobę!</p>
                            </div>

                            <div class="call-for-help" style="z-index: 5;">
                                <h2>Zadzwoń po pomoc</h2>
                                <p class="time-to-go">Czas dojazdu do Klienta w Warszawie to ok. 30 min. od chwili zgłoszenia</p>
                                <div class="call-phone-container">
                                    <img src="<?php echo get_template_directory_uri();?>/img/Icon material-phone.png" alt="">
                                    <div class="phones">
                                        <a href="tel:+48601225070"><p>601 22 50 70</p></a>
                                        <a href="tel:+48501115070"><p>501 11 50 70</p></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="full-width-bg" id="s1" style="background: var(--gray); ">
            <div class="full-width-sd">
                <div class="left-up2">
                    <div class="overlay-relative">
                        <div class="overlay"></div>
                        <img src="<?php echo get_template_directory_uri();?>/img/Rectangle 13.png" alt="">
                    </div>
                </div>
                <div class="right-down2">
                    <div class="about-the-company">
                        <div class="margin-div" style="margin-right: 100px;">
<?php $sf = get_field('o_firmie', 'options'); ?>
<?php if($sf): ?>
                            <h1 class="about-company-title"><?php echo $sf['tytul'] ;?></h1>     
<?php foreach($sf['opis'] as $key => $src): ?>
                            <p><?php echo $src['paragraf']; ?></p>
<?php endforeach; ?>
                            <p class="read-more">Czytaj WIĘCEJ</p>
                        </div>
                        <div class="horizontal-text-container">
                            <h1><?php echo $sf['lat_na_rynku'] ;?> LAT NA RYNKU</h1>
                            <div class="arrow-right">
                                <img src="<?php echo get_template_directory_uri();?>/img/Icon metro-chevron-thin-down-1.png" alt="">
                            </div>
                        </div>

<?php endif; ?>
                    </div>
                </div>
            </div> 
        </div>
<div class="relative" id="s2">
    <div class="bg-overlay"></div>
    <div class="full-width-bg"> 
    </div>
    <div class="z-index">
        <h1>Galeria zdjęć</h1>
        <p style="">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
        <div class="margin-auto">
        <div class="img-grid-container">                 
         
<?php $sg = get_field('galeria', 'options'); ?>
<?php if($sg): ?>  
<?php foreach($sg as $key => $src): ?>       
        <a class="glightbox3" href="<?php echo $src['zdjecie']['url'] ;?>">
            <div class="relative">
                <div class="img-overlay-hover">
                    <div class="desc">
                        <p style="padding: 0; width: auto"><?php echo $src['tytul'] ;?></p>                        
                    </div> 
                    <img class="horizont-icon" src="<?php echo get_template_directory_uri();?>/img/Icon feather-more-horizontal.png"  alt="">
                    <img class="zoom-icon" src="<?php echo get_template_directory_uri();?>/img/Icon feather-zoom-in.png" alt="">
                </div>
                <img src="<?php echo $src['zdjecie']['url'] ;?>" width="382" height="265" alt="">
            </div></a>
<?php endforeach; ?>
<?php endif; ?>
        </div>
    </div>
    </div>
</div>
<div class="territory">
<div class="full-width">
    <div class="left-up3">
        <h1>Obszar Działania</h1>
        <p ><b>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. </b></p>
        <p class="t-p"></p>>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet</p>
        <p class="t-p">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        <p class="t-p">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet</p>
        <div class="territory-flex">
            <p class="read-more">zobacz mapę</p>
            <div class="arrow-right arrow-right-t">
                <img src="<?php echo get_template_directory_uri();?>/img/Icon metro-chevron-thin-down-1.png" alt="">
            </div>
        </div>

    </div>
    <div class="right-down3">
        <div class="overlay-map">
            <h1 class="rd-h1"><span>Dzielnice</span> Warszawy</h1>
<?php $so = get_field('obszar_dzialania', 'options'); ?>
<?php if($so): ?>
            
            <?php if(in_array('Białołęka', $so )): ?>
            <div class="district bialoleka">
                <div class="circle">
                    <img src="<?php echo get_template_directory_uri();?>/img/logo-1.png" alt="">
                </div>
                <h2 class="district-title">BIAŁOŁĘKA</h2>
            </div>   
            <?php endif; ?>
            
            <?php if(in_array('Bielany', $so )): ?>         
            <div class="district bielany">
                <div class="circle">
                    <img src="<?php echo get_template_directory_uri();?>/img/logo-1.png" alt="">
                </div>
                <h2 class="district-title">BIELANY</h2>
            </div>   
            <?php endif; ?>
            
            <?php if(in_array('Targówek', $so )): ?>  
            <div class="district targowek">
                <div class="circle">
                    <img src="<?php echo get_template_directory_uri();?>/img/logo-1.png" alt="">
                </div>
                <h2 class="district-title">TARGÓWEK</h2>
            </div>
            <?php endif; ?>
            
            <?php if(in_array('Praga płd', $so )): ?> 
            <div class="district praga-pol">
                <div class="circle">
                    <img src="<?php echo get_template_directory_uri();?>/img/logo-1.png" alt="">
                </div>
                <h2 class="district-title">PRAGA PLD</h2>
            </div> 
            <?php endif; ?>
            
            <?php if(in_array('Mokotów', $so )): ?> 
            <div class="district mokotow">
                <div class="circle">
                    <img src="<?php echo get_template_directory_uri();?>/img/logo-1.png" alt="">
                </div>
                <h2 class="district-title">MOKOTÓW</h2>
            </div> 
            <?php endif; ?>

            <?php if(in_array('Wawer', $so )): ?> 
            <div class="district wawer">
                <div class="circle">
                    <img src="<?php echo get_template_directory_uri();?>/img/logo-1.png" alt="">
                </div>
                <h2 class="district-title">WAWER</h2>
            </div> 
            <?php endif; ?>

            <?php if(in_array('Wilanów', $so )): ?>           
            <div class="district wilanow">
                <div class="circle">
                    <img src="<?php echo get_template_directory_uri();?>/img/logo-1.png" alt="">
                </div>
                <h2 class="district-title">WILANÓW</h2>
            </div>
<?php endif; ?><?php endif; ?>
            <div class="overlay-gradient"></div>
            <img src="<?php echo get_template_directory_uri();?>/img/Image 2.png" alt="">
        </div>
    </div>
</div>
</div>
<div class="contact" id="s3">
    <div class="max-width-contact">
        <div class="left-up4" >
            <h1 class="contact-h1">Napisz do nas</h1>
            <form method="POST" action="https://formspree.io/czawiel@gmail.com">
                <div class="contact-area">
                    <div class="field" style="">
                        <textarea name="message" type="message" placeholder="Imię i nazwisko"></textarea>                        
                        <textarea name="message" type="phone" placeholder="Telefon"></textarea>                        
                        <textarea name="message" type="topic" placeholder="Temat wiadomości"></textarea>                        
                        <textarea name="message" type="email" placeholder="Adres e-mail"></textarea>
                    </div>
                    <div class="content" style="">
                        <textarea name="message" type="message" placeholder="Treść wiadomości"></textarea>
                    </div>
                </div>
            </form>
        </div>
        <div class="right-down4">
            <form method="POST" action="https://formspree.io/czawiel@gmail.com">
                <div class="checkbox-flex" style="">
                    <input type="checkbox" id="horns" name="horns">
                    <label for="horns">*Wyrażam zgodę na przetwarzanie moich danych osobowych.</label>
                </div>
                <div class="territory-flex">
                    <p class="read-more">wyślij wiadomość</p>
                    <div type="submit" class="arrow-right-t arrow-right type">
                        <img src="<?php echo get_template_directory_uri();?>/img/Icon metro-chevron-thin-down-1.png" alt="">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<footer>
    <div class="max-width-footer">
        <div class="one">
            <p class="title">HOLPOL <span>Pomoc drogowa Warszawa i okolice</span></p>
            <div class="f-flex" style="">
                <img src="<?php echo get_template_directory_uri();?>/img/Icon awesome-phone-alt.png" alt="">
                <a href="tel:+48601225070"><p>601 22 50 70</p></a>
            </div>
            <div class="f-flex">
                <img src="<?php echo get_template_directory_uri();?>/img/Icon awesome-phone-alt.png" alt="">
                <a href="tel:+48501115070"><p>501 11 50 70</p></a>
            </div>
            <div class="f-flex">
                <img src="<?php echo get_template_directory_uri();?>/img/Icon feather-mail.png" alt="">
                <a href="mailto:holpol@holpol.pl"><p>holpol@holpol.pl</p></a>
            </div>
        </div>        
        <div class="two">
            <p class="title">365 dni w roku do dyspozycji</p>
            <ul>
                <a href="#s0"><li><p>Strona główna</p></li></a>
                <a href="#s1"><li><p>O firmie</p></li></a>
                <a href="#s2"><li><p>Galeria</p></li></a>
                <a href="#s3"><li><p>Kontakt</p></li></a>
            </ul>
        </div>          
        <div class="three">
        <p class="title">Działamy w rejonach:</p>
<?php $s = get_field('dzialamy_w_rejonach', 'options'); ?>
<?php if($s): ?>
        <p><?php echo $s; ?></p>
<?php endif; ?>
        </div>        
        
        <div class="four">
            <img src="<?php echo get_template_directory_uri();?>/img/Icon ionic-logo-facebook-1.png" alt="">
            <img src="<?php echo get_template_directory_uri();?>/img/Icon feather-instagram-1.png" alt="">
            <img src="<?php echo get_template_directory_uri();?>/img/Icon awesome-youtube.png" alt="">
        </div>
    </div>
    <hr style="opacity: .2">
    <div class="max-width-footer-bottom">  
        <p>Wszystkie prawa zastrzeżone dla HOLPOL</p>
        <p>Wykonanie strony: CoolBrand.pl</p>
    </div>
</footer>

</main>


<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/glightbox.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/swiper.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/script.js"></script>

<script type="text/javascript">

//Swiper Slider
const swiper = new Swiper('.mySwiper', {
        autoplay: {
                delay: <?php echo $ss['czas_przesuwania_slidera'];?>000,
                disableOnInteraction: true,
            },
        direction: 'horizontal',
        loop: true,
        navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

</script>

</body>
</html>