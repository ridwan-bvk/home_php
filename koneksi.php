<?php
$server = "localhost";
$login = "root";
$pwd ='';
$database = "toko";

$conn = mysqli_connect($server,$login,$pwd,$database);
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
};
$_POST['conn'] = $conn;
// if(!$conn){
//     echo "koneksi gagal";
// }else{
//     // echo ("sukses");
// };
?>