<?php
$pageName = "مسلم";
session_start();

?>
<!DOCTYPE html>
<html lang="ar">

<?php require_once 'common/head.php' ?>

<body>
  <!--scroll btn  -->
  <?php require_once 'common/scroll_button.php' ?>
  <!--scroll btn  -->

  <!-- start header  -->
  <?php require_once 'common/header.php' ?>
  <!-- end header -->

  <!--- start main --->
  <?php require_once 'common/home_head.php' ?>
  <!--- end main --->

  <!-- start landing -->
  <section class="landing" id="start">
    <div class="container-land">
      <!-- ######  استماع القران ###### -->
      <div class="box-land" id="b-l">
        <h2>إستماع القرآن الكريم</h2>
        <button class="btn-box" id="f-btn">
          <a href="sour.php">اضغط هنا</a>
        </button>
      </div>
      <!-- ######  حفظ القران ###### -->
      <div class="box-land" id="b-k">
        <h2>تحفيظ القرآن</h2>
        <button class="btn-box" id="t-box">
          <a href="sessions.php">اضغط هنا</a>
        </button>
      </div>
      <!-- ######  ازكار ###### -->
      <div class="box-land" id="b-j">
        <h2>ختم القرآن الكريم</h2>
        <button class="btn-box" id="l-box"><a href="keraaa.php">اضغط هنا</a></button>
      </div>
    </div>
  </section>
  <!-- End landing -->

  <div class="big-container" id="islam">
    <div class="header">
      <h1>الاذكار</h1>
    </div>
  </div>

  <!-- start azkar -->
  <div class="Azkar" id="azkar">
    <div class="Azkar-box">
      <h2 id="c">أذكار المساء:</h2>
      <p>
        أَمْسَيْـنا وَأَمْسـى المـلكُ لله وَالحَمدُ لله ، لا إلهَ إلاّ اللّهُ
        وَحدَهُ لا شَريكَ لهُ، لهُ المُـلكُ ولهُ الحَمْـد، وهُوَ على كلّ شَيءٍ
        قدير ، رَبِّ أسْـأَلُـكَ خَـيرَ ما في هـذهِ اللَّـيْلَةِ وَخَـيرَ ما
        بَعْـدَهـا ، وَأَعـوذُ بِكَ مِنْ شَـرِّ ما في هـذهِ اللَّـيْلةِ
        وَشَرِّ ما بَعْـدَهـا ، رَبِّ أَعـوذُبِكَ مِنَ الْكَسَـلِ وَسـوءِ
        الْكِـبَر ، رَبِّ أَعـوذُ بِكَ مِنْ عَـذابٍ في النّـارِ وَعَـذابٍ في
        القَـبْر.
      </p>
    </div>
    <div class="Azkar-box">
      <h2 id="b">أذكار الصباح:</h2>
      <p>
        أَصْـبَحْنا وَأَصْـبَحَ المُـلْكُ لله وَالحَمدُ لله ، لا إلهَ إلاّ
        اللّهُ وَحدَهُ لا شَريكَ لهُ، لهُ المُـلكُ ولهُ الحَمْـد، وهُوَ على
        كلّ شَيءٍ قدير ، رَبِّ أسْـأَلُـكَ خَـيرَ ما في هـذا اليوم وَخَـيرَ ما
        بَعْـدَه ، وَأَعـوذُ بِكَ مِنْ شَـرِّ ما في هـذا اليوم وَشَرِّ ما
        بَعْـدَه، رَبِّ أَعـوذُبِكَ مِنَ الْكَسَـلِ وَسـوءِ الْكِـبَر ، رَبِّ
        أَعـوذُ بِكَ مِنْ عَـذابٍ في النّـارِ وَعَـذابٍ في القَـبْر.
      </p>
    </div>
    <div class="Azkar-box">
      <h2 id="d">أذكارالاذان:</h2>
      <p>
        ما يقال عند سماع الأذان: يَقُولُ مِثْلَ مَا يَقُولُ الـمُؤَذِّنُ إلاَّ
        فِي "حَيَّ عَلَى الصَّلاةِ وَحَيَّ عَلَى الفَلاَحِ" فَيَقُولُ: "لاَ
        حَوْلَ وَلا قُوَّةَ إلاَّ باللَّهِ".
      </p>
    </div>
    <div class="Azkar-box">
      <h2 id="c">أذكار المسجد:</h2>
      <p>
        دُعَاءُ الذَّهَابِ إلَى المَسْجِدِ اللّهُـمَّ اجْعَـلْ في قَلْبـي نورا
        ، وَفي لِسـاني نورا، وَاجْعَـلْ في سَمْعي نورا، وَاجْعَـلْ في بَصَري
        نورا، وَاجْعَـلْ مِنْ خَلْفي نورا، وَمِنْ أَمامـي نورا، وَاجْعَـلْ
        مِنْ فَوْقـي نورا ، وَمِن تَحْتـي نورا .اللّهُـمَّ أَعْطِنـي نورا.
      </p>
    </div>
    <div class="Azkar-box">
      <h2>أذكار دخول المنزل :</h2>
      <p>
        أذكار الدخول إلى المنزل بِسْـمِ اللهِ وَلَجْنـا، وَبِسْـمِ اللهِ
        خَـرَجْنـا، وَعَلـى رَبِّنـا تَوَكّلْـنا.
      </p>
    </div>
    <div class="Azkar-box">
      <h2>دعاء الكرب:</h2>
      <p>
        لا إله إلا الله العظيم الحليم، لا إله إلا الله رب العرش العظيم، لا إله
        إلا الله رب السماوات، ورب الأرض ورب العرش الكريم اللهم رحمتك أرجو فلا
        تكلني إلى نفسي طرفة عين وأصلح لي شأني كله ، لا إله إلا أنت لا إله إلا
        أنت سبحانك إني كنت من الظالمين الله الله رب لا أشرك به شيئا
      </p>
    </div>
    <div class="Azkar-box">
      <h2>دعاء زيارة القبور:</h2>
      <p>
        السلام عليكم أهل الديار من المؤمنين والمسلمين، وإنا إن شاء الله بكم
        لاحقون ويرحم الله المستقدمين منا والمستأخرين، أسأل الله لنا ولكم
        العافية.
      </p>
    </div>
  </div>
  <!-- end azkar -->



  <div class="big-container" id="islam">
    <div class="header">
      <h1>اسلاميات</h1>
    </div>
  </div>

  <!-- start Big content  -->
  <div class="big-container" id="islam">
    <div class="box-big-content" id="conten">
      <div class="box-content">
        <a href="thaqafa.php" id="bo">
          <h3 class="h">ثقافة اسلامية</h3>
        </a>
      </div>
      <div class="box-content">
        <a href="4kids.php" id="boxx">
          <h3 class="h">قصص للاطفال</h3>
        </a>
      </div>
      <div class="box-content">
        <a href="ramadan.php" id="boxxx">
          <h3 class="h">رمضان</h3>
        </a>
      </div>

    </div>
  </div>
  <!-- end Big content  -->

  <!-- start about us -->

  <div class="box-aboutus">
    <div class="about-us">
      <div class="head">
        <h2>من نحن</h2>
      </div>
      <div class="heads">
        نحن مجموعة من طلاب قسم تكنولوجيا المعلومات بجامعة القاهرة الجديدة
        التكنولوجية نأمل ان نصبح من المطوريين الذين ينشئون و يبتكرون حلولا ف
        تصميم المواقع
      </div>
    </div>
  </div>
  <!-- End about us -->

  <!-- strat footer  -->
  <?php require_once 'common/footer.php' ?>
  <!-- End footer  -->



  <!--start social-media -->
  <?php require_once 'common/social_media.php' ?>
  <!--end social-media -->

</body>

</html>