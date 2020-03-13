<?php
session_start();
include("global.php");
include("config.php");
if( checklogin() == true ) {
	$user = $_SESSION['discord_user'];
	$pterodactyl_panelinfo = $conn->query("SELECT * FROM users WHERE discord_id='" . mysqli_real_escape_string($conn, $user->id) . "'")->fetch_assoc();
	$pterodactyl_username = $pterodactyl_panelinfo['pterodactyl_username'];
	$pterodactyl_password = $pterodactyl_panelinfo['pterodactyl_password'];
} else {
	header("Location: auth");
	die();
}
include("plans.php");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Free Minecraft Server Hosting">
  <meta name="author" content="MarioLatifFathy">
  
  <!-- jQuery -->
  <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
  
  <title>FalixNodes | Pricing</title>
  
  	  <script>
		  $(window).on('load', function(){
			$("#createServerBox").load("create");
		  });
	  </script>
	  
	  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
	  (adsbygoogle = window.adsbygoogle || []).push({
		google_ad_client: "ca-pub-9842180416703608",
		enable_page_level_ads: true
	  });
	</script>
	
  <!-- Favicon -->
  <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="./assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="./assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="./assets/css/argon.css?v=1.0.0" rel="stylesheet">
</head>

<body>
  <!-- Sidenav -->
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          </a>
          </div>
        </li>
              </span>
            </div>
          </a>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
        <!-- Collapse header -->
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <!-- Navigation -->
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
        <!-- Brand -->
        <!-- Form -->
        </form>
        <!-- User -->
                </span>
                </div>
              </div>
            </a>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-lg-6">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
      </div>
      <div class="row mt-5">
          <br /><br /><br /><br /><br /><br />
		  <div id="title" align="center">
			<center><h2>Onetime Plans</h2></center>
		  </div>
		  <div class="card-deck mb-3 text-center">
			<div class="card mb-4 box-shadow">
			  <div class="card-header">
				<h4 class="my-0 font-weight-normal">Tier #1</h4>
			  </div>
			  <div class="card-body">
				<h1 class="card-title pricing-card-title">5€ <small class="text-muted">/ onetime</small><br><small class="text-muted">(OUT OF STOCK)</small></h1>
				<ul class="list-unstyled mt-3 mb-4">
				  <li>32 GB Ram Balance</li>
				  <li>20 Servers</li>
				  <li>7 Cores Per Server</li>
				  <li>10 GB Disk Per Server</li>
				  <li>4 Databases Per Server</li>
				  <li>1 Extra Port Per Server</li>
				  <li>Access to Donator Nodes</li>
				  <li>Have a Cool Donator Rank</li>
				</ul>
				<a class="btn btn-lg btn-block btn-primary" href="#">Purchase (PayPal)</a>
				<a class="btn btn-lg btn-block btn-primary" href="#">Purchase (Xsolla)</a>
			  </div>
			</div>
			
			
			<div class="card mb-4 box-shadow">
			  <div class="card-header">
				<h4 class="my-0 font-weight-normal">Tier #2</h4>
			  </div>
			  <div class="card-body">
				<h1 class="card-title pricing-card-title">10€ <small class="text-muted">/ onetime</small><br><small class="text-muted">(SUMMER SALE)</small></h1>
				<ul class="list-unstyled mt-3 mb-4">
				  <li>64 GB Ram Balance</li>
				  <li>40 Servers</li>
				  <li>8 Cores Per Server</li>
				  <li>20 GB Disk Per Server</li>
				  <li>8 Databases Per Server</li>
				  <li>2 Extra Port Per Server</li>
				  <li>Access to Donator Nodes</li>
				  <li>Have a Cool Donator Rank</li>
				</ul>
				<a class="btn btn-lg btn-block btn-primary" href="buy?level=11&method=paypal">Purchase (PayPal)</a>
				<a class="btn btn-lg btn-block btn-primary" href="buy?level=11&method=xsolla">Purchase (Xsolla)</a>
			  </div>
			</div>
			
			
			<div class="card mb-4 box-shadow">
			  <div class="card-header">
				<h4 class="my-0 font-weight-normal">Tier #3</h4>
			  </div>
			  <div class="card-body">
				<h1 class="card-title pricing-card-title">20€ <small class="text-muted">/ onetime</small><br><small class="text-muted">(SUMMER SALE)</small></h1>
				<ul class="list-unstyled mt-3 mb-4">
				  <li>256 GB Ram Balance</li>
				  <li>120 Servers</li>
				  <li>14 Cores Per Server</li>
				  <li>30 GB Disk Per Server</li>
				  <li>20 Databases Per Server</li>
				  <li>4 Extra Port Per Server</li>
				  <li>Access to Donator Nodes</li>
				  <li>Have a Cool Donator Rank</li>
				</ul>
				<a class="btn btn-lg btn-block btn-primary" href="buy?level=12&method=paypal">Purchase (PayPal)</a>
				<a class="btn btn-lg btn-block btn-primary" href="buy?level=12&method=xsolla">Purchase (Xsolla)</a>
			  </div>
			</div>
			
			<div class="card mb-4 box-shadow">
			  <div class="card-header">
				<h4 class="my-0 font-weight-normal">Tier #4</h4>
			  </div>
			  <div class="card-body">
				<h1 class="card-title pricing-card-title">40€ <small class="text-muted">/ onetime</small><br><small class="text-muted">(SUMMER SALE)</small></h1>
				
				<ul class="list-unstyled mt-3 mb-4">
				  <li>512 GB Ram Balance</li>
				  <li>250 Servers</li>
				  <li>20 Cores Per Server</li>
				  <li>50 GB Disk Per Server</li>
				  <li>80 Databases Per Server</li>
				  <li>8 Extra Port Per Server</li>
				  <li>Access to Donator Nodes</li>
				  <li>Have a Cool Donator Rank</li>
				</ul>
				<a class="btn btn-lg btn-block btn-primary" href="buy?level=13&method=paypal">Purchase (PayPal)</a>
				<a class="btn btn-lg btn-block btn-primary" href="buy?level=13&method=xsolla">Purchase (Xsolla)</a>
			  </div>
			</div>
			
			
		  </div>
		  
      </div>
      <!-- Footer -->
      <footer class="footer">
        <?php include("templates/footer.php"); ?>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Optional JS -->
  <script src="./assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="./assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="./assets/js/argon.js?v=1.0.0"></script>
  
  	<!-- modal:createserver -->
	<div id="createserver" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<h4 class="modal-title">Create Server</h4>
		  </div>
		  <div class="modal-body" id="createServerBox">
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	
	<!-- modal:changecpu -->
	<div id="changecpu" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<h4 class="modal-title">Change Server CPU</h4>
		  </div>
		  <div class="modal-body">
				<form action="changecpu" method="get">
				<input type="hidden" name="id" id="changecpu_serverid" class="form-control">
				New server CPU cores: <input type="number" name="newcpu" class="form-control" min="1" value="1" required><br />
				<input type="submit" value="Change CPU" class="btn btn-success">
				</form>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	
	<?php
	  if( checklogin() == true ) {
		  $PlanExpiry = $conn->query("SELECT * FROM users WHERE discord_id='" . mysqli_real_escape_string($conn, $user->id) . "'")->fetch_assoc()['plan_expiry'];
		  if( $PlanExpiry == 0 ) {
			  $PlanExpiry = "Never";
		  } else {
			  $PlanExpiry = date('m/d/Y', $PlanExpiry);
		  }
		  echo '
		  	<!-- modal:logintopanel -->
			<div id="logintopanel" class="modal fade" role="dialog">
			  <div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-header">
					<h4 class="modal-title">Login to Panel</h4>
				  </div>
				  <div class="modal-body">
				  	<strong>Your Panel Username:</strong> ' . $pterodactyl_username . '<br />
					<strong>Your Panel Password:</strong> ' . $pterodactyl_password . '
					<hr>
					<a target="_blank" href="https://' . $ptero_domain . '/auth/login" class="btn btn-primary" role="button">Panel Login</a>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				  </div>
				</div>

			  </div>
			</div>
			
			<!-- modal:plan_info -->
			<div id="plan_info" class="modal fade" role="dialog">
			  <div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-header">
					<h4 class="modal-title">Plan Info</h4>
				  </div>
				  <div class="modal-body">
				  	<strong>You are currently on:</strong> ' . $level_data['title'] . '<br />
					<strong>Your plan gives you:</strong> ' . $level_data['ram_balance'] . ' MB RAM balance, ' . $level_data['max_servers'] . ' max servers, and ' . $level_data['max_cores'] . ' max CPU cores per server.<br />
					<strong>Your plan will expire on:</strong> ' . $PlanExpiry . '
					<hr>
					You have additional <strong>' . $user_extra_ram . '</strong> MB RAM balance.<br />
					You also have additional <strong>' . $user_extra_servers . '</strong> servers.<br />
					<em>additional RAM balanace/servers</em> means that you can use those if you finished your plan\'s max resources.
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				  </div>
				</div>

			  </div>
			</div>
		  ';
	  }
	  ?>
	
	
</body>

</html>