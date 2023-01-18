<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="main_post">
    <div class="main_title">
        <h1><?=$arResult['PROPERTIES']['WORK_POSITION']['VALUE']?> <?=$arResult['PROPERTIES']['COMPANY_NAME']['VALUE'] ? $arResult['PROPERTIES']['COMPANY_NAME']['VALUE'] : ''?></h1>
    </div>
    <!-- workarea -->

    <div class="review-block">
        <div class="review-text">
            <? if ($arResult['DETAIL_TEXT']):?>
                <div class="review-text-cont">
                    <?=$arResult['DETAIL_TEXT']?>
                </div>
            <? endif;?>
            <div style="float: right; font-style: italic;">
                <?=$arResult['NAME']?>
            </div>
        </div>
        <? if ($arResult['DETAIL_PICTURE']['SRC']):?>
            <div style="clear: both;" class="review-img-wrap"><img src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" alt="<?=$arResult['NAME']?>"></div>
        <? endif;?>
    </div>
    <a href="<?=$arResult['LIST_PAGE_URL']?>" class="ps_backnewslist"> &larr; К списку отзывов</a>




    <!-- workarea -->
</div>