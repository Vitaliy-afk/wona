<?php
    function get_curl_response( $url ) {

        $curl = curl_init( $url );
        curl_setopt( $curl, CURLOPT_URL, $url );
        curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
    
        $headers = array(
            "Content-Type: application/json",
            "Accept: application/json",
        );
        curl_setopt( $curl, CURLOPT_HTTPHEADER, $headers );
    
        curl_setopt( $curl, CURLOPT_SSL_VERIFYHOST, false );
        curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, false );
    
        $resp = curl_exec( $curl );
        curl_close( $curl );
    
        $resp = json_decode($resp);
    
        return $resp;
    }

    $products_posts = get_curl_response( 'https://www.wona.co.il/test_8192735.php' );

?>

<!DOCTYPE html>
<html dir="rtl" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wona</title>
	<link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <div id="wrapper">
        <header id="header">
            <div class="container">
                <div class="burger-wrap">
                    <a href="#" class="burger"></a>
                </div>
            </div>
            <div class="open-menu">
                <div class="container">
                    <ul class="open-menu__list">
                        <li class="open-menu__list-item">
                            <a href="#">שדח</a>
                        </li>
                        <li class="open-menu__list-item">
                            <a href="#">HEBA COSMETICS</a>
                        </li>
                        <li class="open-menu__list-item">
                            <a href="#">GAMESCAPE COLLECTION</a>
                        </li>
                        <li class="open-menu__list-item">
                            <a href="#">HEALTHY GLOW</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <main id="main">
            <div class="slider-block">
                <div class="slider">
                    <div class="slider__item" style="background-image: url('./assets/image/slider_1.png');"></div>
                    <div class="slider__item" style="background-image: url('./assets/image/slider_2.png');"></div>
                    <div class="slider__item" style="background-image: url('./assets/image/slider_3.png');"></div>
                </div>
            </div>
            <div class="content">
                <div class="container">
                    <div class="content__block">
                        <div class="content__title">
                            <div>
                                <h1>?םוספיא םרול ,לאזעזעל ,הז המ</h1>
                                <p>וא טסקט ימד םג םימעפל ארקנה - ןיטולחל תועמשמ רסח טסקטל יוניכ אוה םוספיא םרול
                                    ירתא ,תועדומ ,םיניזגמ ,םינולע לש - תויבוציע תוציקסב םקוממ תויהל דעוימו - שירבי'ג
                                </p>
                            </div>
                        </div>
                        <div class="content__bc">
                            <a class="dropdawn" href="#">read more</a>
                        </div>
                        <div class="dropdawn-open">
                            <p>
                            טסקט םקמל ץלמומ אל ,יטנוולרה טסקטה םייק אל ןיידע תיבוציעה הציקסה בלשב םא
                            אורקל הפוצה ליחתי ,אירק יתימא טסקט םע הציקס תגצה תעב יכ ,איה הביסה .רחא יתימא
                            תא חיסי רבדה - תגצומה הדובעל יטנוולר אל טסקטה ןכות םאו ,טסקטה תא תיטמוטוא
                            </p>
                        </div>
                    </div>
                    <?php if( $products_posts ) : ?>
                        <div class="content__items">
                            <ul class="content__list">
                                <?php foreach( $products_posts as $item ) :
                                    $link = $item->link;
                                    $image = $item->image;
                                    $title = $item->title;
                                    $price = $item->price;
                                ?>
                                    <li class="content__list-item">
                                        <?php if( $image ) : ?>
                                            <figure>
                                                <img src="<?php echo $image; ?>" alt="<?php echo $tile; ?>">
                                            </figure>
                                        <?php endif ?>
                                        <?php if( $title ) : ?>
                                            <span><?php echo $title; ?></span>
                                        <?php endif ?>
                                        <ul class="col-price">
                                            <?php if( $link ) : ?>
                                                <li>₪<?php echo $price; ?></li>
                                            <?php endif ?>
                                            <li>םיעבצ4</li>
                                        </ul>
                                        <?php if( $link ) : ?>
                                            <a href="<?php echo $link; ?>">סקירה מהירה</a>
                                        <?php endif ?>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    <?php endif ?>
                </div>
            </div>
        </main>
    </div>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="./assets/js/slick.min.js"></script>
	<script src="./assets/js/jquery.main.js"></script>
	<script src="./assets/js/app.js"></script>
</body>
</html>