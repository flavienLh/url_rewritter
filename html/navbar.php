<!-- Navbar : navigation sur le site -->
  <!-- début du menu -->
    <nav id="navbar" class="navbar navbar-expand-lg bg-dark navbar-dark"> 
        <!-- Toggler/collapsibe Button -->        
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <?php if(!isset($_SESSION['email'])){ ?>
                <li class="nav-item">
                    <a class="nav-link text-light" href="index.php">Home</a>
                </li>
                <?php } ?>
                <?php if(isset($_SESSION['email'])){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="deconnexion.php">Logout</a>
                </li>
                <?php  }else{  ?>
                <li class="nav-item text-light">  
                    <a class="nav-link text-light" href="login.php">Login</a>
                </li>
                <?php  }?>
            </ul>
        </div> 
    </nav>