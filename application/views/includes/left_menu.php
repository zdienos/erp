<?php $data = $this->authex->get_left_menus(); ?>
<!-- Menu -->
<div class="drawer drawer-default">  
<div class="nav-side-menu">
    <div class="brand">Menu</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>  
        <div class="menu-list">
        		<li><a href="<?php echo base_url();?>"><i class="glyphicon glyphicon-home"></i>Dashboard</a></li>     
            <ul id="menu-content" class="menu-content collapse out">
                    
                <?php if(count($data) > 0) { ?>
                <?php foreach ($data as $key=>$value) { ?>       
                
                <li  data-toggle="collapse" data-target="#<?php echo preg_replace('/\s+/', '', $key); ?>" class="collapsed active">
                  <a href="#"><i class="fa fa-caret-down fa-lg"></i><?php echo $key; ?></a>
                  	<ul class="sub-menu collapse" id="<?php echo preg_replace('/\s+/', '', $key); ?>">                
                <?php foreach ($value as $rowKey=>$rowValue) { ?>                                                 		
                	<li><a href="<?php echo base_url(). $rowValue['menuLink'];?>"><?php echo $rowValue['menuName']; ?></a></li>               		
                <?php } ?>     	            
                   	</ul>
                 </li>
                 <?php } ?> 
                 <?php } ?>
                             
            </ul>
     </div>
</div>
</div>
<!-- End of Menu -->
