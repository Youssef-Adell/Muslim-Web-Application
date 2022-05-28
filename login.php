<?php
$pageName = "تسجيل الدخول";

session_start();

require_once 'common/db_connection.php';
$contactPage = 'http://localhost/muslim/contact.php';
$sessionsPage = 'http://localhost/muslim/sessions.php';

if ($_SERVER['HTTP_REFERER'] === $contactPage || $_SERVER['HTTP_REFERER'] === $sessionsPage) {
    $message = 'يجب عليك تسجيل الدخول لزيارة هذه الصفحة ';
}

if (isset($_POST['submit'])) {
    $email = trim(($_POST['email']));
    $email = filter_var($email, FILTER_SANITIZE_STRING);

    $pass = trim($_POST['password']);
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);

    $stmt = $pdo->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");

    $stmt->execute([$email, $pass]);

    $data = $stmt->fetch();

    if ($data) {
        //SESSION
        session_start();
        $_SESSION['user'] = [
            "username" => $data['email'],
            "email" => $data['email'],
        ];
        header("Location: index.php");
    } else {
        $message = 'تأكد من البريد الألكترونى الصحيح والرقم السرى';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<?php require_once 'common/head.php' ?>

<body>
    <!-- start header  -->
    <?php require_once 'common/header.php' ?>
    <!-- end header -->

    <!-- print errors  ------------------>
    <?php
    if (isset($message)) {
        echo
        '<div class="alert alert-error">
                    <span>' . $message . '</span>
                    <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
                    </div>';
    }
    ?>
    <!-- print errors  ------------------------------------>


    <!-- start form -->
    <div class="bigforma">
        <form class="loginn" action="login.php" method="POST">
            <h2 class="login">تسجيل الدخول</h2>
            <div class="forma">
                <input class="n" id="bared" type="email" name="email" placeholder="البريد الاليكتروني" required>
                <input class="p" id="bare" type="password" name="password" placeholder="كلمة السر" required>
                <input class="b" type="submit" name="submit" value="التسجيل">
                <div class="forfetr">
                    <p class="ff"><a class="forget" href="forget_password.php">هل نسيت كلمة السر؟</a></p>
                    <p class="fff"><a class="forget" href="register.php">انشاء حساب جديد</a></p>
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