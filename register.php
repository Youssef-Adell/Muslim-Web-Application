<?php
$pageName = "إنشاء حساب";

session_start();

if (isset($_POST['submit'])) {

    require_once 'common/db_connection.php';

    $name = $_POST['username'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);

    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);

    $password = ($_POST['password']);
    $password = filter_var($password, FILTER_SANITIZE_STRING);

    $cpassword = ($_POST['cpassword']);
    $cpassword = filter_var($cpassword, FILTER_SANITIZE_STRING);

    $select = $pdo->prepare("SELECT * FROM users WHERE email = ? ");

    $select->execute([$email]);

    if ($select->rowCount() > 0) {
        $message[] = "البريد الالكترونى موجود بالفعل";
    } elseif ($password !== $cpassword) {
        $message[] = "الرقم السرى غير متطابق ";
    } elseif (strlen($password) <= 4) {
        $message[] = "يجب ألا يقل عن اربع ارقام";
    } else {
        $insert = $pdo->prepare("INSERT INTO users (username,email,password) VALUES (?,?,?)");

        $insert->execute([$name, $email, $password]);

        //SESSION
        session_start();
        $_SESSION['user'] = [
            "username" => "$name",
            "email" => "$email",
        ];
        header("Location: index.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<?php require_once 'common/head.php'; ?>

<body>
    <!-- start header  -->
    <?php require_once 'common/header.php' ?>
    <!-- end header -->

    <!-- print errors  ------->
    <?php
    if (isset($message)) {
        foreach ($message as $message) {
            echo
            '<div class="alert alert-error">
        <span>' . $message . '</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>';
        }
    }
    ?>
    <!-- print errors  --------->

    <!-- start form -->
    <div class="bigforma">
        <form class="loginn" action="register.php" method="POST">

            <h2 class="login">انشاء حساب جديد</h2>
            <div class="forma">
                <input name="username" value="<?php if (isset($_POST['username'])) {
                                                    echo $_POST['username'];
                                                } ?>" class="n" type="text" placeholder="الاسم الاول " required>

                <input name="email" value="<?php if (isset($_POST['email'])) {
                                                echo $_POST['email'];
                                            } ?>" class="n" id="bared" type="email" placeholder="البريد الاليكتروني" required>

                <input name="password" value="<?php if (isset($_POST['password'])) {
                                                    echo $_POST['password'];
                                                } ?>" class="p" type="password" placeholder="كلمة السر" required>

                <input name="cpassword" value="<?php if (isset($_POST['cpassword'])) {
                                                    echo $_POST['cpassword'];
                                                } ?>" class="p" type="password" placeholder=" اعادة كتابة كلمة السر" required>

                <input class="b" name="submit" type="submit" value="التسجيل">

                <p class="fff"><a class="forget" href="login.php">هل لديك حساب بالفعل</a></p>
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