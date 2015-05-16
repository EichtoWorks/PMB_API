<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html><head>
    <title><?php #echo $template['title']; ?>PMB API - Test Query</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src="<?php echo BASE_URL . THEME_PATH;?>/css/ie/html5shiv.js"></script><![endif]-->
    <script type="text/javascript">
		var THEME_PATH = '<?php echo BASE_URL . THEME_PATH.'/';?>';
	</script>
    <script src="<?php echo BASE_URL . THEME_PATH;?>/js/jquery.min.js"></script>
    <script src="<?php echo BASE_URL . THEME_PATH;?>/js/jquery.dropotron.min.js"></script>
    <script src="<?php echo BASE_URL . THEME_PATH;?>/js/jquery.scrollgress.min.js"></script>
    <script src="<?php echo BASE_URL . THEME_PATH;?>/js/skel.min.js"></script>
    <script src="<?php echo BASE_URL . THEME_PATH;?>/js/skel-layers.min.js"></script>
    <script src="<?php echo BASE_URL . THEME_PATH;?>/js/init.js"></script>
    <script src="<?php echo BASE_URL . THEME_PATH;?>/js/run_prettify.js"></script>
    <script src="<?php echo BASE_URL . THEME_PATH;?>/js/prettify.js"></script>
    <noscript>
        <link rel="stylesheet" href="<?php echo BASE_URL . THEME_PATH;?>/css/skel.css" />
        <link rel="stylesheet" href="<?php echo BASE_URL . THEME_PATH;?>/css/style.css" />
        <link rel="stylesheet" href="<?php echo BASE_URL . THEME_PATH;?>/css/style-wide.css" />
    </noscript>
    <!--[if lte IE 8]><link rel="stylesheet" href="<?php echo BASE_URL . THEME_PATH;?>/css/ie/v8.css" /><![endif]-->
    
    <link rel="stylesheet" href="<?php echo BASE_URL . THEME_PATH;?>/css/prettify.css" />

    <?php echo $template['metadata']; ?>
    
</head>
<body>

<!-- Header -->
<header id="header">
    <h1><a href="index.html">PMB Query</a></h1>
    <nav id="nav">
    	<?php echo $this->template->load_view('partials/navigations'); ?>
    </nav>
</header>