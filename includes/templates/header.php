<?php

if(isset($page_var)) {
  $page_info['title']  = $site_config['website_name'] . ' - ' . $page_var['title'];
  $page_info['description'] = $page_var['description'];
  $page_info['url'] = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  $page_info['image'] = $site_config['website_url'] . '/assets/img/' . $page_var['img'];
} else {
  $page_info['title']  = $site_config['default_title'];
  $page_info['description'] = $site_config['default_description'];
  $page_info['url'] = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  $page_info['image'] = $site_config['website_url'] . '/assets/img/' . $site_config['default_image'];
}

 ?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $page_info['title']; ?></title>
    <meta name="description" content="<?php echo $page_info['description']; ?>">
    <!-- Opengraph Tags -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $page_info['title']; ?>" />
    <meta property="og:description" content="<?php echo $page_info['description']; ?>" />
    <meta property="og:url" content="<?php echo $page_info['url']; ?>" />
    <meta property="og:image" content="<?php echo $page_info['image']; ?>" />
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="<?php echo $page_info['title']; ?>" />
    <meta name="twitter:description" content="<?php echo $page_info['description']; ?>" />
    <meta property="twitter:url" content="<?php echo $page_info['url']; ?>" />
    <meta property="twitter:image" content="<?php echo $page_info['image']; ?>" />
    <!-- Google Site Verification Tag -->
    <meta name="google-site-verification" content="<?php echo $google['webmaster_tools']; ?>" />
    <!-- Images -->
    <link rel="icon" href="<?php echo $site_config['website_url']; ?>/assets/img/favicon.png" />
    <!-- External CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Caption" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo $site_config['website_url']; ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo $site_config['website_url']; ?>/assets/css/ember.css?v=<?php echo time(); ?>" rel="stylesheet">
    <!-- Google Analytics -->

</head>

<body>
<a href="https://codecanyon.net/item/bitcoin-faucet-list/20435722?ref=emberthemes"><div class="buy-notification">Buy this Faucet List script on CodeCanyon for just $16!</div></a>
<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="<?php echo $site_config['website_url']; ?>/assets/img/logo.png" alt="logo" /></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
                  <ul class="nav navbar-nav"></ul>
        <form class="navbar-form navbar-right">
                          <a href="bitcoin:<?php echo $ref['BTC']; ?>" class="btn btn-value">Donate Bitcoin</a>
                       </form>
                </div>
      </div>
    </nav>
