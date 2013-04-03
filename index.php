<?php
/*
Plugin Name: LW Website Tools
Plugin URI: 
Description: Provides users with three useful Wordpress and css tools.
Version: 1.2
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
    $sub_menu_title = 'Tools';
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
echo '

<center><body onload="changeColor();"><div id="main-body" style="padding-left:30px;height:850px;background-color:#fff;padding-top:20px;"><div id="theme-options-wrap" style=""><div class="icon32" style="float:none;text-align:left;" id="icon-tools"></div><div id="header-text" style="width:500px;height:100px;">Tools</div></div>




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
    document.getElementById('client4').style.display = 'none';
    document.getElementById('client5').style.display = 'none';
    document.getElementById(which).style.display = 'block';
    }
	

</script>
";

echo '<center><form name="client">
    <select id="yay1" name=clientselect size="1" onchange="work(value)"> 
       <option selected="selected" value="none">Select...</option>
       <option value="client1">Border-Radius</option>
       <option value="client2">Box Shadow</option>
       <option value="client3">Css Transform</option>
       <option value="client4">Text Shadow</option>
       <option value="client5">Css Gradient</option>
     </select> 
</form></center>';

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
'; echo "


background: rgb(255,255,255); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(255,255,255,1) 0%, rgba(243,243,243,1) 50%, rgba(237,237,237,1) 51%, rgba(255,255,255,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,1)), color-stop(50%,rgba(243,243,243,1)), color-stop(51%,rgba(237,237,237,1)), color-stop(100%,rgba(255,255,255,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(243,243,243,1) 50%,rgba(237,237,237,1) 51%,rgba(255,255,255,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(243,243,243,1) 50%,rgba(237,237,237,1) 51%,rgba(255,255,255,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(243,243,243,1) 50%,rgba(237,237,237,1) 51%,rgba(255,255,255,1) 100%); /* IE10+ */
background: linear-gradient(to bottom,  rgba(255,255,255,1) 0%,rgba(243,243,243,1) 50%,rgba(237,237,237,1) 51%,rgba(255,255,255,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ffffff',GradientType=0 ); /* IE6-9 */


";
echo '
';echo " 
}
#temple1 {

background: rgb(210,255,82); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(210,255,82,1) 0%, rgba(145,232,66,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(210,255,82,1)), color-stop(100%,rgba(145,232,66,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(210,255,82,1) 0%,rgba(145,232,66,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(210,255,82,1) 0%,rgba(145,232,66,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(210,255,82,1) 0%,rgba(145,232,66,1) 100%); /* IE10+ */
background: linear-gradient(to bottom,  rgba(210,255,82,1) 0%,rgba(145,232,66,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d2ff52', endColorstr='#91e842',GradientType=0 ); /* IE6-9 */

height:500px;
width:500px;
font-size:50px;
}

#temple2 {

background: rgb(210,255,82); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(210,255,82,1) 0%, rgba(145,232,66,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(210,255,82,1)), color-stop(100%,rgba(145,232,66,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(210,255,82,1) 0%,rgba(145,232,66,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(210,255,82,1) 0%,rgba(145,232,66,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(210,255,82,1) 0%,rgba(145,232,66,1) 100%); /* IE10+ */
background: linear-gradient(to bottom,  rgba(210,255,82,1) 0%,rgba(145,232,66,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d2ff52', endColorstr='#91e842',GradientType=0 ); /* IE6-9 */
height:500px;
width:500px;
font-size:50px;

}


#temple3 {

background: rgb(210,255,82); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(210,255,82,1) 0%, rgba(145,232,66,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(210,255,82,1)), color-stop(100%,rgba(145,232,66,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(210,255,82,1) 0%,rgba(145,232,66,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(210,255,82,1) 0%,rgba(145,232,66,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(210,255,82,1) 0%,rgba(145,232,66,1) 100%); /* IE10+ */
background: linear-gradient(to bottom,  rgba(210,255,82,1) 0%,rgba(145,232,66,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d2ff52', endColorstr='#91e842',GradientType=0 ); /* IE6-9 */
height:500px;
width:500px;
font-size:50px;

}


#temple8 {

background: rgb(210,255,82); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(210,255,82,1) 0%, rgba(145,232,66,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(210,255,82,1)), color-stop(100%,rgba(145,232,66,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(210,255,82,1) 0%,rgba(145,232,66,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(210,255,82,1) 0%,rgba(145,232,66,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(210,255,82,1) 0%,rgba(145,232,66,1) 100%); /* IE10+ */
background: linear-gradient(to bottom,  rgba(210,255,82,1) 0%,rgba(145,232,66,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d2ff52', endColorstr='#91e842',GradientType=0 ); /* IE6-9 */
height:500px;
width:500px;
font-size:50px;

}



#temple4 {

background: rgb(210,255,82); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(210,255,82,1) 0%, rgba(145,232,66,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(210,255,82,1)), color-stop(100%,rgba(145,232,66,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(210,255,82,1) 0%,rgba(145,232,66,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(210,255,82,1) 0%,rgba(145,232,66,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(210,255,82,1) 0%,rgba(145,232,66,1) 100%); /* IE10+ */
background: linear-gradient(to bottom,  rgba(210,255,82,1) 0%,rgba(145,232,66,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d2ff52', endColorstr='#91e842',GradientType=0 ); /* IE6-9 */
height:500px;
width:500px;
font-size:50px;

}

#temple7 {

/*style*/
/* Mozilla Firefox */
background-image: -moz-linear-gradient(top, #FFFFFF 0%, #91E842 100%);
/* IE 10 Consumer Preview */
background-image: -ms-linear-gradient(top, #FFFFFF 0%, #91E842 100%);
/* Opera */
background-image: -o-linear-gradient(top, #FFFFFF 0%, #91E842 100%);
/* Webkit (Safari/Chrome 10) */
background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #FFFFFF), color-stop(1, #91E842)); 
/* Webkit (Chrome 11+) */
background-image: -webkit-linear-gradient(top, #FFFFFF 0%, #91E842 100%);
/* W3C Markup, IE10 Release Preview */
background-image: linear-gradient(to bottom, #FFFFFF 0%, #91E842 100%);
height:500px;
width:500px;
font-size:50px;

}



#temple9 {

background-image: -moz-linear-gradient(top right, #FFFFFF 0%, #61A0E8 100%);/* IE 10 Consumer Preview */
background-image: -ms-linear-gradient(top right, #FFFFFF 0%, #61A0E8 100%);
/* Opera */
background-image: -o-linear-gradient(top right, #FFFFFF 0%, #61A0E8 100%);
/* Webkit (Safari/Chrome 10) */
background-image: -webkit-gradient(linear, right top, left bottom, color-stop(0, #FFFFFF), color-stop(1, #61A0E8)); 
/* Webkit (Chrome 11+) */
background-image: -webkit-linear-gradient(top right, #FFFFFF 0%, #61A0E8 100%);
/* W3C Markup, IE10 Release Preview */
background-image: linear-gradient(to bottom left, #FFFFFF 0%, #61A0E8 100%);
height:500px;
width:500px;
font-size:50px;

}


#temple10 {

/*style*/
background-image: -moz-linear-gradient(top left, #FFFFFF 0%, #E86DA2 100%);/* IE 10 Consumer Preview */
background-image: -ms-linear-gradient(top left, #FFFFFF 0%, #E86DA2 100%);
/* Opera */
background-image: -o-linear-gradient(top left, #FFFFFF 0%, #E86DA2 100%);
/* Webkit (Safari/Chrome 10) */
background-image: -webkit-gradient(linear, left top, right bottom, color-stop(0, #FFFFFF), color-stop(1, #E86DA2)); 
/* Webkit (Chrome 11+) */
background-image: -webkit-linear-gradient(top left, #FFFFFF 0%, #E86DA2 100%);
/* W3C Markup, IE10 Release Preview */
background-image: linear-gradient(to bottom right, #FFFFFF 0%, #E86DA2 100%);
height:500px;
width:500px;
font-size:50px;

}

";echo '


h2
{
font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
font-weight:100;
}


#client5

{height:700px;width:900px;}

#client4

{height:700px;width:900px;}

#client3

{height:700px;width:900px;}

#idone

{height:700px;width:900px;}

#client2

{height:700px;width:900px;}

#client1

{height:700px;width:900px;}


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


#plugin-title {
  background-image: url(http://www.therecipeminute.com/header.png);
}


#yay1:focus
{
border: 2px solid #900;
}



#idone input, #contact-area textarea {
	padding: 5px;
	width: 200px;
	font-family: Helvetica, sans-serif;
	font-size: 1.4em;
	margin: 0px 0px 10px 0px;
	border: 2px solid #ccc;
}

#idone textarea {
	height:179px;width:320px;border: 2px solid #ccc;
}

#idone textarea:focus, #contact-area input:focus {
	border: 2px solid #900;
}

#idone input.submit-button {
	width: 100px;
	float: right;
}

#idone label {
	float: left;
	text-align: left;
	width: 100px;
	padding-top: 5px;
	font-size: 1.0em;
	margin-left:50px;
	font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
font-weight:200;
}

#x {
	background-color: #bdb;
	color: #363;
	}



#y {
	background-color: #bcd;
	color: #258;
	}


#blur {
	background-color: #dbb;
	color: #933;
	}



#horizontal_length {
	background-color: #bdb;
	color: #363;
	}

#vertical_length {
	background-color: #bcd;
	color: #258;
	}

#blur_radius {
	background-color: #dbb;
	color: #933;
	}

#spread {
	background-color: #d9bbdb;
	color: #8d3393;
	}


#top_left {
	background-color: #bdb;
	color: #363;
	}

#top_right {
	background-color: #bcd;
	color: #258;
	}

#bottom_left {
	background-color: #dbb;
	color: #933;
	}

#bottom_right {
	background-color: #d9bbdb;
	color: #8d3393;
	}

#skew_x {
	background-color: #bdb;
	color: #363;
	}

#skew_y {
	background-color: #ddddbc;
	color: #888525;
	}

#scale {
	background-color: #bdb;
	color: #363;
	}

#rotate {
	background-color: #bcd;
	color: #258;
	}

#translate_x {
	background-color: #dbb;
	color: #933;
	}

#translate_y {
	background-color: #d9bbdb;
	color: #8d3393;
	}


#the_first_color_number {
	background-color: #ffffff;
	}

#the_second_color_number {
	background-color: #91e842;
	}





#the_first_color_number2 {
	background-color: #ffffff;
	}

#the_second_color_number2 {
	background-color: #61A0E8;
	}



#the_first_color_number3 {
	background-color: #ffffff;
	}

#the_second_color_number3 {
	background-color: #E86DA2;
	}





.flap {
	font-size:35px;
	}


.to-top
{
display:inline-block;
height:50px;
width:50px;

/*style*/
/* Mozilla Firefox */
background-image: -moz-linear-gradient(top, #FFFFFF 30%, #91E842 100%);
/* IE 10 Consumer Preview */
background-image: -ms-linear-gradient(top, #FFFFFF 30%, #91E842 100%);
/* Opera */
background-image: -o-linear-gradient(top, #FFFFFF 30%, #91E842 100%);
/* Webkit (Safari/Chrome 10) */
background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #FFFFFF), color-stop(1, #91E842)); 
/* Webkit (Chrome 11+) */
background-image: -webkit-linear-gradient(top, #FFFFFF 30%, #91E842 100%);
/* W3C Markup, IE10 Release Preview */
background-image: linear-gradient(to bottom, #FFFFFF 30%, #91E842 100%);
	border: 1px solid;
	border-color: #ddd #999 #999 #ddd;
}

.top-right
{

display:inline-block;
height:50px;
width:50px;

/*style*/
background-image: -moz-linear-gradient(top right, #FFFFFF 30%, #61A0E8 100%);/* IE 10 Consumer Preview */
background-image: -ms-linear-gradient(top right, #FFFFFF 30%, #61A0E8 100%);
/* Opera */
background-image: -o-linear-gradient(top right, #FFFFFF 30%, #61A0E8 100%);
/* Webkit (Safari/Chrome 10) */
background-image: -webkit-gradient(linear, right top, left bottom, color-stop(0, #FFFFFF), color-stop(1, #61A0E8)); 
/* Webkit (Chrome 11+) */
background-image: -webkit-linear-gradient(top right, #FFFFFF 30%, #61A0E8 100%);
/* W3C Markup, IE10 Release Preview */
background-image: linear-gradient(to bottom left, #FFFFFF 30%, #61A0E8 100%);
	border: 1px solid;
	border-color: #ddd #999 #999 #ddd;
}


.top-left
{

display:inline-block;
height:50px;
width:50px;

/*style*/
background-image: -moz-linear-gradient(top left, #FFFFFF 30%, #E86DA2 100%);/* IE 10 Consumer Preview */
background-image: -ms-linear-gradient(top left, #FFFFFF 30%, #E86DA2 100%);
/* Opera */
background-image: -o-linear-gradient(top left, #FFFFFF 30%, #E86DA2 100%);
/* Webkit (Safari/Chrome 10) */
background-image: -webkit-gradient(linear, left top, right bottom, color-stop(0, #FFFFFF), color-stop(1, #E86DA2)); 
/* Webkit (Chrome 11+) */
background-image: -webkit-linear-gradient(top left, #FFFFFF 30%, #E86DA2 100%);
/* W3C Markup, IE10 Release Preview */
background-image: linear-gradient(to bottom right, #FFFFFF 30%, #E86DA2 100%);
	border: 1px solid;
	border-color: #ddd #999 #999 #ddd;


}


</style>



<div id="client1" style="display:none;"><script type="text/javascript">';
echo "	    function test2(){

			var tl = document.getElementById('top_left').value;
			var tr = document.getElementById('top_right').value;
			var bl = document.getElementById('bottom_left').value;
			var br = document.getElementById('bottom_right').value;
";


			echo "document.getElementById('out2').innerHTML =";


echo ' "<style>#temple3" + "{" + "border-top-left-radius:" + tl + "px;border-top-right-radius:" + tr + "px;border-bottom-right-radius:" + br + "px;border-bottom-left-radius:" + bl + "px;-moz-border-top-left-radius:" + tl + "px;-moz-border-top-right-radius:" + tr + "px;-moz-border-bottom-right-radius:" + br + "px;-moz-border-bottom-left-radius:" + bl + "px;-webkit-border-top-left-radius:" + tl + "px;-webkit-border-top-right-radius:" + tr + "px;-webkit-border-bottom-right-radius:" + br + "px;-webkit-border-bottom-left-radius:" + bl + "px;" + "}" + "</style>" + "<div id=';echo "''>";echo '</div>" + "';

echo "<textarea style='height:100px;width:500px;'";

echo '>" + "/*style*/" + "&#013;" + "&#013;" + "border-top-left-radius:" + tl + "px;" + "&#013;" + "border-top-right-radius:" + tr + "px;" + "&#013;" + "border-bottom-right-radius:" + br + "px;" + "&#013;" + "border-bottom-left-radius:" + bl + "px;" + "&#013;" + "&#013;" + "-moz-border-top-left-radius:" + tl + "px;" + "&#013;" + "-moz-border-top-right-radius:" + tr + "px;" + "&#013;" + "-moz-border-bottom-right-radius:" + br + "px;" + "&#013;" + "-moz-border-bottom-left-radius:" + bl + "px;" + "&#013;" + "&#013;" + "-webkit-border-top-left-radius:" + tl + "px;" + "&#013;" + "-webkit-border-top-right-radius:" + tr + "px;" + "&#013;" + "-webkit-border-bottom-right-radius:" + br + "px;" + "&#013;" + "-webkit-border-bottom-left-radius:" + bl + "px;" + "</textarea>" + "<div id=';
echo "''>"; echo '</div>";';
echo "
			document.getElementById('out2').style.display ="; echo ' "block";';

echo '			return false;
		}
	</script>

	<script type="text/javascript" src="/wp-content/plugins/lw-website-tools/js/jscolor.js"></script>

</head>

<body>
    <form style="float:left;height:100%;width:350px;" action="" onsubmit="return test2()">



<div class="flap">Top Left</div>	<!-- Value display 1 (green) -->
	<div class="display_holder" id="display_holder_1" >
		<!-- Default value: 80 -->
		<input type="text" class="value_display" id="top_left" value="50" onfocus="blur(this);" />
	</div>	<!-- Horizontal slider 1 (green) -->
	<div class="horizontal_track" id="horizontal_track_1" >
		<div class="horizontal_slit" id="horizontal_slit_1" >&nbsp;</div>
		<!-- total movement: 100 pixels, scale: 1 [value/pixel],
			default position: 80 pixels, connected to value_display_1 -->
		<div class="horizontal_slider" id="horizontal_slider_1" style="left: 82.5px;"
			onmousedown="'; echo "slide(event, 'horizontal', 165, 0, 100, 101, 0, 'top_left'"; echo ');myFunction();" >&nbsp;</div>


	</div>


<div class="flap">Top Right</div>	<!-- Value display 2 (blue)	-->
	<div class="display_holder" id="display_holder_2" >
		<!-- Default value: 35 -->
		<input type="text" class="value_display" id="top_right" value="50" onfocus="blur(this);" />
	</div>	<!-- Horizontal slider 2 (blue) -->
	<div class="horizontal_track" id="horizontal_track_2" >
		<div class="horizontal_slit" id="horizontal_slit_2" >&nbsp;</div>
		<!-- total movement: 100 pixels, scale: 1 [value/pixel],
			default position: 35 pixels, connected to value_display_2 -->
		<div class="horizontal_slider" id="horizontal_slider_2" style="left: 82.5px;"
			onmousedown="slide(event, ';echo "'horizontal', 165, 0, 100, 101, 0, 'top_right'"; echo ');">
			&nbsp;
		</div>
	</div>



<div class="flap">Bottom Left</div>	<!-- Value display 3 (red)	-->
	<div class="display_holder" id="display_holder_3" >
		<!-- Default value: 40 -->
		<input type="text" class="value_display" id="bottom_left" value="50" onfocus="blur(this);" />
	</div>
	<!-- Horizontal slider 3 (red) -->
	<div class="horizontal_track" id="horizontal_track_3" >
		<div class="horizontal_slit" id="horizontal_slit_3" >&nbsp;</div>
		<!-- Total movement: 100 pixels, Scale: 1 [value/pixel],
			Default position: 40 pixels, Connected to value_display_3 -->
		<div class="horizontal_slider" id="horizontal_slider_3" style="left: 82.5px;"
			onmousedown="slide(event, ';echo "'horizontal', 165, 0, 100, 101, 0, 'bottom_left'";echo ');">&nbsp;</div>
	</div>

<div class="flap">Bottom Right</div>	<!-- Value display 5 (red)	-->
	<div class="display_holder" id="display_holder_5" >
		<!-- Default value: 40 -->
		<input type="text" class="value_display" id="bottom_right" value="50" onfocus="blur(this);" />
	</div>
	<!-- Horizontal slider 5 (red) -->
	<div class="horizontal_track" id="horizontal_track_5" >
		<div class="horizontal_slit" id="horizontal_slit_5" >&nbsp;</div>
		<!-- Total movement: 100 pixels, Scale: 1 [value/pixel],
			Default position: 40 pixels, Connected to value_display_3 -->
		<div class="horizontal_slider" id="horizontal_slider_5" style="left: 82.5px;"
			onmousedown="slide(event, ';echo "'horizontal', 165, 0, 100, 101, 0, 'bottom_right'";echo ');">&nbsp;</div>
	</div>

         </form>

<div id="temple3" style="float:right;"><br><br><br><br><br><br><br><br><br><br><br><br>Your Text! :D<br></div>
    <div id="out2" style="float:right;">


    </div>
</body>
</div>





<div id="client2" style="display:none;">




<script type="text/javascript">';
echo "	    function test(){

			var hl = document.getElementById('horizontal_length').value;
			var vl = document.getElementById('vertical_length').value;
			var br = document.getElementById('blur_radius').value;
			var sp = document.getElementById('spread').value;";


			echo "document.getElementById('out').innerHTML =";


echo ' "<style>#temple1" + "{" + "height:500px;width:500px;font-size:40pt;box-shadow:" + hl + "px" + " " + vl + "px" + " " + br + "px" + " " + sp + "px;" + "-webkit-box-shadow:" + hl + "px" + " " + vl + "px" + " " + br + "px" + " " + + sp + "px;" + "-moz-box-shadow" + hl + "px" + " " + vl + "px" + " " + br + "px" + " " + sp + "px;" + "}</style>" + "<div id=';echo "''>";echo '</div>" + "';

echo "<textarea style='height:100px;width:500px;'";

echo '>" + "/*style*/" + "&#013" + "box-shadow: " + hl + "px" + " " + vl + "px" + " " + br + "px" + " " + sp + "px;" + "&#013" + "-webkit-box-shadow: " + hl + "px" + " " + vl + "px" + " " + br + "px" + " " + sp + "px;" + "&#013" + "-moz-box-shadow: " + hl + "px" + " " + vl + "px" + " " + br + "px" + " " + sp + "px;" + "</textarea>" + "<div id=';
echo "''>"; echo '</div>";';
echo "
			document.getElementById('out').style.display ="; echo ' "block";';

echo '			return false;
		}
	</script>
</head>

<body>
    <form action="" style="float:left;height:100%;width:350px;" onsubmit="return test()">

<div class="flap">Horizontal Length:</div>	<!-- Value display 1 (green) -->
	<div class="display_holder" id="display_holder_11" >
		<!-- Default value: 80 -->
		<input type="text" class="value_display" id="horizontal_length" value="5" onfocus="blur(this);" />
	</div>	<!-- Horizontal slider 1 (green) -->
	<div class="horizontal_track" id="horizontal_track_11" >
		<div class="horizontal_slit" id="horizontal_slit_11" >&nbsp;</div>
		<!-- total movement: 100 pixels, scale: 1 [value/pixel],
			default position: 80 pixels, connected to value_display_1 -->
		<div onchange="return test5()" class="horizontal_slider" id="horizontal_slider_11" style="left: 5px;"
			onmousedown="'; echo "slide(event, 'horizontal', 165, 0, 100, 101, 0, 'horizontal_length'"; echo ');" >&nbsp;</div>


	</div>


<div class="flap">Vertical Length:</div>	<!-- Value display 2 (blue)	-->
	<div class="display_holder" id="display_holder_21" >
		<!-- Default value: 35 -->
		<input type="text" class="value_display" id="vertical_length" value="5" onfocus="blur(this);" />
	</div>	<!-- Horizontal slider 2 (blue) -->
	<div class="horizontal_track" id="horizontal_track_21" >
		<div class="horizontal_slit" id="horizontal_slit_21" >&nbsp;</div>
		<!-- total movement: 100 pixels, scale: 1 [value/pixel],
			default position: 35 pixels, connected to value_display_2 -->
		<div class="horizontal_slider" id="horizontal_slider_21" style="left: 5px;"
			onmousedown="slide(event, ';echo "'horizontal', 165, 0, 100, 101, 0, 'vertical_length'"; echo ');">
			&nbsp;
		</div>
	</div>


<div class="flap">Blur</div>	<!-- Value display 3 (red)	-->
	<div class="display_holder" id="display_holder_31" >
		<!-- Default value: 40 -->
		<input type="text" class="value_display" id="blur_radius" value="5" onfocus="blur(this);" />
	</div>
	<!-- Horizontal slider 3 (red) -->
	<div class="horizontal_track" id="horizontal_track_31" >
		<div class="horizontal_slit" id="horizontal_slit_31" >&nbsp;</div>
		<!-- Total movement: 100 pixels, Scale: 1 [value/pixel],
			Default position: 40 pixels, Connected to value_display_3 -->
		<div class="horizontal_slider" id="horizontal_slider_31" style="left: 5px;"
			onmousedown="slide(event, ';echo "'horizontal', 165, 0, 100, 101, 0, 'blur_radius'";echo ');">&nbsp;</div>
	</div>

<div class="flap">Spread</div>	<!-- Value display 5 (red)	-->
	<div class="display_holder" id="display_holder_51" >
		<!-- Default value: 40 -->
		<input type="text" class="value_display" id="spread" value="5" onfocus="blur(this);" />
	</div>
	<!-- Horizontal slider 5 (red) -->
	<div class="horizontal_track" id="horizontal_track_51" >
		<div class="horizontal_slit" id="horizontal_slit_51" >&nbsp;</div>
		<!-- Total movement: 100 pixels, Scale: 1 [value/pixel],
			Default position: 40 pixels, Connected to value_display_3 -->
		<div class="horizontal_slider" id="horizontal_slider_51" style="left: 5px;"
			onmousedown="slide(event, ';echo "'horizontal', 165, 0, 100, 101, 0, 'spread'";echo ');">&nbsp;</div>
	</div>
    </form>


<div id="temple1" style="float:right;"><br><br><br><br><br><br><br><br><br><br><br><br>Your Text! :D<br></div>
    <div id="out" style="float:right;" >
    </div>
</body>
</div>








<div id="client3" style="display:none;">










<script type="text/javascript">';
echo "	    function test33(){

			var se = document.getElementById('scale').value;
			var re = document.getElementById('rotate').value;
			var tx = document.getElementById('translate_x').value;
			var ty = document.getElementById('translate_y').value;
			var sx = document.getElementById('skew_x').value;
			var sy = document.getElementById('skew_y').value;";


			echo "document.getElementById('out3').innerHTML =";


echo ' "<style>#temple4" + "{" + "border: solid 5px #ccc;background-color:#fff;height:200px;width:200px;" + "-moz-transform: scale(" + se + ") rotate(" + re + "deg) translateX(" + tx + "px) translateY(" + ty + "px) skewX(" + sx + "deg) skewY(" + sy + "deg);" + "-webkit-transform: scale(" + se + ") rotate(" + re + "deg) translateX(" + tx + "px) translateY(" + ty + "px) skewX(" + sx + "deg) skewY(" + sy + "deg);" + "-0-transform: scale(" + se + ") rotate(" + re + "deg) translateX(" + tx + "px) translateY(" + ty + "px) skewX(" + sx + "deg) skewY(" + sy + "deg);" + "-ms-transform: scale(" + se + ") rotate(" + re + "deg) translateX(" + tx + "px) translateY(" + ty + "px) skewX(" + sx + "deg) skewY(" + sy + "deg);" + "transform: scale(" + se + ") rotate(" + re + "deg) translateX(" + tx + "px) translateY(" + ty + "px) skewX(" + sx + "deg) skewY(" + sy + "deg);" + "}</style>" + "<div id=';echo "'temple4'>";echo '<br><br><br><br><br>Your Text! :D</div><br>" + "';

echo "<textarea style='height:150px;width:500px;border:solid 2px #ccc;'";

echo '>" + "/*style*/" + "&#013;" + "-moz-transform: scale(" + se + ") rotate(" + re + "deg) translateX(" + tx + "px) translateY(" + ty + "px) skewX(" + sx + "deg) skewY(" + sy + "deg);" + "&#013;" + "-webkit-transform: scale(" + se + ") rotate(" + re + "deg) translateX(" + tx + "px) translateY(" + ty + "px) skewX(" + sx + "deg) skewY(" + sy + "deg);" + "&#013;" + "-0-transform: scale(" + se + ") rotate(" + re + "deg) translateX(" + tx + "px) translateY(" + ty + "px) skewX(" + sx + "deg) skewY(" + sy + "deg);" + "&#013;" + "-ms-transform: scale(" + se + ") rotate(" + re + "deg) translateX(" + tx + "px) translateY(" + ty + "px) skewX(" + sx + "deg) skewY(" + sy + "deg);" + "&#013;" + "transform: scale(" + se + ") rotate(" + re + "deg) translateX(" + tx + "px) translateY(" + ty + "px) skewX(" + sx + "deg) skewY(" + sy + "deg);"+ "</textarea>" + "<div id=';
echo "''>"; echo '</div>";';
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
    <form  style="float:left;height:100%;width:350px;" action="" onsubmit="return test33()">

<div class="flap">Scale</div>	<!-- Value display 1 (green) -->
	<div class="display_holder" id="display_holder_13" >
		<!-- Default value: 80 -->
		<input type="text" class="value_display" id="scale" value="1" onfocus="blur(this);" />
	</div>

	<!-- Horizontal slider 1 (green) -->
	<div class="horizontal_track" id="horizontal_track_13" >
		<div class="horizontal_slit" id="horizontal_slit_13" >&nbsp;</div>
		<!-- total movement: 100 pixels, scale: 1 [value/pixel],
			default position: 80 pixels, connected to value_display_1 -->


		<div onchange="return test5()" class="horizontal_slider" id="horizontal_slider_13" style="left: 82.5px;"
			onmousedown="'; echo "slide(event, 'horizontal', 165, 0, 2, 101, 1, 'scale'"; echo ');" >&nbsp;</div>
	</div>


<div class="flap">Rotate</div>	<!-- Value display 2 (blue)	-->
	<div class="display_holder" id="display_holder_23" >
		<!-- Default value: 35 -->
		<input type="text" class="value_display" id="rotate" value="5" onfocus="blur(this);" />
	</div>

	<!-- Horizontal slider 2 (blue) -->
	<div class="horizontal_track" id="horizontal_track_23" >
		<div class="horizontal_slit" id="horizontal_slit_23" >&nbsp;</div>
		<!-- total movement: 100 pixels, scale: 1 [value/pixel],
			default position: 35 pixels, connected to value_display_2 -->
		<div class="horizontal_slider" id="horizontal_slider_23" style="left: 5px;"
			onmousedown="slide(event, ';echo "'horizontal', 165, 0, 360, 361, 0, 'rotate'"; echo ');">
			&nbsp;
		</div>
	</div>


<div class="flap">Translate X</div>	<!-- Value display 3 (red)	-->
	<div class="display_holder" id="display_holder_33" >
		<!-- Default value: 40 -->
		<input type="text" class="value_display" id="translate_x" value="5" onfocus="blur(this);" />
	</div>
	<!-- Horizontal slider 3 (red) -->
	<div class="horizontal_track" id="horizontal_track_33" >
		<div class="horizontal_slit" id="horizontal_slit_33" >&nbsp;</div>
		<!-- Total movement: 100 pixels, Scale: 1 [value/pixel],
			Default position: 40 pixels, Connected to value_display_3 -->
		<div class="horizontal_slider" id="horizontal_slider_33" style="left: 5px;"
			onmousedown="slide(event, ';echo "'horizontal', 165, 0, 100, 101, 0, 'translate_x'";echo ');">&nbsp;</div>
	</div>

<div class="flap">Translate Y</div>	<!-- Value display 5 (red)	-->
	<div class="display_holder" id="display_holder_53" >
		<!-- Default value: 40 -->
		<input type="text" class="value_display" id="translate_y" value="5" onfocus="blur(this);" />
	</div>
	<!-- Horizontal slider 5 (red) -->
	<div class="horizontal_track" id="horizontal_track_53" >
		<div class="horizontal_slit" id="horizontal_slit_53" >&nbsp;</div>
		<!-- Total movement: 100 pixels, Scale: 1 [value/pixel],
			Default position: 40 pixels, Connected to value_display_3 -->
		<div class="horizontal_slider" id="horizontal_slider_53" style="left: 5px;"
			onmousedown="slide(event, ';echo "'horizontal', 165, 0, 100, 101, 0, 'translate_y'";echo ');">&nbsp;</div>
	</div>

<div class="flap">Skew X</div>	<!-- Value display 5 (red)	-->
	<div class="display_holder" id="display_holder_63" >
		<!-- Default value: 40 -->
		<input type="text" class="value_display" id="skew_x" value="5" onfocus="blur(this);" />
	</div>
	<!-- Horizontal slider 5 (red) -->
	<div class="horizontal_track" id="horizontal_track_63" >
		<div class="horizontal_slit" id="horizontal_slit_63" >&nbsp;</div>
		<!-- Total movement: 100 pixels, Scale: 1 [value/pixel],
			Default position: 40 pixels, Connected to value_display_3 -->
		<div class="horizontal_slider" id="horizontal_slider_63" style="left: 5px;"
			onmousedown="slide(event, ';echo "'horizontal', 165, 0, 100, 101, 0, 'skew_x'";echo ');">&nbsp;</div>
	</div>

<div class="flap">Skew Y</div>	<!-- Value display 5 (red)	-->
	<div class="display_holder" id="display_holder_73" >
		<!-- Default value: 40 -->
		<input type="text" class="value_display" id="skew_y" value="5" onfocus="blur(this);" />
	</div>
	<!-- Horizontal slider 5 (red) -->
	<div class="horizontal_track" id="horizontal_track_73" >
		<div class="horizontal_slit" id="horizontal_slit_73" >&nbsp;</div>
		<!-- Total movement: 100 pixels, Scale: 1 [value/pixel],
			Default position: 40 pixels, Connected to value_display_3 -->
		<div class="horizontal_slider" id="horizontal_slider_73" style="left: 5px;"
			onmousedown="slide(event, ';echo "'horizontal', 165, 0, 100, 101, 0, 'skew_y'";echo ');">&nbsp;</div>
	</div>


        <p><input style="background-color:white;width:200px;border: 5px solid #ccc" type="submit" value="Go! :)" /></p>
    </form>

    <div id="out3" style="float:right;" >
    </div>
</body>
</div>




<div id="client4" style="display:none;">



';


echo '



<style>








*.horizontal_track {
	background-color: #bbb;
	width: 200px;
	line-height: 0px;
	font-size: 0px;
	text-align: left;
	padding: 4px;
	border: 1px solid;
	border-color: #ddd #999 #999 #ddd;
}
*.horizontal_slider {
	background-color: #666;
	width: 30px;
	height: 50px;
	position: relative;
	z-index: 2;
	line-height: 0;
	margin: 0;
	border: 2px solid;
	border-color: #999 #333 #333 #999;
}
*.horizontal_slit {
	background-color: #333;
	width: 190px;
	height: 45px;
	margin: 4px 4px 2px 4px;
	line-height: 0;
	position: absolute;
	z-index: 1;
	border: 1px solid;
	border-color: #999 #ddd #ddd #999;
}
*.vertical_track {
	background-color: #bbb;
	padding: 3px 5px 15px 5px;
	border: 1px solid;
	border-color: #ddd #999 #999 #ddd;
}
*.vertical_slider {
	background-color: #666;
	width: 18px;
	height: 8px;
	font: 0px;
	text-align: left;
	line-height: 0px;
	position: relative;
	z-index: 1;
	border: 2px solid;
	border-color: #999 #333 #333 #999;
}
*.vertical_slit {
	background-color: #000;
	width: 2px;
	height: 100px;
	position: absolute;
	margin: 4px 10px 4px 10px;
	padding: 4px 0 1px 0;
	line-height: 0;
	font-size: 0;
	border: 1px solid;
	border-color: #666 #ccc #ccc #666;
}
*.display_holder {
	margin-top:20px;
	float:right;
	background-color: #bbb;
	color: #fff;
	width: 50px;
	text-align: right;
	padding: 0;
	border: 1px solid;
	border-color: #ddd #999 #999 #ddd;
}
.value_display {

	background-color: #bbb;
	color: #333;
	width: 45px;
	margin: 0 2px;
	text-align: right;
	font-size: 15pt;
	font-face: verdana, arial, helvetica, sans-serif;
	font-weight: bold;
	line-height: 12px;
	border: 0;
	cursor: default;
}




#horizontal_slider_7 {
	background-color: #ffffff;
	border-color: #e2e2e2 #bababa #bababa #e2e2e2;
	}
#horizontal_track_7, #display_holder_7 {
	background-color: #dbdbdb;
	border-color: #e2e2e2 #bababa #bababa #e2e2e2;
	}
#horizontal_slit_7 {
	background-color: #fff;
	border-color: #bababa #e2e2e2 #e2e2e2 #bababa;
	}
#value_display_7 {
	background-color: #d9bbdb;
	color: #bababa;
	}





#horizontal_slider_1 {
	background-color: #696;
	border-color: #9c9 #363 #363 #9c9;
	}
#horizontal_track_1, #display_holder_1 {
	background-color: #bdb;
	border-color: #ded #9a9 #9a9 #ded;
	}
#horizontal_slit_1 {
	background-color: #fff;
	border-color: #9a9 #ded #ded #9a9;
	}
#value_display_1 {
	background-color: #bdb;
	color: #363;
	}
#horizontal_slider_2 {
	background-color: #369;
	border-color: #69c #036 #036 #69c;
	}
#horizontal_track_2, #display_holder_2 {
	background-color: #bcd;
	border-color: #def #9ab #9ab #def;
	}
#horizontal_slit_2 {
	background-color: #fff;
	border-color: #9ab #def #def #9ab;
	}
#value_display_2 {
	background-color: #bcd;
	color: #258;
	}
#horizontal_slider_3 {
	background-color: #c33;
	border-color: #f66 #933 #933 #f66;
	}
#horizontal_track_3, #display_holder_3 {
	background-color: #dbb;
	border-color: #fdd #b99 #b99 #fdd;
	}
#horizontal_slit_3 {
	background-color: #fff;
	border-color: #b99 #fdd #fdd #b99;
	}
#value_display_3 {
	background-color: #dbb;
	color: #933;
	}
#horizontal_slider_5 {
	background-color: #9233c3;
	border-color: #bb66f1 #8d3393 #8d3393 #bb66f1;
	}
#horizontal_track_5, #display_holder_5 {
	background-color: #d9bbdb;
	border-color: #fcddfd #b699b9 #b699b9 #fcddfd;
	}
#horizontal_slit_5 {
	background-color: #fff;
	border-color: #b699b9 #fcddfd #fcddfd #b699b9;
	}
#value_display_5 {
	background-color: #d9bbdb;
	color: #8d3393;
	}
	


.flap {
	font-size:35px;
	}




#horizontal_slider_51 {
	background-color: #9233c3;
	border-color: #bb66f1 #8d3393 #8d3393 #bb66f1;
	}
#horizontal_track_51, #display_holder_51 {
	background-color: #d9bbdb;
	border-color: #fcddfd #b699b9 #b699b9 #fcddfd;
	}
#horizontal_slit_51 {
	background-color: #fff;
	border-color: #b699b9 #fcddfd #fcddfd #b699b9;
	}
#value_display_51 {
	background-color: #d9bbdb;
	color: #8d3393;
	}

#horizontal_slider_11 {
	background-color: #696;
	border-color: #9c9 #363 #363 #9c9;
	}
#horizontal_track_11, #display_holder_11 {
	background-color: #bdb;
	border-color: #ded #9a9 #9a9 #ded;
	}
#horizontal_slit_11 {
	background-color: #fff;
	border-color: #9a9 #ded #ded #9a9;
	}
#value_display_11 {
	background-color: #bdb;
	color: #363;
	}
#horizontal_slider_21 {
	background-color: #369;
	border-color: #69c #036 #036 #69c;
	}
