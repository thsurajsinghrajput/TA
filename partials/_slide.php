<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" >
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/slide1.jpg" class="d-block w-100" alt="..." style="height: 300px;">
    </div>
    <div class="carousel-item">
      <img src="img/slide2.jpg" class="d-block w-100" alt="..."  style="height: 300px;">
    </div>
    <div class="carousel-item">
      <img src="img/slide3.jpg" class="d-block w-100" alt="..."  style="height: 300px;">
    </div>
  </div>
</div>



<?php
include 'partials/_dbconnect.php';

$sql = "SELECT * FROM `course`  ";
  $result = mysqli_query($conn, $sql);
  
  while($row = mysqli_fetch_assoc($result)){
  
 
     
      $name= $row['name'];  
       $desc= $row['desc'];  
       echo "$name";
     
} 
  ?>


