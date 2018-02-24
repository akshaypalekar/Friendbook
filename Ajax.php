
<?php
include 'Helper.php';
$search=@$_REQUEST['search'];

$obj=new Helper();


if (!strlen($search)==0)
{
$result=$obj->select("distinct fname, lname,sr_no", "user", "`fname` like '%$search%' or `lname` like '%$search%'");
if(is_array($result) && $result!="no")
{
foreach($result as $r) 
{ 
echo "<a href='Display_friend_profile.php?to=". $r['sr_no'] ."'><div>" . $r['fname'] . " " .$r['lname']."</div></a>";
} 
}
}
?>

