<?php
/*
Plugin Name: LW Website Tools
Plugin URI: 
Description: Provides users with three useful Wordpress and css tools.
Version: 1.0
Author: Logan Grant Wheeler
Author URI: 
License: lw_tools
*/

/*  Copyright 2013  Logan Wheeler  (email : logan.wheeler@hotmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/*----------------------------------------------------------------------*/
/* Include Files */
/*----------------------------------------------------------------------*/\

register_activation_hook();
register_deactivation_hook();
register_uninstall_hook();
add_action('admin_menu', 'LgW_menu_pages');

function LgW_menu_pages() {
    // Add the top-level admin menu
    $page_title = 'LW Website Tools';
    $menu_title = 'LW Website Tools';
    $capability = 'manage_options';
    $menu_slug = 'LgW-settings';
    $function = 'LgW_settings';
    add_menu_page($page_title, $menu_title, $capability, $menu_slug, $function);

    // Add submenu page with same slug as parent to ensure no duplicates
    $sub_menu_title = 'Settings';
    add_submenu_page($menu_slug, $page_title, $sub_menu_title, $capability, $menu_slug, $function);

    // Now add the submenu page for Help
    $submenu_page_title = 'LgW Plugin Help';
    $submenu_title = 'Help';
    $submenu_slug = 'LgW-help';
    $submenu_function = 'LgW_help';
    add_submenu_page($menu_slug, $submenu_page_title, $submenu_title, $capability, $submenu_slug, $submenu_function);
}

add_option('loganw', '');

function LgW_settings() {
    if (!current_user_can('manage_options')) {
        wp_die('You do not have sufficient permissions to access this page.');
    }
echo '<center><div id="main-body" style="padding-left:30px;padding-right:30px;height:850px;width:100%;background-color:#90BD96;padding-top:20px;"><div id="theme-options-wrap" style=""><div class="icon32" style="float:none;text-align:left;" id="icon-tools"></div><div id="header-text" style="width:500px;height:100px;">Tools</div></div>




';

echo '<script type="text/javascript">
function showWork() {
clientWorkPage=document.client.clientselect.selectedIndex 
 if (document.client.clientselect.options[clientWorkPage].value != "none"){ 
 	//pass .value into work(which), then call the work function;
     } 
}';
echo "
function work(which) {
    document.getElementById('client1').style.display = 'none';
    document.getElementById('client2').style.display = 'none';
    document.getElementById('client3').style.display = 'none';
    document.getElementById(which).style.display = 'block';
    }
	

</script>
";

echo '<form name="client">
    <select id="yay1" name=clientselect size="1" onchange="work(value)"> 
       <option selected="selected" value="none">Select...</option>
       <option value="client1">Box Shadow Generator</option>
       <option value="client2">Css Transform</option>
       <option value="client3">Border-Radius Generator</option>
     </select> 
</form>';

echo '<style>

#header-text

{
font-size:72px;
font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
font-weight:100;
}

#main-body

{
font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 

}

h2
{
font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
font-weight:100;
}


#client3

{height:700px;width:500px;}

#client2

{height:700px;width:500px;}

#client1

{height:700px;width:500px;}

#help

{height:700px;width:500px;}

#yay1 select 

{


}


#yay1
{
	overflow:hidden;
	padding: 5px;
	width: 485px;
	font-family: Helvetica, sans-serif;
	font-size: 1.4em;
	margin: 0px 0px 10px 0px;
	border: 2px solid #ccc;
}

#yay1:focus
{
border: 2px solid #900;
}


#client3 input, #contact-area textarea {
	padding: 5px;
	width: 200px;
	font-family: Helvetica, sans-serif;
	font-size: 1.4em;
	margin: 0px 0px 10px 0px;
	border: 2px solid #ccc;
}

#client3 textarea {
	height:179px;width:320px;border: 2px solid #ccc;
}

#client3 textarea:focus, #contact-area input:focus {
	border: 2px solid #900;
}

#client3 input.submit-button {
	width: 100px;
	float: right;
}

