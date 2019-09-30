<?php
	class AllPurpose{
		
		public function sanitizeInput($input){
			$input=trim($input);
			$input=strip_tags($input);
			$input=stripslashes($input);
			$input=htmlentities($input);
			return $input;
		}

		public function redirect($url){
		    header('Location: '.$url);
		    exit();
		}

		public static function generateRandomHash($length)
		{
			return strtoupper(substr(md5(uniqid(rand())), 0, (-32 + $length)));
		}	

	}
?>