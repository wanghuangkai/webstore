
 <div id="mws-sidebar">
            <!-- Main Navigation -->
            <div id="mws-navigation">
            	<ul>
            		<li><a href="<?php echo site_url("user/index");?>"  class="mws-i-24 i-home">返回购物</a></li>    
                	<li><a href="<?php echo site_url("admin/back/get_admin");?>"  class="mws-i-24 i-home">管理员管理</a></li>
                	<li><a href="<?php echo site_url("admin/back/get_user");?>"  class="mws-i-24 i-home">用户管理</a></li>
                	<li><a href="<?php echo site_url("admin/back/get_product");?>"  class="mws-i-24 i-file-cabinet">商品管理</a></li>
                	<li><a href="<?php echo site_url("admin/back/get_order");?>"  class="mws-i-24 i-blocks-images">订单管理</a></li>
                	<li><a href="<?php echo site_url("admin/back/get_total");?>"  class="mws-i-24 i-blocks-images">当月的营业额</a></li>
                </ul>
            </div>
        </div>
        
<script>
	$("#mws-navigation > ul > li > a").click(function(){
		$(this).css("color","#c5d52b").parent().siblings().children().css("color",white);
	});
</script>