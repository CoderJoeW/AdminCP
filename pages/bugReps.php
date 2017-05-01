<div id="sorting">
    	<form method="post">
        	<select name="sortby" id="sortby">
            	<option value=""></option>
            	<option value="version">Version</option>
                <option value="bugName">Bug Name</option>
                <option value="status">Status</option>
                <option value="priority">Priority</option>
            </select>
            <select name="version" id="version" class="hidden">
            	<option value="0.7.7">0.7.7</option>
                <option value="0.7.6">0.7.6</option>
            	<option value="0.7.5">0.7.5</option>
            	<option value="0.7.4">0.7.4</option>
            	<option value="0.7.3">0.7.3</option>
            </select>
            <select name="bugName" id="bugName" class="hidden">
            	<option value="Alphabetical(ASC)">Alphabetical(ASC)</option>
                <option value="Alphabetical(DESC)">Alphabetical(DESC)</option>
            </select>
            <select name="status" id="status" class="hidden">
            	<option value="New">New</option>
                <option value="In Progress">In Progress</option>
                <option value="Fixed">Fixed</option>
            </select>
            <select name="priority" id="priority" class="hidden">
            	<option value="Low Priority">Low Priority</option>
                <option value="Medium Priority">Medium Priority</option>
                <option value="High Priority">High Priority</option>
            </select>
            <input type="submit" name="sortReports" id="sortReports" value="Sort" class='hidden'>
        </form>
    </div>
    
    <div id="bugReps">
    	<h2>Bug Reports</h2>
        <?
        		$sortby = $_POST['sortby'];
                
                if($sortby == "version"){
    				$version = $_POST['version'];
                    $sql = "SELECT * FROM bugReports WHERE version='$version' ORDER BY id DESC";
    		   		$query = mysql_query($sql);
                }elseif($sortby == "bugName"){
                	$bugName = $_POST['bugName'];
                    if($bugName == "Alphabetical(ASC)"){
                    	$sql = "SELECT * FROM bugReports ORDER BY bugName ASC";
    		   			$query = mysql_query($sql);
                    }elseif($bugName == "Alphabetical(DESC)"){
                    	$sql = "SELECT * FROM bugReports ORDER BY bugName DESC";
    		   			$query = mysql_query($sql);
                    }
                }elseif($sortby == "status"){
                	$status = $_POST['status'];
                    $sql = "SELECT * FROM bugReports WHERE status='$status' ORDER BY id DESC";
    		   		$query = mysql_query($sql);
                }elseif($sortby == "priority"){
                	$priority = $_POST['priority'];
                    $sql = "SELECT * FROM bugReports WHERE priority='$priority' ORDER BY id DESC";
    		   		$query = mysql_query($sql);
                }else{
                	$sql = "SELECT * FROM bugReports WHERE version='$currVersion' ORDER BY id DESC";
    		   		$query = mysql_query($sql);
                }
    	?>
    		<table width="100%">
    			<tr>
                	<th><center>Version</center></th>
    		    	<th><center>Bug Name</center></th>
    		        <th><center>Reporter</center></th>
                    <th><center>Status</center></th>
    		        <th><center>Priority</center></th>
                    <th><center>Comments</center></th>
    		    </tr>
    			<?
    		    	while($row = mysql_fetch_object($query)){
                    	$id = $row->id;
                        $version = $row->version;
    		        	$reporter = $row->reporter;
                        $status = $row->status;
                        $priority = $row->priority;
                        $bugName = $row->bugName;
                        $comments = $row->comments;
                        $notes = $row->notes;
                        $noteEdits = $row->noteEdits;
                        
                        if($priority == "Low Priority"){
                        	$color = 'yellow';
                        }elseif($priority == "Medium Priority"){
                        	$color = '#ffb84d';
                        }elseif($priority == "High Priority"){
                        	$color = '#ff471a';
                        }
                        
                        if($status == "New"){
                        	$color2 = 'white';
                        }elseif($status == "Duplicate"){
                        	$color2 = "purple";
                        }elseif($status == "Not A Bug"){
                        	$color2 = "grey";
                        }elseif($status == "Will Not Fix"){
                        	$color2 = "pink";
                        }elseif($status == "In Progress"){
                        	$color2 = 'yellow';
                        }elseif($status == "Fixed"){
                        	$color2 = '#00ff00';
                        }
                        
                        if($noteEdits >= 1){
                        	$badge = "
                            	<div id='badgeNotifications' class='notification' style='background-color:red'>
                                		<div style='color:white'>
                                    		$noteEdits
                                    	</div>
                                	</div>
                            ";
                        }else{
                        	$badge = "";
                        }
    		            
    		            echo "
    		            	<tr>
                            	<td>
                                	$version
                                    <img src='img/notepad.png' id='hideme' width='30px' height='30px' title='$notes' onclick='toggleNotes($id)'>
                                    $badge
                                    <div id='notes$id' title='Update Notes' style='display:none'>
										<form method='post'>
                                        	<input type='text' name='id' value='$id' style='display:none'>
                                            <textarea name='notes'>$notes</textarea>
                                            <input type='text' name='noteEdits' value='$noteEdits' style='display:none'>
                                            <input type='submit' name='updateNotesForm' value='Update Notes'>
                                        </form>
									</div>
                                </td>
    		                	<td>
                                	$bugName
                                </td>
                                <td>
                                	$reporter
                                </td>
                                <td style='background-color:$color2;width:25%' id='statusCell'>
                                	$status
                                    
                                    <img src='img/star.png' id='hideme' style='float:right' onclick='toggleStatusForm($id)'>
                                    <form method='post' style='display:none' class='statusUpdateForm$id statForm'>
										<dl id='sample' class='dropdown'>
											<dt><a href='#'><span>Update Status</span></a></dt>
												<dd>
													<ul>
														<li><a href='index.php?statusUpdateForm=true&&id=$id&&status=New'>New<span class='value'>New</span></a></li>
                                                        <li><a href='index.php?statusUpdateForm=true&&id=$id&&status=Duplicate'>Duplicate<span class='value'>Duplicate</span></a></li>
                                                        <li><a href='index.php?statusUpdateForm=true&&id=$id&&status=Not A Bug'>Not A Bug<span class='value'>Not A Bug</span></a></li>
                                                        <li><a href='index.php?statusUpdateForm=true&&id=$id&&status=Will Not Fix'>Will Not Fix<span class='value'>Will Not Fix</span></a></li>
														<li><a href='index.php?statusUpdateForm=true&&id=$id&&status=In Progress'>In Progress<span class='value'>In Progress</span></a></li>
                                                        <li><a href='index.php?statusUpdateForm=true&&id=$id&&status=Fixed'>Fixed<span class='value'>Fixed</span></a></li>
													</ul>
												</dd>
											</dl>
                                    </form>
                                <td style='background-color:$color;width:25%'>
                                	$priority
                                    <img src='img/clipboard.png' id='hideme' style='float:right' onclick='togglePriorityForm($id)'>
                                    <form method='post' style='display:none' class='priorityUpdateForm$id priorityForm'>
										<dl id='sample' class='dropdown'>
											<dt><a href='#'><span>Update Priority</span></a></dt>
												<dd>
													<ul>
														<li><a href='index.php?priorityUpdateForm=true&&id=$id&&priority=Low Priority'>Low Priority<span class='value'>Low Priority</span></a></li>
														<li><a href='index.php?priorityUpdateForm=true&&id=$id&&priority=Medium Priority'>Medium Priority<span class='value'>Medium Priority</span></a></li>
                                                        <li><a href='index.php?priorityUpdateForm=true&&id=$id&&priority=High Priority'>High Priority<span class='value'>High Priority</span></a></li>
													</ul>
												</dd>
											</dl>
                                    </form>
                                </td>
                                <td id='commentsCell'>
                                	<img src='img/pen.png' id='hideme' style='float:right' onclick='toggleCommentsForm($id)'>
                                	<div id='commentsPrimary$id' style='display:inline'>
                                		$comments
                                    </div>
                                    <form method='post' style='display:none' class='commentUpdateForm$id'>
                                    	<input type='text' name='id' value='$id' style='display:none'>
                                        <textarea name='comments' class='commentsUpdateTA' cols='25' rows='10'>$comments</textarea>
                                        <input type='submit' class='btn btn-success commentsUpdateBtn' name='submitCommentsUpdate' value='Update Comments'>
                                    </form>
                                </td>
    		                </tr>
    		            ";
    		        }
    		    ?>
    		</table>
    </div>
<script>
	$(".dropdown dt a").click(function() {
    	$(".dropdown dd ul").toggle();
	});
    
    $(".dropdown dd ul li a").click(function() {
    	var text = $(this).html();
    	$(".dropdown dt a span").html(text);
    	$(".dropdown dd ul").hide();
	}); 
    
    $(document).bind('click', function(e) {
    	var $clicked = $(e.target);
    	if (! $clicked.parents().hasClass("dropdown")){
        	$(".dropdown dd ul").hide();
        }
	});
</script>
