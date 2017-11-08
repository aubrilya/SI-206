
  <header>
    <nav class="navbar navbar-default navbar-fixed-top" onload="checkTime()">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#phonenav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href = "index.php" id="greeting" class="navbar-brand">HOME</a>
            </div>

            <div class="collapse navbar-collapse" id="phonenav">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                    <a href="bio.php" id="bio"
                    <?php
                        if ($fName == "bio.php"){
                            echo "class = \"current\"";
                        }
                        ?>
                    >BIO</a>
                    </li>
                    <li>
                    <a href="photography.php" id="foto"
                    <?php
                        if ($fName == "photography.php"){
                            echo "class = \"current\"";
                        }
                        ?>
                    >PORTFOLIO</a>
                    </li>
                    <li>
                    <a href="contact.php" id="message2"
                    <?php
                        if ($fName == "contact.php"){
                            echo "class = \"current\"";
                        }
                        ?>
                    >CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </header>
