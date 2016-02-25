<html>
<body>

Welcome <?php echo $_POST["name"]; 
echo file_get_contents('php://input');?><br>
Your email address is: <?php echo $_POST["email"]; ?>

</body>
</html>