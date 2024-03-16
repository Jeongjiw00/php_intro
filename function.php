<!-- 기본적으로다른 언어들과 사용법이 같음, 함수 정의 -->
<!-- <?php
  function 함수명([인자],...[,인자]){
       코드
       return 반환값;
  }
?> -->

<!-- 반복문과 조건문 사용법 동일, 결과값 0-9 -->
<?php
function numbering(){
    $i = 0;
    while ($i < 10) {
        echo $i."<br>";
        $i += 1;
    }
}
numbering();
?>

<!-- return 이후에는 어떤 코드도 실행 안 함, 결과값 sum = 25 -->
<?php
function returnSum(){
  $sum = 0;
  for($i = 1; $i <= 10; $i=$i+2){
      $sum += $i;
  }
  return "sum=".$sum."<br>";
}
echo returnSum();
?>

<!-- 이 인자는 함수 안에서만 지역(Local)변수로 사용됩니다. -->
<!-- global키워드로 접근하는 방식은 권장하지 않음 -->
<?php
function arg($a){
  return $a;
}
echo arg("Hi Argument:)");
?>

<!-- php에서도 Javascript, C++, Python처럼 함수 인자에 초기값을 줄 수 있습니다. -->
<!-- 결과 HiHi, 100 -->
<?php
function arg($aa=100){
  return $aa;
}
echo arg("HiHi");
echo arg();
?>