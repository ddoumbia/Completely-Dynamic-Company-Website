<?php
include 'pages.php';

$pages = getAllPages();
if (!is_array($pages)) {
    $pages = [];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Pages</title>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Pages</h2>
        <a href="create.php" class="btn btn-primary mb-3">Create New Page</a>
        <?php if (empty($pages)): ?>
            <p>No pages found. Please create a new page.</p>
        <?php else: ?>
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
                <?php foreach ($pages as $id => $page): ?>
                <tr>
                    <td><?= $id; ?></td>
                    <td><?= htmlspecialchars($page['title']); ?></td>
                    <td>
                        <a href="detail.php?id=<?= $id; ?>" class="btn btn-info btn-sm">View</a>
                        <a href="edit.php?id=<?= $id; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete.php?id=<?= $id; ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
</body>
</html>
