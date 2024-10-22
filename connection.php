<?php

// beberapa variable yang penting ada di connection

$hostname = 'localhost';
$user = 'root';
$password ='';
$db_name = 'db_warga' ;

//global variable connection
$connection = mysqli_connect($hostname,$user,$password,$db_name);

// var_dump($connection);

// mengambil data (fetching)
// mysql1_fetch_rowfetch_assoc(() ini yang biasa dipakai
// mwsqli_fetch_assoc()

// mysqli_fetch_ array() kemingkinan data double
//mysqli_ fetch_object() ini yang bniasa dipakai




function myquery($query){
    global $connection;
$res = mysqli_query($connection, $query);
$returns=[];

while( $data = mysqli_fetch_assoc($res) ){
    $returns[] = $data;
}
return $returns;

}



?>