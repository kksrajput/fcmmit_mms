<header id="header-part">        
        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-10 col-sm-9 col-9">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="../../index.html">
                                <img src="../../logo.png" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">

                                    <li class="nav-item">
                                        <a href="../../index.html" >Home</a>                                        
                                    </li>
                                    <li class="nav-item">
                                        <a href="home-p.php" >Portal</a>                                        
                                    </li>

                                    <li class="nav-item">
                                        <a href="archive-p.php" >Problem</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="contest-p.php">Contests</a>
                                        <!--<a href="courses-singel.html">Course Singel</a>-->
                                    </li>

                                    <li class="nav-item">
                                        <!-- <a href="allsubmission-p.php">All Submissions</a> -->
                                        <a href="allsubmission-p.php?name=<?php echo("$username"); ?>">Submissions</a>
                                    </li>
                                    
                        

                                    <li class="nav-item">
                                        <a href="">Account</a>
                                        <ul class="sub-menu">
                                            <li><a href="profile-p.php?user=<?php echo("$username"); ?>"><i class="fa fa-user ispace"></i>&nbsp;&nbsp;&nbsp;<?php echo("$username"); ?></a></li>
                                            <li><a href="logout.php"><i class="fa fa-power-off ispace"></i>&nbsp;&nbsp;&nbsp;Logout</a></li>                                        
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav> <!-- nav -->
                    </div> <!-- nav -->
                    </div>
                    
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
        
</header>