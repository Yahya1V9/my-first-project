<?php

$conn = mysqli_connect('localhost','root','','win');


if(!$conn){
   echo die("Connection failed: " . mysqli_connect_error());
}
