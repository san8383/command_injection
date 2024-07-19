<!DOCTYPE html>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$output = '';

function filter($str)
{
  $operators = ['&', '|', ';', '\\', '/', ' '];
  foreach ($operators as $operator) {
    if (strpos($str, $operator)) {
      return true;
    }
  }

  $words = ['whoami', 'echo', 'cat', 'rm', 'mv', 'cp', 'id', 'curl', 'wget', 'cd', 'sudo', 'mkdir', 'man', 'history', 'ln', 'grep', 'pwd', 'file', 'find', 'kill', 'ps', 'uname', 'hostname', 'date', 'uptime', 'lsof', 'ifconfig', 'ipconfig', 'ip', 'tail', 'netstat', 'tar', 'apt', 'ssh', 'scp', 'less', 'more', 'awk', 'head', 'sed', 'nc', 'netcat'];
  foreach ($words as $word) {
    if (strpos($str, $word) !== false) {
      return true;
    }
  }

  return false;
}

if (isset($_POST['ip'])) {
  $ip = $_POST['ip'];
  if (filter($ip)) {
    $output = "Invalid input";
  } else {
    $cmd = "bash -c 'ping -c 2 " . $ip . "'";
    $output = shell_exec($cmd);
  }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corporate Landing Page</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
   <link href="prism.css" rel="stylesheet" />

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Main Menu -->
    <header>
        <div class="container">
            <img src="img/logo.png" alt="Company Logo" class="logo">
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#product">Our Product</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Information and Slider -->
    <section id="home">
        <div class="slider-container">
            <div class="slider">
                <div class="slides">
                    <div class="slide"><img src="img/slider1.jpg" alt="Slide 1"></div>
                    <div class="slide"><img src="img/slider2.jpg" alt="Slide 2"></div>
                    <div class="slide"><img src="img/slider3.jpg" alt="Slide 3"></div>
                </div>
            </div>
        </div>
        <div class="info">
            <h1>Welcome to Our Company</h1>
            <p>We provide top IT services for students and professionals in the field of cybersecurity.</p>
        </div>
    </section>

    <!-- About Us -->
    <section id="about">
        <div class="container">
            <h2>About Us</h2>
            <p>Our company specializes in providing IT and cybersecurity services. We train students and professionals by offering cutting-edge technology and knowledge.</p>
        </div>
    </section>

    <!-- Our Product -->
    <section id="product">
        <div class="container">
            <h2>Our Product</h2>
            <p>We offer a wide range of products and services, including test machines for hacking, which help students enhance their skills in penetration testing.</p>
		<h3>Try our online host checker</h3>	
	  <div class="main">
    <h1>Host Checker</h1>

    <form method="post" action="">
      <label>Enter an IP Address</label>
      <input type="text" name="ip" placeholder="127.0.0.1" pattern="^((\d{1,2}|1\d\d|2[0-4]\d|25[0-5])\.){3}(\d{1,2}|1\d\d|2[0-4]\d|25[0-5])$">
      <button type="submit">Check</button>

    </form>

    <p>
    <pre>


        <code class="language-bash">
<?php
echo $output;
?>
</code>
</pre>
    </p>

  </div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>	
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2024 Corporate Landing Page. All rights reserved.</p>
        </div>
    </footer>
<!-- Prism.js JavaScript -->
    <script src="prism.js"></script>
    <script src="scripts.js"></script>
</body>
</html>
