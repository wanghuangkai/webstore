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
<link href="<?php echo site_url('assets/bootstrap\bootstrap\css\bootstrap.css');?>" rel="stylesheet">

<!--Google Webfont -->
<link href='http://fonts.googleapis.com/css?family=Istok+Web' rel='stylesheet' type='text/css' />
<!--Javascript-->

<script src="<?php echo site_url('assets/bootstrap/bootstrap/js/jquery-1.9.1.min.js');?>"></script> 
<script src="<?php echo site_url('assets/bootstrap/bootstrap/js/bootstrap.js');?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/jquery-1.7.2.min.js');?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/jquery.flexslider.js');?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/jquery.easing.js');?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/jquery.jcarousel.js');?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/form_elements.js');?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/custom.js');?>"></script>
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
          <li><a href="#login" data-toggle="modal">登录</a></li>
          <li class="highlight"><a href="<?php echo site_url('user/reg');?>">注册</a></li>
          <li style="color:#fff;display:block;padding:10px">当前的用户:</li>
          <li>	
             	<?php
					if($login_user){
				?>
				<a href="<?php echo site_url('user/form/'.$login_user->user_name)?>"><?php echo $login_user->user_name;?></a>
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
      <!--Search Starts-->
      <form class="header_search" />
        <div class="form-search">
          <input id="search" type="text" name="q" value="" class="input-text" autocomplete="off" placeholder="Search" />
          <button type="submit" title="Search"></button>
        </div>
      </form>
      <!--Search Ends--> 
      
    </header>
    <!--Header Ends--> 
  </div>
    <div class="navigation_container"> 
    <!--Navigation Starts-->
    <nav>
      <ul class="primary_nav">
        		<li class="active"><a href="<?php echo site_url('user/leisure_listing');?>">女装</a> 
                </li>
                <li><a href="<?php echo site_url('user/leisure_listing1');?>">男装</a>
                </li>
                <li><a href="<?php echo site_url('user/leisure_listing2');?>">童装</a></li>
                <li><a href="<?php echo site_url('user/leisure_listing3');?>">时尚</a></li>
                <li><a href="#">其他</a></li>
            </ul>
      <!-- <div class="minicart"> <a href="#" class="minicart_link"> <span class="item"><b>2</b> ITEM /</span> <span class="price"><b>$69.20</b></span> </a>
        <div class="cart_drop"> <span class="darw"></span>
          <ul>
            <li><img src="<?php echo site_url('assets/images/mini_c_item1.png');?>" /><a href="#">Clogs Beach/Garden Clog</a> <span class="price">$49.90</span></li>
            <li><img src="<?php echo site_url('assets/images/mini_c_item2.png');?>" /><a href="#">Faded chambray shorts</a> <span class="price">$12.90</span></li>
            <div class="cart_bottom">
              <div class="subtotal_menu"><small>Subtotal:</small><big>$69.20</big></div>
              <a href="<?php echo site_url('user/leisure_cart');?>">Checkout</a></div>
          </ul>
        </div>
      </div> -->
    </nav>
    <!--Navigation Ends--> 
  </div>
    <div class="section_container">
        <!--Mid Section Starts-->
        <section>
            <div class="full_page">
                <h1>请填写订单信息...</h1>
                <!--CHECKOUT STEPS STARTS-->
                <div class="checkout_steps">
                    <ol id="checkoutSteps">
                        <li class="section allow active" id="opc-login">
                            <div class="step-title">
                                <h2>亲爱的：<?php
								if($login_user){
								?>
								<?php echo $login_user->user_name;?>
							<?php }
							?></h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="#" style="color:white; text-decoration: none; float:right; font-size:16px;">Exit</a>
                            </div>
                            <?php 
											$a=0;
											foreach($cart as $cart)
											{
												
												$a=$a+$cart->p_jiage;
											}
											?>
                           <!--  <div id="checkout-step-login"> -->
                                <div class="register clearfix">
                                <div class="register-mls">
                                    <form id="register-form" method="post" action="<?php echo site_url('user/buy_product/'.$login_user->user_name)?>">
                                        <p >
                                            <input type="text" style="height:34px;" id="user" class="email r-ipt" name="user" placeholder="用户名"/>
                                        </p>
                                        <p >
                                            <input class="r-ipt" style="height:34px;" id="name" type="text" name="nickname" value="" placeholder="昵称">
                                        </P>
                                        <p >
                                            <input type="text" style="height:34px;" id="tel" class="email r-ipt" name="email" placeholder="联系方式"/>
                                        </p>
                                        <p >
                                            <input type="text" style="height:34px;" id="address" class="email r-ipt" name="address" placeholder="地址"/>
                                        </p style="height:34px;">
                                         <p>
                                            <textarea name="beizhu" id="beizhu" class="beizhu email r-ipt" cols="50" rows="20" placeholder="备注"></textarea>
                                        </p>
                                       <!--  <p class="gender-box">
                                            <input name="gender" id="genderF" type="radio" value="女" checked="true">
                                            <label class="mr14-f" for="genderF">女</label>
                                            <input name="gender" id="genderM" type="radio" value="男">
                                            <label for="genderM">男</label>
                                        </p> -->
                                            <a href="#com" data-toggle="modal"><button type="submit" value="立即购买" class="register-btn" >立即购买</button></a>
                                        <!-- <p>
                                            <input type="checkbox" name="agreement" checked="checked">
                                            <label for="agreement">同意</label><a href="#" class="agree">注册条款</a>
                                        </p> -->
                                    </form>
                                    <div class="modal hide fade" id="com"> <!--fade添加一个动画-->
                                          <!--页头-->
                                          <div class="modal-header" style="position:relative;">
                                            <a href="#" class="close" data-dismiss="modal">×</a>
                                            <h4><img src="<?php echo site_url('assets/images/box.png');?>" style="margin-bottom:20px;" /> 购买成功！你所支付的金额为<?php $a=$a+10;echo $a?>元</h4>
                                            <div><!-- <img src="" style="margin-bottom:20px; margin-left:40px;" /> -->
                                            	&nbsp;&nbsp;&nbsp;商品信息</div></div>
                                          <!--主体-->
                                          <div class="modal-body"> 
                                                    <a href="<?php echo site_url('user/leisure_listing');?>" style="text-decoration:none;font-size:12px; margin-left:40px;color:#F38256"><img src="images/cart_icon.png" alt="">继续购买</a>
                                                    <!-- <div style="float:right; margin-right:30px;"><a href="<?php echo site_url('user/comment');?>" style="text-decoration:none;font-size:12px;color:#F38256">  -->
                                                    	<a href="<?php echo site_url('user/index')?>" style="text-decoration:none;font-size:12px;color:#F38256">继续购物</a></a></div>
                                         </div>
                                         <!--页脚-->
                                         
                                      </div>

                                </div>
                           <!--  </div>  -->
                        </li>
                    </ol>
                </div>
                <!--CHECKOUT STEPS ENDS-->
                <div class="col_right">
                    <div class="block-progress">
                        <div class="block-title">您的结账进展</div>
                            <ul>
                                <li>订单地址</li>
                                <li>送货地址</li>
                                <li>送货方式</li>
                                <li>支付方式</li>
                            </ul>
                    </div>
                    <div class="right_promo">
                    <img src="<?php echo site_url('assets/images/side_promo_banner.jpg');?>" />
                    </div>
                </div>
            </div>
            <!--Newsletter_subscribe Starts-->
            <div class="subscribe_block">
                <div class="find_us">
                    <h3>找到我们</h3>
                    <a class="twitter" href="#"></a> <a class="facebook" href="#"></a> <a class="rss" href="#"></a> </div>
                <div class="subscribe_nl">
                    <h3>订阅我们的新闻</h3>
                    <small>即时衣柜更新，新来港定居人士，时尚新闻，不要错过任何一个节拍 - 报名参加我们的通讯了。</small>
                    <form id="newsletter" method="post" action="#" />
                        <input type="text" class="input-text" value="Enter your email" title="Enter your email" id="newsletter" name="email" />
                        <button class="button" title="" type="submit"></button>
                    </form>
                </div>
            </div>
            <!--Newsletter_subscribe Ends-->
        </section>
        <!--Mid Section Ends-->
    </div>
    <div class="footer_container">
    </div>
</div>
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

<div class="store_selector">
<a href="#" class="store_open"><img src="../assets/choose.jpg" /></a>
<div>
<img src="../assets/shops.jpg" border="0" usemap="#Map" />
<map name="Map"><area shape="rect" coords="3,171,159,222" href="../Lingerie_shop/leisure_index.html" /><area shape="rect" coords="1,115,157,166" href="../Watch_shop/leisure_index.html" /><area shape="rect" coords="0,59,156,110" href="../Gadget_shop/leisure_index.html" />
  <area shape="rect" coords="2,3,158,54" href="leisure_index.html" />
</map>
</div>
</div>

<div class="page_selector">
<a href="#" class="page_open">PAGES</a>
<ul>
	<li> <a href="<?php echo site_url('user/index');?>">HOME</a></li>
		<li> <a style="display: <?php if(!$login_user) echo 'none';?>"  href="<?php echo site_url('user/collections/'.$login_user->user_id);?>">USER'S COLLECTION</a></li>
    <li> <a href="<?php echo site_url("admin/back/admin_login")?>">Admin</a></li>
</ul>
</div>
<script>
	$(function(){
		$('.register-btn').on('click',function(){
			$.get('<?php echo site_url('user/buy_product/'.$a)?>',{
			'user':$('#user').val(),
			'name':$('#name').val(),
			'address':$('#address').val(),
			'tel':$('#tel').val(),
			'beizhu':$('#beizhu').val()
			},function(data){},'text')
		});
	});
</script>
<!--CUSTOMIZE-->
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>