
<style>
    #side{width:50%;height:100%;background:rgba(0,0,0,0.8);position:fixed;left:100%;top:0;z-index:9999;transition:.3s;}
    #side p{color:#aecfff;padding:0 10px 0 25px;line-height:50px;border-bottom:1px solid #53cece;}
    #side p a{color:#aecfff;}
    #side .halfWidthLink{padding:10px 10px 10px 25px;border-bottom:1px solid #53cece;}
    #side .halfWidthLink a{color:#fff;font-size:12px;width:48%;white-space:nowrap;display:inline-block;}
    #side .halfWidthLink a:nth-child(2n){text-align:right;}
    #side .allWidthLink{padding:10px 10px 10px 25px;border-bottom:1px solid #53cece;}
    #side .allWidthLink a{color:#fff;font-size:12px;width:100%;white-space:nowrap;display:inline-block;}
    #side .signOut{color:#fff;font-size:12px;position:absolute;right:5px;bottom:10px;}
</style>


    <!--侧导航 -->
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
            <a href="/index.php/team/coin">> 收益记录/a>
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
            <a href="#">QQ客服：3476672125</a>
            <a href="#">点金①群：795103784</a>
            <a href="#">点金②群：864452778</a>
            <a href="#">商务合作：3599809366</a>
        </div>
        <a class="signOut" href="javascript:m_loginout()">退出登录</a>
    </div>


    <script type="text/javascript">

        $(function() {
            $('.tableHead span').click(function(){//‘用户中心’，‘团队管理’，‘客服服务’之间的切换
                $(this).addClass('active').siblings('span').removeClass('active');
                var index = $(this).index();
                $('.content1').eq(index).show().siblings('.content1').hide();
            });
            $('.userCenter .tab span').click(function(){//‘用户中心’页面下菜单之间的切换
                $(this).addClass('active').siblings('span').removeClass('active');
                var index = $(this).index();
                $('.content2').eq(index).show().siblings('.content2').hide();
            });
            $('.teamManage .tab span').click(function(){//‘团队管理’页面下菜单之间的切换
                $(this).addClass('active').siblings('span').removeClass('active');
                var index = $(this).index();
                $('.content3').eq(index).show().siblings('.content3').hide();
            });
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