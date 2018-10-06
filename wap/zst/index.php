<?php
ob_start('ob_output');
function ob_output($html) {
    // 一些用户喜欢使用windows笔记本编辑文件，因此在输出时需要检查是否包含BOM头
    if (ord(substr($html, 0, 1)) === 239 && ord(substr($html, 1, 2)) === 187 && ord(substr($html, 2, 1)) === 191) $html = substr($html, 3);
    // gzip输出
    if(
        !headers_sent() && // 如果页面头部信息还没有输出
        extension_loaded("zlib") && // 而且zlib扩展已经加载到PHP中
        array_key_exists('HTTP_ACCEPT_ENCODING', $_SERVER) &&
        stripos($_SERVER["HTTP_ACCEPT_ENCODING"], "gzip") !== false // 而且浏览器说它可以接受GZIP的页面
    ) {
        $html = gzencode($html, 3);
        header('Content-Encoding: gzip');
        header('Vary: Accept-Encoding');
    }
    header('Content-Length: '.strlen($html));
    return $html;
}

$id=array('1','5','12','14','26','60','61','62','75','76');
$pgsid=array('30','50','80','100','120','200','300','');
include(dirname(__FILE__)."/inc/comfunc.php");
//此处设置彩种id
$typeid=intval($_GET['typeid']);
if(!in_array($typeid,$id)) die("typeid error");
if(!$typeid) $typeid=14;
//每页默认显示
$pgs=intval($_GET['pgs']);
$dateTime = date('Ymd',time());
if(!in_array($pgs,$pgsid)) die("pgs error");
if(!$pgs) $pgs=120;
//当前页面
$page=intval($_GET['page']);
if(!$page) $page=1;
//传参
$toUrl="?page=";
$params=http_build_query($_REQUEST, '', '&');
if(!$mydb) $mydb = new MYSQL($dbconf);
$gRs = $mydb->row($conf['db']['prename']."type","shortName","id=".$typeid);
if($gRs){
    $shortName=$gRs[0][0];
}

$zhiying = 100;
$zhishun = 350;
$isgameover = false;

$fromTime=$_GET['fromTime'];
$toTime=$_GET['toTime'];

