<?php

function test_input($data) {
  $data = str_replace('/','-',$data);
  $data = str_replace('&','-',$data);
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data, $flags=ENT_QUOTES| ENT_HTML401);
  return $data;
}

ini_set('display_errors',1);
error_reporting(E_ALL);

// define variables and set to empty values
$first = $last = $sqler = $uploaderr = '';
$uploadOk = 1;

// clean inputs
$first = test_input($_POST["first"]);
$last = test_input($_POST["last"]);

$target_dir = "uploads/";
$target_dir_save = "/rov/resume/uploads/";

$FileType = pathinfo($target_dir . basename($_FILES["fileToUpload"]["name"]),PATHINFO_EXTENSION);
$target_file = $target_dir . $first . "_" . $last . "." . $FileType;

	// Check if file already exists
	if (file_exists($target_file)) {
		$uploaderr = $uploaderr . "Sorry, file already exists.";
		$uploadOk = 0;
	}
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 5000000) {
		$uploaderr = $uploaderr . "Sorry, your resume is too large.";
		$uploadOk = 0;
	}
	// Allow certain file formats
	if($FileType != "pdf" and $FileType != "PDF") {
		$uploaderr = $uploaderr . "Sorry, only PDFs are allowed";
		echo $FileType;
		$uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		$uploaderr = $uploaderr . "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.<br>";
		} else {
			$uploaderr = $uploaderr . "There was an unknown error uploading your file.";
		}
	}


if ($uploaderr == '' && $sqler == '') {
				//header('Location: index.php');
				echo "<br>";
				echo $purchasedatetemp;
				echo "<br>";
				echo $purchasedate;
				echo "<br>";
				header('Location: index.php?success=1');
			}
			else {
				echo "There were errors for " . $first . " " . $last . "'s resume <br>";
				echo $uploaderr . "'<br>'";
				echo $sqler . "'<br>";
				 
				
			}

?>

