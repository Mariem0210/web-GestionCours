

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Courses | Lincoln High School</title>
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Arvo:400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		
		<div id="site-content">
			<header class="site-header">
				<div class="primary-header">
					<div class="container">
						<a href="index.html" id="branding">
							<img src="images/logo.png" alt="Lincoln high School">
							<h1 class="site-title">Wadha7li</h1>
						</a> <!-- #branding -->
						
						<div class="main-navigation">
							<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
							<ul class="menu">
								<li class="menu-item"><a href="index.html">Home</a></li>
								<li class="menu-item current-menu-item"><a href="course.html">Courses</a></li>
								<li class="menu-item"><a href="student.html">Students</a></li>
								<li class="menu-item"><a href="event.html">Events</a></li>
								<li class="menu-item"><a href="contact.html">Contact</a></li>
							</ul> <!-- .menu -->
						</div> <!-- .main-navigation -->

						<div class="mobile-navigation"></div>
					</div> <!-- .container -->
				</div> <!-- .primary-header -->

				<div class="page-title">
					<div class="container">
						<h2>Join Our Courses</h2>
					</div>
				</div>
			</header>
		</div>
<?php
                $dsn = "mysql:host=localhost;dbname=wadha7li";
                $username = "root";
                $password = "";
                
                try {
                    $conn = new PDO($dsn, $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                    $sql = "SELECT * FROM cours";
    				$stmt = $conn->query($sql);
    
    // Vérifier si des cours ont été trouvés
    if ($stmt->rowCount() > 0) {
        // Afficher les données des cours
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<main class="main-content">
			
                    <div class="fullwidth-block inner-content">
                        <div class="container">
                            <div class="col-md-7">
                                <div class="content">
                                    <article>
                                        <header>
                                            <h2 class="entry-title">' . $row["titre"] . '</h2>
                                            <div class="entry-meta">
                                                <span class="date"><i class="icon-calendar"></i>' . $row["date"] . '</span>
                                                <span class="time"><i class="icon-clock"></i>' . $row["duree"] . '</span>
                                                <span class="price"><i class="icon-coins"></i>' . $row["prix"] . '</span>
                                            </div>
                                        </header>
                                        <div class="entry-content">
                                           
                                            <p>' . $row["description"] . '</p>
                                        </div>
                                        <div class="actions">
											<a href="evalF.php" class="button green">Evaluate this course  </a>
                                            <a href="chat.php" class="button secondary">Ask about details</a>
											
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>';
        }
    } else {
        echo "Aucun cours trouvé.";
    }
} catch(PDOException $e) {
    echo "Erreur: " . $e->getMessage();
}

// Fermer la connexion à la base de données
$conn = null;
?>
