<!DOCTYPE html>
<html>
  <head>
    <title>Welcome to Gaming PROOOOOOOOOOOOOOO</title>
    <link rel="stylesheet" type="text/css"  href="design/style.css">
    <link rel="shortcut icon" href="design/LOGO.png">
    <script src="script.js">
    </script>

  </head>
  <body>
    <script src="http://code.jquery.com/jquery-3.1.0.min.js"></script>
    <?php
      session_start();
        if(isset($_SESSION['user'])){
           header("location:index.php");
        }
        if(@$_GET['Empty']==true){
    ?> <div style="margin-top:430px; margin-left:100px; color:red; background-color: pink; border-style: ridge; border-color: red; margin-right: 1100px; text-align: center; padding:2px;"><?php echo $_GET['Empty'] ?></div>
    <?php } ?>
    <?php if(@$_GET['Invalid']==true){  ?>
       <div style="margin-top:430px; margin-left:100px; color:red; border-style: ridge; background-color: pink; border-color: red; margin-right: 1100px; text-align: center;"><?php echo $_GET['Invalid'] ?></div>
     <?php } ?>
     <?php if(@$_GET['correct']==true){  ?>
        <div style="margin-top:430px; margin-left:100px; color: #154903; border-style: ridge; background-color: #67A152; border-color: #1BDB4E; margin-right: 1100px; text-align: center;"><?php echo $_GET['correct'] ?></div>
      <?php } ?>
    <div class="login-box">
      <h1 id="log">Login</h1>
        <form action="process.php" method="post">
            <img src="design/usericon.png" alt="username" id="username" class="icon">
            <div class="textbox">
              <input type="text" name="username" id="user" placeholder="username">
            </div>
            <span class="eye" onclick="showPass()">
                <img src="design/eye.png" id="eyes" class="icon">
                <img src="design/eye close.png" id="eyeslash" class="icon">
            </span>
            <div class="textbox">
              <input type="password" name="pass" id="show" placeholder="password">
            </div>
            <input type="submit" id="submit" class="btn" name="sign" value="Sign in" onclick="validate()">
            <input type="button" class="btn" value="Register" onclick="myFunction()">
        </form>
    </div>



    <?php
    $xml = new DOMDocument();
  	$xml->load("Accounts.xml");

    if(isset($_POST['add'])) {
      $acc = simplexml_load_file('Accounts.xml');
      //for username//
      $checkaccs = $xml->getElementsByTagName("Account");
      //for username//
      $account = $acc->addChild('Account');
      $account->addChild('FirstName', $_POST['Fname']);
      $account->addChild('LastName',$_POST['Lname']);
      $account->addChild('Age', $_POST['age']);
      $account->addChild('MobileAddress', $_POST['MobAdd']);
      $birthday = $_POST['Day']." ".$_POST['Month']." ".$_POST['Year'];
      $account->addChild('Birthday', $birthday);
      $account->addChild('Gender', $_POST['gender']);
      //lopping accounts//
      foreach ($checkaccs as $checkacc) {
        $email = $checkacc->getElementsByTagName("Email")->item(0)->nodeValue;
        $user = $checkacc->getElementsByTagName("Username")->item(0)->nodeValue;

        if ($user == $_POST['user'] || $email == $_POST['email']) {
          header("location:login.php?Invalid=username and email already used");
          break;
        }
        else {
          $account->addChild('Email', $_POST['email']);
          $account->addChild('Username', $_POST['user']);
          $account->addChild('Password', $_POST['pass']);
          if($_POST['pass'] == $_POST['cpass']){
            file_put_contents('Accounts.xml', $acc->asXML());
            header("location:login.php?correct=successful registration");
          }
          else {
            header("location:login.php?Invalid=unpair password");
          }
        }
      }
      //lopping accounts//
    }
    ?>
    <div class="modal">
      <div class="contents">
        <form action="login.php" method="post">
          <div class="close"> <img class="closeimg" src="design/close.jpg" style="width:50px; " alt="close" onclick="closing()"> </div>
            <img id="logo" src="design/LOGO.png" alt="Gaming Point">
              <div class="row1">
                  <input class="in" type="text" name="Fname" placeholder="First Name" required><br>
                  <input class="in" type="text" name="Lname" placeholder="Last Name" required><br>
                  <input class="in" type="text" name="age" placeholder="Age" required onkeyup="numberOnly(this)"><br>
                  <input class="in" type="text" name="MobAdd" placeholder="Mobile or Address" required><br>
                  <div class="bday">Birthday</div>
                     <div  class="in2">
                      <select name="Day" required>
                          <option>- Day -</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                          <option value="13">13</option>
                          <option value="14">14</option>
                          <option value="15">15</option>
                          <option value="16">16</option>
                          <option value="17">17</option>
                          <option value="18">18</option>
                          <option value="19">19</option>
                          <option value="20">20</option>
                          <option value="21">21</option>
                          <option value="22">22</option>
                          <option value="23">23</option>
                          <option value="24">24</option>
                          <option value="25">25</option>
                          <option value="26">26</option>
                          <option value="27">27</option>
                          <option value="28">28</option>
                          <option value="29">29</option>
                          <option value="30">30</option>
                          <option value="31">31</option>
                      </select><select name="Month" required>
                          <option>- Month -</option>
                          <option value="January">January</option>
                          <option value="Febuary">Febuary</option>
                          <option value="March">March</option>
                          <option value="April">April</option>
                          <option value="May">May</option>
                          <option value="June">June</option>
                          <option value="July">July</option>
                          <option value="August">August</option>
                          <option value="September">September</option>
                          <option value="October">October</option>
                          <option value="November">November</option>
                          <option value="December">December</option>
                      </select><select name="Year" required>
                          <option>- Year -</option>
                          <option value="2005">2005</option>
                          <option value="2004">2004</option>
                          <option value="2003">2003</option>
                          <option value="2002">2002</option>
                          <option value="2001">2001</option>
                          <option value="2000">2000</option>
                          <option value="1999">1999</option>
                          <option value="1998">1998</option>
                          <option value="1997">1997</option>
                          <option value="2020">1996</option>
                          <option value="2019">1995</option>
                          <option value="2018">1994</option>
                          <option value="2017">1993</option>
                          <option value="2016">1992</option>
                          <option value="2015">1991</option>
                          <option value="2014">1990</option>
                          <option value="2013">1989</option>
                          <option value="2012">1988</option>
                          <option value="2011">1987</option>
                          <option value="2010">1986</option>
                          <option value="2009">1985</option>
                          <option value="2008">1984</option>
                          <option value="2007">1983</option>
                          <option value="2006">1982</option>
                          <option value="2006">1981</option>
                          <option value="2006">1980</option>
                      </select><br>
                    </div>
                  <div class="gender">Gender</div>
                  <input class="in3" type="radio" name="gender" value="male" checked> <span class="gender">Male</span>
                  <input class="in3"type="radio" name="gender" value="female"><span class="gender"> Female</span><br>
              </div>
              <div class="row2">
                  <input class="in" type="email" name="email" placeholder="Email" required><br>
                  <input class="in" type="text" name="user" placeholder="Username"><br>
                  <input class="in" type="password" name="pass" placeholder="Password" maxlength="8" onclick="myPassword()" required><br>
                  <input class="in" type="password" name="cpass" placeholder="Confirm Password" maxlength="8" required><br>
                  <input class="in" id="size-btn" type="submit" name="add" value="Sign up">
              </div>
          </form>
      </div>
    </div>

  </body>
</html>
