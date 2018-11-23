<?php include('users/publish.php') ?>

 <?php
        while($row = $result->fetch_array()) {
            ?>

<div class="card mb-4">
            <img class="card-img-top" src="img/<?php echo $row["img"] ?>" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title"><?php echo $row["title"] ?></h2>
              <p class="card-text"><?php echo $row["body"] ?></p>
            </div>
            <div class="card-footer text-muted">
              Posted on <?php echo $row["date"] ?> by
              <a href="#"> <?php echo $row["jname"] ?></a>
            </div>
          </div>
    
    <?php
    }
?>
         