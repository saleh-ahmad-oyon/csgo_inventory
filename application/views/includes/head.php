<head>
    <?php
    $meta = array(
        array('name' => 'robots', 'content' => 'no-cache'),
        array('name'=> 'description', 'content' => 'Lonely Inventory is a test project. It is a showcase of a man named saleh ahmad\'s CSGO inventory items. You can visit to watch his collection.'),
        array('name'=> 'keywords', 'content' => 'Lonely,nissongo,L0onely,ni$$ongo,csgo,csgo inventory items,nice items of csgo,cool items of csgo'),
        array('name'=> 'viewport', 'content' => 'width=device-width, initial-scale=1'),
        array('name'=> 'language', 'content' => 'English'),
        array('name'=> 'country', 'content' => 'Bangladesh'),
        array('name'=> 'Title', 'content' => 'Lonely Inventory Items'),
        array('name'=> 'Owner', 'content' => 'L0onely'),
        array('name'=> 'Copyright', 'content' => '2015 Lonely Inventory all rights reserved'),
        array('name'=> 'Author', 'content' => 'Saleh Ahmad'),
        array('name'=> 'viewport', 'content' => 'width=device-width, initial-scale=1'),
        array('name'=> 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv'),
        array('name'=> 'X-UA-Compatible', 'content' => 'IE=edge', 'type' => 'equiv')
    );
    echo meta($meta);

        echo link_tag('https://fonts.googleapis.com/css?family=Courgette'),
         link_tag(base_url('assets/css/font-awesome-4.4.0/css/font-awesome.css')),
         link_tag(base_url('assets/css/bootstrap-3.3.5-dist/css/bootstrap.css')),
         link_tag(base_url('assets/css/custom.php')),
         link_tag(base_url('assets/css/nav.css')),
         link_tag(base_url('assets/css/signup.php')),
         link_tag(base_url('assets/css/slide.css')),
         link_tag(base_url('assets/css/Font/font.css'));
    ?>
	<link href="<?php echo base_url('assets/images/title.png') ; ?>" rel="shortcut icon">
	﻿<title><?php echo $title; ?></title>
</head>