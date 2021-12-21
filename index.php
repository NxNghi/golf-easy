<?php
include_once "includes/functions.php";
template_part('header',[
    'page_title' => 'Golf-easy',
    'page_description' => '',
    'class' => 'home-page',
    'page' => 'home'
]);
?>
<!-- The start NAV part -->
<nav>
    <div class="container">
        <div class="logo">
            <div class="head__desct head__desct--logo">
                <h3 class="logo__h3">G<span class="logo__h3--sty">OLF-</span>EASY</h3>
                <h4 class="desct__logo">本格派シミュレーションゴルフ施設</h4>
            </div>
            <div class="head__desct head__desct--dis">
                <h3 class="desct__h3">完全会員制</h3>
                <h4 class="desct__text">コースボールの利用など、</h4>
                <h4 class="desct__text">会員規則がございます。</h4>
            </div>
            <div class="head__desct head__desct--per">
                <div class="head__triangle">
                    
                </div>
                <h3 class="desct__h3"><span>120</span>名</h3>
                <h3 class="desct__h3">限定</h3>
            </div>   
        </div>
        <div class="toggle">
            <div class="toggle__bar">
                <input type="checkbox" name="checkbox" class="bar__check">
                <div class="bar__line"></div>
                <div class="bar__line"></div>
                <div class="bar__line"></div>
            </div>
            <div class="toggle__links">
                <div class="links__center">
                    <ul class="center__list center__list--block">
                        <li><a href="#">TOP</a></li>
                        <li><a href="#">無料体験会</a></li>
                        <li><a href="#">施設紹介</a></li>
                        <li><a href="#">時間・料金</a></li>
                        <li><a href="#">WEB予約・お問合わせ</a></li>
                    </ul>
                    <ul class="center__list center__list--img">
                        <li><a href="#"><img src="<?php assets('images/tg-line.png')?>" alt="img-line"></a></li>
                        <li><a href="#"><img src="<?php assets('images/tg-twiter.png')?>" alt="img-twiter"></a></li>
                        <li><a href="#"><img src="<?php assets('images/tg-intagram.png')?>" alt="img-intagram"></a></li>
                        <li><a href="#"><img src="<?php assets('images/tg-face.png')?>" alt="img-facebook"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- The end nav part -->
<?php template_part('tg-slide'); ?>  
<!-- Section slider start! -->

<!-- Section slider end! -->
<!-- the section first -->

<section class="content content--first">
    <div class="content__container">  
        <div class="first__style">
            <h4 class="first__style--h2"><span>本格スタイル。</span></h4>
            <h4 class="first__style--h2">
                 関市初、
            </h4>
            <p class="first__style--p">本格的なゴルフを堪能したい貴方へ</p>
            <p class="first__style--p">無人シミュレーションゴルフ場。</p>
            <p class="first__style--p">関市初の24時間・年中無休</p>
        </div>
        <?php template_part('content-bottom'); ?>
    </div>     
</section>
    <!-- The end section first -->
    <!-- The start section second -->
<section class="content content--second">
    <div class="content__container">
        <div class="second__sty">
            <div class="second__left">
                <!--  the code content -->
                <h6 class="second__left--p">期間内であっても終了とさせていただきます。</h6>
                <h6 class="second__left--p">※会員数が1 2 0名に達した場合は、</h6>
                <h4 class="second__left--h4">
                    <p class="left__sty">120</p>
                    <span>名。</span>
                </h4>
                <h4 class="second__left--h4">選ばれし</h4>
                <h4 class="second__left--h4">会員は</h4>
            </div>
            <div class="second__right">
                <div class="second__img">
                    <img src="<?php assets('images/line.png')?>" class="img__sty">
                    <img src="<?php assets('images/twiter.png')?>" class="img__sty">
                    <img src="<?php assets('images/intagram.png')?>" class="img__sty">
                    <img src="<?php assets('images/face.png')?>" class="img__sty">
                </div>
                <div class="second__content">
                    <h6>最新情報は各SNS等でもご確認いただけます。</h6>
                    <h3>オープン前無料体験会</h3>
                    <h4>2021年12月14日〜2021年12月16日</h4>
                    <p>※無料体験時は公共交通機関か最寄りのパーキングをご利用ください。</p>
                    <button class="content__btn">お問い合わせ <span> ></span></button>
                </div>
            </div>
        </div>
        <?php template_part('content-bottom'); ?>
    </div>
</section>
<!-- The end section second -->
<!-- The start section third -->
<section class="content content--third">
    <div class="content__container">
        <div class="third__sty">
            <!--  the code content -->
            <div class="third__head">
                <h3>3ブース（3打席）限定、貸し切り・事前予約制。</h3>
                <h3>スマートロックで完全なプライベート空間を実現。</h3>
            </div>
            <div class="third__tab">
                <div class="tab tab--one">
                    <h2>01</h2>
                    <div class="tab__content">
                        <h3>関市初</h3>
                        <h3>シミュレーションマシン</h3>
                        <h3>スカイトラック導入</h3>
                        <p>左右両打席に</p>
                        <p>操作パネル・ディスプレイ・</p>
                        <p>スイングモーションカメラを設置。</p>
                        <p>コースの傾斜に合わせて</p>
                        <p>打席の床面が動くリアルプレートも装備。</p>

                    </div>
                </div>
                <div class="tab__duo">
                    <div class="tab tab__two">
                        <h2>02</h2>
                        <div class="tab__content">
                            <h3>関市初</h3>
                            <h3>24時間365日運営</h3>
                            <p>国内の男女ツアーで使用されるコースを中心に</p>
                            <p>承認が得られたゴルフ場のみを搭載。</p>
                        </div>
                    </div>
                    <div class="tab tab__three">
                        <h2>03</h2>
                        <div class="tab__content">
                            <h3>岐阜最大級</h3>
                            <h3>5Mクラスのスクリーン</h3>
                            <p>4.7メートルの大画面で室内ながら</p>
                            <p>実際にホールにいるような感覚でプレーできます。</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php template_part('content-bottom') ?>
    </div>
