<!DOCTYPE html>
<html>
    <head>
        <title>INTERFACE'16 </title>
        
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">


        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
    </head>
    <body>



        <?php
            include('dbcon.php');
        ?>
		
        <div class="container">



				<h1  align="center"> INTERFACE'16 SEP-30</h1>
				<h2  align="center"> REGISTERED USER'S VERIFICATION ONLINE</h2>

									
            <div class="row-fluid">
                <div class="span12">
							<br />
							<br />
                    <div class="row-fluid">
                        <div class="span6">
                            <div class="span6">

					


                                <form method="POST" action="search.php" class="navbar-search pull-left">

                                    <input type="text" align="center" name="search" class="search-query" placeholder="Search">
                                </form>
                            </div>
							<br />
							<br />
							<br />


						
                            <table class="table table-bordered  table-hover table-striped" style="width:800px;"> 
                                <thead>
                                    <tr>
                                        

					 <th>NAME</th>
                                        <th>COLLEGE</th>
                                        <th>MOBILE</th>
                                        <th> EMAIL</th>
					<th>YEAR</th>
                                        <th>TECHNICAL</th>
					<th>NON TECHNICAL</th>
					<th>GAME</th>	
									
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $query=mysql_query("select * from events")or die(mysql_error());
                                        while($row=mysql_fetch_array($query)){
                                        ?>

                                        <tr>
                                         

						<td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['college']; ?></td>
                                            <td><?php echo $row['mobile']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
					<td><?php echo $row['year']; ?></td>
	
                                            <td><?php echo $row['technical']; ?></td>
					    <td><?php echo $row['nontech']; ?></td>
					    <td><?php echo $row['game']; ?></td>

					</tr>
                                        <?php
                                        }
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