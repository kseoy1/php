
<?php 

$js_array = ['js/member.js'];

$g_title = '약관';

$menu_code = 'member';

include 'inc_header.php';

?>

    <main class="p-5 border rounded-5">
        <h1 class="text-center">회원 약관 및 개인정보 취급방침 동의</h1>
        <h4>회원 약관</h4>
        <textarea name="" id="" cols="30" rows="10" class="form-control">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum sit animi unde ipsam odio asperiores libero, sunt natus numquam! Laborum eveniet et asperiores. Libero recusandae rerum amet similique? Atque obcaecati ullam iste accusamus eum, a consectetur sint, amet tempore porro id. Quae, maxime aliquam quidem quos sequi laudantium ex distinctio, eveniet nulla molestiae eligendi placeat adipisci quod commodi, nobis porro in voluptate aliquid consectetur cupiditate sed nisi doloribus! Laudantium ipsam non ut incidunt blanditiis ipsa eaque nemo quam eos corrupti rerum voluptates ex assumenda ea a, obcaecati provident harum eum magnam reprehenderit. Blanditiis quae beatae ad pariatur ullam sequi eos voluptate numquam ratione distinctio cumque aspernatur corrupti magnam culpa vero rerum quisquam esse officiis, odio et quo expedita fugit! Officiis autem id corporis facilis voluptatum illum doloremque saepe vel adipisci quae? Laboriosam repudiandae ratione error dolores ut? Magnam, eaque ullam impedit iusto ex cum voluptatibus. Nam, velit. Porro, iste nesciunt debitis iusto obcaecati fuga soluta asperiores vel maiores assumenda repellendus enim, vero, explicabo hic cumque laboriosam quasi! Corporis recusandae laudantium commodi, qui in magnam aspernatur officiis rem necessitatibus sequi laborum tempora atque architecto rerum deserunt eveniet nobis minus consequatur. Repellendus, nisi tempore at quia quisquam dolorem! Enim molestiae quis, blanditiis impedit odio expedita quae, alias incidunt aspernatur dicta labore dolor distinctio eius! Consequuntur molestiae sequi ea sint voluptas fugiat, voluptatem et eaque fuga deleniti tempora vitae minus sapiente totam? Vel natus nisi iste reiciendis illo doloribus consequatur temporibus nulla autem velit ab saepe provident, similique neque sunt qui impedit ducimus. Iusto cumque minima delectus. Hic, aliquam. Nam laboriosam quo commodi, sequi quia hic quos vel adipisci doloremque ipsa repudiandae deleniti repellat, delectus quae perferendis tempore sit aliquam inventore eos cumque velit sed vitae earum consectetur. Architecto at omnis officia nemo ex obcaecati culpa cum magnam cumque, sapiente voluptate odit incidunt.
        </textarea>

        <div class="form-check mt-2">
            <input class="form-check-input" type="checkbox" value="1" id="chk_member1">
            <label class="form-check-label" for="chk_member1">
                위 약관에 동의하시겠습니까?
            </label>
        </div>

        <h4 class="mt-3">개인정보 취급방침</h4>
        <textarea name="" id="" cols="30" rows="10" class="form-control">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia at consequatur quasi inventore odit, illo in unde tempora reprehenderit nisi assumenda maxime dolor sapiente cumque neque vel quo dicta laborum sint aut reiciendis? Odit at eveniet ex repellat nulla aliquid atque. Deserunt soluta, adipisci cumque quidem, nobis libero labore est culpa dignissimos officia asperiores exercitationem quia ratione praesentium! Sit laborum accusantium adipisci accusamus corporis voluptatem similique nihil culpa fuga, soluta praesentium magni impedit eligendi ducimus incidunt, ratione facilis. Voluptatibus porro sapiente molestiae incidunt excepturi, facere sint quas accusantium dicta. Amet repellendus, natus quia assumenda non beatae id recusandae numquam fugiat, est odio magnam ratione doloremque nostrum obcaecati eius placeat quo cum? Molestiae nobis dolorem ab in, ex aperiam vitae placeat qui nesciunt, quaerat deleniti. Laudantium officia voluptates, itaque quo ipsam ducimus dignissimos facilis, voluptas natus esse in, velit delectus? Dolor quam suscipit blanditiis adipisci optio ducimus nam ad quis id facilis harum porro iste assumenda ut aspernatur provident necessitatibus qui, obcaecati ratione vero aperiam enim. In sint eos totam earum aliquid ut numquam, facilis deleniti quas aperiam ipsum consectetur ducimus eius quae obcaecati voluptate iure architecto id unde repellat fuga fugiat? Quae eligendi, hic nam labore cumque, autem numquam ut error aliquid sit libero tempore ipsam consectetur consequatur. Reprehenderit ipsum libero voluptatem nesciunt ducimus suscipit voluptates ex at quibusdam commodi, blanditiis qui, corporis accusamus rem iure hic dolor. Modi eveniet cumque vitae laborum ullam iusto? Pariatur illo, ipsa unde sed quasi hic voluptas cupiditate odit, id aspernatur obcaecati incidunt consectetur autem laborum neque. Illum, cumque. Error a expedita molestias tenetur, reiciendis nam deserunt explicabo magnam ex quam atque consectetur, distinctio debitis velit sapiente recusandae pariatur est aperiam necessitatibus. In aut aspernatur quia ipsam consequatur maiores quod obcaecati dolor dignissimos ut! Placeat rem incidunt nulla blanditiis doloremque optio cumque, modi iure.
        </textarea>

        <div class="form-check mt-2">
            <input class="form-check-input" type="checkbox" value="1" id="chk_member2">
            <label class="form-check-label" for="chk_member2">
                위 개인정보 취급방침에 동의하시겠습니까?
            </label>
        </div>

        <div class="mt-4 d-flex justify-content-center gap-2">
            <button class="btn btn-primary w-50" id="btn_member">회원가입</button>
            <button class="btn btn-secondary w-50">가입취소</button>
        </div>

        <form method="post" name="stipulation_form" action="member_input.php" style="display: none;">
            <input type="hidden" name="chk" value="0"> 
        </form>

    </main>

<?php include 'inc_footer.php';?>
