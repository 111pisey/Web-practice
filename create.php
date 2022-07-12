<?php
require 'db.php';
$message = '';
if( isset($_POST['name']) && isset ($_POST['user_id']) && isset($_POST['amount']) && isset ($_POST['price'])){
    $id =$_POST['id'];
    $name =$_POST['name'];
    $user_id=$_POST['user_id'];
    $amount =$_POST['amount'];
    $price=$_POST['price'];
    $sql ='INSERT INTO cruds(id,name,user_id,amount,price) VALUES(:id,:name,:user_id,:amount,:price)';
    $statement = $connection->prepare($sql);
    if($statement->execute(['id'=>$id, ':name'=>$name, ':user_id'=>$user_id, 'amount'=>$amount,':price'=>$price])){
        $message ="data insert successfully";
    }
    
}
?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Create a Product</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="user_id">User_id</label>
          <input type="text" name="user_id" id="user_id" class="form-control">
        </div>
        <div class="form-group">
          <label for="amount">Amount</label>
          <input type="text" name="amount" id="amount" class="form-control">
        </div>
        <div class="form-group">
          <label for="price">Price</label>
          <input type="text" name="price" id="price" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Create a person</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
