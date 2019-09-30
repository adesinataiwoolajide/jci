<?php require_once("header.php");
    $reg_number = $_GET['reg_number'];
    $users = $register->getSingleUserDetails($reg_number);
?>

	<div class="main" style="margin-top:10px;">
		<div class="col-md-12" align="center">
			<img src="assets/images/jci.jpg" style="width:100px; height:80px;">
		</div>
		<div class="header">
			<h1>Membership Registration Details!</h1>
			<p><?php echo $users['firstname']. ' '. $users['lastname'] ?> Please Preview Your Details Below </p>
			
		</div>
        <div class="col-md-6" align="" style="margin-bottom: 20px">
			<img src="<?php echo "assets/passport/".$users['passport'] ?>" style="width: 70px; height: 60px;">
		</div>
        <div class="row">
            <div class="col-md-6">
                <table class="table table-bordered ">
                
                    <tbody>                                    
                        <tr>
                            <td>Full Name</td> 
                            <td><?php echo $users['firstname']. ' '. $users['lastname'] ?></td>
                        </tr>
                    </tbody>
                    <tbody>                                    
                        <tr>
                            <td>E-Mail</td > 
                            <td><?php echo $users['email'] ?></td>
                        </tr>
                    </tbody>
                    <tbody>                                    
                        <tr>
                            <td>Business/Employer</td> 
                            <td><?php echo $users['employer'] ?></td>
                        </tr>
                    </tbody>
                    <tbody>                                    
                        <tr>
                            <td>Home Phone</td > 
                            <td><?php echo $users['home_phone'] ?></td>
                        </tr>
                    </tbody>
                    <tbody>                                    
                        <tr>
                            <td>Position/Occupation</td > 
                            <td><?php echo $users['position'] ?></td>
                        </tr>
                    </tbody>
                    <tbody>                                    
                        <tr>
                            <td>Mobile Phone</td> 
                            <td><?php echo $users['mobile'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        
            
            <div class="col-md-6">
                <table class="table table-bordered ">
                    <tbody>                                    
                        <tr>
                            <td>Business Phone</td > 
                            <td><?php echo $users['business'] ?></td>
                        </tr>
                    </tbody>
                    <tbody>                                    
                        <tr>
                            <td>Home Address</td> 
                            <td><?php echo $users['home_address'] ?></td>
                        </tr>
                    </tbody>
                    <tbody>                                    
                        <tr>
                            <td>Business Address</td> 
                            <td><?php echo $users['business_address'] ?></td>
                        </tr>
                    </tbody>
                    <tbody>                                    
                        <tr>
                            <td>Date of Birth</td> 
                            <td><?php echo $users['birth'] ?></td>
                        </tr>
                    </tbody>
                    <tbody>                                    
                        <tr>
                            <td>How did you hear about JCI Lagos Coral?</td> 
                            <td><?php echo $users['details'] ?></td>
                        </tr>
                    </tbody>
                    <tbody>                                    
                        <tr>
                            <td>How do you want to contribute and participate in JCI Lagos Coral?</td> 
                            <td><?php echo $users['contribute'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
            
        
		<!-----start-copyright---->
	<?php require_once("footer.php"); ?>