<!-- 헤더 메시지는 본격적으로 데이터를 주고 받기 전에 보내는 사전 작업 -->
<!-- HTML 코드 등의 데이터를 전송한 다음에 헤더 메시지를 보내게 되면 상호간에 오류 -->

<!-- 페이지 이동 -->
<?php
header('Location : http://naver.com');
?>

<!-- 일정시간 후에 페이지 이동 -->
<?php
sleep(5);
header('Location : http://naver.com');
?>