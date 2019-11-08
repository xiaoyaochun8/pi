<?php

$mysqli = new mysqli('localhost','root','123456','mydb');
if($mysqli->connect_errno){
    echo 'connect error!';
    exit;
}

$insSql = 'insert into mytable values(1,"abc")';
if(!$result = $mysqli->query($insSql)){
    echo 'query error!';
    exit;
}

$sql = 'select * from mytable';
if(!$result = $mysqli->query($sql)){
    echo 'select error!';
    exit;
}

if($result->num_rows === 0){
    echo 'empty set';
    exit;
}

while($row = $result->fetch_assoc()){
    echo 'id: '.$row['id'].' ,   name: '.$row['name']."\n";
    var_dump($row);
}

$result->free();
$mysqli->close();
