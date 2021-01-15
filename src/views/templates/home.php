<?= $view('inc.header') ?>
<?= $view('inc.nav') ?>

<main class="container p-5">


    <h1 id="b-page-title"><?= $page->getTitle() ?></h1>
    <?= $chunk('text', 'standfirst') ?>
    <?= $chunk('text', 'bodycopy') ?>


</main><!-- /.container -->

<?= $view('inc.footer') ?>