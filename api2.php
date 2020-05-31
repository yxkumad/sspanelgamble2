<?php
/////////////////////////////////
//--     Venux API Script - Modified by Aggron    --//
/////////////////////////////////
ignore_user_abort(true);
set_time_limit(0);
/////////////////////////////////////////
//-- Gets the value of each variable --//
/////////////////////////////////////////
$key = $_GET['key'];
$id = intval($_GET['id']);
$value = intval($_GET['value']);

///////////////////////////////////////////////////
//-- array of implemented method as a variable --//
///////////////////////////////////////////////////
$array = array("increase", "decrease");// Add you're existing methods here, and delete you're none existent methods.
$ray = array("APIKEY");
 
////////////////////////////////////////
//-- Checks if the API key is empty --//
////////////////////////////////////////
if (!empty($key)){
}else{
die('Error: API key is empty!');}
 
//////////////////////////////////////////
//-- Checks if the API key is correct --//
//////////////////////////////////////////
if (in_array($key, $ray)){ //Change "key" to what ever yo want you're API key to be.
}else{
die('Error: Incorrect API key!');}
 
/////////////////////////////////
//-- Checks if id is empty --//
/////////////////////////////////
if (!empty($id)){
}else{
die('Error: Telegram ID is empty!');}
 

///////////////////////////////////
//-- Checks if change is empty --//
///////////////////////////////////
if (!empty($value)){
}else{
die('Error: Value is empty!');}
 
////////////////////////////////////
//-- Convert value for Telegram --//
////////////////////////////////////
if ($value == 1){
$change=rand(20000,50000);
$method == "decrease";
$chimethod = "赢取";
}else if ($value == 2){
$change=rand(10000,20000);
$method == "decrease";
$chimethod = "赢取";
}else if ($value == 3){
$change=rand(0,100);
$method == "increase";
}else if ($value == 4){
$change=rand(100,1000);
$method == "increase";
$chimethod = "赢取";
}else if ($value == 5){
$change=rand(1000,5000);
$method == "increase";
$chimethod = "赢取";
}else if ($value == 6){
$change=rand(5000,20000);
$method == "increase";
$chimethod = "赢取";
}else{
die('Error: The value you sent does not exist!');}

//////////////////////////////////////////////////////////////////////////////
//--                        You're attack methods                         --//
//-- Make sure the command is formatted correctly for each method you add --//
//////////////////////////////////////////////////////////////////////////////
if ($method == "increase") { 
$conn=mysqli_connect("localhost","root","root_password","database_name");
mysqli_query( $conn, "SET NAMES 'utf8'"); 
$sql = "UPDATE user SET transfer_enable=transfer_enable+$change*1024*1024 WHERE telegram_id = $id";
$result = mysqli_query($conn, $sql);
 }
if ($method == "decrease") { 
$conn=mysqli_connect("localhost","root","root_password","database_name");
mysqli_query( $conn, "SET NAMES 'utf8'"); 
$sql = "UPDATE user SET transfer_enable=transfer_enable-$change*1024*1024 WHERE telegram_id = $id";
$result = mysqli_query($conn, $sql); 
}

////////////////////////////////////////////////////////////////////////////
//-- Tries to execute the attack with the requested method and settings --//
////////////////////////////////////////////////////////////////////////////   
$data = array('Method' => $chimethod,'TelegramID'=> $id, 'Value' => $change);
header('Content-type: text/javascript');
echo json_encode($data);

        
    

?>