</section>
<!-- The end section third -->
<!-- The start section four -->
<section class="content content--four">
    <div class="content__container">
        <div class="four__sty">
            <div class="four__title">
                <h3>オープンキャンペーン</h3>
                <h3>2022年3月31日までにご入会の方は入会金無料！</h3>
            </div>
            <div class="four__tab four__tab--one">
                <table>
                    <tbody>
                        <tr>
                            <td>営業時間</td>
                            <td>24時間営業・年中無休</td>
                        </tr>
                        <tr>
                            <td>利用時間 </td>
                            <td>1枠 60分</td>
                        </tr>
                        <tr>
                            <td>予約方法 </td>
                            <td>1予約毎（予約消化後、次の予約が可能）※回数制限はありません。（通い放題となります）</td>
                        </tr>
                        <tr>
                            <td>利用人数</td>
                            <td>会員様+同伴2名（同伴者様は無料）　合計3名まで入室可能 </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- The table start -->
            <div class="four__tab four__tab--two">
                <table>
                    <tbody>
                        <tr>
                            <td></td>
                            <td>平日会員（平日9時～18時）</td>
                            <td>VIP会員（全日利用可能）</td>
                        </tr>
                        <tr>
                            <td>入会金</td>
                            <td class="td__sty">
                                <p class="p--sty">11,000円（税込）
                                </p>
                                <span>0円</span>
                            </td>
                            <td class="td__sty">
                                <p class="p--sty">11,000円（税込）
                                </p>
                                <span>0円</span>
                            </td>
                        </tr>
                        <tr>
                            <td>事務手数料</td>
                            <td>3,300円（税込）</td>
                            <td>3,300円（税込）</td>
                        </tr>
                        <tr>
                            <td>月会費</td>
                            <td>6,600円（税込）</td>
                            <td>8,800円（税込）</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--  the code content -->
        </div>
        <?php template_part('content-bottom'); ?>
    </div>
</section>
<!-- The end section four -->
<!-- The start section five -->

<section class="content content--five">
    <div class="content__container">
        <div class="five__sty">
            <div class="five__head">
                <div class="five__left">
                    <div class="five__tab">
                        <table>
                            <tbody>
                                <tr>
                                    <td>住所</td>
                                    <td>〒501-3244</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>岐阜県関市西福野町１丁目１０−１７</td>
                                </tr>
                                <tr>
                                    <td>電話</td>
                                    <td>0000-0000-0000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="five__desct">
                            <h4>無料体験会のご予約、</h4>
                            <h4>空きスケジュールの確認、</h4>
                            <h4>お問い合わせは</h4>
                            <h4>下記よりお願いいたします。</h4>
                    </div>   
                </div>
                <div class="five__right">
                    <img src="<?php assets('images/map.png'); ?>">
                </div>
            </div>
            <div class="five__botton">
                <div class="botton__btn botton__btn--left">
                    <p>WEB予約</p>
                </div>
                <div class="botton__btn botton__btn--center">
                    <p>LINEでの</p>
                    <p>お問い合わせ</p>
                </div>
                <div class="botton__btn botton__btn--right">
                    <p>000-000-0000</p>
                    <p>
                        <span>0:00〜0：00（平日）
                        </span>
                    </p>
                </div>
            </div>
            <!--  the code content -->
        </div>
    </div>
</section>
<!-- The end section five -->
<!-- The start section six -->
<section class="content content--six">
    <div class="content__container">
        <div class="six__sty">
            <!--  the code content -->
            <div class="six__form">
                <form action="#" class="six__form--sty">
                    <div>
                        <label class="form__label--one" for="fname">お名前  <span>※必須</span></label>
                        <input id="fname" type="text" name="textname1">
                        <label class="form__label--two" for="fname">お名前  <span>※必須</span></label>
                        <input id="fname" type="text" name="textname2">
                    </div>
                    <div>
                        <label class="form__label--three" for="fname">お名前  <span>※必須</span></label>
                        <input id="fname" type="text" name="textname3">
                        <label class="form__label--four" for="fname">お名前  <span>※必須</span></label>
                        <input id="fname" type="text" name="textname4">
                    </div>
                    <label class="form__label--five" for="textarea">お問い合わせ内容</label>
                    <textarea id="textarea"></textarea class="form__label">
                    <input type="submit" name="submit" value="確認画面に進む">
                </form>
            </div>
        </div>
        <div class="six__footer">
            <img src="<?php assets('images/logo-ft.png') ?>">
            <h3>Copyright © 2021 ゴルフイージー GOLF EASY | 関市初。24時間営業・年中無休のシミュレーションゴルフ場 All rights Reserved. </h3>
        </div>
    </div>
</section>
<!-- The end section six -->

<?php
template_part('footer');
?>