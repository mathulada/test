<html>
<head>
<title>ThaiCreate.Com Tutorial</title>
</head>
<body>
<?php
session_start();
	if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"database/".$_FILES["filUpload"]["name"]))
	{

        $serverName = "localhost";
        $userName = "root";
        $userPassword = "";
        $dbName = "work";

          $objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
          $strSQL = "INSERT INTO db(file) VALUES ('".$_FILES["filUpload"]["name"]."')";
        //$strSQL =" (file) VALUES ('".$_FILES["filUpload"]["name"]."')";
          $objQuery = mysqli_query($objCon,$strSQL);


		echo "Copy/Upload Complete<br>";

	}
?>
<a href="download.php">View files</a>
</body>
</html>
