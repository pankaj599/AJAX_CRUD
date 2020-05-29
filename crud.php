<?php
$connect=new mysqli("localhost","root","1234567890","formajax");
extract($_POST);
if(isset($_POST['$formname'])&&isset($_POST['$formpassword']))
{
$sql="INSERT into ajaxinsert(name,password) VALUES('$formname','$formpassword')";
$result=$connect->query($sql);
}
/////
$sql_2="SELECT * FROM ajaxinsert";
$result_2=$connect->query($sql_2);
$number=1;
while($row=$result_2->fetch_assoc())
{?>
 <tr>
        <td> <?php echo $number?></td>
        <td> <?php echo $row['name'];?></td>
        <td> <?php echo $row['password'];?></td>
        <td> <button class="btn btn-secondary hello" onclick="del(<?php echo $row['id']?>)">delete</button></td>
        <td> <button class="btn btn-warning" onclick="change(<?php echo $row['id']?>)">edit</button></td>
        <!-- <td> <input type="hidden" id="hidden" value=""></td> -->
        <tr> 
<?php
$number++;
}
//
if(isset($_POST['datapost']))
{
    $datapost=$_POST['datapost'];
    echo "<h1>".$datapost."</h1>";
    $sql_3="DELETE from ajaxinsert WHERE id='$datapost'";
    $result_3=$connect->query($sql_3);    
}
///////////////////////
?>