<?php
$urlComposeMessage = $this->Url->build([
    "controller" => "Campaigns",
    "action" => "composeMessage",
//    true
]);
?>
<div id="header">
<!--<div id="header-left">-->

<!--<div id="header-left-icon"><a href="http://simbyone.com/drag-and-drop-newsletter-builder-using-jquery/"><i class="fa fa-angle-left"></i></a></div>-->
<!--<div id="header-left-text"><a href="http://simbyone.com/drag-and-drop-newsletter-builder-using-jquery/">Drag and Drop Newsletter Article</a></div>-->
<!--</div>-->

<div id="header-right" class="saveHtml">
<div id="header-right-icon"><i class="fa fa-cloud-download"></i></div>
<div id="header-right-text"> <label> Save &nbsp; </label> </div>
</div>
</div>

<div id="newsletter-preloaded-download">
<form id="export-form" action="export.php" method="post" name="export-form">
<textarea id="export-textarea" name="export-textarea"></textarea>
</form>
</div>

<div id="newsletter-preloaded-export"></div>

<div id="newsletter-preloaded-rows">

      <div class="sim-row" data-id="1">
      <div class="sim-row-header1">
      <div class="sim-row-header1-nav">
      <div class="sim-row-header1-nav-logo sim-row-edit" data-type="image"><?php echo $this->Html->image('sim/_assets/newsletter_logo.png'); ?></div>
      <div class="sim-row-header1-nav-links">
      <a href="#" class="sim-row-edit" data-type="link">Portfolio</a>
      <a href="#" class="sim-row-edit" data-type="link">Store</a>
      <a href="#" class="sim-row-edit" data-type="link">About us</a>
      <div class="sim-row-header1-nav-links-contact"><a href="#" class="sim-row-edit" data-type="link">Contact</a></div>
      </div>
      </div>
      <div class="sim-row-header1-slider">
      <div class="sim-row-header1-slider-left">
      <div class="sim-row-header1-slider-left-title sim-row-edit" data-type="title">Template Builder</div>
      <div class="sim-row-header1-slider-left-subtitle sim-row-edit" data-type="title">Sample Subtitle goes Here</div>
      <div class="sim-row-header1-slider-left-text sim-row-edit" data-type="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ullamcorper orci. Nullam nulla felis, imperdiet ac sollicitudin et, malesuada sagittis lacus.</div>
      <div class="sim-row-header1-slider-left-link"><a href="#" class="sim-row-edit" data-type="link">Read More</a></div>
      </div>
      <div class="sim-row-header1-slider-right sim-row-edit" data-type="image"><?php echo $this->Html->image('sim/_assets/ipad.png'); ?></div>
      </div>
      </div>
      </div>
      

      
      
      <div class="sim-row" data-id="2">
      <div class="sim-row-header1">
      <div class="sim-row-header1-nav">
      <div class="sim-row-header1-nav-logo sim-row-edit" data-type="image"><?php echo $this->Html->image('sim/_assets/newsletter_logo.png'); ?></div>
      <div class="sim-row-header1-nav-links">
      <a href="#" class="sim-row-edit" data-type="link">Portfolio</a>
      <a href="#" class="sim-row-edit" data-type="link">Store</a>
      <a href="#" class="sim-row-edit" data-type="link">About us</a>
      <div class="sim-row-header1-nav-links-contact"><a href="#" class="sim-row-edit" data-type="link">Contact</a></div>
      </div>
      </div>
      <div class="sim-row-header1-slider">
      <div class="sim-row-header1-slider-right sim-row-edit" data-type="image"><?php echo $this->Html->image('sim/_assets/ipad.png'); ?></div>
      <div class="sim-row-header1-slider-left">
      <div class="sim-row-header1-slider-left-title sim-row-edit" data-type="title">Template Builder</div>
      <div class="sim-row-header1-slider-left-subtitle sim-row-edit" data-type="title">Sample Subtitle goes Here</div>
      <div class="sim-row-header1-slider-left-text sim-row-edit" data-type="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ullamcorper orci. Nullam nulla felis, imperdiet ac sollicitudin et, malesuada sagittis lacus.</div>
      <div class="sim-row-header1-slider-left-link"><a href="#" class="sim-row-edit" data-type="link">Read More</a></div>
      </div>
      </div>
      </div>
      </div>
      
      <div class="sim-row" data-id="3">
      <div class="sim-row-header2">
      <div class="sim-row-header2-nav">
      <div class="sim-row-header2-nav-logo sim-row-edit" data-type="image"><?php echo $this->Html->image('sim/_assets/newsletter_logo.png'); ?></div>
      <div class="sim-row-header2-nav-links">
      <a href="#" class="sim-row-edit" data-type="link">Portfolio</a>
      <a href="#" class="sim-row-edit" data-type="link">Store</a>
      <a href="#" class="sim-row-edit" data-type="link">About us</a>
      <div class="sim-row-header2-nav-links-contact"><a href="#" class="sim-row-edit" data-type="link">Contact</a></div>
      </div>
      </div>
      <div class="sim-row-header2-slider">
      <div class="sim-row-header2-slider-top">
      <div class="sim-row-header2-slider-top-title sim-row-edit" data-type="title">Template Builder</div>
      
      <div class="sim-row-header2-slider-top-text sim-row-edit" data-type="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ullamcorper orci. Nullam nulla felis, imperdiet ac sollicitudin et, malesuada sagittis lacus.</div>
      <div class="sim-row-header2-slider-top-link"><div class="sim-row-header2-slider-top-link-button"><a href="#" class="sim-row-edit" data-type="link">Read More</a></div></div>
      </div>
      <div class="sim-row-header2-slider-bottom sim-row-edit" data-type="image"><?php echo $this->Html->image('sim/_assets/wide_ipad.png'); ?></div>
      </div>
      </div>
      </div>
      
      
      
       <div class="sim-row" data-id="4">
      <div class="sim-row-content1">
      <div class="sim-row-content1-tab">
      <div class="sim-row-content1-tab-icon sim-row-edit" data-type="icon"><i class="fa fa-file-text"></i></div>
      <div class="sim-row-content1-tab-title sim-row-edit" data-type="title">Content Ready</div>
      <div class="sim-row-content1-tab-text sim-row-edit" data-type="text">Ut iaculis ut massa sit amet dictum. Nulla tortor metus, eleifend vel</div>
      </div>
      
      <div class="sim-row-content1-tab">
      <div class="sim-row-content1-tab-icon sim-row-edit" data-type="icon"><i class="fa fa-life-ring"></i></div>
      <div class="sim-row-content1-tab-title sim-row-edit" data-type="title">Free Support</div>
      <div class="sim-row-content1-tab-text sim-row-edit" data-type="text">Ut iaculis ut massa sit amet dictum. Nulla tortor metus, eleifend vel</div>
      </div>
      
      <div class="sim-row-content1-tab">
      <div class="sim-row-content1-tab-icon sim-row-edit" data-type="icon"><i class="fa fa-files-o"></i></div>
      <div class="sim-row-content1-tab-title sim-row-edit" data-type="title">Drag and Drop</div>
      <div class="sim-row-content1-tab-text sim-row-edit" data-type="text">Ut iaculis ut massa sit amet dictum. Nulla tortor metus, eleifend vel</div>
      </div>
      </div>
      </div>
      
      
       <div class="sim-row" data-id="5">
       <div class="sim-row-content2">
       <div class="sim-row-content2-left sim-row-edit" data-type="image"><?php echo $this->Html->image('sim/_assets/ipad.png'); ?></div>
       <div class="sim-row-content2-right">
       <div class="sim-row-content2-right-title sim-row-edit" data-type="title">Our average is high</div>
       <div class="sim-row-content2-right-text sim-row-edit" data-type="text">Lorem ipsum dolor sit amet, consectetur adipscing elit praesent augue sapien egestas nibh id condimentum accumsan diam eleva corp avera folmo</div>
       <div class="sim-row-content2-right-button"><a href="#" class="sim-row-edit" data-type="link">Read More</a></div>
       </div>
       </div>
       </div>
       
       
       
      <div class="sim-row" data-id="6">
      <div class="sim-row-content3">
      <div class="sim-row-content3-title sim-row-edit" data-type="title">The amazing gallery</div>
      <div class="sim-row-content3-center">
      <div class="sim-row-content3-center-tab">
      <div class="sim-row-content3-center-tab-image sim-row-edit" data-type="image"><?php echo $this->Html->image('sim/_assets/ipad.png'); ?></div>
      <div class="sim-row-content3-center-tab-text sim-row-edit" data-type="title">Content Ready</div>
      </div>
      <div class="sim-row-content3-center-tab">
      <div class="sim-row-content3-center-tab-image sim-row-edit" data-type="image"><?php echo $this->Html->image('sim/_assets/ipad.png'); ?></div>
      <div class="sim-row-content3-center-tab-text sim-row-edit" data-type="title">Free Support</div>
      </div>
      <div class="sim-row-content3-center-tab">
      <div class="sim-row-content3-center-tab-image sim-row-edit" data-type="image"><?php echo $this->Html->image('sim/_assets/ipad.png'); ?></div>
      <div class="sim-row-content3-center-tab-text sim-row-edit" data-type="title">Drag and Drop</div>
      </div>
      </div>
      </div>
      </div>
      
      
      
      <div class="sim-row" data-id="7">
      <div class="sim-row-content4">
      <div class="sim-row-content4-title sim-row-edit" data-type="title">Who we are </div>
      <div class="sim-row-content4-content sim-row-edit" data-type="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue sapien, egestas non nibh id, condimentum accumsan diam</div>
      <div class="sim-row-content4-images sim-row-edit" data-type="image"><?php echo $this->Html->image('sim/_assets/wide_ipad.png'); ?></div>
      </div>
      </div>
      
      
      <div class="sim-row" data-id="8">
      <div class="sim-row-content5">
       <div class="sim-row-content5-left">
       <div class="sim-row-content5-left-title sim-row-edit" data-type="title">Our average is high</div>
       <div class="sim-row-content5-left-text sim-row-edit" data-type="text">Lorem ipsum dolor sit amet, consectetur adipscing elit praesent augue sapien egestas nibh id condimentum accumsan diam eleva corp avera folmo</div>
       <div class="sim-row-content5-left-button"><a href="#" class="sim-row-edit" data-type="link">Read More</a></div>
       </div>
       <div class="sim-row-content5-right sim-row-edit" data-type="image"><?php echo $this->Html->image('sim/_assets/ipad.png'); ?></div>
       </div>
       </div>
       
       
      
       
       
       <div class="sim-row" data-id="9">
      <div class="sim-row-content6">
       <div class="sim-row-content6-center">
       <div class="sim-row-content6-center-tab">
       <div class="sim-row-content6-center-tab-image sim-row-edit" data-type="icon"><i class="fa fa-file-text"></i></div>
       <div class="sim-row-content6-center-tab-text sim-row-edit" data-type="title">Content Ready</div>
       </div>
        <div class="sim-row-content6-center-tab">
       <div class="sim-row-content6-center-tab-image sim-row-edit" data-type="icon"><i class="fa fa-life-ring"></i></div>
       <div class="sim-row-content6-center-tab-text sim-row-edit" data-type="title">Free Support</div>
       </div>
        <div class="sim-row-content6-center-tab">
       <div class="sim-row-content6-center-tab-image sim-row-edit" data-type="icon"><i class="fa fa-files-o"></i></div>
       <div class="sim-row-content6-center-tab-text sim-row-edit" data-type="title">Drag and Drop</div>
       </div>
        <div class="sim-row-content6-center-tab">
       <div class="sim-row-content6-center-tab-image sim-row-edit" data-type="icon"><i class="fa fa-cube"></i></div>
       <div class="sim-row-content6-center-tab-text sim-row-edit" data-type="title">Custom Made</div>
       </div>
       </div>
       </div>
       </div>
       
       
       <div class="sim-row" data-id="10">
      <div class="sim-row-content7">
       <div class="sim-row-content7-title sim-row-edit" data-type="title">The ultimate solutions</div>
       <div class="sim-row-content7-center">
       <div class="sim-row-content7-center-tab">
       <div class="sim-row-content7-center-tab-image sim-row-edit" data-type="image"><?php echo $this->Html->image('sim/_assets/ipad.png'); ?></div>
       <div class="sim-row-content7-center-tab-title sim-row-edit" data-type="title">Content Ready</div>
       <div class="sim-row-content7-center-tab-text sim-row-edit" data-type="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
       </div>
       <div class="sim-row-content7-center-tab">
       <div class="sim-row-content7-center-tab-image sim-row-edit" data-type="image"><?php echo $this->Html->image('sim/_assets/ipad.png'); ?></div>
       <div class="sim-row-content7-center-tab-title sim-row-edit" data-type="title">Free Support</div>
       <div class="sim-row-content7-center-tab-text sim-row-edit" data-type="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
       </div>
       <div class="sim-row-content7-center-tab">
       <div class="sim-row-content7-center-tab-image sim-row-edit" data-type="image"><?php echo $this->Html->image('sim/_assets/ipad.png'); ?></div>
       <div class="sim-row-content7-center-tab-title sim-row-edit" data-type="title">Drag and Drop</div>
       <div class="sim-row-content7-center-tab-text sim-row-edit" data-type="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
       </div>
       </div>
       </div>
       </div>
       
       
     <div class="sim-row" data-id="11">
      <div class="sim-row-content8">
       <div class="sim-row-content8-title sim-row-edit" data-type="title">The ultimate solutions</div>
       <div class="sim-row-content8-center">
       <div class="sim-row-content8-center-tab">
       <div class="sim-row-content8-center-tab-image sim-row-edit" data-type="image"><?php echo $this->Html->image('sim/_assets/ipad.png'); ?></div>
       <div class="sim-row-content8-center-tab-title sim-row-edit" data-type="title">Content Ready</div>
       <div class="sim-row-content8-center-tab-text sim-row-edit" data-type="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
       </div>
       <div class="sim-row-content8-center-tab">
       <div class="sim-row-content8-center-tab-image sim-row-edit" data-type="image"><?php echo $this->Html->image('sim/_assets/ipad.png'); ?></div>
       <div class="sim-row-content8-center-tab-title sim-row-edit" data-type="title">Free Support</div>
       <div class="sim-row-content8-center-tab-text sim-row-edit" data-type="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
       </div>
       </div>
       </div>
       </div>
       
      
      <div class="sim-row" data-id="12">
      <div class="sim-row-content9">
      <div class="sim-row-content9-title sim-row-edit" data-type="title">Who we are </div>
      <div class="sim-row-content9-content sim-row-edit" data-type="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue sapien, egestas non nibh id, condimentum accumsan diam</div>
      <div class="sim-row-content9-images sim-row-edit" data-type="image"><?php echo $this->Html->image('sim/_assets/wide_ipad.png'); ?></div>
      </div>
      </div>
      
     
      
      
       <div class="sim-row" data-id="13">
       <div class="sim-row-content10">
       <div class="sim-row-content10-title sim-row-edit" data-type="title">The ultimate solutions</div>
       <div class="sim-row-content10-center">
       <div class="sim-row-content10-center-tab">
       <div class="sim-row-content10-center-tab-image sim-row-edit" data-type="image"><?php echo $this->Html->image('sim/_assets/ipad.png'); ?></div>
       <div class="sim-row-content10-center-tab-title sim-row-edit" data-type="title">Content Ready</div>
       <div class="sim-row-content10-center-tab-text sim-row-edit" data-type="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
       </div>
       <div class="sim-row-content10-center-tab">
       <div class="sim-row-content10-center-tab-image sim-row-edit" data-type="image"><?php echo $this->Html->image('sim/_assets/ipad.png'); ?></div>
       <div class="sim-row-content10-center-tab-title sim-row-edit" data-type="title">Free Support</div>
       <div class="sim-row-content10-center-tab-text sim-row-edit" data-type="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
       </div>
       <div class="sim-row-content10-center-tab">
       <div class="sim-row-content10-center-tab-image sim-row-edit" data-type="image"><?php echo $this->Html->image('sim/_assets/ipad.png'); ?></div>
       <div class="sim-row-content10-center-tab-title sim-row-edit" data-type="title">Drag and Drop</div>
       <div class="sim-row-content10-center-tab-text sim-row-edit" data-type="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
       </div>
       </div>
       </div>
       </div>
       
       
       <div class="sim-row" data-id="14">
       <div class="sim-row-content11">
       <div class="sim-row-content11-title sim-row-edit" data-type="title">The ultimate solutions</div>
       <div class="sim-row-content11-center">
       <div class="sim-row-content11-center-tab">
       <div class="sim-row-content11-center-tab-image sim-row-edit" data-type="image"><?php echo $this->Html->image('sim/_assets/ipad.png'); ?></div>
       <div class="sim-row-content11-center-tab-title sim-row-edit" data-type="title">Content Ready</div>
       <div class="sim-row-content11-center-tab-text sim-row-edit" data-type="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
       <div class="sim-row-content11-center-tab-text-link"><a href="#" class="sim-row-edit" data-type="link">Read More</a></div>
       </div>
       <div class="sim-row-content11-center-tab">
       <div class="sim-row-content11-center-tab-image sim-row-edit" data-type="image"><?php echo $this->Html->image('sim/_assets/ipad.png'); ?></div>
       <div class="sim-row-content11-center-tab-title sim-row-edit" data-type="title">Free Support</div>
       <div class="sim-row-content11-center-tab-text sim-row-edit" data-type="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
       <div class="sim-row-content11-center-tab-text-link"><a href="#" class="sim-row-edit" data-type="link">Read More</a></div>
       </div>
       </div>
       </div>
       </div>
       

       <div class="sim-row" data-id="15">
       <div class="sim-row-content12">
       <div class="sim-row-content12-title sim-row-edit" data-type="title">We Explain Everything</div>
       <div class="sim-row-content12-center">
       <div class="sim-row-content12-center-tab">
       <div class="sim-row-content12-center-tab-icon sim-row-edit" data-type="icon"><i class="fa fa-file-text"></i></div>
       <div class="sim-row-content12-center-tab-title sim-row-edit" data-type="title">Content Ready</div>
       <div class="sim-row-content12-center-tab-text sim-row-edit" data-type="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue sapien, egestas non nibh id, condimentum accumsan diam</div>
       </div>
       <div class="sim-row-content12-center-tab">
       <div class="sim-row-content12-center-tab-icon sim-row-edit" data-type="icon"><i class="fa fa-life-ring"></i></div>
       <div class="sim-row-content12-center-tab-title sim-row-edit" data-type="title">Free Support</div>
       <div class="sim-row-content12-center-tab-text sim-row-edit" data-type="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue sapien, egestas non nibh id, condimentum accumsan diam</div>
       </div>
       <div class="sim-row-content12-center-tab">
       <div class="sim-row-content12-center-tab-icon sim-row-edit" data-type="icon"><i class="fa fa-files-o"></i></div>
       <div class="sim-row-content12-center-tab-title sim-row-edit" data-type="title">Drag and Drop</div>
       <div class="sim-row-content12-center-tab-text sim-row-edit" data-type="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue sapien, egestas non nibh id, condimentum accumsan diam</div>
       </div>
       <div class="sim-row-content12-center-tab">
       <div class="sim-row-content12-center-tab-icon sim-row-edit" data-type="icon"><i class="fa fa-cube"></i></div>
       <div class="sim-row-content12-center-tab-title sim-row-edit" data-type="title">Custom Made</div>
       <div class="sim-row-content12-center-tab-text sim-row-edit" data-type="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue sapien, egestas non nibh id, condimentum accumsan diam</div>
       </div>
       </div>
       </div>
       </div>
       
       <div class="sim-row" data-id="16">
       <div class="sim-row-content13">
       <div class="sim-row-content13-center">
       <div class="sim-row-content13-center-left">
       <div class="sim-row-content13-center-left-title sim-row-edit" data-type="title">Are you impressed by now ?</div>
       <div class="sim-row-content13-center-left-subtitle sim-row-edit" data-type="title">Let’s start something big</div>
       </div>
       <div class="sim-row-content13-center-right"><a href="#" class="sim-row-edit" data-type="link">Request Quote</a></div>
       </div>
       </div>
       </div>
       
       
      <div class="sim-row" data-id="17">
      <div class="sim-row-content14">
      <div class="sim-row-content14-center">
      <div class="sim-row-content14-center-left">
      <div class="sim-row-content14-center-left-title sim-row-edit" data-type="title">About Us</div>
      <div class="sim-row-content14-center-left-text sim-row-edit" data-type="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eliam corias</div>
      </div>
      <div class="sim-row-content14-center-right">
      <div class="sim-row-content14-center-right-title sim-row-edit" data-type="title">Contact Us</div>
      <div class="sim-row-content14-center-right-row">
      <div class="sim-row-content14-center-right-type sim-row-edit" data-type="title">Address:</div>
      <div class="sim-row-content14-center-right-content sim-row-edit" data-type="title">1234 Street Web Developers</div>
      </div>
      <div class="sim-row-content14-center-right-row">
      <div class="sim-row-content14-center-right-type sim-row-edit" data-type="title">Email:</div>
      <div class="sim-row-content14-center-right-content sim-row-edit" data-type="title">mail@example.com</div>
      </div>
      </div>
      </div>
      </div>
      </div>
      
      
      <div class="sim-row" data-id="18">
      <div class="sim-row-content15">
      <div class="sim-row-content15-center">
      <div class="sim-row-content15-center-left sim-row-edit" data-type="image"><?php echo $this->Html->image('sim/_assets/newsletter_logo_white.png'); ?></div>
      <div class="sim-row-content15-center-right sim-row-edit" data-type="title">© Copyright 2015. All Rights Reserved.</div>
      </div>
      </div>
      </div>
    
        <div class="sim-row" data-id="19">
           <div class="sim-row-content16">
             <div class="sim-row-content16-center">
               <div class="sim-row-content16-center-left sim-row-edit" data-type="image"><?php echo $this->Html->image('icono-camara.png'); ?></div>
               <div class="sim-row-content16-center-right sim-row-edit" data-type="image"> <?php echo $this->Html->image('icono-camara.png'); ?> </div>
             </div>
           </div>
       </div>    
      
        <div class="sim-row" data-id="20">
            <div class="sim-row-content17">        
                <div class="sim-row-content17-content sim-row-edit" data-type="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue sapien, egestas non nibh id, condimentum accumsan diam</div>
            </div>
        </div>
    
    

