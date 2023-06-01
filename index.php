<?php include_once "includes/nav.php" ?>
<body>
    <div class="container table-responsive">
        <!------display of alert message that show each message has been submitted---->
    <?php 
        if(isset ($_GET['msg'])){
            $msg = $_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible mt-5 fade show" role="alert">
            '.$msg.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
              <span aria-hidden="true"></span>
            </button>
          </div>';
        } ?>
        <a href="add.php" class="btn btn-dark mt-5 mb-5">Add New</a>
        <table class="table table-hover text-center">
            <thead class="table-dark">
               <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Gender</th>
                <th scope="col">Action</th>
               </tr>
            </thead>
            <tbody>
                <!------dispalay of information on the tabler form---->
        <?php 
            include "includes/conn_db.php";
            
            $sql = "SELECT * FROM `crude` ";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)){
                ?>

                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['first_name'] ?></td>
                    <td><?php echo $row['last_name'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['gender'] ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id'] ?>" class="text-white text-bolder btn btn-success"><strong>Edith</strong></a>
                        <a href="delete.php?id=<?php echo $row['id'] ?>" class="text-white text-bolder btn btn-danger"><strong> Delete</strong></a>
                    </td>
                </tr>
            <?php }?>
        </tbody>
    </table>
    </div>
    
</body>
</html>