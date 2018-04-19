<?php
    class User {
		public $usName;
		public $psWord;
		public $location = "";
		public $ses_name = "";
		public $errMessage = "";
		public $isFull = false;

	    public function __construct($usName, $psWord) {
		    if(isValid($usName, $psWord)) {
			    $this->usName = $usName;
			    $this->psWord = $psWord;
				$this->location = "ProtectedStuff.php";
				$this->isFull = true;
		    }
		}
		
		public function match_send() {
			if($this->isFull == true && $_POST) {
				$connect = _connect_to_mySQLi();
			    # print("Your data are successfully sent to mySQL table!");
			    # For Debuging ... 
				$query = "SELECT * FROM users 
				WHERE (username = '". $this->usName. "');";
				$data = mysqli_query($connect, $query) or die ('Warning: '. mysqli_error($connect));
				# print $query; // Test if mysqli query runs correctly
				if(mysqli_num_rows($data) == 1){
                    $row = mysqli_fetch_array($data);
					if($this->psWord == $row['password']) {
						$password = $row['username'];
                        $this->ses_name = $password;
					}
				} else {
					$this->errMessage = "Your username or password is incorrect!";
					$this->isFull = false;
				}
				mysqli_close($connect);
			}
		}
	}
	
	function find_password($username) {
		$password = "";
		$conn = _connect_to_mySQLi();
		$find_query = "SELECT * FROM users WHERE (username='" . $username . "');";
		# print $find_query; // Test if mysqli query runs correctly
		$find_result = mysqli_query($conn, $find_query) or die ('Sorry: '.mysqli_error($conn));
		if(mysqli_num_rows($find_result) == 1) {
			$row = mysqli_fetch_array($find_result);
			$password = $row['passwordHint'];
			#print $password;  // Testing if the password can be read
		}
		mysqli_close($conn);
		return $password;
	}
	
	function _connect_to_mySQLi() {
	    $content = file('/home/int322_153a19/secret/topsecret');
        $servername = trim($content[0]);
        $username = trim($content[1]);
        $password = trim($content[2]);
        $dbname = trim($content[3]);
		$link = mysqli_connect($servername, $username, $password, $dbname)
                        or die('Connection error: ' . mysqli_error($link));
		return $link;
    }
	
	function isValid($value1, $value2) {
		$valid = false;
		if($value1 != "" && $value2 != "") {
			$valid = true; 
		}
		return $valid;
	}   // Valid if both values are full
	
	function dspVisitTime() {  # For Cookies.php
        $count = 0;
        if(file_exists("count.txt"))
            $count = file_get_contents("count.txt"); 
        $count++;
        file_put_contents("count.txt", $count);
		echo $count;
	}
?>