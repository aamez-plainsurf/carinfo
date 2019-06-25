
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Morris Garage</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
	


    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	
	 <script src="js/jquery-1.10.2.js"></script>


	
</head>
<?php
include("php/header.php");
?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <div class="row">
				
				 
					 <div class="col-md-6">
                        <div class="main-box mb-red">
                                <a href="import.php">
                                <i class="fa fa-file-text fa-5x"></i>
                                <h5>Import</h5>
                                <form action="import.php" class="md-form" method="post" enctype="multipart/form-data">
                                  <div class="file-field">
                                    <div class="btn btn-sm">
                                      <span></span>
                                      <input type="file" name="jsonFile">
                                    </div>
                                    <div class="file-path-wrapper">
                                    <input type="submit" value="Import" name="buttomImport">
                                    </div>
                                  </div>
                                </form>
                            </a>
                        </div>
                    </div>

                     <div class="col-md-6">
                        <div class="main-box mb-pink">
                            <a href="export.php">
                                <i class="fa fa-file-text fa-5x"></i>
                                <h5>Export</h5>
                            </a>
                        </div>
                    </div>
                  

                </div>
                    </div>
                </div>


		 <link href="css/datatable/datatable.css" rel="stylesheet" />
            
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="js/custom1.js"></script>

    
</body>
</html>