#client3 label {
	float: left;
	text-align: left;
	width: 100px;
	padding-top: 5px;
	font-size: 1.0em;
	margin-left:50px;
	font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
font-weight:200;
}


#client1 input, #contact-area textarea {
	padding: 5px;
	width: 200px;
	font-family: Helvetica, sans-serif;
	font-size: 1.4em;
	margin: 0px 0px 10px 0px;
	border: 2px solid #ccc;
}

#client1 textarea {
	height:179px;width:320px;border: 2px solid #ccc;
}

#client1 textarea:focus, #contact-area input:focus {
	border: 2px solid #900;
}

#client1 input.submit-button {
	width: 100px;
	float: right;
}

#client1 label {
	float: left;
	text-align: left;
	width: 100px;
	padding-top: 5px;
	font-size: 1.0em;
	margin-left:50px;
	font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
font-weight:200;
}

#client2 input, #contact-area textarea {
	padding: 5px;
	width: 200px;
	font-family: Helvetica, sans-serif;
	font-size: 1.4em;
	margin: 0px 0px 10px 0px;
	border: 2px solid #ccc;
}

#client2 textarea {
	height:179px;width:320px;border: 2px solid #ccc;
}

#client2 textarea:focus, #contact-area input:focus {
	border: 2px solid #900;
}

#client2 input.submit-button {
	width: 100px;
	float: right;
}

#client2 label {
	float: left;
	text-align: left;
	width: 100px;
	padding-top: 5px;
	font-size: 1.0em;
	margin-left:50px;
	font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
font-weight:200;
}

</style>



<div id="client1" style="display:none;">




<script type="text/javascript">';
echo "	    function test(){

			var hl = document.getElementById('horizontal_length').value;
			var vl = document.getElementById('vertical_length').value;
			var br = document.getElementById('blur_radius').value;
			var sp = document.getElementById('spread').value;";


			echo "document.getElementById('out').innerHTML =";


echo ' "<style>#temple1" + "{" + "float:right;border: solid 5px #ccc;background-color:#fff;height:200px;width:200px;box-shadow:" + hl + "px" + " " + vl + "px" + " " + br + "px" + " " + sp + "px;" + "-webkit-box-shadow:" + hl + "px" + " " + vl + "px" + " " + br + "px" + " " + + sp + "px;" + "-moz-box-shadow" + hl + "px" + " " + vl + "px" + " " + br + "px" + " " + sp + "px;" + "}</style>" + "';

echo "<textarea style='float:left;height:200px;width:275px;'";

echo '>" + "/*style*/" + "&#013" + "box-shadow:" + hl + "px" + " " + vl + "px" + " " + br + "px" + " " + sp + "px;" + "&#013" + "-webkit-box-shadow:" + hl + "px" + " " + vl + "px" + " " + br + "px" + " " + sp + "px;" + "&#013" + "-moz-box-shadow" + hl + "px" + " " + vl + "px" + " " + br + "px" + " " + sp + "px;" + "</textarea>" + "<div id=';
echo "'temple1'>"; echo '</div>";';
echo "
			document.getElementById('out').style.display ="; echo ' "block";';

echo '			return false;
		}
	</script>
</head>

<body>
    <form action="" onsubmit="return test()">
<h2>Border-Radius</h2>
       <label>Horizontal Length:</label> <input type="text" id="horizontal_length" name="top-left" required/>px<br />
	<label>Vertical Length:</label><input id="vertical_length" type="text" name="top-right" required/>px <br />
       <label>Blur Radius:</label> <input type="text" id="blur_radius" name="bottom-left" required/>px<br />
	<label>Spread:</label><input id="spread" type="text" name="bottom-right" required/>px <br />
  


        <p><input type="submit" value="Go! :)" /></p>
    </form>

    <div id="out" >
    </div>
</body>
</div>





<div id="client2" style="display:none;">










