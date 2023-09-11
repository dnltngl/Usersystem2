<!DOCTYPE html>
<html>
<head>
    <title>Create</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <form action="php/create.php" method="post">
            <h4 class="display-4 text-center">ADD USER</h4><hr><br>
            
            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['error']; ?>
                </div>
            <?php } ?>
            
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
            </div>

             <div class="form-group">
                <label for="password">Paswword</label>
                <input class="form-control" name="password" id="password" type="password">
            </div>

            <div class="form-group">
                <label for="mobile">Mobile Number</label>
                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter mobile number">
            </div>
            
            <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control" id="gender" name="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            
            <!-- Create and View buttons in the left column -->
            <div class="row">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary btn-block" name="create">Create</button>
                </div>
            </div>
            
            <!-- Login and Register buttons in the right column -->
            <div class="row mt-4">
                <div class="col-md-6">
                </div>
            </div>
        </form>
    </div>
</body>
</html>
