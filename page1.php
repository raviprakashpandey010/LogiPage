<html><head><title>PHP</title></head>
<body>
    <center>
        <?php
         $user=$_POST['txtuser'];
         $pass=$_POST['txtpass'];

         $ckname="username";
         $ckvalue=$user;
         $ckpass="password";
         $ckpassvalue=$pass;
         setcookie($ckname,$ckvalue);
         setcookie($ckpass,$ckpassvalue);

         echo"User Name:".$user."<br><br>";
         echo"Password:".$pass;
        ?>
        <form method=post action=page2.php>
            <input type=submit value=Submit>
</form>
        <center>
</body>        