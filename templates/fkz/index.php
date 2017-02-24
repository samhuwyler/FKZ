<?php 
    defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" 
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
   <head>
		<jdoc:include type="head" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/style/template.css" type="text/css" />
		
       <script type="text/javascript">
       
            jQuery(window).scroll(function()
            {
                initialScroll();   
            });
            
            jQuery(document).ready(function()
            {
                jQuery('#top').on('click', function(e)
                {
                    if(!jQuery(e.target).is('a')){
                        imageView();
                    }
                    
                });
            });
                
            function initialScroll()
            {
                jQuery('#top').removeClass("virgin-view-top");
                jQuery('#container').removeClass("virgin-view-cont");
                jQuery(window).scrollTop(0);
                jQuery(window).unbind("scroll");
            }
           
            function imageView()
            {
                if(jQuery('#top').hasClass('image-view'))
                {
                    adiosImageView();
                }
                else
                {
                    jQuery('#top').addClass('image-view'); 
                    jQuery(window).scroll(function()
                    {
                        adiosImageView();

                    });

                    jQuery(".menu li a").click(function()
                    {
                       adiosImageView();
                    });
                    
                }
            }
           
            function adiosImageView()
            {
                jQuery('#top').removeClass('image-view');
                jQuery(window).unbind("scroll");
            }
           
       </script>
	</head>
	<body>

		<div id="top" class="virgin-view-top">
            <div id="title">Fotografie Kollektiv Zug</div>
		    <jdoc:include type="modules" name="top" />
        </div> 
        <div id="container" class="virgin-view-cont"><jdoc:include type="component" /></div>
		<div id="footer">Copyright by Fotografie Kollektiv Zug</div>
		
		<jdoc:include type="modules" name="bottom" />
	</body>
</html>