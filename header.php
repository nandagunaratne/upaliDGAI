<?php

$deny = array(
"104.248.199.23",
"104.45.236.188",
"109.237.97.180",
"123.183.224.*",
"128.14.209.250",
"138.199.21.231",
"138.199.21.242",
"159.223.66.72",
"162.142.125.21",
"162.243.145.19",
"165.227.76.114",
"167.94.146.58",
"172.104.210.10",
"173.180.149.11",
"179.60.147.13",
"180.102.134.64",
"190.53.30.94",
"192.241.201.20",
"192.241.230.21",
"198.199.101.16",
"199.30.231.5",
"206.75.200.15",
"207.47.183.81",
"207.6.59.34",
"209.141.43.16",
"212.102.40.218",
"217.165.129.16",
"27.115.124.101",
"31.43.185.8",
"34.216.9.21",
"35.170.66.248",
"35.233.62.116",
"35.86.132.161",
"45.155.126.4",
"45.79.128.205",
"49.7.21.117",
"60.217.75.70",
"62.233.50.248",
"64.141.119.26",
"64.62.197.*",
"66.175.213.4",
"66.240.205.34",
"67.205.162.78",
"92.255.85.173"

);
if (in_array ($_SERVER['REMOTE_ADDR'], $deny)) {
   header("location: https://google.com/");
   exit();
}

