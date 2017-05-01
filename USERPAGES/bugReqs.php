<? 
	require_once("server/connect.php"); 
    
    if(isset($_GET['success'])){
    	$code = $_GET['success'];
        
        if($code == 1){
        	echo "
            	<script>
                	alert('Bug Request has been submitted for review');
                </script>
            ";
        }else{
        	echo "
            	<script>
                	alert('Were not sure what went wrong but something went wrong');
                </script>
            ";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bug Request Form</title>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<style>
.red{
    color:red;
}
    
.form-area{
    background-color: #FAFAFA;
	padding: 10px 40px 60px;
	margin: 10px 0px 60px;
	border: 1px solid GREY;
}

/*Panel tabs*/
.panel-tabs {
    position: relative;
    bottom: 30px;
    clear:both;
    border-bottom: 1px solid transparent;
}

.panel-tabs > li {
    float: left;
    margin-bottom: -1px;
}

.panel-tabs > li > a {
    margin-right: 2px;
    margin-top: 4px;
    line-height: .85;
    border: 1px solid transparent;
    border-radius: 4px 4px 0 0;
    color: #ffffff;
}

.panel-tabs > li > a:hover {
    border-color: transparent;
    color: #ffffff;
    background-color: transparent;
}

.panel-tabs > li.active > a,
.panel-tabs > li.active > a:hover,
.panel-tabs > li.active > a:focus {
    color: #fff;
    cursor: default;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    background-color: rgba(255,255,255, .23);
    border-bottom-color: transparent;
}

.panelsX{
	position: fixed;
    right: 0px;
    padding: 10px 40px 60px;
	margin: 10px 0px 60px;
}
</style>
<body>
<div class="container" style="float:left">
	<div class="col-md-5">
		<div class="form-area">  
			<form role="form" method="post">
				<br style="clear:both">
				<h3 style="margin-bottom: 25px; text-align: center;">Bug Request Form</h3>
				<div class="form-group">
					<input type="text" class="form-control" id="version" name="version" value="0.7.9" required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="name" name="name" placeholder="Your Username" required>
				</div>
				<div class="form-group">
					<textarea class="form-control" type="textarea" id="comments" name="comments" placeholder="Comments" maxlength="500" rows="10"></textarea>
					<span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>                    
				</div>
				<input type="submit" id="submit" name="submit" class="btn btn-primary pull-right" value="Submit Request">
			</form>
		</div>
	</div>
</div>

<div class="container panelsX" style="float:right">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Rules/Regulations</h3>
                    <span class="pull-right">
                        <!-- Tabs -->
                        <ul class="nav panel-tabs">
                            <li class="active"><a href="#tab1" data-toggle="tab">Posting Guide</a></li>
                            <li><a href="#tab2" data-toggle="tab">Markdown</a></li>
                            <li><a href="#tab3" data-toggle="tab">Advertisements</a></li>
                            <!--<li><a href="#tab4" data-toggle="tab">Tab 4</a></li>-->
                        </ul>
                    </span>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">
                        	<h4>
                            	To ensure your request is approved please submit your report with the
                            	following information
                            </h4>
                            <ol>
                            	<li>What happened before the bug?</li>
                                <li>What steps can we take to reproduce the bug</li>
                            </ol>
                            
                            <h4>
                            	These 2 pieces of information of crucial to a good report
                                if you dont have this information then you shouldnt be on this page yet
                                
                                If you have entered the above info then please provide any additional info
                                that we might need to know
                            </h4>
                        </div>
                        <div class="tab-pane" id="tab2">
                        	<h4>
                            	Below is what you
                                may use to spice up your post
                                <br><br>
                                
                              </h4>
                            
                            <h3>List</h3>
                            <p>You can create list within the markup by using list tags in html</p>
                            <code>
                                //This is an ordered list<br>
								&lt;ol&gt;<br>&nbsp;
									&lt;li&gt;This is item number 1&lt;/li&gt;<br>&nbsp;
									&lt;li&gt;This is item number 2&lt;/li&gt;<br>
								&lt;/ol&gt;
							</code>
                            <br>
                            The Resulting output will look like this
                            <code>
								<ol>
									<li>This is item number 1</li>
									<li>This is item number 2</li>
								</ol>
							</code>
                        </div>
                        <div class="tab-pane" id="tab3">
                        
                        </div>
                        <div class="tab-pane" id="tab4">

                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
<script>
$(document).ready(function(){ 
    $('#characterLeft').text('500 characters left');
    $('#comments').keydown(function () {
        var max = 500;
        var len = $(this).val().length;
        if (len >= max) {
            $('#characterLeft').text('You have reached the limit');
            $('#characterLeft').addClass('red');
            $('#btnSubmit').addClass('disabled');            
        } 
        else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' characters left');
            $('#btnSubmit').removeClass('disabled');
            $('#characterLeft').removeClass('red');            
        }
    });    
});
</script>
</body>
</html>
<?
	if(isset($_POST['submit'])){
    	$version = $_POST['version'];
        $name = $_POST['name'];
        $comments = $_POST['comments'];
        
        $version = str_replace("'","",$version);
        $name = str_replace("'","",$name);
        $comments = str_replace("'","",$comments);
        
        $sql = "INSERT INTO bugReqs SET version='$version', name='$name',comments='$comments'";
        $query = mysql_query($sql) or die(mysql_error());
        
        header('Location: bugReqs.php?success=1');
    }
?>
