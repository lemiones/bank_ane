<?php

if (! defined ( 'IN_DISCUZ' )) {
	exit ( 'Access Denied' );
}
class mobileplugin_bank_ane {
	function common(){
		return;
	}

	function global_bank_ane() {
		global $_G,$article,$content,$navtitle,$wheresql,$cat;
		if (file_exists( DISCUZ_ROOT . './source/plugin/bank_ane/module/view.php' )) {
			@include 'module/view.php';
		}
		return;
	}

	
	function forumdisplay_top_mobile(){
		global $_G;
		$return = '';
			include template ( 'bank_ane:nav' );
		return $return;	
	}
	
	
	function index_top_mobile() {
		global $_G;
		$return = '';
				include template('bank_ane:nav');
		return $return;
	}

	//TODO - Insert your code here


}

class mobileplugin_bank_ane_forum extends mobileplugin_bank_ane {

}

?>
