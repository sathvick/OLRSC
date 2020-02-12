<?Php
session_start();
error_reporting(0);// With this no error reporting will be there
require "config.php";
$qst_id=$_POST['qst_id'];
$opt=$_POST['opt']; // User choice
//$qst_id=10;
//$opt='option3';

if(!is_numeric($qst_id)){
echo "Data Error";
exit; }


$sql=$dbo->prepare("insert into poll_answer(qst_id,opt) values($qst_id,:opt)");
$sql->bindParam(':opt',$opt,PDO::PARAM_STR, 50);
$sql->execute();
?>