<?php

$g_title = '회원가입을 축하드립니다';
$js_array = ['js/member_success.js'];

$menu_code = 'member'; //menu active

include 'inc_header.php';

?>

<main class="w-75 mx-auto border rounded-5 p-5 d-flex gap-5" style="height: calc(100vh - 257px)">
    <img src="images/logo.svg" class="w-50" alt="">
    <div>
        <h3>회원 가입을 축하드립니다.</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Iure velit minus vitae, aspernatur nemo doloremque ab doloribus quod
        libero nostrum ea quas accusantium nam vero quo quasi omnis tempore. Alias!</p>
        <button class="btn btn-primary" id="btn_login">로그인 하기</button>
    </div>
</main>

<?php
include 'inc_footer.php';
?>
