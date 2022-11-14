<?php
// include database connection file
include_once("../config.php");

//cek  
if (isset($_POST['submit'])) {
    // ambil data dari formulir
    $nim = $_POST['nim'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $alamat = $_POST['alamat'];
    $about = $_POST['about'];
    $email = $_POST['email'];
    $link_in = $_POST['link_in'];
    $link_git = $_POST['link_git'];
    $link_twit = $_POST['link_twit'];
    $link_fb = $_POST['link_fb'];
    $award = $_POST['award'];
    $interest = $_POST['interest'];
    $skill = $_POST['skill'];

    // query
    $sql = "UPDATE about, interests, awards, skills SET
                fname = '$fname',
                lname = '$lname',
                alamat = '$alamat',
                about = '$about',
                email = '$email',
                link_in = '$link_in',
                link_git = '$link_git',
                link_twit = '$link_twit',
                link_fb = '$link_fb',
                award = '$award',
                interest = '$interest',
                skill = '$skill'
                WHERE about.nim = $nim AND interests.nim = $nim  AND awards.nim = $nim AND skills.nim = $nim
            ";
    $query = mysqli_query($conn, $sql);
    // mengecek apakah query berhasil diubah

}


// Check if form is submitted for user update, then redirect to homepage after update
if (!isset($_GET['nim'])) {
    header('Location: ../index.php');
}
// about
$nim = $_GET['nim'];

// update user data about
$sql = "SELECT * FROM about WHERE nim=$nim";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);

$fname = $row["fname"];
$lname = $row["lname"];
$alamat = $row["alamat"];
$about = $row["about"];
$email = $row["email"];
$link_in = $row["link_in"];
$link_git = $row["link_git"];
$link_twit = $row["link_twit"];
$link_fb = $row["link_fb"];

//awards
$sql = "SELECT * FROM awards WHERE nim=$nim";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);

$award = $row['award'];

//interest
$sql = "SELECT * FROM interests WHERE nim=$nim";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);

$interest = $row["interest"];

//skills
$sql = "SELECT * FROM skills WHERE nim=$nim";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);

$skill = $row["skill"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 

</head>
<body>
    <section class="container-fluid">
        
        <section class="row justify-content-center">
        <section class="col-12 col-sm-6 col-md-4">
            <form method="post" action='edit3337210005.php' enctype="multipart/form-data">
                <h4 class="text-center font-weight-bold"> Edit User Data </h4>
            
                <div class="form-group row col-lg-12">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="fname" name="fname"  value="<?= $fname ?>" required>
                </div>
                <div class="form-group row col-lg-12">
                    <label for="nama">Nama Terakhir</label>
                    <input type="text" class="form-control" id="lname" name="lname"  value="<?= $lname ?>" required>
                </div>
                <div class="form-group row col-lg-12">
                    <label for="email">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $alamat ?>" required>
                </div>
                <div class="form-group row col-lg-12">
                    <label for="email">About</label>
                    <input type="text" class="form-control" id="about" name="about"  value="<?= $about ?>" required>
                </div>
                <div class="form-group row col-lg-12">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email"  value="<?= $email ?>" required>
                </div>
                <div class="form-group row col-lg-12">
                    <label for="email">LinkedIn</label>
                    <input type="text" class="form-control" id="link_in" name="link_in"  value="<?= $link_in ?>" required>
                </div>
                <div class="form-group row col-lg-12">
                    <label for="email">Link Github</label>
                    <input type="text" class="form-control" id="link_git" name="link_git"  value="<?= $link_git ?>" required>
                </div>
                <div class="form-group row col-lg-12">
                    <label for="email">Link Twitter</label>
                    <input type="text" class="form-control" id="link_twit" name="link_twitt"  value="<?= $link_twit ?>" required>
                </div>
                <div class="form-group row col-lg-12">
                    <label for="email">Link Facebook</label>
                    <input type="text" class="form-control" id="link_fb" name="link_fb"  value="<?= $link_fb ?>" required>
                </div>
                <div class="form-group row col-lg-12">
                    <label for="email">Awards</label>
                    <input type="text" class="form-control" id="award" name="award"  value="<?= $award ?>" required>
                </div>
                <div class="form-group row col-lg-12">
                    <label for="email">Interest</label>
                    <input type="text" class="form-control" id="interest" name="interest"  value="<?= $interest ?>" required>
                </div>
                <div class="form-group row col-lg-12">
                    <label for="email">Skill</label>
                    <input type="text" class="form-control" id="skill" name="skill"  value="<?= $skill ?>" required>
                </div>
                <a class="btn btn-primary" href="">Update</a>
                <a class="btn btn-primary" href="../index.php">Kembali</a>
            </form>
        </section>
        </section>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html> 
