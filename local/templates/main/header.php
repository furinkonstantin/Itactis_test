<?php

    if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
    
    CUtil::InitJSCore();
    CJSCore::Init(['jquery2']);
    IncludeTemplateLangFile(__DIR__ . "/header.php");

    use Bitrix\Main\Page\Asset;
    
?>
<!DOCTYPE HTML>
<html lang="<?= LANGUAGE_ID ?>">
<head>
	<meta charset="<?=LANG_CHARSET?>">
	<title><? $APPLICATION->ShowTitle(); ?></title>
    <?
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/template_style.css");
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-1.8.2.min.js");
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/functions.js");
        $APPLICATION->ShowHead();
    ?>
	<!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->
</head>
<body>
    <div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
	<div class="wrap">
		<div class="hd_header_area">
			<div class="hd_header">
				<table>
					<tr>
						<td rowspan="2" class="hd_companyname">
							<h1><a href="">Мебельный магазин</a></h1>
						</td>
						<td rowspan="2" class="hd_txarea">
							<span class="tel">8 (495) 212-85-06</span>	<br/>	
							время работы <span class="workhours">ежедневно с 9-00 до 18-00</span>						
						</td>
						<td style="width:232px">
							<form action="">
								<div class="hd_search_form" style="float:right;">
									<input placeholder="Поиск" type="text"/>
									<input type="submit" value=""/>
								</div>
							</form>
						</td>
					</tr>
					<tr>
						<td style="padding-top: 11px;">
                            <?$APPLICATION->IncludeComponent("bitrix:system.auth.form","auth",Array(
                                 "REGISTER_URL" => "/registration/",
                                 "FORGOT_PASSWORD_URL" => "",
                                 "PROFILE_URL" => "/user/",
                                 "SHOW_ERRORS" => "Y" 
                                 )
                            );?>
						</td>
					</tr>
				</table>
				<div class="nv_topnav">
					<ul>
						<li><a href="<?=SITE_DIR?>"   class="menu-img-fon"  style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images//nv_home.png);" ><span></span></a></li>
                        <?
                            $APPLICATION->IncludeComponent("bitrix:menu", "top", array(
                                    "ROOT_MENU_TYPE" => "top",
                                    "CHILD_MENU_TYPE" => "top_child", 
                                    "MENU_CACHE_TYPE" => "A",
                                    "MENU_CACHE_TIME" => "36000000",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "MENU_CACHE_GET_VARS" => array(),
                                    "MAX_LEVEL" => "3",
                                    "USE_EXT" => "N",
                                    "ALLOW_MULTI_SELECT" => "Y"
                                )
                            );
                        ?>
						<div class="clearboth"></div>
					</ul>
				</div>
			</div>
		</div>
		<!--- // end header area --->
        <? if ($APPLICATION->GetCurPage(false) !== SITE_DIR):?>
            <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "main", array(
                    "START_FROM" => "0",
                    "PATH" => "",
                    "SITE_ID" => SITE_ID
                ),
                false,
                Array('HIDE_ICONS' => 'Y')
            );?>
        <? endif;?>
		<div class="main_container page">
            <div class="mn_container">
            <div class="mn_content">
                <div class="main_post">
                    <? if ($APPLICATION->GetCurPage(false) !== SITE_DIR):?>
                        <div class="main_title">
                            <h1><? $APPLICATION->ShowTitle(false); ?></h1>
                        </div>
                    <? endif;?>