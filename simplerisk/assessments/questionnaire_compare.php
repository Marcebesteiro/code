<?php
/* This Source Code Form is subject to the terms of the Mozilla Public
* License, v. 2.0. If a copy of the MPL was not distributed with this
* file, You can obtain one at http://mozilla.org/MPL/2.0/. */

// Include required functions file
require_once(realpath(__DIR__ . '/../includes/functions.php'));
require_once(realpath(__DIR__ . '/../includes/authenticate.php'));
require_once(realpath(__DIR__ . '/../includes/display.php'));
require_once(realpath(__DIR__ . '/../includes/assessments.php'));
require_once(realpath(__DIR__ . '/../includes/alerts.php'));

// Include Zend Escaper for HTML Output Encoding
require_once(realpath(__DIR__ . '/../includes/Component_ZendEscaper/Escaper.php'));
$escaper = new Zend\Escaper\Escaper('utf-8');

// Add various security headers
add_security_headers();

// Add the session
$permissions = array(
        "check_access" => true,
        "check_assessments" => true,
);
add_session_check($permissions);

// Include the CSRF Magic library
include_csrf_magic();

// Include the SimpleRisk language file
require_once(language_file());

// Check if assessment extra is enabled
if(assessments_extra())
{
    // Include the assessments extra
    require_once(realpath(__DIR__ . '/../extras/assessments/index.php'));
}
else
{
    header("Location: ../index.php");
    exit(0);
}

$success = true;
if(empty($_GET["templates"])){
    set_alert(true, "bad", $lang['TemplatesAreRequired']);
    $success = false;
}


?>

<!doctype html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=10,9,7,8">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.dataTables.js"></script>
    <script src="../js/pages/assessment.js"></script>
    <script src="../js/common.js"></script>
    <script src="../js/cve_lookup.js"></script>
    
    <title>SimpleRisk: Enterprise Risk Management Simplified</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap-responsive.css">
    <link rel="stylesheet" href="../css/jquery.dataTables.css">

    <link rel="stylesheet" href="../css/divshot-util.css">
    <link rel="stylesheet" href="../css/divshot-canvas.css">
    <link rel="stylesheet" href="../css/display.css">
    <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/theme.css">
    <link rel="stylesheet" href="../css/side-navigation.css">
    <?php
        setup_favicon("..");
        setup_alert_requirements("..");
    ?>
</head>

<body>

    <?php
        view_top_menu("Assessments");

        // Get any alerts
        get_alert();
    ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span3">
                <?php view_assessments_menu("QuestionnaireResults"); ?>
            </div>
            <div class="span9">
                <?php if($success) display_compare_questionnaire_results($_GET["templates"]); ?>
            </div>
        </div>
    </div>
    <?php display_set_default_date_format_script(); ?>
</body>

</html>
