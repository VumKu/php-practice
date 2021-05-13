<?php include __DIR__ . '/part-text/HTML/config_copy.php'; ?>

<?php
$title = '列表';

$sql = 'SELECT * FROM news_main';
$rows = $pdo->query($sql)->fetchAll();

?>

<?php include __DIR__ . '/part-text/HTML/html-head.php'; ?>
<?php include __DIR__ . '/part-text/HTML/navbar.php'; ?>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">image</th>
      <th scope="col">date</th>
      <th scope="col">main-title</th>
      <th scope="col">sub-title</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($rows as $r): ?>
    <tr>
        <td><?= $r['sid'] ?></td>      
        <td><?= $r['img'] ?></td>      
        <td><?= $r['date'] ?></td>      
        <td><?= $r['main_title'] ?></td>
        <td><?= $r['sub_title'] ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>



<?php include __DIR__ . '/part-text/HTML/scripts.php'; ?>
<?php include __DIR__ . '/part-text/HTML/html-foot.php'; ?>