<?php
$people = array('Taro', 'Jiro', 'Saburo');
var_dump($people);
echo $people[0];
echo"<br/>";
echo"<br/>";

$people = [
    ["Taro", 25 , "men"],
    ["Jiro", 20, "men"],
    ["hanako", 16, "women"]
];
foreach($people as $person){
    echo $person[0]."(".$person[1]."歳".$person[2].")"."<br/>";
}

echo 10;