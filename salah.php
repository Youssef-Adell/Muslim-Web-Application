<?php
$pageName = "مواقيت الصلاة";

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

  <!--- end main --->

  <!-- start landing -->


  <!-- end Big content  -->

  <!-- start مواقيت الصلاة -->
  <div class="date" style="text-align: center; position:relative;margin-top: 2%;">
    <iframe style="width: 80%" src="https://www.now-time.com/widgetclock/justnumber.php?id=1&size=33&color=1833AB&format=2&thedatein=4&backcolor=F2F2F2" frameBorder="0"></iframe>
  </div>
  <div class="twket" style="position:relative;text-align:center;margin-bottom: 4%;">

    <iframe id="iframe2" style="background: rgb(255, 255, 255); border: 0px solid rgb(238, 238, 238); width: 100%; overflow: hidden; height: 446px;" src="https://timesprayer.today/widget_frame.php?frame=2&amp;sound=false&amp;id=25019"></iframe>
  </div>
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
  <!-- End مواقيت الصلاة -->

  <!-- strat footer  -->
  <?php require_once 'common/footer.php' ?>
  <!-- End footer  -->



  <!--start social-media -->
  <?php require_once 'common/social_media.php' ?>
  <!--end social-media -->

</body>

</html>