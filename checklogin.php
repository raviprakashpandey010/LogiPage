<html><head><title>PHP</title></head>
<body>
    <center>
        <?php
        $user=$_POST['txtuser'];
        $pass=$_POST['txtpass'];
        
        if(strcmp($user,"Rahul")==0 and strcasecmp($pass,"Amit"))
        echo"<font color=green size=5> You are valid user</font>";
    else
    echo"<font color=red size=5> You are invalid</font>";
        ?>
        <center>
</body>