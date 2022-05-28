<?php $pageName = "إستعادة كلمة المرور";

session_start();

use PHPMailer\PHPMailer\PHPMailer;

require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$alert;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];

    require_once 'common/db_connection.php';
    $statment = $pdo->prepare('SELECT password FROM users WHERE email = :email');
    $statment->execute(['email' => $email]);
    $data = $statment->Fetch(PDO::FETCH_ASSOC);

    if (empty($data)) {
        $alert = '<div class="alert alert-error"> <span>لا يوجد حساب مرتبط بهذا البريد الالكتروني</span> </div>';
    } else {
        try {
            $mail->isSMTP();

            $mail->Host = 'smtp.mail.yahoo.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'muslim2b8@yahoo.com'; // Gmail address which you want to use as SMTP server
            $mail->Password = 'hjwatfmyjugsgnfx'; // Gmail address Password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = '587';

            $mail->setFrom('muslim2b8@yahoo.com'); // Gmail address which you used as SMTP server
            $mail->addAddress($email); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

            $mail->isHTML(true);
            $mail->Subject = 'Muslim - Reset Password';
            $mail->Body = "<h3>hallo sir <br>Your password is:" . $data['password'] . "</h3>";

            $mail->send();
            $alert = '<div class="alert alert-success"> <span>تم ارساله كلمة المرور الي بريدك الالكتروني</span> </div>';
        } catch (Exception $e) {
            $alert = '<div class="alert alert-error"> <p>' . $e->getMessage() . '</p> </div>';
        }
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

    <!---Start alert--->
    <?php if (!empty($alert)) {
        echo $alert;
    } ?>
    <!---End alert--->

    <!-- start form -->
    <div class="bigforma">
        <form class="loginn" method='POST'>
            <h2 class="login">اعادة تعيين كلمة السر</h2>
            <div class="forma">
                <input class="n" name="email" id="bared" type="email" placeholder="البريد الاليكتروني" required>
                <div class="submitt">
                    <input class="b" type="submit" value="تاكيد">
                </div>

            </div>

        </form>
    </div>

    <!-- end form -->

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

</html>