 <?php
if(!empty($_SESSION['id']))
{
$session_id=$_SESSION['id'];
include('users.php');
$userClass = new userClass();
}

if(empty($session_id))
{
$url=BASE_URL.'index.php';
header("Location: $url");
}


?>