<?php
	$login_user = $this -> session -> userdata("login_user");
	if(isset($login_user))
		$user_id=0;
	else 
		$user_id=$login_uer->user_id;
?>
<!DOCTYPE HTML>
<html>
<head>

<title>sc.chinaz.com</title>
<!--CSS-->
<link rel="stylesheet" href="<?php echo site_url('assets/css/styles.css');?>" />
<link rel="stylesheet" href="<?php echo site_url('assets/css/register.css');?>" />
<link href="<?php echo site_url('assets/bootstrap/bootstrap/css/bootstrap.css');?>" rel="stylesheet">
<!--Google Webfont -->
<link href='http://fonts.googleapis.com/css?family=Istok+Web' rel='stylesheet' type='text/css' />
<!--Javascript-->
<script src="<?php echo site_url('assets/bootstrap/bootstrap/js/jquery-1.9.1.min.js');?>"></script> 
<script src="<?php echo site_url('assets/bootstrap/bootstrap/js/bootstrap.js');?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/jquery-1.7.2.min.js');?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/jquery.flexslider.js');?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/jquery.easing.js');?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/jquery.jcarousel.js');?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/form_elements.js');?>"></script><!-- 
<script type="text/javascript" src="<?php echo site_url('assets/js/custom.js');?>"></script> -->
<!--[if lt IE 9]>
    <script src="js/html5.js"></script>
<![endif]-->
<!-- mobile setting -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>
<div class="wrapper">
    <div class="header_container">
        <!--Header Starts-->
        <header>
            <div class="top_bar clear">
                <!--Top Links Starts-->
                <ul class="top_links">
                    <li><a href="#login" data-toggle="modal">登陆</a></li>
                    <li class="highlight"><a href="<?php echo site_url('user/reg');?>">注册</a></li>
                     <li style="color:#fff;display:block;padding:10px">当前的用户:</li>
                    <li>	
                    <?php
							if($login_user){
						?>
							<a href="<?php echo site_url('')?>"><?php echo $login_user->user_name;?></a>
							</li>
							<li>
							<a href="<?php echo site_url('user/Exit0');?>">退出</a>
							<?php }
							?>
					</li>
                </ul>
                <!--Top Links Ends-->
                <div class="modal hide fade" id="login"> <!--fade添加一个动画-->
                          <!--页头-->
                          <div class="modal-header">
                            <a href="#" class="close" data-dismiss="modal">×</a> 
                            <h4>用户登录</h4>
                          </div>
                          <!--主体-->
                          <div class="modal-body">
                              <form class="form-horizontal" action="<?php echo site_url('user/do_login')?>" method="post">
                              
                                    <div class="control-group">
                                        <label class="control-label">用户名</label>
                                        <div class="username">
                                          <input type="text" name="username">
                                        </div>
                                    </div>
                                    
                                    <div class="control-group">
                                      <label class="control-label">密码</label>
                                      <div class="password">
                                        <input type="password" name="pwd">
                                      </div>
                                    </div>
	                                <div class="modal-footer"> 
	                            		<!-- <a href="<?php echo site_url('user/do_login');?>" class="btn btn-primary" >登录</a> -->
	                        		 	<input type="submit" class="btn btn-primary" value="登录" />
	                        		 </div>
                              </form>
                         </div>
                         <!--页脚-->
                      </div>
            </div>
            <!--Logo Starts-->
            <h1 class="logo"> <a href="<?php echo site_url('user/index');?>"><img src="<?php echo site_url('assets/images/logo.png');?>" /></a> </h1>
            <!--Logo Ends-->

        </header>
        <!--Header Ends-->
    </div>
    <div class="navigation_container"> 
    <!--Navigation Starts-->
    <nav>
      <ul class="primary_nav">
        <li class="active"><a href="<?php echo site_url('user/leisure_listing')?>">女装</a> 
                </li>
                <li><a href="<?php echo site_url('user/leisure_listing1');?>">男装</a>
                </li>
        	<li><a href="<?php echo site_url('user/leisure_listing2');?>">童装</a></li>
        <li><a href="<?php echo site_url('user/leisure_listing3');?>">时尚</a></li>
                <li><a href="#">其他</a></li>
            </ul>
    </nav>
    <!--Navigation Ends--> 
  </div>
    <div class="section_container">
        <!--Mid Section Starts-->
        <section>
       <div class="register clearfix">
        <h2>注册</h2>
        <div class="register-mls">
            <form id="register-form" method="post" action="<?php echo site_url('user/do_reg');?>">
               <input type="text" id="f_email" class="email r-ipt" name="email" placeholder="电子邮箱"/>
               <span id='email_tip' class='nodisp' style="display:none">邮箱已存在</span>
               
               <input class="r-ipt" id="nickname" type="text" name="nickname" value="" placeholder="昵称">
               <span id="nick" style="display:none">由字母开头</span>
                
               <input class="r-ipt" id="password" name="password" type="password" value="" placeholder="密码" >
               <span id='mima' style="display:none">至少六位</span>
                
               <input type="text" id="tel" class="email r-ipt tel" name="tel" placeholder="联系方式"/>
               <span style="display:none">填手机号码</span>
                
               <input type="text" id="address" class="email r-ipt" name="address" placeholder="地址"/>
                
               <!--  <p class="gender-box">
                    <input name="gender" id="genderF" type="radio" value="女" checked="true">
                    <label class="mr14-f" for="genderF">女</label>
                    <input name="gender" id="genderM" type="radio" value="男">
                    <label for="genderM">男</label>
                </p> -->
                </br>
                <button type="submit" value="立即注册" class="register-btn">立即注册</button>
                <!-- <p>
                    <input type="checkbox" name="agreement" checked="checked">
                    <label for="agreement">同意</label><a href="#" class="agree">注册条款</a>
                </p> -->
            </form>

        </div>

            <!--Newsletter_subscribe Ends-->
        </section>
        <!--Mid Section Ends-->
    </div>
    <div class="footer_container">
    </div>