#horizontal_track_21, #display_holder_21 {
	background-color: #bcd;
	border-color: #def #9ab #9ab #def;
	}
#horizontal_slit_21 {
	background-color: #fff;
	border-color: #9ab #def #def #9ab;
	}
#value_display_21 {
	background-color: #bcd;
	color: #258;
	}
#horizontal_slider_31 {
	background-color: #c33;
	border-color: #f66 #933 #933 #f66;
	}
#horizontal_track_31, #display_holder_31 {
	background-color: #dbb;
	border-color: #fdd #b99 #b99 #fdd;
	}
#horizontal_slit_31 {
	background-color: #fff;
	border-color: #b99 #fdd #fdd #b99;
	}
#value_display_31 {
	background-color: #dbb;
	color: #933;
	}







#horizontal_slider_73 {
	background-color: #c3c133;
	border-color: #f1ef66 #939233 #939233 #f1ef66;
	}
#horizontal_track_73, #display_holder_73 {
	background-color: #dbdabb;
	border-color: #fdfddd #b9b999 #b699b9 #fdfddd;
	}
#horizontal_slit_73 {
	background-color: #fff;
	border-color: #b699b9 #fdfddd #fdfddd #b699b9;
	}
#value_display_73 {
	background-color: #dbdabb;
	color: #939033;
	}





