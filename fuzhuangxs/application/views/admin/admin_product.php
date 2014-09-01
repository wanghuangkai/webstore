<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- Apple iOS and Android stuff (do not remove) -->
<meta name="apple-mobile-web-app-capable" content="no" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />

<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no,maximum-scale=1" />

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/admin/css/reset.css')?>"  media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/admin/css/text.css')?>"  media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/admin/css/fonts/ptsans/stylesheet.css')?>"  media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/admin/css/fluid.css')?>"  media="screen" />

<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/admin/css/mws.style.css')?>"  media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/admin/css/icons/16x16.css')?>"  media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/admin/css/icons/24x24.css')?>"  media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/admin/css/icons/32x32.css')?>"  media="screen" />

<!-- Demo and Plugin Stylesheets -->
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/admin/css/demo.css')?>"  media="screen" />

<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/admin/plugins/colorpicker/colorpicker.css')?>"  media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/admin/plugins/imgareaselect/css/imgareaselect-default.css')?>"  media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/admin/plugins/fullcalendar/fullcalendar.css')?>"  media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/admin/plugins/fullcalendar/fullcalendar.print.css')?>"  media="print" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/admin/plugins/chosen/chosen.css')?>"  media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/admin/plugins/prettyphoto/css/prettyPhoto.css')?>"  media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/admin/plugins/tipsy/tipsy.css')?>"  media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/admin/plugins/sourcerer/Sourcerer-1.2.css')?>"  media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/admin/plugins/jgrowl/jquery.jgrowl.css')?>"  media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/admin/plugins/spinner/ui.spinner.css')?>"  media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/admin/jui/css/jquery.ui.all.css')?>"  media="screen" />
<!-- <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/space2011.css')?>"  media="screen" /> -->

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/admin/css/mws.theme.css')?>"  media="screen" />

<!-- JavaScript Plugins -->
<script type="text/javascript" src="<?php echo site_url('assets/admin/js/jquery-1.7.2.min.js')?>" ></script>
<script type="text/javascript" src="<?php echo site_url('assets/admin/js/jquery.mousewheel.min.js')?>" ></script>
<script type="text/javascript" src="<?php echo site_url('assets/admin/js/jquery.placeholder.js')?>" ></script>
<script type="text/javascript" src="<?php echo site_url('assets/admin/js/jquery.fileinput.js')?>" ></script>

<!-- jQuery-UI Dependent Scripts -->
<script type="text/javascript" src="<?php echo site_url('assets/admin/jui/js/jquery-ui.js')?>" ></script>
<script type="text/javascript" src="<?php echo site_url('assets/admin/jui/js/jquery.ui.timepicker.js')?>" ></script>
<script type="text/javascript" src="<?php echo site_url('assets/admin/jui/js/jquery.ui.touch-punch.min.js')?>" ></script>
<script type="text/javascript" src="<?php echo site_url('assets/admin/plugins/spinner/ui.spinner.min.js')?>" ></script>

