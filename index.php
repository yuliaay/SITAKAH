<?php

require_once "core/init.php";

if(!isset($_SESSION['user'])) {
  header('Location: login.php');
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vendor/bootstrap-3.3.7-dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/admin/css/default.css">

    <title>Admin</title>
  </head>
  <body>
    
    <div class="container-fluid display-table">
      <div class="row display-table-row">

        <!-- side menu -->
        <div class="col-md-2 col-sm-1 hidden-xs display-table-cell valign-top" id="side-menu">
          <h1 class="hidden-xs hidden-sm">Navigation</h1>
          <ul>
            <li class="link active">
              <a href="index.php">
                <span class="glyphicon glyphicon-th" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Dasboard</span>
              </a>
            </li>

            <li class="link">
              <a href="#collapse-post" data-toggle="collapse" aria-controls="collapse-post">
                <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Article</span>
                <span class="label label-success pull-right hidden-sm hidden-xs">20</span>
              </a>
              <ul class="collapse collapseable" id="collapse-post">
                <li><a href="new-article.php"> Create New </a></li>
                <li><a href="articles.php"> View Article </a></li>
              </ul>
            </li>

            <li class="link">
              <a href="#collapse-comments" data-toggle="collapse" aria-controls="collapse-comments">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Comments</span>
                <span class="label label-success pull-right hidden-sm hidden-xs">20</span>
              </a>
              <ul class="collapse collapseable" id="collapse-comments">
                <li><a href="approved.html">Aproved
                <span class="label label-success pull-right hidden-sm hidden-xs">10</span>
                </a>
                </li>
                <li><a href="approved.html">Unapproved
                <span class="label label-warning pull-right hidden-sm hidden-xs">10</span>
                </a>
                </li>
              </ul>
            </li>

            <li class="link">
              <a href="commenters.html">
                <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Commeters</span>
              </a>
            </li>

            <li class="link">
              <a href="tags.html">
                <span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Tags</span>
              </a>
            </li>

            <li class="link settings-btn">
              <a href="settings.html">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Setting</span>
              </a>
            </li>
          </ul>
        </div>

        <!-- main content -->
        <div class="col-md-10 col-sm-11 display-table-cell  valign-top">
          <div class="row">
           
            <header id="nav-header" class="clearfix">
              <div class="col-md-5">
                <nav class="navbar-default pull-left">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu">
                  <span class="sr-only"></span>
                  <span class="icon-bar"> </span>
                  <span class="icon-bar"> </span>
                  <span class="icon-bar"> </span>
                </button>
                </nav>

                <input type="text" class="hidden-sn hidden-xs" id="header-search-field" placeholder="Search for Something..">
              </div>

              <div class="col-md-7">
                <ul class="pull-right">
                  <li id="welcome" class="hidden-xs">Welcome to your Administration</li>


                  <li class="fixed-width"> 
                    <a href="#">
                        <span class="glyphicon glyphicon-bell" ></span>
                         <span class="label label-warning">3</span>
                       </a>
                  </li>

                  <li class="fixed-width"> 
                    <a href="#">
                        <span class="glyphicon glyphicon-envelope" ></span>
                        <span class="label label-message">3</span>
                      </a>
                  </li>

                  <li> 
                    <a href="logout.php" class="logout">
                        <span class="glyphicon glyphicon-log-out"><span>
                          Logout
                       </a>
                  </li>
               </ul>
              </div>
            </header>
        </div>
        <div class="row">
          <footer id="admin-footer" class="clearfix">
            <div class="pull-left"><p> Copyright 2015</p></div>
            <div class="pull-right"><p> Admin System </p></div>
          </footer>
      </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="vendor/bootstrap-3.3.7-dist/js/jquery.js"></script>
    <script src="vendor/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    <script src="vendor/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="vendor/admin/js/default.js"></script>
  </body>
</html>