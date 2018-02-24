<?php  
  
class Helper  
{  
 private $con;
/*constructor*/
public function __construct()  
    {  
        $this->con=new mysqli("localhost","root","","friendbook");

    }   

/*Insert query*/
function insert($table,$fields,$values)
{
$str="insert into $table($fields) values($values)";
$this->con->query($str) or die($this->con->error);
}
  
 /*Delete query*/ 
function delete($table,$condition)
{
$str="delete from $table where $condition";
$this->con->query($str) or die($this->con->error);
}

 /*Update query*/
function execute($str)
{
$this->con->query($str) or die($this->con->error);
}

 /*Select query*/
function select($field,$table,$condition)
{
$str="select $field from $table where $condition";
$result = $this->con->query($str) or die($this->con->error);
if($result->num_rows==0)
{
return "no";
}
else
{
while($row=$result->fetch_array(MYSQL_ASSOC))
{
$data[]=$row;
}
return $data;
}
}

/*destructor*/
function _destruct()
{
$this->con->close();
}
}

?>  