<script type="text/javascript">';
echo "	    function test33(){

			var se = document.getElementById('scale').value;
			var re = document.getElementById('rotate').value;
			var tx = document.getElementById('translate_x').value;
			var ty = document.getElementById('translate_y').value;
			var sx = document.getElementById('skew_x').value;
			var sy = document.getElementById('skew_y').value;";


			echo "document.getElementById('out3').innerHTML =";


echo ' "<style>#temple2" + "{" + "float:right;border: solid 5px #ccc;background-color:#fff;height:200px;width:200px;" + "-moz-transform: scale(" + se + ") rotate(" + re + "deg) translateX(" + tx + "px) translateY(" + ty + "px) skewX(" + sx + "deg) skewY(" + sy + "deg);" + "-webkit-transform: scale(" + se + ") rotate(" + re + "deg) translateX(" + tx + "px) translateY(" + ty + "px) skewX(" + sx + "deg) skewY(" + sy + "deg);" + "-0-transform: scale(" + se + ") rotate(" + re + "deg) translateX(" + tx + "px) translateY(" + ty + "px) skewX(" + sx + "deg) skewY(" + sy + "deg);" + "-ms-transform: scale(" + se + ") rotate(" + re + "deg) translateX(" + tx + "px) translateY(" + ty + "px) skewX(" + sx + "deg) skewY(" + sy + "deg);" + "transform: scale(" + se + ") rotate(" + re + "deg) translateX(" + tx + "px) translateY(" + ty + "px) skewX(" + sx + "deg) skewY(" + sy + "deg);" + "}</style>" + "';

echo "<textarea style='float:left;height:200px;width:275px;'";

echo '>" + "/*style*/" + "&#013;" + "-moz-transform: scale(" + se + ") rotate(" + re + "deg) translateX(" + tx + "px) translateY(" + ty + "px) skewX(" + sx + "deg) skewY(" + sy + "deg);" + "&#013;" + "-webkit-transform: scale(" + se + ") rotate(" + re + "deg) translateX(" + tx + "px) translateY(" + ty + "px) skewX(" + sx + "deg) skewY(" + sy + "deg);" + "&#013;" + "-0-transform: scale(" + se + ") rotate(" + re + "deg) translateX(" + tx + "px) translateY(" + ty + "px) skewX(" + sx + "deg) skewY(" + sy + "deg);" + "&#013;" + "-ms-transform: scale(" + se + ") rotate(" + re + "deg) translateX(" + tx + "px) translateY(" + ty + "px) skewX(" + sx + "deg) skewY(" + sy + "deg);" + "&#013;" + "transform: scale(" + se + ") rotate(" + re + "deg) translateX(" + tx + "px) translateY(" + ty + "px) skewX(" + sx + "deg) skewY(" + sy + "deg);"+ "</textarea>" + "<div id=';
echo "'temple2'>"; echo '</div>";';
echo "
			document.getElementById('out3').style.display ="; echo ' "block";';

echo '			return false;
		}
	</script>
</head>

<script type="text/javascript">
function show_alert()
{
alert("Scales the box according to the number. Use 1.0 - 2.0 to be safe :)");
}
</script>




<body>
    <form action="" onsubmit="return test33()">
<h2>Border-Radius</h2>
       <label>Scale:</label> <input type="text" onfocus="this.select()" onclick="this.value='; echo "''"; echo ';" onblur="this.value=!this.value?'; echo "'1'"; echo ':this.value;" id="scale" name="top-left" value="1" required oninvalid="setCustomValidity(';echo "'Choose between 1.0 - 2.0')"; echo '"/> <lw style="cursor:help;" onclick="show_alert()" ><img src="/wp-content/plugins/LW-Website-Tools/images/question.png"></lw><br />
	<label>Rotate:</label><input id="rotate" type="text" name="top-right" required />dg <br />
       <label>Translate X:</label> <input type="text" id="translate_x" name="bottom-left" required />px<br />
	<label>Translate Y:</label><input id="translate_y" type="text" name="bottom-right" required />px <br />
     <label>Skew X:</label> <input type="text" id="skew_x" name="bottom-left" required />px<br />
	<label>Skew Y:</label><input id="skew_y" type="text" name="bottom-right" required />px <br />
  


        <p><input type="submit" value="Go! :)" /></p>
    </form>

    <div id="out3" >
    </div>
