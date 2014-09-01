<?php 
	$login_admin = $this->session->userdata('login_admin');

?>
<div id="mws-header" class="clearfix">
    
    	
        <!-- <img src="<?php echo site_url('assets/admin/images/logo.png')?>"  alt="mws admin" /> -->
			
        <div id="mws-user-tools" class="clearfix">
        
      
            
            <div id="mws-user-info" class="mws-inset">
          	<span style="color:white">您好：<?php echo $login_admin->admin_name?></span> 
            	<!-- User Photo -->
            	<!-- <div id="mws-user-photo">
            		
                	<img src="<?php echo site_url('assets/admin/images/msn.png')?>"  alt="User Photo" />
                </div> -->
                
                
            </div>
        </div>
    </div>