#horizontal_slider_63 {
	background-color: #696;
	border-color: #9c9 #363 #363 #9c9;
	}
#horizontal_track_63, #display_holder_63 {
	background-color: #bdb;
	border-color: #ded #9a9 #9a9 #ded;
	}
#horizontal_slit_63 {
	background-color: #fff;
	border-color: #9a9 #ded #ded #9a9;
	}
#value_display_63 {
	background-color: #bdb;
	color: #363;
	}


#horizontal_slider_53 {
	background-color: #9233c3;
	border-color: #bb66f1 #8d3393 #8d3393 #bb66f1;
	}
#horizontal_track_53, #display_holder_53 {
	background-color: #d9bbdb;
	border-color: #fcddfd #b699b9 #b699b9 #fcddfd;
	}
#horizontal_slit_53 {
	background-color: #fff;
	border-color: #b699b9 #fcddfd #fcddfd #b699b9;
	}
#value_display_53 {
	background-color: #d9bbdb;
	color: #8d3393;
	}


#horizontal_slider_71 {
	background-color: #91E842;
	border-color: #e2e2e2 #bababa #bababa #e2e2e2;
	}
#horizontal_track_71, #display_holder_71 {
	background-color: #dbdbdb;
	border-color: #e2e2e2 #bababa #bababa #e2e2e2;
	}
