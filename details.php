<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
</head>
<body>
    <h1>
        <?php
         echo "Hello PHP";
        ?>
    </h1>
</body>
</html>


<?php
require_once 'db.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$qualification = $_POST['qualification'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$filename = $_FILES["file"]["name"];
$fileTempName = $_FILES["file"]["tmp_name"];

$dir = "uploads/$filename";
$img = move_uploaded_file($fileTempName, $dir);

//echo "<p>The First name is <strong>$fname</strong></p>"; //or echo 'The First name is .$fname';
//echo "<p>The Last name is <strong>$lname</strong></p>";
//echo "<p>The Date of birth is <strong>$dob</strong></p>";
//echo "<p>The qualification is <strong>$qualification</strong></p>";
//echo "<p>The email is <strong>$email</strong></p>";
//echo "<p>The password is <strong>$pwd</strong></p>";
//echo "<p>The File name is <strong>$filename</strong></p>";
//echo "<p>The File Temporary Name is <strong>$fileTempName</strong></p>";

$stmt = $conn->prepare("INSERT into user(fname, lname, dob, qualification, file, email, pwd) VALUES(:fname, :lname, :dob, :qualification, :file, :email, :pwd)" );//":" is optional .it is used for user's undersatnding to know that the values are to be binded.instead of ":" any symbols can be used//

$stmt->bindParam(":fname",$fname);
$stmt->bindParam(":lname",$lname);
$stmt->bindParam(":dob",$dob);
$stmt->bindParam(":qualification",$qualification);
$stmt->bindParam(":file",$dir);
$stmt->bindParam(":email",$email);
$stmt->bindParam(":pwd",$pwd);

try{
    $stmt->execute();
}
catch(PDOException $e){
    echo 'Data insert failed'.$e->getMessage();
}


