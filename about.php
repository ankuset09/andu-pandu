<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Nearby Help Provider</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

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


            font-family: Arial, sans-serif;
           margin: 0;
            padding: 0;
           
        }

        .navbar {
    background: url('navbar-bg.jpg') no-repeat center center; /* Background image */
    background-size: cover; /* Ensure it covers navbar */
    margin-top: 0%;
    background: transparent;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Light shadow */
}
        .container {
            width: 80%;
            margin: 50px auto;
            padding: 20px;
            
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        p {
            line-height: 1.6;
            color: #555;
        }
        .team {
            text-align: center;
            margin-top: 20px;
        }
        .team img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 10px;
        }
    </style>
</head>
<body>

         <!--Navigation Bar-->
    <nav class="navbar navbar-expand-lg" style="height: 100px;">
        <div class="container-fluid">
             <!-- Logo Section -->
    <div class="logo">
        <a href="/" class="logo-link">
        <img src="global1.png" alt="Company Logo" class="logo-img" style="height: 30%; width: 30%; margin-top:5%">
        </a>
        </div>
    
        <h2 style="margin-left: -20%; color: #4d4d33;"><b>Nearby Help Provider &nbsp;&nbsp;&nbsp;</b></h2>

          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./scenter/servicepackage.php">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./about.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./user/contact.php">Contact</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <button class="btn btn-outline-success" type="submit" > <a href="user/userregistration.php">Register</a></button> &nbsp; &nbsp;
              <button class="btn btn-outline-success" type="submit"> <a href="user/userlogin.php">Login</a></button> 
            </form>
          </div>
        </div>
      </nav>

      
     <div class="d-flex"> 
    
        <!-- Sidebar -->
        <div class="sidebar">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <br>
                    <a href="../nearbyhelp/home.php" class="nav-link active">
                        <span class="icon"></span> Home
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <span class="icon"></span> Dashboard
                    </a>
                </li> -->
                <li class="nav-item">
                    <a href="../nearbyhelp/scenter/servicepackage.php" class="nav-link">
                        <span class="icon"></span>Select Service 
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <span class="icon"></span> Track Problem
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <span class="icon"></span> Feedback
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <span class="icon"></span> Your Profile
                    </a>
                </li>
            </ul>

        <!-- Main Content -->
        <div class="content p-3">
            <!-- <h1>Welcome to the Dashboard</h1> -->
        </div>
    </div>
      
</div>
    

    <div class="container" style="margin-top: -20%; margin-left: 15%;">
        <h1>About Us</h1>
        <p><strong>Nearby Help Provider</strong> is a community-driven platform designed to connect people in need with those who are available to help in real-time. Whether you are a traveler in an unfamiliar place or someone facing an emergency, our platform enables quick assistance from local helpers.</p>
        
        <h2>Our Mission</h2>
        <p>We aim to create a reliable and responsive network where users can report problems and receive timely support from nearby volunteers or professionals.</p>
        
        <h2>How It Works</h2>
        <p>Users can report issues, such as lost items, emergency needs, or location-based help requests. Notifications are sent to nearby users who can respond and offer assistance.</p>
        
        <h2>Meet Our Team</h2>
        <div class="team">
            <img src="team1.jpg" alt="Team Member 1">
            <img src="team2.jpg" alt="Team Member 2">
            <img src="team3.jpg" alt="Team Member 3">
            <p>Our dedicated team is passionate about building a safe and connected world for everyone.</p>
        </div>
    </div>
</body>
</html>