#horizontal_slit_71 {
	background-color: #fff;
	border-color: #bababa #e2e2e2 #e2e2e2 #bababa;
	}
#value_display_71 {
	background-color: #d9bbdb;
	color: #bababa;
	}




#horizontal_slider_8 {
	background-color: #91E842;
	border-color: #e2e2e2 #bababa #bababa #e2e2e2;
	}
#horizontal_track_8, #display_holder_8 {
	background-color: #dbdbdb;
	border-color: #e2e2e2 #bababa #bababa #e2e2e2;
	}
#horizontal_slit_8 {
	background-color: #fff;
	border-color: #bababa #e2e2e2 #e2e2e2 #bababa;
	}
#value_display_8 {
	background-color: #d9bbdb;
	color: #bababa;
	}





#horizontal_slider_81 {
	background-color: #91E842;
	border-color: #e2e2e2 #bababa #bababa #e2e2e2;
	}
#horizontal_track_81, #display_holder_81 {
	background-color: #dbdbdb;
	border-color: #e2e2e2 #bababa #bababa #e2e2e2;
	}
#horizontal_slit_81 {
	background-color: #fff;
	border-color: #bababa #e2e2e2 #e2e2e2 #bababa;
	}
#value_display_81 {
	background-color: #d9bbdb;
	color: #bababa;
	}






