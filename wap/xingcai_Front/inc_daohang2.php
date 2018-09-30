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
<body>
<div id="body">
<header class="header">
	<a href="/index.php" class="m-ueser-return"><img src="/images/nsc_m/user/user_jt.png?v=1.17.1.23"></a>
    <div class="wercom">欢迎您,<b class="username"> <?=$this->user['username']?></b>


	<!-- <a class="m-return" href="javascript:checkbackspace();">返回</a> -->
	<span class="btn-slide-bar"></span>
</header>

<!--侧导航 -->
    <section class="slide-bar" style="display: none;">
        <ul class="tree">
            <li class="tree_list"><h3 class="one_nav_list home"><a href="/?index.php">首页</a></h3>
                <div class="m_nav_line"></div>
            </li>
            <!--<li class="tree_list">
                <h3 class="one_nav_list uc_icon_r"><a href="/index.php/safe/Personal">用户中心</a></h3>
                <div class="m_nav_line"></div>
            </li>-->

            <li class="tree_box tree_list">
                <h3 class="one_nav_list account_icon">用户中心<i class="lnstruction-top"></i></h3>
                <ul class="tree_one" style="display:block">
                    <li class="lotter_list_game">
                        <div class="m_nav_line"></div>
                        <dl class="lnstruction">
                            <dd>
                                <ul class="lot_list">
                                    <li class="tree_list"><a href="/index.php/safe/loginpasswd">登入密码</a></li>
                                    <li class="tree_list"><a href="/index.php/safe/passwd">提款密码</a></li>
                                    <li class="tree_list"><a href="/index.php/safe/info">绑定卡号 </a></li>
                                    <li class="tree_list"> <a href="/index.php/cash/recharge">充值提现</a></li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                </ul>
                <div class="m_nav_line"></div>
            </li>
            <?php if($this->user['type']){?>
                <li class="tree_box tree_list">
                    <h3 class="one_nav_list team_icon">团队管理<i class="lnstruction-top"></i></h3>
                    <ul class="tree_one" style="display:block">
                        <li class="lotter_list_game">
                            <div class="m_nav_line"></div>
                            <dl class="lnstruction">
                                <dd>
                                    <ul class="lot_list">
                                        <li class="tree_list"><a href="/index.php/team/linkList">推广链接</a></li>
                                        <li class="tree_list"><a href="/index.php/team/memberList">用户列表</a></li>
                                        <li class="tree_list"><a href="/index.php/team/addMember">手动注册</a></li>
                                        <li class="tree_list"><a href="/index.php/team/coinall">团队统计</a></li>
                                    </ul>
                                </dd>
                            </dl>
                        </li>
                    </ul>
                    <div class="m_nav_line"></div>
                </li>

                <li class="tree_box tree_list">
                    <h3 class="one_nav_list  game_icon tree_box">点金产品<i class="lnstruction-top"></i></h3>
                    <ul class="tree_one" style="display:block">
                        <li class="lotter_list_game">
                            <div class="m_nav_line"></div>
                            <dl>
                                <!--<dt>点金产品</dt>-->
                                <dd>
                                    <ul class="lot_list">
                                        <li><a href="/zst/?typeid=1" style="font-size: 1px;">>重庆时时彩五星定位预测</a> </li>
                                    </ul>
                                </dd>
                            </dl>
                        </li>
                    </ul>
                    <div class="m_nav_line"></div>
                </li>


            <?}?>
            <!--<li class="tree_box tree_list">
                <h3 class="one_nav_list account_icon">充值提现<i class="lnstruction-top"></i></h3>
                <ul class="tree_one">
                    <li class="lotter_list_game">
                        <div class="m_nav_line"></div>
                            <dl class="lnstruction">
                                <dd>
                                    <ul class="lot_list">
                                        <li class="tree_list"> <a href="/index.php/cash/recharge">充值</a></li>
                                        <li class="tree_list"> <a href="/index.php/cash/toCash">提现</a></li>
                                        <li class="tree_list"> <a href="/index.php/cash/rechargeLog">充值记录</a></li>
                                        <li class="tree_list"><a href="/index.php/cash/toCashLog">提现记录 </a></li>
                                    </ul>
                                </dd>
                            </dl>
                    </li>
                </ul>
                <div class="m_nav_line"></div>
            </li>-->
            <!--<li class="tree_box tree_list">
                <h3 class="one_nav_list activity_icon">优惠活动<i class="lnstruction-top"></i></h3>
                <ul class="tree_one">
                    <li class="lotter_list_game">
                        <div class="m_nav_line"></div>
                            <dl class="lnstruction">
                                <dd>
                                    <ul class="lot_list">
                                        <li class="tree_list"><a href="/index.php/score/lucky">幸运抽奖</a></li>
                                        <li class="tree_list"><a href="/index.php/cash/card">卡密充值</a></li>
                                        <li class="tree_list"><a href="/index.php/lottery/hemai">合买中心</a></li>
                                        <li class="tree_list"><a class="notice" href="/index.php/notice/info">系统公告</a></li>
                                    </ul>
                                </dd>
                            </dl>
                    </li>
                </ul>
                <div class="m_nav_line"></div>
            </li>-->
        </ul>
    </section>
    <div class="home_b">
        <div class="m_nav_line"></div>
        <!-- <a href="">首页</a> -->
        <!--<a class="one_nav_list conpt_icon" href="/?v=2">电脑版</a>-->
        <a class="one_nav_list retreat_icon" href="javascript:m_loginout()">安全退出</a>
    </div>
    <div class="shady"></div>