</div>
<!--FORM SUBMIT-->
<script>
	$(function(){
	
	$('#f_email').blur(function(){   //判断邮箱是否已经注册
		//url, param, callback, type
		$.get("<?php echo site_url('user/check_name');?>", {'account': this.value}, function(data){
			if(data == "fail"){
				$('#email_tip').css({
					color: 'red',
					display:'inline'
				});
			}
			else if(data=='success'){
				$('#email_tip').css({
					display:'none'
				});
			}
		},"text");
	});
	$('#nickname').keyup(function(){     //判断用户名是否以字母开头
		//alert('hahha');
		$.get("<?php echo site_url('user/check_nickname');?>", {'nick': this.value}, function(data){
			if(data == "fail"){
				$('#nick').css({
					color: 'red',
					display:'inline'
				});
			}
			else{
				$('#nick').css({
					display:'none'
				});
			}
		},"text");
	});
	$('#password').blur(function(){   //判断密码是否满足六位
		//alert('hahha');  
		$.get("<?php echo site_url('user/check_mima');?>", {'mima': this.value}, function(data){
			if(data == "fail"){
				$('#mima').css({
					color: 'red',
					display:'inline'
				});
			}
			else{
				$('#mima').css({
					display:'none'
				});
			}
		},"text");
	});
});

</script>

<!--CUSTOMIZE-->
<style type="text/css">
.page_selector{ position:absolute; right:0px; top:28%;}
.page_selector a.page_open{ display:inline-block; width:60px; height:12px; background:#252525; color:#fff; text-align:center; font-size:14px; padding:20px 0px; font-weight:bold; text-decoration:none; float:left;}
.page_selector ul{ float:left; background:#f0f0f0; padding:10px 0px; border-top:solid 2px #000; border-bottom:solid 2px #000; display:none;}
.page_selector ul li{ padding:8px 10px; }
.page_selector ul li a{ font-weight:bold; text-decoration:none; color:#000; display:block; padding:2px 5px; text-transform:uppercase; font-size:11px;}

.store_selector{ position:absolute; left:0px; top:28%;}
.store_selector .store_open{display:inline-block; width:128px; height:55px;}
.store_selector div{ float:left; width:157px; height:226px; display:none;}
</style>
<script type="text/javascript">
$(document).ready(function(){
	//SLIDE TOGGLE
	jQuery(".page_open").toggle(function() {
		 $('.page_selector ul').slideDown(300);	
		 }, function(){
		 $('.page_selector ul').slideUp(300);		 
	});	
	//SLIDE TOGGLE
	jQuery(".store_open").toggle(function() {
		 $('.store_selector div').slideDown(300);	
		 }, function(){
		 $('.store_selector div').slideUp(300);		 
	});		
});

</script>

<div class="page_selector">
<a href="#" class="page_open">PAGES</a>
<ul>
	<li> <a href="<?php echo site_url('user/index');?>">HOME</a></li>
    <li> <a href="<?php echo site_url("admin/back/admin_login")?>">Admin</a></li>
</ul>
</div>
<!--CUSTOMIZE-->
</body>
</html>
