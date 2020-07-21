<?php
include "insert.php";


if(isset($_POST['button1']))
{
  $sqll = "SELECT rightt FROM choice ORDER BY id DESC LIMIT 1";
  if($result = mysqli_query($db, $sqll)){
  $row = mysqli_fetch_row($result);
    echo $row[0];
   }
 }

else if (isset($_POST['button2']))
{
    $sqll = "SELECT leftt FROM choice ORDER BY id DESC LIMIT 1";
    if ($result = mysqli_query($db, $sqll)) {
    $row = mysqli_fetch_row($result);
    echo $row[0];
  }
}
else if (isset($_POST['button3']))
{
  $sqll = "SELECT forward FROM choice ORDER BY id DESC LIMIT 1";
  if($result = mysqli_query($db, $sqll)){
  $row = mysqli_fetch_row($result);
  echo $row[0];
  }
}
else if (isset($_POST['button4']))
{
  $sqll = "SELECT backward FROM choice ORDER BY id DESC LIMIT 1";
  if($result = mysqli_query($db, $sqll)){
  $row = mysqli_fetch_row($result);
  echo $row[0];
  }
}
else if (isset($_POST['button5']))
{
    $sqll = "SELECT stop FROM choice ORDER BY id DESC LIMIT 1";
    if($result = mysqli_query($db, $sqll)){
    $row = mysqli_fetch_row($result);
    echo $row[0];
  }
}




 ?>
