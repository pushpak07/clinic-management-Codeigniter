<?php
    class Smsgateway
    {
        public function send($config = [])
        {            
            //$config['to'] = $this->validMobile($config['to']);
            //if (sizeof($config) < 6) exit('Sms Gateway configuration missing'); 
           
            switch (strtolower($config['apiProvider'])) {

                case 'nexmo':
                        return $this->nexmo(@$config);
                    break; 
                 case 'clickatell':
                        return $this->send_clickatell_message($config);
                    break;
                                       
                default:
                        return json_encode(['exception' => 'No api found']);
                    break;
            }
        } 


        #--------------------------------------
        # For nexmo provider
        public function nexmo($config = [])
        {   
            @$url = "https://rest.nexmo.com/sms/json?api_key=".urlencode($config['username'])."&api_secret=".urlencode($config['password'])."&to=".urlencode($config['to'])."&from=".urlencode($config['from'])."&text=".urlencode($config['message'])."";                       
            $data = file_get_contents(@$url);
            return $data; 
        }

        #--------------------------------------------       
        public function send_clickatell_message($config = [])
        {
            $url = "HTTP/S://platform.clickatell.com/messages/http/send?apiKey=".urlencode($config['username'])."==&to=".urlencode($config['to'])."&content=".urlencode($config['message'])."&from=".urlencode($config['from'])."";
            $result = $this->_do_api_call($url); 
            return $result;    
        }


        private function _do_api_call($url)
        {
            $result = file($url);      
            return $result;
        }
        #---------------------------------------

        private $operator = array('11','12','13','14','15','16','17','18','19'); 

        public function validMobile($mobile = null)
        {    
           $mobile = trim($mobile); 
            if ($this->checkValidMobileOperator($mobile) != false) { 
                $countryCode = substr($mobile, 0, 2);
                if (in_array($countryCode, $this->operator)) {
                    $newMobileNo = substr_replace($mobile,"880",0,0);
                } elseif ($countryCode == "01") {
                    $newMobileNo = substr_replace($mobile,"88",0,0);
                } elseif ($countryCode == "80") {
                    $newMobileNo = substr_replace($mobile,"8",0,0);
                } elseif ($countryCode == "+8") {
                    $newMobileNo = substr_replace($mobile,"",0,1);
                } else {
                    $newMobileNo = $mobile;
                } 
                return $newMobileNo; 
            }
        }


        protected function checkValidMobileOperator($mobile = null)
        {
            if(10 <= strlen($mobile) && strlen($mobile) <= 15){

                if(strlen($mobile) == 10){ /*for 10 digits*/
                    return in_array(substr($mobile,0,2), $this->operator);
                } elseif (strlen($mobile) == 11) { /*for 11 digits*/
                    return in_array(substr($mobile,1,2), $this->operator);
                } elseif (strlen($mobile) == 12) { /*for 12 digits*/ 
                    return in_array(substr($mobile,2,2), $this->operator);
                } elseif(strlen($mobile) == 13){ /*for 13 digits*/  
                    return in_array(substr($mobile,3,2), $this->operator);
                } elseif(strlen($mobile) == 14){ /*for 14 digits*/ 
                    return in_array(substr($mobile,4,2), $this->operator);
                } elseif(strlen($mobile) == 15){ /*for 15 digits*/
                    return in_array(substr($mobile,5,2), $this->operator);
                }

            } else {
                return false;
            }
        } 


        public function template($config = null)
        {
            $newStr = $config['message'];
            foreach ($config as $key => $value) {
                $newStr = str_replace("%$key%", $value, $newStr);
            } 
            return $newStr; 
        }

    } 
