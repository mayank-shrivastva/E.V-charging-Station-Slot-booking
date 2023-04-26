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
	<!-- PAGE TITLE HERE -->
	<title>EVRC(Electronic vehicle rental & charging)</title>
    <link href="css/style.css" rel="stylesheet">
</head>
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
                                Dashboard 
                            </div>
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
								<span class="font-w400 "><?php echo $row['name'];?></span>
								 
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
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				 
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="card bg-success invoice-card">
							<div class="card-body d-flex">
								<div class="icon me-3">
									<svg width="35px" height="34px">
									<path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
									 d="M32.482,9.730 C31.092,6.789 28.892,4.319 26.120,2.586 C22.265,0.183 17.698,-0.580 13.271,0.442 C8.843,1.458 5.074,4.140 2.668,7.990 C0.255,11.840 -0.509,16.394 0.514,20.822 C1.538,25.244 4.224,29.008 8.072,31.411 C10.785,33.104 13.896,34.000 17.080,34.000 L17.286,34.000 C20.456,33.960 23.541,33.044 26.213,31.358 C26.991,30.866 27.217,29.844 26.725,29.067 C26.234,28.291 25.210,28.065 24.432,28.556 C22.285,29.917 19.799,30.654 17.246,30.687 C14.627,30.720 12.067,29.997 9.834,28.609 C6.730,26.671 4.569,23.644 3.752,20.085 C2.934,16.527 3.546,12.863 5.486,9.763 C9.488,3.370 17.957,1.418 24.359,5.414 C26.592,6.808 28.360,8.793 29.477,11.157 C30.568,13.460 30.993,16.016 30.707,18.539 C30.607,19.448 31.259,20.271 32.177,20.371 C33.087,20.470 33.911,19.820 34.011,18.904 C34.363,15.764 33.832,12.591 32.482,9.730 L32.482,9.730 Z"/>
									<path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
									 d="M22.593,11.237 L14.575,19.244 L11.604,16.277 C10.952,15.626 9.902,15.626 9.250,16.277 C8.599,16.927 8.599,17.976 9.250,18.627 L13.399,22.770 C13.725,23.095 14.150,23.254 14.575,23.254 C15.001,23.254 15.427,23.095 15.753,22.770 L24.940,13.588 C25.592,12.937 25.592,11.888 24.940,11.237 C24.289,10.593 23.238,10.593 22.593,11.237 L22.593,11.237 Z"/>
									</svg>
									
								</div>
								<div>
								 
								</div>
							</div>
						</div>
					</div>
					 
				</div>
				<div class="row">
					<div class="col-xl-9 col-xxl-12">
						<div class="card">
							<div class="card-body">
								<div class="row align-items-center">
									<div class="col-xl-6">
										<div class="card-bx bg-blue">
											<img class="pattern-img" src="images/pattern/pattern6.png" alt="">
											<div class="card-info text-white">
												<img src="images/pattern/circle.png" class="mb-4" alt="">
												<h4 class="text-white card-balance"><?php echo $row['name'];?></h4>
												<p class="fs-16"><?php echo $row['email'];?></p>
												 
											</div>
											 </div>
									</div>
									<div class="col-xl-6">
										<div class="row  mt-xl-0 mt-4">
											<div class="col-md-6">
												 
												 
												 
											</div>
											 
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					 
					 
				<div class="col-xl-6 col-xxl-12">
						<div class="card">
							<div class="card-header d-block d-sm-flex border-0">
								<div class="me-3">
									<h4 class="card-title mb-2">Station Details</h4>
								</div>
								
							</div>
							 <div class="card-body tab-content p-0">
								<div class="tab-pane active show fade" id="monthly" role="tabpanel">
									<div class="table-responsive">
										 <table class="table table-responsive-md card-table transactions-table">
											<tbody>
												<tr> 
													 
													<td>
														<h6 class="fs-16 text-black font-w600 mb-0">Name</h6>
														 
													</td><td>
														<h6 class="fs-16 text-black font-w600 mb-0">Date</h6>
														 
													</td>
													<td>
														<h6 class="fs-16 text-black font-w600 mb-0">Time Slot</h6>
														 
													</td>
													<td>
														<h6 class="fs-16 text-black font-w600 mb-0">Email</h6>
														 
													</td>
													 
													 
													 
												</tr>
												<?php  
									$sql="SELECT * FROM s1 WHERE email='{$_SESSION['SESSION_EMAIL']}'";
									$result=mysqli_query($conn,$sql);
									$present=mysqli_num_rows($result);
									if($present>0)
									{

									while($row=mysqli_fetch_assoc($result))
									{
										?>
												<tr>
													 
													 
													<td>
														<h6 class="fs-16 text-black font-w600 mb-0"><?php echo $row['station'];?><h6>
														 
													</td>
													<td>
														<h6 class="fs-16 text-black font-w600 mb-0"><?php echo $row['date'];?><h6>
														 
													</td>
													<td>
														<h6 class="fs-16 text-black font-w600 mb-0"><?php echo $row['timeslot'];?><h6>
														 
													</td>
													<td>
														<h6 class="fs-16 text-black font-w600 mb-0"><?php echo $row['email'];?><h6>
														 
													</td>
													
													 
													 
													 
												 
												 
												 <?php }} ?>
											</tbody>
										</table>
					</div>
				</div>
            </div>
        </div>  
        <!--**********************************
            Content body end
        ***********************************-->
		
		
		
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
		
            <div class="copyright">
                <p>© Designed &amp; by <a href="#" target="_blank">EVRC(Electronic vehicle rental & charging)</a> 2023</p>
            </div>
        </div>
         
	</div> 
    <script src="vendor/global/global.min.js"></script>
    <script src="js/custom.min.js"></script>
	<script src="js/dlabnav-init.js"></script>
</body>

</html>
