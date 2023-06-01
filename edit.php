<?php
    include "includes/conn_db.php";
    $id = $_GET['id'];

    if(isset($_POST['submit'])) {

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];

        $sql = " UPDATE `crude` SET `first_name`='$first_name',`last_name`='$last_name',
        `email`='$email',`gender`='$gender' WHERE id=$id ";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location:index.php?msg=Data updated successfully");
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
            <h3>Edit User Information</h3>
            <p class="text-muted">Click Update after changing any information</p>
        </div>
        <?php 
        
        $sql = "SELECT * FROM `crude` WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>
    </div>
    <!---------another container for the form---->
    <div class="container d-flex justify-content-center">
        <form action="" method="post" class="form-c">
            <div class="row">
                <div class="col">
                    <label  class="form-label">First Name</label>
                    <input type="text" class="form-control" name="first_name" value="<?php echo $row['first_name'] ?>">
                </div>
                <div class="col">
                    <label  class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="last_name" value="<?php echo $row['last_name'] ?>">
                </div>
                <div class="mb-3 mt-3">
                    <label  class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $row['email'] ?>">
                </div>
                <div class="form-group mb-3">
                    <label  class="form-label">Gender</label>&nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="male" value="male" <?php echo ($row['gender'] == 'male')? "checked": ""; ?> >
                    <label for="male" class="form-input-label">Male</label>
                    <input type="radio" class="form-check-input" name="gender" id="female" value="female" <?php echo ($row['gender'] == 'female')? "checked": ""; ?>>
                    <label for="male" class="form-input-label">Female</label>
                </div>
                <div class="button">
                    <button class="btn btn-success" name="submit">Update</button>
                    <a href="index.php" class="btn btn-danger">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>