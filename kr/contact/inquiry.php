<?
$page_num = "05";
$sub_num = "05";
$page_section = "contact";
$sub_section = "contact";
$page_info = "INFORMATION";
$sub_info = "문의하기";
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
$sub_description = ""; // 페이지 설명(서브페이지) *필요시 사용
include "../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>
<style>
/* css */

</style>
<script>
/* js */

</script>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>
    <!-- 컨텐츠 내용 -->
    <!-- #202405 Information 문의 추가 -->
    <!-- !NOTE S : 2024-04 추가 -->
    <article class="product-page inquiry-page">
        <?if ($productNumber == '') { ?>
        <? include $_SERVER["DOCUMENT_ROOT"]."/common/include_inquiry.php"; ?>
        <? } else { ?>
        <? include $_SERVER["DOCUMENT_ROOT"]."/common/include_industrial_inquiry.php"; ?>
        <? } ?>
    </article>
    <!-- !NOTE E : 2024-04 추가 -->
    <!-- //컨텐츠 내용 -->
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
