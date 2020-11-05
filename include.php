<?
global $DB, $MESS, $APPLICATION;

CModule::IncludeModule("fileman");
CMedialib::Init();

CModule::AddAutoloadClasses("kit.gallery", array(
	"CKitGallerySection" => "classes/general/kit_gallery.php",
	"CKitGalleryImage" => "classes/general/kit_gallery.php",
	"CKitGalleryUtils" => "classes/general/kit_gallery.php",
));

// JavaScript with lang-files
CJSCore::RegisterExt('kit_gallery_sections', array(
    'js' => '/bitrix/js/kit.gallery/sections.js',
    'lang' => '/bitrix/modules/kit.gallery/lang/'.LANGUAGE_ID.'/sections_js.php',
    'rel' => array('admin_interface')
));
CJSCore::RegisterExt('kit_gallery_image_upload_handler', array(
    'js' => '/bitrix/js/kit.gallery/image_upload_handler.js',
    'lang' => '/bitrix/modules/kit.gallery/lang/'.LANGUAGE_ID.'/image_upload_handler_js.php',
    'rel' => array('admin_interface')
));
?>