<!-- Plugin Scripts -->
<script type="text/javascript" src="<?php echo site_url('assets/admin/plugins/imgareaselect/jquery.imgareaselect.min.js')?>" ></script>
<script type="text/javascript" src="<?php echo site_url('assets/admin/plugins/duallistbox/jquery.dualListBox-1.3.min.js')?>" ></script>
<script type="text/javascript" src="<?php echo site_url('assets/admin/plugins/jgrowl/jquery.jgrowl-min.js')?>" ></script>
<script type="text/javascript" src="<?php echo site_url('assets/admin/plugins/fullcalendar/fullcalendar.min.js')?>" ></script>
<script type="text/javascript" src="<?php echo site_url('assets/admin/plugins/datatables/jquery.dataTables.min.js')?>" ></script>
<script type="text/javascript" src="<?php echo site_url('assets/admin/plugins/chosen/chosen.jquery.min.js')?>" ></script>
<script type="text/javascript" src="<?php echo site_url('assets/admin/plugins/prettyphoto/js/jquery.prettyPhoto.min.js')?>" ></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo site_url('assets/plugins/flot/excanvas.min.js')?>" ></script>
<![endif]-->
<script type="text/javascript" src="<?php echo site_url('assets/admin/plugins/flot/jquery.flot.min.js')?>" ></script>
<script type="text/javascript" src="<?php echo site_url('assets/admin/plugins/flot/jquery.flot.pie.min.js')?>" ></script>
<script type="text/javascript" src="<?php echo site_url('assets/admin/plugins/flot/jquery.flot.stack.min.js')?>" ></script>
<script type="text/javascript" src="<?php echo site_url('assets/admin/plugins/flot/jquery.flot.resize.min.js')?>" ></script>
<script type="text/javascript" src="<?php echo site_url('assets/admin/plugins/colorpicker/colorpicker-min.js')?>" ></script>
<script type="text/javascript" src="<?php echo site_url('assets/admin/plugins/tipsy/jquery.tipsy-min.js')?>" ></script>
<script type="text/javascript" src="<?php echo site_url('assets/admin/plugins/sourcerer/Sourcerer-1.2-min.js')?>" ></script>
<script type="text/javascript" src="<?php echo site_url('assets/admin/plugins/smartwizard/js/jquery.smartWizard-2.0.js')?>" ></script>
<script type="text/javascript" src="<?php echo site_url('assets/admin/plugins/validate/jquery.validate-min.js')?>" ></script>

<!-- Core Script -->
<script type="text/javascript" src="<?php echo site_url('assets/admin/js/core/mws.js')?>" ></script>

<!-- Themer Script (Remove if not needed) -->
<script type="text/javascript" src="<?php echo site_url('assets/admin/js/core/themer.js')?>" ></script>

<!-- Demo Scripts (remove if not needed) -->
<script type="text/javascript" src="<?php echo site_url('assets/admin/js/demo/demo.js')?>" ></script>

<title>MWS Admin - Calendar</title>

</head>

