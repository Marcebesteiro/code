<?php
/* This Source Code Form is subject to the terms of the Mozilla Public
* License, v. 2.0. If a copy of the MPL was not distributed with this
* file, You can obtain one at http://mozilla.org/MPL/2.0/. */

// Include required functions file
require_once(realpath(__DIR__ . '/../includes/functions.php'));
require_once(realpath(__DIR__ . '/../includes/authenticate.php'));
require_once(realpath(__DIR__ . '/../includes/display.php'));
require_once(realpath(__DIR__ . '/../includes/alerts.php'));
require_once(realpath(__DIR__ . '/../includes/permissions.php'));

// Include Zend Escaper for HTML Output Encoding
require_once(realpath(__DIR__ . '/../includes/Component_ZendEscaper/Escaper.php'));
$escaper = new Zend\Escaper\Escaper('utf-8');

// Add various security headers
add_security_headers();

// Add the session
$permissions = array(
        "check_access" => true,
        "check_riskmanagement" => true,
);
add_session_check($permissions);

// Include the CSRF Magic library
include_csrf_magic();

// Include the SimpleRisk language file
require_once(language_file());

if(isset($_SESSION["manage_projects"]) && $_SESSION["manage_projects"] == 1){
	$dragable = 1;
} else $dragable = 0;

?>

<!doctype html>
<html>

<head>
  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-ui.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/plan-project.js"></script>
  <title>SimpleRisk: Enterprise Risk Management Simplified</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/bootstrap-responsive.css">
  <link rel="stylesheet" href="../css/prioritize.css">


  <link rel="stylesheet" href="../css/divshot-util.css">
  <link rel="stylesheet" href="../css/divshot-canvas.css">
  <link rel="stylesheet" href="../css/display.css">
  <link rel="stylesheet" href="../css/style.css">

  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/theme.css">
  <link rel="stylesheet" href="../css/side-navigation.css">
    
  <?php
      setup_favicon("..");
      setup_alert_requirements("..");
  ?>

  <?php
  // Get the projects
  $projects = get_projects();

  // Get the total number of projects
  $count = count($projects);

  // Initialize the counter
  $counter = 1;

  ?>
  <script>
  $(function() {
    <?php
    echo "$( \"";

    // Initialize the counter
    $counter = 1;

    // For each project created
    foreach ($projects as $project)
    {
      // Get the project ID
      $id = (int)$project['value'];

      echo "#sortable-" . $id;

      // If it's not the last one
      if ($counter != $count)
      {
        echo ", ";
        $counter++;
      }
    }

    echo "#statussortable-1, #statussortable-2, #statussortable-3, #statussortable-4";
    echo "\" ).sortable().disableSelection();\n";
    ?>
    var $tabs = $( "#tabs" ).tabs();
    var $tab_items = $( "ul:first li", $tabs ).droppable({
      accept: ".connectedSortable li",
      hoverClass: "ui-state-hover",
      drop: function( event, ui ) {
        var $item = $( this );
        var $list = $( $item.find( "a" ).attr( "href" ) )
        .find( ".connectedSortable" );
        ui.draggable.hide( "slow", function() {
          $tabs.tabs( "option", "active", $tab_items.index( $item ) );
          $( this ).appendTo( $list ).show( "slow" );
        });
        $list.each(function() {
          // Get the project ID that was just dropped into
          var id = $(this).attr("id");
          var part = id.split("-");
          var project_id = part[1];

          // Get the risk ID that was just dropped
          var dragged_risk_id = $(ui.draggable).attr("id");

          // Risk name to update
          var risk_name = "risk_" + dragged_risk_id;

          // Update the risk input with the proper value
          document.getElementsByName(risk_name)[0].value = project_id;
        });
      }
    });

    var $statustabs = $( "#statustabs" ).tabs();
    var $status_tab_items = $( "ul:first li", $statustabs ).droppable({
      accept: ".connectedSortable li",
      hoverClass: "ui-state-hover",
      drop: function( event, ui ) {
        var $item = $( this );
        var $list = $( $item.find( "a" ).attr( "href" ) )
        .find( ".connectedSortable" );
        ui.draggable.hide( "slow", function() {
          $statustabs.tabs( "option", "active", $status_tab_items.index( $item ) );
          $( this ).appendTo( $list ).show( "slow" );
        });
        $list.each(function() {
          // Get the status ID that was just dropped into
          var id = $(this).attr("id");
          var part = id.split("-");
          var project_id = part[1];

          // Get the project ID that was just dropped
          var dragged_project_id = $(ui.draggable).attr("id");

          // Project name to update
          var project_name = "project_" + dragged_project_id;

          // Update the risk input with the proper value
          document.getElementsByName(project_name)[0].value = project_id;
        });
      }
    });

  });
  </script>
  <script>
  $(function() {
    $( "#prioritize" ).sortable({
      update: function(event, ui)
      {
        // Create an array with the new order
        var order = $( "#prioritize" ).sortable('toArray');

        for(var key in order) {
          var val = order[key];
          var part = val.split("_");

          // Update each hidden field used to store the list item position
          document.getElementById("order"+part[1]).value = key;
        }
      }
    });

    $( "#prioritize" ).disableSelection();
  });
  </script>
</head>

