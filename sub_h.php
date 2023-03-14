<div class="sub">
    
<?
        if($board['bo_table'] == 'notice01') {
            $sub_h_num = 2;
            $main_nav = '고객센터';
$main_desc = '오랜 경험과 노하우로
21세기 건축문화를 실현해 나가겠습니다.';
$sub_num = 5;
$sub_nav = 1;
        } else if($board['bo_table'] == 'qa') {
            $sub_h_num = 3;
            $main_nav = '고객센터';
            $main_desc = '고객을 생각하며 미래의
            올바른 건설문화를 주도하는 모아건설';
            $sub_num = 5;
            $sub_nav = 2;
        }
 ?> 
 <!-- 게시판에 변수 입력하기 만약 bo_table이 ''라면 변수지정 -->


            <div class="<? include G5_THEME_PATH.'/doc/sub_bg.php' ?><?= $sub_h_num ?>">
                <div class="inner">
                    <h2><?= $main_nav ?></h2>
                    <p><?= $main_desc ?></p>
                </div>
            </div>
            <div class="sub_nav">
                <div class="inner">
                    <div class="home">
                        <a href="/">
                            <i class="xi-home-o"></i>
                        </a>
                    </div>
                    <div class="s_mn">
                        <ul>
                            <li>
                                <? include G5_THEME_PATH.'/doc/sub_nav01/sub_nav01.php';?>
                            </li>
                        </ul>
                    </div>
                    <div class="s_sn">
                        <ul>
                            <li>
                                <? include G5_THEME_PATH.'/doc/sub_nav0'.$sub_num.'/sub_nav0'.$sub_num.'_0'.$sub_nav.'.php';?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <article class="article">