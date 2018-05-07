<?php 
class login{
		protected $user ;
		protected $pass ;
		
		public function __construct($user,$pass)
        {
			$this->id = $id;
			$this->pass = $pass;
		}
		
		public function Irul(){
            if($this->id == "id1" && $this->pass  == 0001)
			{
				header("location:menuA.php");
			}
			else{
				header("location:indeex.php");
			}
		}
		
		public function Inung(){
            if($this->id == "id2" && $this->pass  == 0002)
			{
				header("location:menuA.php");
			}
			else{
				header("location:indeex.php");
			}
		}
		public function Mekel(){
            if($this->id == "id3" && $this->pass  == 0003)
			{
				header("location:menuA.php");
			}
			else{
				header("location:indeex.php");
			}
		}
		public function User(){
            if($this->id == "user" && $this->pass  == user)
			{
				header("location:menu.php");
			}
			else{
				header("location:index.php");
			}
		}
	}	
?>