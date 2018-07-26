<?php
include("includes/dbconfig.php");

$name = $_POST["name"];
$email = $_POST["email"];
$dob = $_POST["dob"];
$comment = $_POST["comment"];
$gender = $_POST["gender"];
$ch = $_POST["chkbox"];
$location = $_POST["city"];
$zipcode = $_POST["zc"];
$country = $_POST["c"];
$rate = $_POST["r"];
$che=implode(",",$ch);
if (!empty($name) || !empty($email) || !empty($dob) || !empty($comment) ||
!empty($gender) || !empty($ch) || !empty($location) || !empty($zipcode) || !empty($country) || !empty($rate)) 
{
$SELECT = "SELECT email From reg Where email=:email Limit 1";

$INSERT = "INSERT Into reg (name, email, dob, comment, gender, che, location, zipcode, country, rate) values (:user, :email, :dob, :comment, :sex, :ce, :city, :zipc, :coun, :ra)";
$stmt1 = $dbc->prepare($SELECT);
$stmt1->execute([':email'=>$email]);
$rnum = $stmt1->rowCount();
$stmt1=null;
if ($rnum==0) {
$stmt2 = $dbc->prepare($INSERT);
$stmt2->execute([':user'=>$name, ':email'=>$email, ':dob'=>$dob, ':comment'=>$comment, ':sex'=>$gender, ':ce'=>$che, ':city'=>$location, ':zipc'=>$zipcode, ':coun'=>$country, ':ra'=>$rate]);
echo "New record inserted sucessfully";
}
else 
{
echo "Someone already register using this email";
}
$stmt2=null;
$dbc=null;    
} 
else 
{
echo "All field are required";
die();
}
?>