#horizontal_slider_9 {
	background-color: #ffffff;
	border-color: #e2e2e2 #bababa #bababa #e2e2e2;
	}
#horizontal_track_9, #display_holder_9 {
	background-color: #dbdbdb;
	border-color: #e2e2e2 #bababa #bababa #e2e2e2;
	}
#horizontal_slit_9 {
	background-color: #fff;
	border-color: #bababa #e2e2e2 #e2e2e2 #bababa;
	}
#value_display_9 {
	background-color: #d9bbdb;
	color: #bababa;
	}







#horizontal_slider_91 {
	background-color: 61A0E8#;
	border-color: #e2e2e2 #bababa #bababa #e2e2e2;
	}
#horizontal_track_91, #display_holder_91 {
	background-color: #dbdbdb;
	border-color: #e2e2e2 #bababa #bababa #e2e2e2;
	}
#horizontal_slit_91 {
	background-color: #fff;
	border-color: #bababa #e2e2e2 #e2e2e2 #bababa;
	}
#value_display_91 {
	background-color: #d9bbdb;
	color: #bababa;
	}




#horizontal_slider_10 {
	background-color: #ffffff;
	border-color: #e2e2e2 #bababa #bababa #e2e2e2;
	}
#horizontal_track_10, #display_holder_10 {
	background-color: #dbdbdb;
	border-color: #e2e2e2 #bababa #bababa #e2e2e2;
	}
#horizontal_slit_10 {
	background-color: #fff;
	border-color: #bababa #e2e2e2 #e2e2e2 #bababa;
	}
#value_display_10 {
	background-color: #d9bbdb;
	color: #bababa;
	}







#horizontal_slider_101 {
	background-color: #E86DA2;
	border-color: #e2e2e2 #bababa #bababa #e2e2e2;
	}
#horizontal_track_101, #display_holder_101 {
	background-color: #dbdbdb;
	border-color: #e2e2e2 #bababa #bababa #e2e2e2;
	}
#horizontal_slit_101 {
	background-color: #fff;
	border-color: #bababa #e2e2e2 #e2e2e2 #bababa;
	}
#value_display_101 {
	background-color: #d9bbdb;
	color: #bababa;
	}








#horizontal_slider_13 {
	background-color: #696;
	border-color: #9c9 #363 #363 #9c9;
	}
#horizontal_track_13, #display_holder_13 {
	background-color: #bdb;
	border-color: #ded #9a9 #9a9 #ded;
	}
#horizontal_slit_13 {
	background-color: #fff;
	border-color: #9a9 #ded #ded #9a9;
	}
#value_display_13 {
	background-color: #bdb;
	color: #363;
	}
#horizontal_slider_23 {
	background-color: #369;
	border-color: #69c #036 #036 #69c;
	}
#horizontal_track_23, #display_holder_23 {
	background-color: #bcd;
	border-color: #def #9ab #9ab #def;
	}
#horizontal_slit_23 {
	background-color: #fff;
	border-color: #9ab #def #def #9ab;
	}
#value_display_23 {
	background-color: #bcd;
	color: #258;
	}
#horizontal_slider_33 {
	background-color: #c33;
	border-color: #f66 #933 #933 #f66;
	}
#horizontal_track_33, #display_holder_33 {
	background-color: #dbb;
	border-color: #fdd #b99 #b99 #fdd;
	}
#horizontal_slit_33 {
	background-color: #fff;
	border-color: #b99 #fdd #fdd #b99;
	}
#value_display_33 {
	background-color: #dbb;
	color: #933;
	}



#horizontal_slider_12 {
	background-color: #696;
	border-color: #9c9 #363 #363 #9c9;
	}
#horizontal_track_12, #display_holder_12 {
	background-color: #bdb;
	border-color: #ded #9a9 #9a9 #ded;
	}
#horizontal_slit_12 {
	background-color: #fff;
	border-color: #9a9 #ded #ded #9a9;
	}
#value_display_12 {
	background-color: #bdb;
	color: #363;
	}
#horizontal_slider_22 {
	background-color: #369;
	border-color: #69c #036 #036 #69c;
	}
#horizontal_track_22, #display_holder_22 {
	background-color: #bcd;
	border-color: #def #9ab #9ab #def;
	}
#horizontal_slit_22 {
	background-color: #fff;
	border-color: #9ab #def #def #9ab;
	}
#value_display_22 {
	background-color: #bcd;
	color: #258;
	}
#horizontal_slider_32 {
	background-color: #c33;
	border-color: #f66 #933 #933 #f66;
	}
#horizontal_track_32, #display_holder_32 {
	background-color: #dbb;
	border-color: #fdd #b99 #b99 #fdd;
	}
#horizontal_slit_32 {
	background-color: #fff;
	border-color: #b99 #fdd #fdd #b99;
	}
#value_display_32 {
	background-color: #dbb;
	color: #933;
	}

	

</style>

'; echo '




<script type="text/javascript">
';
echo "	    function test5(){

			var hl = document.getElementById('x').value;
			var vl = document.getElementById('y').value;
			var bl = document.getElementById('blur').value;
			var sc = document.getElementById('shadow_color').value;";


			echo "document.getElementById('out5').innerHTML =";


echo ' "<style>#temple2" + "{" + "" + "text-shadow: " + hl + "px " + vl + "px " + bl + "px #" + sc + ";" + "filter: dropshadow(color=#" + sc + ", offx=" + hl + ", offy=" + vl + ");" + "}" + "</style>" + "<div id=';echo "'temple2'>";echo '<br><br><br><br><br><br><br><br><br><br><br><br>Your Text! :D</div><br>" + "';


echo "<textarea style='height:150px;width:500px;border:solid 2px #ccc;'";

echo '>" + "/*style*/" + "&#013;" + "&#013;" + "text-shadow: " + hl + "px " + vl + "px #" + bl + "px " + sc + ";" + "&#013;" + "filter: dropshadow(color=#" + sc + ", offx=" + hl + ", offy=" + vl + ");" + "</textarea>" + "<div id=';
echo "''>"; echo '</div>";';
echo "
			document.getElementById('out5').style.display ="; echo ' "block";';

echo '			return false;
		}
	</script>
</head>

<script type="text/javascript">
function show_alert1()
{
alert("Sets the text shadow color. Example: #000000 or green :)");
}
</script>


';








echo '<body>


    <form action="" style="float:left;height:100%;width:350px;" onsubmit="return test5()">

