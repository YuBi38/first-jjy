<?php 

$js_array = [ 'js/member.js'];

$g_title = '약관';

include 'inc_header.php' ; 


?>

                <main class="p-5 border rounded-5">
                <h1 class="text-center mt-5">회원 약관 및 개인정보 취급 방침 동의</h1>
                <h4>회원 약관</h4>
                <textarea name="" id="" cols="30" rows="10" class="form-control">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum laudantium fugiat error incidunt distinctio. Quam itaque nobis dolorum nulla ipsum nisi minima, deleniti consequatur, expedita eveniet qui facilis recusandae esse illo atque cupiditate tenetur quod perferendis reiciendis iure in? Fugiat eligendi nihil quia iure dolore eveniet, ratione reprehenderit numquam. Ipsa laboriosam ut, commodi at eveniet nulla voluptas quia eaque ipsum magni natus perspiciatis a. Alias neque sunt sint error reprehenderit possimus accusantium consectetur minima quaerat exercitationem, qui perferendis corporis officiis ad magni, quasi amet adipisci molestiae facere at asperiores? Nulla at inventore earum nemo praesentium consequatur aut illum explicabo tempora labore deserunt, numquam ipsa magnam. Commodi accusantium sunt veritatis asperiores pariatur quisquam qui itaque, animi consequatur, corporis deserunt unde dignissimos! Vel iusto facilis nobis temporibus dicta hic sapiente delectus, totam eos dolores nemo molestias beatae eius atque laboriosam quia! Placeat, atque quisquam inventore dicta dolorum quidem eos temporibus nobis exercitationem obcaecati voluptates eius sapiente tempore perspiciatis non officiis autem, eaque facere necessitatibus, unde explicabo? Libero labore et natus temporibus sequi beatae facere, molestias neque! Est laudantium aliquam blanditiis enim possimus dolorum dignissimos sapiente deleniti, eligendi doloremque aut sed optio ipsum necessitatibus dolor fuga reprehenderit voluptate dolores maxime excepturi, voluptatum repellendus esse cum. Ut maxime culpa laboriosam pariatur quaerat tenetur neque laudantium quam voluptatum reiciendis nostrum, totam ratione, tempora rerum repudiandae quia esse consequuntur doloremque! Exercitationem ut atque quam suscipit. Nemo consectetur modi saepe natus hic itaque, distinctio quam deserunt laudantium? Voluptate quam magni quis, dolor unde commodi eos sit. Veniam explicabo ea alias voluptates animi labore, corporis sed harum cum inventore tempore, quibusdam cupiditate corrupti quisquam doloribus natus quia aut aperiam molestias quae earum dolore reprehenderit exercitationem facere. Voluptatem nemo perferendis facilis qui nesciunt saepe laudantium tempora sit beatae. Tempora iusto nostrum ut quibusdam! Odio ab doloribus amet voluptates dolore.
                </textarea>

                <div class="form-check mb-4 mt-2">
                    <input class="form-check-input" type="checkbox" value= "1" id="chk_member1">
                    <label class="form-check-label" for="chk_member1">
                      위 약관에 동의 하시겠습니까?
                    </label>
                  </div>

                <h4>개인 정보 취급방침</h4>
                <textarea name="" id="" cols="30" rows="10" class="form-control">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis accusamus quas laborum quo totam non nobis nesciunt at quibusdam adipisci voluptate officiis quaerat necessitatibus eum nihil molestias quae, amet impedit fugit molestiae ut deserunt nulla est. Recusandae architecto distinctio et iste excepturi corrupti error? Ab ad nesciunt iure commodi accusantium sint assumenda perspiciatis soluta enim autem cum error atque, labore incidunt. Asperiores repellendus odit, ea numquam iusto facilis quis dolorem? Consequuntur eius in quo soluta quaerat minus. Nemo a harum eius quod voluptatem praesentium delectus id ducimus similique corrupti. Repellendus libero quam quia, numquam eligendi eius rerum suscipit labore mollitia dolorem doloremque molestiae nostrum error asperiores doloribus perspiciatis dolorum, soluta esse. Eius, sequi? Perspiciatis eum consequuntur incidunt distinctio voluptate quibusdam minima fuga inventore dolores commodi, tenetur exercitationem sint, ducimus ipsam similique, aspernatur laborum maiores officiis dignissimos. Minus ullam officia sunt neque aspernatur aliquam doloribus sit, earum ut impedit voluptatibus sed labore dolores odit. Earum eveniet maiores vel perspiciatis quisquam consequuntur odit sit. Repudiandae maxime at nesciunt blanditiis odit veniam, dicta, reprehenderit corrupti, veritatis cum et vitae accusamus? Id nostrum quam nulla est totam neque error, eaque impedit nesciunt laudantium ea aliquam et ipsa quibusdam beatae. Quibusdam eius laudantium amet. Rerum dicta veritatis nihil earum necessitatibus nisi fuga tempora blanditiis assumenda velit dignissimos, odit atque amet et itaque veniam ea aliquam excepturi facere maiores doloremque fugiat! Odio vero, autem suscipit inventore, voluptas iste, nesciunt exercitationem esse explicabo maxime neque doloribus ullam! At ratione sint quas, obcaecati deleniti impedit provident quae beatae ad fugiat voluptatum nihil quo quos modi velit sit similique consectetur asperiores saepe, pariatur numquam laudantium illum, animi ipsa. Enim quod ullam voluptatibus asperiores assumenda veritatis excepturi provident obcaecati cumque, placeat porro consequatur voluptates, nobis laborum maiores voluptatem nulla quae consectetur rem? Enim repudiandae culpa cupiditate ipsam corporis labore optio.
                </textarea>

                <div class="form-check mb-4 mt-2">
                    <input class="form-check-input" type="checkbox" value="" id="chk_member2">
                    <label class="form-check-label" for="chk_member2">
                      위 개인정보 취급방침에 동의 하시겠습니까?
                    </label>
                  </div>

                  <div class="mt-4 d-flex justify-content-center gap-2">
                    <button class="btn btn-primary w-50" id="btn_member">회원가입</button>
                    <button class="btn btn-secondary w-50 ">가입취소</button>
                  </div>

                  <form method="post" name="stipluation_form" action="member_input.php" style="display:none">
                    <input type="hidden" name="chk" value="0"> 
                  </form>

            </main>
            <?php
 