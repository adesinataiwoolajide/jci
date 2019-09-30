<div class="copy-right">
        <p>Powered by <a href="./">Glorious Empire Technologies</a></p> 
    </div>
    <!-----//end-copyright---->
</div>
<script src="assets/Toast/js/Toast.min.js"></script>
<?php 
if(isset($_SESSION['success'])){
    $message = $_SESSION['success']; ?>
    <script type="text/javascript">
        new Toast({ message: '<p style="color:white"><b><?php echo $message; ?></p></b>', type: 'success' });
    </script><?php 
    unset($_SESSION['success']);
}
if(isset($_SESSION['error'])){
    $message = $_SESSION['error'];?>

    <script type="text/javascript">
        new Toast({ message: '<p style="color:white"><b><?php echo $message; ?> </b></p>', type: 'danger' });
    </script><?php 
    unset($_SESSION['error']);
}  ?>

	
</body>
</html>