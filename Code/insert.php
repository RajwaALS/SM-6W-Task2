<?php

header( "refresh:3;url=try.html" );
include "dbConn.php"; // Using database connection file here
if(isset($_POST['button1']))
{

  $sql = "INSERT INTO choice (rightt, leftt, forward, backward, stop) values ('R', '-', '-', '-', '-')";
  $query_run = mysqli_query($db, $sql);



    if($query_run)
    {
    echo '<script type="text/javascript"> alert ("Data Saved") </script>';
    }
    else
    {
        echo '<script type="text/javascript"> alert ("Data Not Saved") </script>';
    }
}

if(isset($_POST['button2']))
{

  $sql = "INSERT INTO choice (rightt, leftt, forward, backward, stop) values ('-', 'L', '-', '-', '-')";
  $query_run = mysqli_query($db, $sql);



  if($query_run)
  {
  echo '<script type="text/javascript"> alert ("Data Saved") </script>';
  }
  else
  {
      echo '<script type="text/javascript"> alert ("Data Not Saved") </script>';
  }
}
if(isset($_POST['button3']))
{

  $sql = "INSERT INTO choice (rightt, leftt, forward, backward, stop) values ('-', '-', 'F', '-', '-')";
  $query_run = mysqli_query($db, $sql);



  if($query_run)
  {
  echo '<script type="text/javascript"> alert ("Data Saved") </script>';
  }
  else
  {
      echo '<script type="text/javascript"> alert ("Data Not Saved") </script>';
  }
}

if(isset($_POST['button4']))
{

  $sql = "INSERT INTO choice (rightt, leftt, forward, backward, stop) values ('-', '-', '-', 'B', '-')";
  $query_run = mysqli_query($db, $sql);



  if($query_run)
  {
  echo '<script type="text/javascript"> alert ("Data Saved") </script>';
  }
  else
  {
      echo '<script type="text/javascript"> alert ("Data Not Saved") </script>';
  }
}

if(isset($_POST['button5']))
{

  $sql = "INSERT INTO choice (rightt, leftt, forward, backward, stop) values ('-', '-', '-', '-', 'S')";
  $query_run = mysqli_query($db, $sql);



  if($query_run)
  {
  echo '<script type="text/javascript"> alert ("Data Saved") </script>';
  }
  else
  {
      echo '<script type="text/javascript"> alert ("Data Not Saved") </script>';
  }
}

?>
