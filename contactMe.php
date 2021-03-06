<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Contact Me | AbhayManiyar</title>

    <!-- Bootstrap -->
    <link href="./Semantic-UI-master/css" rel="stylesheet" type="text/css">

    <!-- build:css styles/main.css -->
    <link rel="stylesheet" href="./Semantic-UI-master/main.css">
    <!-- endbuild -->
    <!-- Bootstrap -->
    <!-- <link href="./bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet"> -->
      <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./Semantic-UI-master/dist/semantic.min.css">
    <link rel="stylesheet" href="./Navbar template for Semantic-UI_files/semantic.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background-color:;">
        <!-- <div class="ui secondary  menu ">
          <a class="active item">
            Home
          </a>
          <a class="item">
            Messages
          </a>
          <a class="item">
            Friends
          </a>
          <div class="right menu">
            <div class="item">
              <div class="ui icon input">
                <input type="text" placeholder="Search...">
                <i class="search link icon"></i>
              </div>
            </div>
            <a class="ui item">
              Logout
            </a>
          </div>
        </div> -->
    <!-- <div class="ui menu fixed">
    <div class="ui container">
    <a class="item" href="./index.html">
      <i class="circular teal inverted home icon"></i> Home
    </a>
    <a class="item">
      <i class="circular purple inverted mail icon"></i> My works
    </a>
    <a class="item" href="./blogEx.html">
      <i class="circular blue inverted browser icon"></i>My Blogs
    </a>
    <a class="item" href="./aboutMe.html">
      <i class="circular green inverted user icon"></i> About me
    </a>
    <a class="active item" href="./contactMe.html">
      <i class="circular red inverted chat icon"></i>Contact me
    </a>
  	</div> -->
    <div class="ui page grid">
        <div class="computer tablet only row">
            <div class="ui item six large red menu navbar">
                <a class="item" href="./index.html">
                    <i class="circular teal home icon"></i><b> Home</b>
                </a>
                <a class="item" href="#">
                  <i class="circular purple mail icon"></i><b> My works</b>
                </a>
                <a class="item" href="./blogEx.html">
                  <i class="circular yellow browser icon"></i><b>My Blogs</b>
                </a>
                <a class="item" href="./aboutMe.html">
                  <i class="circular green user icon"></i><b> About me</b>
                </a>
                <a class="active item" href="./contactMe.php">
                  <i class="circular inverted red chat icon"></i><b>Contact me</b>
                </a>
                <a class="ui dropdown item"><b>Dropdown</b>
                  <i class="dropdown icon"></i>
                  <div class="menu">
                    <div class="item">Action</div>
                    <div class="item">Another action</div>
                    <div class="item">Something else here</div>
                    <div class="ui divider"></div>
                    <div class="item">Seperated link</div>
                    <div class="item">One more seperated link</div>
                  </div>
                </a>
            </div>
        </div>
        <div class="mobile only narrow row">
            <div class="ui large navbar menu">
                <a href="#" class="brand item">Project Name</a>
                <div class="right menu open">ab
                    <a href="#" class="menu item">
                        <i class="reorder icon"></i>
                    </a>
                </div>
            </div>
            <div class="ui vertical red navbar menu" style="display: none;">
                <a class="item" href="./index.html" style="padding-top:13px; padding-bottom:15px;">
                    <i class="circular teal  home icon"></i><b> Home</b>
                </a>
                <a class="item" href="#" style="padding-top:13px; padding-bottom:15px;">
                    <i class="circular purple  mail icon"></i> <b>My works</b>
                </a>
                <a class="item" href="./blogEx.html" style="padding-top:13px; padding-bottom:15px;">
                    <i class="circular yellow  browser icon"></i><b>My Blogs</b>
                </a>
                <a class="item" href="./aboutMe.html" style="padding-top:13px; padding-bottom:15px;">
                    <i class="circular green user icon"></i> <b>About me</b>
                </a>
                <a class="active item" href="./contactMe.php" style="padding-top:13px; padding-bottom:15px;">
                    <i class="circular inverted red chat icon"></i><b>Contact me</b>
                </a>
                    <!-- <div class="<b>ui item"></b>
                    <div class="text">Dropdown</div>
                    <div class="menu">
                        <a class="item">Action</a>
                        <a class="item">Another action</a>
                        <a class="item">Something else here</a>
                        <a class="ui aider"></a>
                        <a class="item">Seperated link</a>
                        <a class="item">One more seperated link</a>
                      </div>
                </div> --> <!--- optional dropdown ---->
            </div>
        </div>
        <div style="padding-top:25px; padding-bottom: 20px;">
            <div class="ui piled very padded text container segment" style="text-align:center">
                <h2 class="ui header" style="text-align:center"></h2>
                <p>
                    <strong>Hello Visitor!</strong><br>
                    I am Abhay Maniyar. I am a student of Shri Vaishnav Institute of Technology and Science, Indore(M.P.). I am persuing Bachelor of Engineering from Computer Science stream. 
                </p>
                <?php
                    global $errName, $errEmail, $errMessage, $errHuman, $result;
                    if (isset($_POST["submit"])) {
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $message = $_POST['message'];
                        $human = intval($_POST['human']);
                        $from = 'Demo Contact Form'; 
                        $to = 'abhaymaniyar@live.in'; 
                        $subject = 'Message from Contact Demo ';
                        $body ="From: $name\n E-Mail: $email\n Message:\n $message";
                        // Check if name has been entered
                        if (!$_POST['name']) {
                             $errName = 'Please enter your name';
                        }

                        // Check if email has been entered and is valid
                        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                            $errEmail = 'Please enter a valid email address';
                        }

                        //Check if message has been entered
                        if (!$_POST['message']) {
                            $errMessage = 'Please enter your message';
                        }
                        //Check if simple anti-bot test is correct
                        if ($human !== 5) {
                            $errHuman = 'Your anti-spam is incorrect';
                        }
                        // If there are no errors, send the email
                        if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
                            if (mail ($to, $subject, $body, $from)) {
                                $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
                            } else {
                                $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
                            }
                        }
                    }
                ?>
                <div class="ui segment" style="width:50%">
                    <form class="form-horizontal" role="form" method="post" action="contactMe.php">
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php if(isset($_POST['name'])){echo htmlspecialchars($_POST['name']);} ?>">
							<?php echo "<p class='text-danger'>$errName</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php if(isset($_POST['email'])){echo htmlspecialchars($_POST['email']);} ?>">
							<?php echo "<p class='text-danger'>$errEmail</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="col-sm-2 control-label">Message</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="4" name="message" placeholder="Let's Talk"><?php if(isset($_POST['message'])){echo htmlspecialchars($_POST['message']);}?></textarea>
							<?php echo "<p class='text-danger'>$errMessage</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
							<?php echo "<p class='text-danger'>$errHuman</p>";?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<?php echo $result; ?>	
						</div>
					</div>
				</form> 
                </div>
            </div>
        </div>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- // <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
    <script src="./Semantic-UI-master/dist/semantic.min.js"></script>
    <!-- build:js scripts/vendor.js -->
    <!-- bower:js -->
    <script src="./Semantic-UI-master/jquery.min.js"></script>
    <script src="./Navbar template for Semantic-UI_files/semantic.min.js"></script>
    <script src="./Navbar template for Semantic-UI_files/main.js"></script>
    <!-- endbower -->
    <!-- endbuild -->
</body>
</html>