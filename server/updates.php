<?
    if(isset($_GET['statusUpdateForm'])){
		$id = $_GET['id'];
		$status = $_GET['status'];
        
        $sql = "UPDATE bugReports SET status='$status' WHERE id='$id'";
        $query = mysql_query($sql);
        
        header('Location: index.php');
    }elseif(isset($_GET['priorityUpdateForm'])){
    	$id = $_GET['id'];
    	$priority = $_GET['priority'];
        
        $sql = "UPDATE bugReports SET priority='$priority' WHERE id='$id'";
        $query = mysql_query($sql);
        header('Location: index.php');
    }elseif(isset($_POST['updateNotesForm'])){
    	$id = $_POST['id'];
        $notes = $_POST['notes'];
        $noteEdits = $_POST['noteEdits'] + 1;
        
        $sql = "UPDATE bugReports SET notes='$notes',noteEdits='$noteEdits' WHERE id='$id'";
        $query = mysql_query($sql);
        header('Location: index.php');
    }elseif(isset($_POST['submitCommentsUpdate'])){
    	$id = $_POST['id'];
        $comments = $_POST['comments'];
        
        $sql = "UPDATE bugReports SET comments='$comments' WHERE id='$id'";
        $query = mysql_query($sql);
        header('Location: index.php');
    }
?>
