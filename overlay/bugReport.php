<style>
	.overlay{
    	position: absolute;
    	width: 35%;
        height: 60%;
    	border: 3px solid green;
    	padding: 10px;
        display: block;
        z-index: 4;
        left: 30%;
        top: 10%;
        background-color: white;
    }
    
.form {
  display: block;
  margin: 0;
  width: 100%;
  font-family: sans-serif;
  font-size: 18px;
  appearance: none;
  box-shadow: none;
  border-radius: none;
}
.form:focus {
  outline: none;
}

.form {
  padding: 10px;
  border: solid 1px #dcdcdc;
  transition: box-shadow 0.3s, border 0.3s;
}
.form:focus,
.form.focus {
  border: solid 1px #707070;
  box-shadow: 0 0 5px 1px #969696;
}

.form {
  padding: 10px;
  border: solid 5px #c9c9c9;
  transition: border 0.3s;
}
.form:focus,
.form.focus {
  border: solid 5px #969696;
}

.form {
  padding: 10px;
  border: solid 5px #c9c9c9;
  box-shadow: inset 0 0 0 1px #707070;
  transition: box-shadow 0.3s, border 0.3s;
}
.form:focus,
.form.focus {
  border: solid 5px #969696;
}

.form {
  padding: 10px;
  border: none;
  border-bottom: solid 2px #c9c9c9;
  transition: border 0.3s;
}
.form:focus,
.form.focus {
  border-bottom: solid 2px #969696;
}

.form {
  padding: 10px;
  border: solid 1px #fff;
  box-shadow: inset 1px 1px 2px 0 #707070;
  transition: box-shadow 0.3s;
}
.form:focus,
.form.focus {
  box-shadow: inset 1px 1px 2px 0 #c9c9c9;
}
</style>

<div style="display:none" class="overlay" id="bugReport">
	<center><form method="post">
    <h1>Bug Report Form &nbsp <span onclick="hideOverlay()">X</span></h1>
    	<input type="text" name="version" placeholder="Version" class="form"><br>
    	<input type="text" name="bugName" placeholder="Bug Name" class="form"><br>
        <input type="text" name="reporter" placeholder="Reporter" class="form"><br>
        <select name="priority" class="form">
        	<option value="Low Priority">Low Priority</option>
            <option value="Medium Priority">Medium Priority</option>
            <option value="High Priority">High Priority</option>
        </select><br>
        <textarea name="comments" class="form" placeholder="Comments/Notes"></textarea><br>
        <input type="submit" name="submitBugReport" value="Submit Bug Report" class="form">
    </form></center>
</div>

<script>
	function hideOverlay(){
    	document.getElementById("bugReport").style.display = "none";
    }
</script>

<?
	if(isset($_POST['submitBugReport'])){
    	$version = $_POST['version'];
    	$reporter = $_POST['reporter'];
        $priority = $_POST['priority'];
        $bugName = $_POST['bugName'];
        $comments = $_POST['comments'];
        
        $haystack = array("'",'"');
        
        $version = str_replace($haystack,"&apos;",$version);
        $reporter = str_replace($haystack,"&apos;",$reporter);
        $bugName = str_replace($haystack,"&apos;",$bugName);
        $comments = str_replace($haystack,"&apos;",$comments);
        
        
        $sql = "INSERT INTO bugReports SET version='$version',reporter='$reporter',priority='$priority',bugName='$bugName',comments='$comments'";
        $query = mysql_query($sql);
        
        header('Location: index.php');
    }
?>
