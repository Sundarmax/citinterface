<!DOCTYPE html>
<html>
    <head>
        <title>Activity</title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">


        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
    </head>
    <body>
        <?php
            include('dbcon.php');
        ?>
        <div class="container">
            <div class="row-fluid">
                <div class="span12">
							<br />
                          <a href="verify.php" class="btn btn-success">Back</a>
							<br />
							<br />
                    <div class="row-fluid">
                        <div class="span6">
                            <div class="span6">
                                <form method="POST"  class="navbar-search pull-left">
                                    <input type="text" name="search" class="search-query" placeholder="Search">
                                </form>
                            </div>
							<br />
							<br />
							<br />
                            <table class="table table-bordered  table-hover table-striped" style="width:800px;"> 
                                <thead>
                                    <tr>
                                        <th>IFC ID </th>
					<th>NAME</th>
                                        <th>COLLEGE</th>
					<th> YEAR</th>
                                        <th>MOBILE</th>
                                        <th> EMAIL</th>
                                        <th>TECHNICAL</th>
					<th>NON TECHNICAL</th>
					<th>GAME</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($_POST['search'])){
                                    
                                        $search=$_POST['search'];
                                        
                                        $query=mysql_query("select * from events where 
										technical like '%$search%' or college like '%$search%' or inter_id like '%$search%' or nontech like '%$search%' or game like '%$search%' or mobile like '%$search%' or email like '%$search%' ")or die(mysql_error());
                                        while($row=mysql_fetch_array($query)){
                                        ?>

                                        <tr>
                                            
						<td><?php echo $row['inter_id']; ?></td>
 
					    <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['college']; ?></td>
				            <td><?php echo $row['year']; ?></td>
                                            <td><?php echo $row['mobile']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['technical']; ?></td>
					    <td><?php echo $row['nontech']; ?></td>
					    <td><?php echo $row['game']; ?></td>
                                        </tr>



                                        <?php
                                        }}
                                        ?>
                                                                                
                                            
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>