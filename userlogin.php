<html><head><title>PHP</title></head>
<body>
    <center>
        <form method=POST action='page1.php'>
            <table border=1>
                <tr>
                    <th>User Name</th>
                    <td><input type=text name=txtuser></td>
                </tr>
<tr>
    <th>Password</th>
    <td><input type=password name=txtpass></td>
</tr>
<tr>
    <td></td>
    <td>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
</td>
</tr>
</table>
</form>
<?php
?>