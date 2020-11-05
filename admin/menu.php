<?
IncludeModuleLangFile(__FILE__);

CModule::IncludeModule("fileman");
CMedialib::Init();

if( CMedialib::CanDoOperation('medialib_edit_collection', 0) )
{
    CModule::IncludeModule('kit.gallery');
    $aMenu = array(
		"parent_menu" => "global_menu_services",
		"section" => "kit.gallery",
		"sort" => 500,
		"module_id" => "kit.gallery",
		"text" => GetMessage("KIT_GALLERY_MENU_MAIN"),
		"title" => GetMessage("KIT_GALLERY_MENU_MAIN"),
		"url" => "kit_gallery_index_admin.php?lang=".LANG,
		"icon"=>"kit_gallery_menu_icon",
		"items_id" => "menu_kit_gallery",
		"more_url" => array(
		    "kit_gallery_index_admin.php",
		    "kit_gallery_section_admin.php",
		    "kit_gallery_album_admin.php",
		),
		"items" => array()
    );
	return $aMenu;
}
return false;
?>
