<?php
include 'pages.php';

$id = $_GET['id'];
$page = getPage($id);

if (!$page) {
    echo "Page not found!";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = [
        'title' => $_POST['title'],
        'content' => $_POST['content']
    ];
    updatePage($id, $data);
    header("Location: edit.php?id=$id&success=1");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Page</title>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Page</h2>
        <?php if (isset($_GET['success'])): ?>
            <div class="alert alert-success">Changes saved successfully!</div>
        <?php endif; ?>
        <form method="post">
            <div class="mb-3">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="<?= htmlspecialchars($page['title']); ?>" required>
            </div>
            <div class="mb-3">
                <label>Content</label>
                <textarea name="content" class="form-control" rows="5" required><?= htmlspecialchars($page['content']); ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
            <a href="detail.php?id=<?= $id; ?>" class="btn btn-secondary">Back to Detail</a>
        </form>
    </div>
</body>
</html>
