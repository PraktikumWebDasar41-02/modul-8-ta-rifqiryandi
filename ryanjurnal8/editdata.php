<?php 
include 'koneksi.php';

if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];
    $que = mysqli_query($conn,"SELECT * FROM data WHERE Nim='$nim'");
    $ac = mysqli_fetch_array($que);    
    $array = explode(", ",$ac['genre']);
    $arra = explode(", ",$ac['tempat']);
}
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>regis</title>
  </head>
  <body>
    <form  method="POST">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama depan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Nama depan" name="namad" value=<?php echo $ac['nama_depan'];?>>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama belakang</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Nama belakang" name="namab" value=<?php echo $ac['nama_belakang'];?>>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">NIM</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="NIM" name="nim" disabled value=<?php echo $ac['Nim'];?>>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Kelas</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Kelas" name="kelas" value=<?php echo $ac['kelas'];?>>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Hobi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Hobi" name="hobi" value=<?php echo $ac['hobi'];?>>
    </div>
  </div>
  
  <div class="form-group row">
    <div class="col-sm-2">Genre film</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="genre[]" value="Horor" <?php if(in_array('Horor', $array)){echo "checked=checked";}?>>
        <label class="form-check-label" for="gridCheck1">
          Horor
        </label><br>
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="genre[]" value="Anime" <?php if(in_array('Anime', $array)){echo "checked=checked";}?>>
        <label class="form-check-label" for="gridCheck1">
          Anime
        </label><br>
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="genre[]" value="Action" <?php if(in_array('Action', $array)){echo "checked=checked";}?>>
        <label class="form-check-label" for="gridCheck1">
          Action
        </label><br>
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="genre[]" value="Drama" <?php if(in_array('Drama', $array)){echo "checked=checked";}?>>
        <label class="form-check-label" for="gridCheck1">
          Drama
        </label><br>

      </div>
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-2">Tempat Wisata</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="tw[]" value="Bali" <?php if(in_array('Bali', $arra)){echo "checked=checked";}?>>
        <label class="form-check-label" for="gridCheck1">
          Bali
        </label><br>
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="tw[]" value="Tanjung solor" <?php if(in_array('Tanjung solor', $arra)){echo "checked=checked";}?>>
        <label class="form-check-label" for="gridCheck1">
          Tanjung Selor
        </label><br>
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="tw[]" value="Jakarta" <?php if(in_array('Jakarta', $arra)){echo "checked=checked";}?>>
        <label class="form-check-label" for="gridCheck1">
          Jakarta
        </label><br>
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="tw[]" value="Lombok" <?php if(in_array('Lombok', $arra)){echo "checked=checked";}?>>
        <label class="form-check-label" for="gridCheck1">
          Lombok
        </label><br>

      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
    </div>
  </div>
  <div class="card-body">
    <a href="dashboard.php" class="card-link">dashboard</a>
  </div>
</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
<?php
    if (isset($_POST['simpan'])) {
        
	
		if (!is_numeric($_POST['namad'])) {
			$nd = $_POST['namad'];
		}
		if (!is_numeric($_POST['namab'])) {
			$nb = $_POST['namab'];
		}
		$cls = $_POST['kelas'];
		if (!is_numeric($_POST['hobi'])) {
			$hb = $_POST['hobi'];
		}
		$gr = implode(", ",$_POST['genre']);
        $t = implode(", ",$_POST['tw']);
        if (isset($nd)&&isset($nb)) {
			
			$query = mysqli_query($conn,"UPDATE data SET 
            nama_depan='$nd',nama_belakang='$nb',kelas='$cls',hobi='$hb',genre='$gr',tempat='$t' WHERE Nim='$nim'");
			if (!$query) {
				die("GAGAL");
			}else{
				echo "Berhasil";
				// header("Location:dashboard.php");
			}
		}
    }
?>