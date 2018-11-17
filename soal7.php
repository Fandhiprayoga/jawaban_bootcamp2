<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>SOAL 7 (TAMPIL DATA PRODUK)</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
        <style>
			body {
			    margin: 0;
			    padding: 0;
			    height: 100%;
			}
			html {
			    position: relative;
			    min-height: 100%;
			}
			footer {
			    background-color:rgb(193,185,185);;
			    position: absolute;
			    left: 0;
			    bottom: 0;
			    height: 50px;
			    width: 100%;
			    overflow: hidden;
			}
        </style>
    </head>
    <body>
    	<?php 
    		$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "soal6";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 
    	 ?>
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="background-color:rgb(193,185,185);">
            <div class="container"><a href="#" class="navbar-brand">SOAL 7 ARKADEMY</a>
                <div class="collapse navbar-collapse"
                    id="navcol-1"></div>
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center" style="margin-top:100px;margin-bottom:50px;">List data produk</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-hover table-condensed">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>KATEGORI PRODUK</th>
                                <th>NAMA PRODUK</th>
                            </tr>
                        </thead>
                        <tbody>

                        	<?php 
                        		$query="SELECT pc.id, pc.name, GROUP_CONCAT(p.name) AS products FROM product_categories pc, products p 		WHERE p.category_id=pc.id GROUP BY pc.id ";

                        		$result = $conn->query($query);

                        		if ($result->num_rows > 0) 
                        		{
                        			while($row = $result->fetch_assoc())
                        			{
                        				echo "<tr>
				                                <td>".$row['id']."</td>
				                                <td>".$row['name']."</td>
				                                <td>".$row['products']."</td>
				                            </tr>";
                        			}
                        		}
                        		else
                        		{
                        			echo "<tr><td colspan='3'>TIDAK ADA DATA</td></tr>";
                        		}
                        	 ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-clean" style="">
	    <footer>
	        <div class="container">
	            <div class="row justify-content-center">
	                <div class="col-lg-3 item social">
	                    <p class="copyright">fandhi dhuga prayoga © 2018</p>
	                </div>
	            </div>
	        </div>
	    </footer>
	</div>
</body>
</html>
<script src="./assets/js/bootstrap.min.js"></script>