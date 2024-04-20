<?
$_zb_url = "http://microworks.co.kr/bbs";
$_zb_path = "/iweb/mworksk/wwwhome/bbs/";
include $_zb_path."outlogin.php";

$SNB = ($SNB) ? $SNB : "default"; $leftpage = "snb.{$SNB}.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;" charset="euc-kr" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="subject" content="마이크로웍스코리아">
<meta name="robots" content="index">
<meta name="author" content="마이크로웍스코리아">
<meta name="description" content="마이크로웍스코리아">
<meta name="keywords" content="마이크로웍스코리아,반도체,IC,마이크로웍스,Microworks,메모리,부품,대리점,해외소싱전문,쏘싱,소씽,Global Sourcing Distributor,CORERISE,SSD,COMAY,PILKOR,CORERIVER,웅진자외선, 제미츠,Zemiitz,한국단자공업,Stock Sourcing,Memory,DRAM,NAND,NOR,SD Card,FCI,Module,ERAI,Gennum,Nuvoton,Eorex,메모리전문,ASD,Actel,AMD,Allegro,Altera,AD,Benchmarq,Avantek,Brooktree,BurrBrown,CMD,Catalyst,Excel Micro,Crystal Semi,GTE/Mitel,Cirrus Logic,Elantec,Maxim/Dallas,Atmel,Exar,Fairchild,Fujitsu,GEC Plessy,,GeneralInstrument,Goldstar,Harris Semi,Hewlett Packard,Hitachi,Hyundai,IBM,Intel,IR,IPS,Isocom,ITT Canon,Lattice,Level One,LinearTech,Lucent Tech,Macronix,Micrel,Micro Linear,Micro Power,Micron,Microchip,Mitel,Mitsubishi,Mosel/Vitelic,Monolithic Momories Inc.,MPS,Motorola/Freescale,National(NSC),NEC,NMB,Oki,Panasonic(NAIS),Paradigm,Performance,Pericom,Philips(NXP),PMC/Sierra,Silicon Image,SiliconLabs,Rockwell,Rohm,Samsung,Hynix,Sanyo,Seiko,SGS Thomson(STM),Sharp,Siemens,Silicon Systems/TDK,Siliconix,SST,Sony,Supertex,Texas Instruments(TI),Toshiba,Winbond,Xicor,Xilink,Zetex,Zilog">
<title>마이크로웍스코리아 (주) - Microworks Korea Co., Ltd. 메모리,IC 대리점, CORERISE, MPS, EON, WINBOND, GENNUM, CORERIVER</title>
<link rel="stylesheet" type="text/css" href="/english/common/css/basic.css">
<link rel="stylesheet" type="text/css" href="/english/common/css/layout.css">
<script type="text/javascript" src="/english/common/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/english/common/js/common.js"></script>
</head>
<body>
<div id="wrap">
  <div class="utilWrap">
    <div class="inner">
      <ul class="util">
        <li><a href="/kor/index.php"><img src="/english/images/common/icon_kor.gif" alt="KOREA"> KOREAN</a></li>
        <li><img src="/english/images/common/icon_eng.gif" alt="ENGLISH"> ENGLISH</li>
        <li><img src="/english/images/common/icon_chn.gif" alt="CHINA"> CHINESE</li> 
