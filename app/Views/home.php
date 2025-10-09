<?= view('layouts/header')?>

<P>INI HOME</P>
<ul>
    <?php foreach ($items as $item): ?>
        <li><?= $item['name'] ?> - <?= $item['description'] ?></li>
    <?php endforeach; ?>
</ul>

<?= view('layouts/footer')?>