<?php
$people = array('Taro', 'Jiro', 'Saburo');

var_dump($people);
echo $people[0];


$people = array(
  'person1' => 'Taro',
  'person2'  => 'Jiro',
  'person3'  => 'Saburo'
);

var_dump($people);
echo"<br/>";
echo"<br/>";

$people = [
  [
    "last_name" => "山田",
    "first_name" => "太郎",
    "age" => 29,
    "gender" => "男性"
  ],
  [
    "last_name" => "鈴木",
    "first_name" => "次郎",
    "age" => 25,
    "gender" => "男性"
  ],
  [
    "last_name" => "佐藤",
    "first_name" => "花子",
    "age" => 20,
    "gender" => "女性"
  ]
];
echo $people[0]["last_name"];

echo"<br/>";
echo"<br/>";

$people =array('Taro', 'Jiro', 'Saburo');

foreach ($people as $person) {
echo $person;
echo '<br />';
}
echo"<br/>";
echo"<br/>";

$name = "Tanaka";
$last_name = "Yamada";
$first_name = "Sabro";
echo $name."Jiro";
echo "<br />";
echo $last_name. $first_name;

