 <?php
    session_start();
    if (!isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: index.php");
        die();
    }

    include 'config.php';

    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);

        
    }
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EVRC(Electronic vehicle rental & charging)</title>
    <link href="css/style.css" rel="stylesheet">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
 <?php 
 include 'config.php';
 ?>
 <body>
    <div id="main-wrapper">
        <div class="nav-header">
            <a href="" class="brand-logo">
				<svg class="logo-abbr" width="53" height="53" viewBox="0 0 53 53">
					<path class="svg-logo-primary-path" d="M48.3418 41.8457H41.0957C36.8148 41.8457 33.332 38.3629 33.332 34.082C33.332 29.8011 36.8148 26.3184 41.0957 26.3184H48.3418V19.2275C48.3418 16.9408 46.4879 15.0869 44.2012 15.0869H4.14062C1.85386 15.0869 0 16.9408 0 19.2275V48.8594C0 51.1462 1.85386 53 4.14062 53H44.2012C46.4879 53 48.3418 51.1462 48.3418 48.8594V41.8457Z" fill="#5BCFC5"/>
					<path class="svg-logo-primary-path" d="M51.4473 29.4238H41.0957C38.5272 29.4238 36.4375 31.5135 36.4375 34.082C36.4375 36.6506 38.5272 38.7402 41.0957 38.7402H51.4473C52.3034 38.7402 53 38.0437 53 37.1875V30.9766C53 30.1204 52.3034 29.4238 51.4473 29.4238ZM41.0957 35.6348C40.2382 35.6348 39.543 34.9396 39.543 34.082C39.543 33.2245 40.2382 32.5293 41.0957 32.5293C41.9532 32.5293 42.6484 33.2245 42.6484 34.082C42.6484 34.9396 41.9532 35.6348 41.0957 35.6348Z" fill="#5BCFC5"/>
				</svg>
                
				<p class="brand-title" width="124px" height="33px"  style="font-size: 30px;">User </p>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
       
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="dashboard_bar">
Car Booking                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
			 
                            <li class="nav-item">
							<a href="login/logout.php" class="btn btn-primary d-sm-inline-block d-none">Logout<i class="las la-signal ms-3 scale5"></i></a>
							</li>
                        </ul>
                    </div>
				</nav>
			</div>
		</div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
				<ul class="metismenu" id="menu">
					<li class="dropdown header-profile">
						<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
							<img src="images/ion/man (1).png" width="20" alt=""/>
							<div class="header-info ms-3">
								<span class="font-w600 "><?php echo $row['name'];?></span>
							</div>
						</a>
						
					</li>
                      <li><a href="Dashboard.php" aria-expanded="false">
							<i class="flaticon-025-dashboard"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                    </li>
                    <li><a href="charging-station.php" aria-expanded="false">
						<i class="flaticon-050-info"></i>
							<span class="nav-text">charging Station</span>
						</a>
                    </li>
                    <li><a href="carbooking.php" aria-expanded="false">
							<i class="flaticon-041-graph"></i>
							<span class="nav-text">Rent Car</span>
						</a>
                    </li>
                    
                   
                   
                   
                   
                </ul>
			</div>
        </div>
        <div class="content-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-6 col-xxl-12">
						<div class="card">
							<div class="card-header d-block d-sm-flex border-0">
								<div class="me-3">
									<h4 class="card-title mb-2">Car Booking</h4>
								</div>
								 
							</div>
							<div class="card-body tab-content p-0">
								<div class="tab-pane active show fade" id="monthly" role="tabpanel">
									<div class="table-responsive">
										 <table class="table table-responsive-md card-table transactions-table">
											<tbody>
												<tr> 
													<td>
														<h6 class="fs-16 font-w600 mb-0"><a href="javascript:void(0);" class="text-black">ID</a></h6>
														 
													</td>
													<td>
														<h6 class="fs-16 text-black font-w600 mb-0">car name</h6>
														 
													</td><td>
														<h6 class="fs-16 text-black font-w600 mb-0">car number</h6>
														 
													</td>
													<td>
														<h6 class="fs-16 text-black font-w600 mb-0">mobile</h6>
														 
													</td>
													<td>
														<h6 class="fs-16 text-black font-w600 mb-0">email id</h6>
														 
													</td>
													<td>
														<h6 class="fs-16 text-black font-w600 mb-0">Price</h6>
														 
													</td>
													<td>
														<h6 class="fs-16 text-black font-w600 mb-0">Check for book</h6>
														 
													</td>
													 
													 
												</tr>
												<?php  
									$sql="SELECT * FROM  cardetails";
									$result=mysqli_query($conn,$sql);
									$present=mysqli_num_rows($result);
									if($present>0)
									{

									while($row=mysqli_fetch_assoc($result))
									{
										?>
												<tr>
													 
													<td>
														<h6 class="fs-16 font-w600 mb-0"><a href="javascript:void(0);" class="text-black"><?php echo $row['id'];?></a></h6>
														 
													</td>
													<td>
														<h6 class="fs-16 text-black font-w600 mb-0"><?php echo $row['car name'];?><h6>
														 
													</td>
													<td>
														<h6 class="fs-16 text-black font-w600 mb-0"><?php echo $row['car number'];?><h6>
														 
													</td>
													<td>
														<h6 class="fs-16 text-black font-w600 mb-0"><?php echo $row['mobile'];?><h6>
														 
													</td>
													<td>
														<h6 class="fs-16 text-black font-w600 mb-0"><?php echo $row['email id'];?><h6>
														 
													</td>
													<td>
														<h6 class="fs-16 text-black font-w600 mb-0"><?php echo $row['price'];?><h6>
														 
													</td>
													<td>
													<a class='btn btn-primary btn-xs' href="<?php echo $row['book'];?>">Booking</a></button> 
														 
													</td>
													 
													 
												 
												 
												 <?php }} ?>
											</tbody>
										</table>
					</div>
				</div>
            </div>
        </div>
		<script src="vendor/global/global.min.js"></script>
    <script src="js/custom.min.js"></script>
	<script src="js/dlabnav-init.js"></script>
       
       
</body>

</html>
