<?php
session_start();
if(isset($_POST['submit'])){
// Fetching variables of the form which travels in URL
$user = $_POST['user'];
$pass = $_POST['pass'];

if(($user =='site1'&& $pass =='site1') || ($user =='jeannette.saenz-azua@ttu.edu'&& $pass =='UrA8f5eja'))
{
    $_SESSION["login"] = "true";
//  To redirect form on a particular page
header("location: gp.php");
}
else if(($user =='site'&& $pass =='site2') || ($user =='genelda.bedolla@ttu.edu'&& $pass =='Ry3w4RX4t') || ($user =='kenneth.griner@ttu.edu'&& $pass =='G78kQxGcx'))
{
    $_SESSION["login"] = "true"; 
    header("location: dal.php"); 
}
else if(($user =='site'&& $pass =='site3') || ($user =='elizabel.Garcia@ttu.edu'&& $pass =='8Q7vB4cMV'))
{
    $_SESSION["login"] = "true"; 
    header("location: hou.php"); 
}
else if(($user =='site'&& $pass =='site4') || ($user =='emily.day.bacom@ttu.edu'&& $pass =='DNf5FDcvE'))
{
    $_SESSION["login"] = "true"; 
    header("location: aus.php"); 
}
else if(($user =='site'&& $pass =='site5') || ($user =='wendy.nash@ttu.edu'&& $pass =='CxsNd5UnE'))
{
    $_SESSION["login"] = "true"; 
    header("location: ald.php"); 
}
else if(($user =='site'&& $pass =='site6') || ($user =='michael.j.richardson@ttu.edu'&& $pass =='yw9ZT5nK2') || ($user =='claudia.marquez@ttu.edu'&& $pass =='6BYrs7KaF'))
{
    $_SESSION["login"] = "true";  
    header("location: fw.php"); 
}
else if(($user =='site'&& $pass =='site7') || ($user =='angie.cowart@ttu.edu'&& $pass =='3TA6WgqTL'))
{
    $_SESSION["login"] = "true";  
    header("location: hill.php"); 
}
else if(($user =='site'&& $pass =='site8') || ($user =='julie.lopez@ttu.edu'&& $pass =='PhjsE3JJS') || ($user =='samantha.weissler@ttu.edu'&& $pass =='LdrRz87mG'))
{
    $_SESSION["login"] = "true"; 
    header("location: sa.php"); 
}
else if(($user =='site'&& $pass =='site9') || ($user =='mrodriguez@newcaneyisd.org'&& $pass =='jFcVv7Lv2'))
{
    $_SESSION["login"] = "true"; 
    header("location: nc.php"); 
}
else header("location: siteAuth.php"); 
    exit();

}
?>