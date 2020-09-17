
  <?php
  $conn=mysqli_connect("localhost","root","","db-name");
  $data=mysqli_query($conn,"select * from Users");
  while($row=mysqli_fetch_array($data)){
      echo $row['ID']."  ".$row['First Name']."  ".$row['Username']."  ".$row['Password'];
  }
 
  ?>
 