
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        </br>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container">
 <div class="row">
<?php

if (($handle = fopen("data.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
?>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="pictures/<?php echo $data[5]; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><a href="#" title="View Product"><?php echo $data[1]; ?></a></h5>
                            <p class="card-text">
							<?php
							 echo "<p>Category : ".$data[14]."</p>";
							 echo $data[2]."</br>"; 
							 echo "Size : ".$data[6]."</br>";
							 echo "Pieces per Lot : ".$data[7]."</br>";
							 echo "Minimum order Qty : ".$data[8]."</br>";
							 echo "Made in ".$data[9]."</br>";
							 echo "Location	 ".$data[10]."</br>";
							 echo "Discount : ".$data[11]."</br>";
							 echo "Shipping : ".$data[12]."</br>";
							 ?>

							</p>
                            <div class="row">
                                <div class="col">
                                    <p class="btn btn-danger btn-block"><?php echo $data[4]."$"; ?></p>
                                </div>
                                <div class="col">
                                    <a href="#" class="btn btn-success btn-block">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
				     <?php
		
       }
    fclose($handle);
 }
?>
                </div>
                </div>
       

<!-- Footer -->
<footer class="text-light bg-dark">
    <div class="container">
</br></br>
    </div>
</footer>
