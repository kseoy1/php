<?php

//db연결
include 'inc/dbconfig.php';
include 'inc/member.php';

//아이디 중복 테스트
$id = 'hong';

$mem = new Member($db);

if($mem->id_exists($id)){
    echo "아이디가 중복됩니다.";
}else{
    echo "시용 할 수 있는 아이디입니다. ";
}

//이메일 중복 테스트
$email = 'hoho1@naver.com';

$mem = new Member($db);

if($mem->email_exists($email)){
    echo "이메일이 중복됩니다.";
}else{
    echo "시용 할 수 있는 이메일입니다. ";
}

//이메일 형식 테스트
$em = 'ddd';

$rs = filter_var($em, FILTER_VALIDATE_EMAIL);

echo var_dump($rs); //맞으면 이메일 리턴 , 틀리면 false 리턴