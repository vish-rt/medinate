<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
  <link rel="stylesheet" href="dashboard.css">

</head>

<body>


  <!-- partial:index.partial.html -->
  <input type="checkbox" id="nav-toggle">
  <div class="sidebar">
    <div class="sidebar-brand">
      <h1> <span class="fab fa-medrt"> </span> <a href="LandingPage.html" style="text-decoration: none; color: white;"> <span>Medinate.com</span></a>
      </h1>
    </div>

    <div class="sidebar-menu">
      <ul>
        <li>
          <a href="dashboard.php" class="active">
            <span class="fas fa-tachometer-alt"></span>
            <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="viewdonor.php">
            <span class="fas fa-users"></span>
            <span>Blood Collection Details</span>
          </a>
        </li>
        <li>
          <a href="adddonor.php">
            <span class="fas fa-user-plus"></span>
            <span>Add Donor</span>
          </a>
        </li>
        <li>
          <a href="addblood.php">
            <span class="fas fa-syringe"></span>
            <span>Add Blood</span>
          </a>
        </li>
        <li>
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
        </li>
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
        <!-- <img src="https://bit.ly/3bvT89p" width="40px" height="40px" alt="profile-img">-->
        <div class="">
          <h4>Give blood! Save Life!</h4>

        </div>
      </div>
    </header>

    <main>
      <div class="cards">
        <div class="card-single">
          <div>
            <?php include "dashboardcount.php"; ?>


            <a href="viewdonor.php">
              <span>Total Donors</span></a>
          </div>
          <div>
            <span class="fas fa-users"></span>
          </div>
        </div>
        <div class="card-single">
          <div>
            <!--<h1>12</h1> -->
            <?php include 'dashbloodcount.php'; ?>
            <a href="viewblood.php">
              <span>Available Blood</span></a>
          </div>
          <div>
            <span class="fa fa-heartbeat fa-5x"></span>
          </div>
        </div>
        <div class="card-single">
          <div>
            <?php include 'dashannouncecount.php'; ?>
            <a href="announce.php">
              <span>Announcements</span></a>
          </div>
          <div>
            <span class="fas fa-bullhorn"></span>
          </div>
        </div>
        <div class="card-single">
          <div>
            <h1></h1>
            <a href="adddonor.php">
              <span>Donate Blood Now</span></a>
          </div>
          <div>
            <span class="fas fa-tint"></span>
          </div>
        </div>

      </div>

      <div class="recent-grid">
        <div class="projects">
          <div class="card">
            <div class="card-header">
              <h2>Associated NGOs</h2>
              <button>See all <span class="fas fa-arrow-right"></span> </button>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table width="100%">
                  <thead>
                    <tr>
                      <td>Name</td>
                      <td>Location</td>
                      <td>Phone Number</td>

                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>NAR Foundation</td>
                      <td>Delhi</td>
                      <td>
                        <span class="status purple"></span>
                        8082140693
                      </td>
                    </tr>
                    <tr>
                      <td>Laxmi Charitable Trust</td>
                      <td>Mumbai</td>
                      <td>
                        <span class="status orange"></span>
                        9769867144
                      </td>
                    </tr>
                    <tr>
                      <td>Advitya</td>
                      <td>Bangalore</td>
                      <td>
                        <span class="status pink"></span>
                        9820844415
                      </td>
                    </tr>
                    <tr>
                      <td>Think Foundation</td>
                      <td>Pune</td>
                      <td>
                        <span class="status purple"></span>
                        9852364155
                      </td>
                    </tr>
                    <tr>
                      <td>Madras Blood Bank</td>
                      <td>Chennai</td>
                      <td>
                        <span class="status pink"></span>
                        022 2893 6203
                      </td>
                    </tr>
                  </tbody>

                </table>
              </div>
            </div>

          </div>

        </div>
        <!-- <div class="customers">
            <div class="card">
              <div class="card-header">
                  <h2>New Customers</h2>
                  <button>See all <span class="fas fa-arrow-right"></span> </button>
              </div>
              <div class="card-body">
                <div class="customer">
                  <div class="info">
                    <img src="https://bit.ly/3bvT89p" height="40px" width="40px" alt="customer">
                    <div>
                      <h4>Sargam</h4>
                      <small>Designer</small>
                    </div>
                  </div>
                  <div class="contact">
                      <span class="fas fa-user-circle"></span>
                      <span class="fas fa-comment"></span>
                      <span class="fas fa-phone-alt"></span>
                    </div>
                </div>
                <div class="customer">
                  <div class="info">
                    <img src="https://bit.ly/3bvT89p" height="40px" width="40px" alt="customer">
                    <div>
                      <h4>Chandni Rana</h4>
                      <small>Designer</small>
                    </div>
                  </div>
                  <div class="contact">
                      <span class="fas fa-user-circle"></span>
                      <span class="fas fa-comment"></span>
                      <span class="fas fa-phone-alt"></span>
                    </div>
                </div>
                <div class="customer">
                  <div class="info">
                    <img src="https://bit.ly/3bvT89p" height="40px" width="40px" alt="customer">
                    <div>
                      <h4>Raj Desai</h4>
                      <small>Designer</small>
                    </div>
                  </div>
                  <div class="contact">
                      <span class="fas fa-user-circle"></span>
                      <span class="fas fa-comment"></span>
                      <span class="fas fa-phone-alt"></span>
                    </div>
                </div>
                <div class="customer">
                  <div class="info">
                    <img src="https://bit.ly/3bvT89p" height="40px" width="40px" alt="customer">
                    <div>
                      <h4>Abhishek Sharma</h4>
                      <small>Designer</small>
                    </div>
                  </div>
                  <div class="contact">
                      <span class="fas fa-user-circle"></span>
                      <span class="fas fa-comment"></span>
                      <span class="fas fa-phone-alt"></span>
                    </div>
                </div>
                <div class="customer">
                  <div class="info">
                    <img src="https://bit.ly/3bvT89p" height="40px" width="40px" alt="customer">
                    <div>
                      <h4>Damon Salvatore</h4>
                      <small>CEO</small>
                    </div>
                  </div>
                  <div class="contact">
                      <span class="fas fa-user-circle"></span>
                      <span class="fas fa-comment"></span>
                      <span class="fas fa-phone-alt"></span>
                    </div>
                </div>
                <div class="customer">
                  <div class="info">
                    <img src="https://bit.ly/3bvT89p" height="40px" width="40px" alt="customer">
                    <div>
                      <h4>Paul Wesley</h4>
                      <small>CEO</small>
                    </div>
                  </div>
                  <div class="contact">
                      <span class="fas fa-user-circle"></span>
                      <span class="fas fa-comment"></span>
                      <span class="fas fa-phone-alt"></span>
                    </div>
                </div>
                <div class="customer">
                  <div class="info">
                    <img src="https://bit.ly/3bvT89p" height="40px" width="40px" alt="customer">
                    <div>
                      <h4>W-accinge</h4>
                      <small>CEO</small>
                    </div>
                  </div>
                  <div class="contact">
                      <span class="fas fa-user-circle"></span>
                      <span class="fas fa-comment"></span>
                      <span class="fas fa-phone-alt"></span>
                    </div>
                </div>
              </div>
            </div>

          </div>
          
        </div>  

      </main>
    </div>
<!-- partial -->
        <div class="row">

          <div class=".col-lg-12">

            <div id="content">

              <div class="container-fluid">

                <div class="row-fluid">

                  <div class="span12">

                    <div id="piechart" style="width: 690px; height: 320px; margin-left:auto; margin-right:auto;"></div>

                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
        <!-- /.col-lg-8 -->

        <!-- /.col-lg-4 -->
      </div>
</body>

</html>