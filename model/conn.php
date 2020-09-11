<?php  class conn{
		private $c;
		public function connection(){
			$c = mysqli_connect("localhost","root","","bus_list");
			return $c;
		}
	}
?>