<body>


  <?php
  view_top_menu("RiskManagement");

  // Get any alert messages
  get_alert();
  ?>

  <div class="tabs new-tabs planning-tabs">
    <div class="container-fluid">

      <div class="row-fluid">

        <div class="span3"> </div>
        <div class="span9">

          <div class="tab-append">
            <div class="tab selected form-tab tab-show current-projects-tab" id="tab"><div><span><?php echo $escaper->escapeHtml($lang['CurrentProjects']); ?></span></div></div>
          </div>

        </div>

      </div>

    </div>
  </div>

  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span3">
        <?php view_risk_management_menu("PrioritizeForProjectPlanning"); ?>
      </div>
      <div class="span9">
        <div class="row-fluid">
          <div class="span12">
            <!-- Container Begins  -->

            <!-- <div class="status1">asdasdasdas</div> -->

            <div id="tabs" class="plan-projects">

              <div class="status-tabs">

                <?php if (isset($_SESSION["add_projects"]) && $_SESSION["add_projects"] == 1) { ?>
                    <a href="#project--add" role="button" data-toggle="modal" class="project--add"><i class="fa fa-plus"></i></a>
                <?php }?>

                <ul class="clearfix tabs-nav">
                  <li><a href="#active-projects" class="status" data-status="1"><?php echo $escaper->escapeHtml($lang['ActiveProjects']); ?> (<?php get_projects_count(1) ?>)</a></li>
                  <li><a href="#on-hold-projects" class="status" data-status="2"><?php echo $escaper->escapeHtml($lang['OnHoldProjects']); ?> (<?php get_projects_count(2) ?>)</a></li>
                  <li><a href="#closed-projects" class="status" data-status="3"><?php echo $escaper->escapeHtml($lang['CompletedProjects']); ?> (<?php get_projects_count(3) ?>)</a></li>
                  <li><a href="#canceled-projects" class="status" data-status="4"><?php echo $escaper->escapeHtml($lang['CanceledProjects']); ?> (<?php get_projects_count(4) ?>)</a></li>
                </ul>

                <ul class="project-headers clearfix">
                  <li class="project-block--priority white-labels"><?php echo $escaper->escapeHtml($lang['Priority']); ?></li>
                  <li class="project-block--name white-labels"><?php echo $escaper->escapeHtml($lang['ProjectName']); ?></li>
                  <li class="project-block--risks white-labels"><?php echo $escaper->escapeHtml($lang['Risk']); ?></li>
                </ul>

              </div> <!-- status-tabs -->

              <div id="active-projects" class="sortable">
                    <?php echo get_project_tabs(1) ?>
              </div>
              <div id="on-hold-projects" class="sortable">
                    <?php echo get_project_tabs(2) ?>
              </div>
              <div id="closed-projects" class="sortable">
                    <?php echo get_project_tabs(3) ?>
              </div>

              <div id="canceled-projects" class="sortable">
                    <?php echo get_project_tabs(4) ?>
              </div>
            </div>
            <input type="hidden" name="is_dragable" id="is_dragable" value="<?php echo $dragable;?>" />

            <!-- Container Ends  -->
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- MODEL WINDOW FOR ADDING PROJECT -->

<div id="project--add" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="project--add" aria-hidden="true">
  <div class="modal-body">

    <form class="" id="project--new" action="#" method="post">
      <div class="form-group">
        <label for=""><?php echo $escaper->escapeHtml($lang['NewProjectName']); ?></label>
        <input type="text" name="new_project" id="project--name" value="" class="form-control">
      </div>

      <div class="form-group text-right">
        <button class="btn btn-default" data-dismiss="modal" aria-hidden="true"><?php echo $escaper->escapeHtml($lang['Cancel']); ?></button>
        <button type="submit" name="add_project" class="btn btn-danger"><?php echo $escaper->escapeHtml($lang['Add']); ?></button>
      </div>
    </form>

  </div>
</div>

<!-- MODEL WINDOW FOR PROJECT DELETE CONFIRM -->

<div id="project--delete" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="project--add" aria-hidden="true">
  <div class="modal-body">

    <form id="project--delete" action="" method="post">
      <div class="form-group text-center">
        <label for=""><?php echo $escaper->escapeHtml($lang['AreYouSureYouWantToDeleteThisProject']); ?></label>
        <input type="hidden" name="project_id" value="" />
      </div>

      <div class="form-group text-center project-delete-actions">
        <button class="btn btn-default" data-dismiss="modal" aria-hidden="true"><?php echo $escaper->escapeHtml($lang['Cancel']); ?></button>
        <button type="submit" name="delete_project" class="delete_project btn btn-danger"><?php echo $escaper->escapeHtml($lang['Yes']); ?></button>
      </div>
    </form>

  </div>
</div>


<script type="template" id="project-template">

  <div class="project-block clearfix">

    <div class="project-block--header clearfix">
        <div class="project-block--priority pull-left">{{PRIORITY}}</div>
        <div class="project-block--name pull-left">{{NAME}}</div>
        <div class="project-block--risks pull-left"><a href="#" class="view--risks"><?php echo $escaper->escapeHtml($lang['ViewRisks']); ?></a> <a href="#" class="project-block--delete pull-right"><i class="fa fa-trash"></i></a></div>
    </div><!-- POJECT-BLOCK--HEADER-->

    <div class="risks">

    </div><!-- RISKS -->

  </div><!-- PROJECT-BLOCK-->

</script>

<?php display_set_default_date_format_script(); ?>
</body>

</html>
