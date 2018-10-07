<html xmlns="http://www.w3.org/1999/xhtml" style="font-size: 16.56px;"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0,user-scalable=no,maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
<meta name="screen-orientation" content="portrait">
<meta name="x5-orientation" content="portrait">
    <title>官方网站</title>
    <link rel="stylesheet" href="/css/nsc_m/normalize.css?v=1.17.1.12">
	<script type="text/javascript" src="/skin/js/jquery-1.8.0.min.js"></script>
	<script type="text/javascript" src="/skin/js/onload.js"></script>
<script type="text/javascript" src="/skin/main/reglogin.js"></script>
<script type="text/javascript" src="/skin/js/gamecommon.js"></script>
   <style media="screen">
       html{width:100%;height:100%;}
       body {width:100%;height:100%;margin:0;background:url(/images/timg.jpg) no-repeat center;background-size:100% 100%;}
       .logo{width:110px;height:135px;background-color:#fff;display:block;margin:0 auto;margin-top:30px;margin-bottom:30px;}
       input{display:block;margin:0 auto;width:80%;margin-bottom:30px;height:44px;background:rgba(157,157,157,0.7);padding:0 3%;border:none;color:#fff;font-size:16px;}
       input::-webkit-input-placeholder, textarea::-webkit-input-placeholder {color: #B1E8FF;font-size:16px;}
       .check{width:80%;margin:0 auto;display:flex;justify-content:flex-start;align-items:center;}
       .check input{width:49%;margin:0;display:inline-block;}
       .check label{display:inline-block;width:49%;height:44px;background:rgba(157,157,157,0.9);margin-left:2%;line-height:44px;color:#B4F0FF;text-align:center;font-size:30px;}
       button{width:86%;height:44px;text-align:center;font-size:25px;color:#fff;padding:0;display:block;margin:0 auto;line-height:44px;margin-top:35px;background:rgba(23,109,113,0.8);border:none;}
       .bottom{color:#B1E8FF;text-align:center;width:100%;margin-top:80px;}
    </style>
	<!--<script>alert('咨询QQ：925475');</script>-->
    <script type="text/javascript">
        ;(function(win){
            var doc = win.document;
            var docEl = doc.documentElement;
            var tid,rem,initialFontSize = 27,initialWidth = 675;
            refreshRem();
            win.addEventListener('resize', function() {
                clearTimeout(tid);
                tid = setTimeout(refreshRem, 300);
                fnCheckMobile();
            }, false);

            win.addEventListener('pageshow',function(e){
                if(e.persisted){
                    clearTimeout(tid);
                    tid = setTimeout(refreshRem, 300);
                    fnCheckMobile();
                }
            }, false);

            function refreshRem(){
                var width = docEl.getBoundingClientRect().width,
                    height = docEl.getBoundingClientRect().height;
                var orientation = width>height?"landscape":"portrait";
                if(orientation === "landscape"){
                    rem = height*initialFontSize/initialWidth;
                }else{
                    if(width > 540)width = 540;
                    rem = width*initialFontSize/initialWidth;
                }
                docEl.style.fontSize = rem + 'px';
            }
        })(window);

                window.onload = function(){
            var isLoginNow = true;
            var events = {
              
                "submit form":fnFormSubmit,//表单提交
                "blur #username":fnCheckUname,//用户名验证
                "blur #password":fnCheckUpass,//密码验证
                "blur #vcode":fnCheckCode,//验证码
                "click #dvcode":refreshimg//刷新验证码
            }
            if(typeof Object.keys === "function"){
                Object.keys(events).forEach(function(ele,index){
                    var eventDetail = ele.split(" ");
                    var eventType = eventDetail[0],
                        eventListener = events[ele],
                        selector = document.querySelectorAll(eventDetail[1]);
                    [].forEach.call(selector,function(ele,index){
                        ele.addEventListener(eventType,eventListener,false);
                    });
                });
            }else{
                for(var key in events){
                    var eventDetail = key.split(" ");
                    var eventType = eventDetail[0],
                        eventListener = events[key],
                        selector = document.querySelectorAll(eventDetail[1]);
                    for(var i = 0;i<selector.length;i++){
                        selector[i].addEventListener(eventType,eventListener,false);
                    }
                }
            }
          
            function fnFormSubmit(e){//表单提交
                e.preventDefault();
                var passedArr = [],valArr = [];
                [].forEach.call(this.querySelectorAll("input"),function(ele,index){
                    var val = ele.value;
                    var tPassed = !(val === "" || ele.classList.contains("has-error"));
                    passedArr.push(tPassed);
                    valArr.push(val);
                });
                if(passedArr.indexOf(false) > -1){
                    layer.open({
                        content:"请正确填写完整的信息",
                        btn:"确定"
                    });
                }else{
                   // LoginNow(valArr[0],valArr[1],valArr[2]);
                }
            }
            function fnCheckUname(){//验证用户名
                var uname = this.value;
                if(uname === " " || !uname){
                    this.setAttribute("placeholder","用户名不能为空");
                    this.className  = "has-error";
                }else{
                    this.className = "";
                }
            }
            function fnCheckUpass(){//验证密码
                var upass = this.value;
                if(upass === " " || !upass){
                    this.setAttribute("placeholder","密码不能为空");
                    this.className  = "has-error";
                }else{
                    this.className = "";
                }
            }
            function fnCheckCode(){//验证码核对
                var code = this.value;
                if(code === " " || !code){
                    this.setAttribute("placeholder","验证码不能为空");
                    this.className  = "has-error";
                }else{
                    this.className = "";
                }
            }
            function refreshimg(){
                var url = "/index.php/user/vcode/" + (new Date()).getTime();
                document.querySelector("#dvcode").src = url;
            }

        }
    </script></head>

<body>
<img src="/images/logo.png" class="logo">
<form action="/index.php/user/logined" method="post" onajax="userBeforeLogin" enter="true" call="userLogin" target="ajax">
<input type="text" id="username" name="username" placeholder="请输入账号">
<input type="password" id="password" name="password" placeholder="请输入密码">
<div class="check">
    <input type="text" id="vcode" name="vcode" maxlength="4"  placeholder="输入验证码" class="check" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')">
    <label><img title="点击刷新" style="cursor:pointer;width:100%;height:100%;" id="dvcode" name="dvcode" src="/index.php/user/vcode/<?=$this->time?>"></label>
</div>
<button type="submit">登录</button>
</form>
<div class="bottom">
    <p>查看点金EA服务协议</p>
    <p>copyright by www.dianjinshuju.com</p>
</div>
<script type="text/javascript" src="/js/nsc_m/libs/layer.js?v=1.17.1.12"></script>
</body>
</html>
