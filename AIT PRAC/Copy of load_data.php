<?php  
 //load_data.php  
 $connect = mysqli_connect("localhost", "root", "", "ajax");  
 $output = '';  
 if(isset($_POST["sem_id"]))  
 {  
      if($_POST["sem_id"] != '')  
      {  
          $sql = "SELECT * FROM subjects WHERE sem_id = '".$_POST["sem_id"]."'";  
      }  
        
      else  
      {  
           $sql = "SELECT * FROM subjects";  
      }  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<div class="col-md-3"><div style="border:1px solid #ccc; padding:20px; margin-bottom:20px;">'.$row["subject_name"].'</div></div>';  
      }  
      echo $output;  
	}
 ?>  