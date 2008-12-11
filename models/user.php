<?php  
class User extends AppModel 
{ 
    var $name = 'User'; 
	var $belongsTo = 'Group';
	     
    function validateLogin($data) 
    { 
        $user = $this->find(array('username' => $data['username'], 'password' => md5($data['password'])), array('id', 'username')); 
        if(empty($user) == false) 
            return $user['User']; 
        return false; 
    } 
    



	function saveTempPassword($email){
			$this->id = $this->field('id', array('User.email' => $email));
			$this->data['User']['temppassword'] = $this->__genpassword();
			$this->data['User']['email_token'] = $this->__generateToken();
			$sixtyMins = time() + 43000;
			$this->data['User']['email_token_expires'] = date('Y-m-d H:i:s', $sixtyMins);
			if($this->save($this->data)){
				return true;
			} else {
				return false;
			}
		}

		function validateToken($id = null, $reset = false) {
			$this->recursive = '-1';
			$match = $this->find(array('User.email_token' => $id), 'id, username, email, temppassword, email_token_expires');
			if(!empty($match)){
				$expires = strtotime($match['User']['email_token_expires']);
				if($expires > time()){
					$data['User']['id'] = $match['User']['id'];
					$data['User']['username'] = $match['User']['username'];
					$data['User']['email'] = $match['User']['email'];
					$data['User']['email_authenticated'] = '1';

					if($reset === true) {
						$data['User']['password'] = $match['User']['temppassword'];
						$data['User']['temppassword'] = null;
					}
					$data['User']['email_token'] = null;
					$data['User']['email_token_expires'] = null;
				}
				return $data;
			}
			return false;
		}

		/* Private Methods */
		function __password($compareTo, $password, $check = true){
			$security = Security::getInstance();
			$salt = Configure::read('Security.salt');
			if($check === true){
				if($security->hash($salt . $password) === $compareTo){
					return true;
				} else {
					return false;
				}
			} else {
				$genPassword = $security->hash($salt . $password);
				return $genPassword;
			}
		}

		function __genpassword($length = 10) {
			srand((double)microtime()*1000000);
			$password = '';
			$vowels = array("a", "e", "i", "o", "u");
			$cons = array("b", "c", "d", "g", "h", "j", "k", "l", "m", "n", "p", "r", "s", "t", "u", "v", "w", "tr",
								"cr", "br", "fr", "th", "dr", "ch", "ph", "wr", "st", "sp", "sw", "pr", "sl", "cl");
			for($i = 0; $i < $length; $i++){
				$password .= $cons[mt_rand(0, 31)] . $vowels[mt_rand(0, 4)];
			}
			return substr($password, 0, $length);
		}

		function __generateToken() {
			$possible = "0123456789abcdfghijklmnopqrstvwxyz";
			$id = "";
			$i = 0;
			while ($i < 20) {
				$char = substr($possible, mt_rand(0, strlen($possible)-1), 1);
				if (!strstr($id, $char)) {
					$id .= $char;
					$i++;
				}
			}
			return $id;
		}
} 
?>