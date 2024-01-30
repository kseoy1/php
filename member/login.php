<?php

$g_title = '로그인';
$js_array = ['js/login.js'];

$menu_code = 'login'; //menu active

include 'inc_header.php';

?>

<main class="mx-auto border rounded-3 p-5 d-flex gap-5" style="height: calc(100vh - 257px)">
    <form method="post" class="w-25 mt-5 m-auto" action="">
        <img src="./images/logo.svg" width="72" alt="">
        <h1 class="h3 mb-3">로그인</h1>
        <div class="form-floating mt-2">
            <input type="text" class="form-control" id="f_id" placeholder="아이디" autocapitalize="off">
            <label for="f_id">아이디</label>
        </div>
        <div class="form-floating mt-2">
            <input type="password" class="form-control" id="f_pw" placeholder="비밀번호">
            <label for="f_pw">비밀번호</label>
        </div>
        <button class="w-100 mt-2 btn-lg btn btn-primary" id="btn_login" type="button">확인</button>
    </form>
</main>

<?php
include 'inc_footer.php';
?>
