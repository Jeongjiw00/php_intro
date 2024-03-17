 <!-- <?php
 echo 1;?><br> //1
 
 <?php
 echo 1+1;?><br>   //2
 
 <?php
 echo 10*10;?><br> //100
 
 <?php
 echo 6/2;?>  // 3 

 <?php 
 var_dump(3) // int(3)
 ?>

 <?php 
 var_dump("3") // string(1) "3"
 ?> -->

 <!-- <?php
 echo "He thought 'maybe'.";
 echo ' He said "hello".';
 ?>

 <?php
 echo "He said \"hello\".";
 ?> -->


  <!-- <?php
  $name = " jy";
  echo "1. Hi".$name;
  echo "2. Hi.$name";
  echo '3. Hi.$name';
  ?>
  // 1. Hi jy2. Hi. jy3. Hi.$name  -->

 <!-- <?php
 $c = "This is";
 echo $c." PHP";
 ?>
 // This is PHP  -->

 <!-- <?php
  $d = "HI<br>";
  $d.= "안녕<br>";
  $d.= "Bonjour<br>";
  echo $d;
 ?> -->

  <!-- 
  HI
  안녕
  Bonjour 
  -->

  <!-- <?php
  $a = 123;
  $b = 0x1A; //16진수
  $c = 0123; //8진수

  echo "<br>$a";
  echo "<br>$b";
  echo "<br>$c";
  ?> -->

  <!-- 
  123
  26
  83 -->

 <!-- <?php
  $a = "5";
  echo gettype($a); // string
  settype($a,'int');
  echo gettype($a); // integer
 ?>  -->


<!-- <?php
 $aaa = "Hello";
 $$aaa = "World";
 echo "$aaa    <br>";
 echo "${$aaa} <br>";
 echo "$Hello  <br>";
 echo "$aaa ${$aaa}";
 ?> -->

<!-- Hello
World
World
Hello World -->