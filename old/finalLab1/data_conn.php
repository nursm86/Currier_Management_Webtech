<?php
    $servername = "localhost";
    $username = "root";
    $pass = "";
    $dbname = "lab";

    function execute($query){
        $conn = mysqli_connect($servername,$username,$pass,$dbname);
        global $servername,$username,$pass,$dbname;
        $result = mysqli_query($conn, $query);
    }

    function getResult($query){
        $conn = mysqli_connect($servername,$username,$pass,$dbname);
        global $servername,$username,$pass,$dbname;
        $result = mysqli_query($conn, $query);
        return $result;
    }

    function getArray($query){
        $conn = mysqli_connect($servername,$username,$pass,$dbname);
        global $servername,$username,$pass,$dbname;
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result)<2){
            return mysqli_fetch_assoc($result);
        }
        $data = array();
        while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }
        return $data;
    }
?>