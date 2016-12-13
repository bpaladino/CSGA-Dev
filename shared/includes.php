<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
     
    $document = JFactory::getDocument();
    $url =  JUri::base() . 'templates/shared/css/style.css';
    $document->addStyleSheet($url);
    $url =  JUri::base() . 'templates/shared/css/idangerous.swiper.css';
    $document->addStyleSheet($url);
    $url =  'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css';
    $document->addStyleSheet($url);
    $url = 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js';
    $document->addScript($url);
    $url = JUri::base() . 'templates/shared/js/global.js';
    $document->addScript($url);;
    $url = JUri::base() . 'templates/shared/js/idangerous.swiper.min.js';
    $document->addScript($url);
    $url = 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css';
    $document->addStyleSheet($url);
?>
    <!-- FONTS -->

    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet" type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700">