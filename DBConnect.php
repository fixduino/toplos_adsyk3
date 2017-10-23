<?php
// $host="localhost";
// $user="root";
// $password="samporan";
// $database="adisucipto";

// $item_per_page = 10;
// $connecDB = mysqli_connect($host, $user, $password,$database)or die('could not connect to database'); //for pagination
// $connecDB = mysqli_connect($host, $user, $password,$database));

// ini_set('display_errors',FALSE);
// $koneksi=mysql_connect($host,$user,$password);
// mysql_select_db($database,$koneksi);
// //cek koneksi
// if($koneksi){
// 	echo "berhasil koneksi";
// }else{
// 	echo "gagal koneksi";
// }

// $servername = "localhost";
// $username = "root";
// $password = "samporan";

// try {
//     $dbh = new PDO("mysql:host=$servername;dbname=adisucipto", $username, $password);
//     // set the PDO error mode to exception
// 	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// 	$test = $dbh->prepare("SELECT * FROM tb_tank ORDER BY id ASC");
// 	$test->execute();
// 	// echo "Connected successfully";
// 	// set the resulting array to associative
//     $result = $test->setFetchMode(PDO::FETCH_ASSOC); 

//     }
// catch(PDOException $e)
//     {
//     echo "Connection failed: " . $e->getMessage();
// 	}


// 	$conn = null;

class DBConnect {

    var $DBH;
    var $host = 'localhost';
    var $dbname = 'adisucipto';
    var $user = 'root';
    var $password = '';

    public function connect() {
        try {
            $this->DBH = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
            $this->DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function disconnect() {
        $this->DBH = null;
    }

}




?>