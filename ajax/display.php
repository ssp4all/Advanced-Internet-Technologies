
<?php
include("connection.php");
mysqli_select_db($con,"samples");
$result=mysqli_query($con,"select * from student");

echo "<table border='1'>
<th>
<td><b>RollNo</b></td>
<td><b>Name</b></td>
<td><b>Address</b></td>
<td><b>Stream</b></td>
</th>";

while($data = mysqli_fetch_row($result))
{   
    echo "<tr>"; 
    echo "<td></td>";
    echo "<td>$data[0]</td>";
    echo "<td>$data[1]</td>";
    echo "<td>$data[2]</td>";
    echo "<td>$data[3]</td>";
    echo "</tr>";
}
echo "</table>";
?>