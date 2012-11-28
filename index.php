<?php
//no direct access
defined('_JEXEC') or die ( 'Restricted access' );?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ;?>/templates/system/css/system.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ;?>/templates/system/css/general.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/css/template.css" type="text/css" />
		<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery-1.6.4.min.js"></script>
        <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/stepcarousel.js"></script>
        <script type="text/javascript" src="http://userapi.com/js/api/openapi.js?34"></script>
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/googlemap.js"></script>
        <script type="text/javascript">
		var media_slider_gallery = {
                galleryid: 'media_slider',
                beltclass: 'content',
                panelclass: 'slide',
                autostep: {enable:false, moveby:1, pause:5000},
                panelbehavior: {speed:500, wraparound:true, wrapbehavior:'pushpull|slide', persist:true},
                defaultbuttons: {enable: false, moveby: 1, leftnav: ['images/slide_btn.png.png', -5, 80], rightnav: ['images/slide_btn.png.png', -20, 80]},
                statusvars: ['statusA', 'statusB', 'statusC'],
                contenttype: ['inline']
            };
            stepcarousel.setup(media_slider_gallery);

            var features_gallery = {
                galleryid: 'features',
                beltclass: 'content',
                panelclass: 'slide',
                autostep: {enable:true, moveby:1, pause:5000},
                panelbehavior: {speed:500, wraparound:true, wrapbehavior:'pushpull|slide', persist:true},
                defaultbuttons: {enable: false, moveby: 1, leftnav: ['images/slide_btn.png.png', -5, 80], rightnav: ['images/slide_btn.png.png', -20, 80]},
                statusvars: ['statusA', 'statusB', 'statusC'],
                contenttype: ['inline']
            };
            stepcarousel.setup(features_gallery);

        </script>
	
	</head>

	<body  <?php
            if ( JURI::current() != JURI::base() ) { echo 'class="inner"'; }
            if ( JURI::current() == JURI::base()."contacts.html" ) { echo 'onload="initialize()"'; }
        ?>
	>
    <div id="wrap">
		<div id="header">

            <div><a class="logo" href="<?php echo $this->baseurl ?>">GeekHub</a></div>
			<jdoc:include type="modules" name="top" />
			
        
			<ul class="links">
				<li class="fb"><a href="http://www.facebook.com/pages/GeekHub/158983477520070">facebook</a></li>
				<li class="vk"><a href="http://vkontakte.ru/geekhub">Вконтакте</a></li>
				<li class="tw"><a href="http://twitter.com/#!/geek_hub">twitter</a></li>
				<li class="yb"><a href="http://www.youtube.com/user/GeekHubchannel">youtube</a></li>
				<li class="v"><a href="http://vimeo.com/user8452244">vimeo</a></li>
			</ul>
			
			<span class="line"></span>
			<div class="splash"><jdoc:include type="modules" name="home"/>	
			</div>
		</div><!-- header -->
	
	<div id="content">
		<div class="<?php $currentMenu = JSite::getMenu()->getActive(); echo $currentMenu->alias; ?>">
			<jdoc:include type="message" />
			<jdoc:include type="component" />
			
			<jdoc:include type="modules" name="home-bottom" />
        </div>
		
	</div><!-- content -->
   
   <ul id="footer">
        <li>
            <div class="top">
					<jdoc:include type="modules" name="top" style="xhtml" />
            </div>
        </li>
        <li>© Copyright <?php echo date('Y'); ?></li>
    </ul>
</div>
</body>
</html>
