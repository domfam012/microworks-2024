<?
$main = true;
$pg = 0;
$sg = 0;
?>
<? include "head.lib.php"; ?>

<div class="boxArea">
  <div class="box company">
    <div class="title"><a href="/kor/company/about.php">ȸ��Ұ�</a></div>
    <a href="/kor/company/about.php">����ũ�ο����ڸ��ƴ� <br />�ݵ�ü/�޸� �븮����<br />�ؿ�Sourcing�� �����ϴ� <br />��������Դϴ�.<br /></a>
    <a href="/kor/company/about.php" class="btn_view">VIEW MORE &gt;</a>
  </div>
  <div class="box card">
    <div class="title"><a href="/kor/product/distributor.php">����ī��</a></div>
    <ul class="cardSlide">
     <li><img src="/kor/images/main/card01_1.jpg" alt="Volex" /></li>
      <li><img src="/kor/images/main/card01_2.jpg" alt="API Delevan" /></li>
      <li><img src="/kor/images/main/card01_3.jpg" alt="ViaSat" /></li>   
      <li><img src="/kor/images/main/card01_4.jpg" alt="Schreiner Protech" /></li>            
      <li><img src="/kor/images/main/card01.jpg" alt="Winbond" /></li>
      <li><img src="/kor/images/main/card02.jpg" alt="Gennum" /></li>
       <li><img src="/kor/images/main/card03.jpg" alt="Zemiitz" /></li>
      <li><img src="/kor/images/main/card04.jpg" alt="CoreRise" /></li>
       <li><img src="/kor/images/main/card05.jpg" alt="Runcore" /></li>
      <li><img src="/kor/images/main/card06.jpg" alt="Cilicoils" /></li>
       <li><img src="/kor/images/main/card09.jpg" alt="Galaxy" /></li>
    </ul>
  </div>
  <div class="box menuBtn">
    <div class="btn_company mgB10"><a href="/kor/company/quality.php"><img src="/kor/images/main/icon_company.jpg" alt="" class="img1a" /><b>ǰ������</b><br />Page view</a></div>
    <div class="btn_vendor"><a href="/kor/company/vendor.php"><img src="/kor/images/main/icon_vendor.jpg" alt="" /><b>Vendor<br />Verification Program</b></a></div>
  </div>
  <div class="box notice">
    <div class="title"><a href="/bbs/zboard.php?id=eng_notice">��������</a> <a href="/bbs/zboard.php?id=eng_notice" class="more"><img src="/kor/images/main/more.gif" alt="more" /></a></div>
    <? print_bbs("bbs_eng", "����ҽ�", "eng_notice", 5, 25)?>
  </div>
  <div class="box memory">
    <div class="title"><a href="/bbs/zboard.php?id=eng_memory">�޸𸮰��ݵ���</a> <a href="/bbs/zboard.php?id=eng_memory" class="more"><img src="/kor/images/main/more.gif" alt="more" /></a></div>
    <? print_bbs("bbs_eng", "����ҽ�", "eng_memory", 5, 30)?>
  </div>
  <div class="box customer">
    <div class="title">Customer center</div>
    <div class="tell"><img src="/kor/images/main/icon_tell.gif" alt="��ȭ��ȣ" class="imgC" /> 82-2-6112-7320</div>
    <div class="mail"><img src="/kor/images/main/icon_mail.gif" alt="�����ּ�" class="imgC mgR5" /> info@microworks.co.kr</div>
    <a href="/kor/contact/contact.php"><img src="/kor/images/main/btn_location.jpg" alt="location" /></a> 
    <a href="mailto:info@microworks.co.kr"><img src="/kor/images/main/btn_contact.jpg" alt="contact" /></a>
  </div>
  <div class="box certi">
    <div class="title">������ũ</div>
    <ul class="certiList">
    
      <li><img src="/kor/images/main/certi01.jpg" alt="������ũ" /></li>
      <li><img src="/kor/images/main/certi02.jpg" alt="������ũ" /></li>
      <li><img src="/kor/images/main/certi03.jpg" alt="������ũ" /></li>
      <li><img src="/kor/images/main/certi04.jpg" alt="������ũ" /></li>
      <li><img src="/kor/images/main/certi05.jpg" alt="������ũ" /></li>
      <li><img src="/kor/images/main/certi06.jpg" alt="������ũ" /></li>
      <li><img src="/kor/images/main/certi07.jpg" alt="������ũ" /></li>
    </ul>
  </div>


<? include "foot.lib.php"; ?>