<div class="flap">X</div>	<!-- Value display 1 (green) -->
	<div class="display_holder" id="display_holder_12" >
		<!-- Default value: 80 -->
		<input type="text" class="value_display" id="x" value="5" onfocus="blur(this);" />
	</div>	<!-- Horizontal slider 1 (green) -->
	<div class="horizontal_track" id="horizontal_track_12" >
		<div class="horizontal_slit" id="horizontal_slit_12" >&nbsp;</div>
		<!-- total movement: 100 pixels, scale: 1 [value/pixel],
			default position: 80 pixels, connected to value_display_1 -->
		<div onchange="return test5()"  class="horizontal_slider" id="horizontal_slider_12" style="left: 5px;"
			onmousedown="'; echo "slide(event, 'horizontal', 165, 0, 100, 101, 0, 'x'"; echo ');test5();" >&nbsp;</div>


	</div>



<div class="flap">Y</div>	<!-- Value display 2 (blue)	-->
	<div class="display_holder" id="display_holder_22" >
		<!-- Default value: 35 -->
		<input type="text" class="value_display" id="y" value="5" onfocus="blur(this);" />
	</div>	<!-- Horizontal slider 2 (blue) -->
	<div class="horizontal_track" id="horizontal_track_22" >
		<div class="horizontal_slit" id="horizontal_slit_22" >&nbsp;</div>
		<!-- total movement: 100 pixels, scale: 1 [value/pixel],
			default position: 35 pixels, connected to value_display_2 -->
		<div class="horizontal_slider" id="horizontal_slider_22" style="left: 5px;"
			onmousedown="slide(event, ';echo "'horizontal', 165, 0, 100, 101, 0, 'y'"; echo ');">
			&nbsp;
		</div>
	</div>




<div class="flap">Blur</div>	<!-- Value display 3 (red)	-->
	<div class="display_holder" id="display_holder_32" >
		<!-- Default value: 40 -->
		<input type="text" class="value_display" id="blur" value="5" onfocus="blur(this);" />
	</div>
	<!-- Horizontal slider 3 (red) -->
	<div class="horizontal_track" id="horizontal_track_32" >
		<div class="horizontal_slit" id="horizontal_slit_32" >&nbsp;</div>
		<!-- Total movement: 100 pixels, Scale: 1 [value/pixel],
			Default position: 40 pixels, Connected to value_display_3 -->
		<div class="horizontal_slider" id="horizontal_slider_32" style="left: 5px;"
			onmousedown="slide(event, ';echo "'horizontal', 165, 0, 30, 101, 0, 'blur'";echo ');">&nbsp;</div>
	</div>

<table>
<tr>
<td><br><br>
</td>
<td>
<div class="flap">Shadow-Color</div>
<br>
        <input onchange="return test5();" class="color" value="000000" style="font-size: 15pt;height:45px;background-color:white;width:200px;border: 2px solid #ccc" id="shadow_color" type="text" name="" /></td>
</td>
</table>
  <p>

        </p>

';

echo '

    </form>
    <div id="out5"style="float:right;"></div>
</body>
</div>
<div id="client5" style="display:none;">

 <script language="javascript">
        function MyFunction(divName){

        //hidden val
        var hiddenVal = document.getElementById("tempDivName"); 

        //hide old
        if(hiddenVal.Value != undefined){
            var oldDiv = document.getElementById(hiddenVal.Value); 
            oldDiv.style.display = ';echo "'none'; 
        }

        //show div
            var tempDiv = document.getElementById(divName); 
            tempDiv.style.display = 'block'";echo ';              

        //save div ID
            hiddenVal.Value = document.getElementById(divName).getAttribute("id");

        }
    </script>
    <input id="tempDivName" type="hidden" />
 <a href="#" OnClick="MyFunction(';echo "'myDiv1'";echo ');"><div class="to-top"></div></a>
<a href="#" OnClick="MyFunction(';echo "'myDiv2'";echo ');"><div class="top-right"></div></a>
<a href="#" OnClick="MyFunction(';echo "'myDiv3'";echo ');"><div class="top-left"></div></a>


    <br/>
    <div id="myDiv1" style="display:none">
     <script type="text/javascript">';
echo "	    function test7(){

			var fc = document.getElementById('the_first_color').value;
			var sn = document.getElementById('the_second_color').value;
			var fcn = document.getElementById('the_first_color_number').value;
			var snn = document.getElementById('the_second_color_number').value;";


			echo "document.getElementById('out7').innerHTML =";


echo ' "<style>#temple7" + "{" + "background-image: -moz-linear-gradient(top, #" + fc + " " + fcn + "%, #" + sn + " " + snn + "%);" +  "}" + "#horizontal_slider_71 { background-color: #" + sn + ";}" + "#horizontal_slider_7 { background-color: #" + fc + ";}" + "#the_first_color_number { background-color: #" + fc + ";}" + "#the_second_color_number { background-color: #" + sn + ";}" + "/* IE 10 Consumer Preview */" + "background-image: -ms-linear-gradient(top, #" + fc + " " + fcn + "%, #" + sn + " " + snn + "%);" + "/* Opera */" + "background-image: -o-linear-gradient(top, #" + fc + " " + fcn + "%, #" + sn + " " + snn + "%);" + "/* Webkit (Safari/Chrome 10) */" + "background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #" + fc + "), color-stop(1, #" + sn + ")); " + "/* Webkit (Chrome 11+) */" + + "background-image: -webkit-linear-gradient(top, #" + fc + " " + fcn + "%, #" + sn + " " + snn + "%);" + "/* W3C Markup, IE10 Release Preview */" + + "background-image: linear-gradient(to bottom, #" + fc + " " + fcn + "%, #" + sn + " " + snn + "%);" + "</style>" + "<div id=';echo "''>";echo '</div>" + "';

echo "<textarea style='height:100px;width:500px;'";echo '>" + "/*style*/" + "&#013;" + "/* Mozilla Firefox */" + "&#013;" + "background-image: -moz-linear-gradient(top, #" + fc + " " + fcn + "%, #" + sn + " " + snn + "%);" + "&#013;" + "/* IE 10 Consumer Preview */" + "&#013;" + "background-image: -ms-linear-gradient(top, #" + fc + " " + fcn + "%, #" + sn + " " + snn + "%);" + "&#013;" + "/* Opera */" + "&#013;" + "background-image: -o-linear-gradient(top, #" + fc + " " + fcn + "%, #" + sn + " " + snn + "%);" + "&#013;" + "/* Webkit (Safari/Chrome 10) */" + "&#013;" + "background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #" + fc + "), color-stop(1, #" + sn + ")); " + "&#013;" + "/* Webkit (Chrome 11+) */" + "&#013;" + "background-image: -webkit-linear-gradient(top, #" + fc + " " + fcn + "%, #" + sn + " " + snn + "%);" +  "&#013;" + "/* W3C Markup, IE10 Release Preview */" + "&#013;" + "background-image: linear-gradient(to bottom, #" + fc + " " + fcn + "%, #" + sn + " " + snn + "%);" + "</textarea>" + "<div id=';echo "''>"; echo '</div>";';
echo "
			document.getElementById('out7').style.display ="; echo ' "block";';

echo '			return false;
		}
	</script>






</head>

<body>
    <form style="float:left;height:100%;width:350px;" action="" onsubmit="return test7()">




<div>


<div class="flap">Top</div>	<!-- Value display 1 (green) -->
	<div class="display_holder" id="display_holder_7" >
		<!-- Default value: 80 -->
		<input type="text" class="value_display" id="the_first_color_number" value="0" onfocus="blur(this);" />
	</div>	<!-- Horizontal slider 1 (green) -->
	<div class="horizontal_track" id="horizontal_track_7" >


		<div class="horizontal_slit" id="horizontal_slit_7" >&nbsp;</div>
		<!-- total movement: 100 pixels, scale: 1 [value/pixel],
			default position: 80 pixels, connected to value_display_1 -->
		<div onchange="return test5()"  class="horizontal_slider" id="horizontal_slider_7" style="left: 0px;"
			onmousedown="'; echo "slide(event, 'horizontal', 165, 0, 100, 101, 0, 'the_first_color_number'"; echo ');" >&nbsp;</div>


	</div>








</div>

<div class="flap">Color</div>
<br>
<input onchange="return test7()" class="color {onImmediateChange:';echo "'updateInfo(this);'";echo '}" value="ffffff" style="font-size: 15pt;height:45px;background-color:white;width:200px;border: 2px solid #ccc" type="text" id="the_first_color" />


<div>


<div class="flap">Bottom</div>

	<!-- Value display 2 (blue)	-->
	<div class="display_holder" id="display_holder_71" >
		<!-- Default value: 35 -->


		<input type="text" class="value_display" id="the_second_color_number" value="100" onfocus="blur(this);" />
	</div>	<!-- Horizontal slider 2 (blue) -->
	<div class="horizontal_track" id="horizontal_track_71" >

		<div class="horizontal_slit" id="horizontal_slit_71" >&nbsp;</div>
		<!-- total movement: 100 pixels, scale: 1 [value/pixel],
			default position: 35 pixels, connected to value_display_2 -->
		<div class="horizontal_slider" id="horizontal_slider_71" style="left: 33px;"
			onmousedown="slide(event, ';echo "'horizontal', 165, 0, 500, 101, 0, 'the_second_color_number'"; echo ');">
			&nbsp;
		</div>
	</div>

</div>

<div class="flap">Color</div>
<br>
<input onchange="return test7()" class="color" value="91E842" style="font-size: 15pt;height:45px;background-color:white;width:200px;border: 2px solid #ccc" type="text" id="the_second_color" />





         </form>
<div id="temple7" style="float:right;"><br><br><br><br><br><br><br><br><br><br><br><br>Your Text! :D</div>
    <div id="out7" style="float:right;">
    </div>
</body>


    </div>
    <div id="myDiv2" style="display:none">
 

 <script type="text/javascript">';
echo "	    function test9(){

			var fcc = document.getElementById('the_first_color2').value;
			var snc = document.getElementById('the_second_color2').value;
			var fcnc = document.getElementById('the_first_color_number2').value;
			var snnc = document.getElementById('the_second_color_number2').value;";


			echo "document.getElementById('out9').innerHTML =";


echo ' "<style>#temple9" + "{" + "background-image: -moz-linear-gradient(top right, #" + fcc + " " + fcnc + "%, #" + snc + " " + snnc + "%);" +"/* IE 10 Consumer Preview */" + "&#013;" + "background-image: -ms-linear-gradient(top right, #" + fcc + " " + fcnc + "%, #" + snc + " " + snnc + "%);" + "/* Opera */" + "background-image: -o-linear-gradient(top right, #" + fcc + " " + fcnc + "%, #" + snc + " " + snnc + "%);" + "/* Webkit (Safari/Chrome 10) */" + "background-image: -webkit-gradient(linear, right top, left bottom, color-stop(0, #" + fcc + "), color-stop(1, #" + snc + ")); " + "/* Webkit (Chrome 11+) */" + "background-image: -webkit-linear-gradient(top right, #" + fcc + " " + fcnc + "%, #" + snc + " " + snnc + "%);" + "/* W3C Markup, IE10 Release Preview */" + "background-image: linear-gradient(to bottom left, #" + fcc + " " + fcnc + "%, #" + snc + " " + snnc + "%);" + "}" + "#horizontal_slider_91 { background-color: #" + snc + ";}" + "#horizontal_slider_9 { background-color: #" + fcc + ";}" + "#the_first_color_number2 { background-color: #" + fcc + ";}" + "#the_second_color_number2 { background-color: #" + snc + ";}" + "</style>" + "<div id=';echo "''>";echo '</div>" + "';

echo "<textarea style='height:100px;width:500px;'";echo '>" + "/*style*/" + "&#013;" + "background-image: -moz-linear-gradient(top right, #" + fcc + " " + fcnc + "%, #" + snc + " " + snnc + "%);" + "/* IE 10 Consumer Preview */" + "&#013;" + "background-image: -ms-linear-gradient(top right, #" + fcc + " " + fcnc + "%, #" + snc + " " + snnc + "%);" + "&#013;" + "/* Opera */" + "&#013;" + "background-image: -o-linear-gradient(top right, #" + fcc + " " + fcnc + "%, #" + snc + " " + snnc + "%);" + "&#013;" + "/* Webkit (Safari/Chrome 10) */" + "&#013;" + "background-image: -webkit-gradient(linear, right top, left bottom, color-stop(0, #" + fcc + "), color-stop(1, #" + snc + ")); " + "&#013;" + "/* Webkit (Chrome 11+) */" + "&#013;" + "background-image: -webkit-linear-gradient(top right, #" + fcc + " " + fcnc + "%, #" + snc + " " + snnc + "%);" +  "&#013;" + "/* W3C Markup, IE10 Release Preview */" + "&#013;" + "background-image: linear-gradient(to bottom left, #" + fcc + " " + fcnc + "%, #" + snc + " " + snnc + "%);" +  "</textarea>" + "<div id=';echo "''>"; echo '</div>";';
echo "
			document.getElementById('out9').style.display ="; echo ' "block";';

echo '			return false;
		}
	</script>






