<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Page\Asset;
global $USER, $APPLICATION;

?>
<!DOCTYPE HTML>
<html>
<head>
    <title><?php $APPLICATION->ShowTitle(); ?></title>
    <?php $APPLICATION->ShowHead(); ?>
    <?php $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/style.css'); ?>
    <!--link href="css/style.css" rel="stylesheet" type="text/css" media="all" /-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <? Asset::getInstance()->addCss('https://fonts.googleapis.com/css?family=Playball'); ?>
    <!--link href='//fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'-->
    <!--slider-->
    <?
     Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.min.js");
     Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/script.js");
    ?>
</head>
<body>
<div id="panel">
    <? $APPLICATION->ShowPanel(); ?>
</div>
<div class="header-bg">
    <div class="wrap">
        <div class="h-bg">
            <div class="total">
                <div class="header">
                    <div class="box_header_user_menu">
                        <ul class="user_menu"><li class="act first"><a href="#"><div class="button-t"><span>Shipping &amp; Returns</span></div></a></li><li class=""><a href="#"><div class="button-t"><span>Advanced Search</span></div></a></li><li class=""><a href="#"><div class="button-t"><span>Create an Account</span></div></a></li><li class="last"><a href="#"><div class="button-t"><span>Log in</span></div></a></li></ul>
                    </div>
                    <div class="header-right">
                        <ul class="follow_icon">
                            <li><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/images/icon.png" alt=""/></a></li>
                            <li><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/images/icon1.png" alt=""/></a></li>
                            <li><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/images/icon2.png" alt=""/></a></li>
                            <li><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/images/icon3.png" alt=""/></a></li>
                        </ul>
                    </div><div class="clear"></div>
                    <div class="header-bot">
                        <div class="logo">
                            <a href="index.html"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" alt=""/></a>
                        </div>
                        <div class="search">
                            <input type="text" class="textbox" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
                            <button class="gray-button"><span>Search</span></button>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="menu">
                    <div class="top-nav">
                        <ul>
                            <li class="active"><a href="index.html">Home</a></li>
                            <li><a href="<?=SITE_TEMPLATE_PATH?>/about.html">About</a></li>
                            <li><a href="<?=SITE_TEMPLATE_PATH?>/specials.html">Specials</a></li>
                            <li><a href="<?=SITE_TEMPLATE_PATH?>/new.html">New</a></li>
                            <li><a href="<?=SITE_TEMPLATE_PATH?>/contact.html">Contact</a></li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>