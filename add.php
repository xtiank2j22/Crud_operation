    <?php
    include "includes/conn_db.php";

    if(isset($_POST['submit'])) {

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];

        $sql = "INSERT INTO `crude`(`first_name`, `last_name`, `email`, `gender`) 
        VALUES ('$first_name','$last_name','$email','$gender')";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location:index.php?msg=New record created successfully");
        } 
        else {
            echo "faild: " . mysqli_error($conn);
        }
    }
    ?>

    <?php include_once "includes/nav.php" ?>
<body>
    <!---navigation bar---->
    
    <!-----navbar ends here...--->
    <!-----main body--->
    <div class="container mt-4">
        <div class="text-center mb-4">
            <h3>Add New Data</h3>
            <p class="text-muted">Complete the form below</p>
        </div>
    </div>
    <!---------another container for the form---->
    <div class="container d-flex justify-content-center">
        <form action="" method="post" class="form-c">
            <div class="row">
                <div class="col">
                    <label  class="form-label">First Name</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Nwanagba" require>
                </div>
                <div class="col">
                    <label  class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Christian">
                </div>
                <div class="mb-3 mt-3">
                    <label  class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Christian">
                </div>
                <div class="form-group mb-3">
                    <label  class="form-label">Gender</label>&nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="male" value="male">
                    <label for="male" class="form-input-label">Male</label>
                    <input type="radio" class="form-check-input" name="gender" id="female" value="female">
                    <label for="male" class="form-input-label">Female</label>
                </div>
                <div class="button">
                    <button class="btn btn-success" name="submit">Save</button>
                    <a href="index.php" class="btn btn-danger">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>