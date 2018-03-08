<?php
	class login{
		protected $user ;
		protected $pass ;
		
		public function __construct($user,$pass){
			$this->username = $user;
			$this->pass = $pass;
		}
		
		public function petugas(){
		if($this->username == "irul" && $this->pass == 0001)
			{
				header("location:menuA.php");
			}
		else if($this->username == "inung" && $this->pass == 0002)
			{
				header("location:menuA.php");
			}
		else if($this->username == "mex" && $this->pass == 0003)
			{
				header("location:menuA.php");
			}
		}
	}
?>