 
 
<style>
  .card{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
 
  }
</style>

<?php
include 'partials/_dbconnect.php';

$sql = "SELECT * FROM `course`  ";
  $result = mysqli_query($conn, $sql);
  ?>
  
  <div class="row">
 
  <?php
  while($row = mysqli_fetch_assoc($result)){
  
 
     
        

       echo " 

 
       <div class='card m-3' style='width: 10rem; ' >
         <img src='img/".$row['name'].".png' class='card-img-top' alt='...' style='width: 100px; height:100px;'>
         <div class='card-body'>
           <h5 class='card-title'>".$row['name']."</h5>
           <p class='card-text'>".$row['fee']."</p>
           <a href='partials/_new.php' class='btn btn-primary'>".$row['desc']."</a>
         </div>
       </div>
        
        ";
     
} 
  ?>
   </div>


 