</body>
</div>





<div id="client3" style="display:none;"><script type="text/javascript">';
echo "	    function test2(){

			var tl = document.getElementById('top_left').value;
			var tr = document.getElementById('top_right').value;
			var bl = document.getElementById('bottom_left').value;
			var br = document.getElementById('bottom_right').value;";


			echo "document.getElementById('out2').innerHTML =";


echo ' "<style>#temple" + "{" + "float:right;border: solid 5px #ccc;background-color:#fff;height:200px;width:200px;border-top-left-radius:" + tl + "px;border-top-right-radius:" + tr + "px;border-bottom-right-radius:" + br + "px;border-bottom-left-radius:" + bl + "px;-moz-border-top-left-radius:" + tl + "px;-moz-border-top-right-radius:" + tr + "px;-moz-border-bottom-right-radius:" + br + "px;-moz-border-bottom-left-radius:" + bl + "px;-webkit-border-top-left-radius:" + tl + "px;-webkit-border-top-right-radius:" + tr + "px;-webkit-border-bottom-right-radius:" + br + "px;-webkit-border-bottom-left-radius:" + bl + "px;" + "}" + "</style>" + "';

echo "<textarea style='float:left;height:200px;width:275px;'";

echo '>" + "/*style*/" + "&#013;" + "&#013;" + "border-top-left-radius:" + tl + "px;" + "&#013;" + "border-top-right-radius:" + tr + "px;" + "&#013;" + "border-bottom-right-radius:" + br + "px;" + "&#013;" + "border-bottom-left-radius:" + bl + "px;" + "&#013;" + "&#013;" + "-moz-border-top-left-radius:" + tl + "px;" + "&#013;" + "-moz-border-top-right-radius:" + tr + "px;" + "&#013;" + "-moz-border-bottom-right-radius:" + br + "px;" + "&#013;" + "-moz-border-bottom-left-radius:" + bl + "px;" + "&#013;" + "&#013;" + "-webkit-border-top-left-radius:" + tl + "px;" + "&#013;" + "-webkit-border-top-right-radius:" + tr + "px;" + "&#013;" + "-webkit-border-bottom-right-radius:" + br + "px;" + "&#013;" + "-webkit-border-bottom-left-radius:" + bl + "px;" + "</textarea>" + "<div id=';
echo "'temple'>"; echo '</div>";';
echo "
			document.getElementById('out2').style.display ="; echo ' "block";';

echo '			return false;
		}
	</script>
</head>

<body>
    <form action="" onsubmit="return test2()">
<h2>Border-Radius</h2>
       <label>Top-left:</label> <input type="text" id="top_left" name="top-left" />px<br />
	<label>Top-right:</label><input id="top_right" type="text" name="top-right" />px <br />
       <label>Bottom-left:</label> <input type="text" id="bottom_left" name="bottom-left" />px<br />
	<label>Bottom-right:</label><input id="bottom_right" type="text" name="bottom-right" />px <br />

        <p><input type="submit" value="Go! :)" /></p>
    </form>

    <div id="out2" >
    </div>
</body>
</div>

';

function display_post_end_notice($content) {

if (is_single()) {
$content .= 'It\'s just demo text at the end of every post.';
}

return $content;
}

add_filter('the_content', 'display_post_end_notice');


echo'</div></div>';
}



function LgW_help() {
    if (!current_user_can('manage_options')) {
        wp_die('You do not have sufficient permissions to access this page.');
    }
 echo '<div style="padding-top:20px;height:850px;width:100%;background-color:#90BD96;" id="help">';

    // Render the HTML for the Help page or include a file that does

echo '<center><div><style>#help

{height:700px;width:500px;}

#help input, #contact-area textarea {

	width: 200px;
	font-family: Helvetica, sans-serif;
	font-size: 1.4em;
	margin: 0px 0px 10px 0px;
	border: 2px solid #ccc;
}

