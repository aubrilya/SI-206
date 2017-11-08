

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

  <header>
    <nav class="nav navbar navbar-default navbar-fixed-top" onload="checkTime()">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#phonenav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <img src="img/thikana.jpg" alt="thikana logo"> -->
                <a href = "index.php" id="greeting" class="navbar-brand">HOME</a>
            </div>

            <div class="collapse navbar-collapse" id="phonenav">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                    <a href="bharatwala.php" id="bharatwala"
                    <?php
                        if ($fName == "bharatwala.php"){
                            echo "class = \"current\"";
                        }
                        ?>
                    >BHARATWALA</a>
                    </li>
                    <li>
                    <a href="rikholi.php" id="rikholi"
                    <?php
                        if ($fName == "rikholi.php"){
                            echo "class = \"current\"";
                        }
                        ?>
                    >RIKHOLI</a>
                    </li>
                    <li>
                    <a href="kanatal.php" id="kanatal"
                    <?php
                        if ($fName == "kanatal.php"){
                            echo "class = \"current\"";
                        }
                        ?>
                    >KANATAL</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</header>





