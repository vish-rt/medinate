<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous"><link rel="stylesheet" href="dashboard.css">

</head>
<body>
  

<!-- partial:index.partial.html -->
<input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
          <h1> <span class="fab fa-medrt"> </span><a href="LandingPage.html" style="text-decoration:none; color:white;"> <span>Medinate.com</span> </a>
          </h1>
        </div>
        
        <div class="sidebar-menu">
          <ul>
            <li>
              <a href="medsdashboard.php" class="active">
                <span class="fas fa-tachometer-alt"></span>
                <span>Dashboard</span>
              </a>
            </li>
            <li>
              <a href="viewmeds.php">
                <span class="fas fa-tablets" ></span>
                <span>Medicine Details</span>
              </a>
            </li>
            <li>
              <a href="addmeds.php">
                <span class="fas fa-pills"></span>
              <span>Add Medicine</span>
              </a>
            </li>
            <li>
              <a href="medsreq.php">
                <span class="fas fa-file-prescription"></span>
                <span>Require Medicine</span>
              </a>
            </li>
            <li>
              <a href="medsfaq.php">
                <span class="fas fa-tasks"></span>
                <span>FAQ</span>
              </a>
            </li>
            <!--<li>
              <a href="announce.php">
                <span class="fas fa-bullhorn"></span>
                <span>Announcements</span>
              </a>
            </li>
            <li>
              <a href="viewcampaign.php">
                <span class="fas fa-user-circle"></span>
                <span>Campaigns</span>
              </a>
            </li>
            <li>
              <a href="FAQs.php">
                <span class="fas fa-tasks"></span>
                <span>FAQ</span>
              </a>
            </li> -->
          </ul>

        </div>
    </div>    

    <div class="main-content">
      <header>
        <h2>
          <label for="nav-toggle">
            <span class="fas fa-bars"></span>
          </label>
          Dashboard
        </h2>

        <div class="search-wrapper">
          <span class="fas fa-search"> </span>
          <input type="search" placeholder="Search..." />

        </div>

        <div class="user-wrapper">
         <!--<img src="https://bit.ly/3bvT89p" width="40px" height="40px" alt="profile-img">-->
         <div class="">
            <h4>Dont delay give today!</h4>
           
         </div>
        </div>
      </header>

</body>
</html>