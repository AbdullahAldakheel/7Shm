    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="../index.php">7Shm NewsPaper</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="../index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
                
                  <?php  if (isset($_SESSION['username'])) : ?>
                
                
                
                   <?php  if (isset($_SESSION['type'])) : ?>
                                                           
                                                       
                
    	       

                
                                                        <?php  if ($_SESSION['type']=="Admin") : ?>
                                                          <a class="nav-link" href="../admin/index.php">MyPage</a>
                                                            <?php endif ?>
                                
                                                        <?php  if ($_SESSION['type']=="Editor") : ?>
                                                          <a class="nav-link" href="../editor/index.php">MyPage</a>
                                                            <?php endif ?>
                                
                                                        <?php  if ($_SESSION['type']=="Journalist") : ?>
                                                          <a class="nav-link" href="../journalist/index.php">MyPage</a>
                                                            <?php endif ?>
                
                     <?php endif ?>
                
                <?php endif ?>
                


            </li>

              
                          <li class="nav-item">
                                                             <?php  if (!isset($_SESSION['username'])) : ?>
                                                            <a class="nav-link" href="../login.php">LogIn</a>
                                                            <?php endif ?>
                            </li>
              
            <li class="nav-item">
                                  <?php  if (isset($_SESSION['username'])) : ?>
                  <a class="nav-link" href="../index.php?logout='1'">logOut</a>
                                        <?php endif ?>
            </li>

          </ul>
        </div>
      </div>
    </nav>