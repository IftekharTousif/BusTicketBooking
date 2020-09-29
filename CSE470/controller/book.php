<?php include('../model/conn.php');?>
<?php session_start();?>
<?php
	class ticket{
		private $id;
		private $quantity;
		private $payment;

		public function setticket($i,$q,$p){
			$this->id = $i;
			$this->quantity = $q;
			$this->payment = $p;
		}

		public function update(){
			$user = $_SESSION["name"];
			$number = $_SESSION["number"];
			$payment = $this->payment;
			$c = $this->id;
			$t = new conn();
			$q= $t->selectallbus();
			$count= mysqli_num_rows($q);
			$n=1;
			$auto = 2;
			while ($n<=$count) {
				if ($n==$c) {
					$query= $t->selectbus($n);
					$r= mysqli_fetch_array($query);
					$i= $r[8] - $this->quantity;
					$t->updateseat($this->id,$i);
					$t->updatehistory($user,$number,$payment,$r);			
					// mysqli_query($connect,$fill);
				}
				$n=$n+1;
			}		
		}
	}
	$x= new ticket();
	$x-> setticket($_GET['id'],$_POST['quantity'],$_POST['payment']);
	$x->update();
	echo '<script type="text/javascript">'; 
	echo 'alert("ticket booked");'; 
	echo 'window.location.href = "../view/dashboard.php";';
	echo '</script>';
?>