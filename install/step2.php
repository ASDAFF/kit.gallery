<?
if(!check_bitrix_sessid()) return;
IncludeModuleLangFile(__FILE__);

if($ex = $APPLICATION->GetException())
	echo CAdminMessage::ShowMessage(Array(
		"TYPE" => "ERROR",
		"MESSAGE" => GetMessage("MOD_INST_ERR"),
		"DETAILS" => $ex->GetString(),
		"HTML" => true,
	));
else
	echo CAdminMessage::ShowNote(GetMessage("MOD_INST_OK"));
?>

<?=BeginNote()?>
    <?=GetMessage("KIT_GALLERY_TEXT_1")?> - <a href="kit_gallery_index_admin.php?lang=<?=LANGUAGE_ID?>"><?=GetMessage("KIT_GALLERY_MODULE_NAME")?></a>
    <br>
    <?if(strlen($_REQUEST["public_dir"])>0):?>
        <?=GetMessage("KIT_GALLERY_DEMO_DIR")?>
        <br>
        <?
	    $sites = CSite::GetList($by, $order, Array("ACTIVE"=>"Y"));
	    if($site = $sites->Fetch())
	    {
		    ?>
		    <a href="<? echo htmlspecialcharsbx(
			        (strlen($site["SERVER_NAME"])? "http://".$site["SERVER_NAME"]: "").
			        "/".$_REQUEST["public_dir"]."/gallery/"
		        )?>"><?echo htmlspecialcharsbx($site["DIR"].$_REQUEST["public_dir"])?>/gallery/</a>
		    <?
	    }
	    ?>        
    <?endif;?>    
<?=EndNote()?>                                                                                                                                                                                                                                                                  

<form action="<?echo $APPLICATION->GetCurPage()?>">
	<input type="hidden" name="lang" value="<?echo LANG?>">
	<input type="submit" name="" value="<?echo GetMessage("MOD_BACK")?>">
<form>
