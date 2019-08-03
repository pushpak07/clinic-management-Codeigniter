<?PHP defined('BASEPATH') OR exit('No direct script access allowed');

class Hash_model extends CI_Model {

public function __construct() {
parent::__construct();
}

public $skey = "IWillNeverForgiveYouRemember2015"; // you can change it

public function safe_b64encode($string) {

$data = base64_encode($string);
$data = str_replace(array('+', '/', '='), array('-', '_', ''), $data);
return $data;
}

public function safe_b64decode($string) {
$data = str_replace(array('-', '_'), array('+', '/'), $string);
$mod4 = strlen($data) % 4;
if ($mod4) {
$data .= substr('====', $mod4);
}
return base64_decode($data);
}

public function encode($value) {
if (!$value) {
return false;
}
$text = $value;
$iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
$crypttext = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $this->skey, $text, MCRYPT_MODE_ECB, $iv);
return trim($this->safe_b64encode($crypttext));
}

public function decode($value) {
if (!$value) {
return false;
}
$crypttext = $this->safe_b64decode($value);
$iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
$decrypttext = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $this->skey, $crypttext, MCRYPT_MODE_ECB, $iv);
return trim($decrypttext);
}

public function day($day){
	if($day == 1){
		return $day = "Saturday";
	}
	elseif ($day == 2) {
		return $day = "Sunday";
	}elseif ($day == 3) {
		return $day = "Monday";
	}elseif ($day == 4) {
		return $day = "Tuesday";
	}elseif ($day == 5) {
		return $day = "Wednesday";
	}elseif ($day == 6) {
		return $day = "Thusday";
	}else {
		return $day = "Friday";
	}
}
public function day_to_de($day){
	if($day == "Sat"){
		return $day = 1;
	}
	elseif ($day == "Sun") {
		return $day = 2;
	}elseif ($day == "Man") {
		return $day = 3;
	}elseif ($day == "Tue") {
		return $day = 4;
	}elseif ($day == "Wed") {
		return $day = 5;
	}elseif ($day == "Thu") {
		return $day = 6;
	}else {
		return $day = 7;
	}
}

}