<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <!-- CSS, font styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro|Cutive+Mono" rel="stylesheet">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="custom.js"></script>   

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
    
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="row">
                <!-- browse button with sidenav -->
                <button class="col-md-2 openbtn">Browse Titles</button>
                <div id="mySidenav" class="sidenav">
                    <button class="closebtn">&times;</button>
                    <h3>BOOK<br>MUSKETEERS</h3>
                    <form method="POST">
                        <h4>BROWSE BY</h4>
                        <select name="select">
                            <option>Author</option>
                            <option>Title</option>
                        </select>
                        <div class="search_outer">
                            <input type="text" class="search_input" placeholder="Search" name="query" autocomplete="off" aria-label="Search">
                        </div>
                    </form>
                    <hr>
                </div>

                <!-- brand -->
                <a class="navbar-brand col-md-8" href="#">BOOK MUSKETEERS</a>

                <!-- login button with dropdown -->
                <div class="col-md-2 dropdown navbar-right">
                    <?php 
                    session_start();
                    if(!isset($_SESSION['is_logged_in'])) {
                    echo "<a class='dropdown-toggle' href='#' data-toggle='dropdown'><button><span class='glyphicon glyphicon-log-in'></span>&nbsp&nbsp&nbsp Login</button></a>";
                    } else {
                    echo "<li>".$_SESSION['message']."</li>
                    <li><button>Logout</button></li>";
                    }
                    ?>
                    
                    <div class="dropdown-menu">
                        <ul class="form-style">
                            <li>
                                <label>USERNAME</label><input type="text" id="username" name="username">
                            </li>

                            <li>
                                <label>PASSWORD</label><input type="password" id="password" name="password">
                            </li>   
                            
                            <li>
                                <input id="login" type="button" name="login" value="Submit"/>
                            </li>
                            <li>
                                <a>Not yet a member?</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </nav>

    <script type="text/javascript">
        
    </script>

    <!-- Page Content -->
    <div class="container content">
        <div class="row">
            <div class="col-md-10">
                <h2>New York Times Best Sellers</h2>
                <div class="bestseller">
                    <img src="images/ebook1.jpg" alt="ebook1" class="book">
                    <img src="images/ebook2.jpg" alt="ebook2" class="book">
                    <img src="images/ebook3.jpg" alt="ebook3" class="book">
                    <img src="images/ebook4.jpg" alt="ebook4" class="book">
                    <img src="images/ebook5.jpg" alt="ebook5" class="book">
                </div>
                <h2>One book for all. All books for one</h2>
                <h4>NO membership fee.</h4>
                <h4>Share a book and read ALL the others.</h4>
                <h4>Virtual library at your fingertips.</h4>
                <button class="signup">SIGN UP NOW</button>
            </div>

            <div class="col-md-2">
                <h3>In Demand Titles</h3>
                <p>For new sign ups, members would really appreciate if you could contribute one of these.</p>
                <p>TOM CLANCY: POINT OF CONTACT by Mike Maden</p>
                <p>COME SUNDOWN by Nora Roberts</p>
                <p>THE HANDMAID'S TALE by Margaret Atwood</p>
                <p>INTO THE WATER by Paula Hawkins</p>
                <button>SHARE AND READ</button>

                <div class="social">
                    <img src="images/facebook.png" alt="facebook" class="icon">
                    <img src="images/twitter.png" alt="twitter" class="icon">
                    <img src="images/pinterest.png" alt="pinterest" class="icon">
                </div>
            </div>
        </div>
    </div>

</body>
</html>
