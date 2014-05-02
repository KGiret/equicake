<?php

	if(!empty($_GET['page']) && file_exists(_TPL_.'front/'.str_replace('.', '', $_GET['page']).'.tpl'))
	{
		$page = $_GET['page'];
	}
	else
	{
		$page = 'accueil';
	}
	$smarty->assign('dir_img',_IMGtpl_);
	$smarty->assign('dir_css',_CSS_);
	$smarty->assign('dir_js',_JS_);
	$smarty->assign('racine',_tplPATH_);
	$smarty->assign('page', $page);
?>