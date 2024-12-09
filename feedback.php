<?php include 'inc/header.php'; ?>

<?php
$sql = 'SELECT * FROM feedback';
$result =mysqli_query($conn, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>

<h2>Past Feedback</h2>
<?php if (empty($feedback)): ?>
<?php endif; ?>

<?php foreach($feedback as $item): ?>
<div class="card my-3 w-75">
  <div class="">
    <span class="fw-bold"><?php echo $item['name']; ?></span> <span class="text-secondary fw-bold">says:</span>
  </div>
  <div class="card-body text-center">
    <?php echo $item['body']; ?>
  </div>
</div>
<?php endforeach; ?>

<?php include 'inc/footer.php'; ?>