<?
$sub_h_num = 1;
$main_nav = '회사소개';
$main_desc = '모아건설은 대한민국 건설을 밝히고
활력을 불어넣을 것입니다.';
$sub_num = 1;
$sub_nav = 5;

include '../../../../common.php';
include_once(G5_THEME_PATH.'/head.php');

?>



















<div class="info_05">
                    <div class="inner">
                        <h2>오시는 길</h2>
                        <figure>
                            <img src="<?= G5_THEME_URL ?>/img/info_05_01.jpg" alt="">
                        </figure>
                        <div class="map">

                            <div id="daumRoughmapContainer1676274428690"
                                class="root_daum_roughmap root_daum_roughmap_landing" style="width:100%;"></div>


                            <script charset="UTF-8" class="daum_roughmap_loader_script"
                                src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>


                            <script charset="UTF-8">
                                new daum.roughmap.Lander({
                                    "timestamp": "1676274428690",
                                    "key": "2dq6k",
                                    // "mapWidth": "100%",
                                    "mapHeight": "500"
                                }).render();
                            </script>
                        </div>
                        <div class="map_info">
                            <ul>
                                <li>
                                    <img src="<?= G5_THEME_URL ?>/img/map_icon_locate.png" alt="">
                                    <strong>주소</strong>
                                    <span>광주광역시 북구 북문대로 161, 3층 모아건설(주)</span>
                                </li>
                                <li>
                                    <img src="<?= G5_THEME_URL ?>/img/map_icon_call.png" alt="">
                                    <strong>전화</strong>
                                    <span>062) 520-0101</span>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

 








<?php
include_once(G5_THEME_PATH.'/tail.php');
?>