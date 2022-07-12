<?php

$con = mysqli_connect('localhost', 'root', '', 'elms') or die(mysqli_error());



?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Title -->
    <title>Volunteer | View Issues</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta charset="UTF-8">
    <meta name="description" content="Responsive Admin Dashboard Template" />
    <meta name="keywords" content="admin,dashboard" />
    <meta name="author" content="Steelcoders" />

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="../assets/plugins/materialize/css/materialize.css" />
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../assets/plugins/metrojs/MetroJs.min.css" rel="stylesheet">
    <link href="../assets/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="../assets/css/alpha.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />

</head>

<body>


    <main class="mn-inner mt-5">


        <div class="row no-m-t no-m-b">
            <div class="col s12 m12 l12 col-md-12">
                <div class="card invoices-card border-0 shadow">
                    <div class="card-content">

                        <span class="card-title text-success">Latest Issues</span>
                        <table id="example" class="display responsive-table bg-transparent">

                            <tbody>
                                <section class="content">
                                    <div class="container-fluid">
                                        <?php echo @$msg; ?>
                                        <div class="row clearfix">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <h2 style="text-align: center; color:crimson">


                                                </h2>
                                                <div class="card">
                                                    <div class="header">

                                                        <table style='align:center;'>
                                                            <tr>
                                                                <th>Id</th>
                                                                <th>First Name</th>
                                                                <th>Last Name</th>
                                                                <th>Issue Message</th>


                                                            </tr>
                                                            <?php
                                                            $sql = "SELECT * FROM issues";
                                                            $result = $con->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                // output data of each row
                                                                while ($row = $result->fetch_assoc()) {
                                                                    echo "<tr>
                                    <td>" . $row["id"] . "</td>
                                    <td>" . $row["First_name"] . "</td>
                                    <td>" . $row["Last_name"] . "</td>
                                    <td>" . $row["Message"] . "</td>
                                   
                                    
                                </tr>";
                                                                }
                                                                echo "
                            </table>";
                                                            } else {
                                                                echo "0 results";
                                                            }
                                                            $con->close();
                                                            ?>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class=""></div>


        </div>
        </div>

    </main>

    </div>



    <!-- Javascripts -->
    <script src="../assets/plugins/jquery/jquery-2.2.0.min.js"></script>
    <script src="../assets/plugins/materialize/js/materialize.min.js"></script>
    <script src="../assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
    <script src="../assets/plugins/jquery-blockui/jquery.blockui.js"></script>
    <script src="../assets/plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="../assets/plugins/counter-up-master/jquery.counterup.min.js"></script>
    <script src="../assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="../assets/plugins/chart.js/chart.min.js"></script>
    <script src="../assets/plugins/flot/jquery.flot.min.js"></script>
    <script src="../assets/plugins/flot/jquery.flot.time.min.js"></script>
    <script src="../assets/plugins/flot/jquery.flot.symbol.min.js"></script>
    <script src="../assets/plugins/flot/jquery.flot.resize.min.js"></script>
    <script src="../assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="../assets/plugins/curvedlines/curvedLines.js"></script>
    <script src="../assets/plugins/peity/jquery.peity.min.js"></script>
    <script src="../assets/js/alpha.min.js"></script>
    <script src="../assets/js/pages/dashboard.js"></script>

</body>

</html>
<?php  ?>