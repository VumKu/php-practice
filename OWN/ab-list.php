<?php include __DIR__ . '/part-text/HTML/config.php'; ?>

<?php
$title = '列表';

$sql = 'SELECT * FROM address_book';
$rows = $pdo->query($sql)->fetchAll();

?>

<?php include __DIR__ . '/part-text/HTML/html-head.php'; ?>
<?php include __DIR__ . '/part-text/HTML/navbar.php'; ?>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Birthday</th>
      <th scope="col">Mobile</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($rows as $r): ?>
    <tr>
        <td><?= $r['sid'] ?></td>      
        <td><?= $r['name'] ?></td>      
        <td><?= $r['email'] ?></td>
        <td><?= $r['mobile'] ?></td>
        <td><?= $r['birthday'] ?></td>
        <td><?= $r['address'] ?></td>      
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>



<?php include __DIR__ . '/part-text/HTML/scripts.php'; ?>
<?php include __DIR__ . '/part-text/HTML/html-foot.php'; ?>