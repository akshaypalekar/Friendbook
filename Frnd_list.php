<!DOCTYPE html>
<?php
session_start();
include 'Helper.php';
include 'Header.php';
$from=$_SESSION['sr_no'];
?>
<html>
<head>
<script src="jquery/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="css.css">
<script type="text/javascript">

$(document).ready(function()
{
  $(".msg_area").hide();
  $(".msg_button").hide();
  $(".button").click(function(){
	  $(".msg_area").hide();
	  $(".msg_button").hide();
	$(this).siblings(".msg_area").show();
	$(this).siblings(".msg_button").show();
  })

  
  $('.msg_button').click(function(){
	var msg = $(this).siblings('.msg_area').val();
	var id = $(this).siblings('.id').val();
	alert(msg);
	alert(id);
	$.ajax({
type:"post",
url:"Send_msg_db.php",
data:"msg="+msg+"&to="+id,
success:function(response)
{
 $(".msg_area").val('');
  $(".msg_area").hide();
  $(".msg_button").hide();
    
}
});
   })
     });
 </script>
 
</head>
<body>

<?php
$obj=new Helper();
$result=$obj->select("*", "user a, friend b", "(a.sr_no = b.from_id AND b.to_id ='$from') OR (a.sr_no = b.to_id AND b.from_id ='$from') AND b.status =  '1'");
if(is_array($result))
{
foreach($result as $r) 
{ 
    
    echo "<table border='1'>"; 
    echo  "<tr><td><img src=". $r['image']. " height='50' width='50'></img></td>
	<td><a href='Display_friend_profile.php?to=". $r['sr_no'] ."'>" . $r['fname'] . " " . $r['lname'] . "</a><br><div><button type='button' id='button' class='button' >Send Message</button></br>
<textarea id='msg' rows='4' cols='15' class='msg_area'></textarea></br>
	<input type='button' value='Send' class='msg_button' >
	<input type='hidden' value='".$r['from_id']."' class = 'id'></div>
 </td></tr>"; 
   	
}
}
else
{
echo "You have no friends.";
}
?>

</body>
</html>