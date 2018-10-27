<?php 
class oop
{
	
	private $user;
	private $pass;
	private $email;
	private $que;
	private $connn;

	private $nd;
	private $nb;
	private $ni;
	private $cls;
	private $hb;
	private $gr;
	private $t;
	private $id;
	private $id2;

	function tambah1($user1,$pass2,$repas3,$email4)
	{
		
	include 'koneksi.php';
		
		if (!is_numeric($user1)) {
			$this->user = $user1;
		}
		if ($pass2==$repas3|| strlen($pass2)<=6) {
			$this->pass = $pass2;
		}else{
			echo "Pass anda tidak sama dengan yang sebelumnya";
		}
		if (preg_match("/@/",$email4)&&preg_match("/.com/",$email4)||preg_match("/.co.id/",$_POST['email'])) {
			$this->email = $email4;
		}
		if (isset($this->user)&&isset($this->pass)&&isset($this->email)) {
			$this->connn = $conn;
			$this->que = mysqli_query($this->connn,"INSERT INTO user(id, name, email, pass) VALUES ('','$this->user','$this->email','$this->pass')");
			if (!$this->que) {
				die("GAGAL");
			}else{
				echo "Berhasil";
				header("Location:index.php");
			}
		}
	
	}

	function tambahnew($namad,$namab,$nim,$kelas,$hobi,$genre,$tw)
	{
		include 'koneksi.php';
		session_start();
		$this->id= $_SESSION['id'];
		if (strlen($nim)==10&&is_numeric($nim)) {
			$this->ni = $nim;
		}
		if (!is_numeric($namad)) {
			$this->nd = $namad;
		}
		if (!is_numeric($namab)) {
			$this->nb = $namab;
		}
		$this->cls = $kelas;
		if (!is_numeric($hobi)) {
			$this->hb = $hobi;
		}
		$this->gr = implode(", ",$genre);
		$this->t = implode(", ",$tw);
		if (isset($this->ni)&&isset($this->nd)&&isset($this->nb)) {
			$this->connn = $conn;
			$this->que = mysqli_query($this->connn,"INSERT INTO data(nama_depan, nama_belakang, Nim, kelas, hobi, genre, tempat, id)
			 VALUES ('$this->nd','$this->nb','$this->ni','$this->cls','$this->hb','$this->gr','$this->t','$this->id')");
			if (!$this->que) {
				die("GAGAL");
			}else{
				echo "Berhasil";
				header("Location:dashboard.php");
			}
		}
	}

	function hapus($d)
	{
		include 'koneksi.php';
		$this->id2 = $d;
		$this->connn = $conn;
			$this->que = mysqli_query($this->connn,"DELETE FROM data WHERE Nim ='$this->id2'");
			if (!$this->que) {
				die("GAGAL");
			}else{
				echo "Berhasil";
				header("Location:dashboard.php");
			}
	}
}
$c = new oop();
if (isset($_POST['send'])) {
$c->tambah1($_POST['user'],$_POST['pass'],$_POST['repas'],$_POST['email']);
}
if (isset($_POST['simpan'])) {
$c->tambahnew($_POST['namad'],$_POST['namab'],$_POST['nim'],$_POST['kelas'],$_POST['hobi'],$_POST['genre'],$_POST['tw']);
}
if (isset($_GET['nim'])) {
$c->hapus($_GET['nim']);
}
 ?>