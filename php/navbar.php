<nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                <a class="navbar-brand" href="<?php echo $level.'index.php'?>">
                    <h1 class="tm-site-title mb-0">Product Admin</h1>
                </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?php echo $level.'index.php'?>">
                                <i class="fas fa-tachometer-alt"></i>
                                Dashboard
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <?php 
                            if($admin[0]['type'] == 1 ){
                                ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo $level.pages_path.'invoice.php'?>">
                                            <i class="fas fa-file-invoice-dollar"></i>
                                            Invoice
                                        </a>
                                    </li>
                                <?php
                            }
                        ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#"  id = "navbarDropdown" role= "button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-shopping-cart"></i>
                                <span>
                                    Product <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo $level.pages_path.'products.php'?>">Product List</a>
                                <a class="dropdown-item" href="<?php echo $level.pages_path.'product-statistic.php'?>">Product Statistics</a>
                            </div>
                        </li>
                        <?php 
                            if($admin[0]['type'] == 1 ){
                                ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo $level.pages_path.'accounts.php'?>">
                                            <i class="far fa-user"></i>
                                            Accounts
                                        </a>
                                    </li>
                                <?php
                            }
                        ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cog"></i>
                                <span>
                                    Settings <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo $level.pages_path.'accounts.php'?>">Profile</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link d-block" href="<?php echo $level.php_path.function_path.'logout.php'?>">
                                <?php echo $admin[0]['username'];?>, <b>Logout</b>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>