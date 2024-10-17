<?php
include 'pages.php';

$id = $_GET['id'];
$page = getPage($id);

if (!$page) {
    echo "Page not found!";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page Detail</title>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2><?= htmlspecialchars($page['title']); ?></h2>
        <p><?= nl2br(htmlspecialchars($page['content'])); ?></p>
        <a href="edit.php?id=<?= $id; ?>" class="btn btn-warning">Edit</a>
        <a href="delete.php?id=<?= $id; ?>" class="btn btn-danger">Delete</a>
        <a href="index.php" class="btn btn-secondary">Back to List</a>
    </div>
</body>
</html>
