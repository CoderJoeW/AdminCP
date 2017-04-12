<div id="modvideos" style="display:none">
    	<h2>Admin Only Videos</h2>
			<?
    			$sql = "SELECT * FROM surviusHosting WHERE adminOnly='true'";
    		    $query = mysql_query($sql);
    		?>
    		<table width="100%">
    			<tr>
    		    	<th><center>Link</center></th>
    		        <th><center>Comments</center></th>
    		        <th><center>Actions</center></th>
    		    </tr>
    			<?
    		    	while($row = mysql_fetch_object($query)){
    		        	$name = $row->name;
    		            $comments = $row->comments;
    		            
    		            echo "
    		            	<tr>
    		                	<td><a target='_blank' href='http://kot90.altervista.org/survius/display.php?name=$name&bypass=$bypassEncoding'>$name</a></td>
    		                    <td>$comments</td>
    		                    <td>No Actions Available</td>
    		                </tr>
    		            ";
    		        }
    		    ?>
    		</table>
    </div>