if(!$fromTime){
    $fromTime=strtotime($dateTime);
} else{
    $fromTime=strtotime($fromTime);
} 
if($toTime) $toTime=strtotime($toTime)+24*3600;
?>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:esun="" style="font-size: 15.525px;"><head>
    <title>官方网站</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!--     <meta http-equiv="refresh" content="5"> -->
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0,user-scalable=no,maximum-scale=1.0">
    <meta http-equiv="Pragma" content="no-cache">
    <link rel="stylesheet" href="/css/nsc_m/list.css?v=1.17.2.1">
    <link rel="stylesheet" href="css/line.css" type="text/css">
    <link rel="stylesheet" href="/css/nsc_m/res.css?v=1.17.2.1">
    <link href="/css/nsc_m/m-lottery.css?v=1.17.2.1" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/nsc_m/public.css">
    <script type="text/javascript" src="/js/nsc/jquery-1.7.min.js?v=1.17.2.1"></script>
    <script language="javascript" type="text/javascript" src="js/line.js"></script>


    <script type="text/javascript" src="/js/nsc_m/layer.js?v=1.17.2.1"></script><link href="/js/nsc_m/need/layer.css?2.0" type="text/css" rel="styleSheet" id="layermcss">
    <script type="text/javascript" src="/js/nsc/common.js?v=1.17.2.1"></script>
    <link rel="stylesheet" href="/js/common/calendar/css/calendar-blue.css?v=1.17.2.1" type="text/css">
    <style type="text/css">
        html{width:100%;height:100%;}
        body {width:100%;height:100%;background:url(/images/nsc_m/lit.jpg) no-repeat center;background-size:100% 100%;}
        .head{width:100%;height:50px;background-color:#004BC8;display:flex;align-items:center;justify-content:space-between;position:fixed;top:0;left:0;}
        .head a{color:#fff;line-height:50px;font-size:16px;margin-left:15px;}
        .head label{color:#fff;line-height:50px;font-size:16px;}
        .head #more{display:flex;align-items:center;justify-content:space-around;width:30px;margin-right:15px;height:50px;}
        .head #more span{background-color:#fff;width:6px;height:6px;border-radius:50%;display:inline-block;}
        .tableHead{width:100%;height:50px;background-color:#fff;color:#000;font-size:14px;position:fixed;top:51px;left:0;}
        .tableHead span{width:12%;display:inline-block;text-align:center;line-height:50px;white-space:nowrap;}
        .summary{padding:20px 10px;}
        .summary p{text-align:center;font-size:16px;color:#004BC8;text-indent:2em;}
        .summary p a{color:#ff0000;}
        ul{width:100%;margin:0 0 60px;display:table;border-bottom:1px solid #cdcbcb;}
        ul li{width:100%;height:40px;line-height:40px;font-size:14px;border-top:1px solid #cdcbcb;}
        ul li label{width:12%;display:inline-block;text-align:center;}
        ul li label.redFont{color:#ff0000;}
        ul li label.greenFont{color:#03c303;}
        ul li label span{width:16px;height:16px;display:inline-block;line-height:16px;}
        ul li label span.whiteBg{background-color:#fff;border:1px solid #ff0000;border-radius:50%;color:#ff0000;}
        ul li label span.blueBg{background-color:#004BC8;border:1px solid #004BC8;border-radius:50%;color:#fff;}
        ul li label span.grayBg{background-color:#565656;border:1px solid #565656;border-radius:50%;color:#fff;}
        .tab{position:fixed;bottom:0;width:100%;height:50px;line-height:50px;background-color:#fff;z-index:2;}
        .tab a{width:33%;display:inline-block;float:left;text-align:center;color:#0048C8;font-size:16px;}
        .tab a.on{color:#fff;background-color:#0048C8;}
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

    <script type="text/javascript">
        $(function(){
            //切换漏号分析
            $('.lhfx_tit').click(function(e){
                $('.lhfx_lotterylist').toggle();
                $(document).on('click',function(){
                    $('.lhfx_lotterylist').hide();
                });
                e.stopPropagation();

            });
            $('.lhfx_lotterylist').on('click',function(e){
                e.stopPropagation();
            });
        })
    </script>

</head>

<body>
<div class="head">
    <a href="/index.php"><返回</a>
    <label><?= date('Ymd',$fromTime)?>重庆时时彩五星定位</label>
    <div id="more">
        <span></span><span></span><span></span>
    </div>
</div>
<div class="tableHead">
    <span>期号</span>
    <span style='width:31%;'>开奖号码</span>
    <span>预测</span>
    <span>金额</span>
    <span>盈亏</span>
    <span>当日盈亏</span>
</div>
<div style="height:100px;"></div>



<?php
    

    $touzhu = 2*5;

    $pg=trim($_REQUEST["page"]);
    if(!$pg){$pg=1;}
    if(!$pgs){$pgs=30;}
    $tableStr=$conf['db']['prename']."data";
    $tableStr2=$conf['db']['prename']."data a";
    $fieldsStr="time, number, data,func_ext,profit,round";

    $fieldsStr2="a.time, a.number, a.data, a.func_ext,a.profit,a.round";
    $whereStr=" type=$typeid ";
    $whereStr2=" a.type=$typeid ";
    if($fromTime && $toTime){
        $whereStr.=" and time between $fromTime and $toTime";
        $whereStr2.=" and a.time between $fromTime and $toTime";
    }elseif($fromTime){
        $whereStr.=' and time>='.$fromTime;
        $whereStr2.=' and a.time>='.$fromTime;
    }elseif($toTime){
        $whereStr.=' and time<'.$toTime;
        $whereStr2.=' and a.time<'.$toTime;
    }else{}
    $orderStr1="and a.round is null order by a.number desc";
    $orderStr2="order by a.number desc";

    $totalNumber = $mydb->row_count($tableStr,$whereStr);

    $allprofit = 0;
    $allgameover = 0;

    if ($totalNumber>0) {

        $countcount = 0;
        $perNumber = $pgs; //每页显示的记录数
        $page = $pg; //获得当前的页面值
        if (!isset($page)) $page = 1;

        $totalPage = ceil($totalNumber / $perNumber); //计算出总页数
        $startCount = ($page - 1) * $perNumber; //分页开始,根据此方法计算出开始的记录
        $data1 = $mydb->row($tableStr2, $fieldsStr2, $whereStr2 . ' ' . $orderStr2 . " limit $startCount,$perNumber");
        if($data1) foreach($data1 as $index=>$var){
            if($var[5]=="1" || $var[5]=="2" ){
                $allqihao = substr($var[1],strlen($var[1])- 3,3);
                $allprofit = $var[4];
                $allgameover = $var[5];
                break;
            }
        }
    }
?>

<?php if($allgameover!=0) {?>
<div class="summary">
    <?php if($allgameover=="1") {?>
        <p>本日已止盈，止盈金额<?= $allprofit*$touzhu?>，为方便计算，赔率按照2倍，如需更精准计划，请<a href="#">点击联系客服!</a></p>
    <?php }else {?>
        <p>本日已止亏，止亏金额<?= $allprofit*$touzhu?>，为方便计算，赔率按照2倍，如需更精准计划，请<a href="#">点击联系客服!</a></p>
    <?php } ?>
</div>
<?php } ?>
<ul>
    <?php


    if ($totalNumber>0){
        $data = $mydb->row($tableStr2, $fieldsStr2, $whereStr2 . ' ' . $orderStr1 . " limit $startCount,$perNumber");

        if($allgameover==0){
            $oj = json_decode($data[0][3]);
            if($oj->QIANSHAN->currResult==1){
                $yucedata1 = $oj->QIANSHAN->nextData;
                $yucebeishu1 = $oj->QIANSHAN->nextBeishu;
                $yuceprofit1 = $oj->QIANSHAN->nextProfit;
            }else if($oj->HOUSHAN->currResult==1){
                $yucedata1 = $oj->HOUSHAN->nextData;
                $yucebeishu1 = $oj->HOUSHAN->nextBeishu;
                $yuceprofit1 = $oj->HOUSHAN->nextProfit;
            }else if($oj->ZHONGHE->currResult==1){
                $yucedata1 = $oj->ZHONGHE->nextData;
                $yucebeishu1 = $oj->ZHONGHE->nextBeishu;
                $yuceprofit1 = $oj->ZHONGHE->nextProfit;
            }else{
                $yucedata1 = "等";
                $yucebeishu1 = "";
                $yuceprofit1 = "";
            }

            echo '<li>';
            echo '<label>下一期</label>';
            echo '<label style="width:31%;">';
            echo '<span>等</span>';
            echo '<span>待</span>';
            echo '<span>开</span>';
            echo '<span>奖</span>';
            echo '<span>中</span>';
            echo '</label>';
            echo '<label><span class="blueBg">'.$yucedata1.'</span></label>';
            echo '<label>'.$yucebeishu1*$touzhu.'</label>';
            echo '<label class="greenFont">'.$yuceprofit1*$touzhu.'</label>';
            echo '<label class="redFont"></label>';
            echo '</li>';
        }


        if($data) foreach($data as $index=>$var){

            $dArry=explode(",",$var[2]);
            $var['d1']=$dArry[0];
            $var['d2']=$dArry[1];
            $var['d3']=$dArry[2];
            $var['d4']=$dArry[3];
            $var['d5']=$dArry[4];

            $oj = json_decode($data[$index+1][3]);
            if($oj->QIANSHAN->currResult==1){
                $yucedata = $oj->QIANSHAN->nextData;
                $yucebeishu = $oj->QIANSHAN->nextBeishu;
                $yuceprofit = $oj->QIANSHAN->nextProfit;
            }else if($oj->HOUSHAN->currResult==1){
                $yucedata = $oj->HOUSHAN->nextData;
                $yucebeishu = $oj->HOUSHAN->nextBeishu;
                $yuceprofit = $oj->HOUSHAN->nextProfit;
            }else if($oj->ZHONGHE->currResult==1){
                $yucedata = $oj->ZHONGHE->nextData;
                $yucebeishu = $oj->ZHONGHE->nextBeishu;
                $yuceprofit = $oj->ZHONGHE->nextProfit;
            }else{
                $yucedata = '等';
                $yucebeishu = 0;
                $yuceprofit = 0;
            }

            $profit = $var[4];
            $isgameover = $var[5];
            $qihao = substr($var[1],strlen($var[1])- 3,3);
            if(intval($qihao)<24){
                continue;
            }
            if($allgameover!=0 && intval($allqihao)<=intval($qihao) ){
                continue;
            }
            $biger23 = intval($qihao) > 23;
            echo '<li>';
            echo '<label>'.$qihao.'</label>';
            echo '<label style="width:31%;">';
            $zhong = 0;
            if(($var['d1'] != $yucedata) && $biger23){
                echo '<span class="redBg">'.$var['d1'].'</span>';
            }else{
                $zhong++;
                echo '<span class="whiteBg">'.$var['d1'].'</span>';
            }
            if(($var['d2'] != $yucedata) && $biger23){
                echo '<span class="redBg">'.$var['d2'].'</span>';
            }else{
                $zhong++;
                echo '<span class="whiteBg">'.$var['d2'].'</span>';
            }
            if(($var['d3'] != $yucedata) && $biger23){
                echo '<span class="redBg">'.$var['d3'].'</span>';
            }else{
                $zhong++;
                echo '<span class="whiteBg">'.$var['d3'].'</span>';
            }
            if(($var['d4']!=$yucedata) && $biger23){
                echo '<span class="redBg">'.$var['d4'].'</span>';
            }else{
                $zhong++;
                echo '<span class="whiteBg">'.$var['d4'].'</span>';
            }
            if(($var['d5'] != $yucedata) && $biger23){
                echo '<span class="redBg">'.$var['d5'].'</span>';
            }else{
                $zhong++;
                echo '<span class="whiteBg">'.$var['d5'].'</span>';
            }
            echo '</label>';
            if($isgameover=="1" || $isgameover=="2" ){
                echo '<label><span >请</span></label>';
                echo '<label><span >停</span></label>';
                echo '<label><span >止</span></label>';
                echo '<label><span >下注</span></label>';
            }else if($var[1]<= (date("Ymd",$fromTime)."-023")){
                echo '<label><span >前三'.$oj->QIANSHAN->nextData.'|'.$oj->QIANSHAN->nextBeishu*$touzhu.'|'.$oj->QIANSHAN->nextProfit*$touzhu.'</span></label>';
                echo '<label><span >后三'.$oj->HOUSHAN->nextData.'|'.$oj->HOUSHAN->nextBeishu*$touzhu.'|'.$oj->HOUSHAN->nextProfit*$touzhu.'</span></label>';
                echo '<label><span >总和'.$oj->ZHONGHE->nextData.'|'.$oj->ZHONGHE->nextBeishu*$touzhu.'|'.$oj->ZHONGHE->nextProfit*$touzhu.'</span></label>';
                echo '<label><span >分析中</span></label>';

            }else{
                if($zhong > 0){
                    echo '<label><span class="blueBg">'.$yucedata.'</span></label>';
                }else{
                    echo '<label><span class="grayBg">'.$yucedata.'</span></label>';
                }
                echo '<label>'.$yucebeishu*$touzhu.'</label>';
                if($yuceprofit*$touzhu > 0){
                    echo '<label class="redFont">'.$yuceprofit*$touzhu.'</label>';
                }else{
                    echo '<label class="greenFont">'.$yuceprofit*$touzhu.'</label>';
                }
                if($profit*$touzhu > 0){
                    echo '<label class="redFont">'.$profit*$touzhu.'</label>';
                }else{
                    echo '<label class="greenFont">'.$profit*$touzhu.'</label>';
                }
            }

            echo '</tr>';
        } ?>

    <?php } ?>
</ul>
<div class="tab">
    <a href="http://wap.dianjinshuju.com/">首页</a>
    <a href="#" class="on">预测</a>
    <a href="/index.php/safe/Personal">我的</a>
</div>

<div id="side">
    <p><a href="/?index.php">首页</a></p>
    <p>用户中心</p>
    <div class="halfWidthLink">
        <a href="/index.php/safe/loginpasswd">> 登录密码</a>
        <a href="/index.php/safe/passwd">> 提款密码</a>
        <a href="/index.php/safe/info">> 绑定卡号</a>
        <a href="/index.php/cash/recharge">> 充值提现</a>
    </div>
    <p>团队管理</p>
    <div class="halfWidthLink">
        <a href="/index.php/team/linkList">> 推广链接</a>
        <a href="/index.php/team/memberList">> 用户列表</a>
        <a href="/index.php/team/addMember">> 手动注册</a>
        <a href="/index.php/team/coinall">> 团队统计</a>
    </div>
    <p>点金产品</p>
    <div class="allWidthLink">
        <a href="/zst/?typeid=1">> 重庆时时彩五星定位预测</a>
        <a href="#">> 点金EA2000</a>
        <a href="#">> 点金分分彩刷量模拟</a>
        <a href="#">> 24小时回补极限算法</a>
    </div>
    <div class="allWidthLink" style="border:none;">
        <a href="#">微信客服：dianjinshuju99</a>
        <a href="#">QQ客服：302288999</a>
        <a href="#">点金①群：302288999</a>
        <a href="#">点金②群：302288999</a>
        <a href="#">商务合作：301199</a>
    </div>
    <a class="signOut" href="javascript:m_loginout()">退出登录</a>
</div>


<script type="text/javascript">

    $(function() {
        $('.tab a').click(function(){
            $(this).addClass('on').siblings('a').removeClass('on');
        })
        $("#more").click(function(){
            $('#side').css('left','50%');
            $('#mask').css('display','block');
        })
        $("#mask").click(function(){
            $('#side').css('left','100%');
            $('#mask').css('display','none');
        })
    });

</script>




<script type="text/javascript">
    $(function(){

        var riable=0;
        $(".nfdprize_text").click(function(){
            if(riable==0){
                riable=1;
                $(".m-lott-methodBox .nfdprize_text b").addClass('cur')
            }else{
                riable =0;
                $(".m-lott-methodBox .nfdprize_text b").removeClass('cur')
            }
            $(".m-lott-methodBox-list").toggle();
        });

        userLevel();

    }());



    //获取资金
    function userLevel() {
        $.ajax({
            type : 'POST',
            url  : '/index.php/safe/userLevel',
            data : 'flag=getmoney',
            timeout : 10000,
            success : function(data){
                autoRefresh = true;
                if( data == "error" ) {//
                    $("#refff").html("<b>正在读取会员信息</b>");
                    return false;
                } else {
                    if(isNaN(data)){
                        layer.open({
                            content:"您的登录可能已经过期，请重新登录!!!",
                            btn:'确定',
                            yes:function(index){
                                location.href="/";
                                layer.close(index)
                            }
                        })
                        return false;
                    }else if(data<=1){
                        layer.open({
                            content:"您还不是会员，请先购买会员!!!",
                            btn:'确定',
                            yes:function(index){
                                location.href="/index.php/cash/recharge";
                                layer.close(index)
                            }
                        })
                    }else{
                        return true;
                    }
                }
            },
            error: function() {
                $("#refff").html("正在读取会员信息");
            },
            complete:function(XHR,textStatus){
                //console.log(XHR);
                XHR = null;
                //console.log(XHR);
            }
        });
    }

</script>

</body>
</html>
