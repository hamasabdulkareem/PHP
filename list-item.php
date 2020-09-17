<?php
   $sub = $_POST['subject'];
   if($sub!=0){
  foreach($_POST['subject'] as $in){
    echo "<br>"."You Selected ".$in . "<br>";
    }}
    else
    {
        echo "You don't Selected subject";
    }
    ?>