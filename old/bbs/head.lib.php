<?
$_zb_url = "http://microworks.co.kr/bbs";
$_zb_path = "/iweb/mworksk/wwwhome/bbs/";
include $_zb_path."outlogin.php";

$SNB = ($SNB) ? $SNB : "default"; $leftpage = "snb.{$SNB}.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="subject" content="����ũ�ο����ڸ���">
<meta name="robots" content="index">
<meta name="author" content="����ũ�ο����ڸ���">
<meta name="description" content="����ũ�ο����ڸ���">
<meta name="keywords" content="����ũ�ο����ڸ���,�ݵ�ü,IC,����ũ�ο���,Microworks,�޸�,��ǰ,�븮��,�ؿܼҽ�����,���,�Ҿ�,Global Sourcing Distributor,CORERISE,SSD,COMAY,PILKOR,CORERIVER,�����ڿܼ�, ������,Zemiitz,�ѱ����ڰ���,Stock Sourcing,Memory,DRAM,NAND,NOR,SD Card,FCI,Module,ERAI,Gennum,Nuvoton,Eorex,�޸�����,ASD,Actel,AMD,Allegro,Altera,AD,Benchmarq,Avantek,Brooktree,BurrBrown,CMD,Catalyst,Excel Micro,Crystal Semi,GTE/Mitel,Cirrus Logic,Elantec,Maxim/Dallas,Atmel,Exar,Fairchild,Fujitsu,GEC Plessy,,GeneralInstrument,Goldstar,Harris Semi,Hewlett Packard,Hitachi,Hyundai,IBM,Intel,IR,IPS,Isocom,ITT Canon,Lattice,Level One,LinearTech,Lucent Tech,Macronix,Micrel,Micro Linear,Micro Power,Micron,Microchip,Mitel,Mitsubishi,Mosel/Vitelic,Monolithic Momories Inc.,MPS,Motorola/Freescale,National(NSC),NEC,NMB,Oki,Panasonic(NAIS),Paradigm,Performance,Pericom,Philips(NXP),PMC/Sierra,Silicon Image,SiliconLabs,Rockwell,Rohm,Samsung,Hynix,Sanyo,Seiko,SGS Thomson(STM),Sharp,Siemens,Silicon Systems/TDK,Siliconix,SST,Sony,Supertex,Texas Instruments(TI),Toshiba,Winbond,Xicor,Xilink,Zetex,Zilog">
<title>����ũ�ο����ڸ��� (��) - Microworks Korea Co., Ltd. �޸�,IC �븮��, CORERISE, MPS, EON, WINBOND, GENNUM, CORERIVER</title>
<link rel="stylesheet" type="text/css" href="../kor/common/css/basic.css">
<link rel="stylesheet" type="text/css" href="../kor/common/css/layout.css">
<script type="text/javascript" src="../kor/common/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="../kor/common/js/common.js"></script>
</head>
<body>
<div id="wrap">
  <div class="utilWrap">
    <div class="inner">
      <ul class="util">
        <li><img src="../kor/images/common/icon_kor.gif" alt="KOREA"> KOREAN</li>
        <li><a href="http://www.microworks.co.kr"><img src="../kor/images/common/icon_eng.gif" alt="ENGLISH"> ENGLISH</a></li>
        <li><a href="/chinese"><img src="../kor/images/common/icon_chn.gif" alt="CHINA"> CHINESE</a></li>
      </ul>
    </div>
  </div>
  <div id="header">
    <div class="inner">
      <h1><a href="../kor/index.php"><img src="../kor/images/common/logo.gif" alt="����ũ�ο���" /></a></h1>
      
      <div id="topmenu">
        <ul class="navi">
          <li class="m1"><a href="../kor/company/about.php">Company</a>
            <div class="submenu">
              <ul>
                <li><a href="../kor/company/about.php">ȸ��Ұ�</a></li>
                <li><a href="../kor/company/greeting.php">CEO �λ縻</a></li>
                <li><a href="../kor/company/organization.php">������</a></li>
                <li><a href="../kor/company/milestone.php">����</a></li>
                <li><a href="../kor/company/partners.php">��Ʈ��</a></li>
              </ul>
            </div>
          </li>
          <li class="m2"><a href="../kor/product/distributor.php">Product</a>
            <div class="submenu">
              <ul>
                <li><a href="../kor/product/distributor.php">�븮������</a></li>
                <li><a href="../kor/product/strong.php">�ֿ���޶���</a></li>
              </ul>
            </div>
          </li>
          <li class="m3"><a href="zboard.php?id=eng_memory">Memory Trend</a>
            <div class="submenu">
              <ul>
                <li><a href="zboard.php?id=eng_memory&kor=kor">�޸𸮵���</a></li>
                <li><a href="zboard.php?id=eng_notice&kor=kor">��������</a></li>
              </ul>
            </div>
          </li>
          <li class="m4"><a href="../kor/media/media.php">Media &amp; Download</a>
            <div class="submenu">
              <ul>
                <li><a href="../kor/media/media.php">�̵��</a></li>
                <li><a href="/english/Microworks Korea_vendor_v27_1_Eng.pdf">ȸ��Ұ��ڷ�</a></li>
              </ul>
            </div>
          </li>
          <li class="m5"><a href="../kor/contact/contact.php">Contact</a>
            <div class="submenu">
              <ul>
                <li><a href="../kor/contact/contact.php">����ó</a></li>
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
      <script type="text/javascript" src="../kor/common/js/jquery.bxslider.min.js"></script>  <!-- // visual Jquery -->
    	<script type="text/javascript" src="../kor/common/js/jquery.fitvids.js"></script>  <!-- // visual Jquery -->
    	<script type="text/javascript" src="../kor/common/js/jquery.easing.1.3.js"></script>  <!-- // visual Jquery -->
      <ul class="mainSlide">
        <li><img src="../kor/images/main/visual01.jpg" alt="" /></li>
        <li><img src="../kor/images/main/visual02.jpg" alt="" /></li>
        <li><img src="../kor/images/main/visual03.jpg" alt="" /></li>
      </ul>
      <script type="text/javascript">
      $(document).ready(function(){
        Mainslider = $('.mainSlide').bxSlider({
          auto:true, //�ڵ� �Ѹ�
          mode:'fade', //ȿ��
          pause:3000,  //�ӹ����� �ð�
          pager:true, //����뿩��
          controls:false, //�¿��ư
          onSlideAfter: function(){
            Mainslider.startAuto(); //�� �Ǵ� �¿��ư Ŭ�� �Ŀ��� �ڵ��Ѹ��ǵ���
          }
        });
        Cardslider = $('.cardSlide').bxSlider({
          auto:true, //�ڵ� �Ѹ�
          pause:1500,  //�ӹ����� �ð�
          pager:false, //����뿩��
          controls:true, //�¿��ư
          moveSlides:1,
          maxSlides:2,
          minSlides:1,
          slideMargin:5,
          slideWidth:147,
          onSlideAfter: function(){
            Cardslider.startAuto(); //�� �Ǵ� �¿��ư Ŭ�� �Ŀ��� �ڵ��Ѹ��ǵ���
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
      <img src="../kor/images/common/subvisual.jpg" alt="" />
    </div>
  </div>
  <div id="content" class="sub">
    <div id="SNB">
  <? include $_SERVER['DOCUMENT_ROOT']."/kor/common/inc/{$leftpage}";?>
    </div>
    <div class="contentArea">
  <? } ?>