 <nav class="navbar navbar-light fixed-top bg-primary flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0 text-white" href="#">Kratigence Store</a>
  <input class="form-control form-control-dark w-100 bg-white" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
    	<?php
    		if (isset($_SESSION['admin_id'])) {
    			?>
    				<a class="nav-link text-white" href="../admin/admin-logout.php">Sign out</a>
    			<?php
    		}else{
    			$uriAr = explode("/", $_SERVER['REQUEST_URI']);
    			$page = end($uriAr);
    			if ($page === "login.php") {
    				?>
	    				<a class="nav-link text-white" href="../admin/register.php">Register</a>
	    			<?php
    			}else{
    				?>
	    				<a class="nav-link text-white" href="../admin/login.php">Login</a>
	    			<?php
    			}
    		}

    	?>
      
    </li>
  </ul>
</nav>