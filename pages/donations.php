<div id="donations" style="display:none">
    	<h2>Donators</h2>
			<?
    			$sql = "SELECT * FROM dc_donations";
    		    $query = mysql_query($sql);
    		?>
    		<table width="100%">
    			<tr>
    		    	<th><center>Transaction Id</center></th>
    		        <th><center>Donor Email</center></th>
    		        <th><center>Amount</center></th>
                    <th><center>Timestamp</center></th>
    		    </tr>
    			<?
    		    	while($row = mysql_fetch_object($query)){
    		        	$id = $row->transaction_id;
    		            $email = $row->donor_email;
                        $amount = $row->amount;
                        $ts = $row->dt;
    		            
    		            echo "
    		            	<tr>
    		                	<td>$id</td>
    		                    <td>$email</td>
    		                    <td>$$amount</td>
                                <td>$ts</td>
    		                </tr>
    		            ";
    		        }
    		    ?>
    		</table>
    </div>
