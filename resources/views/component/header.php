<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=G-H0Z3HSZXBH"></script>
   <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('set', {cookie_flags: 'SameSite=None;Secure'});
      gtag('config', 'G-H0Z3HSZXBH');
   </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <!-- Site Metas -->
    <title>KIP-Indonesia Financial Group</title>
    <?php
    $keywords = '';
    $description = '';
    foreach($content as $row){
      $keywords = $row->content_title;
      $description = $row->content_body;
    }  
    ?>
    <meta name="keywords" content="KIP-Indonesia Financial Group <?php echo strip_tags($keywords); ?>">
    <meta name="description" content="KIP-Indonesia Financial Group <?php echo strip_tags($description); ?>">
    <meta name="author" content="KIP-Indonesia Financial Group">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="" type="image/x-icon" />
    <link rel="apple-touch-icon" href="" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= asset('assets/css/bootstrap.min.css'); ?>" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="<?= asset('assets/css/pogo-slider.min.css'); ?>" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?= asset('assets/css/style.css'); ?>" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?= asset('assets/css/responsive.css'); ?>" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= asset('assets/css/custom.css'); ?>" />
    <link rel="stylesheet" href="<?= asset('assets/css/slider_multi.css'); ?>" />
     
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>