
<?php

$sql_s = 'SELECT * FROM winer ORDER BY RAND() LIMIT 1';
$result = mysqli_query($conn,$sql_s);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
//ORDER BY RAND() LIMIT 1 ' ;