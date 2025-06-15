<!-- app/Views/layouts/main.php -->
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($lang ?? 'en') ?>">

<?php require __DIR__.'/header.php'; ?>

<body>
<div class="wrapper">
    <?php require __DIR__.'/sidebar.php'; ?>
    <div class="main">
        <?php require __DIR__.'/topbar.php'; ?>
        <main class="content">
            <div class="container-fluid p-0">
                <?= $content ?? '' ?>
            </div>
        </main>
        <?php require __DIR__.'/footer.php'; ?>
    </div>
</div>
<script src="/assets/adminkit/js/app.js"></script>
</body>
</html>
