<?php
	session_start();
	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "work";

	$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	$strSQL = "SELECT * FROM member WHERE Username = '".mysqli_real_escape_string($objCon,$_POST['txtUsername'])."'
	and Password = '".mysqli_real_escape_string($objCon,$_POST['txtPassword'])."'";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	if(!$objResult)
	{
    echo "<script>";
                      echo "alert(\" user หรือ  password ไม่ถูกต้อง\");";
                      echo "window.history.back()";
                  echo "</script>";
	}
	else
	{
			$_SESSION["UserID"] = $objResult["UserID"];
			$_SESSION["Status"] = $objResult["Status"];

			session_write_close();

			if($objResult["Status"] == "ADMIN")
			{
				header("location:download.php");
			}
			else
			{
				header("location:upload.php");
			}
	}
	mysqli_close($objCon);
?>
