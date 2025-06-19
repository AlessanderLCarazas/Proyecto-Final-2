<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link rel="shortcut icon" type="image/png" href="img/multistream.png" />
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-clearmin.min.css">
    <link rel="stylesheet" type="text/css" href="css/style-multiresolution.css">
    <link rel="stylesheet" type="text/css" href="css/style-tree.css">
    <link rel="stylesheet" type="text/css" href="css/style-tooltip.css">
    <link rel="stylesheet" type="text/css" href="css/loader.css">
    <title>MultiStream</title>

    <style>
        #dataset {
            color: black;
            background-color: white;
            padding: 4px;
            font-weight: bold;
            border-radius: 4px;
            text-align: center;
            display: block;
            margin: 0 auto;
        }
        #dataset option {
            color: black;
        }
        .select-label {
            text-align: center;
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
    </style>

    <script type='text/javascript'>
        <?php ini_set("memory_limit","256M"); ?>

        <?php
            if (isset($_POST["dataset"])) {
                $indexSelect = $_POST["dataset"];

                $name_covid = "COVID-19";
                $filePath_covid = "source/covid_evolution/";
                $timePolarity_covid = 3;
                $nTimeGranularity_covid = 1;
                $isLargeTree_covid = TRUE;
                $description_covid = "<strong>About: </strong>This visualization shows the COVID-19's evolution<br><strong>Period: </strong>From January 2020 to December 2023<br><strong>Periodicity: </strong>weekly (7 days)<br><strong>Dataset: </strong>This datasets comes from the <a href='https://ourworldindata.org/coronavirus-source-data' target='_blank'>Our World in Data</a> webpage. Visit the Github repository <a href='https://github.com/owid/covid-19-data/tree/master/public/data/' target='_blank'>here</a>";

                switch ($indexSelect) {
                    case 0:
                        $name = $name_covid . ' - Total confirmed cases';
                        $filePath = $filePath_covid . "total_cases/data.json";
                        $isLargeTree = $isLargeTree_covid;
                        $description = $description_covid;
                        break;
                    case 1:
                        $name = $name_covid . ' - New confirmed cases';
                        $filePath = $filePath_covid . "new_cases/data.json";
                        $isLargeTree = $isLargeTree_covid;
                        $description = $description_covid;
                        break;
                    case 2:
                        $name = $name_covid . ' - New confirmed cases smoothed';
                        $filePath = $filePath_covid . "new_cases_smoothed/data.json";
                        $isLargeTree = $isLargeTree_covid;
                        $description = $description_covid;
                        break;
                    case 3:
                        $name = $name_covid . ' - Total confirmed cases per million';
                        $filePath = $filePath_covid . "total_cases_per_million/data.json";
                        $isLargeTree = $isLargeTree_covid;
                        $description = $description_covid;
                        break;
                    case 4:
                        $name = $name_covid . ' - New confirmed cases per million';
                        $filePath = $filePath_covid . "new_cases_per_million/data.json";
                        $isLargeTree = $isLargeTree_covid;
                        $description = $description_covid;
                        break;
                    case 5:
                        $name = $name_covid . ' - New confirmed cases smoothed per million';
                        $filePath = $filePath_covid . "new_cases_smoothed_per_million/data.json";
                        $isLargeTree = $isLargeTree_covid;
                        $description = $description_covid;
                        break;
                    case 6:
                        $name = $name_covid . ' - Total deaths';
                        $filePath = $filePath_covid . "total_deaths/data.json";
                        $isLargeTree = $isLargeTree_covid;
                        $description = $description_covid;
                        break;
                    case 7:
                        $name = $name_covid . ' - New deaths';
                        $filePath = $filePath_covid . "new_deaths/data.json";
                        $isLargeTree = $isLargeTree_covid;
                        $description = $description_covid;
                        break;
                    case 8:
                        $name = $name_covid . ' - New deaths smoothed';
                        $filePath = $filePath_covid . "new_deaths_smoothed/data.json";
                        $isLargeTree = $isLargeTree_covid;
                        $description = $description_covid;
                        break;
                    case 9:
                        $name = $name_covid . ' - Total deaths per million';
                        $filePath = $filePath_covid . "total_deaths_per_million/data.json";
                        $isLargeTree = $isLargeTree_covid;
                        $description = $description_covid;
                        break;
                    case 10:
                        $name = $name_covid . ' - New deaths per million';
                        $filePath = $filePath_covid . "new_deaths_per_million/data.json";
                        $isLargeTree = $isLargeTree_covid;
                        $description = $description_covid;
                        break;
                    case 11:
                        $name = $name_covid . ' - New deaths smoothed per million';
                        $filePath = $filePath_covid . "new_deaths_smoothed_per_million/data.json";
                        $isLargeTree = $isLargeTree_covid;
                        $description = $description_covid;
                        break;
                }

                $str = file_get_contents($filePath);
                $json = json_decode(json_encode($str));
            } else {
                $name = $_POST["fileName"];
                $isLargeTree = FALSE;
                $description = "";
                $json = json_decode(json_encode($_POST["fileContent"]));
            }

            $error = json_last_error();
        ?>

        var jsonArray = <?php echo ($json); ?>;
    </script>
</head>
<body class="cm-no-transition cm-1-navbar">
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_EN/sdk.js#xfbml=1&version=v2.8";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

    <div id="loader"></div>
    <div id="cm-menu">
        <nav class="cm-navbar cm-navbar-primary">
            <div class="cm-flex">
                <div class="cm-logos">
                    <form action="visualize.php" method="post" enctype="multipart/form-data">
                        <label class="select-label">Seleccione un conjunto de datos para visualizar:</label>
                        <select id="dataset" name='dataset' onchange="this.form.submit()">
                            <optgroup label="COVID-19 Confirmed Cases">
                                <option value="0" <?php echo (isset($indexSelect) && $indexSelect == 0) ? 'selected' : ''; ?>>Total confirmed cases</option>
                                <option value="1" <?php echo (isset($indexSelect) && $indexSelect == 1) ? 'selected' : ''; ?>>New confirmed cases</option>
                                <option value="2" <?php echo (isset($indexSelect) && $indexSelect == 2) ? 'selected' : ''; ?>>New confirmed cases smoothed</option>
                                <option value="3" <?php echo (isset($indexSelect) && $indexSelect == 3) ? 'selected' : ''; ?>>Total confirmed cases per million</option>
                                <option value="4" <?php echo (isset($indexSelect) && $indexSelect == 4) ? 'selected' : ''; ?>>New confirmed cases per million</option>
                                <option value="5" <?php echo (isset($indexSelect) && $indexSelect == 5) ? 'selected' : ''; ?>>New confirmed cases smoothed per million</option>
                            </optgroup>
                            <optgroup label="COVID-19 Confirmed Deaths">
                                <option value="6" <?php echo (isset($indexSelect) && $indexSelect == 6) ? 'selected' : ''; ?>>Total deaths</option>
                                <option value="7" <?php echo (isset($indexSelect) && $indexSelect == 7) ? 'selected' : ''; ?>>New deaths</option>
                                <option value="8" <?php echo (isset($indexSelect) && $indexSelect == 8) ? 'selected' : ''; ?>>New deaths smoothed</option>
                                <option value="9" <?php echo (isset($indexSelect) && $indexSelect == 9) ? 'selected' : ''; ?>>Total deaths per million</option>
                                <option value="10" <?php echo (isset($indexSelect) && $indexSelect == 10) ? 'selected' : ''; ?>>New deaths per million</option>
                                <option value="11" <?php echo (isset($indexSelect) && $indexSelect == 11) ? 'selected' : ''; ?>>New deaths smoothed per million</option>
                            </optgroup>
                        </select>
                    </form>
                </div>
            </div>
            <div class="btn btn-primary md-menu-white" data-toggle="cm-menu"></div>
        </nav>
        <div id="cm-menu-content">
            <svg id="tree-vis"></svg>
        </div>
    </div>
    <header id="cm-header" style="display: inline;">
        <nav class="cm-navbar cm-navbar-primary">
            <div class="btn btn-primary md-menu-white hidden-md hidden-lg" data-toggle="cm-menu"></div>
            <div class="cm-flex">
                <h1 style="display: inline;"><?php echo($name)?></h1>
            </div>
        </nav>
    </header>
    <div id="global" style="display: none;">
        <div class="container-fluid cm-container-white" style="overflow: hidden; margin-bottom: 10px; padding-top: 10px; padding-bottom: 10px;">
            <svg id="multiresolution-vis"></svg>
        </div>
        <footer class="cm-footer" style="display: none;"></footer>

        <div id="alert-msg" class="alert alert-danger alert-dismissable hidden fade in">
            <span id="close-alert" class="close">&times;</span> <strong>Warning!</strong> not allowed due to constraints.
        </div>

        <!-- Modal information -->
        <div class="modal fade" id="infoModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" style="text-transform: capitalize;">
                            <?php echo($name)?>
                        </h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            <?php echo($description)?>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal data -->
        <div class="modal fade" id="data-modal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div id="data-modal-title" class="modal-header"></div>
                    <div id="data-modal-msg" class="modal-body"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
        <script type="text/javascript" src="js/jquery.cookie.min.js"></script>
        <script type="text/javascript" src="js/fastclick.min.js"></script>
        <script type="text/javascript" src="js/clearmin.min.js"></script>
        <script type="text/javascript" src="js/d3.min.js"></script>
        <script type="text/javascript" src="js/compVecOut.js"></script>
        <script type="text/javascript" src="js/rpoly.js"></script>
        <script type="text/javascript" src="js/PolyReCoeffInT.js"></script>
        <script type="text/javascript" src="js/svg-crowbar-2.js"></script>
        <script type="text/javascript" src="js/chroma.js"></script>
        <script type="text/javascript" src="js/generalizes.js"></script>
        <script type="text/javascript" src="js/multistream-hierarchy-util.js"></script>
        <script type="text/javascript" src="js/multistream-var-global.js"></script>
        <script type="text/javascript" src="js/multiresolution-vis.js"></script>
        <script type="text/javascript" src="js/tree-vis.js"></script>
</body>
</html>