if (session_status() == PHP_SESSION_NONE) {
    session_set_cookie_params('3600', 'transampiping.com', (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off')? true : false, true);
    session_start();
    $_SESSION['loggedin'] = false;
}
ob_start();
require('assets/vendor/FirePHPCore/FirePHP.class.php');

/* NOTE: You must have Output Buffering enabled via
 ob_start() or output_buffering ini directive. */


$firephp = FirePHP::getInstance(true);


$firephp->fb('Hello World'); /* Defaults to FirePHP::LOG */

$firephp->fb('Log message'  ,FirePHP::LOG);
$firephp->fb('Info message' ,FirePHP::INFO);
$firephp->fb('Warn message' ,FirePHP::WARN);
$firephp->fb('Error message',FirePHP::ERROR);

$firephp->fb('Message with label','Label',FirePHP::LOG);

$firephp->fb(array('key1'=>'val1',
    'key2'=>array(array('v1','v2'),'v3')),
    'TestArray',FirePHP::LOG);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="google-site-verification" content="0bbmSlFaf9Wz-m_NpLrGCWUoxXUHdGrOHwL8Z3QeFz4" />
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K9P3Z32');</script>
<!-- End Google Tag Manager -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta id="project_name" name="project_name"
	content="Trans Am Piping Products Ltd.">
<meta name="description"
	content="Trans Am Piping Products Ltd. is a major distributor of quality carbon steel piping components since 1975. Call or email today!">
<meta name="keywords"
	content="Pipe, Piping, Flanges, Carbon Steel Fittings, Fittings, Forged Steel Fittings, Swages, Bull Plugs, Swages and Bull Plugs, Forged Outlet Fittings, SMLS Pipe Nipples TBE, Butt Welding Fittings, Seamless Carbon Steel Pipe, Carbon Steel Pipe, Flanges, Fittings, Distribution centers in Calgary & Edmonton Alberta, MTR's, MTR's Online, E-PAC., Pipe A106B, A333-6 & GR 359, Weld Fittings A234-WPB, A420-WPL6 & GR 359, Flanges A105N, A350-LF2 CL1 & GR 359, Managed project inventories, Forged Steel Fittings, Swages & Bull Plugs, Long Weld Neck Flanges, Oil & Gas, Energy industry, High Quality Products, CRN #'S, Listing of all the stocking/major manufactures on our website, Calgary, Edmonton, Alberta, Canada,
	 steel, Carbon Steel Pipe, piping components, Specialists">
<link rel="canonical" href="https://www.transampiping.com/" />

<meta name="author" content="Joseph Marreiros">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta property="og:locale" content="en_CAN" />
<meta property="og:type" content="website" />
<meta property="og:title"
	content="Pipe, Piping, Flanges, Carbon Steel Fittings, Fittings, Forged Steel Fittings, Swages, Bull Plugs, Swages and Bull Plugs, Forged Outlet Fittings, SMLS Pipe Nipples TBE, Butt Welding Fittings, Seamless Carbon Steel Pipe, Carbon Steel Pipe, Flanges, Fittings, Distribution centers in Calgary & Edmonton Alberta, MTR's, MTR's Online, E-PAC., Pipe A106B, A333-6 & GR 359, Weld Fittings A234-WPB, A420-WPL6 & GR 359, Flanges A105N, A350-LF2 CL1 & GR 359, Managed project inventories, Forged Steel Fittings, Swages & Bull Plugs, Long Weld Neck Flanges, Oil & Gas, Energy industry, High Quality Products, CRN #'S, Listing of all the stocking/major manufactures on our website, Calgary, Edmonton, Alberta, Canada,
	 steel, Carbon Steel Pipe, piping components, Specialists" />
<meta property="og:description"
	content="Trans Am Piping Products Ltd. is a major distributor of quality carbon steel piping components since 1975. Call or email today!" />
<meta property="og:url" content="https://www.transampiping.com/" />
<meta property="og:site_name" content="Trans Am Piping Products Ltd." />

<title><?php echo $title;?></title>

<!-- Favicons -->
<link href="assets/img/favicon.ico" rel="icon">
<link href="assets/img/favicon.ico" rel="apple-touch-icon">
<!-- Google Fonts -->
<link
	href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,700;1,400&family=Mulish:ital,wght@1,700&display=swap"
	rel="stylesheet">
<!-- Vendor CSS Files -->
<link href="assets/vendor/bootstrap/css/bootstrap.min.css"
	rel="stylesheet">
<link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css"
	rel="stylesheet">
<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
<link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
<link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css"
	rel="stylesheet">
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<!-- Template Main CSS File -->
<link href="assets/css/style.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/css/vmenuModule.css" />
<style type="text/css">
* {
	margin: 0;
	padding: 0;
}
</style>
<script language="JavaScript" src="https://seal.networksolutions.com/siteseal/javascript/siteseal.js" type="text/javascript"></script> 

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-179291899-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-179291899-1');
</script>

</head>
<body style="cursor: default;">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K9P3Z32"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<!-- ======= Header ======= -->
	<header id="header" style="height: Auto;">
		<div class="container d-flex">
			<div class="logo mr-auto">
				<h1 class="text-light">
					<a href="index"><img src="assets/img/transamLogo_full.png" alt=""
						class="img-fluid"></a>
				</h1>
			</div>
			<nav class="nav-menu d-none d-lg-block">
				<ul>
					<li
						class="<?php if ($is_active=="home") {echo "active"; } else  {echo "noactive";}?>"><a
						href="index">Home</a></li>					
					<li
						class="<?php if ($is_active=="about" || $is_active=="News" ) {echo "active"; } else  {echo "noactive";}?> drop-down"><a
						href="#">About</a>
						<ul>
							<li
								class="<?php if ($is_active=="About") {echo "active"; } else  {echo "noactive";}?>"><a
								href="about">About Trans Am</a></li>
							<li
								class="<?php if ($is_active=="News") {echo "active"; } else  {echo "noactive";}?>"><a
								href="IBMiCustomerStories">IBM i Customer Story</a></li>
						</ul></li>		
					<li
						class="<?php if ($is_active=="SwagesAndBullPlugs" || $is_active=="ForgedSteelFittings" || $is_active=="products" || $is_active=="ForgedSteelFlanges" || $is_active=="WFIInternationalForgedOutletFittings" ||$is_active=="SmlsPipeNipples" ||$is_active=="ButtWeldFittings" ||$is_active=="SeamlessPipe" ) {echo "active"; } else  {echo "noactive";}?> drop-down"><a
						href="products">Products</a>
						<ul>
							<li
								class="<?php if ($is_active=="ForgedSteelFlanges") {echo "active"; } else  {echo "noactive";}?>"><a
								href="ForgedSteelFlanges">Forged Steel Flanges</a></li>
							<li
								class="<?php if ($is_active=="ForgedSteelFittings") {echo "active"; } else  {echo "noactive";}?>"><a
								href="ForgedSteelFittings">Forged Steel Fittings</a></li>
							<li
								class="<?php if ($is_active=="SwagesAndBullPlugs") {echo "active"; } else  {echo "noactive";}?>"><a
								href="SwagesAndBullPlugs">Swages and Bull Plugs</a></li>
							<li
								class="<?php if ($is_active=="WFIInternationalForgedOutletFittings") {echo "active"; } else  {echo "noactive";}?>"><a
								href="WFIInternationalForgedOutletFittings">W.F.I.
									International Forged Outlet Fittings</a></li>
							<li
								class="<?php if ($is_active=="SmlsPipeNipples") {echo "active"; } else  {echo "noactive";}?>"><a
								href="SmlsPipeNipples">Smls Pipe Nipples</a></li>
							<li
								class="<?php if ($is_active=="ButtWeldFittings") {echo "active"; } else  {echo "noactive";}?>"><a
								href="ButtWeldFittings">Butt Weld Fittings</a></li>
							<li
								class="<?php if ($is_active=="SeamlessPipe") {echo "active"; } else  {echo "noactive";}?>"><a
								href="SeamlessCarbonSteelPipe">Seamless Carbon Steel Pipe</a></li>
								
							<li
								class="<?php if ($is_active=="ImperialUnits") {echo "active"; } else  {echo "noactive";}?>"><a href="assets/pdfcatalogue/ImperialCatalogue.pdf" target="_blank">Imperial Catalogue</a></li>	
							<li
								class="<?php if ($is_active=="MetricUnits") {echo "active"; } else  {echo "noactive";}?>"><a href="assets/pdfcatalogue/MetricCatalogue.pdf" target="_blank">Metric Catalogue</a></li>	
									
						</ul></li>
					<li
						class="<?php if ($is_active=="epacservices") {echo "active"; } else  {echo "noactive";}?>"><a
						href="epacservices">E-PAC</a></li>


					<li
						class="<?php if ($is_active=="mtrs") {echo "active"; } else  {echo "noactive";}?>"><a
						href="mtrs">MTRs</a></li>

					<li
						class="<?php if ($is_active=="Contact" || $is_active=="Team" ) {echo "active"; } else  {echo "noactive";}?> drop-down"><a
						href="#">Contact</a>
						<ul>
							<li
								class="<?php if ($is_active=="Contact") {echo "active"; } else  {echo "noactive";}?>"><a
								href="contact">Contact</a></li>
							<li
								class="<?php if ($is_active=="Team") {echo "active"; } else  {echo "noactive";}?>"><a
								href="Team">Team</a></li>
						</ul></li>	
						
					
					<?php
                      if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                    ?>	
					<li><a href="logout">Logout</a></li>							
					<?php
                      }
                    ?>
				</ul>
			</nav>
			<!-- .nav-menu -->
		</div>
	</header>
	<!-- End Header -->