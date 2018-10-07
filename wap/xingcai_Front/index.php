<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no,email=no,date=no,address=no">
    <title>主页</title>
    <link rel="stylesheet" href="/css/nsc_m/public.css">
    <link rel="stylesheet" href="/newskin/liaotian/swiper.min.css">
    <style type="text/css">
        html{width:100%;height:100%;}
        body {width:100%;height:100%;background:url(img/lit.jpg) no-repeat center;background-size:100% 100%;}
        .head{width:100%;height:50px;background-color:#004BC8;display:flex;align-items:center;justify-content:space-between;position:fixed;top:0;left:0;}
        .head img{height:50px;}
        .head label{color:#fff;line-height:50px;font-size:16px;}
        .head #more{display:flex;align-items:center;justify-content:space-around;width:30px;margin-right:15px;height:50px;}
        .head #more span{background-color:#fff;width:6px;height:6px;border-radius:50%;display:inline-block;}
        .Advertisement{width:100%;}
        .guangao{display:flex;align-items:center;}
        .guangao img{flex:1;}
        .guangao .index_bigbanner{font-size:12px;flex:9;overflow:hidden}
        .guangao .index_bigbanner img{width:25px;height:25px;}
        .guangao .index_bigbanner a{color:#000;}
        .guangao .index_bigbanner .swiper-container .swiper-wrapper .swiper-slide{display:flex;align-items:center;}
        ul{margin:20px 0 60px;display: table;}
        ul li{width:25%;height:140px;font-size:14px;margin:0 4%;float:left;}
        ul li .top{text-align:center;background:rgba(177,202,230,0.3);padding:2px 0 0 2px;margin-bottom:2px;}
        ul li .top .title{background:rgba(173,203,229,0.7);padding:5px 0;}
        ul li .top .description{margin-top:10px;height:60px;}
        ul li a{background-color:#ff7800;color:#fff;width:100%;text-align:center;display:inline-block;padding:5px 0;}
        .tab{position:fixed;bottom:0;width:100%;height:50px;line-height:50px;background-color:#fff;z-index:2;}
        .tab a{width:33%;display:inline-block;float:left;text-align:center;color:#0048C8;font-size:16px;}
        .tab a.active{color:#fff;background-color:#0048C8;}
        .preview{box-sizing:border-box;width:100%;height:100%;background:rgba(0,0,0,0.8);position:fixed;left:0;top:50px;padding:10px 15px 0 35px;z-index:1;display:none;}
        .preview .closePreview{color:#ffd9b5;text-align:right;line-height:30px;}
        .preview .product p{color:#ffd9b5;text-align:left;line-height:30px;}
        .preview .product p button{background-color:#ff7800;border:none;}
        .preview .price{border:1px solid #fff;text-align:left;padding:10px 0 0 20px;margin:10px 0 0;}
        .preview .price p{margin-bottom:10px;}
        .preview .price .pre{color:#dafff7;}
        .preview .price .num{color:#ffffb9;font-size:16px;}
        .preview .summary{color:#fff;font-size:16px;box-sizing:border-box;margin-top:10px;}
        .preview .summary span{padding:5px;background-color:#ffa800;margin-right:2px;white-space:nowrap;margin-bottom:5px;display:inline-block;}
        .preview .description{color:#fff;text-indent:2em;font-size:14px;}
        .preview .description:ntn-child(1){margin-top:15px;}
        .preview .buy{position:fixed;bottom:60px;color:#fff;}
        .preview .buy button{border:none;padding:8px;background-color:#ffa800;color:#fff;margin-left:15px;font-size:16px;}
        #mask{position:fixed;width:100%;height:100%;background:rgba(0,0,0,0);left:0;top:0;z-index:3;display:none;}
        #side{width:50%;height:100%;background:rgba(0,0,0,0.8);position:fixed;left:100%;top:0;z-index:4;transition:.3s;}
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
    <label>欢迎您！<?=$this->user['username']?></label>
    <div class="more" id="more">
        <span></span><span></span><span></span>
    </div>
</div>
<img src="/images/nsc_m/advertisement.png" class="Advertisement">
<div class="guangao">
    <img src="/images/nsc_m/horn.png">
    <div class="index_bigbanner">
        <div class="swiper-container swiper-container-horizontal swiper-container-wp8-horizontal">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><a href="#"> 点金EA将于2018年10月31日推出EA2000自动下单系统，查看详情</a></div>
                <div class="swiper-slide"><a href="#"> 稳定不赔的智能刷量系统，只接受最多998预定名额，速度抢购</a></div>
                <div class="swiper-slide"><a href="#"> 金秋十月，让我们携手共进，将数据转化为实实在在的财富</a></div>
            </div>
        </div>
    </div>
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
    <p class="description">万全策略 ，盈利伴随您左右！</p>
    <p class="description">一次合作，终生朋友！</p>
    <p class="description">高频彩精确制导专家-点金数据！</p>
    <div class="buy">
        2018年10月1日前交付使用 <a href="/index.php/cash/recharge"><button>立即购买</button></a>
    </div>
</div>
<div class="preview new_hide">
    <p class='closePreview'>关闭</p>
    <div class="product">
        <p>分分刷量</p>
        <p>本金自定，日刷5-50倍</p>
    </div>
    <div class="price">
        <p class="pre">预售298/月  598/季  1298/年</p>
        <p class="num">名额限5000人，目前剩余3980</p>
    </div>
    <div class="summary">
        <span style="background-color:#004BC8;">承诺服务</span>
        <span>24H服务</span>
        <span>免费升级</span>
        <span>亏损退费补偿</span>
    </div>
    <p class="description">
        针对腾讯分分彩的刷量程序，程序分高低档，低档保证5-10倍流水而不亏损，高档对本金要求高，
        流水可达50倍以上，但不保证本金。建议1000本金挂机。档位设置按系统默认参数。
    </p>
    <p class="description">万全策略 ，盈利伴随您左右！</p>
    <p class="description">一次合作，终生朋友！</p>
    <p class="description">高频彩精确制导专家-点金数据！</p>
    <div class="buy">
        2018年11月15日前交付使用 <a href="/index.php/cash/recharge"><button>立即购买</button></a>
    </div>
</div>
<div class="preview new_hide">
    <p class='closePreview'>关闭</p>
    <div class="product">
        <p>极限回补</p>
        <p>本金500以上  日盈5%左右</p>
    </div>
    <div class="price">
        <p class="pre">预售298/月  598/季  1298/年</p>
        <p class="num">名额限5000人，目前剩余3980</p>
    </div>
    <div class="summary">
        <span style="background-color:#004BC8;">承诺服务</span>
        <span>24H服务</span>
        <span>免费升级</span>
        <span>亏损退费补偿</span>
    </div>
    <p class="description">
        针对北京赛车的极限算法，回溯一年历史，表现稳定，参数及资金策略固定不可调。
    </p>
    <p class="description">万全策略 ，盈利伴随您左右！</p>
    <p class="description">一次合作，终生朋友！</p>
    <p class="description">高频彩精确制导专家-点金数据！</p>
    <div class="buy">
        2018年11月31日前交付使用 <a href="/index.php/cash/recharge"><button>立即购买</button></a>
    </div>
</div>
<div class="preview new_hide">
    <p class='closePreview'>关闭</p>
    <div class="product">
        <p>算法开发</p>
        <p>针对彩种：时时彩、北京赛车、快3</p>
    </div>
    <div class="summary">
        <span style="background-color:#004BC8;">承诺服务</span>
        <span>7*18H服务</span>
        <span>终生技术支持</span>
    </div>
    <p class="description">
        智能分析，智慧选号，智享未来！
    </p>
    <div class="buy">
        交付时间商议 <a href="/index.php/cash/recharge"><button>立即购买</button></a>
    </div>
</div>
<div class="preview new_hide">
    <p class='closePreview'>关闭</p>
    <div class="product">
        <p>自动下单</p>
        <p>自带算法或使用点金的算法，平台自选</p>
        <p>20000元/平台</p>
    </div>
    <div class="summary">
        <span style="background-color:#004BC8;">承诺服务</span>
        <span>24H服务</span>
        <span>技术支持维护</span>
    </div>
    <p class="description">
        不是每个平台都能实现，如果是可实现的，则在决定合作后15天左右交付客户多用户使用则另行商议。
    </p>
    <p class="description">智能分析，智慧选号，智享未来！</p>
    <div class="buy">
        15-30天开发周期 <a href="/index.php/cash/recharge"><button>立即购买</button></a>
    </div>
</div>
<div class="preview new_hide">
    <p class='closePreview'>关闭</p>
    <div class="product">
        <p>合作共赢</p>
        <p>推广：索取推广及分红制度请加客服微信：dianjinshuju99 <button>点击复制</button></p>
        <p>联运：索取联合运营方式请发邮件至3599809366@qq.com</p>
        <p>众筹：索取众筹或入股合作方式请发邮件至3476672125@qq.com</p>
        <p>彩票千算万算，不如点金计算！</p>
    </div>
</div>
<div id="mask"></div>
<div id="side">
    <p><a href="#">首页</a></p>
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
    <a class="signOut" href="/index.php/user/logout">退出登录</a>
</div>


<script type="text/javascript" src="/newskin/liaotian/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="/newskin/liaotian/swiper.min.js"></script>
<script type="text/javascript">

    $(function() {
        $('.tab a').click(function(){
            $(this).addClass('active').siblings('a').removeClass('active');
        })
        $('ul li a').click(function(){
            var index=$(this).parent().index()
            $('.preview').eq(index).show().siblings('.preview').hide();
        })
        $('.preview .closePreview').click(function(){
            $('.preview').css('display','none')
        })
        $("#more").click(function(){
            $('#side').css('left','50%');
            $('#mask').css('display','block');
        })
        $("#mask").click(function(){
            $('#side').css('left','100%');
            $('#mask').css('display','none');
        })

        //轮播图
        window.onload=function(){
            var mySwiper = new Swiper('.index_bigbanner .swiper-container', {
                autoplay: 3000,
                autoplayDisableOnInteraction : true,//用户操作停止自动播放
            });
        }
    });

</script>


<?php $this->display('inc_daohang_foot.php'); ?>

</html>