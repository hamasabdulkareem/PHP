<?php
$x = "71157809";
$arr = str_split($x);
echo $x ;
echo "<br>".array_sum($arr)."<br>";
?>
<?php
$array = array(0, 150, 30, 20, -8, -200, 9090, -500);
echo(min($array)."<br>");
echo(max($array)."<br>");
?>
<?php
$a=array(1,3,4,1,1,6,6,8,4,2,3,4,8,0,9,5,4,1,0);
$z=array_unique($a);
foreach($z as $in){
echo $in . "<br>";
}
//print_r($z);
?>
<?php  
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://"; 
         echo "<br>".$url;  
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    echo "<br>".$url;
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
     
    echo "<br> The URL of current page:  ".$url;  
  ?> 
  
  <?php
  foreach($_POST['subject'] as $in){
    echo "<br>"."You Selected ".$in . "<br>";
    }
  ?>

  <?php/*
  $conn=mysqli_connect("localhost","root","","db-name");
  $data=mysqli_query($conn,"select * from Users");
  while($row=mysqli_fetch_array($data)){
      echo $row['ID']."  ".$row['First Name']."  ".$row['Username']."  ".$row['Password'];
  }
  
  
  
  ?>
<?php  /*
$protocol = ((!emptyempty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";  
$CurPageURL = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];  
echo "<br>The URL of current page: ".$CurPageURL;  
*/?>  