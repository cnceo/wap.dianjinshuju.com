<html xmlns="http://www.w3.org/1999/xhtml" style="font-size: 15.525px;"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0,user-scalable=no,maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<meta name="screen-orientation" content="portrait">
<meta name="x5-orientation" content="portrait">
<title><?=$this->settings['webName']. '-官方网站'?></title>
<meta name="keywords" content="">
<meta nam="description" content="">
<link rel="stylesheet" href="/css/nsc_m/res1.css?v=1.17.1.23">
<link rel="stylesheet" href="/css/nsc_m/user.css?v=1.17.1.23">
<link href="/css/nsc_m/m-lottery.css?v=1.17.1.23" rel="stylesheet" type="text/css">

<script type="text/javascript" src="/js/nsc/jquery-1.7.min.js?v=1.16.12.11"></script>
<script>var TIP=true;</script>
<script type="text/javascript" src="/skin/js/onload.js"></script>
<script type="text/javascript" src="/skin/js/function.js"></script>

<script type="text/javascript" src="/js/nsc_m/layer.js?v=1.17.1.23"></script>
<link href="/js/nsc_m/need/layer.css?2.0" type="text/css" rel="styleSheet" id="layermcss">

<script type="text/javascript" src="/js/nsc/main.js?v=1.17.1.23"></script>
</head>

<style>
    #side{width:50%;height:100%;background:rgba(0,0,0,0.8);position:fixed;left:100%;top:0;z-index:3;transition:.3s;}
    #side p{color:#aecfff;padding:0 10px 0 25px;line-height:50px;border-bottom:1px solid #53cece;}
    #side p a{color:#aecfff;}
    #side .halfWidthLink{padding:10px 10px 10px 25px;border-bottom:1px solid #53cece;}
    #side .halfWidthLink a{color:#fff;font-size:12px;width:48%;white-space:nowrap;display:inline-block;}
    #side .halfWidthLink a:nth-child(2n){text-align:right;}
    #side .allWidthLink{padding:10px 10px 10px 25px;border-bottom:1px solid #53cece;}
    #side .allWidthLink a{color:#fff;font-size:12px;width:100%;white-space:nowrap;display:inline-block;}
    #side .signOut{color:#fff;font-size:12px;position:absolute;right:5px;bottom:10px;}
</style>

<body>
<div id="body">
<header class="header">
	<a href="/index.php" class="m-ueser-return"><img src="/images/nsc_m/user/user_jt.png?v=1.17.1.23"></a>
    <div class="wercom">欢迎您,<b class="username"> <?=$this->user['username']?></b>


	<!-- <a class="m-return" href="javascript:checkbackspace();">返回</a> -->
	<span class="btn-slide-bar" id="more"></span>
</header>

    <!--侧导航 -->
<?php $this->display('inc_daohang_foot.php'); ?>