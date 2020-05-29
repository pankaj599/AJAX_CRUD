<?php
$connect=new mysqli("localhost","root","1234567890","formajax");
if(isset($_POST['id']))
{
    $updatedata=$_POST['id'];
    //echo $updatedata;
    $sql_4="SELECT * from ajaxinsert WHERE id='$updatedata'";
     $result_4=$connect->query($sql_4);
     while($row_4=$result_4->fetch_assoc())
     {
         echo json_encode($row_4);
    //     echo $row_4['name'];
    }
}
if(isset($_POST['updatename'])&&isset($_POST['updatepassword']))
{
    $uname=$_POST['updatename'];
    $upass=$_POST['updatepassword'];
    $userid=$_POST['userid'];
    //echo $uname;
    $sql="UPDATE ajaxinsert SET name='$uname' , password='$upass' WHERE id='$userid'";
    $result=$connect->query($sql);
}
?>