<body>

	<!-- Themer (Remove if not needed) -->  
	<!-- <?php include 'theme.php'?> -->
    <!-- Themer End -->

	<!-- Header -->
	<?php include 'header.php'?>
    
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
    	<!-- Necessary markup, do not remove -->
		<div id="mws-sidebar-stitch"></div>
		<div id="mws-sidebar-bg"></div>
        
        <!-- Sidebar Wrapper -->
      <?php include 'sidebar.php'?>
        
        <!-- Main Container Start -->
      	  <div id="mws-container" class="clearfix">
        
        	<!-- Inner Container Start -->
            <div class="container">
      				<!-- Searchbox -->
        	
             
      		<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span class="mws-i-24 i-table-1" style="display: block; float: left;">所有商品列表</span>
                    	<div id="templatemo_search">
			                <form action="<?php echo site_url("admin/back/get_search_product");?>" method="post">
			                	<input type="submit" name="submit" value="查询"  id="searchbutton" title="Search" class="sub_btn" />
			                  	<input type="text" placeholder="查询商品" name="search" class="txt_field" />
			                </form>
			            </div>
                    </div>
                    <div id="BlogOpts" style="background:#eee;border:1px solid #ccc;margin:5px 0 10px 0;padding:3px 10px;color:#999;">
                    	<a href="<?php echo site_url("admin/back/add_product_view")?>" style="text-decoration: none;"><img src="<?php echo site_url('assets/admin/images/add.png');?>" style="width: 15px; height: 15px;">添加</a>&nbsp;|
						<a href="javascript:;" onclick="select_all();" style="text-decoration: none;"><img src="<?php echo site_url('assets/admin/images/all.png');?>" style="width: 15px; height: 15px;">全选</a>&nbsp;|
						<a href="javascript:;" onclick="unselect_all();" style="text-decoration: none;"><img src="<?php echo site_url('assets/admin/images/cancel.png');?>" style="width: 15px; height: 15px;">取消</a>&nbsp;|
						<a href="javascript:;" onclick="select_other();" style="text-decoration: none;"><img src="<?php echo site_url('assets/admin/images/back.png');?>" style="width: 15px; height: 15px;">反向选择</a>&nbsp;|
						<a href="javascript:;" onclick="delete_sel()" style="text-decoration: none;"><img src="<?php echo site_url('assets/admin/images/delete.png');?>" style="width: 15px; height: 15px;">删除选中</a>
					 </div>
					 <!-- <li class="row_1">
		
		<a href="viewPost_comment.htm" target="_blank">测试文章3</a>
		<small>2011-06-18 00:34</small>
	</li> -->
                    <div class="mws-panel-body">
                        <table class="mws-table">
                            <thead>
                                <tr>
                                	<th style="width: 20px">  </th>
                                	<th>名称</th>
                                	<th>是否时尚</th>
                                	<th>类别</th>
                                	<th>价格</th>
                                	<th>库存量</th>
                                    <th>图片</th>                                     
                                    <th>描述信息</th>  
                                    <th>上架时间</th>  
                                    <th>操作</th>                  
                                </tr>
                             </thead>
                             <tbody>
                             	<?php 
                             		foreach ($products as $product) {
                             	?>  
	                              <tr class="gradeX">
	                                 <td><input name="id" value="<?php echo $product->p_id;?>" type="checkbox"></td>
	                                 <td><?php echo $product->p_name;?></td>
	                                 <td><?php echo $product->p_class;?></td>
	                                 <td><?php if($product->p_sex=='女装') echo "女装"; else if($product->p_sex=='男装') echo '男装';else echo "童装";?></td>
	                                 <td><?php echo $product->p_jiage;?></td>
	                                 <td><?php echo $product->p_num;?></td>
	                                 <td><?php echo $product->url;?></td>
	                                 <td><?php echo $product->p_info;?></td>
	                                 <td><?php echo $product->p_date;?></td>
	                                 <td><a href="<?php echo site_url("admin/back/edit_product_view/".$product->p_id)?>" style="text-decoration: none;"><img src="<?php echo site_url('assets/admin/images/edit.png');?>" style="width: 15px; height: 15px;">编辑</a>&nbsp;|
	                                 	<a href="<?php echo site_url("admin/back/delete_product/".$product->p_id)?>" style="text-decoration: none;"><img src="<?php echo site_url('assets/admin/images/delete.png');?>" style="width: 15px; height: 15px;">删除</a>&nbsp;
	                                 </td>
	                              </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <!-- Inner Container End -->
                     
            <!-- Footer -->
            <div id="mws-footer">
            	Copyright My Website 2014. All Rights Reserved.
            </div>
            
        </div>
        <!-- Main Container End -->
        
    </div>
    
    <script type="text/javascript">
    	
		function select_all(){
			$("input[name='id']").attr("checked", true);
		}
		function unselect_all(){
			$("input[name='id']").attr("checked", false); 
		}
		function select_other(){
			jQuery.each($("input[name='id']"), function(i, n){
				n.checked = !n.checked;
			}); 
		}
		function delete_sel(){
			var ids = "";
			jQuery.each($("input[name='id']"), function(i, n){
				if(n.checked){
					ids += $(this).val()+",";
				}
			});
			
			ids = ids.substring(0,ids.length-1);
			if(ids.length > 0){
				if(!confirm("确认要删除选中的文章吗？")) return ;
				// ajax_post("/action/blog/batch_delete","id="+blogids,function(html){
				$.get("<?php echo site_url("admin/back/remove_product")?>","id="+ids,function(html){
					location.reload();
				});
			}
			else {
				alert("请选择要删除的文章");
			}
		}
		
	</script>

</body>
</html>






















	

	
    
   