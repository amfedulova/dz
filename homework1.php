<?
    echo "<h4>Задание 1<h4/>";
$name="Анна Федулова";
$age="27";
echo "Меня зовут $name <br/>";
echo "Мне $age <br/>";
echo '“!|\/’”\\<br/>';
    echo "<h4>Задание 2<h4/>";
$a=80;
$b=23;
$c=40;
$d=$a-$b-$c;
echo "$d рисунков выполнено красками<br/>";
    echo "<h4>Задание 3<h4/>";
define ("TWENTY", 20, true);
if (defined("TWENTY")==true) echo "Константа TWENTY объявлена<br/>";
echo 'TWENTY=', TWENTY, '<br/>' ;
define ("TWENTY", двадцать);
echo 'TWENTY=', TWENTY, '<br/>' ;
    echo "<h4>Задание 4<h4/>";
$age=0;
if     ($age>=18 and $age<=65 ) {
    echo "Вам   еще работать   и   работать<br/>";
}elseif($age>65 ) {
    echo "Вам   пора   на   пенсию<br/>";
}elseif($age>=1 and $age<=17 ) {
    echo "Вам   ещё   рано   работать<br/>";
}else{
    echo "Неизвестный   возраст<br/>";}
    echo "<h4>Задание 5<h4/>";
$day=6;
switch ($day){
    case 1: echo "Это   рабочий   день";
        break;
    case 2: echo "Это   рабочий   день";
        break;
    case 3: echo "Это   рабочий   день";
        break;
    case 4: echo "Это   рабочий   день";
        break;
    case 5: echo "Это   рабочий   день";
        break;
    case 6: echo "Это   выходной   день";
        break;
    case 7: echo "Это   выходной   день";
        break;
    default : echo "Неизвестный день";
        break;
}
echo "<h4>Задание 6<h4/>";
$bmw=array(
    "model"=>"X5",
    "speed"=>"120",
    "doors"=>"5",
    "year"=>"2015");
$toyota=array(
    "model"=>"i5",
    "speed"=>"150",
    "doors"=>"4",
    "year"=>"2016");
$opel=array(
    "model"=>"i3",
    "speed"=>"100",
    "doors"=>"3",
    "year"=>"2013");
$cars=array(
    "bmw"=>array(
    "model"=>"X5",
    "speed"=>"120",
    "doors"=>"5",
    "year"=>"2015"),
        "toyota"=>Array(
        "model"=>"i5",
        "speed"=>"150",
        "doors"=>"4",
        "year"=>"2016"),
            "opel"=>Array(
            "model"=>"i3",
            "speed"=>"100",
            "doors"=>"3",
            "year"=>"2013"),
);
foreach ($cars as $base_key=>$base_value){
    echo "CAR $base_key</br> ";
        foreach ($base_value as $key=>$value){
            echo "<td> $value </td>";
    }
    echo "</br>";
}
echo "<h4>Задание 7<h4/>";
echo '<table border="1">';
for ($i=1; $i<=10; $i++){
    echo '<tr>';
    for ($j=1; $j<=10; $j++) {
        $r = $i * $j;
        if($r%2==0) echo "<td>($r)</td>";
        elseif($r%3==0) echo "<td>[$r]</td>";
        elseif($r%5==0) echo "<td>[$r]</td>";
        elseif($r%7==0) echo "<td>[$r]</td>";
        else echo "<td>$r</td>";
    }
    echo '</tr>';
}
echo "</table>";
echo "<h4>Задание 8<h4/>";
$str="green red blue yellow </br>";
echo $str;
$arr=explode(" ", $str);
echo "<pre>";
print_r($arr);
echo "</pre>";
$hi=count($arr);
while (--$hi>=0){
   $str1[]=$arr[$hi];
}
$str2=implode(",",$str1);
echo $str2;
/**
 * Created by PhpStorm.
 * User: Анна
 * Date: 04.08.2016
 * Time: 23:15
 */