<!--        <li><a href="/chinese"><img src="/english/images/common/icon_chn.gif" alt="CHINA"> CHINESE</a></li> -->
      </ul>
    </div>
  </div>
  <div id="header">
    <div class="inner">
      <h1><a href="/english/index.php"><img src="/english/images/common/logo.gif" alt="마이크로웍스" /></a></h1>
      
      <div id="topmenu">
        <ul class="navi">
          <li class="m1"><a href="/english/company/about.php">Company</a>
            <div class="submenu">
              <ul>
                <li><a href="/english/company/about.php">About Microworks</a></li>
                <li><a href="/english/company/greeting.php">CEO Greetings</a></li>
                <li><a href="/english/company/organization.php">Organization</a></li>
                <li><a href="/english/company/milestone.php">Milestone</a></li>
                <li><a href="/english/company/partners.php">Partners</a></li>
              </ul>
            </div>
          </li>
          <li class="m2"><a href="/english/product/distributor.php">Product</a>
            <div class="submenu">
              <ul>
                <li><a href="/english/product/distributor.php">Distributor Lines</a></li>
                <li><a href="/english/product/strong.php">Strong Lines</a></li>
              </ul>
            </div>
          </li>
          <li class="m3"><a href="/bbs/zboard.php?id=eng_memory">Memory Trend</a>
            <div class="submenu">
              <ul>
                <li><a href="/bbs/zboard.php?id=eng_memory">Memory</a></li>
                <li><a href="/bbs/zboard.php?id=eng_notice">Notice</a></li>
              </ul>
            </div>
          </li>
          <li class="m4"><a href="/english/media/media.php">Media &amp; Download</a>
            <div class="submenu">
              <ul>
                <li><a href="/english/media/media.php">Media</a></li>
                <li><a href="/english/Microworks_2018_VER2.0 - Eng.pdf">Company Profile</a></li>
              </ul>
            </div>
          </li>
          <li class="m5"><a href="/english/contact/contact.php">Contact</a>
            <div class="submenu">
              <ul>
                <li><a href="/english/contact/contact.php">Contact us</a></li>
                <li><a href="mailto:info@microworks.co.kr">RFQ</a></li>
              </ul>
            </div>
          </li>
        </ul>
        <script type="text/javascript"> 
        $(document).ready(function(){		
        	$('#topmenu').topmenu({ d1: <?=$pg?>, d2: <?=$sg?> });
        });
        </script>
      </div>
    </div>
    <div class="sub_bg"></div>
  </div>
  <? if ($main) { ?>
  <div id="container">
    <div class="mainVisual">
      <script type="text/javascript" src="/english/common/js/jquery.bxslider.min.js"></script>  <!-- // visual Jquery -->
    	<script type="text/javascript" src="/english/common/js/jquery.fitvids.js"></script>  <!-- // visual Jquery -->
    	<script type="text/javascript" src="/english/common/js/jquery.easing.1.3.js"></script>  <!-- // visual Jquery -->
      <ul class="mainSlide">
        <li><img src="/english/images/main/visual01.jpg" alt="" /></li>
        <li><img src="/english/images/main/visual02.jpg" alt="" /></li>
        <li><img src="/english/images/main/visual03.jpg" alt="" /></li>
      </ul>
      <script type="text/javascript">
      $(document).ready(function(){
        Mainslider = $('.mainSlide').bxSlider({
          auto:true, //자동 롤링
          mode:'fade', //효과
          pause:3000,  //머무르는 시간
          pager:true, //블릿사용여부
          controls:false, //좌우버튼
          onSlideAfter: function(){
            Mainslider.startAuto(); //블릿 또는 좌우버튼 클릭 후에도 자동롤링되도록
          }
        });
        Cardslider = $('.cardSlide').bxSlider({
          auto:true, //자동 롤링
          pause:1500,  //머무르는 시간
          pager:false, //블릿사용여부
          controls:true, //좌우버튼
          moveSlides:1,
          maxSlides:2,
          minSlides:1,
          slideMargin:5,
          slideWidth:147,
          onSlideAfter: function(){
            Cardslider.startAuto(); //블릿 또는 좌우버튼 클릭 후에도 자동롤링되도록
          }
        });
      });
      </script>
    </div>
  </div>
  <div id="content">
  <? } else { ?>
  <div id="container">
    <div class="subVisual">
      <img src="/english/images/common/subvisual.jpg" alt="" />
    </div>
  </div>
  <div id="content" class="sub">
    <div id="SNB">
      <? include $_SERVER['DOCUMENT_ROOT']."/english/common/inc/{$leftpage}";?>
    </div>
    <div class="contentArea">
  <? } ?>