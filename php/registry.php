<?php
require 'mysqlconnector.php';


$connector = new MysqlConnector('localhost', 'Online Wallet', 'user');

if(empty($_GET['mode'])){
  $mode = '';
}else{
  $mode = $_GET['mode'];
}

if($mode == 'add'){
    $user_id = $_POST['user_id']; // Diese Zeile ändern anstatt $user_id = $SESSION['user_id]
    $wasser = $_POST['input_water'];
    $type = $_POST['type'];
    $connector->insert_water_consum($wasser, $type, $user_id);
}
?>

<html>
<body>
  <form action="insert_water.php?mode=add" method="POST">
    User<input name="user_id"></br>
    Wasser<input name="input_water"></br>
    Type<input name="type"></br>
    <input type="submit"></br>
  </form>
</body>
</html>
