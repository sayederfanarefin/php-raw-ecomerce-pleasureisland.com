<?php?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 padding-right">
					<div class="features_items"><!--features_items-->
                        </br>
						<h2 class="title text-center">Products</h2>
                        <?php

                            $servername="ap-cdbr-azure-southeast-a.cloudapp.net";
                            $username="b7ef716311213b";
                            $dbname="PleasureIsland";
                            $password="e4719998";
    
                            //$servername = "localhost";
                            //$username = "pleasureisU0nqx";
                            //$password = "}zg8rO-6P/\$)";
                            //$dbname="pleasureisland";
    
                            $conn = mysqli_connect($servername, $username, $password, $dbname);
                            if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                            }
                            $query = "SELECT * FROM products";
                            $result = $conn->query($query);

                            while($row = $result->fetch_assoc()) {
                     echo '   <div class="col-sm-4">
							        <div class="product-image-wrapper">
								        <div class="single-products">
                                                <div class="simpleCart_shelfItem">
										            <div class="productinfo text-center">
                                                        <div class="carousel slide" data-ride="carousel">
                                                              <div class="carousel-inner" role="listbox">
                                                                    <div class="item active">
                                                                          <img class="item_thumb" src="'.$row["Ppic"].'" alt="'.$row["Pname"].'"  height="240" />
                                                                          <div class="carousel-caption">
                                                                            
                                                                          </div>
                                                                    </div>
                                                                    <div class="item">
                                                                          <img class="item_thumb" src="'.$row["Cpic1"].'" alt="'.$row["Pname"].'"  height="240" />
                                                                          <div class="carousel-caption">
                                                                            
                                                                          </div>
                                                                    </div>
                                                                    <div class="item">
                                                                          <img class="item_thumb" src="'.$row["Cpic2"].'" alt="'.$row["Pname"].'"  height="240" />
                                                                          <div class="carousel-caption">
                                                                            
                                                                          </div>
                                                                    </div>
                                                                    <div class="item">
                                                                          <img class="item_thumb" src="'.$row["Cpic3"].'" alt="'.$row["Pname"].'"  height="240" />
                                                                          <div class="carousel-caption">
                                                                            
                                                                          </div>
                                                                    </div>

                                                                    
                                                              </div>
                                                        </div>
											            <h2 class="item_price">BDT '.$row["Pprice"].'</h2>
											            <p class="item_name">'.$row["Pname"].'</p>
                                                        
                                                        <div>
                                                            <div>'.$row["Pdetails"].'</div>    
                                                        </div>
                                                        </br>
                                                        <a class="item_add" href="javascript:;">
                                                            <div class="btn btn-default add-to-cart">
                                                                <i class="fa fa-shopping-cart"></i>Add to cart
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
								        </div>
							        </div>
						        </div>        ';
                            }
                        ?>

						

                        
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>
<?php
                             $servername="ap-cdbr-azure-southeast-a.cloudapp.net";
                            $username="b7ef716311213b";
                            $dbname="PleasureIsland";
                            $password="e4719998";
    
                            //$servername = "localhost";
                            //$username = "pleasureisU0nqx";
                            //$password = "}zg8rO-6P/\$)";
                            //$dbname="pleasureisland";
    
                            $conn = mysqli_connect($servername, $username, $password, $dbname);
                            if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                            }
                            $query = "SELECT * FROM products";
                            $result = $conn->query($query);

                            while($row = $result->fetch_assoc()) {
                                echo '
    <!-- Product 1 -->
<div class="portfolio-modal modal fade" id="'.$row[Pproduct].'" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
    <div class="container">
    <div class="row">
    <div class="col-lg-8 col-lg-offset-2">
    <div class="modal-body">
    <!-- Project Details Go Here -->
    <h1>'.$row["Pname"].'</h1>
    <h3 class="item-intro text-muted">Price: BDT '.$row["Pprice"].'</h3>

    <!--fhgddddddddddddddddddddddddddddddddddddfhgd-->
    <div class="row">
    <div class="col-sm-3"></div><div class="col-sm-6">
                       
    <br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
      
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
    <div class="item active">
    <img src="'.$row["Cpic1"].'" alt="'.$row["Pname"].'" height="350">
    </div>

    <div class="item">
    <img src="'.$row["Cpic2"].'" alt="'.$row["Pname"].'" height="350">
    </div>
    
    <div class="item">
    <img src="'.$row["Cpic3"].'" alt="'.$row["Pname"].'" height="350">
    </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a>
    </div>


    </div>
    </br>
    </br>
    <div class="col-sm-12">
        '.$row["Pdetails"].'
    </div></div>
    <!--dfffffffffffffffffffffffffffffffffffffffffgdfg-->
             
    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Details</button>
    </div>
    </div>
    </div>
    </div>
    </div>
</div>
';
                            }

?>