#help textarea {
	height:179px;width:320px;border: 2px solid #ccc;
}

#help textarea:focus, #contact-area input:focus {
	border: 2px solid #900;
}

#help input.submit-button {
	width: 100px;
	float: right;
}

#help label {
	float: left;
	text-align: left;
	width: 100px;;
	font-size: 1.0em;
	margin-left:50px;
}

#help-text

{

font-size:48px;
font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
font-weight:100;
height:35px;
}

#help-text2

{
font-size:32px;
font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
font-weight:100;
}

</style>';
   
echo '<center><div id="help-text">Questions/Concerns/Suggestions?</div></center>';
 echo '<div id="help-text2">Shoot us an email!</div>';
echo ' <p id="thank you"style="width:100%;background-color:#7ccadd;"><h3>Thank you! We will reply within the next 24 hours!</h3></p>';
echo ' <form style="width:400px;" method="post" action="';

echo $_SERVER['PHP_SELF'];

echo '?page=LgW-help" onSubmit="return validate(this);">
   
    <fieldset id="user-details">
  <label for="name">Name *</label>
  <input type="text" name="name" id="name" value="" required="required" /><br/>
     
  <label for="email">Email *</label>
  <input type="email" name="email" id="email" value="" required="required"  /> <br/>
     
  <label for="site">Site</label> 
  <input type="url" name="site" id="site" value="" /><br/>
     
  <label for="subject">Subject *</label>
  <input type="text" name="subject" id="subject" value="" required="required" /><br/>
   
  <label for="message">Message </label>
  <textarea name="message" id="message" rows="0" cols="0"></textarea><br/>
   
  <input type="submit" value="Send Message" onsubmit="thank()" name="submit" id="submit" class="submit" style="width:220px;" />
    </fieldset>
     (Message automatically sends after submitting)
</form>';

 echo '</div></div></center>';




}



add_filter('plugin_action_links', 'LgW_plugin_action_links', 10, 2);

function LgW_plugin_action_links($links, $file) {
    static $this_plugin;

    if (!$this_plugin) {
        $this_plugin = plugin_basename(__FILE__);
    }

    if ($file == $this_plugin) {
        // The "page" query string value must be equal to the slug
        // of the Settings admin page we defined earlier, which in
        // this case equals "LgW-settings".
        $settings_link = '<a href="' . get_bloginfo('wpurl') . '/wp-admin/admin.php?page=LgW-settings">Settings</a>';
        array_unshift($links, $settings_link);

        $help_link = '<a href="' . get_bloginfo('wpurl') . '/wp-admin/admin.php?page=LgW-help">Help</a>';
        array_unshift($links, $help_link);



    }

    return $links;
}


function check_box( $atts, $content = null)
{
 extract(shortcode_atts(array(
        'title'      => '',
		'image'      => '',
        ), $atts));
   return '<style>/* Smartphones (portrait and landscape) ----------- */
@media only screen 
and (min-device-width : 320px) 
and (max-device-width : 480px) {
#checkers{display:none;}
}

/* iPhone 4 ----------- */
@media
only screen and (-webkit-min-device-pixel-ratio : 1.5),
only screen and (min-device-pixel-ratio : 1.5) {
/* Styles */
}


</style>
<input class="checkers" style="float:left;" type="checkbox">';
}
add_shortcode('check', 'check_box');


error_reporting(0);
 
// checks if post exists, then send the message to $to email
if($_POST['subject']){
 $to = 'loganw@rhodesbread.com'; // replace this with a proper email
 $subject = $_POST['subject'];
 $from = $_POST['email'];
 $message = $_POST['message'];
 $message = "Name : ".$_POST['name']."\nSite: ".$_POST['site']."\nEmail : ".$from."\nMessage : ".$message;
 $headers = "From:" . $from;
 mail($to,$subject,$message,$headers);

return false;
}

?>