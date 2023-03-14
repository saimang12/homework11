<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

<?php if ($is_admin == 'super') {  ?><!-- <div style='float:left; text-align:center;'>RUN TIME : <?php echo get_microtime()-$begin_time; ?><br></div> --><?php }  ?>

<?php run_event('tail_sub'); ?>



<!-- js 스크립트 영역 -->

<script src="<?= G5_THEME_URL?>/js/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"
        integrity="sha512-f8mwTB+Bs8a5c46DEm7HQLcJuHMBaH/UFlcgyetMqqkvTcYg4g5VXsYR71b3qC82lZytjNYvBj2pf0VekA9/FQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollToPlugin.min.js"
        integrity="sha512-tQFq+nb/TSS648SDzWbSj0A67t4I1PFzR0U6Oi/yEYFyUbAIwg74SOCbr7t2X1Rn+iln7sYwfh8y+z7p0gddOw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?= G5_THEME_URL?>/js/main.js?ver2023_02_17"></script>







</body>
</html>
<?php echo html_end(); // HTML 마지막 처리 함수 : 반드시 넣어주시기 바랍니다.
