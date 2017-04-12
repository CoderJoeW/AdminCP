<?
	require_once("server/connect.php");
    require_once("server/updates.php");
    //require_once("../server/overhead/contructionBanner.php");
    $bypassEncoding = "bake74wncn8829011903jdnnamkjeu298727ye7d";
    if($_GET['v'] == null){
    	$currVersion = "0.7.5";
    }else{
    	$currVersion = $_GET['v'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Control Panel</title>
    <meta charset="utf-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <link rel="stylesheet" href="css/main.css?v=0.0.3">
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="jq/jquery-ui.js?v=0.0.2"></script>
    <link rel="stylesheet" href="jq/jquery-ui.css?v=0.0.2">
    <link rel="stylesheet" href="jq/jquery-ui.theme.css?v=0.0.1">
    <link rel="stylesheet" href="jq/jquery-ui.structure.css?v=0.0.1">
</head>
<body>
	<center style="display:none">
    	<form method="post">
        	<label>Create New Version</label>
            <input type="text" name="newVersion" placeholder="Version(B.A.R)">
            <input type="submit" name="submitNewVersion" value="Create New Version">
        </form>
    </center>
	
    <? 
    	require_once("pages/nav.php");
    	require_once("overlay/bugReport.php"); 
    	require_once("overlay/statsReview.php");
        require_once("pages/bugReps.php");
        require_once("pages/donations.php");
        require_once("pages/modVideos.php");
    ?>
    
    <script src='js/main.js?v=0.0.8'></script>
</body>
</html>
