<?php
    require_once "../autoloader.php";
    $news = DataService::get()->getNewsFromId($_GET["id"]);
?>
<!doctype html>
<html lang="en">
<head>
    <?php require_once "../util/meta.util.php"?>
    <title>Novice</title>
</head>
<body>
    <?php require_once "shared/header.view.php" ?>
    <?php if (!$news) : ?>
    <div class="alert alert-warning">
        <h6>Ta novica ne obstaja</h6>
        <a href="/index.php" class="btn btn-warning mt-3">Vrnite se na dom</a>
    </div>
    <?php else : ?>
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title"><?= $news->getId() ?>. <?= $news->getTitle() ?></h5>
                <p class="card-text"><?= $news->getSummary() ?></p>
                <p class="card-text"><?= $news->getContent() ?></p>
                <p class="fst-italic">Objavila <?= $news->getAuthor() ?>, <?= $news->getDate() ?></p>
                <a href="views/novica.view.php?id=<?=$news->getId()?>" class="btn btn-primary float-end">Preberi</a>
            </div>
        </div>
    <?php endif; ?>
    <?php require_once "shared/footer.view.php" ?>
</body>
</html>