</div>

<div class="sim-edit" id="sim-edit-export">
<div class="sim-edit-box" style="height:390px;">
<div class="sim-edit-box-title">Export Template</div>

<div class="sim-edit-box-content">
<div class="sim-edit-box-content-text">Select and copy the entire text below</div>
<div class="sim-edit-box-content-field"><textarea class="sim-edit-box-content-field-textarea text"></textarea></div>
</div>
<div class="sim-edit-box-buttons">
<div class="sim-edit-box-buttons-cancel" style="margin-left:0px;">Cancel</div>
</div>
</div>
</div>

<div class="sim-edit" id="sim-edit-image">
<div class="sim-edit-box" style="height:230px;" >
<div class="sim-edit-box-title">Edit Image</div>
<div class="sim-edit-box-content">
<!--<div class="sim-edit-box-content-text">URL:<span>(full address including http://)</span></div>-->
<!--<div class="sim-edit-box-content-field"><input type="text" class="sim-edit-box-content-field-input image"/></div>-->
<div class="sim-edit-box-content-field"> 
    <?php
        echo $this->Form->create(null, [
                                            'enctype' => 'multipart/form-data',
                                            'id' => 'attachImageForm',
                                            'action' => 'attachImage',
                                            
            ]);
        echo $this->Form->input('image_attach', ['type' => 'file']); 
        echo $this->Form->end(); 
    ?> 
</div>

</div>
<div class="sim-edit-box-buttons">
<div class="sim-edit-box-buttons-save">Save</div>
<div class="sim-edit-box-buttons-cancel">Cancel</div>
</div>
</div>
</div>

<div class="sim-edit" id="sim-edit-link">
<div class="sim-edit-box" style="height:310px;">
<div class="sim-edit-box-title">Edit Link</div>

<div class="sim-edit-box-content">
<div class="sim-edit-box-content-text">Title</div>
<div class="sim-edit-box-content-field"><input type="text" class="sim-edit-box-content-field-input title"/></div>
<div class="sim-edit-box-content-text">URL:<span>(full address including http://)</span></div>
<div class="sim-edit-box-content-field"><input type="text" class="sim-edit-box-content-field-input url"/></div>
</div>
<div class="sim-edit-box-buttons">
<div class="sim-edit-box-buttons-save">Save</div>
<div class="sim-edit-box-buttons-cancel">Cancel</div>
</div>
</div>
</div>

<div class="sim-edit" id="sim-edit-title">
<div class="sim-edit-box" style="height:230px;">
<div class="sim-edit-box-title">Edit Title</div>

<div class="sim-edit-box-content">
<div class="sim-edit-box-content-text">Title</div>
<div class="sim-edit-box-content-field"><input type="text" class="sim-edit-box-content-field-input title"/></div>
</div>
<div class="sim-edit-box-buttons">
<div class="sim-edit-box-buttons-save">Save</div>
<div class="sim-edit-box-buttons-cancel">Cancel</div>
</div>
</div>
</div>


<div class="sim-edit" id="sim-edit-text">
<div class="sim-edit-box" style="height:390px;">
<div class="sim-edit-box-title">Edit Text</div>

<div class="sim-edit-box-content">
<div class="sim-edit-box-content-text">Text</div>
<div class="sim-edit-box-content-field"><textarea class="sim-edit-box-content-field-textarea text"></textarea></div>
</div>
<div class="sim-edit-box-buttons">
<div class="sim-edit-box-buttons-save">Save</div>
<div class="sim-edit-box-buttons-cancel">Cancel</div>
</div>
</div>
</div>


<div class="sim-edit" id="sim-edit-icon">
<div class="sim-edit-box" style="height:580px;">
<div class="sim-edit-box-title">Edit Icon</div>

<div class="sim-edit-box-content">
<div class="sim-edit-box-content-text">Select Icon</div>
<div class="sim-edit-box-content-icons">


<i class="fa fa-glass"></i>
<i class="fa fa-music"></i>
<i class="fa fa-search"></i>
<i class="fa fa-envelope-o"></i>
<i class="fa fa-heart"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star-o"></i>
<i class="fa fa-user"></i>
<i class="fa fa-film"></i>
<i class="fa fa-th-large"></i>
<i class="fa fa-th"></i>
<i class="fa fa-th-list"></i>
<i class="fa fa-check"></i>
<i class="fa fa-times"></i>
<i class="fa fa-search-plus"></i>
<i class="fa fa-search-minus"></i>
<i class="fa fa-power-off"></i>
<i class="fa fa-signal"></i>
<i class="fa fa-cog"></i>
<i class="fa fa-trash-o"></i>
<i class="fa fa-home"></i>
<i class="fa fa-file-o"></i>
<i class="fa fa-clock-o"></i>
<i class="fa fa-road"></i>
<i class="fa fa-download"></i>
<i class="fa fa-arrow-circle-o-down"></i>
<i class="fa fa-arrow-circle-o-up"></i>
<i class="fa fa-inbox"></i>
<i class="fa fa-play-circle-o"></i>
<i class="fa fa-repeat"></i>
<i class="fa fa-refresh"></i>
<i class="fa fa-list-alt"></i>
<i class="fa fa-lock"></i>
<i class="fa fa-flag"></i>
<i class="fa fa-headphones"></i>
<i class="fa fa-volume-off"></i>
<i class="fa fa-volume-down"></i>
<i class="fa fa-volume-up"></i>
<i class="fa fa-qrcode"></i>
<i class="fa fa-barcode"></i>
<i class="fa fa-tag"></i>
<i class="fa fa-tags"></i>
<i class="fa fa-book"></i>
<i class="fa fa-bookmark"></i>
<i class="fa fa-print"></i>
<i class="fa fa-camera"></i>
<i class="fa fa-font"></i>
<i class="fa fa-bold"></i>
<i class="fa fa-italic"></i>
<i class="fa fa-text-height"></i>
<i class="fa fa-text-width"></i>
<i class="fa fa-align-left"></i>
<i class="fa fa-align-center"></i>
<i class="fa fa-align-right"></i>
<i class="fa fa-align-justify"></i>
<i class="fa fa-list"></i>
<i class="fa fa-outdent"></i>
<i class="fa fa-indent"></i>
<i class="fa fa-video-camera"></i>
<i class="fa fa-picture-o"></i>
<i class="fa fa-pencil"></i>
<i class="fa fa-map-marker"></i>
<i class="fa fa-adjust"></i>
<i class="fa fa-tint"></i>
<i class="fa fa-pencil-square-o"></i>
<i class="fa fa-share-square-o"></i>
<i class="fa fa-check-square-o"></i>
<i class="fa fa-arrows"></i>
<i class="fa fa-step-backward"></i>
<i class="fa fa-fast-backward"></i>
<i class="fa fa-backward"></i>
<i class="fa fa-play"></i>
<i class="fa fa-pause"></i>
<i class="fa fa-stop"></i>
<i class="fa fa-forward"></i>
<i class="fa fa-fast-forward"></i>
<i class="fa fa-step-forward"></i>
<i class="fa fa-eject"></i>
<i class="fa fa-chevron-left"></i>
<i class="fa fa-chevron-right"></i>
<i class="fa fa-plus-circle"></i>
<i class="fa fa-minus-circle"></i>
<i class="fa fa-times-circle"></i>
<i class="fa fa-check-circle"></i>
<i class="fa fa-question-circle"></i>
<i class="fa fa-info-circle"></i>
<i class="fa fa-crosshairs"></i>
<i class="fa fa-times-circle-o"></i>
<i class="fa fa-check-circle-o"></i>
<i class="fa fa-ban"></i>
<i class="fa fa-arrow-left"></i>
<i class="fa fa-arrow-right"></i>
<i class="fa fa-arrow-up"></i>
<i class="fa fa-arrow-down"></i>
<i class="fa fa-share"></i>
<i class="fa fa-expand"></i>
<i class="fa fa-compress"></i>
<i class="fa fa-plus"></i>
<i class="fa fa-minus"></i>
<i class="fa fa-asterisk"></i>
<i class="fa fa-exclamation-circle"></i>
<i class="fa fa-gift"></i>
<i class="fa fa-leaf"></i>
<i class="fa fa-fire"></i>
<i class="fa fa-eye"></i>
<i class="fa fa-eye-slash"></i>
<i class="fa fa-exclamation-triangle"></i>
<i class="fa fa-plane"></i>
<i class="fa fa-calendar"></i>
<i class="fa fa-random"></i>
<i class="fa fa-comment"></i>
<i class="fa fa-magnet"></i>
<i class="fa fa-chevron-up"></i>
<i class="fa fa-chevron-down"></i>
<i class="fa fa-retweet"></i>
<i class="fa fa-shopping-cart"></i>
<i class="fa fa-folder"></i>
<i class="fa fa-folder-open"></i>
<i class="fa fa-arrows-v"></i>
<i class="fa fa-arrows-h"></i>
<i class="fa fa-bar-chart"></i>
<i class="fa fa-twitter-square"></i>
<i class="fa fa-facebook-square"></i>
<i class="fa fa-camera-retro"></i>
<i class="fa fa-key"></i>
<i class="fa fa-cogs"></i>
<i class="fa fa-comments"></i>
<i class="fa fa-thumbs-o-up"></i>
<i class="fa fa-thumbs-o-down"></i>
<i class="fa fa-star-half"></i>
<i class="fa fa-heart-o"></i>
<i class="fa fa-sign-out"></i>
<i class="fa fa-linkedin-square"></i>
<i class="fa fa-thumb-tack"></i>
<i class="fa fa-external-link"></i>
<i class="fa fa-sign-in"></i>
<i class="fa fa-trophy"></i>
<i class="fa fa-github-square"></i>
<i class="fa fa-upload"></i>
<i class="fa fa-lemon-o"></i>
<i class="fa fa-phone"></i>
<i class="fa fa-square-o"></i>
<i class="fa fa-bookmark-o"></i>
<i class="fa fa-phone-square"></i>
<i class="fa fa-twitter"></i>
<i class="fa fa-facebook"></i>
<i class="fa fa-github"></i>
<i class="fa fa-unlock"></i>
<i class="fa fa-credit-card"></i>
<i class="fa fa-rss"></i>
<i class="fa fa-hdd-o"></i>
<i class="fa fa-bullhorn"></i>
<i class="fa fa-bell"></i>
<i class="fa fa-certificate"></i>
<i class="fa fa-hand-o-right"></i>
<i class="fa fa-hand-o-left"></i>
<i class="fa fa-hand-o-up"></i>
<i class="fa fa-hand-o-down"></i>
<i class="fa fa-arrow-circle-left"></i>
<i class="fa fa-arrow-circle-right"></i>
<i class="fa fa-arrow-circle-up"></i>
<i class="fa fa-arrow-circle-down"></i>
<i class="fa fa-globe"></i>
<i class="fa fa-wrench"></i>
<i class="fa fa-tasks"></i>
<i class="fa fa-filter"></i>
<i class="fa fa-briefcase"></i>
<i class="fa fa-arrows-alt"></i>
<i class="fa fa-users"></i>
<i class="fa fa-link"></i>
<i class="fa fa-cloud"></i>
<i class="fa fa-flask"></i>
<i class="fa fa-scissors"></i>
<i class="fa fa-files-o"></i>
<i class="fa fa-paperclip"></i>
<i class="fa fa-floppy-o"></i>
<i class="fa fa-square"></i>
<i class="fa fa-bars"></i>
<i class="fa fa-list-ul"></i>
<i class="fa fa-list-ol"></i>
<i class="fa fa-strikethrough"></i>
<i class="fa fa-underline"></i>
<i class="fa fa-table"></i>
<i class="fa fa-magic"></i>
<i class="fa fa-truck"></i>
<i class="fa fa-pinterest"></i>
<i class="fa fa-pinterest-square"></i>
<i class="fa fa-google-plus-square"></i>
<i class="fa fa-google-plus"></i>
<i class="fa fa-money"></i>
<i class="fa fa-caret-down"></i>
<i class="fa fa-caret-up"></i>
<i class="fa fa-caret-left"></i>
<i class="fa fa-caret-right"></i>
<i class="fa fa-columns"></i>
<i class="fa fa-sort"></i>
<i class="fa fa-sort-desc"></i>
<i class="fa fa-sort-asc"></i>
<i class="fa fa-envelope"></i>
<i class="fa fa-linkedin"></i>
<i class="fa fa-undo"></i>
<i class="fa fa-gavel"></i>
<i class="fa fa-tachometer"></i>
<i class="fa fa-comment-o"></i>
<i class="fa fa-comments-o"></i>
<i class="fa fa-bolt"></i>
<i class="fa fa-sitemap"></i>
<i class="fa fa-umbrella"></i>
<i class="fa fa-clipboard"></i>
<i class="fa fa-lightbulb-o"></i>
<i class="fa fa-exchange"></i>
<i class="fa fa-cloud-download"></i>
<i class="fa fa-cloud-upload"></i>
<i class="fa fa-user-md"></i>
<i class="fa fa-stethoscope"></i>
<i class="fa fa-suitcase"></i>
<i class="fa fa-bell-o"></i>
<i class="fa fa-coffee"></i>
<i class="fa fa-cutlery"></i>
<i class="fa fa-file-text-o"></i>
<i class="fa fa-building-o"></i>
<i class="fa fa-hospital-o"></i>
<i class="fa fa-ambulance"></i>
<i class="fa fa-medkit"></i>
<i class="fa fa-fighter-jet"></i>
<i class="fa fa-beer"></i>
<i class="fa fa-h-square"></i>
<i class="fa fa-plus-square"></i>
<i class="fa fa-angle-double-left"></i>
<i class="fa fa-angle-double-right"></i>
<i class="fa fa-angle-double-up"></i>
<i class="fa fa-angle-double-down"></i>
<i class="fa fa-angle-left"></i>
<i class="fa fa-angle-right"></i>
<i class="fa fa-angle-up"></i>
<i class="fa fa-angle-down"></i>
<i class="fa fa-desktop"></i>
<i class="fa fa-laptop"></i>
<i class="fa fa-tablet"></i>
<i class="fa fa-mobile"></i>
<i class="fa fa-circle-o"></i>
<i class="fa fa-quote-left"></i>
<i class="fa fa-quote-right"></i>
<i class="fa fa-spinner"></i>
<i class="fa fa-circle"></i>
<i class="fa fa-reply"></i>
<i class="fa fa-github-alt"></i>
<i class="fa fa-folder-o"></i>
<i class="fa fa-folder-open-o"></i>
<i class="fa fa-smile-o"></i>
<i class="fa fa-frown-o"></i>
<i class="fa fa-meh-o"></i>
<i class="fa fa-gamepad"></i>
<i class="fa fa-keyboard-o"></i>
<i class="fa fa-flag-o"></i>
<i class="fa fa-flag-checkered"></i>
<i class="fa fa-terminal"></i>
<i class="fa fa-code"></i>
<i class="fa fa-reply-all"></i>
<i class="fa fa-star-half-o"></i>
<i class="fa fa-location-arrow"></i>
<i class="fa fa-crop"></i>
<i class="fa fa-code-fork"></i>
<i class="fa fa-chain-broken"></i>
<i class="fa fa-question"></i>
<i class="fa fa-info"></i>
<i class="fa fa-exclamation"></i>
<i class="fa fa-superscript"></i>
<i class="fa fa-subscript"></i>
<i class="fa fa-eraser"></i>
<i class="fa fa-puzzle-piece"></i>
<i class="fa fa-microphone"></i>
<i class="fa fa-microphone-slash"></i>
<i class="fa fa-shield"></i>
<i class="fa fa-calendar-o"></i>
<i class="fa fa-fire-extinguisher"></i>
<i class="fa fa-rocket"></i>
<i class="fa fa-maxcdn"></i>
<i class="fa fa-chevron-circle-left"></i>
<i class="fa fa-chevron-circle-right"></i>
<i class="fa fa-chevron-circle-up"></i>
<i class="fa fa-chevron-circle-down"></i>
<i class="fa fa-html5"></i>
<i class="fa fa-css3"></i>
<i class="fa fa-anchor"></i>
<i class="fa fa-unlock-alt"></i>
<i class="fa fa-bullseye"></i>
<i class="fa fa-ellipsis-h"></i>
<i class="fa fa-ellipsis-v"></i>
<i class="fa fa-rss-square"></i>
<i class="fa fa-play-circle"></i>
<i class="fa fa-ticket"></i>
<i class="fa fa-minus-square"></i>
<i class="fa fa-minus-square-o"></i>
<i class="fa fa-level-up"></i>
<i class="fa fa-level-down"></i>
<i class="fa fa-check-square"></i>
<i class="fa fa-pencil-square"></i>
<i class="fa fa-external-link-square"></i>
<i class="fa fa-share-square"></i>
<i class="fa fa-compass"></i>
<i class="fa fa-caret-square-o-down"></i>
<i class="fa fa-caret-square-o-up"></i>
<i class="fa fa-caret-square-o-right"></i>
<i class="fa fa-eur"></i>
<i class="fa fa-gbp"></i>
<i class="fa fa-usd"></i>
<i class="fa fa-inr"></i>
<i class="fa fa-jpy"></i>
<i class="fa fa-rub"></i>
<i class="fa fa-krw"></i>
<i class="fa fa-btc"></i>
<i class="fa fa-file"></i>
<i class="fa fa-file-text"></i>
<i class="fa fa-sort-alpha-asc"></i>
<i class="fa fa-sort-alpha-desc"></i>
<i class="fa fa-sort-amount-asc"></i>
<i class="fa fa-sort-amount-desc"></i>
<i class="fa fa-sort-numeric-asc"></i>
<i class="fa fa-sort-numeric-desc"></i>
<i class="fa fa-thumbs-up"></i>
<i class="fa fa-thumbs-down"></i>
<i class="fa fa-youtube-square"></i>
<i class="fa fa-youtube"></i>
<i class="fa fa-xing"></i>
<i class="fa fa-xing-square"></i>
<i class="fa fa-youtube-play"></i>
<i class="fa fa-dropbox"></i>
<i class="fa fa-stack-overflow"></i>
<i class="fa fa-instagram"></i>
<i class="fa fa-flickr"></i>
<i class="fa fa-adn"></i>
<i class="fa fa-bitbucket"></i>
<i class="fa fa-bitbucket-square"></i>
<i class="fa fa-tumblr"></i>
<i class="fa fa-tumblr-square"></i>
<i class="fa fa-long-arrow-down"></i>
<i class="fa fa-long-arrow-up"></i>
<i class="fa fa-long-arrow-left"></i>
<i class="fa fa-long-arrow-right"></i>
<i class="fa fa-apple"></i>
<i class="fa fa-windows"></i>
<i class="fa fa-android"></i>
<i class="fa fa-linux"></i>
<i class="fa fa-dribbble"></i>
<i class="fa fa-skype"></i>
<i class="fa fa-foursquare"></i>
<i class="fa fa-trello"></i>
<i class="fa fa-female"></i>
<i class="fa fa-male"></i>
<i class="fa fa-gratipay"></i>
<i class="fa fa-sun-o"></i>
<i class="fa fa-moon-o"></i>
<i class="fa fa-archive"></i>
<i class="fa fa-bug"></i>
<i class="fa fa-vk"></i>
<i class="fa fa-weibo"></i>
<i class="fa fa-renren"></i>
<i class="fa fa-pagelines"></i>
<i class="fa fa-stack-exchange"></i>
<i class="fa fa-arrow-circle-o-right"></i>
<i class="fa fa-arrow-circle-o-left"></i>
<i class="fa fa-caret-square-o-left"></i>
<i class="fa fa-dot-circle-o"></i>
<i class="fa fa-wheelchair"></i>
<i class="fa fa-vimeo-square"></i>
<i class="fa fa-try"></i>
<i class="fa fa-plus-square-o"></i>
<i class="fa fa-space-shuttle"></i>
<i class="fa fa-slack"></i>
<i class="fa fa-envelope-square"></i>
<i class="fa fa-wordpress"></i>
<i class="fa fa-openid"></i>
<i class="fa fa-university"></i>
<i class="fa fa-graduation-cap"></i>
<i class="fa fa-yahoo"></i>
<i class="fa fa-google"></i>
<i class="fa fa-reddit"></i>
<i class="fa fa-reddit-square"></i>
<i class="fa fa-stumbleupon-circle"></i>
<i class="fa fa-stumbleupon"></i>
<i class="fa fa-delicious"></i>
<i class="fa fa-digg"></i>
<i class="fa fa-pied-piper"></i>
<i class="fa fa-pied-piper-alt"></i>
<i class="fa fa-drupal"></i>
<i class="fa fa-joomla"></i>
<i class="fa fa-language"></i>
<i class="fa fa-fax"></i>
<i class="fa fa-building"></i>
<i class="fa fa-child"></i>
<i class="fa fa-paw"></i>
<i class="fa fa-spoon"></i>
<i class="fa fa-cube"></i>
<i class="fa fa-cubes"></i>
<i class="fa fa-behance"></i>
<i class="fa fa-behance-square"></i>
<i class="fa fa-steam"></i>
<i class="fa fa-steam-square"></i>
<i class="fa fa-recycle"></i>
<i class="fa fa-car"></i>
<i class="fa fa-taxi"></i>
<i class="fa fa-tree"></i>
<i class="fa fa-spotify"></i>
<i class="fa fa-deviantart"></i>
<i class="fa fa-soundcloud"></i>
<i class="fa fa-database"></i>
<i class="fa fa-file-pdf-o"></i>
<i class="fa fa-file-word-o"></i>
<i class="fa fa-file-excel-o"></i>
<i class="fa fa-file-powerpoint-o"></i>
<i class="fa fa-file-image-o"></i>
<i class="fa fa-file-archive-o"></i>
<i class="fa fa-file-audio-o"></i>
<i class="fa fa-file-video-o"></i>
<i class="fa fa-file-code-o"></i>
<i class="fa fa-vine"></i>
<i class="fa fa-codepen"></i>
<i class="fa fa-jsfiddle"></i>
<i class="fa fa-life-ring"></i>
<i class="fa fa-circle-o-notch"></i>
<i class="fa fa-rebel"></i>
<i class="fa fa-empire"></i>
<i class="fa fa-git-square"></i>
<i class="fa fa-git"></i>
<i class="fa fa-hacker-news"></i>
<i class="fa fa-tencent-weibo"></i>
<i class="fa fa-qq"></i>
<i class="fa fa-weixin"></i>
<i class="fa fa-paper-plane"></i>
<i class="fa fa-paper-plane-o"></i>
<i class="fa fa-history"></i>
<i class="fa fa-circle-thin"></i>
<i class="fa fa-header"></i>
<i class="fa fa-paragraph"></i>
<i class="fa fa-sliders"></i>
<i class="fa fa-share-alt"></i>
<i class="fa fa-share-alt-square"></i>
<i class="fa fa-bomb"></i>
<i class="fa fa-futbol-o"></i>
<i class="fa fa-tty"></i>
<i class="fa fa-binoculars"></i>
<i class="fa fa-plug"></i>
<i class="fa fa-slideshare"></i>
<i class="fa fa-twitch"></i>
<i class="fa fa-yelp"></i>
<i class="fa fa-newspaper-o"></i>
<i class="fa fa-wifi"></i>
<i class="fa fa-calculator"></i>
<i class="fa fa-paypal"></i>
<i class="fa fa-google-wallet"></i>
<i class="fa fa-cc-visa"></i>
<i class="fa fa-cc-mastercard"></i>
<i class="fa fa-cc-discover"></i>
<i class="fa fa-cc-amex"></i>
<i class="fa fa-cc-paypal"></i>
<i class="fa fa-cc-stripe"></i>
<i class="fa fa-bell-slash"></i>
<i class="fa fa-bell-slash-o"></i>
<i class="fa fa-trash"></i>
<i class="fa fa-copyright"></i>
<i class="fa fa-at"></i>
<i class="fa fa-eyedropper"></i>
<i class="fa fa-paint-brush"></i>
<i class="fa fa-birthday-cake"></i>
<i class="fa fa-area-chart"></i>
<i class="fa fa-pie-chart"></i>
<i class="fa fa-line-chart"></i>
<i class="fa fa-lastfm"></i>
<i class="fa fa-lastfm-square"></i>
<i class="fa fa-toggle-off"></i>
<i class="fa fa-toggle-on"></i>
<i class="fa fa-bicycle"></i>
<i class="fa fa-bus"></i>
<i class="fa fa-ioxhost"></i>
<i class="fa fa-angellist"></i>
<i class="fa fa-cc"></i>
<i class="fa fa-ils"></i>
<i class="fa fa-meanpath"></i>
<i class="fa fa-buysellads"></i>
<i class="fa fa-connectdevelop"></i>
<i class="fa fa-dashcube"></i>
<i class="fa fa-forumbee"></i>
<i class="fa fa-leanpub"></i>
<i class="fa fa-sellsy"></i>
<i class="fa fa-shirtsinbulk"></i>
<i class="fa fa-simplybuilt"></i>
<i class="fa fa-skyatlas"></i>
<i class="fa fa-cart-plus"></i>
<i class="fa fa-cart-arrow-down"></i>
<i class="fa fa-diamond"></i>
<i class="fa fa-ship"></i>
<i class="fa fa-user-secret"></i>
<i class="fa fa-motorcycle"></i>
<i class="fa fa-street-view"></i>
<i class="fa fa-heartbeat"></i>
<i class="fa fa-venus"></i>
<i class="fa fa-mars"></i>
<i class="fa fa-mercury"></i>
<i class="fa fa-transgender"></i>
<i class="fa fa-transgender-alt"></i>
<i class="fa fa-venus-double"></i>
<i class="fa fa-mars-double"></i>
<i class="fa fa-venus-mars"></i>
<i class="fa fa-mars-stroke"></i>
<i class="fa fa-mars-stroke-v"></i>
<i class="fa fa-mars-stroke-h"></i>
<i class="fa fa-neuter"></i>
<i class="fa fa-facebook-official"></i>
<i class="fa fa-pinterest-p"></i>
<i class="fa fa-whatsapp"></i>
<i class="fa fa-server"></i>
<i class="fa fa-user-plus"></i>
<i class="fa fa-user-times"></i>
<i class="fa fa-bed"></i>
<i class="fa fa-viacoin"></i>
<i class="fa fa-train"></i>
<i class="fa fa-subway"></i>
<i class="fa fa-medium"></i>
<i class="fa fa-warning margin-right-sm"></i>
<i class="fa fa-exclamation-circle margin-right-sm"></i>
<i class="fa fa-bed"></i>
<i class="fa fa-buysellads"></i>
<i class="fa fa-cart-arrow-down"></i>
<i class="fa fa-cart-plus"></i>
<i class="fa fa-connectdevelop"></i>
<i class="fa fa-dashcube"></i>
<i class="fa fa-diamond"></i>
<i class="fa fa-facebook-official"></i>
<i class="fa fa-forumbee"></i>
<i class="fa fa-heartbeat"></i>
<i class="fa fa-hotel"></i>
<i class="fa fa-leanpub"></i>
<i class="fa fa-mars"></i>
<i class="fa fa-mars-double"></i>
<i class="fa fa-mars-stroke"></i>
<i class="fa fa-mars-stroke-h"></i>
<i class="fa fa-mars-stroke-v"></i>
<i class="fa fa-medium"></i>
<i class="fa fa-mercury"></i>
<i class="fa fa-motorcycle"></i>
<i class="fa fa-neuter"></i>
<i class="fa fa-pinterest-p"></i>
<i class="fa fa-sellsy"></i>
<i class="fa fa-server"></i>
<i class="fa fa-ship"></i>
<i class="fa fa-shirtsinbulk"></i>
<i class="fa fa-simplybuilt"></i>
<i class="fa fa-skyatlas"></i>
<i class="fa fa-street-view"></i>
<i class="fa fa-subway"></i>
<i class="fa fa-train"></i>
<i class="fa fa-transgender"></i>
<i class="fa fa-transgender-alt"></i>
<i class="fa fa-user-plus"></i>
<i class="fa fa-user-secret"></i>
<i class="fa fa-user-times"></i>
<i class="fa fa-venus"></i>
<i class="fa fa-venus-double"></i>
<i class="fa fa-venus-mars"></i>
<i class="fa fa-viacoin"></i>
<i class="fa fa-whatsapp"></i>
<i class="fa fa-adjust"></i>
<i class="fa fa-anchor"></i>
<i class="fa fa-archive"></i>
<i class="fa fa-area-chart"></i>
<i class="fa fa-arrows"></i>
<i class="fa fa-arrows-h"></i>
<i class="fa fa-arrows-v"></i>
<i class="fa fa-asterisk"></i>
<i class="fa fa-at"></i>
<i class="fa fa-automobile"></i>
<i class="fa fa-ban"></i>
<i class="fa fa-bank"></i>
<i class="fa fa-bar-chart"></i>
<i class="fa fa-bar-chart-o"></i>
<i class="fa fa-barcode"></i>
<i class="fa fa-bars"></i>
<i class="fa fa-bed"></i>
<i class="fa fa-beer"></i>
<i class="fa fa-bell"></i>
<i class="fa fa-bell-o"></i>
<i class="fa fa-bell-slash"></i>
<i class="fa fa-bell-slash-o"></i>
<i class="fa fa-bicycle"></i>
<i class="fa fa-binoculars"></i>
<i class="fa fa-birthday-cake"></i>
<i class="fa fa-bolt"></i>
<i class="fa fa-bomb"></i>
<i class="fa fa-book"></i>
<i class="fa fa-bookmark"></i>
<i class="fa fa-bookmark-o"></i>
<i class="fa fa-briefcase"></i>
<i class="fa fa-bug"></i>
<i class="fa fa-building"></i>
<i class="fa fa-building-o"></i>
<i class="fa fa-bullhorn"></i>
<i class="fa fa-bullseye"></i>
<i class="fa fa-bus"></i>
<i class="fa fa-cab"></i>
<i class="fa fa-calculator"></i>
<i class="fa fa-calendar"></i>
<i class="fa fa-calendar-o"></i>
<i class="fa fa-camera"></i>
<i class="fa fa-camera-retro"></i>
<i class="fa fa-car"></i>
<i class="fa fa-caret-square-o-down"></i>
<i class="fa fa-caret-square-o-left"></i>
<i class="fa fa-caret-square-o-right"></i>
<i class="fa fa-caret-square-o-up"></i>
<i class="fa fa-cart-arrow-down"></i>
<i class="fa fa-cart-plus"></i>
<i class="fa fa-cc"></i>
<i class="fa fa-certificate"></i>
<i class="fa fa-check"></i>
<i class="fa fa-check-circle"></i>
<i class="fa fa-check-circle-o"></i>
<i class="fa fa-check-square"></i>
<i class="fa fa-check-square-o"></i>
<i class="fa fa-child"></i>
<i class="fa fa-circle"></i>
<i class="fa fa-circle-o"></i>
<i class="fa fa-circle-o-notch"></i>
<i class="fa fa-circle-thin"></i>
<i class="fa fa-clock-o"></i>
<i class="fa fa-close"></i>
<i class="fa fa-cloud"></i>
<i class="fa fa-cloud-download"></i>
<i class="fa fa-cloud-upload"></i>
<i class="fa fa-code"></i>
<i class="fa fa-code-fork"></i>
<i class="fa fa-coffee"></i>
<i class="fa fa-cog"></i>
<i class="fa fa-cogs"></i>
<i class="fa fa-comment"></i>
<i class="fa fa-comment-o"></i>
<i class="fa fa-comments"></i>
<i class="fa fa-comments-o"></i>
<i class="fa fa-compass"></i>
<i class="fa fa-copyright"></i>
<i class="fa fa-credit-card"></i>
<i class="fa fa-crop"></i>
<i class="fa fa-crosshairs"></i>
<i class="fa fa-cube"></i>
<i class="fa fa-cubes"></i>
<i class="fa fa-cutlery"></i>
<i class="fa fa-dashboard"></i>
<i class="fa fa-database"></i>
<i class="fa fa-desktop"></i>
<i class="fa fa-diamond"></i>
<i class="fa fa-dot-circle-o"></i>
<i class="fa fa-download"></i>
<i class="fa fa-edit"></i>
<i class="fa fa-ellipsis-h"></i>
<i class="fa fa-ellipsis-v"></i>
<i class="fa fa-envelope"></i>
<i class="fa fa-envelope-o"></i>
<i class="fa fa-envelope-square"></i>
<i class="fa fa-eraser"></i>
<i class="fa fa-exchange"></i>
<i class="fa fa-exclamation"></i>
<i class="fa fa-exclamation-circle"></i>
<i class="fa fa-exclamation-triangle"></i>
<i class="fa fa-external-link"></i>
<i class="fa fa-external-link-square"></i>
<i class="fa fa-eye"></i>
<i class="fa fa-eye-slash"></i>
<i class="fa fa-eyedropper"></i>
<i class="fa fa-fax"></i>
<i class="fa fa-female"></i>
<i class="fa fa-fighter-jet"></i>
<i class="fa fa-file-archive-o"></i>
<i class="fa fa-file-audio-o"></i>
<i class="fa fa-file-code-o"></i>
<i class="fa fa-file-excel-o"></i>
<i class="fa fa-file-image-o"></i>
<i class="fa fa-file-movie-o"></i>
<i class="fa fa-file-pdf-o"></i>
<i class="fa fa-file-photo-o"></i>
<i class="fa fa-file-picture-o"></i>
<i class="fa fa-file-powerpoint-o"></i>
<i class="fa fa-file-sound-o"></i>
<i class="fa fa-file-video-o"></i>
<i class="fa fa-file-word-o"></i>
<i class="fa fa-file-zip-o"></i>
<i class="fa fa-film"></i>
<i class="fa fa-filter"></i>
<i class="fa fa-fire"></i>
<i class="fa fa-fire-extinguisher"></i>
<i class="fa fa-flag"></i>
<i class="fa fa-flag-checkered"></i>
<i class="fa fa-flag-o"></i>
<i class="fa fa-flash"></i>
<i class="fa fa-flask"></i>
<i class="fa fa-folder"></i>
<i class="fa fa-folder-o"></i>
<i class="fa fa-folder-open"></i>
<i class="fa fa-folder-open-o"></i>
<i class="fa fa-frown-o"></i>
<i class="fa fa-futbol-o"></i>
<i class="fa fa-gamepad"></i>
<i class="fa fa-gavel"></i>
<i class="fa fa-gear"></i>
<i class="fa fa-gears"></i>
<i class="fa fa-genderless"></i>
<i class="fa fa-gift"></i>
<i class="fa fa-glass"></i>
<i class="fa fa-globe"></i>
<i class="fa fa-graduation-cap"></i>
<i class="fa fa-group"></i>
<i class="fa fa-hdd-o"></i>
<i class="fa fa-headphones"></i>
<i class="fa fa-heart"></i>
<i class="fa fa-heart-o"></i>
<i class="fa fa-heartbeat"></i>
<i class="fa fa-history"></i>
<i class="fa fa-home"></i>
<i class="fa fa-hotel"></i>
<i class="fa fa-image"></i>
<i class="fa fa-inbox"></i>
<i class="fa fa-info"></i>
<i class="fa fa-info-circle"></i>
<i class="fa fa-institution"></i>
<i class="fa fa-key"></i>
<i class="fa fa-keyboard-o"></i>
<i class="fa fa-language"></i>
<i class="fa fa-laptop"></i>
<i class="fa fa-leaf"></i>
<i class="fa fa-legal"></i>
<i class="fa fa-lemon-o"></i>
<i class="fa fa-level-down"></i>
<i class="fa fa-level-up"></i>
<i class="fa fa-life-bouy"></i>
<i class="fa fa-life-buoy"></i>
<i class="fa fa-life-ring"></i>
<i class="fa fa-life-saver"></i>
<i class="fa fa-lightbulb-o"></i>
<i class="fa fa-line-chart"></i>
<i class="fa fa-location-arrow"></i>
<i class="fa fa-lock"></i>
<i class="fa fa-magic"></i>
<i class="fa fa-magnet"></i>
<i class="fa fa-mail-forward"></i>
<i class="fa fa-mail-reply"></i>
<i class="fa fa-mail-reply-all"></i>
<i class="fa fa-male"></i>
<i class="fa fa-map-marker"></i>
<i class="fa fa-meh-o"></i>
<i class="fa fa-microphone"></i>
<i class="fa fa-microphone-slash"></i>
<i class="fa fa-minus"></i>
<i class="fa fa-minus-circle"></i>
<i class="fa fa-minus-square"></i>
<i class="fa fa-minus-square-o"></i>
<i class="fa fa-mobile"></i>
<i class="fa fa-mobile-phone"></i>
<i class="fa fa-money"></i>
<i class="fa fa-moon-o"></i>
<i class="fa fa-mortar-board"></i>
<i class="fa fa-motorcycle"></i>
<i class="fa fa-music"></i>
<i class="fa fa-navicon"></i>
<i class="fa fa-newspaper-o"></i>
<i class="fa fa-paint-brush"></i>
<i class="fa fa-paper-plane"></i>
<i class="fa fa-paper-plane-o"></i>
<i class="fa fa-paw"></i>
<i class="fa fa-pencil"></i>
<i class="fa fa-pencil-square"></i>
<i class="fa fa-pencil-square-o"></i>
<i class="fa fa-phone"></i>
<i class="fa fa-phone-square"></i>
<i class="fa fa-photo"></i>
<i class="fa fa-picture-o"></i>
<i class="fa fa-pie-chart"></i>
<i class="fa fa-plane"></i>
<i class="fa fa-plug"></i>
<i class="fa fa-plus"></i>
<i class="fa fa-plus-circle"></i>
<i class="fa fa-plus-square"></i>
<i class="fa fa-plus-square-o"></i>
<i class="fa fa-power-off"></i>
<i class="fa fa-print"></i>
<i class="fa fa-puzzle-piece"></i>
<i class="fa fa-qrcode"></i>
<i class="fa fa-question"></i>
<i class="fa fa-question-circle"></i>
<i class="fa fa-quote-left"></i>
<i class="fa fa-quote-right"></i>
<i class="fa fa-random"></i>
<i class="fa fa-recycle"></i>
<i class="fa fa-refresh"></i>
<i class="fa fa-remove"></i>
<i class="fa fa-reorder"></i>
<i class="fa fa-reply"></i>
<i class="fa fa-reply-all"></i>
<i class="fa fa-retweet"></i>
<i class="fa fa-road"></i>
<i class="fa fa-rocket"></i>
<i class="fa fa-rss"></i>
<i class="fa fa-rss-square"></i>
<i class="fa fa-search"></i>
<i class="fa fa-search-minus"></i>
<i class="fa fa-search-plus"></i>
<i class="fa fa-send"></i>
<i class="fa fa-send-o"></i>
<i class="fa fa-server"></i>
<i class="fa fa-share"></i>
<i class="fa fa-share-alt"></i>
<i class="fa fa-share-alt-square"></i>
<i class="fa fa-share-square"></i>
<i class="fa fa-share-square-o"></i>
<i class="fa fa-shield"></i>
<i class="fa fa-ship"></i>
<i class="fa fa-shopping-cart"></i>
<i class="fa fa-sign-in"></i>
<i class="fa fa-sign-out"></i>
<i class="fa fa-signal"></i>
<i class="fa fa-sitemap"></i>
<i class="fa fa-sliders"></i>
<i class="fa fa-smile-o"></i>
<i class="fa fa-soccer-ball-o"></i>
<i class="fa fa-sort"></i>
<i class="fa fa-sort-alpha-asc"></i>
<i class="fa fa-sort-alpha-desc"></i>
<i class="fa fa-sort-amount-asc"></i>
<i class="fa fa-sort-amount-desc"></i>
<i class="fa fa-sort-asc"></i>
<i class="fa fa-sort-desc"></i>
<i class="fa fa-sort-down"></i>
<i class="fa fa-sort-numeric-asc"></i>
<i class="fa fa-sort-numeric-desc"></i>
<i class="fa fa-sort-up"></i>
<i class="fa fa-space-shuttle"></i>
<i class="fa fa-spinner"></i>
<i class="fa fa-spoon"></i>
<i class="fa fa-square"></i>
<i class="fa fa-square-o"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star-half"></i>
<i class="fa fa-star-half-empty"></i>
<i class="fa fa-star-half-full"></i>
<i class="fa fa-star-half-o"></i>
<i class="fa fa-star-o"></i>
<i class="fa fa-street-view"></i>
<i class="fa fa-suitcase"></i>
<i class="fa fa-sun-o"></i>
<i class="fa fa-support"></i>
<i class="fa fa-tablet"></i>
<i class="fa fa-tachometer"></i>
<i class="fa fa-tag"></i>
<i class="fa fa-tags"></i>
<i class="fa fa-tasks"></i>
<i class="fa fa-taxi"></i>
<i class="fa fa-terminal"></i>
<i class="fa fa-thumb-tack"></i>
<i class="fa fa-thumbs-down"></i>
<i class="fa fa-thumbs-o-down"></i>
<i class="fa fa-thumbs-o-up"></i>
<i class="fa fa-thumbs-up"></i>
<i class="fa fa-ticket"></i>
<i class="fa fa-times"></i>
<i class="fa fa-times-circle"></i>
<i class="fa fa-times-circle-o"></i>
<i class="fa fa-tint"></i>
<i class="fa fa-toggle-down"></i>
<i class="fa fa-toggle-left"></i>
<i class="fa fa-toggle-off"></i>
<i class="fa fa-toggle-on"></i>
<i class="fa fa-toggle-right"></i>
<i class="fa fa-toggle-up"></i>
<i class="fa fa-trash"></i>
<i class="fa fa-trash-o"></i>
<i class="fa fa-tree"></i>
<i class="fa fa-trophy"></i>
<i class="fa fa-truck"></i>
<i class="fa fa-tty"></i>
<i class="fa fa-umbrella"></i>
<i class="fa fa-university"></i>
<i class="fa fa-unlock"></i>
<i class="fa fa-unlock-alt"></i>
<i class="fa fa-unsorted"></i>
<i class="fa fa-upload"></i>
<i class="fa fa-user"></i>
<i class="fa fa-user-plus"></i>
<i class="fa fa-user-secret"></i>
<i class="fa fa-user-times"></i>
<i class="fa fa-users"></i>
<i class="fa fa-video-camera"></i>
<i class="fa fa-volume-down"></i>
<i class="fa fa-volume-off"></i>
<i class="fa fa-volume-up"></i>
<i class="fa fa-warning"></i>
<i class="fa fa-wheelchair"></i>
<i class="fa fa-wifi"></i>
<i class="fa fa-wrench"></i>
<i class="fa fa-ambulance"></i>
<i class="fa fa-automobile"></i>
<i class="fa fa-bicycle"></i>
<i class="fa fa-bus"></i>
<i class="fa fa-cab"></i>
<i class="fa fa-car"></i>
<i class="fa fa-fighter-jet"></i>
<i class="fa fa-motorcycle"></i>
<i class="fa fa-plane"></i>
<i class="fa fa-rocket"></i>
<i class="fa fa-ship"></i>
<i class="fa fa-space-shuttle"></i>
<i class="fa fa-subway"></i>
<i class="fa fa-taxi"></i>
<i class="fa fa-train"></i>
<i class="fa fa-truck"></i>
<i class="fa fa-wheelchair"></i>
<i class="fa fa-circle-thin"></i>
<i class="fa fa-genderless"></i>
<i class="fa fa-mars"></i>
<i class="fa fa-mars-double"></i>
<i class="fa fa-mars-stroke"></i>
<i class="fa fa-mars-stroke-h"></i>
<i class="fa fa-mars-stroke-v"></i>
<i class="fa fa-mercury"></i>
<i class="fa fa-neuter"></i>
<i class="fa fa-transgender"></i>
<i class="fa fa-transgender-alt"></i>
<i class="fa fa-venus"></i>
<i class="fa fa-venus-double"></i>
<i class="fa fa-venus-mars"></i>
<i class="fa fa-file"></i>
<i class="fa fa-file-archive-o"></i>
<i class="fa fa-file-audio-o"></i>
<i class="fa fa-file-code-o"></i>
<i class="fa fa-file-excel-o"></i>
<i class="fa fa-file-image-o"></i>
<i class="fa fa-file-movie-o"></i>
<i class="fa fa-file-o"></i>
<i class="fa fa-file-pdf-o"></i>
<i class="fa fa-file-photo-o"></i>
<i class="fa fa-file-picture-o"></i>
<i class="fa fa-file-powerpoint-o"></i>
<i class="fa fa-file-sound-o"></i>
<i class="fa fa-file-text"></i>
<i class="fa fa-file-text-o"></i>
<i class="fa fa-file-video-o"></i>
<i class="fa fa-file-word-o"></i>
<i class="fa fa-file-zip-o"></i>
<i class="fa fa-info-circle fa-lg fa-li"></i>
<i class="fa fa-circle-o-notch"></i>
<i class="fa fa-cog"></i>
<i class="fa fa-gear"></i>
<i class="fa fa-refresh"></i>
<i class="fa fa-spinner"></i>
<i class="fa fa-check-square"></i>
<i class="fa fa-check-square-o"></i>
<i class="fa fa-circle"></i>
<i class="fa fa-circle-o"></i>
<i class="fa fa-dot-circle-o"></i>
<i class="fa fa-minus-square"></i>
<i class="fa fa-minus-square-o"></i>
<i class="fa fa-plus-square"></i>
<i class="fa fa-plus-square-o"></i>
<i class="fa fa-square"></i>
<i class="fa fa-square-o"></i>
<i class="fa fa-cc-amex"></i>
<i class="fa fa-cc-discover"></i>
<i class="fa fa-cc-mastercard"></i>
<i class="fa fa-cc-paypal"></i>
<i class="fa fa-cc-stripe"></i>
<i class="fa fa-cc-visa"></i>
<i class="fa fa-credit-card"></i>
<i class="fa fa-google-wallet"></i>
<i class="fa fa-paypal"></i>
<i class="fa fa-area-chart"></i>
<i class="fa fa-bar-chart"></i>
<i class="fa fa-bar-chart-o"></i>
<i class="fa fa-line-chart"></i>
<i class="fa fa-pie-chart"></i>
<i class="fa fa-bitcoin"></i>
<i class="fa fa-btc"></i>
<i class="fa fa-cny"></i>
<i class="fa fa-dollar"></i>
<i class="fa fa-eur"></i>
<i class="fa fa-euro"></i>
<i class="fa fa-gbp"></i>
<i class="fa fa-ils"></i>
<i class="fa fa-inr"></i>
<i class="fa fa-jpy"></i>
<i class="fa fa-krw"></i>
<i class="fa fa-money"></i>
<i class="fa fa-rmb"></i>
<i class="fa fa-rouble"></i>
<i class="fa fa-rub"></i>
<i class="fa fa-ruble"></i>
<i class="fa fa-rupee"></i>
<i class="fa fa-shekel"></i>
<i class="fa fa-sheqel"></i>
<i class="fa fa-try"></i>
<i class="fa fa-turkish-lira"></i>
<i class="fa fa-usd"></i>
<i class="fa fa-won"></i>
<i class="fa fa-yen"></i>
<i class="fa fa-align-center"></i>
<i class="fa fa-align-justify"></i>
<i class="fa fa-align-left"></i>
<i class="fa fa-align-right"></i>
<i class="fa fa-bold"></i>
<i class="fa fa-chain"></i>
<i class="fa fa-chain-broken"></i>
<i class="fa fa-clipboard"></i>
<i class="fa fa-columns"></i>
<i class="fa fa-copy"></i>
<i class="fa fa-cut"></i>
<i class="fa fa-dedent"></i>
<i class="fa fa-eraser"></i>
<i class="fa fa-file"></i>
<i class="fa fa-file-o"></i>
<i class="fa fa-file-text"></i>
<i class="fa fa-file-text-o"></i>
<i class="fa fa-files-o"></i>
<i class="fa fa-floppy-o"></i>
<i class="fa fa-font"></i>
<i class="fa fa-header"></i>
<i class="fa fa-indent"></i>
<i class="fa fa-italic"></i>
<i class="fa fa-link"></i>
<i class="fa fa-list"></i>
<i class="fa fa-list-alt"></i>
<i class="fa fa-list-ol"></i>
<i class="fa fa-list-ul"></i>
<i class="fa fa-outdent"></i>
<i class="fa fa-paperclip"></i>
<i class="fa fa-paragraph"></i>
<i class="fa fa-paste"></i>
<i class="fa fa-repeat"></i>
<i class="fa fa-rotate-left"></i>
<i class="fa fa-rotate-right"></i>
<i class="fa fa-save"></i>
<i class="fa fa-scissors"></i>
<i class="fa fa-strikethrough"></i>
<i class="fa fa-subscript"></i>
<i class="fa fa-superscript"></i>
<i class="fa fa-table"></i>
<i class="fa fa-text-height"></i>
<i class="fa fa-text-width"></i>
<i class="fa fa-th"></i>
<i class="fa fa-th-large"></i>
<i class="fa fa-th-list"></i>
<i class="fa fa-underline"></i>
<i class="fa fa-undo"></i>
<i class="fa fa-unlink"></i>
<i class="fa fa-angle-double-down"></i>
<i class="fa fa-angle-double-left"></i>
<i class="fa fa-angle-double-right"></i>
<i class="fa fa-angle-double-up"></i>
<i class="fa fa-angle-down"></i>
<i class="fa fa-angle-left"></i>
<i class="fa fa-angle-right"></i>
<i class="fa fa-angle-up"></i>
<i class="fa fa-arrow-circle-down"></i>
<i class="fa fa-arrow-circle-left"></i>
<i class="fa fa-arrow-circle-o-down"></i>
<i class="fa fa-arrow-circle-o-left"></i>
<i class="fa fa-arrow-circle-o-right"></i>
<i class="fa fa-arrow-circle-o-up"></i>
<i class="fa fa-arrow-circle-right"></i>
<i class="fa fa-arrow-circle-up"></i>
<i class="fa fa-arrow-down"></i>
<i class="fa fa-arrow-left"></i>
<i class="fa fa-arrow-right"></i>
<i class="fa fa-arrow-up"></i>
<i class="fa fa-arrows"></i>
<i class="fa fa-arrows-alt"></i>
<i class="fa fa-arrows-h"></i>
<i class="fa fa-arrows-v"></i>
<i class="fa fa-caret-down"></i>
<i class="fa fa-caret-left"></i>
<i class="fa fa-caret-right"></i>
<i class="fa fa-caret-square-o-down"></i>
<i class="fa fa-caret-square-o-left"></i>
<i class="fa fa-caret-square-o-right"></i>
<i class="fa fa-caret-square-o-up"></i>
<i class="fa fa-caret-up"></i>
<i class="fa fa-chevron-circle-down"></i>
<i class="fa fa-chevron-circle-left"></i>
<i class="fa fa-chevron-circle-right"></i>
<i class="fa fa-chevron-circle-up"></i>
<i class="fa fa-chevron-down"></i>
<i class="fa fa-chevron-left"></i>
<i class="fa fa-chevron-right"></i>
<i class="fa fa-chevron-up"></i>
<i class="fa fa-hand-o-down"></i>
<i class="fa fa-hand-o-left"></i>
<i class="fa fa-hand-o-right"></i>
<i class="fa fa-hand-o-up"></i>
<i class="fa fa-long-arrow-down"></i>
<i class="fa fa-long-arrow-left"></i>
<i class="fa fa-long-arrow-right"></i>
<i class="fa fa-long-arrow-up"></i>
<i class="fa fa-toggle-down"></i>
<i class="fa fa-toggle-left"></i>
<i class="fa fa-toggle-right"></i>
<i class="fa fa-toggle-up"></i>
<i class="fa fa-arrows-alt"></i>
<i class="fa fa-backward"></i>
<i class="fa fa-compress"></i>
<i class="fa fa-eject"></i>
<i class="fa fa-expand"></i>
<i class="fa fa-fast-backward"></i>
<i class="fa fa-fast-forward"></i>
<i class="fa fa-forward"></i>
<i class="fa fa-pause"></i>
<i class="fa fa-play"></i>
<i class="fa fa-play-circle"></i>
<i class="fa fa-play-circle-o"></i>
<i class="fa fa-step-backward"></i>
<i class="fa fa-step-forward"></i>
<i class="fa fa-stop"></i>
<i class="fa fa-youtube-play"></i>
<i class="fa fa-warning"></i>
<i class="fa fa-adn"></i>
<i class="fa fa-android"></i>
<i class="fa fa-angellist"></i>
<i class="fa fa-apple"></i>
<i class="fa fa-behance"></i>
<i class="fa fa-behance-square"></i>
<i class="fa fa-bitbucket"></i>
<i class="fa fa-bitbucket-square"></i>
<i class="fa fa-bitcoin"></i>
<i class="fa fa-btc"></i>
<i class="fa fa-buysellads"></i>
<i class="fa fa-cc-amex"></i>
<i class="fa fa-cc-discover"></i>
<i class="fa fa-cc-mastercard"></i>
<i class="fa fa-cc-paypal"></i>
<i class="fa fa-cc-stripe"></i>
<i class="fa fa-cc-visa"></i>
<i class="fa fa-codepen"></i>
<i class="fa fa-connectdevelop"></i>
<i class="fa fa-css3"></i>
<i class="fa fa-dashcube"></i>
<i class="fa fa-delicious"></i>
<i class="fa fa-deviantart"></i>
<i class="fa fa-digg"></i>
<i class="fa fa-dribbble"></i>
<i class="fa fa-dropbox"></i>
<i class="fa fa-drupal"></i>
<i class="fa fa-empire"></i>
<i class="fa fa-facebook"></i>
<i class="fa fa-facebook-f"></i>
<i class="fa fa-facebook-official"></i>
<i class="fa fa-facebook-square"></i>
<i class="fa fa-flickr"></i>
<i class="fa fa-forumbee"></i>
<i class="fa fa-foursquare"></i>
<i class="fa fa-ge"></i>
<i class="fa fa-git"></i>
<i class="fa fa-git-square"></i>
<i class="fa fa-github"></i>
<i class="fa fa-github-alt"></i>
<i class="fa fa-github-square"></i>
<i class="fa fa-gittip"></i>
<i class="fa fa-google"></i>
<i class="fa fa-google-plus"></i>
<i class="fa fa-google-plus-square"></i>
<i class="fa fa-google-wallet"></i>
<i class="fa fa-gratipay"></i>
<i class="fa fa-hacker-news"></i>
<i class="fa fa-html5"></i>
<i class="fa fa-instagram"></i>
<i class="fa fa-ioxhost"></i>
<i class="fa fa-joomla"></i>
<i class="fa fa-jsfiddle"></i>
<i class="fa fa-lastfm"></i>
<i class="fa fa-lastfm-square"></i>
<i class="fa fa-leanpub"></i>
<i class="fa fa-linkedin"></i>
<i class="fa fa-linkedin-square"></i>
<i class="fa fa-linux"></i>
<i class="fa fa-maxcdn"></i>
<i class="fa fa-meanpath"></i>
<i class="fa fa-medium"></i>
<i class="fa fa-openid"></i>
<i class="fa fa-pagelines"></i>
<i class="fa fa-paypal"></i>
<i class="fa fa-pied-piper"></i>
<i class="fa fa-pied-piper-alt"></i>
<i class="fa fa-pinterest"></i>
<i class="fa fa-pinterest-p"></i>
<i class="fa fa-pinterest-square"></i>
<i class="fa fa-qq"></i>
<i class="fa fa-ra"></i>
<i class="fa fa-rebel"></i>
<i class="fa fa-reddit"></i>
<i class="fa fa-reddit-square"></i>
<i class="fa fa-renren"></i>
<i class="fa fa-sellsy"></i>
<i class="fa fa-share-alt"></i>
<i class="fa fa-share-alt-square"></i>
<i class="fa fa-shirtsinbulk"></i>
<i class="fa fa-simplybuilt"></i>
<i class="fa fa-skyatlas"></i>
<i class="fa fa-skype"></i>
<i class="fa fa-slack"></i>
<i class="fa fa-slideshare"></i>
<i class="fa fa-soundcloud"></i>
<i class="fa fa-spotify"></i>
<i class="fa fa-stack-exchange"></i>
<i class="fa fa-stack-overflow"></i>
<i class="fa fa-steam"></i>
<i class="fa fa-steam-square"></i>
<i class="fa fa-stumbleupon"></i>
<i class="fa fa-stumbleupon-circle"></i>
<i class="fa fa-tencent-weibo"></i>
<i class="fa fa-trello"></i>
<i class="fa fa-tumblr"></i>
<i class="fa fa-tumblr-square"></i>
<i class="fa fa-twitch"></i>
<i class="fa fa-twitter"></i>
<i class="fa fa-twitter-square"></i>
<i class="fa fa-viacoin"></i>
<i class="fa fa-vimeo-square"></i>
<i class="fa fa-vine"></i>
<i class="fa fa-vk"></i>
<i class="fa fa-wechat"></i>
<i class="fa fa-weibo"></i>
<i class="fa fa-weixin"></i>
<i class="fa fa-whatsapp"></i>
<i class="fa fa-windows"></i>
<i class="fa fa-wordpress"></i>
<i class="fa fa-xing"></i>
<i class="fa fa-xing-square"></i>
<i class="fa fa-yahoo"></i>
<i class="fa fa-yelp"></i>
<i class="fa fa-youtube"></i>
<i class="fa fa-youtube-play"></i>
<i class="fa fa-youtube-square"></i>
<i class="fa fa-ambulance"></i>
<i class="fa fa-h-square"></i>
<i class="fa fa-heart"></i>
<i class="fa fa-heart-o"></i>
<i class="fa fa-heartbeat"></i>
<i class="fa fa-hospital-o"></i>
<i class="fa fa-medkit"></i>
<i class="fa fa-plus-square"></i>
<i class="fa fa-stethoscope"></i>
<i class="fa fa-user-md"></i>
<i class="fa fa-wheelchair"></i>


</div>
</div>
<div class="sim-edit-box-buttons">
<div class="sim-edit-box-buttons-cancel" style="margin-left:0px;">Cancel</div>
</div>
</div>
</div>


<div id="newsletter-builder" class="resize-height">
  
  <div id="newsletter-builder-area" class="resize-height resize-width">
    <div id="newsletter-builder-area-center">
      <div id="newsletter-builder-area-center-frame">
      
      <div id="newsletter-builder-area-center-frame-buttons">
        <div id="newsletter-builder-area-center-frame-buttons-add">Add&nbsp;&nbsp;<i class="fa fa-caret-down"></i>
          <div id="newsletter-builder-area-center-frame-buttons-dropdown">
            <div class="newsletter-builder-area-center-frame-buttons-dropdown-tab" id="add-header"><p>Header</p><i class="fa fa-caret-right"></i></div>
            <div class="newsletter-builder-area-center-frame-buttons-dropdown-tab" id="add-content"><p>Content</p><i class="fa fa-caret-right"></i></div>
            <div class="newsletter-builder-area-center-frame-buttons-dropdown-tab" id="add-footer"><p>Footer</p><i class="fa fa-caret-right"></i></div>
            <div class="newsletter-builder-area-center-frame-buttons-content">
                    <div class="newsletter-builder-area-center-frame-buttons-content-tab" data-type="header" data-id="19"><?php echo $this->Html->image('sim/_row_thumbs/sim-row-thumb_19.png'); ?></div>
                  <div class="newsletter-builder-area-center-frame-buttons-content-tab" data-type="header" data-id="1"> <?php echo $this->Html->image('sim/_row_thumbs/sim-row-thumb_1.png'); ?> </div>
                  <div class="newsletter-builder-area-center-frame-buttons-content-tab" data-type="header" data-id="2"><?php echo $this->Html->image('sim/_row_thumbs/sim-row-thumb_2.png'); ?></div>
                  <div class="newsletter-builder-area-center-frame-buttons-content-tab" data-type="header" data-id="3"><?php echo $this->Html->image('sim/_row_thumbs/sim-row-thumb_3.png'); ?></div>
                  
                  <div class="newsletter-builder-area-center-frame-buttons-content-tab" data-type="content" data-id="20"><?php echo $this->Html->image('sim/_row_thumbs/sim-row-thumb_20.png'); ?></div>
                  <div class="newsletter-builder-area-center-frame-buttons-content-tab" data-type="content" data-id="4"><?php echo $this->Html->image('sim/_row_thumbs/sim-row-thumb_4.png'); ?></div>
                  <div class="newsletter-builder-area-center-frame-buttons-content-tab" data-type="content" data-id="5"><?php echo $this->Html->image('sim/_row_thumbs/sim-row-thumb_5.png'); ?></div>
                  <div class="newsletter-builder-area-center-frame-buttons-content-tab" data-type="content" data-id="6"><?php echo $this->Html->image('sim/_row_thumbs/sim-row-thumb_6.png'); ?></div>
                  <div class="newsletter-builder-area-center-frame-buttons-content-tab" data-type="content" data-id="7"><?php echo $this->Html->image('sim/_row_thumbs/sim-row-thumb_7.png'); ?></div>
                  <div class="newsletter-builder-area-center-frame-buttons-content-tab" data-type="content" data-id="8"><?php echo $this->Html->image('sim/_row_thumbs/sim-row-thumb_8.png'); ?></div>
                  <div class="newsletter-builder-area-center-frame-buttons-content-tab" data-type="content" data-id="9"><?php echo $this->Html->image('sim/_row_thumbs/sim-row-thumb_9.png'); ?></div>
                  <div class="newsletter-builder-area-center-frame-buttons-content-tab" data-type="content" data-id="10"><?php echo $this->Html->image('sim/_row_thumbs/sim-row-thumb_10.png'); ?></div>
                  <div class="newsletter-builder-area-center-frame-buttons-content-tab" data-type="content" data-id="11"><?php echo $this->Html->image('sim/_row_thumbs/sim-row-thumb_11.png'); ?></div>
                  <div class="newsletter-builder-area-center-frame-buttons-content-tab" data-type="content" data-id="12"><?php echo $this->Html->image('sim/_row_thumbs/sim-row-thumb_12.png'); ?></div>
                  <div class="newsletter-builder-area-center-frame-buttons-content-tab" data-type="content" data-id="13"><?php echo $this->Html->image('sim/_row_thumbs/sim-row-thumb_13.png'); ?></div>
                  <div class="newsletter-builder-area-center-frame-buttons-content-tab" data-type="content" data-id="14"><?php echo $this->Html->image('sim/_row_thumbs/sim-row-thumb_14.png'); ?></div>
                  <div class="newsletter-builder-area-center-frame-buttons-content-tab" data-type="content" data-id="15"><?php echo $this->Html->image('sim/_row_thumbs/sim-row-thumb_15.png'); ?></div>
                  <div class="newsletter-builder-area-center-frame-buttons-content-tab" data-type="footer" data-id="16"><?php echo $this->Html->image('sim/_row_thumbs/sim-row-thumb_16.png'); ?></div>
                  <div class="newsletter-builder-area-center-frame-buttons-content-tab" data-type="footer" data-id="17"><?php echo $this->Html->image('sim/_row_thumbs/sim-row-thumb_17.png'); ?></div>
                  <div class="newsletter-builder-area-center-frame-buttons-content-tab" data-type="footer" data-id="18"><?php echo $this->Html->image('sim/_row_thumbs/sim-row-thumb_18.png'); ?></div>
                  
            </div>
          </div>      
        </div>
        <div id="newsletter-builder-area-center-frame-buttons-reset"><i class="icon-reload-CCW"></i>&nbsp;&nbsp;Reset</div>
      </div>
          
      <div id="newsletter-builder-area-center-frame-content">
      

 
      </div>
      </div>
      
    </div>
   
  </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        console.log('xxxxxxxxxxxxxxxxxxxxxxxx');
        $('#newsletter-builder-area-center-frame-buttons-reset').click(function() {
           $("#htmlDesign").load("<?php echo sprintf("%s", $urlComposeMessage); ?>");
        });
        
        $('.saveHtml').click(function(){
            console.log("lalalalalala");
            $("#newsletter-preloaded-export").html($("#newsletter-builder-area-center-frame-content").html());
            $("#newsletter-preloaded-export .sim-row-delete").remove();
            $("#newsletter-preloaded-export .sim-row").removeClass("ui-draggable");
            $("#newsletter-preloaded-export .sim-row-edit").removeAttr("data-type");
            $("#newsletter-preloaded-export .sim-row-edit").removeClass("sim-row-edit");

            var preload_export_html = $("#newsletter-preloaded-export").html();

            $.ajax({
              url: "../css/sim/newsletter.css"
            }).done(function(data) {
                var export_content = '<head><style type="text/css">'+data+'</style><link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic" rel="stylesheet" type="text/css"><link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"></head><body><div id="sim-wrapper"><div id="sim-wrapper-newsletter">'+preload_export_html+'</div></div><\/body>';
                console.log(export_content);
                $("#html").val(export_content);
                $("#divComposerHtml").modal('hide');
            });
        });        
    });
</script>