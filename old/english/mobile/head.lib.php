<!DOCTYPE html>
<html>
<head>
<meta charset="euc-kr">
<title>����ũ�ο���</title>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="format-detection" content="telephone=no">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<meta name="subject" content="����ũ�ο����Դϴ�.">
<meta name="author" content="����ũ�ο���">
<meta name="publisher" content="(��)��������, WAY21">
<meta name="discription" content="����ũ�ο����Դϴ�.">
<meta name="robots" content="index,follow" />
<link rel="stylesheet" type="text/css" href="../mobile/common/css/layout.css" />
<script type="text/javascript" src="../mobile/common/js/jquery-1.9.1.min.js"></script>
</head>
<body>
<div id="wrap">
  <header>
    <h1><a href="/english/mobile/"><img src="../mobile/images/common/logo.png" alt="Timework" /></a></h1>
    <div class="mark"><span><img src="../mobile/images/common/mark.jpg" alt="mark"></span></div>
  </header>
  <? if (!$main) { ?>
  <nav>
    <? if ($pg==1) { ?><a href="#" class="on"><img src="../mobile/images/common/navi01_on.png" alt="����ũ�ο��� �Ұ�" /><? } else { ?><a href="/mobile/timework/introduce.php"><img src="/mobile/images/common/navi01_off.png" alt="����ũ�ο��� �Ұ�" /><? } ?></a>
    <? if ($pg==2) { ?><a href="#" class="on"><img src="../mobile/images/common/navi02_on.png" alt="����ũ�ο��� ����о�" /><? } else { ?><a href="/mobile/timework/business.php"><img src="/mobile/images/common/navi02_off.png" alt="����ũ�ο��� ����о�" /><? } ?></a>
    <? if ($pg==3) { ?><a href="#" class="on"><img src="../mobile/images/common/navi03_on.png" alt="�����Ƿ�" /><? } else { ?><a href="/mobile/timework/request.php"><img src="/mobile/images/common/navi03_off.png" alt="�����Ƿ�" /><? } ?></a>
  </nav>
  <? } ?>