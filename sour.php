<?php
$pageName = "سور القرآن ";

session_start();
require_once 'common/db_connection.php';

$statment = $pdo->prepare('SELECT * FROM sour');
$statment->execute();
$sour = $statment->fetchAll();

?>

<!DOCTYPE html>
<html lang="ar">

<?php require_once 'common/head.php' ?>

<body>
    <!-- start header -->
    <?php require_once 'common/header.php' ?>
    <!-- End header -->

    <!-- start present -->
    <div class="pre">
        <div class="pres">
            <div class="pr">
                <h1 class="prese">لسماع القران</h1>
            </div>
        </div>
    </div>
    <!-- end present -->

    <!-- start table -->
    <?php require_once 'common/table.php'; ?>
    <!-- end table -->

    <!-- start present -->
    <div class="pre">
        <div class="pres">
            <div class="pr">
                <h1 class="prese">لقراءة القران</h1>
            </div>
        </div>
    </div>
    <!-- end present -->

    <!-- start ekraa -->
    <embed src="media/WARSH__MADINAH.pdf" type="">
    <!-- end ekraa -->

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