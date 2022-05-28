<?php $pageName = "تحفيظ القرأن";

session_start();
require_once 'common/isLogined.php';


?>
<!DOCTYPE html>
<html lang="ar">

<?php require_once 'common/head.php'; ?>

<body>
    <!-- start header  -->
    <?php require_once 'common/header.php' ?>
    <!-- end header -->

    <!-- start hefz -->
    <div class="heffz">
        <div class="big">
            <div class="f">
                <h1 class="hezz">لحفظ القران</h1>
            </div>
            <div class="ff">
                <p1 class="desc">تم وضع خطة لحفظ القران من خلال اختيار انسب مُحفِظ من هؤلاء والتحدث معه لاعطاءك التفاصيل
                    والوقت المناسب للدخول معه فيديوكول وقراءة ورد يومي وتحفيظه لك</p1>
            </div>
        </div>
    </div>
    <!-- end hefz -->

    <!-- start mawaeed -->

    <div class="maw">
        <div class="she">
            <div class="ma">
                مواعيد الشيوخ
            </div>
        </div>
    </div>

    <!-- end mawaeed -->

    <!-- start sss  -->
    <div class="boxxxxxxx">
        <table class="box99">
            <tr>
                <td class="photo" id="ph1"> </td>
                <td class="maa"> المواعيد من 8 صباحا : 12 ظهرا</td>
                <td><button class="bttn-box" id="tim1">إنضمام </button></td>
            </tr>
            <tr>
                <td class=" photo" id="ph2"></td>
                <td class="maa"> المواعيد من 12 ظهرا : 4 عصرا</td>
                <td> <button class="bttn-box" id="tim2">إنضمام </button></td>
            </tr>
            <br>
            <tr>
                <td class="photo" id="ph3"></td>
                <td class="maa"> المواعيد من 4 عصرا : 8 مساءا</td>
                <td><button class="bttn-box" id="tim3">إنضمام </button></td>
            </tr>
        </table>
    </div>

    <div class="form-container">
        <div class="icon">
            <i class="fa-solid fa-circle-xmark"></i>

        </div>
        <form action="" class="form" method="POST">
            <div class="inputs-box">
                <div class="inputs">

                    <!-- <label for="text">الاسم</label> -->
                    <input type="text" id="text" placeholder="ادخل اسمك بالكامل">
                </div>
                <div class="inputs">

                    <!-- <label for="email" id="email">البريد الالكتروني</label> -->
                    <input type="email" id="email" placeholder="ادخل البريد المستخدم في التسجيل">
                </div>

            </div>
            <div class="time-manage">
                <h3>اختار الوقت المناسب</h3>
                <span class="hours"></span>
                <select name="select-time" id="form" class="selection">

                </select>
                <button type="submit">ارسال</button>
            </div>
        </form>

    </div>
    <!-- end sss  -->

    <!-- strat footer  -->
    <?php require_once 'common/footer.php' ?>
    <!-- End footer  -->

    <!--scroll btn  -->
    <?php require_once 'common/scroll_button.php' ?>
    <!--scroll btn  -->

    <!--start social-media -->
    <?php require_once 'common/social_media.php' ?>
    <!--end social-media -->


</body>
<!-- script -->

<script>
    let btn1 = document.getElementById("tim1")
    let btn2 = document.getElementById("tim2")
    let btn3 = document.getElementById("tim3")
    let form_container = document.querySelector(".form-container");
    let exit_icon = document.querySelector(".icon");
    let hours = document.querySelector(".hours");
    let selection = document.querySelector(".selection")

    btn1.addEventListener("click", () => {
        form_container.classList.add("show");
        hours.innerText = "المواعيد من 8 صباحا : 12 ظهرا"
        selection.innerHTML = `
        <option value="اختر المعاد المناسب" disabled selected>اختر المعاد المناسب</option>
        <option value="8-9">8-9</option>
                    <option value="9-10">9-10</option>
                    <option value="10-11">10-11</option>
                    <option value="11-12">11-12</option> `

    });

    btn2.addEventListener("click", () => {
        form_container.classList.add("show");
        hours.innerText = "المواعيد من 12 ظهرا : 4 عصرا"
        selection.innerHTML = `
        <option value="اختر المعاد المناسب" disabled selected>اختر المعاد المناسب</option>
                    <option value="12 - 1">12 - 1</option>
                    <option value="1 -2">1 -2</option>
                    <option value="2- 3">2- 3</option> 
                    <option value="3 -4">3 -4</option> `
    });

    btn3.addEventListener("click", () => {
        form_container.classList.add("show");
        hours.innerText = "المواعيد من 4 عصرا : 8 مساءا"
        selection.innerHTML = `
        <option value="اختر المعاد المناسب" disabled selected>اختر المعاد المناسب</option>
                    <option value="4 -5">4 -5</option>
                    <option value="5 -6">5 -6</option>
                    <option value="6 - 7">6 - 7</option> 
                    <option value="7 - 8">7 - 8</option> `

    });

    exit_icon.addEventListener("click", () => {
        form_container.classList.remove("show")
    });
</script>

</html>