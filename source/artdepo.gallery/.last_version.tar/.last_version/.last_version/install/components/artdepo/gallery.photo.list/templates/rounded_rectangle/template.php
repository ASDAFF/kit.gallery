<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); ?>

<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>

<div class="gall_wr_artdepo popup-gallery" id="popup-gallery">
    <ul class="mult_gallery_tmpl1">
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $thumb = CFile::ResizeImageGet(
            $arItem["SOURCE_ID"],
            array("width" => 211, "height" => 161),
            BX_RESIZE_IMAGE_EXACT
        );
        $src = ($thumb["src"]) ? $thumb["src"] : $arItem["THUMB_PATH"];
        ?>
        <li>
            <a href="<?=$arItem["PATH"]?>" class="gall_img_link" <?if($arParams["DISPLAY_NAME"] == "Y"):?> title="<?=$arItem["NAME"]?>"<?endif;?> 
                data-gallery="" rel="gallery-1">
                <img src="<?=$src?>" <?if($arParams["DISPLAY_NAME"] == "Y"):?> title="<?=$arItem["NAME"]?>"<?endif;?> alt=""/>
            </a>
        </li>
    <?endforeach;?>
    </ul>
</div>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>

<?if($arParams["BACK_URL"]):?>
    <br /><a href="<?=$arParams["BACK_URL"]?>"><?=GetMessage("C_BACK_URL_TITLE")?></a>
<?endif;?>
