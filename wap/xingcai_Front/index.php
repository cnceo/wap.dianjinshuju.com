<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no,email=no,date=no,address=no">
    <title>主页</title>
    <link rel="stylesheet" href="/css/nsc_m/public.css">
    <style type="text/css">
        html{width:100%;height:100%;}
        body {background:url(/images/nsc_m/lit.jpg) no-repeat center;background-size:100% 100%;}
        .head{width:100%;height:64px;background-color:#004BC8;display:flex;align-items:center;justify-content:space-between;}
        .head label{color:#fff;line-height:64px;font-size:16px;}
        .head .more{display:flex;align-items:center;justify-content:space-around;width:30px;margin-right:15px;}
        .head .more span{background-color:#fff;width:6px;height:6px;border-radius:50%;display:inline-block;}
        .Advertisement{width:100%;}
        .broadcast{border-bottom:1px solid #6BA092;padding:0 5px;display:flex;align-items:center;}
        .broadcast img{width:40px;height:40px;}
        .broadcast a{width:100%;height:40px;line-height:40px;background-color:#f3fbfe;color:#000;font-size:12px;display:inline-block;text-align:center;}
        ul{margin:20px 0 60px;}
        ul li{width:25%;height:140px;font-size:14px;margin:0 4%;float:left;}
        ul li .top{text-align:center;background:rgba(177,202,230,0.3);padding:2px 0 0 2px;margin-bottom:2px;}
        ul li .top .title{background:rgba(173,203,229,0.7);padding:5px 0;}
        ul li .top .description{margin-top:10px;height:60px;}
        ul li a{background-color:#ff7800;color:#fff;width:100%;text-align:center;display:inline-block;padding:5px 0;}
        .tab{position:fixed;bottom:0;width:100%;height:50px;line-height:50px;background-color:#fff;z-index:2;}
        .tab a{width:33%;display:inline-block;float:left;text-align:center;color:#0048C8;}
        .tab a.active{color:#fff;background-color:#0048C8;}
        .preview{box-sizing:border-box;width:100%;height:100%;background:rgba(0,0,0,0.8);position:fixed;left:0;top:64px;padding:10px 15px 0 35px;z-index:1;display:none;}
        .preview .closePreview{color:#ffd9b5;text-align:right;line-height:30px;}
        .preview .product p{color:#ffd9b5;text-align:left;line-height:30px;}
        .preview .price{border:1px solid #fff;text-align:left;padding:10px 0 0 20px;margin:10px 0 0;}
        .preview .price p{margin-bottom:10px;}
        .preview .price .pre{color:#dafff7;}
        .preview .price .num{color:#ffffb9;font-size:16px;}
        .preview .summary{color:#fff;font-size:16px;box-sizing:border-box;margin-top:10px;}
        .preview .summary span{padding:5px;background-color:#ffa800;margin-right:2px;white-space:nowrap;margin-bottom:5px;display:inline-block;}
        .preview .description{color:#fff;text-indent:2em;font-size:14px;margin-top:15px;}
        .preview .buy{position:fixed;bottom:60px;color:#fff;}
        .preview .buy button{border:none;padding:8px;background-color:#ffa800;color:#fff;margin-left:15px;font-size:16px;}
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
</head>

<body>
<div class="head">
    <img src="/images/nsc_m/headLogo.png">
    <label>欢迎您！niuoo100</label>
    <div class="more" id="more">
        <span></span><span></span><span></span>
    </div>
</div>
<img src="/images/nsc_m/advertisement.png" class="Advertisement">
<div class="broadcast">
    <img src="/images/nsc_m/horn.png"><a href="#">点金将于2018年10月1日推出EA2000，点击查看详情</a>
</div>
<ul>
    <li>
        <div class="top">
            <p class="title">EA2000</p>
            <div class="description">
                <p>本金2000</p>
                <p>月盈70%-150%</p>
            </div>
        </div>
        <a href="#">了解详情</a>
    </li>
    <li>
        <div class="top">
            <p class="title">分分刷量</p>
            <div class="description">
                <p>本金自定</p>
                <p>日刷10-20倍</p>
            </div>
        </div>
        <a href="#">了解详情</a>
    </li>
    <li>
        <div class="top">
            <p class="title">极限回补</p>
            <div class="description">
                <p>本金500</p>
                <p>日盈10%以上</p>
            </div>
        </div>
        <a href="#">了解详情</a>
    </li>
    <li>
        <div class="top">
            <p class="title">算法开发</p>
            <div class="description">
                <p>时时彩</p>
                <p>赛车</p>
                <p>快3</p>
            </div>
        </div>
        <a href="#">了解详情</a>
    </li>
    <li>
        <div class="top">
            <p class="title">自动下单</p>
            <div class="description">
                <p>15天开发时间</p>
                <p>平台自选</p>
            </div>
        </div>
        <a href="#">了解详情</a>
    </li>
    <li>
        <div class="top">
            <p class="title">合作共赢</p>
            <div class="description">
                <p>推广</p>
                <p>联运</p>
                <p>众筹</p>
            </div>
        </div>
        <a href="#">了解详情</a>
    </li>
</ul>
<div class="tab">
    <a href="#" class='active'>首页</a>
    <a href="/zst/?typeid=1" style='color:#ff7800'>预测</a>
    <a href="/index.php/safe/Personal">我的</a>
</div>
<div class="preview">
    <p class='closePreview'>关闭</p>
    <div class="product">
        <p>EA2000</p>
        <p>2000本金，月盈70%-150%</p>
    </div>
    <div class="price">
        <p class="pre">预售：598/月 1298/季 3998/年</p>
        <p class="num">名额限3000人，目前剩余2800人</p>
    </div>
    <div class="summary">
        <span style="background-color:#004BC8;">承诺服务</span>
        <span>24H服务</span>
        <span>免费升级</span>
        <span>亏损退费补偿</span>
    </div>
    <p class="description">
        实盘观摩https://www.fxunion.org/3103 IC实盘开始于7.3日，入金5000日收益10%左右，目前收益已达201%，最大回撤为22.6%，浮亏25%左右，高收益由AE自动交易完成，适时提取本金，让利润奔跑。敬请关注！一个能稳定赢利的EA自动交易程序帮助投资者做到1-999%年化收益。本金交易允许最大回撤25%，提出本金留利润交易允许最大回撤35%。
    </p>
    <div class="buy">
        2018年10月1日前交付使用 <button>立即购买</button>
    </div>
</div>
<div id="side">
    <p><a href="index.html">首页</a></p>
    <p>用户中心</p>
    <div class="halfWidthLink">
        <a href="#">> 登录密码</a>
        <a href="#">> 提款密码</a>
        <a href="#">> 绑定卡号</a>
        <a href="#">> 充值提现</a>
    </div>
    <p>团队管理</p>
    <div class="halfWidthLink">
        <a href="#">> 推广链接</a>
        <a href="#">> 用户列表</a>
        <a href="#">> 手动注册</a>
        <a href="#">> 团队统计</a>
    </div>
    <p>点金产品</p>
    <div class="allWidthLink">
        <a href="#">> 重庆时时彩五星定位预测</a>
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
    <a class="signOut" href="login.html">退出登录</a>
</div>
</body>
<script type="text/javascript" src="/newskin/liaotian/jquery-1.11.1.min.js"></script>
<script type="text/javascript">

    $(function() {
        $('.tab a').click(function(){
            $(this).addClass('active').siblings('a').removeClass('active');
        })
        $('ul li a').click(function(){
            $('.preview').css('display','block')
        })
        $('.preview .closePreview').click(function(){
            $('.preview').css('display','none')
        })
        $('body').bind('click', function(event) {//侧边菜单栏
            // IE支持 event.srcElement ， FF支持 event.target
            // var evt = event.srcElement ? event.srcElement : event.target;
            // var evtParent = event.srcElement ? event.srcElement : event.target;
            var evt = $(event)[0].target;
            var evtParent = $(event)[0].target.parentElement;
            var evtParentParent = $(event)[0].target.parentElement.parentElement?$(event)[0].target.parentElement.parentElement:'';
            // console.log($(event));
            // console.log($(event)[0].target);
            // console.log($(event)[0].target.parentElement);
            // console.log($(event)[0].target.parentElement.parentElement);
            if(evt.id == 'more'||evtParent.id == 'more'){
                $('#side').css('left','50%');
                return;
            }else if(evt.id == 'side'||evtParent.id == 'side'||evtParentParent.id == 'side'){// 如果是元素本身，则返回
                return
            }else{
                $('#side').css('left','100%'); // 如不是则隐藏元素
            }
        });
    });

</script>

</html>