<?php
/**
 * Created by PhpStorm.
 * User: mikkk
 * Date: 16-Nov-17
 * Time: 3:11 AM
 */
$username = _Post['$userID'];
$pw = _Post['$userPW'];
$db_server = "localhost";
$db_name = "Library";

if ($username == "" || $pw == null) {
    echo "<script>alert('Unfinished Information');</script>";
}
$connect = mysql_connect($db_server, $username, $pw);
mysql_select_db("Library");
mysql_query("set names utf8");
$sql = "SELECT username from user where username='$username'";
$result = mysql_query($sql);
$counter = mysql_num_rows($result);

if ($counter > 0) echo "<script>alert('username existed');</script>";
$insert = "insert into user (username,password,phone, address) VALUES ('$username','$pw','','')";
if (mysql_query($insert)) echo "<script>alert('success')</script>";
else echo "<script>alert('Not sucessful')</script>";

