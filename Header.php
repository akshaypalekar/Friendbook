<!DOCTYPE html>
<?php
$from=$_SESSION['sr_no'];
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css.css">
<script src="jquery/jquery.js">
</script>
<script type="text/javascript">
function search()
{
var s=document.getElementById('search').value;
$.ajax({
type:"get",
url:"Ajax.php",
data:"search="+s,
success:function(response)
{
$("#searchbox").html(response);
}
});
}

</script>
</head>
<body>



<?php
$obj=new Helper();
$result=$obj->select("status", "friend", "`to_id`='$from' and `status`=0");
if(is_array($result))
{
$count=0;
foreach($result as $r) 
{ 
 $count=$count+1;   
} 
}
?>


<div id="header">
<div style="margin-left:120px;">
<table cellpadding="10">
<tr><td><input type="text" id="search" name="search" style="width: 400px;" placeholder="Search for people, places and things" onkeyup="search()" ></td>
<td><a href="User_page.php" id="menu">Home</a></td>
<td><a href="Messages.php" id="menu">Messages</a></td>
<td><a href="Frnd_request.php" id="menu">Friend Request <font color="red"><?php echo @$count;?></font></a></td>
<td><a href="Frnd_list.php" id="menu">Friend list</a></td>
<td><a href="Display_profile.php" id="menu">Account Setting</a></td>
<td><a href="Logout.php" id="menu">Logout</a></td></tr>
</table>
</div>
<div id="searchbox" style="margin-left:132px;margin-top:-14px;width: 401px;border:2px solid gray;background: #ffffff;" ></div>
</div>
</body>
</body>
</html>