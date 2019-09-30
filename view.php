<?php require_once("header.php"); ?>

	<div class="main" style="margin-top:10px;">
		<div class="col-md-12" align="center">
			<img src="assets/images/jci.jpg" style="width:100px; height:80px;">
		</div>
		<div class="header" >
			<h1>Membership List!</h1>
			<p>List of Registered Member. </p>
			
		</div>
		
		<table class="table table-bordered ">
            <thead>
                <tr>
                    <th scope="col">S/N</th>
                    <th scope="col">Passport</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Number</th>
                    <th scope="col">Business</th>
                   
                </tr>
            </thead>
            <tbody><?php 
                $num =1;
                foreach($register::getAllUser() as $users){?>

                    <tr>
                        <th scope="row"><?php echo $num; ?>
                        <a href="details.php?reg_number=<?php echo $users['reg_number']?>"
                         class="btn btn-primary"><i class="fa fa-list"></i></a>
						
                        </th>
                        <th><img src="<?php echo "assets/passport/".$users['passport'] ?>" style="width: 50px; height: 50px;"></th>
                        <td><?php echo $users['firstname']. ' '. $users['lastname'] ?></td>
                        <td><?php echo $users['email'] ?></td>
                        <td><?php echo $users['mobile'] ?></td>
                        <td><?php echo $users['business'] ?></td>
                        
                    </tr><?php 
                    $num++;
                } ?>
                
            </tbody>
        </table>
		<!-----start-copyright---->
	<?php require_once("footer.php"); ?>