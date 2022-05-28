<header>
    <div class="container">
        <div class="logo">

            <div class="list"><i class="fa-solid fa-bars"></i></div>
            <h2><a href="index.php">مُسْلِم</a> </h2>

        </div>
        <div class="list-links">
            <ul>
                <li><a href="sour.php">إستماع القرآن الكريم</a></li>
                <li><a href="sessions.php">تحفيظ القرآن</a></li>
                <li><a href="keraaa.php">ختم القرآن الكريم</a></li>
                <!-- <li><a href="">Link</a></li> -->
            </ul>
            </ul>
            </ul>
        </div>
        <nav>
            <ul>
                <li><a class="active" href="index.php">الصفحة الرئيسية</a></li>
                <li><a class="" href="salah.php">مواقيت الصَّلاةِ</a></li>
                <li><a class="" href="contact.php">تواصل معنا</a></li>
            </ul>
            <div class="sign">
                <?php
                if (isset($_SESSION['user'])) {
                ?>
                    <h2><a href="common/logout.php">تسجيل الخروج</a></h2>
                <?php } else { ?>
                    <h2><a href="login.php">تسجيل الدخول</a></h2>
                <?php } ?>
            </div>
        </nav>
    </div>
</header>

<!-- java_script -->
<script>
    let list = document.querySelector(".list")


    let listlinks = document.querySelector(".list-links")


    list.addEventListener("click", () => {
        listlinks.classList.toggle("translate");
    })
</script>