<?php $this->display('inc_daohang1.php'); ?>
<link rel="stylesheet" href="/css/nsc_m/m-list.css?v=1.17.1.23">
<script type="text/javascript" src="/js/nsc_m/res.js?v=1.16.12.4"></script>

</head>
<body>
  <section class="wraper-page">
 <div class="topbar_padding">
<form action="/index.php/team/insertMember" method="post" target="ajax" onajax="teamBeforeAddMember" call="teamAddMember">
<input type="hidden" name="flag" value="insert">
<input type="hidden" name="controller" value="user">
<input type="hidden" name="action" value="adduser">
<div class="fandianBox"><h3>手动注册</h3></div>
<div class="zzgl_user">
<ul class="form_enter_ul">
<!--<li><label class="w2">用户类型：</label>
    <div class="form_li-r w_r2 u_add_zr_m">
       
                     <div class="switch_choose">
                        <label class="bk_l current"><input type="radio" name="usertype" value="1" checked="checked" class="no_bk-bg"><span data="daili"> 代理</span></label>
                        <label class="bk_r"><input type="radio" name="usertype" value="0" class="no_bk-bg"><span data="huiyuan"> 会员用户</span></label>
                      </div>
               
    </div>
</li>-->
    <input type="hidden" name="usertype" value="0" class="no_bk-bg">
<li><label class="w2">用户名：</label><div class="form_li-r w_r2"><div class="enter_input_kuang1"><input type="text" name="username" onkeyup="value=value.replace(/[^\w\.\/]/ig,'')" maxlength="13" placeholder="请输入用户名"></div><p class="hint_p" id="userchk"></p></div></li>
<li><label class="w2">密码：</label><div class="form_li-r w_r2"><div class="enter_input_kuang1"><input type="password" name="password" maxlength="13" placeholder="请输入密码"></div><p class="hint_p" id="pwdchk"></p></div></li>
<li><label class="w2">确认密码：</label><div class="form_li-r w_r2"><div class="enter_input_kuang1"><input type="password" id="cpasswd" maxlength="13" placeholder="请确认密码"></div><p class="hint_p" id="pwdchk"></p></div></li>
<!--<li><label class="w2">QQ帐号：</label><div class="form_li-r w_r2"><div class="enter_input_kuang1"><input type="text" name="qq" maxlength="12" placeholder="请输入QQ号码"></div><p class="hint_p" id="pwdchk"></p></div></li>
-->
</ul>
    <input type="submit" class="formWord" value="增加会员" id="addmenber">
</div>

</form>
<div class="m_footer_annotation">
                        未满18周岁禁止购买<br>
                Copyright © SycPt  2010-2020 版权所有
                <!-- <a href="#" class="m_f_top"></a> -->
</div>
<div class="padding_fot_b20 "></div>
 </body>
 </html>