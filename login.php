<html>
<head><title>Login</title></head>
<body>
<style>
    img {
        display: block;
        margin: auto;
        width:400px;
    }
</style>
<img src='/netnbtc/LoginUpload/imageNbtc.jpg' alt="Paris" style="width:20%">
<br>
<div style="border: 5px solid brown;
                width:420px;
                margin: auto;
                border-radius:25px;">
    <style>
        p.modelFont {
            line-height: 1.5;
            font-size: 16px;
        }
        p.modeText{
            font-size: 24px;
        }
    </style>
    <center>
        <form action="check_login.php" method="post" enctype="multipart/form-data">
            <p class="modelFont">ชื่อผู้ใช้งานหรือที่อยู่อีเมล</p>
            <input name="txtUsername" type="text" id="txtUsername" size="25%">
            <p class="modelFont">รหัสผ่าน</p>
            <input name="txtPassword" type="password" id="txtPassword" size="25%">
            <br><br><input name="box" type="checkbox"/>
            <span >บันทึกการใช้งานของฉัน</span>
            <br><br>

            <input name="login" style="background-color: #2178b4;border-radius: 15px;box-shadow: 1px 1px 1px 1px #1a527d;font-size: 16px;color: #ffffff;border: none;border-radius: 5%;padding: 10px;"type="submit" value="เข้าสู่ระบบ"/>
        </form>
    </center>
</div>
<style>
    a:link {
        text-decoration: none;
    }
    a:active {
        text-decoration: underline;
    }
    a:hover {
        text-decoration: underline;
    }
    /* unvisited link */
    a:link {
        color: black;
    }
    /* visited link */
    a:visited {
        color: green;
    }
    /* mouse over link */
    a:hover {
        color: red;
    }
    /* selected link */
    a:active {
        color: blue;
    }
</style>
<center><p><a href="default.asp" target="_blank">คุณจำรหัสผ่านไม่ได้?</a></p></center>
</body>
</html>
