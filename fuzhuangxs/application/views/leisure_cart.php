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
        <!--Language Switcher Starts-->
        <div class="language_switch"> <a class="active" href="#" title="ENGLISH">EN</a> <a href="#" title="FRENCH">FR</a> </div>
        <!--Language Switcher Ends--> 
        
        <!--Top Links Starts-->
        <ul class="top_links">
          <li><a href="#login" data-toggle="modal">登陆</a></li>
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
        		<li><a href="<?php echo site_url('user/leisure_listing');?>">女装</a> 
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
              <a href="<?php echo site_url('user/sleisure_cart');?>">Checkout</a></div>
          </ul>
        </div>
      </div> -->
    </nav>
    <!--Navigation Ends--> 
  </div>
  <div class="section_container"> 
    <!--Mid Section Starts-->
    <section> 
      <!--CART STARTS-->
      <div id="shopping_cart" class="full_page">
        <h1>购物车</h1>
        <div class="message success"></div>
        <div class="cart_table">
          <table class="data-table cart-table" id="shopping-cart-table" cellpadding="0" cellspacing="0">
            <tr>
              <th colspan="2">Products</th>
              <th class="align_center" width="6%"></th>
              <th class="align_center" width="12%">Unit Price</th>
              <th class="align_center" width="10%">Qty</th>
              <th class="align_center" width="12%">Subtotal</th>
              <th class="align_center" width="6%"></th>
            </tr>
            <?php 
            $yunfei=0;
            $sum=0;
            foreach($cart as $cart)
            {
            	$sum=$sum+$cart->p_jiage;
     		?>
            <tr>
              <td width="10%"><img src="<?php echo site_url($cart->url);?>" /></td>
              <td class="align_left" width="44%"><a class="pr_name" href="#"><?php echo $cart->p_name?></a><span class="pr_info">Proin gravida </span></td>
              <td class="align_center"><a href="#" class="edit">Edit</a></td>
              <td class="align_center vline"><span class="price"><?php echo $cart->p_jiage?></span></td>
              <td class="align_center vline"><input class="qty_box" type="text" /></td>
              <td class="align_center vline"><span class="price"><?php echo $cart->p_jiage?></span></td>
              <td class="align_center vline"><a href="<?php echo site_url('user/del/'.$cart ->id)?>" class="remove"></a></td>
            </tr>
            <?php
            }
            ?>
            <!-- <tr>
              <td><img src="<?php echo site_url('assets/images/cart2.jpg');?>" /></td>
              <td class="align_left" width="44%"><a class="pr_name" href="#">Notch-collar shirt</a><span class="pr_info">Proin gravida </span></td>
              <td class="align_center"><a href="#" class="edit">Edit</a></td>
              <td class="align_center vline"><span class="price">$49.90</span></td>
              <td class="align_center vline"><input class="qty_box" type="text" /></td>
              <td class="align_center vline"><span class="price">$49.90</span></td>
              <td class="align_center vline"><a href="#" class="remove"></a></td>
            </tr> -->
            <?php if($sum>=400)
            	$yunfei=0;
				else
					$yunfei=10;
            ?>
          </table>
          <div class="totals">
            <table id="totals-table">
                <tr>
                  <td width="60%" colspan="1" class="align_left"><strong>Subtotal</strong></td>
                  <td class="align_right" style=""><strong><span class="price">￥<?php echo $sum;?></span></strong></td>
                </tr>
                <tr>
                  <td width="60%" colspan="1" class="align_left">Shipping cost</td>
                  <td class="align_right" style=""><span class="price">￥<?php echo $yunfei?></span></td>
                </tr>
                <tr>
                  <td width="60%" colspan="1" class="align_left total">Grand Total</td>
                  <td class="align_right" style=""><span class="total">￥<?php echo $sum+$yunfei;?></span></td>
                </tr>                
            </table>
          </div>
        </div>
        <div class="action_buttonbar">
          <a href="<?php echo site_url('user/leisure_listing');?>"><button type="button" title="" class="continue">继续购物</button></a>
          <button type="button" onclick="parent.location='<?php echo site_url('user/leisure_checkout1/');?>'" title="" class="checkout">Checkout</button>
        </div>
      </div>
      <!--CART ENDS--> 
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
<!--CUSTOMIZE-->
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>