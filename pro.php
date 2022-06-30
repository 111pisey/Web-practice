
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
  <form method="post" action="result.php" >
    <div class="container">
      
      <div class="row">
        <div class="col-sm-3">
          <h1>Add Product</h1>
          <p>Fill up the form with correct values.</p>
          <hr class="mb-3">
          <label for="id"><b>ID Product</b></label><br>
          <input class="form-control" id="id" type="text" name="id" placeholder="ID of product" required><br>
          
          <label for="name"><b>Name of product</b></label><br>
          <input class="form-control" id="name"  type="text" name="name" placeholder="Name of product" required><br>

          <label for="user_id"><b>ID if user</b></label><br>
          <input class="form-control" id="user_id"  type="text" name="user_id" placeholder="ID of user" required><br>

          <label for="amount"><b>Amount</b></label><br>
          <input class="form-control" id="amount"  type="text" name="amount" placeholder="Amount" required><br>

          <label for="price"><b>Price </b></label><br>
          <input class="form-control" id="price"  type="text" name="price" placeholder="Input password" required><br>

          <hr class="mb-3">
          <input class="btn btn-primary" type="Add" id="add" name="add"><br>
        </div>
      </div>
    </div>
  </form>
  </div>
</body>
</html>