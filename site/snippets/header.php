<!doctype html>
<html itemscope itemtype="http://schema.org/">
<head>
<meta charset="utf-8" />
<title><?php echo html($page->title()) ?> | <?php echo html($site->title()) ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta http-equiv="content-language" content="en" />
<meta http-equiv="imagetoolbar" content="no" />

<!-- Please support http://humanstxt.org/ -->
<link type="text/plain" rel="author" href="<?php echo url('humans.txt') ?>" />

<!-- Feed -->
<link rel="alternate" type="application/rss+xml" href="<?php echo url('feed') ?>" title="Feed | <?php echo html($site->title()) ?>" />

<link rel="canonical" href="<?php echo html($page->url()) ?>" />  

<meta name="title" content="<?php echo html($page->title()) ?> | <?php echo html($site->title()) ?>" />
<meta name="author" content="<?php echo html($site->author()) ?>" />
<meta name="publisher" content="<?php echo html($site->author()) ?>" />
<meta name="copyright" content="<?php echo html($site->author()) ?>" />
<meta name="description" content="<?php echo html($page->description()) ?>" />
<meta name="robots" content="index,follow" />
<meta name="DC.Title" content="<?php echo html($page->title()) ?> | <?php echo html($site->title()) ?>" />
<meta name="DC.Creator" content="<?php echo html($site->author()) ?>" />
<meta name="DC.Rights" content="<?php echo html($site->author()) ?>" />
<meta name="DC.Publisher" content="<?php echo html($site->author()) ?>" />
<meta name="DC.Description" content="<?php echo html($page->description()) ?>"/ >
<meta name="DC.Language" content="en" />

<meta property="og:title" content="<?php echo html($page->title()) ?> | <?php echo html($site->title()) ?>" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo html($site->url()) ?>" />
<meta property="og:image" content="<?php echo url('assets/images/facebook/facebook-icon-646x1027.jpg') ?>" />
<meta property="og:description" content="<?php echo html($page->description()) ?>" />

<meta itemprop="name" content="<?php echo html($page->title()) ?> | <?php echo html($site->title()) ?>">
<meta itemprop="description" content="<?php echo html($page->description()) ?>">

<!-- Styles -->
<link rel="stylesheet" href="<?php echo url('assets/css/base.css') ?>" type="text/css" media="all" />
<!--[if lt IE 9 ]><link rel="stylesheet" href="<?php echo url('assets/css/720_grid.css') ?>" type="text/css"><![endif]-->
<link rel="stylesheet" href="<?php echo url('assets/css/720_grid.css') ?>" type="text/css" media="screen and (min-width: 720px)" />
<link rel="stylesheet" href="<?php echo url('assets/css/986_grid.css') ?>" type="text/css" media="screen and (min-width: 986px)" />
<link rel="stylesheet" href="<?php echo url('assets/css/1236_grid.css') ?>" media="screen and (min-width: 1236px)" />

<!--Google Webfonts-->
<link href='http://fonts.googleapis.com/css?family=Arvo:700,400italic,700italic,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:900' rel='stylesheet' type='text/css'>

<!-- Favicons -->
<link rel="shortcut icon" href="<?php echo url('assets/images/icons/favicon.ico') ?>" />
<link rel="apple-touch-icon" href="<?php echo url('assets/images/icons/icons/iOS/apple-touch-icon-72x72.png') ?>" />
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo url('assets/images/icons/iOS/apple-touch-icon-72x72.png') ?>" />
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo url('assets/images/icons/iOS/apple-touch-icon-114x114.png') ?>" />

</head>
<body>