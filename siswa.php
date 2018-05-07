<?php 
class login{
		protected $user ;
		protected $pass ;
		
		public function __construct($user,$pass)
        {
			$this->username = $user;
			$this->pass = $pass;
		}
		
		public function siswa(){
            if($this->username == "siswa" && $this->pass  == siswa)
			{
				header("location:menu.php");
			}
			else{
				header("location:loginsiswa.php");
			}
		}
	}	
?>