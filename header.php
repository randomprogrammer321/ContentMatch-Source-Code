<?php
    include 'configs/database.php';
    
    $auth = new db;

    $auth->redirectAuth();

    $auth->serverstats();
    $auth->userstats();

   


    ?>
<header class="dash-toolbar" style="background: rgb(63,94,251);
background: radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(252,70,107,1) 100%);">
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars" style="color:white;"></i>
                </a>
                <a href="#!" class="searchbox-toggle">
                    <i class="fas fa-search"></i>
                </a>
               
                <div class="tools">
                   
                   
                    <div class="dropdown tools-item">
                        <a href="#" class="" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user" style="color:white;"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                    </div>
                </div>
            </header>