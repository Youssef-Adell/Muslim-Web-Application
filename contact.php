<?php $pageName = "اتصل بنا";

session_start();
require_once 'common/isLogined.php';

use PHPMailer\PHPMailer\PHPMailer;

require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$alert;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_NUMBER_INT);

    try {
        $mail->isSMTP();

        //$mail->Host = 'smtp.gmail.com';
        $mail->Host = 'smtp.mail.yahoo.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'muslim2b8@yahoo.com'; // Gmail address which you want to use as SMTP server
        $mail->Password = 'hjwatfmyjugsgnfx'; // Gmail address Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = '587';

        $mail->setFrom('muslim2b8@yahoo.com'); // Gmail address which you used as SMTP server
        $mail->addAddress('muslim2b8@yahoo.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

        $mail->isHTML(true);
        $mail->Subject = 'Muslim(Contact Page) - Message Received';
        $mail->Body = "<h3>Name : $name <br>Email: $email <br>Message : $message</h3>";

        $mail->send();
        $alert = '<div class="alert alert-success"> <span>تم إرسال الرسالة بنجاح! شكرا على تواصلك معنا.</span> </div>';
    } catch (Exception $e) {
        $alert = '<div class="alert alert-error"> <p>' . $e->getMessage() . '</p> </div>'; //error mahmoud
    }
}
?>

<!DOCTYPE html>
<html lang="ar">

<?php require_once 'common/head.php' ?>

<body>
    <!-- start header  -->
    <?php require_once 'common/header.php' ?>
    <!-- end header -->

    <!-- start form -->
    <div class="bigforma">

        <!---Start alert--->
        <?php if (!empty($alert)) {
            echo $alert;
        } ?>
        <!---End alert--->

        <form class="lognn" method="POST">
            <span class="des">
                <p class="parag">نشكركم علي تواصلكم معنا ونتمني ان تكون الصفحة قد نالت اعجابكم</p>
                <div class="imagess"></div>
                <p class="sadaqa">.نشكر كل من ساهم في هذا الموقع من دعم وفكر وتنفيذ</p>
            </span>
            <div class="lll">
                <div class="frma">
                    <input class="n" name="name" type="text" placeholder="الاسم" required>
                    <input class="n" name="email" type="email" placeholder="البريد الاليكتروني" required>
                    <textarea class="resala" name="message" placeholder="ادخل تعليقك...." cols="35" rows="8"></textarea>
                    <input class="b" type="submit" value="ارسال">
                </div>
            </div>
        </form>
    </div>
    <!-- end form -->

    <!-- strat footer  -->
    <?php require_once 'common/footer.php' ?>
    <!-- End footer-->

    <!--scroll btn  -->
    <?php require_once 'common/scroll_button.php' ?>
    <!--scroll btn  -->

    <!--start social-media -->
    <?php require_once 'common/social_media.php' ?>
    <!--end social-media -->


</body>

</html>