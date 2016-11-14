<?php
if (!isset($_SESSION)) {
session_start();
}
if($_SESSION['check']=='true')
{
require_once 'classes/Membership.php';

$membership = new Membership();
$image='n';
if(($_FILES["file"]["type"]=="image/png") || ($_FILES["file"]["type"]=="image/jpeg"))
{
$name=$membership->get_id();
move_uploaded_file($_FILES["file"]["tmp_name"],"events/" .$name. ".jpg");
$image='y';
}

if(!empty($_POST['category']) && !empty($_POST['description']) )
{
$mail=$_SESSION['email'];
$name=$_SESSION['name'];
$college=$_SESSION['college'];
$department=$_SESSION['department'];
$category=strip_tags($_POST['category']);

$date1=strip_tags($_POST['date']);
$month=strip_tags($_POST['month']);
$year=strip_tags($_POST['year']);
$date=$year.'-'.$month.'-'.$date1;
$venue=strip_tags($_POST['venue']);
$description1=str_replace('"',' ',$_POST['description']);
$description2=str_replace("'",' ',$description1);
$description3=str_replace("<",'less than',$description2);
$description4=str_replace(">",'greater than',$description3);
$description=strip_tags($description4);
$headline1=str_replace('"',' ',$_POST['headline']);
$headline2=str_replace("'",' ',$headline1);
$headline3=str_replace("<",'less than',$headline2);
$headline4=str_replace(">",'greater than',$headline3);
$headline=strip_tags($headline4);


$link1=str_replace('"',' ',$_POST['link']);
$link2=str_replace("'",' ',$link1);
$link3=str_replace("<",'less than',$link2);
$link4=str_replace(">",'greater than',$link3);
$url1=strip_tags($link4);
$url2=str_replace("http://",'',$url1);
$url='http://'.$url2;

$response = $membership->gossipdetail($category,$description,$mail,$name,$college,$department,$headline,$date,$venue,$url,$image);
}
}
else
{

echo '<META HTTP-EQUIV="Refresh" Content="0; URL=login.php">';
}
?>