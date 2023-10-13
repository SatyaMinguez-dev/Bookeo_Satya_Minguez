<?php require_once _ROOTPATH_ . '\templates\header.php'; ?>



<h1>Liste complète</h1>

<div class="row text-center mb-3">

<?php foreach($books as $book):?>

    <div class="col-md-4 my-2 d-flex">
        <div class="card">
            <img src=<?php echo htmlspecialchars($book->getImagePath())?> class="card-img-top" alt=<?php echo $book->getImage()?>>
            <div class="card-body">
                <h5 class="card-title"><?php echo $book->getTitle()?></h5>
                <p class="card-text"><?php echo $book->getDescription()?></p>
                <a href="index.php?controller=book&amp;action=show&amp;id=<?php echo $book->getId()?>" class="btn btn-primary">Lire la suite</a>
            </div>
        </div>
    </div>

<?php endforeach; ?>
</div>

<div class="row">
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <?php for ($i = 1; $i <= 10; $i++) { ?>
                <li class="page-item">
                    <a class="page-link" href="#"><?php echo $i; ?></a>
                </li>
            <?php } ?>
        </ul>
    </nav>
</div>




<?php require_once _ROOTPATH_ . '\templates\footer.php'; ?>