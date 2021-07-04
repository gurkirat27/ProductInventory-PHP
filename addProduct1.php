<?php
       
		
		$host = 'localhost';                
        $username = 'sin10461_admin';      	
        $password = 'Gurkirat@27';        	
        $dbname = 'sin10461_MyDatabase';   		
                                            

       
            $conn = mysqli_connect($host, $username, $password, $dbname);

        
            if (empty($conn))
                die ("Connection Failed: " . mysqli_connect_error());

       
            $productName = $_REQUEST['productName'];
            $productPrice = $_REQUEST['productPrice'];
        // query to insert into table tblProducts
            $query = "insert into tblProducts (ProductName, ProductPrice) values ('$productName', $productPrice);";

        
            $result = mysqli_query($conn, $query);

        
            if ($result == 1)
            {
               
                    header ('location:addProduct.php?result=success');
            }
            else
            {
                
                    header ('location:addProduct.php?result=fail');
            }

?>
