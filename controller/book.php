<?php include('../model/conn.php');?>
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
			$c = $this->id;
			$t = new conn();
			$connect = $t->connection();
			$q= mysqli_query($connect,"SELECT * FROM bus");
			$count= mysqli_num_rows($q);
			$n=1;
			while ($n<=$count) {
				if ($n==$c) {
					$query= mysqli_query($connect,"SELECT * FROM bus WHERE id=$n");
					$r= mysqli_fetch_array($query);
					$i= $r[8] - $this->quantity;
					mysqli_query($connect,"UPDATE bus SET seat_available=$i WHERE id=$this->id");
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