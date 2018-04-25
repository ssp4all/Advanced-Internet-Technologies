<?php   
 //load_data_select.php  
 $connect = mysqli_connect("localhost", "root", "", "ajax");  
 function fill_sem($connect)  
 {  
      $output = '';  
      $sql = "SELECT * FROM sem";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["sem_id"].'">'.$row["semester"].'</option>';  
      }  
      return $output;  
 }  
 function fill_subjects($connect)  
 {  
      $output = '';  
      $sql = "SELECT * FROM subjects";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<div class="col-md-3">';  
           $output .= '<div style="border:1px solid #ccc; padding:20px; margin-bottom:20px;">'.$row["subject_name"].'';  
           $output .=     '</div>';  
           $output .=     '</div>';  
      }  
      return $output;  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Ajax with Database</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container">  
                <h3>  
                     <select name="sem" id="sem">  
                          <option value="">Show All Subjects</option>  
                          <?php echo fill_sem($connect); ?>  
                     </select>  
                     <br /><br />  
                     <div class="row" id="show_subjects">  
                          <?php echo fill_subjects($connect);?>  
                     </div>  
                </h3>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#sem').change(function(){  
           var sem_id = $(this).val();  
           $.ajax({  
                url:"load_data.php",  
                method:"POST",  
                data:{sem_id:sem_id},  
                success:function(data){  
                     $('#show_subjects').html(data);  
                }  
           });  
      });  
 });  
 </script>  