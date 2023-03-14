<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>







<main>
            <section class="mainVisual">
                <div class="swiper main_slide">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide itm01">
                            <div class="text_box">
                                <figure>
                                    <img src="<?= G5_THEME_URL?>/img/visual_txt01-01.png" alt="">
                                </figure>
                                <figure>
                                    <img src="<?= G5_THEME_URL?>/img/visual_txt01-02.png" alt="">
                                </figure>
                                <p>
                                    어두운 도시의 화려한 조명이 도시의 밤을 활기차게 합니다.
                                    <br />
                                    모아건설은 대한민국 건설을 밝히고 활력을 불어넣을 것입니다.
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide itm02">
                            <div class="text_box" data-aos="fade-left">
                                <figure>
                                    <img src="<?= G5_THEME_URL?>/img/visual_txt02_01.png" alt="">
                                </figure>
                                <figure>
                                    <img src="<?= G5_THEME_URL?>/img/visual_txt02_02.png" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="swiper-slide itm03">
                            <div class="text_box">
                                <figure>
                                    <img src="<?= G5_THEME_URL?>/img/visual_txt03_1.png" alt="">
                                </figure>
                                <figure>
                                    <img src="<?= G5_THEME_URL?>/img/visual_txt03_02.png" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="scroll_down">
                        <i class="xi-angle-down"></i>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </section>
            <section class="mainProduct">

                <div class="inner" data-aos="fade-left" data-aos-once="true">
                    <div class="tit">
                        <h2>PRODUCT</h2>
                        <b>진행중인 사업</b>
                        <p>경험과 노하우를 고집하지 않고
                            선진기술과 미래적인 혁신으로
                            건설문화를 앞장서겠습니다.</p>
                    </div>
                    <div class="tab_wrap">
                        <ul class="tab_select">
                            <li class="on">
                                <a href="#!">경기</a>
                            </li>
                            <li>
                                <a href="#!">충남</a>
                            </li>
                            <li>
                                <a href="#!">오산</a>
                            </li>
                        </ul>
                        <ul class="tab">
                            <li class="on">
                                <div class="case">
                                    <figure>
                                        <img src="<?= G5_THEME_URL?>/img/main_product01.jpg" alt="">
                                    </figure>
                                    <div class="text">
                                        <h3>평택 고덕국제신도시 A50블럭</h3>
                                        <ul>
                                            <li>
                                                <b>분양일</b>
                                                <p>2024년 05월</p>
                                            </li>
                                            <li>
                                                <b>총 세대수</b>
                                                <p>642세대(사전청약 578세대)</p>
                                            </li>
                                        </ul>
                                        <span>
                                            <a href="">
                                                자세히 보기
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="case">
                                    <figure>
                                        <img src="<?= G5_THEME_URL?>/img/main_product02.jpg" alt="">
                                    </figure>
                                    <div class="text">
                                        <h3>충남 내포신도시 모아미래도 메가시티 2차</h3>
                                        <ul>
                                            <li>
                                                <b>분양일</b>
                                                <p>2022년 02월</p>
                                            </li>
                                            <li>
                                                <b>총 세대수</b>
                                                <p>836세대</p>
                                            </li>
                                        </ul>
                                        <span>
                                            <a href="">
                                                자세히 보기
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="case">
                                    <figure>
                                        <img src="<?= G5_THEME_URL?>/img/main_product03.jpg" alt="">
                                    </figure>
                                    <div class="text">
                                        <h3>오산 세교2지구 모아미래도</h3>
                                        <ul>
                                            <li>
                                                <b>분양일</b>
                                                <p>2022년 10월</p>
                                            </li>
                                            <li>
                                                <b>총 세대수</b>
                                                <p>414세대</p>
                                            </li>
                                        </ul>
                                        <span>
                                            <a href="">
                                                자세히 보기
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </section>
            <section class="mainProject">
                <div class="inner">
                    <div class="tit">
                        <h2>PROJECT</h2>
                        <b>미래도 사업</b>
                        <p>만족을 넘어 감동을 전하는 그순간까지
                            모아건설은 쉬지 않습니다</p>
                    </div>
                    <div class="project">
                        <div class="itm itm01" data-aos="flip-left" data-aos-once="true">
                            <a href="<?= G5_THEME_URL?>/doc/m03/m03_01.php">
                                <div class="text">
                                    <b>주택사업</b>
                                    <p>HOUSING BUSINESS</p>
                                </div>
                                <figure>
                                    <img src="<?= G5_THEME_URL?>/img/main_project01.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="itm itm02" data-aos="flip-left" data-aos-delay="100" data-aos-once="true">
                            <a href="">
                                <div class="text">
                                    <b>건축사업</b>
                                    <p>BUILDING PROJECT</p>
                                </div>
                                <figure>
                                    <img src="<?= G5_THEME_URL?>/img/main_project02.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="itm itm03" data-aos="flip-left" data-aos-delay="200" data-aos-once="true">
                            <a href="">
                                <div class="text">
                                    <b>토목사업</b>
                                    <p>CIVIL ENGINEERING</p>
                                </div>
                                <figure>
                                    <img src="<?= G5_THEME_URL?>/img/main_project03.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="itm itm04" data-aos="flip-left" data-aos-delay="300" data-aos-once="true">
                            <a href="">
                                <div class="text">
                                    <b>조경사업</b>
                                    <p>LANDSCAPING BUSINESS</p>
                                </div>
                                <figure>
                                    <img src="<?= G5_THEME_URL?>/img/main_project04.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="mainNews">
                <div class="inner">
                    <div class="tit">
                        <h2>NEWS</h2>
                        <p>최근 소식을 안내 드립니다.</p>
                    </div>
                    <div class="notice">
                        <strong>
                            공지사항
                        </strong>
                        <?php echo latest('theme/notice', 'notice01', 5, 23);?>
                        <!-- <ul>
                            <li>
                                <a href="">Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet
                                    consectetur.Lorem ipsum dolor sit amet consectetur.</a>
                                <span>Lorem, ipsum.</span>
                            </li>
                            <li>
                                <a href="">Lorem ipsum dolor sit amet consectetur.</a>
                                <span>Lorem, ipsum.</span>
                            </li>
                            <li>
                                <a href="">Lorem ipsum dolor sit amet consectetur.</a>
                                <span>Lorem, ipsum.</span>
                            </li>
                            <li>
                                <a href="">Lorem ipsum dolor sit amet consectetur.</a>
                                <span>Lorem, ipsum.</span>
                            </li>
                            <li>
                                <a href="">Lorem ipsum dolor sit amet consectetur.</a>
                                <span>Lorem, ipsum.</span>
                            </li>
                        </ul> -->
                    </div>
                </div>
            </section>
        </main>


















<?php
include_once(G5_THEME_PATH.'/tail.php');