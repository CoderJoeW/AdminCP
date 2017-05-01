<style>
	.btn-approval{
		background: url("img/approve.png") no-repeat;
        width: 50%;
        height: 100%;
        float:left;
	}
    
    .btn-reject{
		background: url("img/reject.png") no-repeat;
        width: 50%;
        height: 100%;
        float:right;
	}
</style>
<div id="bugReqs" style="display:none">
    	<h2>Bug Request</h2>
			<?
    			$sql = "SELECT * FROM bugReqs";
    		    $query = mysql_query($sql);
    		?>
    		<table width="100%">
    			<tr>
    		    	<th><center>Version</center></th>
    		        <th><center>Name</center></th>
                    <th><center>Comments</center></th>
    		        <th><center>Actions</center></th>
    		    </tr>
    			<?
    		    	while($row = mysql_fetch_object($query)){
                    	$id = $row->id;
                    	$version = $row->version;
    		        	$name = $row->name;
    		            $comments = $row->comments;
    		            
    		            echo "
    		            	<tr>
                            	<td>$version</td>
    		                	<td>$name</td>
    		                    <td>$comments</td>
    		                    <td>
                                    <input type='submit' class='btn-approval' onclick='toggleApprovalForm($id)' value='Approve'>
                                    <div id='approvalForm$id' title='Approval Form' style='display:none'>
										<form method='post'>
                                        	<input type='text' name='id' value='$id' style='display:none'>
                                            <input type='text' name='version' value='$version'>
                                            <input type='text' name='bugName' placeholder='Bug Name'>
                                            <input type='text' name='reporter' value='$name'>
                                            <select name='priority'>
                                            	<option value='Low Priority'>Low Priority</option>
                                                <option value='Medium Priority'>Medium Priority</option>
                                                <option value='High Priority'>High Priority</option>
                                            </select>
                                            <textarea name='comments'>$comments</textarea>
                                            <input type='submit' name='approveBugReq' value='Approve Bug Request'>
                                        </form>
									</div>
                                    <form method='post'>
                                    	<input type='text' name='id' value='$id' style='display:none'>
                                        <input type='submit' name='rejectBugReq' class='btn-reject' value='Reject'>
                                    </form>
                                </td>
    		                </tr>
    		            ";
    		        }
    		    ?>
    		</table>
    </div>
    
    <?
    	if(isset($_POST['rejectBugReq'])){
        	$id = $_POST['id'];
            
            $sql = "DELETE FROM bugReqs WHERE id='$id'";
            $query = mysql_query($sql) or die(mysql_error());
            
            header('Location: index.php');
        }elseif(isset($_POST['approveBugReq'])){
        	$id = $_POST['id'];
            $version = $_POST['version'];
            $bugName = $_POST['bugName'];
            $reporter = $_POST['reporter'];
            $priority = $_POST['priority'];
            $comments = $_POST['comments'];
            
            $sql = "DELETE FROM bugReqs WHERE id='$id'";
            $query = mysql_query($sql) or die(mysql_error());
            
            $sql2 = "INSERT INTO bugReports SET version='$version', reporter='$reporter',priority='$priority',bugName='$bugName',comments='$comments'";
            $query2 = mysql_query($sql2) or die(mysql_error());
            
            header('Location: index.php');
        }
    ?>
