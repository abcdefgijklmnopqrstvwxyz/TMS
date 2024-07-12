<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initi">
    <title>Transport Services Management System</title>
    <link rel="stylesheet"  href="repairing.css">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    
    </head>

    <body>
    	<div class="table">
    		<div class="table-header">
    			<p>Fueling Deatils</p>
                <a class="btn btn-primary" href="/tsms project/index main.php" role="button">Back</a>
    			<div>
    				<a class="btn btn-primary" href="/tsms project/Fcreate.php" role="button">NEW ROW</a>
                    <br>
    			</div>
    		</div>

    		<div class="table-section">
    			<table>
    				<thead>
    					<tr>
    						<th>Serial No</th>
    						<th>Vehicle Name</th>
                            <th>Vehicle No</th>
                            <th>Driver Name</th>
                            <th>Litre</th>
    						<th>Amount</th>
                            <th>Image </th>
                            <th>Fueling Date</th>
    						<th>Delete</th>
    					</tr>
    				</thead>
    				<tbody>
                        <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $database = "tsms project";

                            $connection = new mysqli($servername, $username, $password, $database);

                            if($connection->connect_error) {
                                die("Connection failed: " . $connection->connect_error);
                            }

                            $sql = "SELECT * FROM fueling";
                            $result = $connection->query($sql);

                            if(!$result) 
                            {
                                die("Invaid query: " . $connection->error);
                            }

                            while($row = $result->fetch_assoc())
                            {
                                echo "
                                <tr>
                                    <td>$row[id]</td>
                                    <td>$row[vhl_name]</td>
                                    <td>$row[vhl_no]</td>
                                    <td>$row[dr_name]</td>
                                    <td>$row[liter]</td>
                                    <td>$row[amnt]</td>
                                    <td><img src=$row[image]></td>
                                    <td>$row[created_at]</td>
                                   <td><a class='btn btn-danger btn-sm' href='/tsms project/Fdelete.php?id=$row[id]'>Delete</a></td>
                                    
                                
                                </tr>
                                ";
                            }

                        ?>
    					
    					
    				</tbody>
    			</table>
    		
    	</div>
    </body>
    </html>