</head>

<body>
    <form style="float:left;height:100%;width:350px;" action="" onsubmit="return test9()">

<div>
<div class="flap">Top-Right</div>	<!-- Value display 1 (green) -->
	<div class="display_holder" id="display_holder_9" >
		<!-- Default value: 80 -->
		<input type="text" class="value_display" id="the_first_color_number2" value="0" onfocus="blur(this);" />
	</div>	<!-- Horizontal slider 1 (green) -->
	<div class="horizontal_track" id="horizontal_track_9" >


		<div class="horizontal_slit" id="horizontal_slit_9" >&nbsp;</div>
		<!-- total movement: 100 pixels, scale: 1 [value/pixel],
			default position: 80 pixels, connected to value_display_1 -->
		<div onchange="return test5()"  class="horizontal_slider" id="horizontal_slider_9" style="left: 0px;"
			onmousedown="'; echo "slide(event, 'horizontal', 165, 0, 100, 101, 0, 'the_first_color_number2'"; echo ');" >&nbsp;</div>


	</div>


</div>



<div>

<div class="flap">Color</div>
<br>
<input onchange="return test9()" class="color {onImmediateChange:';echo "'updateInfo(this);'";echo '}" value="ffffff" style="font-size: 15pt;height:45px;background-color:white;width:200px;border: 2px solid #ccc" type="text" id="the_first_color2" />

<div class="flap">Bottom-Left</div>

	<!-- Value display 2 (blue)	-->
	<div class="display_holder" id="display_holder_91" >
		<!-- Default value: 35 -->


		<input type="text" class="value_display" id="the_second_color_number2" value="100" onfocus="blur(this);" />
	</div>	<!-- Horizontal slider 2 (blue) -->
	<div class="horizontal_track" id="horizontal_track_91" >
		<div class="horizontal_slit" id="horizontal_slit_91" >&nbsp;</div>
		<!-- total movement: 100 pixels, scale: 1 [value/pixel],
			default position: 35 pixels, connected to value_display_2 -->
		<div class="horizontal_slider" id="horizontal_slider_91" style="left: 33px;"
			onmousedown="slide(event, ';echo "'horizontal', 165, 0, 500, 101, 0, 'the_second_color_number2'"; echo ');">
			&nbsp;
		</div>
	</div>

</div>


<div class="flap">Color</div>
<br>
<input onchange="return test9()" class="color" value="61A0E8" style="font-size: 15pt;height:45px;background-color:white;width:200px;border: 2px solid #ccc" type="text" id="the_second_color2" />




         </form>
<div id="temple9" style="float:right;"><br><br><br><br><br><br><br><br><br><br><br><br>Your Text! :D</div>
    <div id="out9" style="float:right;">
    </div>
</body>






    </div>






    <div id="myDiv3" style="display:none">
 

 <script type="text/javascript">';
echo "	    function test10(){

			var fccd = document.getElementById('the_first_color3').value;
			var sncd = document.getElementById('the_second_color3').value;
			var fcncd = document.getElementById('the_first_color_number3').value;
			var snncd = document.getElementById('the_second_color_number3').value;";


			echo "document.getElementById('out10').innerHTML =";


echo ' "<style>#temple10" + "{" + "background-image: -moz-linear-gradient(top left, #" + fccd + " " + fcncd + "%, #" + sncd + " " + snncd + "%);" + "/* IE 10 Consumer Preview */" + "background-image: -ms-linear-gradient(top left, #" + fccd + " " + fcncd + "%, #" + sncd + " " + snncd + "%);" + "/* Opera */" + "background-image: -o-linear-gradient(top left, #" + fccd + " " + fcncd + "%, #" + sncd + " " + snncd + "%);" + "/* Webkit (Safari/Chrome 10) */" + "background-image: -webkit-gradient(linear, left top, right bottom, color-stop(0, #" + fccd + "), color-stop(1, #" + sncd + ")); " + "/* Webkit (Chrome 11+) */" + "background-image: -webkit-linear-gradient(top left, #" + fccd + " " + fcncd + "%, #" + sncd + " " + snncd + "%);" + "/* W3C Markup, IE10 Release Preview */" + "background-image: linear-gradient(to bottom right, #" + fccd + " " + fcncd + "%, #" + sncd + " " + snncd + "%);" +  "}" + "#horizontal_slider_101 { background-color: #" + sncd + ";}" + "#horizontal_slider_10 { background-color: #" + fccd + ";}" + "#the_first_color_number3 { background-color: #" + fccd + ";}" + "#the_second_color_number3 { background-color: #" + sncd + ";}" + "</style>" + "<div id=';echo "''>";echo '</div>" + "';

echo "<textarea style='height:100px;width:500px;'";echo '>" + "/*style*/" + "&#013;" + "background-image: -moz-linear-gradient(top left, #" + fccd + " " + fcncd + "%, #" + sncd + " " + snncd + "%);" + "/* IE 10 Consumer Preview */" + "&#013;" + "background-image: -ms-linear-gradient(top left, #" + fccd + " " + fcncd + "%, #" + sncd + " " + snncd + "%);" + "&#013;" + "/* Opera */" + "&#013;" + "background-image: -o-linear-gradient(top left, #" + fccd + " " + fcncd + "%, #" + sncd + " " + snncd + "%);" + "&#013;" + "/* Webkit (Safari/Chrome 10) */" + "&#013;" + "background-image: -webkit-gradient(linear, left top, right bottom, color-stop(0, #" + fccd + "), color-stop(1, #" + sncd + ")); " + "&#013;" + "/* Webkit (Chrome 11+) */" + "&#013;" + "background-image: -webkit-linear-gradient(top left, #" + fccd + " " + fcncd + "%, #" + sncd + " " + snncd + "%);" +  "&#013;" + "/* W3C Markup, IE10 Release Preview */" + "&#013;" + "background-image: linear-gradient(to bottom right, #" + fccd + " " + fcncd + "%, #" + sncd + " " + snncd + "%);" + "</textarea>" + "<div id=';echo "''>"; echo '</div>";';
echo "
			document.getElementById('out10').style.display ="; echo ' "block";';

echo '			return false;
		}
	</script>






</head>

<body>
    <form style="float:left;height:100%;width:350px;" action="" onsubmit="return test10()">

