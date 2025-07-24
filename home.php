<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <style>

body {

  /* background-color: #dbeddf; */
  background-image: url(bg.png);
  background-size: cover; /* Ensures the image covers the full screen */
    background-position: center; /* Centers the image */
    background-repeat: no-repeat; /* Prevents repeating */
    background-attachment: fixed; /* Keeps the background fixed while content scrolls */
    margin: 0;
    padding: 0; /* Full width of the viewport */
}


.button:hover {
    background: rgba(255, 255, 255, 0.2); /* Light hover effect */
}

/* Navbar Styling */
.navbar {
    background: url('navbar-bg.jpg') no-repeat center center; /* Background image */
    background-size: cover; /* Ensure it covers navbar */
    margin-top: 0%;
    background: transparent;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Light shadow */
}

main {
    min-height: 75vh; /* Ensures enough space for scrolling */
    padding: 50px;
    text-align: center;
    color: white;
}

/* footer styling */
footer {
    background: rgba(255, 255, 255, 0.5);
    color: #003366;
    padding: 15px 0 5px;
    font-family: Arial, sans-serif;
}

.footer-container {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.footer-section {
    margin: 10px;
}

.footer-section h2 {
    font-size: 18px;
    color: #003366;
    margin-bottom: 10px;
}

.footer-section a {
    display: inline-block;
    margin: 5px 8px;
    color: #00aced;
    text-decoration: none;
}

.footer-section a:hover {
    color: #00aced;
}

.footer-btn {
    display: inline-block;
    background: #003366;
    color: white;
    padding: 4px 8px;
    border-radius: 3px;
    margin: 3px 3px;
    text-decoration: none;
    transition: background 0.3s ease;
}

.footer-btn:hover {
    background: #0084b4;
}

.footer-bottom {
    text-align: center;
    margin-top: 10px;
    border-top: 1px solid #333;
    padding-top: 5px;
    font-size: 14px;
}

/* Dropdown Container */
.dropdown-container {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

/* Stylish Dropdown */
select {
  width: 125px;
  padding: 6px 3px;
  font-size: 20px;
  border: 2px solid #001a33;
  border-radius: 6px;
  background-color: #666699;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
  transition: border 0.3s ease, box-shadow 0.3s ease;
  appearance: none; /* remove default arrow */
  background-image: url('data:image/svg+xml;utf8,<svg fill="%23666" height="20" viewBox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/></svg>');
  background-repeat: no-repeat;
  background-position: right 16px center;
  background-size: 20px;
  color: #fff;
  font-weight: bold;
}

/* Hover & Focus Styles */
select:hover {
  border-color: #777;
}

select:focus {
  border-color: #007bff;
  box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.25);
  outline: none;
}


   </style>
</head>

<body>

    <!--Navigation Bar-->
    <nav class="navbar navbar-expand-lg " style="height: 100px;">
        <div class="container-fluid">
             <!-- Logo Section -->
    <div class="logo">
        <a href="/" class="logo-link">
            <img src="global1.png" alt="Company Logo" class="logo-img" style="height: 30%; width: 30%; margin-top:5%;">
        </a>
        </div>
        <h3 style="margin-left: -30%; color: #4d4d33"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nearby Help Provider</b></h3>
    
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 14%;">
            <ul class="navbar-nav me-auto mb-lg-0 mb-lg-0" style="margin-left: -10%;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.php" style="font-size:x-large; color: #000066;"><b>Home</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="scenter/servicepackage.php" style="font-size: x-large; color: #000066"><b>Services</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="about.php" style="font-size: x-large; color: #000066"><b>About Us</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="user/contact.php" style="font-size: x-large; color: #000066"><b>Contact</b></a>
              </li>
            </ul>
            <form class="d-flex" role="search">

            <!-- registration button code -->
              <!-- <button class="btn btn-outline-success" type="submit" > <a href="user/userregistration.php">Register</a></button> &nbsp; &nbsp; -->

              <div class="dropdown-container">
              <select id="userType" onchange="goToRegistrationPage()">
  <option value="">&nbsp;&nbsp;Register</option>
  <option value="user/userregistration.php">User</option>
  <option value="scenter/registration.php">Service Center</option>
</select>
</div>

<script>
  function goToRegistrationPage() {
    var selectedValue = document.getElementById("userType").value;
    if (selectedValue) {
      window.location.href = selectedValue; // Redirect to the selected page
    }
  }
</script>



                    <!-- login button code -->
              <!-- <button class="btn btn-outline-success" type="submit"> <a href="user/userlogin.php">Login</a></button>  -->
           
           
            </form>
          </div>
        </div>
      </nav>
      <img src="man.png" style="margin-left: -5%; margin-top: -10%" alt="">
      <img src="smartphone.png" style="height: 40%; width: 30%; margin-top: -2%; margin-left: -14%" alt="">
      <img src="direction3.png" style="height: 15%; width: 15%; margin-top: -10%; margin-left: 5%;   border: 2px solid #4d6600; border-top-left-radius: 50px; border-top-right-radius: 50px;" alt="...">
    <main style="margin-top: -15%;">
      <!--card about reporting problem-->
      <div class="card" style="width: 13rem; margin-top:-500px; margin-left:-12%; display:inline-block; background:transparent; border:none">
  <div class="card-body">
    <h5 class="card-title" style="color: #3d3d29; font-size:x-large;"><b>Report a Problem</b></h5>
    <p class="card-text" style="color: #3d3d29; font-size:large;"><b>If you are facing any issue or problem click on Report a Problem button. We will provide help as soon as possible. </b></p>
    <a href="user/problem.php" class="btn btn-primary" style="background-color:#006080" > <h4 style="font-size:large">Report a Problem</h4></a>
    </div> 
</div>

</main>
    </div>
    <footer>
    <div class="footer-container">

        <div class="footer-section nav-links">
            <h2>Quick Links</h2>
            <a href="../nearbyhelp/home.php" class="footer-btn">Home</a>
            <a href="../nearbyhelp/policy.php" class="footer-btn">Privacy Policy</a>
            <a href="../nearbyhelp/terms.php" class="footer-btn">Terms and Conditions</a>
            <a href="../nearbyhelp/user/contact.php" class="footer-btn">Contact</a>
        </div>

        <div class="footer-section social">
            <h2>Follow Us</h2>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
        </div>

    </div>

    <div class="footer-bottom">
        <p>© 2025 My Website | Designed by You</p>
    </div>
</footer>

</body>

</html>
