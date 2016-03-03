<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/utility.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.bxslider.css">

    <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
    <?php
    	wp_deregister_script('jquery');
    	wp_enqueue_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js', array(), '1.7.1');
 	?>
    <?php wp_head(); ?>

    <!-- js -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/response.js"></script>
	<!-- js -->
</head>
<body>

<div id="header" class="header">
	<div class="header_inner u-cf">
		<h1><a href="<?php echo home_url('/'); ?>" class="header_logo"><img src="<?php echo get_template_directory_uri(); ?>/images/header_logo.png" width="100%" height="auto"></a></h1>
		<ul class="header_inner_sns_wrap u-cf">
			<li><a href="https://www.facebook.com/kimagurecloud/?fref=ts" class="header_inner_sns_wrap_item btn03" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="" width="100%" height="auto"></a></li>
			<li><a href="" class="header_inner_sns_wrap_item btn03"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="" width="100%" height="auto"></a></li>
		</ul>
	</div>
	<div class="header_gnav u-cf">
		<ul class="header_gnav_inner u-cf">
			<li><a href="<?php echo home_url('/'); ?>" class="header_gnav_inner_link">トップ</a></li>
			<li><a href="<?php echo home_url('/'); ?>/access/" class="header_gnav_inner_link">アクセス</a></li>
			<li><a href="<?php echo home_url('/'); ?>/menu/" class="header_gnav_inner_link">メニュー</a></li>
			<li><a href="<?php echo home_url('/'); ?>/contact/" class="header_gnav_inner_link">ご予約・お問合せ</a></li>
		</ul>
	</div>
</div>