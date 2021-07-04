<html>
    <head>
        <title>
            Assignment 6
        </title>
		<link rel="stylesheet" href="conversion.css">
    </head>
    <body>
       
<div class="x1" text-align="center">
   
        <h1 align="center">Welcome to<br>Electronic store<br></h1>
		<br>
		<form>
				<br>
				
        <a href="addProduct.php"><b>Add Electronic</b> |
        <a href="viewProducts.php"><b>View Electronic</b></a>
              


           
           </form>
</div>
        <hr><hr>
        
        <div class="x2" align="center">
  <h2>Add Electronic</h2>

    <form action="addProduct1.php" method="POST">
        <table>
            <tr>
                <td>Electronic Name:</td>
                <td>
                    <input type="text" name="productName" /required>
                </td>
            </tr><br>
            <tr>
                <td>Electronic Price:</td>
                <td>
                    <input type="text" name="productPrice" /required>
                </td><br>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Add Electronics">
					 
                </td>
            </tr>
        </table>
    </form>

    <?php
        if (isset($_REQUEST['result'])) {
            if ($_REQUEST['result'] == "success") {
                echo "<p>Electronic is added Successfully! !";
				
            }
            else if ($_REQUEST['result'] == "fail") {
                echo "<p>Product was not added successfully.";
            }
        }
    ?>
          
        
    
    
</body>
</html>