<?php
	//require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
	class sopdu{
		public function getSiteData(){
			require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
			$rsSites = CSite::GetByID(SITE_ID);
			return $rsSites->Fetch();
		}
		public function phone($path){
			$phone = file_get_contents($path);
			$result = preg_replace('/[^0-9]/', '', $phone);
			return 'tel:'.$result;
		}
	}
	$sopdu = new sopdu();
?>
