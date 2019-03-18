<html>
<head><title>Up Load</title></head>
<body>
<spanp style="font-size: 40px">  UPLOAD File  </spanp>
<input name="fileUpload" type="file">
<center>
    <div style="border: 5px black;height: 30%; width: 80%;border-style: dotted">
        <form name="form1" method="post" action="PageUploadToMySQL2.php" enctype="multipart/form-data">
            <input type="file" name="filUpload"><br>
            <input name="btnSubmit" type="submit" value="Submit">
        </form>
    </div>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            border: 2px solid black;
            text-align: left;
        }
    </style>
    <table>
        <tr>
            <th style="text-decoration:underline">Filename</th>
            <th style="text-decoration:underline">ชื่อผู้ส่ง</th>
            <th style="text-decoration:underline">วันที่</th>
            <th style="text-decoration:underline">ประเภทไฟล์</th>
            <th style="text-decoration:underline">Upload</th>
        </tr>
    </table>
</center>
</body>
</html>