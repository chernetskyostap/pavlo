<?php
if(!isset($_SESSION['email'])){ //if login in session is not set
    header("Location: login");
}
?>
<div>
    <p>123123</p>
    <?php foreach ($var as $item): ?>
    <p><?php echo $item['title'] ?></p>
    <p><?php echo $item['body'] ?></p>
    <?php endforeach; ?>
</div>