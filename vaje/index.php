<?php
    require_once "autoloader.php";
    $newsList = DataService::get()->getNewsList();
?>
<!doctype html>
<html lang="en">
<head>
    <?php require_once "util/meta.util.php" ?>
    <title>Document</title>
</head>
<body>
    <?php require_once "views/shared/header.view.php" ?>
    <?php foreach ($newsList as $news) : ?>
     <div class="card mt-3">
         <div class="card-body">
             <h5 class="card-title"><?= $news->getId() ?>. <?= $news->getTitle() ?></h5>
             <p class="card-text"><?= $news->getSummary() ?></p>
             <p class="fst-italic">Objavila <?= $news->getAuthor() ?>, <?= $news->getDate() ?></p>
             <a href="views/novica.view.php?id=<?=$news->getId()?>" class="btn btn-primary float-end">Preberi</a>
         </div>
     </div>
    <?php endforeach;?>
    <?php require_once "views/shared/footer.view.php" ?>
</body>
</html>