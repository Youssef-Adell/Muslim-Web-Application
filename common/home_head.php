<div class="container-head">
    <div class="name">
        <h1>مُسْلِم</h1>
    </div>
    <div class="name" id="nam"></div>

    <!---start Search bar--->
    <div class="inputt">
        <form action="search.php" method="GET">
            <input type="search" name="search" placeholder="اسم السورة" maxlength="30" id="search" />
            <input type="submit" value="ابحث" />
        </form>
    </div>
    <!---end Search bar--->
    <?php if ($pageName == 'مسلم') { ?>
        <div class="name">
            <button class="botn"><a href="#start">لبدأ الرحلة اضغط هنا </a></button>
        </div>
    <?php } else { ?>
        <div class="name">
            <button class="botn"><a href="index.php">العودة للصفحة الرئيسية</a></button>
        </div>
    <?php } ?>

</div>