<div>
<div class="flap">Top-Left</div>	<!-- Value display 1 (green) -->
	<div class="display_holder" id="display_holder_10" >
		<!-- Default value: 80 -->
		<input type="text" class="value_display" id="the_first_color_number3" value="0" onfocus="blur(this);" />
	</div>	<!-- Horizontal slider 1 (green) -->
	<div class="horizontal_track" id="horizontal_track_10" >


		<div class="horizontal_slit" id="horizontal_slit_10" >&nbsp;</div>
		<!-- total movement: 100 pixels, scale: 1 [value/pixel],
			default position: 80 pixels, connected to value_display_1 -->
		<div onchange="return test10()"  class="horizontal_slider" id="horizontal_slider_10" style="left: 0px;"
			onmousedown="'; echo "slide(event, 'horizontal', 165, 0, 100, 101, 0, 'the_first_color_number3'"; echo ');" >&nbsp;</div>


	</div>



</div>

<div class="flap">Color</div>
<br>
<input onchange="return test10()" class="color {onImmediateChange:';echo "'updateInfo(this);'";echo '}" value="ffffff" style="font-size: 15pt;height:45px;background-color:white;width:200px;border: 2px solid #ccc" type="text" id="the_first_color3" />

<div>



<div class="flap">Bottom-Right</div>
	<!-- Value display 2 (blue)	-->
	<div class="display_holder" id="display_holder_101" >
		<!-- Default value: 35 -->


		<input type="text" class="value_display" id="the_second_color_number3" value="100" onfocus="blur(this);" />
	</div>	<!-- Horizontal slider 2 (blue) -->
	<div class="horizontal_track" id="horizontal_track_101" >

		<div class="horizontal_slit" id="horizontal_slit_101" >&nbsp;</div>
		<!-- total movement: 100 pixels, scale: 1 [value/pixel],
			default position: 35 pixels, connected to value_display_2 -->
		<div class="horizontal_slider" id="horizontal_slider_101" style="left: 33px;"
			onmousedown="slide(event, ';echo "'horizontal', 165, 0, 500, 101, 0, 'the_second_color_number3'"; echo ');">
			&nbsp;
		</div>
	</div>

</div>

<div class="flap">Color</div>
<br>
<input onchange="return test10()" class="color" value="E86DA2" style="font-size: 15pt;height:45px;background-color:white;width:200px;border: 2px solid #ccc" type="text" id="the_second_color3" />



         </form>
<div id="temple10" style="float:right;"><br><br><br><br><br><br><br><br><br><br><br><br>Your Text! :D</div>
    <div id="out10" style="float:right;">
    </div>
</body>






    </div>


</div>

';







echo "






<script>

/* This script and many more are available free online at
The JavaScript Source!! http://www.javascriptsource.com
Created by: Dustin Diaz | http://www.dustindiaz.com/ */

var Dom = {
  get: function(el) {
    if (typeof el === 'string') {
      return document.getElementById(el);
    } else {
      return el;
    }
  },
  add: function(el, dest) {
    var el = this.get(el);
    var dest = this.get(dest);
    dest.appendChild(el);

  },

  remove: function(el) {
    var el = this.get(el);
    el.parentNode.removeChild(el); 
    var il = this.get(il);
    il.parentNode.removeChild(il); 

  },


};

function delete_row(e)
{
    e.parentNode.parentNode.removeChild(e.parentNode);
}

var Event = {
  add: function() {
    if (window.addEventListener) {
      return function(el, type, fn) {
        Dom.get(el).addEventListener(type, fn, false);
      };
    } else if (window.attachEvent) {
      return function(el, type, fn) {
        var f = function() {
          fn.call(Dom.get(el), window.event);
        };
        Dom.get(el).attachEvent('on' + type, f);
      };
    }
  }()
};
Event.add(window, 'load', function() {
  var i = 0;
  Event.add('add-element', 'click', function() {
    var el = document.createElement('p');
    var il = document.createElement('sub');
    var pIdName = 'my'+i+'Div';
    var pIdNamex = 'my'+i+'Divx';
    el.setAttribute('id',pIdName);
    el.innerHTML = 'Remove This Element (' + ++i + ') <a id=";echo '"pIdNamex"';echo "href=";echo '"#"';echo "onclick=";echo '"delete_row(this)"';echo ">X</a> ';
    Dom.add(el, 'content');


  });







});

</script>
<script>
function updateInfo(color) {
	document.getElementById('info-r').value = color.rgb[0]*100 + '%';;
	document.getElementById('info-g').value = color.rgb[1]*100 + '%';;
	document.getElementById('info-b').value = color.rgb[2]*100 + '%';;
}
</script>

<script>

//---------------------------------+
//  CARPE  S l i d e r        1.3  |
//  2005 - 12 - 10                 |
//  By Tom Hermansson Snickars     |
//  Copyright CARPE Design         |
//  http://carpe.ambiprospect.com/ |
//---------------------------------+

// carpeGetElementByID: Cross-browser version of document.getElementById()
function carpeGetElementById(element)
{
	if (document.getElementById) element = document.getElementById(element);
	else if (document.all) element = document.all[element];
	else element = null;
	return element;
}
// carpeLeft: Cross-browser version of element.style.left
function carpeLeft(elmnt, pos)
{
	if (!(elmnt = carpeGetElementById(elmnt))) return 0;
	if (elmnt.style && (typeof(elmnt.style.left) == 'string')) {
		if (typeof(pos) == 'number') elmnt.style.left = pos + 'px';
		else {
			pos = parseInt(elmnt.style.left);
			if (isNaN(pos)) pos = 0;
		}
	}
	else if (elmnt.style && elmnt.style.pixelLeft) {
		if (typeof(pos) == 'number') elmnt.style.pixelLeft = pos;
		else pos = elmnt.style.pixelLeft;
	}
	return pos;
}
// carpeTop: Cross-browser version of element.style.top
function carpeTop(elmnt, pos)
{
	if (!(elmnt = carpeGetElementById(elmnt))) return 0;
	if (elmnt.style && (typeof(elmnt.style.top) == 'string')) {
		if (typeof(pos) == 'number') elmnt.style.top = pos + 'px';
		else {
			pos = parseInt(elmnt.style.top);
			if (isNaN(pos)) pos = 0;
		}
	}
	else if (elmnt.style && elmnt.style.pixelTop) {
		if (typeof(pos) == 'number') elmnt.style.pixelTop = pos;
		else pos = elmnt.style.pixelTop;
	}
	return pos;
}
// moveSlider: Handles slider and display while dragging
function moveSlider(evnt)
{
	var evnt = (!evnt) ? window.event : evnt; // The mousemove event
	if (mouseover) { // Only if slider is dragged
		x = pxLeft + evnt.screenX - xCoord // Horizontal mouse position relative to allowed slider positions
		y = pxTop + evnt.screenY - yCoord // Horizontal mouse position relative to allowed slider positions
		if (x > xMax) x = xMax // Limit horizontal movement
		if (x < 0) x = 0 // Limit horizontal movement
		if (y > yMax) y = yMax // Limit vertical movement
		if (y < 0) y = 0 // Limit vertical movement
		carpeLeft(sliderObj.id, x)  // move slider to new horizontal position
		carpeTop(sliderObj.id, y) // move slider to new vertical position
		sliderVal = x + y // pixel value of slider regardless of orientation
		sliderPos = (sliderObj.pxLen / sliderObj.valCount) * Math.round(sliderObj.valCount * sliderVal / sliderObj.pxLen)
		v = Math.round((sliderPos * sliderObj.scale + sliderObj.fromVal) * // calculate display value
			Math.pow(10, displayObj.dec)) / Math.pow(10, displayObj.dec)
		displayObj.value = v // put the new value in the slider display element
	test();
	test2();
	test33();
	test5();
	test7();
	test9();
	test10();
		return false
	}
	return
}
// moveSlider: Handles the start of a slider move.
function slide(evnt, orientation, length, from, to, count, decimals, display)
{
	if (!evnt) evnt = window.event;
	sliderObj = (evnt.target) ? evnt.target : evnt.srcElement; // Get the activated slider element.
	sliderObj.pxLen = length // The allowed slider movement in pixels.

	sliderObj.valCount = count ? count - 1 : length // Allowed number of values in the interval.
	displayObj = carpeGetElementById(display) // Get the associated display element.

	displayObj.dec = decimals // Number of decimals to be displayed.

	sliderObj.scale = (to - from) / length // Slider-display scale [value-change per pixel of movement].

	if (orientation == 'horizontal') { // Set limits for horizontal sliders.
		sliderObj.fromVal = from
		xMax = length
		yMax = 0
	}
	if (orientation == 'vertical') { // Set limits and scale for vertical sliders.
		sliderObj.fromVal = to
		xMax = 0
		yMax = length
		sliderObj.scale = -sliderObj.scale // Invert scale for vertical sliders. Higher is more.
	}
	pxLeft = carpeLeft(sliderObj.id) // Sliders horizontal position at start of slide.
	pxTop  = carpeTop(sliderObj.id) // Sliders vertical position at start of slide.
	xCoord = evnt.screenX // Horizontal mouse position at start of slide.
	yCoord = evnt.screenY // Vertical mouse position at start of slide.
	mouseover = true
	document.onmousemove = moveSlider // Start the action if the mouse is dragged.
	document.onmouseup = sliderMouseUp // Stop sliding.
}
// sliderMouseup: Handles the mouseup event after moving a slider.
// Snaps the slider position to allowed/displayed value. 
function sliderMouseUp()
{
	mouseover = false // Stop the sliding.
	v = (displayObj.value) ? displayObj.value : 0 // Find last display value.
	pos = (v - sliderObj.fromVal)/(sliderObj.scale) // Calculate slider position (regardless of orientation).


	if (yMax == 0) carpeLeft(sliderObj.id, pos) // Snap horizontal slider to corresponding display position.
	if (xMax == 0) carpeTop(sliderObj.id, pos) // Snap vertical slider to corresponding display position.
	if (document.removeEventListener) { // Remove event listeners from 'document' (Moz&co).
		document.removeEventListener('mousemove', moveSlider)
		document.removeEventListener('mouseup', sliderMouseUp)
	}
	else if (document.detachEvent) { // Remove event listeners from 'document' (IE&co).
		document.detachEvent('onmousemove', moveSlider)
		document.detachEvent('onmouseup', sliderMouseUp)
	}
}

</script>



";


echo'</div>




</div></body></center>';
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

#help-text3

{

font-size:32px;
font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
font-weight:100;
height:50px;
}

#help-text2

{
font-size:28px;
font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
font-weight:100;
height:25px;
}

</style>';
   
echo '<div class="icon32" style="float:none;text-align:left;" id="icon-options-general"></div><center><div id="help-text">LW Help</div></center>';
 echo '';
echo ' <p id="thank you"style="width:100%;background-color:#7ccadd;"><h3></h3></p>';

echo '
<div id="help-text3">Questions/Concerns/Suggestions?</div><div id="help-text2">Shoot us an email!</div>
';




echo ' <form style="width:400px;" method="post" action="';

echo $_SERVER['PHP_SELF'];

echo '?page=LgW-help" onSubmit="return validate(this);"> <center>
   
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
</form></center>';


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