<?php
include 'pages.php';

$id = $_GET['id'];
$page = getPage($id);

if (!$page) {
    echo "Page not found!";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    deletePage($id);
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Page</title>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Delete Page</h2>
        <p>Are you sure you want to delete this page?</p>
        <form method="post">
            <button type="submit" class="btn btn-danger">Yes, Delete</button>
            <a href="detail.php?id=<?= $id; ?>" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>
</html>
