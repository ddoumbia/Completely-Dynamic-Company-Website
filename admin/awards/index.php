<?php
include_once 'awards.php';

$awards = getAllAwards();
if (!is_array($awards)) {
    $awards = [];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Awards</title>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Awards</h2>
        <a href="create.php" class="btn btn-primary mb-3">Create New Award</a>
        <?php if (empty($awards)): ?>
            <p>No awards found. Please create a new award.</p>
        <?php else: ?>
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
                <?php foreach ($awards as $id => $award): ?>
                <tr>
                    <td><?= $id; ?></td>
                    <td><?= htmlspecialchars($award['title']); ?></td>
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
