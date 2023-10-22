<?php
include(connect.php);
$spec=$_post['spec'];
//echo $spec;
$query="selete *from tbl_doctor where'specialization'='$spec']"
$res =mysql_query($query);
 
?>
<table border ="1"align ="center">
<tr>
<th>s.noM</th>
<th>doctor name</th>
<th>gender</th>
<th>address</th>
<th>fees</th>
</tr>
</table>
<?php
while ($res =myqsql_fetch_array($res ,MYSQL_BOTH))

{
<tr>
<td ><?php echo $a?></td>
<td ><?php echo $row['name'];?></td><td >
<td ><?php echo $row['gender']?></td
<td ><?php echo $row['address']?></td>
<td ><?php echo $row['fees']?></td>
<td ><?php echo $row['timing']?></td>
<td ><?php echo $row['mobile']?></td>
<td ><?php echo $row['email']?></td>
<td><a href="bookapp.php?did=<?php echo $row [docid] ?>">book appoinment</a></td>
</tr>	

<?php
$a++;}
?>
