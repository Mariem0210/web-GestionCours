
<?php
include_once '../../model/cours.php';
include_once '../../controller/coursC.php';


$coursC = new coursC();
$list = $coursC->listCours();


?>
<!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Material Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Material Dashboard 2</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/dashboard.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/tables.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Tables</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/billing.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Billing</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/virtual-reality.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">view_in_ar</i>
            </div>
            <span class="nav-link-text ms-1">Virtual Reality</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/rtl.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
            </div>
            <span class="nav-link-text ms-1">RTL</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/notifications.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">notifications</i>
            </div>
            <span class="nav-link-text ms-1">Notifications</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/profile.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/sign-in.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Sign In</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/sign-up.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">assignment</i>
            </div>
            <span class="nav-link-text ms-1">Sign Up</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <a class="btn btn-outline-primary mt-4 w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard?ref=sidebarfree" type="button">Documentation</a>
        <a class="btn bg-gradient-primary w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
      </div>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Template</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Template</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">Type here...</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a class="btn btn-outline-primary btn-sm mb-0 me-3" target="_blank" href="https://www.creative-tim.com/builder?ref=navbar-material-dashboard">Online Builder</a>
            </li>
            <li class="mt-2">
              <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item d-flex align-items-center">
              <a href="../pages/sign-in.html" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Course</title>
    
   <style>
        /* Custom CSS for styling */
        #ajouterCoursForm {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ffc0cb; /* Pink border */
            border-radius: 5px;
            background-color: #f9f9f9; /* Light background color */
         }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #ff69b4; /* Pink color for labels */
        }

        input[type="text"],
        input[type="date"] {
            width: calc(100% - 10px); /* Adjusting input width */
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn {
            padding: 10px 20px;
            background-color: #ff69b4; /* Pink color for buttons */
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #ff1493; /* Darker pink on hover */
        }

        /* Style for the title box */
        #titleBox {
            max-width: 400px;
            margin: 20px auto 0; /* Added margin-top */
            padding: 20px;
            border: 1px solid #ffc0cb; /* Pink border */
            border-radius: 5px;
            background-color: #f9f9f9; /* Light background color */
        }

        #title {
            margin: 0;
            color: #ff69b4; /* Pink color for title */
        }
        .update-btn {
    padding: 10px 20px;
    background-color: #ff69b4; /* Rose */
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    text-decoration: none;
}

.update-btn:hover {
    background-color: #ffffff; /* Blanc au survol */
    color: #ff69b4; /* Couleur du texte en rose */
}


    </style>
</head>
<body>
   
    <div id="titleBox"> <!-- New div for title box -->
       <center> <h3 id="title">Add Course</h3></center> <!-- Title inside the new div -->
    </div>

    <form method="POST" action="verification.php" id="ajouterCoursForm">
        <div class="form-group">
            <label for="idC">ID:</label>
            <input type="text" id="idC" name="idC" required>
            <span id="idError" class="error"></span>
        </div>

        <div class="form-group">
            <label for="titre">Titre:</label>
            <input type="text" id="titre" name="titre" required>
            <span id="titreError" class="error"></span>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" id="description" name="description" required>
            <span id="descriptionError" class="error"></span>
        </div>

        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>
            <span id="dateError" class="error"></span>
        </div>

        <div class="form-group">
            <label for="duree">Durée (en heures):</label>
            <input type="time" id="duree" name="duree" required>
            <span id="dureeError" class="error"></span>
        </div>

        <div class="form-group">
            <label for="prix">Prix:</label>
            <input type="text" id="prix" name="prix" required>
            <span id="prixError" class="error"></span>
        </div>

        <div class="form-group">
            <center><input type="submit" value="Add" class="btn btn-outline-primary btn-sm mb-0 me-3">
            <input type="reset" value="Reset" class="btn btn-outline-primary btn-sm mb-0 me-3"></center>
        </div>
    </form>
</body>
</html>




    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.getElementById("ajouterCoursForm");
            const idField = document.getElementById("idC");
            const titreField = document.getElementById("titre");
            const descriptionField = document.getElementById("description");
            const dateField = document.getElementById("date");
            const dureeField = document.getElementById("duree");
            const prixField = document.getElementById("prix");

            function validateID() {
                const value = idField.value;
                const errorSpan = document.getElementById("idError");
                if (!value.match(/^\d+$/)) {
                    errorSpan.textContent = "ID doit être un nombre entier positif";
                } else {
                    errorSpan.textContent = "";
                }
            }

           /* function validateDuree() {
                const value = dureeField.value;
                const errorSpan = document.getElementById("dureeError");
                if (!value.match(/^\d+$/)) {
                    errorSpan.textContent = "Durée doit être un nombre entier positif";
                } else {
                    errorSpan.textContent = "";
                }
            }*/

            function validatePrix() {
                const value = prixField.value;
                const errorSpan = document.getElementById("prixError");
                if (!value.match(/^\d+(\.\d{1,2})?$/)) {
                    errorSpan.textContent = "Prix doit être un nombre décimal (ex: 10 ou 10.50)";
                } else {
                    errorSpan.textContent = "";
                }
            }

            idField.addEventListener("input", validateID);
            dureeField.addEventListener("input", validateDuree);
            prixField.addEventListener("input", validatePrix);
        });
    </script>
