<?php
session_start();
include("connect.php");
$email=$_SESSION['doctor'];
$query="select * from tbl_doctor where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$pid=$row['docid'];
}
 $query2="select * from tbl_appointment where docid='$pid'";
 $res2=mysql_query($query2);
 //echo $res2;
 
?>     
    
    <table border="1px">
	<tr>
	
	           <th> S.No  </th>
	           <th> Patient Name </th>
	           <th> Date </th>
	           <th> status</th>
			   
	
	</tr>
	<?php   
	$a=1;
	while($row2=mysql_fetch_array($res2,MYSQL_BOTH))
	{
	?>
	<tr>
	       <td> <?php echo $a; ?> </td>
		    <?php $ppid=$row2['regid'];
			$query3="select * from tbl_patient where patid='$ppid'";
			$res3=mysql_query($query3);
			if($row3=mysql_fetch_array($res3,MYSQL_BOTH))
			{
				$pname=$row3['name'];
			}
			
			?>
	       <td> <?php echo $pname; ?> </td>
		   
		    <?php $did=$row2['status']; 
		   $query4="select * from tbl_appointment where status='$did'";
		   $res4=mysql_query($query4);
		   if($row4=mysql_fetch_array($res4,MYSQL_BOTH))
		   {
			   $status=$row4['status'];
		   }
		   ?>
		   <td> <?php echo $row2['date']; ?> </td>
		   <td><a href="status.php?aid=<?php echo $row2['0']; ?>"> <?php echo $status; ?> </a>  </td>
	       
	</tr>
	<?php
	$a++;
	}
	?>
	</table>
	           