<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>


<?php
    if(!defined('_INDEX_')) { // index가 아닐 떄...
        include G5_THEME_PATH.'/sub_t.php'; // 서버페이지 푸터...
    }
?>









<footer class="footer">
            <div class="inner">
                <a href="/">
                    <img src="<?= G5_THEME_URL?>/img/logo.png" alt="">
                </a>
                <div class="desc">
                    <p>
                        주소 : 광주광역시 북구 북문대로 161, 3층 /
                        TEL : 062) 520-0101 / FAX : 062) 520-0119
                        <br />
                        &copy; MOAMIRAEDO. All Rights Reserved.
                    </p>
                </div>
                <ul>
                    <li class="bold"><a href="">개인정보취급방침</a></li>
                    <li><a href="">이메일무단수집거부</a></li>
                    <li><a href="">그룹웨어</a></li>
                </ul>
            </div>
        </footer>
        <div class="sideMenu">
            <ul>
                <li>
                    <a href="<?= G5_THEME_URL?>/doc/m02/m02_01.php">
                        <figure>
                            <img src="<?= G5_THEME_URL ?>/img/quick1.png" alt="">
                        </figure>
                        <span>분양캘린더</span>
                    </a>
                </li>
                <li>
                    <a href="<?= G5_THEME_URL?>/doc/m02/m02_03.php">
                        <figure>
                            <img src="<?= G5_THEME_URL ?>/img/quick2.png" alt="">
                        </figure>
                        <span>공사진행현황</span>
                    </a>
                </li>
                <li>
                    <a href="#!">
                        <figure>
                            <img src="<?= G5_THEME_URL ?>/img/quick3.png" alt="">
                        </figure>
                        <span>입주안내문</span>
                    </a>
                </li>
                <li>
                    <a href="#!">
                        <figure>
                            <img src="<?= G5_THEME_URL ?>/img/quick4.png" alt="">
                        </figure>
                        <span>협력업체등록</span>
                    </a>
                </li>
            </ul>
            <button></button>
        </div>
        <div class="toTop">
            <a href="#!">
                <i class="xi-arrow-up"></i>
            </a>
        </div>
    </div>



















<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");