<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>View Products</title>
	<link rel="stylesheet" href="conversion.css">
    <style>								
        table
        {
			align:center;
            border-collapse: collapse;
            width: 40%;
            margin: auto;
        }

        th, td
        {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even){background-color: #f2f2f2}

        th
        {
            background-color: skyblue;
            color: white;
        }

        h2
        {
            text-align: center;
        }
    </style>
</head>
<body>
<<div class="x1">
   
        <h1 align="center">Welcome to<br>Electronic store<br></h1>
</div>
        <hr><hr>
        
        <div class="x2" align="center">
		
   

</form>

    

   
    <a href="addProduct.php">Add Product</a> &nbsp
    <a href="viewProducts.php">View Products</a><br>
	
	<h1>View Electronics</h1>

    <br>
  <form action = "viewProducts.php" method="POST">
<input type="text" name="search" placeholder ="Search">
<input type ="submit" value="submit" name="submit">

</form><br>

    <table id="products">
        <tr>
            <th>S. No.</th>
            <th>Product Name</th>
            <th>Product Price</th>
        </tr>

        <?php

        // connect with database
		
				
		$host = 'localhost';              
        $username = 'sin10461_admin';      
        $password = 'Gurkirat@27';        	
        $dbname = 'sin10461_MyDatabase';   		
                                            

     
        $conn = mysqli_connect($host, $username, $password, $dbname);

  
        if (empty($conn)){
            die ("Connection Failed: " . mysqli_connect_error());

         
                $query = "select * from tblProducts;";

           
                $result = mysqli_query($conn, $query);

            
                if (mysqli_num_rows($result) > 0)
                {
                    $i = 1; 
                    while ($row = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<td>$i</td>";
                        echo "<td>" . $row['productName'] . "</td>";
                        echo "<td>" . $row['productPrice'] . "</td>";
                        echo "</tr>";

                        $i++;
                    }
                }
                else
                {
                    echo "No Rows Fetched!";
                }

		
		}		  
			else{
      
        

           
            
					$searchq=$_REQUEST['search'];
					$query = "select * from tblProducts where productName like '%" . $searchq . "%';";

            
                $result = mysqli_query($conn,$query);

           
                if (mysqli_num_rows($result) > 0)
                {
                    $i = 1; 
                    while ($row = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<td>$i</td>";
                        echo "<td>" . $row['productName'] . "</td>";
                        echo "<td>" . $row['productPrice'] . "</td>";
                        echo "</tr>";

                        $i++;
                    }
                }
                else
                {
                    echo "No Rows Fetched!";
			}}

        ?>
    </table>
	
</body>
</html>