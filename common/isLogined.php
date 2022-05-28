<?php
if (!isset($_SESSION['user'])) {
header('Refresh: 0.1; URL=login.php');
exit();
}
