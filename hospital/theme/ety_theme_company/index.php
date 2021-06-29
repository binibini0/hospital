<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>


<!--슬라이드 -->
<?php echo latest("mainslide","mainslide",3,100); ?>

<!-- 아이콘박스 id="section_link" -->
<?php include_once(G5_THEME_PATH.'/link.php'); ?>


<!-- 고객편의 슬라이드 id="for_customer" -->
<?php //include_once(G5_THEME_PATH.'/customer.php'); ?>
<?php echo latest("pic_bcustomer","customerLink",8,100); ?>




<!-- 빠른 전화 예약 id="section_resv" -->
<div id="section_resv" class="section_Padding">
  <div class="reservation sub_name text_center">
    <h3>
      지금, 바로
      <strong>빠른 예약</strong>
      하세요!
    </h3>
    <p class="sssub_name">전화번호를 남겨주시면, 상담원이 친절하게 예약 도와드리겠습니다.</p>
  </div>
  <div class="container">
  <? include_once("customer1.php"); ?>
  </div>
</div>

<!-- 공지사항 id="notice" -->
<?php include_once(G5_THEME_PATH.'/notice.php'); ?>

<!-- 오시는 길 -->
<?php include_once(G5_THEME_PATH.'/map.php'); ?>







<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
