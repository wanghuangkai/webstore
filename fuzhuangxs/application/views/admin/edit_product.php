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
                        <span class="mws-i-24 i-list">商品信息填写</span>
                    </div>
                    <div class="mws-panel-body">
                        <form class="mws-form" action="<?php echo site_url("admin/back/edit_product");?>" method="post">
                            <div class="mws-form-inline">
                            	<input type="hidden" name='product_id' value="<?php echo $product->p_id?>" />
                                <div class="mws-form-row">
                                    <label>商品名称</label>
                                    <div class="mws-form-item small">
                                        <input type="text" class="mws-textinput" name="product_name" value="<?php echo $product->p_name?>"/>
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label>商品类别</label>
                                    <div class="mws-form-item small">
                                  	<input type="text" class="mws-textinput" name="product_type" value="<?php echo $product->p_class?>"/>	
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label>商品价格</label>
                                    <div class="mws-form-item small">
                                        <input type="text" class="mws-textinput" name="product_price" value="<?php echo $product->p_jiage?>"/>
                                    </div>
                                </div>   
                                <div class="mws-form-row">
                                    <label>库存量</label>
                                    <div class="mws-form-item small">
                                        <input type="text" class="mws-textinput" name="product_stock" value="<?php echo $product->p_num?>"/>
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label>图片</label>
                                    <div class="mws-form-item small">
                                        <input type="text" class="mws-textinput" name="product_picture" value="<?php echo $product->url?>"/>
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label>商品描述</label>
                                    <div class="mws-form-item large">
                                        <input type="text" class="mws-textinput" style="width:500px; height:200px;" name="product_content"value="<?php echo $product->p_info?>" />
                                    </div>
                                </div>
                                <!-- <div class="mws-form-row">
                                    <label>上架时间</label>
                                    <div class="mws-form-item small">
                                        <input type="text" class="mws-textinput" name="product_date"/>
                                    </div>
                                </div> -->

                            </div>
                            <div class="mws-button-row">
                                <input type="submit" value="Submit" class="mws-button red" />
                                <input type="reset" value="Reset" class="mws-button gray" />
                            </div>
                        </form>
                    </div>      
                </div>
            </div>
      	
                         
                     
                            		<!-- <?php 
                                	foreach( $info as $datas){
                                		
                                	?>
                                <tr class="gradeX">
                                
                                    <td><?php echo $datas ->name;?></td>
                                    <td><?php echo $datas ->department;?></td>
                                     <td><?php echo $datas ->pl_st;?></td>
                                         
                                         
                                    
                                </tr>
                                 <?php }?> -->
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            <!-- Inner Container End -->
                     
            <!-- Footer -->
            
            
        </div>
        <!-- Main Container End -->
        
    </div>

</body>
</html>



            
                <!-- Statistics Button Container -->
    
                
                <!-- Panels Start -->
                
               
            <!-- Inner Container End -->
                       
            <!-- Footer -->
            
            
        </div>    
        
    </div>

</body>
</html>