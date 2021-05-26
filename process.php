<?php
  session_start();
	$xml = new DOMDocument();
	$xml->load("Accounts.xml");

	$accounts = $xml->getElementsByTagName("Account");

	if(isset($_POST['sign'])){
		if (empty($_POST['username']) || empty($_POST['pass'])) {
			 	header("location:login.php?Empty=Please Fill in the Blanks");
		}else {
								foreach ($accounts as $account){
                  $name = $account->getElementsByTagName("name")->item(0)->nodeValue;
                  $email = $account->getElementsByTagName("Email")->item(0)->nodeValue;
									$user = $account->getElementsByTagName("Username")->item(0)->nodeValue;
									$pass = $account->getElementsByTagName("Password")->item(0)->nodeValue;

                  if($_POST['username']=="default" &&  $_POST['pass']== "default"){
                    header("location:login.php?Invalid=Wrong Username and Password");
                  }
									elseif($user == $_POST['username'] || $email == $_POST['username']){
												if($pass ==  $_POST['pass']){
													$_SESSION['user'] = $_POST['username'];
													header("location:index.php");
												 }else {
													header("location:login.php?Invalid=Please Enter Correct Password");
												}
										}else{
											header("location:login.php?Invalid=Please Enter Correct Password and Username ");

										}
									}
							}
			}	else {
				echo "not working";
		}

?>
