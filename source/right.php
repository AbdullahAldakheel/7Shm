<div class="col-md-4">

    <!-- Search Widget -->
    <form  action="search.php"  method="post">
        <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
                <div class="input-group">

                    <input type="text" class="form-control" placeholder="Search for..." name="bringit">
                    <span class="input-group-btn">
                        <button class="btn btn-secondary" type="submit" name="search">Go!</button>
                    </span>

                </div>


            </div>


        </div>
    </form>
    <!-- Categories Widget -->
    <div class="card my-4">
        <h5 class="card-header"> Welcome </h5>
        <div class="card-body">
            <?php  if (isset($_SESSION['username'])) { ?>
            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong>  

                <?php if($_SESSION['type']=="Admin"){
                ?>

                You Are an <strong>Admin</strong>.
                <?php
}
                ?>               

                <?php if($_SESSION['type']=="Editor"){
                    include('../users/connect.php'); 
                    $approve = "No";
                    $notc = "Waiting for review";
                    $sql = "SELECT * FROM post WHERE approve='$approve' AND comment='$notc'";
                    $result = $db->query($sql);
                ?>

                You Are an <strong>Editor</strong>.
                <br>
                You have <?php echo mysqli_num_rows($result) ?> Posts need to review.
                <?php
                }
                ?>    
                <?php if($_SESSION['type']=="Journalist"){
                    include('../users/connect.php'); 
                    $approve = "No";
                    $notc = "Waiting for review";
                    $sql = "SELECT * FROM post WHERE approve='$approve' AND comment!='$notc'";
                    $result = $db->query($sql);

                ?>

                You Are a <strong>Journalist</strong>.
                <br>
                You Have <?php echo mysqli_num_rows($result); ?> post has been reviewed.
                <?php
                }
                ?>      

                .
            </p>
            <p> <a href="index.php?logout='1'" >logout</a> </p>
            <?}else{

            ?>

            To 7Shm newspaper, SWE381 Project.
            <?php
}
            ?>
        </div>
    </div>



</div>