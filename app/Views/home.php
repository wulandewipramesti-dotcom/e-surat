<?= view('layouts/header')?>

<P>go home anjayyyy</P>
<ul>
    <?php foreach ($items as $item): ?>
        <li><?= $item['name'] ?> - <?= $item['description'] ?></li>
    <?php endforeach; ?>
</ul>

<?= view('layouts/footer')?>