</body>
</html>

    <!-- End Navbar -->

    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Courses table</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID Course</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">titre</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Duree</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Prix</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Operations</th>
                      
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
           
                  <?php
                  foreach ($list as $cours) {
                  ?>
                      <tr>
                          <td><?= $cours['idC']; ?></td>
                          <td><?= $cours['titre']; ?></td>
                          <td><?= $cours['description']; ?></td>
                          <td><?= $cours['date']; ?></td>
                          <td><?= $cours['duree']; ?></td>
                          <td><?= $cours['prix']; ?></td>
                          <td>
    <a href="updateCours.php?idC=<?= $cours['idC']; ?>" class="update-btn">Modifier</a>
    <a href="deleteCours.php?idC=<?= $cours['idC']; ?>">Supprimer</a>
    
</td>


                          
      
                  
                      </tr>
                      <?php
                  }
                      ?>
                      

             

                  
                  </tbody>
                </table>
                
              </div>
            </div>
            
          </div>
        </div>
        
      </div>
      <div class="container">
    <form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="titre">Enter Course Title:</label>
        <input type="text" id="titre" name="titre" required>
        <button type="submit">Search</button>
    </form>
    <!-- Votre code PHP pour afficher les résultats ici -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
    
    <!-- Loading third party fonts -->
    <link href="http://fonts.googleapis.com/css?family=Arvo:400,700|" rel="stylesheet" type="text/css">
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Loading main css file -->
    <link rel="stylesheet" href="style.css">
    <!--[if lt IE 9]>
    <script src="js/ie-support/html5.js"></script>
    <script src="js/ie-support/respond.js"></script>
    <![endif]-->
    <style>
        /* Your CSS styles here */
       
        /* CSS styles */
        body {
            font-family: 'Arvo', serif;
            background-color: #f7f7f7;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            text-align: center; /* Center the content horizontally */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 auto;
        }
        th, td {
            padding: 10px; /* Adjust cell padding */
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        td {
            background-color: #fff;
        }
        td a {
            text-decoration: none;
            color: #007bff;
        }
        td a:hover {
            text-decoration: underline;
        }
        .button-form {
            margin-top: 10px; /* Add margin to separate buttons */
        }
        .button-form {
            display: flex; /* Use flexbox */
            justify-content: space-between; /* Distribute space between buttons */
            align-items: center; /* Center vertically */
        }
        .button-form form {
            margin-right: 10px; /* Add some space between buttons */
        }
        .button-form form:last-child {
            margin-right: 0; /* Remove margin from the last button */
        }
        .button-form input[type="submit"] {
            font-size: 14px; /* Adjust the font size */
            padding: 5px 10px; /* Adjust the padding */
        }
    </style>
</head>
<body>
<div class="container">
    <?php
    // Check if ID is provided
    if(isset($_GET['titre']) && !empty($_GET['titre'])) {
        $titre = $_GET['titre'];

        try {
            // Establish connection to the database
            $conn = config::getConnexion();

            // Prepare and execute the SQL query to select record based on provided ID
            $query = $conn->prepare("SELECT * FROM cours WHERE titre = :titre");
            $query->bindParam(':titre', $titre);
            $query->execute();

            // Fetch the record as an associative array
            $result = $query->fetch();

            // Check if record is found
            if($result) {
                // Display the information in a table
                echo '<table>';
                echo '<tr><th>ID Cours</th><th>Titre</th><th>description</th><th>date</th><th>duree</th><th>prix</th></tr>';
                echo '<tr>';
                echo '<td>' . $result['idC'] . '</td>';
                echo '<td>' . $result['titre'] . '</td>';
                echo '<td>' . $result['description'] . '</td>';
                echo '<td>' . $result['date'] . '</td>';
                echo '<td>' . $result['duree'] . '</td>';
                echo '<td>' . $result['prix'] . '</td>';
                echo '</tr>';
                echo '</table>';
            } else {
                echo '<p>No record found with Title: ' . $titre . '</p>';
            }
        } catch (PDOException $e) {
            // Catch any exceptions and display an error message
            echo '<p>Connection failed: ' . $e->getMessage() . '</p>';
        }
    } else {
       // echo '<p>Please provide a title for search.</p>';
    }
    ?>
</div>
<a href="tri.php"><button>Go to Sorting Page</button></a>
</body>
</div>
</html>


      
</html>