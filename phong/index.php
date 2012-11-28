<?php
include 'libs/config.php';
include 'libs/db.php';

$conn = dbConnect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Get all categories
$stmt = $conn->prepare('SELECT * FROM categories');
$stmt->execute();
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $categories[] = $row;
}
?>
<?php include 'front/template/header.php';?>
<?php
$module = (isset($_GET['m']) && $_GET['m'] != '') ? $_GET['m'] : 'home';
if (file_exists('front/' . $module)) {
    include 'front/' . $module . '/index.php';
} else {
    include 'front/error/404.php';
}
?>
<?php include 'front/template/footer.php';?>