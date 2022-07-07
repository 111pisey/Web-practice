<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="wuser_idth=device-wuser_idth, initial-scale=1">
    <title>Delete Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .container{
            padding: 10%;
        }
        .btn{
            margin-left: 5px;
        }
    </style>
  </head>
  <body>
   

    
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Product delete
                           
                        <a href="" class="btn btn-warning float-end">Update</a>
                            
                            <a href="" class="btn btn-info float-end">View</a>
                            <a href="" class="btn btn-success float-end">Add</a> 
                            
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="mb-3">
                            <label for="Student Name">
                                <input type="text" name="user_id" class="form-control" placeholder="Enter your ID to delete">
                            </label>
                            </div>

                            <div class="mb-3">
                            <input type="submit" name="delete" class="btn btn-danger" value="Delete">
                          
                           
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    $connection = mysqli_connect ("localhost", "pisey", "pisey");
    $db = mysqli_select_db ($connection,'crudproduct');

    if(isset($_POST['delete']))
    {

        //$user_id= $_POST['user_id'];
        $user_id = isset($_POST['user_id']) ? $_POST['user_id'] : '';

        $query="DELETE FROM `cruds` WHERE user_id='$user_id' ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo'<script t">alert("Data delete")</script>';
        }
        else{
            echo'<script type="text/javascript">alert("Data duser_id not delete")</script>';
        }
    }

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>