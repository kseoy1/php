<?php

include '../inc/dbconfig.php';
include '../inc/member.php'; //Member Class

$mem = new Member($db);

$id = (isset($_POST['id']) && $_POST['id'] != '') ? $_POST['id'] : '';
$email = (isset($_POST['email']) && $_POST['email'] != '') ? $_POST['email'] : '';
$name = (isset($_POST['name']) && $_POST['name'] != '') ? $_POST['name'] : '';
$password = (isset($_POST['password']) && $_POST['password'] != '') ? $_POST['password'] : '';
$zipcode = (isset($_POST['zipcode']) && $_POST['zipcode'] != '') ? $_POST['zipcode'] : '';
$addr1 = (isset($_POST['addr1']) && $_POST['addr1'] != '') ? $_POST['addr1'] : '';
$addr2 = (isset($_POST['addr2']) && $_POST['addr2'] != '') ? $_POST['addr2'] : '';
$old_photo = (isset($_POST['old_photo']) && $_POST['old_photo'] != '') ? $_POST['old_photo'] : '';
$mode = (isset($_POST['mode']) && $_POST['mode'] != '') ? $_POST['mode'] : '';


//아이디 중복체크
if($mode == 'id_chk'){

    if($id == ''){
        die(json_encode(['result' => 'empty_id']));
    }

    if($mem->id_exists($id)){
        /*
        $arr = ['result' => 'fail']; //배열
        $json = json_encode($arr); //json타입 {"result":"fail"}
        die($josn);
        */
        die(json_encode(['result' => 'fail']));
    }else{
        die(json_encode(['result' => 'success']));
    }

}else if($mode == 'email_chk'){ //이메일 중복체크

    if($email == ''){
        die(json_encode(['result' => 'empty_email']));
    }

    //이메일 형식체크
    if($mem->email_format_check($email) == false){
        die(json_encode(['result' => 'email_format_wrong']));
    }

    if($mem->email_exists($email)){
        die(json_encode(['result' => 'fail']));
    }else{
        die(json_encode(['result' => 'success']));
    }

}else if($mode == 'input'){

    //profile Image 처리
    //print_r($_FILES);
    $photo = '';
    if(isset($_FILES['photo']) && $_FILES['photo']['name'] != ''){
        $tmparr = explode('.',$_FILES['photo']['name']); 
        $ext = end($tmparr); //jpg
        $photo = $id.'.'.$ext;

        copy($_FILES['photo']['tmp_name'], "../data/profile/".$photo);
    }

    $arr = [
        'id' => $id,
        'email' => $email,
        'password' => $password,
        'name' => $name,
        'zipcode' => $zipcode,
        'addr1' => $addr1,
        'addr2' => $addr2,
        'photo' => $photo
    ];

    $mem->input($arr);

    echo "
    <script>
        self.location.href='../member_success.php';
    </script>
    ";

}else if($mode == 'edit'){
    //profile Image 처리
  
    if(isset($_FILES['photo']) && $_FILES['photo']['name'] != ''){
        $new_photo = $_FILES['photo'];
        $old_photo = $mem->profile_upload($id, $new_photo, $old_photo);
    }

    session_start();

    $arr = [
        'id' => $_SESSION['ses_id'],
        'email' => $email,
        'password' => $password,
        'name' => $name,
        'zipcode' => $zipcode,
        'addr1' => $addr1,
        'addr2' => $addr2,
        'photo' => $old_photo
    ];
  
    $mem->edit($arr);

    echo "
    <script>
        alert('수정되었습니다.');
        self.location.href='../index.php'
    </script>
    ";

}

//print_r($_POST);