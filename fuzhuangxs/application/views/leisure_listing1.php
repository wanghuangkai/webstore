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
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/style.css');?>" />
<script type="text/javascript" src="<?php echo site_url('assets/js/scrollTop.js');?>"></script>
<!--Google Webfont -->
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
<div id='rtt'></div>
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
            <!--Responsive NAV-->
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
 			<?php 
            $num1=0;
            $num2=0;
            foreach($cart as $cart)
            {
            	$num1=$num1+$cart->p_jiage;
            	$num2=$num2+1;
			}
			?>
            <div class="minicart"> <a href="#" class="minicart_link"> <span class="item"><b><?php if($login_user){echo $num2;}else{echo 0;}?></b> ITEM /</span> <span class="price"><b>
            	<?php if($login_user) echo $num1;else echo 0;?>
            </b></span> </a>
                <div class="cart_drop"> <span class="darw"></span>
                    <ul>
                        <!-- <li><img src="<?php echo site_url('assets/images/mini_c_item1.png');?>" /><a href="#">Clogs Beach/Garden Clog</a> <span class="price">$49.90</span></li>
                        <li><img src="<?php echo site_url('assets/images/mini_c_item2.png');?>" /><a href="#">Faded chambray shorts</a> <span class="price">$12.90</span></li> -->
                        <div class="cart_bottom">
                            <div class="subtotal_menu"><small>Subtotal:</small><big><?php if($login_user) echo $num1;else echo "购物车为空！";?></big></div>
                          <?php if($login_user){?>  <a href="<?php echo site_url('user/leisure_cart');?>">Checkout</a><?php }?></div>
                    </ul>
                </div>
            </div>
        </nav>
        <!--Navigation Ends-->
    </div>
    <div class="section_container">
        <!--Mid Section Starts-->
        <section>
            <!--SIDE NAV STARTS-->
            <div id="side_nav">
                <div class="sideNavCategories">
                </div>
            </div>
            <!--SIDE NAV ENDS-->
            <!--MAIN CONTENT STARTS-->
            <div id="main_content">
                <div class="category_banner"> <img src="<?php echo site_url('assets/images/promo_cat_banner.jpg');?>" /> </div>
                <ul class="breadcrumb">
                    <li><a href="<?php echo site_url('user/index')?>">Home</a></li>
                    <li><a href="<?php echo site_url('user/leisure_listing1');?>">Men</a></li>
                    <li class="active"><a href="#">Shirts & Blouses</a></li>
                </ul>
                <!--Product List Starts-->
                <div class="products_list products_slider">
                    <ul>
					     <?php 
					             foreach($product as $pro){
					      ?>
					        <li> <a class="product_image" href="<?php echo site_url('user/leisure_detail/'.$pro->p_id);?>"><img src="<?php echo site_url($pro->url);?>" /></a>
					        <div class="product_info">
					        <h3><a href="<?php echo site_url('user/leisure_detail/'.$pro->p_id);?>"><?php echo $pro->p_name?></a></h3>
					        <small><?php echo $pro->p_info?></small> </div>
					        <div class="price_info"> <a href="<?php echo site_url('user/leisure_detail/'.$pro->p_id);?>">Detail</a>
					        <div>库存：<?php echo $pro->p_num?>件</div>
					        <button data-id="<?php echo $pro -> p_id;?>" data-pnum="<?php echo $pro->p_num;?>"class="cart price_add" title="" type="button"><span class="pr_price">￥<?php echo $pro->p_jiage?></span><span class="pr_add">Add to Cart</span></button>
					        <form action="<?php echo site_url('user/do_collection');?>" method="post">
                            	<input type="text" name='user_name' style='display:none' value="<?php if($login_user) echo $login_user->user_name;?>"/>
                            	<input type="text" name='user_id' style='display:none' value="<?php if($login_user) echo $login_user->user_id;?>"/>
                            	<input type="text" name='p_id' style='display:none' value="<?php echo $pro->p_id;?>"/>
                            	<input type="text" name='p_name' style='display:none' value="<?php echo $pro->p_name;?>"/>
                            	<input type="text" name='p_info' style='display:none' value="<?php echo $pro->p_info;?>"/>
                            	<input type="text" name='url' style='display:none' value="<?php echo $pro->url;?>"/>
                            	<input type="submit" style='display:<?php if(!$login_user) echo 'none';?>' value="收藏" />
                            </form>
					        </div>
					        </li>
					        <?php 
								}
							?>
                    </ul>
                </div>
                <!--Product List Ends-->
            </div>
            <!--MAIN CONTENT ENDS-->
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
	<li> <a href="<?php echo site_url("admin/back/admin_login")?>">Admin</a></li>
	<li> <a style="display: <?php if(!$login_user) echo 'none';?>"  href="<?php echo site_url('user/collections/'.$login_user->user_id);?>">USER'S COLLECTION</a></li>
</ul>
</div>
<!--CUSTOMIZE-->
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>

<script >
<?php
	if($login_user)
	{
?>
		$(function(){
		$(".cart").on("click",function(){
			var pnum=$(this).data('pnum');
			var p_id = $(this).data('id');
			if(pnum>0)
			{
				$.get('<?php echo site_url('user/add_cart')?>',{
				'p_id':p_id},function(data){
					if(data=="success"){
						alert('添加成功');
					}else{
						alert('添加失败！');
					}
				},'text');
			}
			else{
				alert("缺货！！");
			}
		});
	});
<?php 
	}
	else{
?>
	$(function(){
		$(".cart").click(function(){
			alert("请先登陆！！");
		})
	});
<?php
	}
?>
	
</script>

</body>
</html>
