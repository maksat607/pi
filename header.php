    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
			  <li><a href="index.php" name="Home">ADD INCOME</a></li>
            <li><a href="/?1" name="nettotal">CUSTOM TOTAL</a></li>
            
            <li><a href="/?2" name="income">SHOW ALL FARES</a></li>
			<?php  if($_SESSION['login_id']==2)
						echo '<li><a href="/?3" name="add note">ADD NOTE</a></li>
            <li><a href="?4" name="show note">SHOW NOTES</a></li>';
			?>
            
			<li><a href="logout.php" name="logout">LOGOUT</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>