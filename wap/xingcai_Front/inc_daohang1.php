<?php $this->display('inc_skin.php'); ?>
<body>
	<div id="body">
		<header class="header">
	<a class="m-return" onclick="checkbackspace();">返回</a>
	<span class="btn-slide-bar" id="more"></span>
	<div class="wercom">欢迎您,<b class="username"> <?=$this->user['username']?></b>
	<a href="/?controller=user&amp;action=main&amp;tag=messages" class="ui_message">
               <i class="ui_msgnum" style="display:none">0</i>
           </a> </div>
</header>
        <?php $this->display('inc_daohang_foot.php'); ?>
