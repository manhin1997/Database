
<?php
/**
 * @Author: Marte
 * @Date:   2017-10-31 15:01:47
 * @Last Modified by:   Marte
 * @Last Modified time: 2017-11-20 11:56:25
 */
$id = "admin";
$pw = "admin";
$db_server = "localhost";
$db_name = "library";
$connect = new mysqli($db_server, $id, $pw, $db_name);
if ($connect->connect_error) {
	die('Could not connect: ' . mysql_error());
}

$username=$_POST['user'];
$password=$_POST['pass'];

$result = $connect->query("SELECT * FROM child where UserName= '$username' AND UserPW='$password'");

if ($result-> num_rows>0){
    echo 'Login successfully';
    echo '<meta http-equiv=REFRESH CONTENT=5;url=member.php>';
} else {
    echo 'Login failed';
    echo '<meta http-equiv=REFRESH CONTENT=5;url=index_Main.html>';
}
?>