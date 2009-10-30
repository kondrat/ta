<?php echo $html->doctype('xhtml-strict') ?>
<html lang="en">
<head>
    <?php echo $html->charset(); ?>
    
    <title><?php echo $title_for_layout; ?></title>
    
    <meta name="description" content="" />
    
    <link rel="icon" href="<?php echo $this->webroot;?>favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="<?php echo $this->webroot;?>favicon.ico" type="image/x-icon" />
    
    <?php echo $html->css('login'); ?>
    
</head>
<body>

<div id="wrap">

    <div id="header">
        <h1 id="site-title">
            <?php echo $html->link($html->image("logoTa.jpg", array("alt" => "Brownies")),'/',null, null, false) ?>
        </h1>
    </div>
    
    <div id="login">
    	<?php $session->flash(); ?>
        <?php echo $content_for_layout; ?>
    </div>
    
    <div id="push"></div>
</div>
    
<p id="footer">
    <?php echo $html->link('Powered by TA', array('controller' => 'pages', 'action' => 'about')) ?> &bull; 
    <?php echo $html->link('Icons by TA', 'http://dryicons.com') ?>
</p>

</body>
</html>
