<?php
  session_start();
    if(isset($_SESSION['user'])){

      $xml = new DOMDocument();
    	$xml->load("Accounts.xml");

    	$accounts = $xml->getElementsByTagName("Account");

      foreach ($accounts as $account){
        $fname = $account->getElementsByTagName("FirstName")->item(0)->nodeValue;
        $email = $account->getElementsByTagName("Email")->item(0)->nodeValue;
        $lname = $account->getElementsByTagName("LastName")->item(0)->nodeValue;
        $user = $account->getElementsByTagName("Username")->item(0)->nodeValue;

        if($_SESSION['user']==$user || $_SESSION['user']==$email){


 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gamer Pro</title>
    <link rel="stylesheet" type="text/css" href="design/style2.css">
    <link rel="shortcut icon" href="design/LOGO.png">
    <script type="text/javascript">
      function toggleSidebar(){
        document.getElementById("sidebar").classList.toggle('active');
      }
    /*  function show_hide(){
        var click = document.getElementById("dropcontent");
        if(click.style.display === "none"){
          click.style.display = "block";
        }
        else {
          click.style.display = "none";
        }
      } */
      function toggleDropdown(){
        document.getElementById("dropdown").classList.toggle('active1');
      }
      function toggleDropdown1(){
        document.getElementById("dropdown1").classList.toggle('active2');
      }
      function toggleDropdown2(){
        document.getElementById("dropdown2").classList.toggle('active3');
      }
      function toggleDropdown3(){
        document.getElementById("dropdown3").classList.toggle('active4');
      }
    </script>
  </head>
  <body>

  <!--Top Nav-->
    <div id="homenav">
							<div id="nav" >
								<a href="login.php" id="a5"><?php echo "Welcome ".$fname." ".$lname; ?></a> <br>
								<img src="design/LOGO.png" id="gamepro">
							</div>
	  </div>
  <!--Top nav-->

  <!--Side Bar-->
    <div id="sidebar">
      <div class="toggle-btn" onclick="toggleSidebar()">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <h1 id="text1">Welcome!<br> Gaming Point</h1>
     <img src="design/LOGO.png" id="logo" alt="logo">
      <h1 id="text2">MENU</h1>
      <ul id="scroll">
        <div class="dropdown">
          <li class="btn">Home <img src="design/home.png" id="home" alt="logo"> </li>

          <li class="btn"><a href="practice.php">Dashboard</a> <img src="design/dashboard.png" id="dashboard" alt="logo"></li>
          <li class="btn" onclick="toggleDropdown1()">My Codes <img src="design/codes.png" id="codes" alt="logo">
                <ul id="dropdown1" class="drp1">
                    <li class="btn1"><a href="#" >send codes</a></li>
                    <li class="btn1"><a href="#" >binary codes</a></li>
                    <li class="btn1"><a href="#" >code seller</a></li>
                </ul>
          </li>
          <li  class="btn" onclick="toggleDropdown()">Network <img src="design/network.png" id="network" alt="logo">
                <ul id="dropdown" class="drp">
                  <li class="btn1"> <a href="#">Binary Genology</a> </li>
                  <li class="btn1"> <a href="#">Referrals</a> </li>
                </ul>
          </li>
          <li class="btn" onclick="toggleDropdown2()">Transaction <img src="design/trans.png" id="trans" alt="logo">
                <ul id="dropdown2" class="drp2">
                  <li class="btn1"> <a href="#">Request Encashment</a> </li>
                  <li class="btn1"> <a href="#">Encashment History</a> </li>
                  <li class="btn1"> <a href="#">Claim Product</a> </li>
                  <li class="btn1"> <a href="#">Wallet History</a> </li>
                </ul>
          </li>
          <li class="btn" onclick="toggleDropdown3()">Watch room Incentives
                <ul id="dropdown3" class="drp3">
                  <li class="btn1"> <a href="#">My Incentives</a> </li>
                  <li class="btn1"> <a href="#">Claim History</a> </li>
                </ul>
          </li>
          <li class="btn"> <?php  ?> <a href="logout.php?logout">logout</a> <?php }}}
          else{
                header("location:login.php?Invalid=you should log your account");
                } ?>
          </li>
        </ul>
      </div>
    </div>
    <!--Side Bar-->
         <div class="pimg1">
           <div class="ptext">
             <span class="border">Welcome to GamerPro</span>

           </div>
         </div>
        <section class="section section-light">
          <h2>Section 1</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </section>


        <div class="pimg2">
          <div class="ptext">
            <span class="border trans">Image two text</span>

          </div>
        </div>
        <section class="section section-dark">
          <h2>Section 2</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          </p>
        </section>

        <div class="pimg3">
          <div class="ptext">
            <span class="border trans">Image three text</span>

          </div>
        </div>
        <section class="section section-dark">
          <h2>Section 3</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          </p>
        </section>

        <div class="pimg4">
          <div class="ptext">
            <span class="border">Parallax website</span>

          </div>
        </div>
  </body>
</html>
