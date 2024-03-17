<!-- 배열 선언하기  -->
<?php
$subject = Array("Programming", "Math");
?>
<!-- 또는 -->
<?php
$subject = ["Programming", "Math"];
$subject[0]; //Programming
?>

<!-- 함수에서 배열 사용 -->
<?php
function get_subject(){
  return ["Programming", "Math"];
}
$tmp = get_subject();
echo $tmp[1]; // Math
// 함수에 바로 index를 붙이는건 PHP 5.4v 이후부터 지원
echo get_subject()[1];
?>

<!-- 반복문과 같이 사용 -->
<!-- php에서 length가 count -->
<?php
$subjects = get_subject(); 
for($i=0; $i< count($subjects); $i++){
    echo ($subjects[$i]).'<br>';
}
?>

<!-- 배열에 값 추가와 삭제 1 - 앞에서 -->
<?php
$subject = ["Programming", "Math"];

array_unshift($subject, "English");
var_dump($subject); // array(3) { [0]=> string(7) "English" [1]=> string(11) "Programming" [2]=> string(4) "Math" }

array_shift($subject);
print_r($subject); // Array ( [0] => Programming [1] => Math )
?>

<!-- 배열에 값 추가와 삭제 2 - 뒤에서 -->
<?php
$fruits = array("apple", "banana");

array_push($fruits, "orange", "grape");
print_r($fruits);

$lastFruit = array_pop($fruits);

echo $lastFruit; // "banana"
print_r($fruits); // Array ( [0] => apple )
?>

<!--  배열 정렬 -->
<?php  
$fruits = array("lemon", "orange", "banana", "apple");

sort($fruits); // 오름차순
print_r($fruits); // Array ( [0] => apple [1] => banana [2] => lemon [3] => orange )
rsort($fruits); // 내림차순
print_r($fruits); // Array ( [0] => orange [1] => lemon [2] => banana [3] => apple )
?>

<!-- 연관 배열 (Associative Array) -  index로 문자를 사용 -->
<?php
//첫번째 방법
$grades1 = array('c++' => 100, 'java' => 95 );

//두번째 방법
$grades2 = [];
$grades2['c++'] = 100;
$grades2['java'] = 95;

$grades1['c++']; // 100
?>

<!-- 연관 배열에서 반복문 사용은 foreach문 사용 -->
<?php
function printArray_A($arr){
  foreach($arr as $key=>$value){
      echo $key.":".$value."<br>";
  }
}

printArray_A($grades1);
// c++:100
// java:95
printArray_A($grades2);
// c++:100
// java:95
?>