<?php

session_start();

$ses_id = (isset($_SESSION['ses_id']) && $_SESSION['ses_id'] != '') ? $_SESSION['ses_id'] : '';
$ses_level = (isset($_SESSION['ses_level']) && $_SESSION['ses_level'] != '') ? $_SESSION['ses_level'] : '';

$g_title = '';
$js_array = ['js/home.js'];

$menu_code = 'home'; //menu active

include 'inc_header.php';

?>

<main class="w-75 mx-auto border rounded-5 p-5 d-flex gap-5" style="height: calc(100vh - 257px)">
    <img src="images/logo.svg" class="w-50" alt="">
    <div><?php
$g_title = '';
$js_array = ['js/home.js'];

$menu_code = 'home';

include 'inc/common.php';
include 'inc/dbconfig.php';
include 'inc/popup.php';

//게시판 목록
include 'inc/boardmanage.php';
$boardm = new BoardManage($db);
$boardArr = $boardm->list();

//팝업
$popup = new Popup($db);
$popupArr = $popup->valid_list();

include 'inc_header.php';

?>
<style>
    .close{
        width: 11px; height: 11px; background-color: white; margin-top: 7px; margin-right: 7px;
        clip-path: polygon(20% 0%, 0% 20%, 30% 50%, 0% 80%, 20% 100%, 50% 70%, 80% 100%, 100% 80%, 70% 50%, 100% 20%, 80% 0%, 50% 30%);
    }
</style>
<?php
  foreach($popupArr AS $popupRow){
    
    if(isset($_COOKIE['pop'. $popupRow['idx']]) && $_COOKIE['pop' . $popupRow['idx']] == '1'){
        continue;
    }

    list($img_src, ) = explode('|', $popupRow['file']);
    $img_src = './data/popup/'. $img_src;
    
    switch($popupRow['cookie']){
      case 'day' : $cookie_msg = '하루 동안'; break;
      case 'week' : $cookie_msg = '1주일 동안'; break;
      case 'month' : $cookie_msg = '한 달 동안'; break;
    }
?>

<style>
    #pop<?php echo $popupRow['idx']; ?> {
        border: 1px solid #999; position: absolute; left: <?php echo $popupRow['pop_x']; ?>px; top: <?php echo $popupRow['pop_y']; ?>px; z-index: 1000;
        display: block;
    }
</style>

<div id="pop<?php echo $popupRow['idx']; ?>">
    <img src="<?php echo $img_src; ?>" alt="">  
    <div class="d-flex gap-2 bg-dark text-white">
        <input type="checkbox" name="chk" value="<?php echo $popupRow['cookie']; ?>" data-idx="<?php echo $popupRow['idx']; ?>" class="ms-auto chk_close">
        <span id="cookie_term"><?php echo $cookie_msg; ?> 이 창을 다시 열지 않음</span>
        <span class="close"></span>
    </div>
</div>
<?php
  }
?>

<script>
    function setCookie(name, value, exp){
        let data = new Date();
        data.setTime(data.getTime() + exp * 24 * 60 * 60 * 1000);
        document.cookie = name + '=' + value + ';expires=' + data.toUTCString() + ';path=/';
    } 

    const closes = document.querySelectorAll(".close");

    closes.forEach((box) => {
        box.addEventListener("click", () => {
        box.parentNode.parentNode.style.display = 'none';
        })
    })

    const chk_closes = document.querySelectorAll('.chk_close');

    chk_closes.forEach((box) => {
        
        box.addEventListener("click", () => {
            let term = 0;

            switch(box.value){
                case 'day' : term = 1; break;
                case 'week' : term = 7; break;
                case 'month' : term = 30; break;
            }
            setCookie('pop' + box.dataset.idx, '1', term);
            box.parentNode.parentNode.style.display = 'none';
        })
    })
</script>

<main class="w-75 mx-auto border rounded-5 p-5 d-flex gap-5" style="height: calc(100vh - 257px)">
    <img src="images/logo.svg" class="w-50" alt="">
    <div>
        <h3>Home 입니다.</h3>
    </div>
</main>

<?php
include 'inc_footer.php';

?>
        <h3>HOME 입니다.</h3>
    </div>
</main>

<?php
include 'inc_footer.php';
?>
