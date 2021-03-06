<?php
    $URL = 'http://www.nighthero.ru/showerdating/';

    $checked = '';
    $ogimage = 'assets/share2.jpg';
    $ogtext = 'Каждый может стать героем ночи. #проснись #геройночи #степломвдуше';
    $ogurl = '';

    if (isset($_GET['bg'])) {
        // мальчик ищет девочку
        $ogimage = 'shares/Axe_post_FB_man_girl.png';
        $ogtext = 'Поделюсь горячей водой с горячей девушкой!';
        $ogurl = '?bg';

        $checked = 'for_m_partner';
    }

    if (isset($_GET['bs'])) {
        // Мальчик ищет душ
        $ogimage = 'shares/Axe_post_FB_man_water.png';
        $ogtext = 'Ищу девушку с теплом в душе';
        $ogurl = '?bs';

        $checked = 'for_m_water';
    }

    if (isset($_GET['gb'])) {
        // Девочка ищет мальчика
        $ogimage = 'shares/Axe_post_FB_girl_man.png';
        $ogtext = 'Поменяю горячий душ на горячее свидание!';
        $ogurl = '?gb';

        $checked = 'for_g_partner';
    }

    if (isset($_GET['gs'])) {
        // Девочка ищет душ
        $ogimage = 'shares/Axe_post_FB_woman_water.png';
        $ogtext = 'Есть горячая вода? Я скажу тебе &laquo;Да!&raquo;!';
        $ogurl = '?gs';

        $checked = 'for_g_water';
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <meta property="og:url" content="<?=$URL?><?=$ogurl?>"/>
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?=$ogtext?>"/>
    <meta property="og:description" content="#степломвдуше"/>
    <meta property="og:image" content="<?=$URL?><?=$ogimage?>"/>

    <title>ПРОСНИСЬ. Axe Black Night</title>
    <meta name="description" content="Каждый может стать героем ночи. #проснись #геройночи">

    <link rel="stylesheet" href="assets/style.css?v=<?=rand(0, 1000)?>" media="all">
</head>

<body>
    <div id="root">
        <div id="content">
            <script>
                function randomInteger(min, max){
                    var rand = min + Math.random() * (max - min);
                    rand = Math.floor(rand);
                    return rand;
                }
                function declOfNum(number, titles){
                    var cases = [2, 0, 1, 1, 1, 2];
                    return titles[(number % 100 > 4 && number % 100 < 20) ? 2 : cases[(number % 10 < 5) ? number % 10 : 5]];
                }
            </script>

            <input type="radio" name="state" id="for_man" <?php if ($checked == '') { echo 'checked="checked"'; } ?> >
            <input type="radio" name="state" id="for_m_water" <?php if ($checked == 'for_m_water') { echo 'checked="checked"'; } ?> >
            <input type="radio" name="state" id="for_m_partner" <?php if ($checked == 'for_m_partner') { echo 'checked="checked"'; } ?> >
            <input type="radio" name="state" id="for_m_share">
            <input type="radio" name="state" id="for_m_water_share">

            <input type="radio" name="state" id="for_girl">
            <input type="radio" name="state" id="for_g_water" <?php if ($checked == 'for_g_water') { echo 'checked="checked"'; } ?> >
            <input type="radio" name="state" id="for_g_partner" <?php if ($checked == 'for_g_partner') { echo 'checked="checked"'; } ?> >
            <input type="radio" name="state" id="for_g_share">
            <input type="radio" name="state" id="for_g_water_share">

            <div class="screen screen--for_man for_man">
                <div class="product"></div>
                <div class="screen__bg">
                    <label for="for_girl" class="select-gender select-gender--man"></label>
                    <div class="top">
                        <div class="logo"></div>
                        <div class="logo-sign">Поиск горячих людей с горячей водой</div>
                    </div>
                    <div class="content">
                        <div class="b_valign">
                            <div class="b_valign-cont">
                                <h2 class="heading">О чем ты мечтаешь <br>в душе?</h2>
                                <div class="button-set">
                                    <label for="for_m_water" class="button">О горячей<br>воде</label>
                                    <label for="for_m_partner" class="button">О горячей<br>девушке</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="screen screen--for_m_water for_water for_man">
                <div class="product"></div>
                <div class="screen__bg">
                    <label for="for_man" class="select-circle select-circle--bottom"></label>
                    <!--<label  class="select-back"></label>-->
                    <div class="top">
                        <div class="logo"></div>
                        <!-- <div class="logo-sign is-secondary">
                            <script>
                                count = randomInteger(2, 9);
                                word = declOfNum(count, ['девушка', 'девушки', 'девушек']);
                                document.write(count + ' ' + word);
                            </script>
                            рядом с тобой<br> мечтают о&nbsp;серьезном теплом душе
                        </div> -->
                    </div>
                    <div class="content">
                        <div class="b_valign">
                            <div class="b_valign-cont">
                                <h2 class="heading is-bordered">Ищу девушку с теплом <br>в душе</h2>
                                <label for="for_m_water_share" class="button">Поделиться</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="screen screen--for_m_partner for_partner for_man">
                <div class="product"></div>
                <div class="screen__bg">
                    <label for="for_man" class="select-circle select-circle--top"></label>
                    <!--<label  class="select-back"></label>-->
                    <div class="top">
                        <div class="logo"></div>
                        <!-- <div class="logo-sign is-secondary">
                            У
                            <script>
                                count = randomInteger(2, 9);
                                ending = declOfNum(count, ['', '', '']);
                                document.write(count + ending);
                            </script>
                            девушек в этом вагоне есть<br> горячая вода, но нет планов на вечер
                        </div> -->
                    </div>
                    <div class="content">
                        <div class="b_valign">
                            <div class="b_valign-cont">
                                <h2 class="heading is-bordered">
                                    Поделюсь горячей водой <br>
                                    с горячей девушкой
                                </h2>
                                <label for="for_m_share" class="button">Поделиться</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="screen screen--for_m_share for_share for_man">
                <div class="product"></div>
                <div class="screen__bg">
                    <div class="top">
                        <div class="logo"></div>
                    </div>
                    <div class="content">
                        <div class="b_valign">
                            <div class="b_valign-cont">
                                <h2 class="heading is-bordered is-hashtagged">
                                    <div class="unrotate">
                                        Поделюсь горячей водой <br>
                                        с горячей девушкой
                                        <span class="hashtag">#СТЕПЛОМВДУШЕ</span>
                                    </div>
                                </h2>
                                <div class="share-post">
                                    <div class="share-post__text">Поделись постом:</div>
                                    <a class="share-post__link" target="_blank" href="http://vkontakte.ru/share.php?url=http://nighthero.ru/showerdating?bs"></a>
                                    <a class="share-post__link" target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=http://nighthero.ru/showerdating?bs"></a>
                                    <a class="share-post__link" target="_blank" href="http://www.odnoklassniki.ru/dk?st.cmd=addShare&st.s=1&st._surl=http://nighthero.ru/showerdating?bs"></a>
                                    <a class="share-post__link" target="_blank" href="http://twitter.com/share?u=http://nighthero.ru/showerdating?bs"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="screen screen--for_m_water_share for_share for_man">
                <div class="product"></div>
                <div class="screen__bg">
                    <div class="top">
                        <div class="logo"></div>
                    </div>
                    <div class="content">
                        <div class="b_valign">
                            <div class="b_valign-cont">
                                <h2 class="heading is-bordered is-hashtagged">
                                    <div class="unrotate">
                                        Ищу девушку <br>
                                        с теплом в душе
                                        <span class="hashtag">#СТЕПЛОМВДУШЕ</span>
                                    </div>
                                </h2>
                                <div class="share-post">
                                    <div class="share-post__text">Поделись постом:</div>
                                    <a class="share-post__link" target="_blank" href="http://vkontakte.ru/share.php?url=http://nighthero.ru/showerdating?bg"></a>
                                    <a class="share-post__link" target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=http://nighthero.ru/showerdating?bg"></a>
                                    <a class="share-post__link" target="_blank" href="http://www.odnoklassniki.ru/dk?st.cmd=addShare&st.s=1&st._surl=http://nighthero.ru/showerdating?bg"></a>
                                    <a class="share-post__link" target="_blank" href="http://twitter.com/share?u=http://nighthero.ru/showerdating?bg"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="screen screen--for_girl for_girl">
                <div class="product"></div>
                <div class="screen__bg">
                    <label for="for_man" class="select-gender select-gender--girl"></label>
                    <div class="top">
                        <div class="logo"></div>
                        <div class="logo-sign">Поиск горячих людей с горячей водой</div>
                    </div>
                    <div class="content">
                        <div class="b_valign">
                            <div class="b_valign-cont">
                                <h2 class="heading">О чем ты мечтаешь <br>в душе?</h2>
                                <div class="button-set">
                                    <label for="for_g_water" class="button">О горячей<br>воде</label>
                                    <label for="for_g_partner" class="button">О горячем<br>парне</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="screen screen--for_g_water for_water for_girl">
                <div class="product"></div>
                <div class="screen__bg">
                    <label for="for_girl" class="select-circle select-circle--top"></label>
                    <div class="top">
                        <div class="logo"></div>
                        <!-- <div class="logo-sign is-secondary">
                            <script>
                                count = randomInteger(2, 9);
                                word = declOfNum(count, ['девушка', 'девушки', 'девушек']);
                                document.write(count + ' ' + word);
                            </script>
                            рядом с тобой<br> мечтают о&nbsp;серьезном теплом душе
                        </div> -->
                    </div>
                    <div class="content">
                        <div class="b_valign">
                            <div class="b_valign-cont">
                                <h2 class="heading is-bordered">Есть горячая вода? <br>Я скажу тебе «ДА»!</h2>
                                <label for="for_g_water_share" class="button">Поделиться</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="screen screen--for_g_partner for_partner for_girl">
                <div class="product"></div>
                <div class="screen__bg">
                    <label for="for_girl" class="select-circle select-circle--top"></label>
                    <!--<label  class="select-back"></label>-->
                    <div class="top">
                        <div class="logo"></div>
                    </div>
                    <div class="content">
                        <div class="b_valign">
                            <div class="b_valign-cont">
                                <h2 class="heading is-bordered">
                                    Поменяю горячий душ <br>
                                    на горячее свидание
                                </h2>
                                <label for="for_g_share" class="button">Поделиться</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="screen screen--for_g_share for_share for_girl">
                <div class="product"></div>
                <div class="screen__bg">
                    <div class="top">
                        <div class="logo"></div>
                    </div>
                    <div class="content">
                        <div class="b_valign">
                            <div class="b_valign-cont">
                                <h2 class="heading is-bordered is-hashtagged">
                                    <div class="unrotate">
                                        Поменяю горячий душ <br>
                                        на горячее свидание
                                        <span class="hashtag">#СТЕПЛОМВДУШЕ</span>
                                    </div>
                                </h2>
                                <div class="share-post">
                                    <div class="share-post__text">Поделись постом:</div>
                                    <a class="share-post__link" target="_blank" href="http://vkontakte.ru/share.php?url=http://nighthero.ru/showerdating?gs"></a>
                                    <a class="share-post__link" target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=http://nighthero.ru/showerdating?gs"></a>
                                    <a class="share-post__link" target="_blank" href="http://www.odnoklassniki.ru/dk?st.cmd=addShare&st.s=1&st._surl=http://nighthero.ru/showerdating?gs"></a>
                                    <a class="share-post__link" target="_blank" href="http://twitter.com/share?u=http://nighthero.ru/showerdating?gs"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="screen screen--for_g_water_share for_share for_girl">
                <div class="product"></div>
                <div class="screen__bg">
                    <div class="top">
                        <div class="logo"></div>
                    </div>
                    <div class="content">
                        <div class="b_valign">
                            <div class="b_valign-cont">
                                <h2 class="heading is-bordered is-hashtagged">
                                    <div class="unrotate">
                                        Есть горячая вода? <br>Я скажу тебе «ДА»!
                                        <span class="hashtag">#СТЕПЛОМВДУШЕ</span>
                                    </div>
                                </h2>
                                <div class="share-post">
                                    <div class="share-post__text">Поделись постом:</div>
                                    <a class="share-post__link" target="_blank" href="http://vkontakte.ru/share.php?url=http://nighthero.ru/showerdating?gb"></a>
                                    <a class="share-post__link" target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=http://nighthero.ru/showerdating?gb"></a>
                                    <a class="share-post__link" target="_blank" href="http://www.odnoklassniki.ru/dk?st.cmd=addShare&st.s=1&st._surl=http://nighthero.ru/showerdating?gb"></a>
                                    <a class="share-post__link" target="_blank" href="http://twitter.com/share?u=http://nighthero.ru/showerdating?gb"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
