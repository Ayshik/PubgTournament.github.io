<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Parker's Dashboard</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="parkerarea.css" />
    <link
    href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic"
    rel="stylesheet"
  />
  <link
    href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans"
    rel="stylesheet"
  />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <header class="header">
      <div class="bgimage">
        <div class="menu">
          <div class="leftmenu">
            <h3><a herf="home.html">Parkit</a></h3>
          </div>
          <div class="welcome">
            <h1>Welcome Parker ~ <?php echo $_SESSION["loggedinuser"];?></h1>
            <div class="rightmenu">
              <button id="buttonone" < onclick="window.location.href='logout.php';">
                Logout
              </button>
          </div>
        </div>
    </header>
    <input type="checkbox" id="check" />
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
      <header>Parker's Dashboadr</header>
      <ul>
        <li>
          <a href="parkerarea.php"><i class="fas fa-qrcode"></i>Dashboard</a>
        </li>
        <li>
          <a href="profile.php"><i class="fas fa-link"></i>Profile</a>
        </li>
        <li>
          <a href="parkerhistory.php"><i class="fas fa-stream"></i>History</a>
        </li>
        <li>
          <a href="report.php"><i class="fas fa-calendar-week"></i>Report</a>
        </li>
      </ul>
    </div>
    <section>
    <div class="main-section">
		<div class="dashbord">
			<div class="icon-section">
				<i class="fa fa-money" aria-hidden="true"></i><br>
				<small>Book Parking</small>
				<p>Active Place -- <?php echo $Ao ; ?></p>
			</div>
			<div class="detail-section">
				<a href="olist.php">Find your best place to park </a>
			</div>
		</div>
		<div class="dashbord dashbord-green">
			<div class="icon-section">
				<i class="fa fa-tasks" aria-hidden="true"></i><br>
				<small>Release Parking</small>
				<p>You have <?php echo $Ta ; ?> parking going on.</p>
			</div>
			<div class="detail-section">
				<a href="release.php">Release Now </a>
			</div>
		</div>
    </div>
    </section>
  </body>
</html>
