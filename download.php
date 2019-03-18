<html>
<head><title>Download</title></head>
<body>
<spanp style="font-size: 40px">  Download File  </spanp>
<center>
<?php
$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "work";

$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);

$strSQL = "SELECT * FROM db";
//	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
$objQuery = mysqli_query($objCon,$strSQL);
?>
<table width="700" border="1">
    <tr>
        <th width="50"> <div align="center">Files ID </div></th>
        <th width="150"> <div align="center">Files Name </div></th>
    </tr>
    <?php
    while(	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC))
    {
        ?>
        <tr>
            <td><div align="center"><?php echo $objResult["file"];?></div></td>
            <td><center><a href="database/<?php echo $objResult["file"];?>"><?php echo $objResult["file"];?></a></center></td>
        </tr>
        <?php
    }
    ?>
</table>
<?php

mysqli_close($objCon);
?>
</center>
</body>
</html>
