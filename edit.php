<?php
require 'db.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM cruds WHERE id=:id';
$statement = $connection->prepare($sql);
$statement->execute([':id' => $id ]);
$person = $statement->fetch(PDO::FETCH_OBJ);
if (isset($_POST['name']) && isset ($_POST['user_id'])  && isset($_POST['amount']) && isset ($_POST['price']) ) {
  $id= $_POST['id'];
  $name = $_POST['name'];
  $user_id= $_POST['user_id'];
  $amount = $_POST['amount'];
  $price= $_POST['price'];
  $sql = 'UPDATE cruds SET id=:id, name=:name,user_id=:user_id,amount=:amount,price=:price WHERE id=:id';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':id' => $id, ':name' => $name, ':user_id' => $user_id,':amount'=>$amount,':price'=>$price])) {
    header("Location: index.php");
  }

}
 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update person</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
      <div class="form-group">
          <label for="id">ID</label>
          <input value="<?= $person->id; ?>" name="id" id="id" class="form-control">
        </div>
        <div class="form-group">
          <label for="name">Name</label>
          <input type="name" value="<?= $person->name; ?>" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="user_id">User_id</label>
          <input type="user_id" value="<?= $person->user_id; ?>" name="user_id" id="user_id" class="form-control">
        </div>
        <div class="form-group">
          <label for="amount">Amount</label>
          <input type="amount" value="<?= $person->amount; ?>" name="amount" id="amount" class="form-control">
        </div>
        <div class="form-group">
          <label for="price">Price</label>
          <input type="price" value="<?= $person->price; ?>" name="price" id="price" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Update person</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
