<?php
  header("Access-Control-Allow-Origin: *");

  $member1 = array("name" => "ㄴㅇㄹㄴ", "height" => "173cm", "weight" => "55kg");
  $member2 = array("name" => "양현석", "height" => "180cm", "weight" => "70kg");
  $member3 = array("name" => "이주노", "height" => "172cm", "weight" => "53kg");

  // 3명의 정보를 memberData변수에 저장
  $memberData = array($member1, $member2, $member3);

  // 3명의 데이터가 JSON Array 문자열로 변환됨
  $output = json_encode($memberData);

  // 출력
  echo $output;
?>
