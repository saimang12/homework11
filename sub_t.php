





<?
        if($board['bo_table'] == 'notice01') {
            $sub_h_num = 2;
        } else if($board['bo_table'] == 'qa') {
            $sub_h_num = 2;
        }
        ?>



<script>
    $(function(){
            var num = <?= $sub_nav ?>;
            $('.sub .sub_nav .inner .s_sn>ul>li .s_menu>li').eq(num-1).addClass('bg');
        })
</script>






</article>















</div>