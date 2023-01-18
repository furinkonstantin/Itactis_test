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
<? if (!empty($arResult["ITEMS"])):?>
    <? foreach($arResult["ITEMS"] as $arItem):?>
        <div class="review-block">
            <div class="review-text">
            
                <div class="review-block-title"><span class="review-block-name"><a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=$arItem['NAME']?></a></span><span class="review-block-description"><?=$arItem['PROPERTIES']['WORK_POSITION']['VALUE']?> <?=$arItem['PROPERTIES']['COMPANY_NAME']['VALUE'] ? $arItem['PROPERTIES']['COMPANY_NAME']['VALUE'] : ''?></span></div>
                
                <div class="review-text-cont">
                    <?=$arItem['PREVIEW_TEXT']?>
                </div>
            </div>
            <? if ($arItem['PREVIEW_PICTURE']['SRC']):?>
                <div class="review-img-wrap"><a href="<?=$arItem['DETAIL_PAGE_URL']?>"><img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['NAME']?>"></a></div>
            <? endif;?>
        </div>
    <? endforeach;?>
    <?=$arResult["NAV_STRING"]?>
<? else:?>
    <p>Отзывы не найдены</p>
<? endif;?>