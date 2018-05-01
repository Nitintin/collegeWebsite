<?php
session_start();
include 'CommentFunctions.php';
include 'connection.inc.php';
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <a class="navbar-brand" href="parallax.php">HOME</a>
              <li><a href="upload-form.php">UPLOAD</a></li>
              <li><a href="socity_page.php">Society</a></li>
              <li><a href="allevents.php">Events</a></li>
              <?php 
                if (isset($_SESSION['ID'])) {
                  echo "
                  <form class='logout-form' method='POST' action='".getLogout($conn)."'>
                    <button type='submit' name='logout-btn' ><li>LOG OUT!</button>
                  </form></li>";
                }
                else{
                  echo "<li><a href='login1.php'>Login</a></li>";
                }
              ?>
            </ul>
          </div>
        </div>
      </nav>