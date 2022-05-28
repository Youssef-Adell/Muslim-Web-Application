<?php
$pageName = "بحث";
session_start();
require_once 'common/db_connection.php';

$search = $_GET['search'] ?? '';
if (!$search) {
    header('location: index.php');
}

$statment = $pdo->prepare('SELECT * FROM sour WHERE name LIKE :search');
$statment->execute(['search' => "%$search%"]);
$sour = $statment->fetchAll();

?>

<?php
require_once 'common/head.php';
require_once 'common/header.php';
require_once 'common/home_head.php';
?>
<!-- start present -->
<div class="pre">
    <div class="pres">
        <div class="pr">
            <h1 class="prese">نتائج البحث عن "<?php echo $search ?>"</h1>
        </div>
    </div>
</div>
<!-- end present -->
<?php
if (!empty($sour)) {
    require_once 'common/table.php';
}
require_once 'common/footer.php';
require_once 'common/scroll_button.php';
require_once 'common/social_media.php';
?>