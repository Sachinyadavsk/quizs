<?php require('db_connection.php');?>
<?php                                                                                                               
$cat_res4=mysqli_query($con,"select * from meta_data where page='head'");
$cat_arr4=array();
while($row4=mysqli_fetch_assoc($cat_res4)){
$cat_arr4[]=$row4;    
}
foreach($cat_arr4 as $list){
  echo htmlspecialchars_decode($list['data']);
 }?>
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:url" content="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta name="google-site-verification" content="8uqCb-kgEAL_3fPtSejDAZGGX9sB59lIV3IEnxaKxy4" />
	<link href="https://zettaquiz.com/assets/images/fav.png" rel="icon" type="image/x-icon">
	<link rel="stylesheet" href="https://zettaquiz.com/assets/css/materialize.min.css">
	<link rel="stylesheet" href="https://zettaquiz.com/assets/css/big_main7f3f.css?28072023">
	<script src="https://zettaquiz.com/assets/js/jquery.min2371.js?05072023" type="text/javascript"></script>
	<script>
      {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "zettaquiz",
        "url": "https://zettaquiz.com/",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "https://zettaquiz.com/terms-and-conditions{search_term_string}https://zettaquiz.com/assets/images/logo.png",
            "query-input": "required name=search_term_string"
        }
    }
</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-P3GN8BFGKR"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-P3GN8BFGKR');
</script>

  <script>
       // Function to check and request notification permission
            function requestNotificationPermission() {
                if (!("Notification" in window)) {
                    alert("This browser does not support desktop notifications.");
                    return;
                }
            
                Notification.requestPermission().then(permission => {
                    localStorage.setItem("notification_permission", permission); // Save response
                    
                    if (permission === "granted") {
                        console.log("User allowed notifications.");
                        sendNotification();
                    } else if (permission === "denied") {
                        console.log("User blocked notifications.");
                        alert("You have blocked notifications. To enable them, change settings in your browser.");
                    }
                });
            }
            
            // Function to fetch meta description
            function getMetaDescription() {
                const metaTag = document.querySelector('meta[name="description"]');
                return metaTag ? metaTag.getAttribute("content") : "No description available";
            }
            
            // Function to show notification
            function sendNotification() {
                let title = document.title; // Get the page title
                let description = getMetaDescription(); // Get the meta description
                let url = window.location.href; // Get the page URL
            
                if (Notification.permission === "granted") {
                    new Notification(title, {
                        body: description,
                        icon: "https://zettaquiz.com/assets/images/logo.png" // Update with your logo URL
                    });
            
                    // Send data to the server
                    saveNotificationToDB(title, description, url);
                }
            }
            
            // Function to store the notification in the database via AJAX
            function saveNotificationToDB(title, description, url) {
                let xhr = new XMLHttpRequest();
                xhr.open("POST", "save_notification.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            
                let data = `title=${encodeURIComponent(title)}&description=${encodeURIComponent(description)}&url=${encodeURIComponent(url)}`;
                xhr.send(data);
            }
            
            // Check notification permission on page load
            document.addEventListener("DOMContentLoaded", function () {
                const permission = localStorage.getItem("notification_permission");
            
                if (!permission || permission === "default") {
                    requestNotificationPermission(); // Ask only if no decision has been made
                }
            });

    </script>
</head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NQ94TX3J');</script>
<!-- End Google Tag Manager -->
<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NQ94TX3J"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<div class="section">
		<div class="s_left">
			<div class="header">
				<nav>
					<div class="h_left">
						<a href="https://zettaquiz.com/" data-target="slide-out" class="sidenav-trigger">
							<img src="https://zettaquiz.com/assets/images/hamburger.png" alt="menu" class="hamburger">
						</a>
						<a href="https://zettaquiz.com/">
							<img src="https://zettaquiz.com/assets/images/logo.png" alt="logo" class="logo_img_main">
						</a>
					</div>
					<div class="h_right">
						<div class="wallet">
							<p class="pnts">
								<?php
								// Example to get cookie values in PHP
								if(isset($_COOKIE['correct_answers'])) {
									$cookie_value = $_COOKIE['correct_answers'];
									echo "" . $cookie_value;
								} else {
									echo "";
								}
								?> Pt.</p>
						</div>
						<a href="https://zettaquiz.com/leaderboard"><img src="https://zettaquiz.com/assets/images/trophy.png" alt="leaderboard"
								class="logo_img ldrbd"></a>
					</div>
				</nav>
			</div>
			<ul id="slide-out" class="sidenav">
				<div class="inner_page">
					<a href="https://zettaquiz.com/disclaimer">Disclaimer</a>
					<a href="https://zettaquiz.com/privacy-policy">Privacy Policy</a>
					<a href="https://zettaquiz.com/terms-and-conditions">Terms & Conditions</a>
					<a href="https://zettaquiz.com/about-us">About Us</a>
					<a href="https://zettaquiz.com/faqs">FaqS</a>
				</div>
			</ul>