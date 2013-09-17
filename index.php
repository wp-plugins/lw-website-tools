<?php
/*
Plugin Name: LW Website Tools
Plugin URI: 
Description: Provides users with three useful Wordpress and css tools.
Version: 2.0
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

<style>




#ele{
background-color: #797979;
color: #fff;
width: 300px;
height:100px;
cursor: move;
position: relative;
padding: 10px;
      }


.question {
z-index:99999;
height:50px;
width:50px;
color:lightgrey;
overflow:hidden;
position:absolute;
right:0px;
top:50px;

}

.question:hover {
';echo"";echo '
height:350px;
width:300px;
color:black;

background-color:white;
text-align:left;
z-index:2000;

 -moz-transition:width 0.3s, height 0.3s, background-color 0.3s, -moz-transform 0.3s;
    -webkit-transition:width 0.3s, height 0.3s, background-color 0.3s, -webkit-transform 0.3s;
    -o-transition:width 0.3s, height 0.3s, background-color 0.3s, -o-transform 0.3s;
    transition:width 0.3s, height 0.3s, background-color 0.3s, transform 0.3s;
}


.question textarea {
width:180px;
}
.question input {
width:140px;
}



#out textarea, #out1 textarea, #out2 textarea, #out3 textarea, #out4 textarea, #out5 textarea, #out6 textarea, #out7 textarea, #out8 textarea, #out10 textarea {
background-color: #fff; 
background-image: 
linear-gradient(90deg, transparent 79px, #abced4 79px, #abced4 81px, transparent 81px),
linear-gradient(#eee .1em, transparent .1em);
background-size: 100% 1.2em;
}


html

{
font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
'; echo "

 background-image: url(/wp-content/plugins/lw-website-tools/images/retina_wood.png);
height:100%;
width:100%;




";
echo '
';echo " 
}
#temple1 {
background-color: hsl(34, 53%, 82%);
background-image: repeating-linear-gradient(45deg, transparent 5px, hsla(197, 62%, 11%, 0.5) 5px, hsla(197, 62%, 11%, 0.5) 10px,                  
  hsla(5, 53%, 63%, 0) 10px, hsla(5, 53%, 63%, 0) 35px, hsla(5, 53%, 63%, 0.5) 35px, hsla(5, 53%, 63%, 0.5) 40px,
  hsla(197, 62%, 11%, 0.5) 40px, hsla(197, 62%, 11%, 0.5) 50px, hsla(197, 62%, 11%, 0) 50px, hsla(197, 62%, 11%, 0) 60px,                
  hsla(5, 53%, 63%, 0.5) 60px, hsla(5, 53%, 63%, 0.5) 70px, hsla(35, 91%, 65%, 0.5) 70px, hsla(35, 91%, 65%, 0.5) 80px,
  hsla(35, 91%, 65%, 0) 80px, hsla(35, 91%, 65%, 0) 90px, hsla(5, 53%, 63%, 0.5) 90px, hsla(5, 53%, 63%, 0.5) 110px,
  hsla(5, 53%, 63%, 0) 110px, hsla(5, 53%, 63%, 0) 120px, hsla(197, 62%, 11%, 0.5) 120px, hsla(197, 62%, 11%, 0.5) 140px       
  ),
repeating-linear-gradient(135deg, transparent 5px, hsla(197, 62%, 11%, 0.5) 5px, hsla(197, 62%, 11%, 0.5) 10px, 
  hsla(5, 53%, 63%, 0) 10px, hsla(5, 53%, 63%, 0) 35px, hsla(5, 53%, 63%, 0.5) 35px, hsla(5, 53%, 63%, 0.5) 40px,
  hsla(197, 62%, 11%, 0.5) 40px, hsla(197, 62%, 11%, 0.5) 50px, hsla(197, 62%, 11%, 0) 50px, hsla(197, 62%, 11%, 0) 60px,                
  hsla(5, 53%, 63%, 0.5) 60px, hsla(5, 53%, 63%, 0.5) 70px, hsla(35, 91%, 65%, 0.5) 70px, hsla(35, 91%, 65%, 0.5) 80px,
  hsla(35, 91%, 65%, 0) 80px, hsla(35, 91%, 65%, 0) 90px, hsla(5, 53%, 63%, 0.5) 90px, hsla(5, 53%, 63%, 0.5) 110px,
  hsla(5, 53%, 63%, 0) 110px, hsla(5, 53%, 63%, 0) 140px, hsla(197, 62%, 11%, 0.5) 140px, hsla(197, 62%, 11%, 0.5) 160px       
);
margin-bottom:10px;
height:200px;
width:200px;
font-size:50px;
/*LW-Website-Tools Box-Shadow*/
box-shadow: 5px 5px 35px 3px;
-webkit-box-shadow: 5px 5px 35px 3px;
-moz-box-shadow: 5px 5px 35px 3px;
}

#temple2 {
background-color:white;
background-image: linear-gradient(90deg, rgba(200,0,0,.5) 50%, transparent 50%),
linear-gradient(rgba(200,0,0,.5) 50%, transparent 50%);
background-size:50px 50px;
height:200px;
width:200px;
font-size:50px;
/*LW-Website-Tools Text-Shadow*/

text-shadow: 1px 5px 5px #000000;
filter: dropshadow(color=#000000, offx=1, offy=5);

}


#temple3 {
			background-color: #0ae;
			background-image: -webkit-gradient(linear, 0 0, 0 100%, color-stop(.5, rgba(255, 255, 255, .2)), color-stop(.5, transparent), to(transparent));
			background-image: -webkit-linear-gradient(rgba(255, 255, 255, .2) 50%, transparent 50%, transparent);
			background-image: -moz-linear-gradient(rgba(255, 255, 255, .2) 50%, transparent 50%, transparent);
			background-image: -ms-linear-gradient(rgba(255, 255, 255, .2) 50%, transparent 50%, transparent);
			background-image: -o-linear-gradient(rgba(255, 255, 255, .2) 50%, transparent 50%, transparent);
			background-image: linear-gradient(rgba(255, 255, 255, .2) 50%, transparent 50%, transparent);
height:200px;
width:200px;
/*LW-Website-Tools Border Radius Style*/

border-top-left-radius:50px;
border-top-right-radius:50px;
border-bottom-right-radius:50px;
border-bottom-left-radius:50px;

-moz-border-top-left-radius:50px;
-moz-border-top-right-radius:50px;
-moz-border-bottom-right-radius:50px;
-moz-border-bottom-left-radius:50px;

-webkit-border-top-left-radius:50px;
-webkit-border-top-right-radius:50px;
-webkit-border-bottom-right-radius:50px;
-webkit-border-bottom-left-radius:50px;
font-size:50px;
color:white;

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
height:200px;
width:200px;
font-size:50px;

}



#temple4 {
background-color:#269;
background-image: linear-gradient(white 2px, transparent 2px),
linear-gradient(90deg, white 2px, transparent 2px),
linear-gradient(rgba(255,255,255,.3) 1px, transparent 1px),
linear-gradient(90deg, rgba(255,255,255,.3) 1px, transparent 1px);
background-size:100px 100px, 100px 100px, 20px 20px, 20px 20px;
background-position:-2px -2px, -2px -2px, -1px -1px, -1px -1px;
height:200px;
width:200px;
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
height:200px;
width:200px;
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
height:200px;
width:200px;
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
height:200px;
width:200px;
font-size:50px;

}

";echo '

h2 {
    font-family: HelveticaNeue-Light, "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
    font-weight: 100;
}

#client5 {

    width: 50%;
}

#client4 {

    width: 50%;
}

#client3 {

    width: 50%;
}

#idone {

    width: 50%;
}

#client2 {
    width: 50%;
}

#client1 {
width:50%;
}

#help {
    height: 100%;
    width: 100%;
}

#yay1 {
    overflow: hidden;
    padding: 5px;
    width: 485px;
    font-family: Helvetica, sans-serif;
    font-size: 1.4em;
    margin: 0 0 10px;
    border: 2px solid #ccc;
}

#plugin-title {
    background-image: url(http://www.therecipeminute.com/header.png);
}

#yay1:focus {
    border: 2px solid #900;
}

#idone input,#contact-area textarea {
    padding: 5px;
    width: 200px;
    font-family: Helvetica, sans-serif;
    font-size: 1.4em;
    margin: 0 0 10px;
    border: 2px solid #ccc;
}

#idone textarea {
    height: 179px;
    width: 320px;
    border: 2px solid #ccc;
}

#idone textarea:focus,#contact-area input:focus {
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
    font-size: 1em;
    margin-left: 50px;
    font-family: HelveticaNeue-Light, "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
    font-weight: 200;
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



#key {
background-color:white;
float:left;
padding-left:15px;
padding-right:15px;
position:absolute;
top:0px;
right:50%;
margin-right:-130px;
height:0px;
overflow:hidden;
border:solid 5px white;
}

#key:hover {
height:300px;
}

.translucent_cover
{
position: fixed;
height: 100%;
width: 100%;
top: 0;
left: 0;
background: #606060;
-moz-opacity: 0.5;
opacity:.50;
filter: alpha(opacity=50);
z-index:0;
}

.top_block1, .top_block2, .top_block3, .top_block4, .top_block5
{
color:white;
position: fixed;
left: 50%;
top: 25%;
height: 300px; //adjust as per need
width: 400px; //adjust as per need
z-index: 1;
background: grey;
margin-left: -200px; // adjust as per need
margin-top: -150px;
border: 6px solid #f22f74;
border-radius: 10px 10px;
-moz-border-radius: 10px 10px;
padding: 15px;

}

.tool-button {
overflow:hidden;
margin:15px;
height:200px;
width:20%;
display:inline-block;
text-decoration:none;
/* Firefox */
-moz-transition: all 0.3s ease;
/* WebKit */
-webkit-transition: all 0.3s ease;
/* Opera */
-o-transition: all 0.3s ease;
/* Standard */
transition: all 0.3s ease;
background-repeat:no-repeat;
background-size:80%;

}



.tool-button:hover {



/*LW-Website-Tools Transform*/
-moz-transform: scale(1) rotate(0deg) translateX(0px) translateY(-15px) skewX(0deg) skewY(0deg);
-webkit-transform: scale(1) rotate(0deg) translateX(0px) translateY(-15px) skewX(0deg) skewY(0deg);
-0-transform: scale(1) rotate(0deg) translateX(0px) translateY(-15px) skewX(0deg) skewY(0deg);
-ms-transform: scale(1) rotate(0deg) translateX(0px) translateY(-15px) skewX(0deg) skewY(0deg);
transform: scale(1) rotate(0deg) translateX(0px) translateY(-15px) skewX(0deg) skewY(0deg);

/* Firefox */
-moz-transition: all 0.3s ease;
/* WebKit */
-webkit-transition: all 0.3s ease;
/* Opera */
-o-transition: all 0.3s ease;
/* Standard */
transition: all 0.3s ease;
}
';echo"



";echo'








.tool-button:active {
background-size:50%;

}




.pod {display:none}

@media screen and (max-device-width: 480px){
    /*--- iPhone only CSS here ---*/
#temple3 {

}
.pod {
display:block;
}

.comp {
display:none;
}


</style>';echo "

<script>
function close_pop()
{
document.getElementById('overlay1').style.visibility='hidden';
document.getElementById('top_block1').style.visibility='hidden';
}

function pop()
{
document.getElementById('overlay1').style.visibility='visible';
document.getElementById('top_block1').style.visibility='visible';
} 
</script>

<script>
function close_pop4()
{
document.getElementById('overlay1').style.visibility='hidden';
document.getElementById('top_block4').style.visibility='hidden';
}

function pop4()
{
document.getElementById('overlay1').style.visibility='visible';
document.getElementById('top_block4').style.visibility='visible';
} 
</script>

<script>
function close_pop5()
{
document.getElementById('overlay1').style.visibility='hidden';
document.getElementById('top_block5').style.visibility='hidden';
}

function pop5()
{
document.getElementById('overlay1').style.visibility='visible';
document.getElementById('top_block5').style.visibility='visible';
} 
</script>


";echo '



<script>
function close_pop2()
{
document.getElementById("overlay1").';echo "style.visibility='hidden';";echo '
document.getElementById("top_block2").';echo "style.visibility='hidden';
}
";echo '
function pop2()
{
document.getElementById("overlay1").';echo "style.visibility='visible';";echo '
document.getElementById("top_block2").';echo "style.visibility='visible';
} 
</script>

";echo '


<script>
function close_pop3()
{
document.getElementById("overlay1").';echo "style.visibility='hidden';";echo '
document.getElementById("top_block3").';echo "style.visibility='hidden';
}
";echo '
function pop3()
{
document.getElementById("overlay1").';echo "style.visibility='visible';";echo '
document.getElementById("top_block3").';echo "style.visibility='visible';
} 
</script>

";echo '

<div class="translucent_cover" id="overlay1" style="visibility: hidden;">
</div>

<div class="top_block1" id="top_block1" style="visibility: hidden;">

<div class="text_embross">
<b>SIMPLE POPUP</b>
</div>
<hr/>
<div class="black_text">

<form style="height:300px;width:100px;float:left;" onKeyUp="return test2();">
Top Left<br>
<input id="top_left" value="50" style="width:50px;" ></input><br>
Top Right<br>
<input id="top_right" value="50" style="width:50px;" ></input><br>
Bottom Left<br>
<input id="bottom_left" value="50" style="width:50px;" ></input><br>
Bottom Right<br>
<input id="bottom_right" value="50" style="width:50px;"></input><br>
</form>
<div id="temple3" style="float:right;"></div><div id="out">

<textarea style="border: 6px solid #f22f74;height:100px;width:400px;">
/*LW-Website-Tools Border Radius Style*/

border-top-left-radius:50px;
border-top-right-radius:50px;
border-bottom-right-radius:50px;
border-bottom-left-radius:50px;

-moz-border-top-left-radius:50px;
-moz-border-top-right-radius:50px;
-moz-border-bottom-right-radius:50px;
-moz-border-bottom-left-radius:50px;

-webkit-border-top-left-radius:50px;
-webkit-border-top-right-radius:50px;
-webkit-border-bottom-right-radius:50px;
-webkit-border-bottom-left-radius:50px;
</textarea>



</div>

</div>
<div align="right">

<input class="blue_button" onclick="close_pop()" type="button" value="Close" />
</div>
</div> 








<div class="top_block1" id="top_block2" style="visibility: hidden;">

<div class="text_embross">
<b>Box Shadow</b>
</div>
<hr/>
<div class="black_text">

<form style="height:300px;width:100px;float:left;" onKeyUp="return test();">


Horizontal Length<br>
<input id="horizontal_length" value="5" style="width:50px;" ></input><br>
Vertical Length<br>
<input id="vertical_length" value="5" style="width:50px;" ></input><br>
Blur Radius<br>
<input id="blur_radius" value="35" style="width:50px;" ></input><br>
Spread<br>
<input id="spread" value="3" style="width:50px;"></input><br>
</form>
<div id="temple1" style="float:right;"></div><div id="out1">

<textarea style="border: 6px solid #f22f74;height:100px;width:400px;">
/*LW-Website-Tools Box-Shadow*/
box-shadow: 5px 5px 35px 3px;
-webkit-box-shadow: 5px 5px 35px 3px;
-moz-box-shadow: 5px 5px 35px 3px;
</textarea>



</div>

</div>
<div align="right">
<input class="blue_button" onclick="close_pop2()" type="button" value="Close" />
</div>
</div> 









<div class="top_block1" id="top_block3" style="visibility: hidden;">

<div class="text_embross">
<b>Css Transform</b>
</div>
<hr/>
<div class="black_text">

<form style="height:300px;width:100px;float:left;" onKeyUp="return test33();">

Scale<br>
<input id="scale" value="1" style="width:50px;" ></input><br>
Rotate<br>
<input id="rotate" value="5" style="width:50px;" ></input><br>
Translate X<br>
<input id="translate_x" value="5" style="width:50px;" ></input><br>
Translate Y<br>
<input id="translate_y" value="5" style="width:50px;"></input><br>
Skew X<br>
<input id="skew_x" value="5" style="width:50px;" ></input><br>
Skew Y<br>
<input id="skew_y" value="5" style="width:50px;"></input><br>

</form>
<div id="temple4" style="float:right;"></div><div id="out2">

<textarea style="border: 6px solid #f22f74;height:100px;width:400px;">
/*LW-Website-Tools Transform*/
-moz-transform: scale(1) rotate(0deg) translateX(0px) translateY(0px) skewX(0deg) skewY(0deg);
-webkit-transform: scale(1) rotate(0deg) translateX(0px) translateY(0px) skewX(0deg) skewY(0deg);
-0-transform: scale(1) rotate(0deg) translateX(0px) translateY(0px) skewX(0deg) skewY(0deg);
-ms-transform: scale(1) rotate(0deg) translateX(0px) translateY(0px) skewX(0deg) skewY(0deg);
transform: scale(1) rotate(0deg) translateX(0px) translateY(0px) skewX(0deg) skewY(0deg);
</textarea>



</div>

</div>
<div align="right">
<input class="blue_button" onclick="close_pop3()" type="button" value="Close" />
</div>
</div> 





<div class="top_block1" id="top_block4" style="visibility: hidden;">

<div class="text_embross">
<b>Css Transform</b>
</div>
<hr/>
<div class="black_text">

<form style="height:300px;width:100px;float:left;" onKeyUp="return test5();">

X<br>
<input id="x" value="1" style="width:50px;" ></input><br>
Y<br>
<input id="y" value="5" style="width:50px;" ></input><br>
Blur<br>
<input id="blur" value="5" style="width:50px;" ></input><br>
Shadow Color<br>
<input onChange="return test5();" class="color" value="000000" style="font-size: 15pt;height:45px;background-color:white;width:50px;border: 2px solid #ccc" id="shadow_color" type="text" name="" />


</form>
<div id="temple2" style="float:right;color:black;"><br><br><br><br>Text! :D</div><div id="out3">

<textarea style="border: 6px solid #f22f74;height:100px;width:400px;">
/*LW-Website-Tools Text-Shadow*/

text-shadow: 5px 5px 5px #000000;
filter: dropshadow(color=#000000, offx=5, offy=5);
</textarea>



</div>

</div>
<div align="right">
<input class="blue_button" onclick="close_pop4()" type="button" value="Close" />
</div>
</div>










<div class="top_block1" id="top_block5" style="visibility: hidden;">

<div class="text_embross">
<b>Css Transform</b>
</div>
<hr/>
<div class="black_text">

<form style="height:300px;width:100px;float:left;" onKeyUp="return test7();">


Top<br>	
<input value="0" id="the_first_color_number"  style="width:50px;"></input><br>
Color
<br>
<input onchange="return test7()" class="color {onImmediateChange:';echo "'updateInfo(this);'";echo '}" value="ffffff" style="font-size: 10px;background-color:white;width:50px;border: 2px solid #ccc" type="text" id="the_first_color" /><br>
Bottom<br>
<input value="100" id="the_second_color_number" style="width:50px;"></input><br>
Color
<br>
<input onchange="return test7()" class="color" value="91E842" style="font-size: 10px;background-color:white;width:50px;border: 2px solid #ccc" type="text" id="the_second_color" />




</form>
<div id="temple7" style="float:right;color:black;"></div><div id="out4">

<textarea style="border: 6px solid #f22f74;height:100px;width:400px;">
/*LW-Website-Tools Gradient*/
/* Mozilla Firefox */
background-image: -moz-linear-gradient(top, #FFFFFF 13%, #91E842 100%);
/* IE 10 Consumer Preview */
background-image: -ms-linear-gradient(top, #FFFFFF 13%, #91E842 100%);
/* Opera */
background-image: -o-linear-gradient(top, #FFFFFF 13%, #91E842 100%);
/* Webkit (Safari/Chrome 10) */
background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #FFFFFF), color-stop(1, #91E842)); 
/* Webkit (Chrome 11+) */
background-image: -webkit-linear-gradient(top, #FFFFFF 13%, #91E842 100%);
/* W3C Markup, IE10 Release Preview */
background-image: linear-gradient(to bottom, #FFFFFF 13%, #91E842 100%);
</textarea>



</div>

</div>
<div align="right">
<input class="blue_button" onclick="close_pop5()" type="button" value="Close" />
</div>
</div>  



  <body onload="move_init()">
<div class="question" onmousedown="_move_item(this);"> <a class="help text" href="admin.php?page=LgW-settings"><img src="/wp-content/plugins/lw-website-tools/images/contact.png"></a><br><sub>Questions/Concerns/Suggestions?<br>
Shoot us an email!</sub></center><form method="post" action="';

echo $_SERVER['PHP_SELF'];

echo '?page=LgW-settings" onSubmit="return validate(this);"> <center>
   
   <center> <fieldset id="user-details">
  <label for="name">Name *</label>
  <input type="text" name="name" id="name" value="" required="required" /><br/>
     
  <label for="email">Email *</label>
  <input type="email" name="email" id="email" value="" required="required"  /> <br/>
     
  <label for="subject">Subject *</label>
  <input type="text" name="subject" id="subject" value="" required="required" /><br/>
   
  <label for="message">Message </label><br>
  <textarea name="message" id="message" rows="0" cols="0"></textarea><br/>
   
  <input type="submit" value="Send Message" onclick="myAwesomeFunction()" name="submit" id="submit" class="submit" style="width:100px;" />
    </fieldset></center>
     (Message automatically sends after submitting)
</form></center>';


 echo '</div>';
 echo '
  </body>


<script>
function myAwesomeFunction()
{
alert("Your message has been sent! Thank you! and we will reply within the next 48 hours!");
}
</script>


<body><div id="main-body" style="margin:5%;">
<a href="javascript:void(0)" onclick="pop()"><div class="tool-button" style="background-image:url(';echo "'/wp-content/plugins/lw-website-tools/images/border-radius.png'";echo ');background-position:center center;"></div></a> 


<a href="javascript:void(0)" onclick="pop2()"><div style="background-image:url(';echo "'/wp-content/plugins/lw-website-tools/images/box-shadow.png'";echo ');;background-position:center center;" class="tool-button"></div></a> 

<a href="javascript:void(0)" onclick="pop3()"><div class="tool-button" style="background-image:url(';echo "'/wp-content/plugins/lw-website-tools/images/css-transform.png'";echo ');background-position:center center;"></div></a> 

<a href="javascript:void(0)" onclick="pop4()" ><div class="tool-button" style="background-image:url(';echo "'/wp-content/plugins/lw-website-tools/images/text-shadow.png'";echo ');background-position:center center;"></div></a> 

<a href="javascript:void(0)" onclick="pop5()"><div style=" background-image:url(';echo "'/wp-content/plugins/lw-website-tools/images/background-gradients.png'";echo ');background-position:center center;" class="tool-button"></div></a> 
</div>
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

echo '






';

echo '<style>




</style>



<div id="client1" style="display:none;"><script type="text/javascript">';
echo "	    function test2(){

			var tl = document.getElementById('top_left').value;
			var tr = document.getElementById('top_right').value;
			var bl = document.getElementById('bottom_left').value;
			var br = document.getElementById('bottom_right').value;
";


			echo "document.getElementById('out').innerHTML =";


echo ' "<style>#temple3" + "{" + "border-top-left-radius:" + tl + "px;border-top-right-radius:" + tr + "px;border-bottom-right-radius:" + br + "px;border-bottom-left-radius:" + bl + "px;-moz-border-top-left-radius:" + tl + "px;-moz-border-top-right-radius:" + tr + "px;-moz-border-bottom-right-radius:" + br + "px;-moz-border-bottom-left-radius:" + bl + "px;-webkit-border-top-left-radius:" + tl + "px;-webkit-border-top-right-radius:" + tr + "px;-webkit-border-bottom-right-radius:" + br + "px;-webkit-border-bottom-left-radius:" + bl + "px;" + "}" + "</style>" + "<div id=';echo "''>";echo '</div>" + "';

echo "<textarea style='border: 6px solid #f22f74;height:100px;width:400px;'";

echo '>" + "/*LW-Website-Tools Border Radius Style*/" + "&#013;" + "&#013;" + "border-top-left-radius:" + tl + "px;" + "&#013;" + "border-top-right-radius:" + tr + "px;" + "&#013;" + "border-bottom-right-radius:" + br + "px;" + "&#013;" + "border-bottom-left-radius:" + bl + "px;" + "&#013;" + "&#013;" + "-moz-border-top-left-radius:" + tl + "px;" + "&#013;" + "-moz-border-top-right-radius:" + tr + "px;" + "&#013;" + "-moz-border-bottom-right-radius:" + br + "px;" + "&#013;" + "-moz-border-bottom-left-radius:" + bl + "px;" + "&#013;" + "&#013;" + "-webkit-border-top-left-radius:" + tl + "px;" + "&#013;" + "-webkit-border-top-right-radius:" + tr + "px;" + "&#013;" + "-webkit-border-bottom-right-radius:" + br + "px;" + "&#013;" + "-webkit-border-bottom-left-radius:" + bl + "px;" + "</textarea>" + "<div id=';
echo "''>"; echo '</div>";';
echo "
			document.getElementById('out').style.display ="; echo ' "block";';

echo '			return false;
		}
	</script>

	<script type="text/javascript" src="/wp-content/plugins/lw-website-tools/js/jscolor.js"></script>

</head>

<body>
<div style="background-color:purple;padding:10px;">
<form style="height:300px;width:100px;float:left;" onChange="return test2();">

Top Left
<input id="top_left" ></input>
Top Right
<input id="top_right"></input>
Bottom Left
<input id="bottom_left"></input>
Bottom Right
<input id="bottom_right"></input>
</form>
<div id="temple3" style="float:right;"></div><div id="out"></div>






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


			echo "document.getElementById('out1').innerHTML =";


echo ' "<style>#temple1" + "{" + "box-shadow:" + hl + "px" + " " + vl + "px" + " " + br + "px" + " " + sp + "px;" + "-webkit-box-shadow:" + hl + "px" + " " + vl + "px" + " " + br + "px" + " " + + sp + "px;" + "-moz-box-shadow" + hl + "px" + " " + vl + "px" + " " + br + "px" + " " + sp + "px;" + "}</style>" + "<div id=';echo "''>";echo '</div>" + "';

echo "<textarea style='border: 6px solid #f22f74;height:100px;width:400px;'";

echo '>" + "/*LW-Website-Tools Box-Shadow*/" + "&#013" + "box-shadow: " + hl + "px" + " " + vl + "px" + " " + br + "px" + " " + sp + "px;" + "&#013" + "-webkit-box-shadow: " + hl + "px" + " " + vl + "px" + " " + br + "px" + " " + sp + "px;" + "&#013" + "-moz-box-shadow: " + hl + "px" + " " + vl + "px" + " " + br + "px" + " " + sp + "px;" + "</textarea>" + "<div id=';
echo "''>"; echo '</div>";';
echo "
			document.getElementById('out1').style.display ="; echo ' "block";';

echo '			return false;
		}
	</script>
</head>

<body>
<div style="background-color:purple;padding:10px;float:right;">

<div id="temple1"></div><div id="out1"></div>
</div>

    <form action="" style="background-color:white;float:left;padding:15px;;" onsubmit="return test()">

Horizontal Length:
		<!-- Default value: 80 -->
		<input type="text" class="value_display" id="horizontal_length" value="5" onfocus="blur(this);" />
	<!-- Horizontal slider 1 (green) -->
	<div class="horizontal_track" id="horizontal_track_11" >
		<div class="horizontal_slit" id="horizontal_slit_11" >&nbsp;</div>
		<!-- total movement: 100 pixels, scale: 1 [value/pixel],
			default position: 80 pixels, connected to value_display_1 -->
		<div onchange="return test5()" class="horizontal_slider" id="horizontal_slider_11" style="left: 5px;"
			onmousedown="'; echo "slide(event, 'horizontal', 65, 0, 100, 101, 0, 'horizontal_length'"; echo ');" >&nbsp;</div>


	</div>


Vertical Length:		<!-- Default value: 35 -->
		<input type="text" class="value_display" id="vertical_length" value="5" onfocus="blur(this);" />
		<!-- Horizontal slider 2 (blue) -->
	<div class="horizontal_track" id="horizontal_track_21" >
		<div class="horizontal_slit" id="horizontal_slit_21" >&nbsp;</div>
		<!-- total movement: 100 pixels, scale: 1 [value/pixel],
			default position: 35 pixels, connected to value_display_2 -->
		<div class="horizontal_slider" id="horizontal_slider_21" style="left: 5px;"
			onmousedown="slide(event, ';echo "'horizontal', 65, 0, 100, 101, 0, 'vertical_length'"; echo ');">
			&nbsp;
		</div>
	</div>


Blur		<!-- Default value: 40 -->
		<input type="text" class="value_display" id="blur_radius" value="5" onfocus="blur(this);" />

	<!-- Horizontal slider 3 (red) -->
	<div class="horizontal_track" id="horizontal_track_31" >
		<div class="horizontal_slit" id="horizontal_slit_31" >&nbsp;</div>
		<!-- Total movement: 100 pixels, Scale: 1 [value/pixel],
			Default position: 40 pixels, Connected to value_display_3 -->
		<div class="horizontal_slider" id="horizontal_slider_31" style="left: 5px;"
			onmousedown="slide(event, ';echo "'horizontal', 65, 0, 100, 101, 0, 'blur_radius'";echo ');">&nbsp;</div>
	</div>

Spread		<!-- Default value: 40 -->
		<input type="text" class="value_display" id="spread" value="5" onfocus="blur(this);" />

	<!-- Horizontal slider 5 (red) -->
	<div class="horizontal_track" id="horizontal_track_51" >
		<div class="horizontal_slit" id="horizontal_slit_51" >&nbsp;</div>
		<!-- Total movement: 100 pixels, Scale: 1 [value/pixel],
			Default position: 40 pixels, Connected to value_display_3 -->
		<div class="horizontal_slider" id="horizontal_slider_51" style="left: 5px;"
			onmousedown="slide(event, ';echo "'horizontal', 65, 0, 100, 101, 0, 'spread'";echo ');">&nbsp;</div>
	</div>
    </form>


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


			echo "document.getElementById('out2').innerHTML =";


echo ' "<style>#temple4" + "{" + "" + "-moz-transform: scale(" + se + ") rotate(" + re + "deg) translateX(" + tx + "px) translateY(" + ty + "px) skewX(" + sx + "deg) skewY(" + sy + "deg);" + "-webkit-transform: scale(" + se + ") rotate(" + re + "deg) translateX(" + tx + "px) translateY(" + ty + "px) skewX(" + sx + "deg) skewY(" + sy + "deg);" + "-0-transform: scale(" + se + ") rotate(" + re + "deg) translateX(" + tx + "px) translateY(" + ty + "px) skewX(" + sx + "deg) skewY(" + sy + "deg);" + "-ms-transform: scale(" + se + ") rotate(" + re + "deg) translateX(" + tx + "px) translateY(" + ty + "px) skewX(" + sx + "deg) skewY(" + sy + "deg);" + "transform: scale(" + se + ") rotate(" + re + "deg) translateX(" + tx + "px) translateY(" + ty + "px) skewX(" + sx + "deg) skewY(" + sy + "deg);" + "}</style>" + "<div id=';echo "''>";echo '</div><br>" + "';

echo "<textarea style='border: 6px solid #f22f74;height:100px;width:400px;'";

echo '>" + "/*LW-Website-Tools Transform*/" + "&#013;" + "-moz-transform: scale(" + se + ") rotate(" + re + "deg) translateX(" + tx + "px) translateY(" + ty + "px) skewX(" + sx + "deg) skewY(" + sy + "deg);" + "&#013;" + "-webkit-transform: scale(" + se + ") rotate(" + re + "deg) translateX(" + tx + "px) translateY(" + ty + "px) skewX(" + sx + "deg) skewY(" + sy + "deg);" + "&#013;" + "-0-transform: scale(" + se + ") rotate(" + re + "deg) translateX(" + tx + "px) translateY(" + ty + "px) skewX(" + sx + "deg) skewY(" + sy + "deg);" + "&#013;" + "-ms-transform: scale(" + se + ") rotate(" + re + "deg) translateX(" + tx + "px) translateY(" + ty + "px) skewX(" + sx + "deg) skewY(" + sy + "deg);" + "&#013;" + "transform: scale(" + se + ") rotate(" + re + "deg) translateX(" + tx + "px) translateY(" + ty + "px) skewX(" + sx + "deg) skewY(" + sy + "deg);"+ "</textarea>" + "<div id=';
echo "''>"; echo '</div>";';
echo "
			document.getElementById('out2').style.display ="; echo ' "block";';

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
<div style="background-color:purple;padding:10px;float:right;">
<div id="temple4"></div><div id="out2"></div>
</div>
    <form  style="background-color:white;float:left;padding:15px;" action="" onsubmit="return test33()">

Scale
		<!-- Default value: 80 -->
		<input type="text" class="value_display" id="scale" value="1" onfocus="blur(this);" />


	<!-- Horizontal slider 1 (green) -->
	<div class="horizontal_track" id="horizontal_track_13" >
		<div class="horizontal_slit" id="horizontal_slit_13" >&nbsp;</div>
		<!-- total movement: 100 pixels, scale: 1 [value/pixel],
			default position: 80 pixels, connected to value_display_1 -->


		<div onchange="return test5()" class="horizontal_slider" id="horizontal_slider_13" style="left: 35px;"
			onmousedown="'; echo "slide(event, 'horizontal', 65, 0, 2, 101, 1, 'scale'"; echo ');" >&nbsp;</div>
	</div>


Rotate
		<!-- Default value: 35 -->
		<input type="text" class="value_display" id="rotate" value="0" onfocus="blur(this);" />


	<!-- Horizontal slider 2 (blue) -->
	<div class="horizontal_track" id="horizontal_track_23" >
		<div class="horizontal_slit" id="horizontal_slit_23" >&nbsp;</div>
		<!-- total movement: 100 pixels, scale: 1 [value/pixel],
			default position: 35 pixels, connected to value_display_2 -->
		<div class="horizontal_slider" id="horizontal_slider_23" style="left: 0px;"
			onmousedown="slide(event, ';echo "'horizontal', 65, 0, 360, 361, 0, 'rotate'"; echo ');">
			&nbsp;
		</div>
	</div>


Translate X		<!-- Default value: 40 -->
		<input type="text" class="value_display" id="translate_x" value="0" onfocus="blur(this);" />

	<!-- Horizontal slider 3 (red) -->
	<div class="horizontal_track" id="horizontal_track_33" >
		<div class="horizontal_slit" id="horizontal_slit_33" >&nbsp;</div>
		<!-- Total movement: 100 pixels, Scale: 1 [value/pixel],
			Default position: 40 pixels, Connected to value_display_3 -->
		<div class="horizontal_slider" id="horizontal_slider_33" style="left: 0px;"
			onmousedown="slide(event, ';echo "'horizontal', 65, 0, 100, 101, 0, 'translate_x'";echo ');">&nbsp;</div>
	</div>

Translate Y
		<!-- Default value: 40 -->
		<input type="text" class="value_display" id="translate_y" value="0" onfocus="blur(this);" />

	<!-- Horizontal slider 5 (red) -->
	<div class="horizontal_track" id="horizontal_track_53" >
		<div class="horizontal_slit" id="horizontal_slit_53" >&nbsp;</div>
		<!-- Total movement: 100 pixels, Scale: 1 [value/pixel],
			Default position: 40 pixels, Connected to value_display_3 -->
		<div class="horizontal_slider" id="horizontal_slider_53" style="left: 0px;"
			onmousedown="slide(event, ';echo "'horizontal', 65, 0, 100, 101, 0, 'translate_y'";echo ');">&nbsp;</div>
	</div>

Skew X		<!-- Default value: 40 -->
		<input type="text" class="value_display" id="skew_x" value="0" onfocus="blur(this);" />

	<!-- Horizontal slider 5 (red) -->
	<div class="horizontal_track" id="horizontal_track_63" >
		<div class="horizontal_slit" id="horizontal_slit_63" >&nbsp;</div>
		<!-- Total movement: 100 pixels, Scale: 1 [value/pixel],
			Default position: 40 pixels, Connected to value_display_3 -->
		<div class="horizontal_slider" id="horizontal_slider_63" style="left: 0px;"
			onmousedown="slide(event, ';echo "'horizontal', 65, 0, 100, 101, 0, 'skew_x'";echo ');">&nbsp;</div>
	</div>

Skew Y		<!-- Default value: 40 -->
		<input type="text" class="value_display" id="skew_y" value="0" onfocus="blur(this);" />

	<!-- Horizontal slider 5 (red) -->
	<div class="horizontal_track" id="horizontal_track_73" >
		<div class="horizontal_slit" id="horizontal_slit_73" >&nbsp;</div>
		<!-- Total movement: 100 pixels, Scale: 1 [value/pixel],
			Default position: 40 pixels, Connected to value_display_3 -->
		<div class="horizontal_slider" id="horizontal_slider_73" style="left: 0px;"
			onmousedown="slide(event, ';echo "'horizontal', 65, 0, 100, 101, 0, 'skew_y'";echo ');">&nbsp;</div>
	</div>


    </form>



</body>
</div>




<div id="client4" style="display:none;">



';


echo '



<style>




	

</style>

'; echo '




<script type="text/javascript">
';
echo "	    function test5(){

			var hl = document.getElementById('x').value;
			var vl = document.getElementById('y').value;
			var bl = document.getElementById('blur').value;
			var sc = document.getElementById('shadow_color').value;";


			echo "document.getElementById('out3').innerHTML =";


echo ' "<style>#temple2" + "{" + "" + "text-shadow: " + hl + "px " + vl + "px " + bl + "px #" + sc + ";" + "filter: dropshadow(color=#" + sc + ", offx=" + hl + ", offy=" + vl + ");" + "}" + "</style>" + "<div id=';echo "'' style='color:white;'>";echo '</div><br>" + "';


echo "<textarea style='border: 6px solid #f22f74;height:100px;width:400px;'";

echo '>" + "/*LW-Website-Tools Text-Shadow*/" + "&#013;" + "&#013;" + "text-shadow: " + hl + "px " + vl + "px " + bl + "px #" + sc + ";" + "&#013;" + "filter: dropshadow(color=#" + sc + ", offx=" + hl + ", offy=" + vl + ");" + "</textarea>" + "<div id=';
echo "''>"; echo '</div>";';
echo "
			document.getElementById('out3').style.display ="; echo ' "block";';

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


    <form action="" style="float:left;height:100%;" onsubmit="return test5()">

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
    <div id="out3"style="float:right;"></div>
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


			echo "document.getElementById('out4').innerHTML =";


echo ' "<style>#temple7" + "{" + "background-image: -moz-linear-gradient(top, #" + fc + " " + fcn + "%, #" + sn + " " + snn + "%);" +  "}" + "#horizontal_slider_71 { background-color: #" + sn + ";}" + "#horizontal_slider_7 { background-color: #" + fc + ";}" + "#the_first_color_number { background-color: #" + fc + ";}" + "#the_second_color_number { background-color: #" + sn + ";}" + "/* IE 10 Consumer Preview */" + "background-image: -ms-linear-gradient(top, #" + fc + " " + fcn + "%, #" + sn + " " + snn + "%);" + "/* Opera */" + "background-image: -o-linear-gradient(top, #" + fc + " " + fcn + "%, #" + sn + " " + snn + "%);" + "/* Webkit (Safari/Chrome 10) */" + "background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #" + fc + "), color-stop(1, #" + sn + ")); " + "/* Webkit (Chrome 11+) */" + + "background-image: -webkit-linear-gradient(top, #" + fc + " " + fcn + "%, #" + sn + " " + snn + "%);" + "/* W3C Markup, IE10 Release Preview */" + + "background-image: linear-gradient(to bottom, #" + fc + " " + fcn + "%, #" + sn + " " + snn + "%);" + "</style>" + "<div id=';echo "''>";echo '</div>" + "';

echo "<textarea style='border: 6px solid #f22f74;height:100px;width:400px;'";echo '>" + "/*LW-Website-Tools Gradient*/" + "&#013;" + "/* Mozilla Firefox */" + "&#013;" + "background-image: -moz-linear-gradient(top, #" + fc + " " + fcn + "%, #" + sn + " " + snn + "%);" + "&#013;" + "/* IE 10 Consumer Preview */" + "&#013;" + "background-image: -ms-linear-gradient(top, #" + fc + " " + fcn + "%, #" + sn + " " + snn + "%);" + "&#013;" + "/* Opera */" + "&#013;" + "background-image: -o-linear-gradient(top, #" + fc + " " + fcn + "%, #" + sn + " " + snn + "%);" + "&#013;" + "/* Webkit (Safari/Chrome 10) */" + "&#013;" + "background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #" + fc + "), color-stop(1, #" + sn + ")); " + "&#013;" + "/* Webkit (Chrome 11+) */" + "&#013;" + "background-image: -webkit-linear-gradient(top, #" + fc + " " + fcn + "%, #" + sn + " " + snn + "%);" +  "&#013;" + "/* W3C Markup, IE10 Release Preview */" + "&#013;" + "background-image: linear-gradient(to bottom, #" + fc + " " + fcn + "%, #" + sn + " " + snn + "%);" + "</textarea>" + "<div id=';echo "''>"; echo '</div>";';
echo "
			document.getElementById('out4').style.display ="; echo ' "block";';

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
    <div id="out4" style="float:right;">
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

echo "<textarea style='height:100px;width:500px;'";echo '>" + "/*LW-Website-Tools Gradient*/" + "&#013;" + "background-image: -moz-linear-gradient(top right, #" + fcc + " " + fcnc + "%, #" + snc + " " + snnc + "%);" + "/* IE 10 Consumer Preview */" + "&#013;" + "background-image: -ms-linear-gradient(top right, #" + fcc + " " + fcnc + "%, #" + snc + " " + snnc + "%);" + "&#013;" + "/* Opera */" + "&#013;" + "background-image: -o-linear-gradient(top right, #" + fcc + " " + fcnc + "%, #" + snc + " " + snnc + "%);" + "&#013;" + "/* Webkit (Safari/Chrome 10) */" + "&#013;" + "background-image: -webkit-gradient(linear, right top, left bottom, color-stop(0, #" + fcc + "), color-stop(1, #" + snc + ")); " + "&#013;" + "/* Webkit (Chrome 11+) */" + "&#013;" + "background-image: -webkit-linear-gradient(top right, #" + fcc + " " + fcnc + "%, #" + snc + " " + snnc + "%);" +  "&#013;" + "/* W3C Markup, IE10 Release Preview */" + "&#013;" + "background-image: linear-gradient(to bottom left, #" + fcc + " " + fcnc + "%, #" + snc + " " + snnc + "%);" +  "</textarea>" + "<div id=';echo "''>"; echo '</div>";';
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

echo "<textarea style='height:100px;width:500px;'";echo '>" + "/*LW-Website-Tools Gradient*/" + "&#013;" + "background-image: -moz-linear-gradient(top left, #" + fccd + " " + fcncd + "%, #" + sncd + " " + snncd + "%);" + "/* IE 10 Consumer Preview */" + "&#013;" + "background-image: -ms-linear-gradient(top left, #" + fccd + " " + fcncd + "%, #" + sncd + " " + snncd + "%);" + "&#013;" + "/* Opera */" + "&#013;" + "background-image: -o-linear-gradient(top left, #" + fccd + " " + fcncd + "%, #" + sncd + " " + snncd + "%);" + "&#013;" + "/* Webkit (Safari/Chrome 10) */" + "&#013;" + "background-image: -webkit-gradient(linear, left top, right bottom, color-stop(0, #" + fccd + "), color-stop(1, #" + sncd + ")); " + "&#013;" + "/* Webkit (Chrome 11+) */" + "&#013;" + "background-image: -webkit-linear-gradient(top left, #" + fccd + " " + fcncd + "%, #" + sncd + " " + snncd + "%);" +  "&#013;" + "/* W3C Markup, IE10 Release Preview */" + "&#013;" + "background-image: linear-gradient(to bottom right, #" + fccd + " " + fcncd + "%, #" + sncd + " " + snncd + "%);" + "</textarea>" + "<div id=';echo "''>"; echo '</div>";';
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
 echo '<div style="padding-top:20px;height:100%;width:100%;" id="help">';

    // Render the HTML for the Help page or include a file that does

echo '<h4>
<div id="count2" align="center"></div>

<script>

/*
Count down until any date script-
By JavaScript Kit (www.javascriptkit.com)
Over 200+ free scripts here!
*/


//change the text below to reflect your own,
var before="next update!"
var after="New update Available!"
var montharray=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec")

function countdown(yr,m,d){
theyear=yr;themonth=m;theday=d
var today=new Date()
var todayy=today.getYear()
if (todayy < 1000)
todayy+=1900
var todaym=today.getMonth()
var todayd=today.getDate()
var todayh=today.getHours()
var todaymin=today.getMinutes()
var todaysec=today.getSeconds()
var todaystring=montharray[todaym]+" "+todayd+", "+todayy+" "+todayh+":"+todaymin+":"+todaysec
futurestring=montharray[m-1]+" "+d+", "+yr
dd=Date.parse(futurestring)-Date.parse(todaystring)
dday=Math.floor(dd/(60*60*1000*24)*1)
dhour=Math.floor((dd%(60*60*1000*24))/(60*60*1000)*1)
dmin=Math.floor(((dd%(60*60*1000*24))%(60*60*1000))/(60*1000)*1)
dsec=Math.floor((((dd%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1)


var y=document.getElementById("count2");


if(dday<0&&dhour<0&&dmin<0&&dsec<1){
y.innerHTML=after
return
}
else
y.innerHTML=""+dday+ " days, "+dhour+" hours "+dmin+" minutes "+dsec+" seconds <br> until "+before
setTimeout("countdown(theyear,themonth,theday)",1000)
}
//enter the count down date using the format year/month/day
countdown(2013,5,10)
</script>
</h4>

<center><div><style>';echo "html

{


 background-image: url(/wp-content/plugins/lw-website-tools/images/retina_wood.png);
height:100%;
width:100%;





}
.help{background-color:transparent;

}

.shorty {
font-size:18px;
width:700px;
background-color:white;
background-image: 
linear-gradient(90deg, transparent 79px, #abced4 79px, #abced4 81px, transparent 81px),
linear-gradient(#eee .1em, transparent .1em);
background-size: 100% 1.2em;
}

#myDiv1 {

width:700px;
background-color:white;
background-image: 
linear-gradient(90deg, transparent 79px, #abced4 79px, #abced4 81px, transparent 81px),
linear-gradient(#eee .1em, transparent .1em);
background-size: 100% 1.2em;
transition:box-shadow 0.3s;
}

#myDiv1:hover {
/*LW-Website-Tools Box-Shadow*/
box-shadow: 5px 30px 5px 5px;
-webkit-box-shadow: 5px 30px 5px 5px;
-moz-box-shadow: 5px 30px 5px 5px;
}

.submit {

background: rgb(210,255,82); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(210,255,82,1) 0%, rgba(145,232,66,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(210,255,82,1)), color-stop(100%,rgba(145,232,66,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(210,255,82,1) 0%,rgba(145,232,66,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(210,255,82,1) 0%,rgba(145,232,66,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(210,255,82,1) 0%,rgba(145,232,66,1) 100%); /* IE10+ */
background: linear-gradient(to bottom,  rgba(210,255,82,1) 0%,rgba(145,232,66,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d2ff52', endColorstr='#91e842',GradientType=0 ); /* IE6-9 */

";echo '



}


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

input:focus {
border: 2px solid #900;
}

#help textarea:focus, #help input:focus, input:focus {
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
background-color:#55b5ed;
font-size:32px;
font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
font-weight:100;
padding:5px;
height:32px;
}

#help-text2

{
background-color:#55b5ed;
font-size:28px;
font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
font-weight:100;
height:28px;
margin-bottom:5px;
}

</style>';
   
echo '<div class="icon32" style="float:none;text-align:left;" id="icon-options-general"></div><center><div id="help-text">Help</div><br>

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
 <a class="help text" href="#" OnClick="MyFunction(';echo "'myDiv1'";echo ');"><img src="/wp-content/plugins/lw-website-tools/images/contact.png"></a><a class="helptext" href="#" OnClick="MyFunction(';echo "'myDiv2'";echo ');"><img src="/wp-content/plugins/lw-website-tools/images/shortcodes.png"></a>


    <br/>

<style>
.helptext {
text-decoration:none;
color:grey;
font-size:20px;
}
</style>


</center>';
 echo '';
echo ' <div id="myDiv1" style="display:none;"><p id="thank you"style="width:100%;"><h3></h3></p>';

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

  <label for="subject">Subject *</label>
  <input type="text" name="subject" id="subject" value="" required="required" /><br/>
   
  <label for="message">Message </label>
  <textarea name="message" id="message" rows="0" cols="0"></textarea><br/>
   
  <input type="submit" value="Send Message" onsubmit="thank()" name="submit" id="submit" class="submit" style="width:220px;" />
    </fieldset>
     (Message automatically sends after submitting)
</form></center>';


 echo '</div>


<center>

<div id="myDiv2" style="width:750px;display:none;">

<h1>Shortcodes</h1><br>



<textarea class="shorty">&#013; - [lradius_tool] &#013;&#013;- [lbox_shadow] &#013;&#013;- [lcss_transform] &#013;&#013;- [ltext_shadow] &#013;&#013;- [lcss_gradient] </textarea>



</div>


</center>

<div id="myDiv3" style="display:none;">
</div>




</div></center></div>





';






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
 $message = "Name : ".$_POST['name']."\nEmail : ".$from."\n\nSubject: ".$_POST['subject']."\n\nMessage : ".$message;
 $headers = "From:" . $from;
 mail($to,$subject,$message,$headers);

return false;
}



class RandomPostWidget extends WP_Widget
{
  function RandomPostWidget()
  {
    $widget_ops = array('classname' => 'WebsiteToolsWidget', 'description' => 'Displays all of the Website tools in a single Widget' );
    $this->WP_Widget('RandomPostWidget', 'Website Tools Widget', $widget_ops);
  }
 
  function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
    $title = $instance['title'];
?>
  <p><label for="<?php echo $this->get_field_id('title'); ?>">Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label></p>
<?php
  }
 
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
    $instance['title'] = $new_instance['title'];
    return $instance;
  }
 
  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);
 
    echo $before_widget;
    $title = empty($instance['title']) ? ' ' : apply_filters('widget_title', $instance['title']);
 
    if (!empty($title))
      echo $before_title . $title . $after_title;;
 
    // WIDGET CODE GOES HERE
 echo '

<body onload="changeColor();"><div id="main-body" style="height:275px;background-color:#fff;">



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

width:200px;
font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
'; echo "


 background-image: url(/wp-content/plugins/lw-website-tools/images/retina_wood.png);

padding:1px;




/*style*/

border-top-left-radius:9px;
border-top-right-radius:9px;
border-bottom-right-radius:9px;
border-bottom-left-radius:9px;

-moz-border-top-left-radius:9px;
-moz-border-top-right-radius:9px;
-moz-border-bottom-right-radius:9px;
-moz-border-bottom-left-radius:9px;

-webkit-border-top-left-radius:9px;
-webkit-border-top-right-radius:9px;
-webkit-border-bottom-right-radius:9px;
-webkit-border-bottom-left-radius:9px;

}
#temple1 {
background-color: hsl(34, 53%, 82%);
background-image: repeating-linear-gradient(45deg, transparent 5px, hsla(197, 62%, 11%, 0.5) 5px, hsla(197, 62%, 11%, 0.5) 10px,                  
  hsla(5, 53%, 63%, 0) 10px, hsla(5, 53%, 63%, 0) 35px, hsla(5, 53%, 63%, 0.5) 35px, hsla(5, 53%, 63%, 0.5) 40px,
  hsla(197, 62%, 11%, 0.5) 40px, hsla(197, 62%, 11%, 0.5) 50px, hsla(197, 62%, 11%, 0) 50px, hsla(197, 62%, 11%, 0) 60px,                
  hsla(5, 53%, 63%, 0.5) 60px, hsla(5, 53%, 63%, 0.5) 70px, hsla(35, 91%, 65%, 0.5) 70px, hsla(35, 91%, 65%, 0.5) 80px,
  hsla(35, 91%, 65%, 0) 80px, hsla(35, 91%, 65%, 0) 90px, hsla(5, 53%, 63%, 0.5) 90px, hsla(5, 53%, 63%, 0.5) 110px,
  hsla(5, 53%, 63%, 0) 110px, hsla(5, 53%, 63%, 0) 120px, hsla(197, 62%, 11%, 0.5) 120px, hsla(197, 62%, 11%, 0.5) 140px       
  ),
repeating-linear-gradient(135deg, transparent 5px, hsla(197, 62%, 11%, 0.5) 5px, hsla(197, 62%, 11%, 0.5) 10px, 
  hsla(5, 53%, 63%, 0) 10px, hsla(5, 53%, 63%, 0) 35px, hsla(5, 53%, 63%, 0.5) 35px, hsla(5, 53%, 63%, 0.5) 40px,
  hsla(197, 62%, 11%, 0.5) 40px, hsla(197, 62%, 11%, 0.5) 50px, hsla(197, 62%, 11%, 0) 50px, hsla(197, 62%, 11%, 0) 60px,                
  hsla(5, 53%, 63%, 0.5) 60px, hsla(5, 53%, 63%, 0.5) 70px, hsla(35, 91%, 65%, 0.5) 70px, hsla(35, 91%, 65%, 0.5) 80px,
  hsla(35, 91%, 65%, 0) 80px, hsla(35, 91%, 65%, 0) 90px, hsla(5, 53%, 63%, 0.5) 90px, hsla(5, 53%, 63%, 0.5) 110px,
  hsla(5, 53%, 63%, 0) 110px, hsla(5, 53%, 63%, 0) 140px, hsla(197, 62%, 11%, 0.5) 140px, hsla(197, 62%, 11%, 0.5) 160px       
);
margin-bottom:10px;
height:100px;
width:100px;
font-size:10px;
}

#temple2 {
background-color:white;
background-image: linear-gradient(90deg, rgba(200,0,0,.5) 50%, transparent 50%),
linear-gradient(rgba(200,0,0,.5) 50%, transparent 50%);
background-size:50px 50px;
height:100px;
width:100px;
font-size:10px;
}


#temple3 {
			background-color: #0ae;
			background-image: -webkit-gradient(linear, 0 0, 0 100%, color-stop(.5, rgba(255, 255, 255, .2)), color-stop(.5, transparent), to(transparent));
			background-image: -webkit-linear-gradient(rgba(255, 255, 255, .2) 50%, transparent 50%, transparent);
			background-image: -moz-linear-gradient(rgba(255, 255, 255, .2) 50%, transparent 50%, transparent);
			background-image: -ms-linear-gradient(rgba(255, 255, 255, .2) 50%, transparent 50%, transparent);
			background-image: -o-linear-gradient(rgba(255, 255, 255, .2) 50%, transparent 50%, transparent);
			background-image: linear-gradient(rgba(255, 255, 255, .2) 50%, transparent 50%, transparent);
height:100px;
width:100px;
font-size:10px;
color:white;

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
height:100px;
width:100px;
font-size:10px;
}



#temple4 {
background-color:#269;
background-image: linear-gradient(white 2px, transparent 2px),
linear-gradient(90deg, white 2px, transparent 2px),
linear-gradient(rgba(255,255,255,.3) 1px, transparent 1px),
linear-gradient(90deg, rgba(255,255,255,.3) 1px, transparent 1px);
background-size:100px 100px, 100px 100px, 20px 20px, 20px 20px;
background-position:-2px -2px, -2px -2px, -1px -1px, -1px -1px;
height:100px;
width:100px;
font-size:10px;
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
height:100px;
width:100px;
font-size:10px;

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
height:100px;
width:100px;
font-size:10px;

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
height:100px;
width:100px;
font-size:10px;

}


";echo '


h2
{
font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
font-weight:100;
}

#out textarea, #out2 textarea, #out3 textarea, #out4 textarea, #out5 textarea, #out6 textarea, #out7 textarea, #out8 textarea, #out10 textarea {
background-color: #fff; 
background-image: 
linear-gradient(90deg, transparent 79px, #abced4 79px, #abced4 81px, transparent 81px),
linear-gradient(#eee .1em, transparent .1em);
background-size: 100% 1.2em;}






#client5

{height:200px;width:200px;}

#client4

{height:200px;width:200px;}

#client3

{height:200px;width:200px;}

#idone

{height:200px;width:200px;}

#client2

{height:200px;width:200px;}

#client1

{height:200px;width:200px;}


#help

{height:200px;width:200px;}

#yay1 select 

{


}


#yay1
{
	overflow:hidden;
	padding: 5px;
	width: 100px;
	font-family: Helvetica, sans-serif;
	font-size: 13px;
	margin: 0px 0px 10px 0px;
	border: 1px solid #ccc;
}


#plugin-title {
  background-image: url(http://www.therecipeminute.com/header.png);
}


#yay1:focus
{
border: 1px solid #900;
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



.to-top
{
display:inline-block;
height:50px;
width:50px;
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
	border: 1px solid;
	border-color: #ddd #999 #999 #ddd;
}

.top-right
{

display:inline-block;
height:50px;
width:50px;
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
	border: 1px solid;
	border-color: #ddd #999 #999 #ddd;
}


.top-left
{

display:inline-block;
height:50px;
width:50px;

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
	border: 1px solid;
	border-color: #ddd #999 #999 #ddd;


}
.flap {
width:100px;
font-size:10px;
}







*.horizontal_track {
	background-color: #bbb;
	width: 90px;
	line-height: 0px;
	font-size: 0px;
	text-align: left;
	padding: 4px;
	border: 1px solid;
	border-color: #ddd #999 #999 #ddd;
}
*.horizontal_slider {
	background-color: #666;
	width: 10px;
	height: 10px;
	position: relative;
	z-index: 2;
	line-height: 0;
	margin: 0;
	border: 2px solid;
	border-color: #999 #333 #333 #999;
}
*.horizontal_slit {
	background-color: #333;
	width: 80px;
	height: 5px;
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
	display:none;
	margin-top:0px;
	float:right;
	background-color: #bbb;
	color: #fff;
	width: 25px;
	text-align: right;
	padding: 0;
	border: 1px solid;
	border-color: #ddd #999 #999 #ddd;
}
.value_display {

	background-color: #bbb;
	color: #333;
	width: 20px;
	margin: 0 2px;
	text-align: right;
	font-size: 10pt;
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



<div id="client1" style="display:none;"><script type="text/javascript">';
echo "	    function test2(){

			var tl = document.getElementById('top_left').value;
			var tr = document.getElementById('top_right').value;
			var bl = document.getElementById('bottom_left').value;
			var br = document.getElementById('bottom_right').value;
";


			echo "document.getElementById('out2').innerHTML =";


echo ' "<style>#temple3" + "{" + "border-top-left-radius:" + tl + "px;border-top-right-radius:" + tr + "px;border-bottom-right-radius:" + br + "px;border-bottom-left-radius:" + bl + "px;-moz-border-top-left-radius:" + tl + "px;-moz-border-top-right-radius:" + tr + "px;-moz-border-bottom-right-radius:" + br + "px;-moz-border-bottom-left-radius:" + bl + "px;-webkit-border-top-left-radius:" + tl + "px;-webkit-border-top-right-radius:" + tr + "px;-webkit-border-bottom-right-radius:" + br + "px;-webkit-border-bottom-left-radius:" + bl + "px;" + "}" + "</style>" + "" + "';

echo "<textarea style='height:100px;width:100px;float:right;'";

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
    <form style="float:left;height:100%;width:100px;" action="" onsubmit="return test2()">



<div class="flap">Top Left	<div class="display_holder" id="display_holder_1" >
		<!-- Default value: 80 -->
		<input type="text" class="value_display" id="top_left" value="5" onfocus="blur(this);" />
	</div>	</div>	<!-- Value display 1 (green) -->
<!-- Horizontal slider 1 (green) -->
	<div class="horizontal_track" id="horizontal_track_1" >
		<div class="horizontal_slit" id="horizontal_slit_1" >&nbsp;</div>
		<!-- total movement: 100 pixels, scale: 1 [value/pixel],
			default position: 80 pixels, connected to value_display_1 -->
		<div class="horizontal_slider" id="horizontal_slider_1" style="left: 5px;"
			onmousedown="'; echo "slide(event, 'horizontal', 75, 0, 100, 101, 0, 'top_left'"; echo ');myFunction();" >&nbsp;</div>


	</div>


<div class="flap">Top Right<!-- Value display 2 (blue)	-->
	<div class="display_holder" id="display_holder_2" >
		<!-- Default value: 35 -->
		<input type="text" class="value_display" id="top_right" value="5" onfocus="blur(this);" />
	</div></div>		<!-- Horizontal slider 2 (blue) -->
	<div class="horizontal_track" id="horizontal_track_2" >
		<div class="horizontal_slit" id="horizontal_slit_2" >&nbsp;</div>
		<!-- total movement: 100 pixels, scale: 1 [value/pixel],
			default position: 35 pixels, connected to value_display_2 -->
		<div class="horizontal_slider" id="horizontal_slider_2" style="left: 5px;"
			onmousedown="slide(event, ';echo "'horizontal', 75, 0, 100, 101, 0, 'top_right'"; echo ');">
			&nbsp;
		</div>
	</div>



<div class="flap">Bottom Left <div class="display_holder" id="display_holder_3" >
		<!-- Default value: 40 -->
		<input type="text" class="value_display" id="bottom_left" value="5" onfocus="blur(this);" />
	</div></div>	<!-- Value display 3 (red)	-->

	<!-- Horizontal slider 3 (red) -->
	<div class="horizontal_track" id="horizontal_track_3" >
		<div class="horizontal_slit" id="horizontal_slit_3" >&nbsp;</div>
		<!-- Total movement: 100 pixels, Scale: 1 [value/pixel],
			Default position: 40 pixels, Connected to value_display_3 -->
		<div class="horizontal_slider" id="horizontal_slider_3" style="left: 5px;"
			onmousedown="slide(event, ';echo "'horizontal', 75, 0, 100, 101, 0, 'bottom_left'";echo ');">&nbsp;</div>
	</div>

<div class="flap">Bottom Right	<div class="display_holder" id="display_holder_5" >
		<!-- Default value: 40 -->
		<input type="text" class="value_display" id="bottom_right" value="5" onfocus="blur(this);" />
	</div></div>	<!-- Value display 5 (red)	-->

	<!-- Horizontal slider 5 (red) -->
	<div class="horizontal_track" id="horizontal_track_5" >
		<div class="horizontal_slit" id="horizontal_slit_5" >&nbsp;</div>
		<!-- Total movement: 100 pixels, Scale: 1 [value/pixel],
			Default position: 40 pixels, Connected to value_display_3 -->
		<div class="horizontal_slider" id="horizontal_slider_5" style="left: 5px;"
			onmousedown="slide(event, ';echo "'horizontal', 75, 0, 100, 101, 0, 'bottom_right'";echo ');">&nbsp;</div>
	</div>

         </form>

<div id="temple3" style="float:right;"><br>Your Text! :D<br></div>
    <div id="out2" style="margin-top:-100px;margin-left:5px;float:right;">


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


echo ' "<style>#temple1" + "{" + "font-size:40pt;box-shadow:" + hl + "px" + " " + vl + "px" + " " + br + "px" + " " + sp + "px;" + "-webkit-box-shadow:" + hl + "px" + " " + vl + "px" + " " + br + "px" + " " + + sp + "px;" + "-moz-box-shadow" + hl + "px" + " " + vl + "px" + " " + br + "px" + " " + sp + "px;" + "}</style>" + "<div id=';echo "''>";echo '</div>" + "';

echo "<textarea style='height:100px;width:100px;'";

echo '>" + "/*style*/" + "&#013" + "box-shadow: " + hl + "px" + " " + vl + "px" + " " + br + "px" + " " + sp + "px;" + "&#013" + "-webkit-box-shadow: " + hl + "px" + " " + vl + "px" + " " + br + "px" + " " + sp + "px;" + "&#013" + "-moz-box-shadow: " + hl + "px" + " " + vl + "px" + " " + br + "px" + " " + sp + "px;" + "</textarea>" + "<div id=';
echo "''>"; echo '</div>";';
echo "
			document.getElementById('out').style.display ="; echo ' "block";';

echo '			return false;
		}
	</script>
</head>

<body>
    <form action="" style="float:left;height:100%;width:100px;" onsubmit="return test()">

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
			onmousedown="'; echo "slide(event, 'horizontal', 75, 0, 100, 101, 0, 'horizontal_length'"; echo ');" >&nbsp;</div>


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
			onmousedown="slide(event, ';echo "'horizontal', 75, 0, 100, 101, 0, 'vertical_length'"; echo ');">
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
			onmousedown="slide(event, ';echo "'horizontal', 75, 0, 100, 101, 0, 'blur_radius'";echo ');">&nbsp;</div>
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
			onmousedown="slide(event, ';echo "'horizontal', 75, 0, 100, 101, 0, 'spread'";echo ');">&nbsp;</div>
	</div>
    </form>


<div id="temple1" style="float:right;"></div>
    <div id="out" style="margin-top:-75px;margin-left:5px;float:right;" >
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


echo ' "<style>#temple4" + "{" + "background-color:#fff;height:100px;float:right;width:100px;" + "-moz-transform: scale(" + se + ") rotate(" + re + "deg) translateX(" + tx + "px) translateY(" + ty + "px) skewX(" + sx + "deg) skewY(" + sy + "deg);" + "-webkit-transform: scale(" + se + ") rotate(" + re + "deg) translateX(" + tx + "px) translateY(" + ty + "px) skewX(" + sx + "deg) skewY(" + sy + "deg);" + "-0-transform: scale(" + se + ") rotate(" + re + "deg) translateX(" + tx + "px) translateY(" + ty + "px) skewX(" + sx + "deg) skewY(" + sy + "deg);" + "-ms-transform: scale(" + se + ") rotate(" + re + "deg) translateX(" + tx + "px) translateY(" + ty + "px) skewX(" + sx + "deg) skewY(" + sy + "deg);" + "transform: scale(" + se + ") rotate(" + re + "deg) translateX(" + tx + "px) translateY(" + ty + "px) skewX(" + sx + "deg) skewY(" + sy + "deg);" + "}</style>" + "<div id=';echo ">";echo '</div><br>" + "';

echo "<textarea style='height:100px;width:100px;border:solid 2px #ccc;'";

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
    <form  style="float:left;height:100%;width:100px;" action="" onsubmit="return test33()">

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


		<div onchange="return test5()" class="horizontal_slider" id="horizontal_slider_13" style="left: 38px;"
			onmousedown="'; echo "slide(event, 'horizontal', 75, 0, 2, 101, 1, 'scale'"; echo ');" >&nbsp;</div>
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
			onmousedown="slide(event, ';echo "'horizontal', 75, 0, 360, 361, 0, 'rotate'"; echo ');">
			&nbsp;
		</div>
	</div>


<div class="flap">Translate X</div>	<!-- Value display 3 (red)	-->
	<div class="display_holder" id="display_holder_33" >
		<!-- Default value: 40 -->
		<input type="text" class="value_display" id="translate_x" value="0" onfocus="blur(this);" />
	</div>
	<!-- Horizontal slider 3 (red) -->
	<div class="horizontal_track" id="horizontal_track_33" >
		<div class="horizontal_slit" id="horizontal_slit_33" >&nbsp;</div>
		<!-- Total movement: 100 pixels, Scale: 1 [value/pixel],
			Default position: 40 pixels, Connected to value_display_3 -->
		<div class="horizontal_slider" id="horizontal_slider_33" style="left: 5px;"
			onmousedown="slide(event, ';echo "'horizontal', 75, 0, 100, 101, 0, 'translate_x'";echo ');">&nbsp;</div>
	</div>

<div class="flap">Translate Y</div>	<!-- Value display 5 (red)	-->
	<div class="display_holder" id="display_holder_53" >
		<!-- Default value: 40 -->
		<input type="text" class="value_display" id="translate_y" value="0" onfocus="blur(this);" />
	</div>
	<!-- Horizontal slider 5 (red) -->
	<div class="horizontal_track" id="horizontal_track_53" >
		<div class="horizontal_slit" id="horizontal_slit_53" >&nbsp;</div>
		<!-- Total movement: 100 pixels, Scale: 1 [value/pixel],
			Default position: 40 pixels, Connected to value_display_3 -->
		<div class="horizontal_slider" id="horizontal_slider_53" style="left: 5px;"
			onmousedown="slide(event, ';echo "'horizontal', 75, 0, 100, 101, 0, 'translate_y'";echo ');">&nbsp;</div>
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
			onmousedown="slide(event, ';echo "'horizontal', 75, 0, 100, 101, 0, 'skew_x'";echo ');">&nbsp;</div>
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
			onmousedown="slide(event, ';echo "'horizontal', 75, 0, 100, 101, 0, 'skew_y'";echo ');">&nbsp;</div>
	</div>


    </form>
<div id="temple4" style="height:100px;width:100px;float:right;"></div>
    <div id="out3" style="margin-top:-100px;margin-left:5px;float:right;" >
    </div>
</body>
</div>




<div id="client4" style="display:none;">


<script type="text/javascript">
';
echo "	    function test5(){

			var hl = document.getElementById('x').value;
			var vl = document.getElementById('y').value;
			var bl = document.getElementById('blur').value;
			var sc = document.getElementById('shadow_color').value;";


			echo "document.getElementById('out5').innerHTML =";


echo ' "<style>#temple2" + "{" + "" + "text-shadow: " + hl + "px " + vl + "px " + bl + "px #" + sc + ";" + "filter: dropshadow(color=#" + sc + ", offx=" + hl + ", offy=" + vl + ");" + "}" + "</style>" + "<div id=';echo "''>";echo '</div><br>" + "';


echo "<textarea style='height:100px;width:100px;border:solid 2px #ccc;'";

echo '>" + "/*style*/" + "&#013;" + "&#013;" + "text-shadow: " + hl + "px " + vl + "px " + bl + "px #" + sc + ";" + "&#013;" + "filter: dropshadow(color=#" + sc + ", offx=" + hl + ", offy=" + vl + ");" + "</textarea>" + "<div id=';
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


    <form action="" style="float:left;height:100%;width:100px;" onsubmit="return test5()">

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
			onmousedown="'; echo "slide(event, 'horizontal', 75, 0, 100, 101, 0, 'x'"; echo ');test5();" >&nbsp;</div>


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
			onmousedown="slide(event, ';echo "'horizontal', 75, 0, 100, 101, 0, 'y'"; echo ');">
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
			onmousedown="slide(event, ';echo "'horizontal', 75, 0, 30, 101, 0, 'blur'";echo ');">&nbsp;</div>
	</div>

<table>
<tr>
<td><br><br>
</td>
<td>
<div class="flap">Shadow-Color</div>
<input onchange="return test5();" class="color" value="000000" style="font-size: 15pt;height:15px;background-color:white;width:98px;border: 2px solid #ccc" id="shadow_color" type="text" name="" /></td>
</td>
</table>
  <p>

        </p>

';

echo '

    </form>

<div id="temple2" style="float:right"><br><br>Your Text :D</div>


    <div id="out5" style="margin-top:-100px;margin-left:5px;float:right;"></div>
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
    </script><center>
    <input id="tempDivName" type="hidden" />
 <a OnClick="MyFunction(';echo "'myDiv1'";echo ');"><div class="to-top"></div></a>
<a OnClick="MyFunction(';echo "'myDiv2'";echo ');"><div class="top-right"></div></a>
<a OnClick="MyFunction(';echo "'myDiv3'";echo ');"><div class="top-left"></div></a></center>

    <div id="myDiv1" style="display:none">
     <script type="text/javascript">';
echo "	    function test7(){

			var fc = document.getElementById('the_first_color').value;
			var sn = document.getElementById('the_second_color').value;
			var fcn = document.getElementById('the_first_color_number').value;
			var snn = document.getElementById('the_second_color_number').value;";


			echo "document.getElementById('out7').innerHTML =";


echo ' "<style>#temple7, .to-top" + "{" + "background-image: -moz-linear-gradient(top, #" + fc + " " + fcn + "%, #" + sn + " " + snn + "%);" +  "}" + "#horizontal_slider_71 { background-color: #" + sn + ";}" + "#horizontal_slider_7 { background-color: #" + fc + ";}" + "#the_first_color_number { background-color: #" + fc + ";}" + "#the_second_color_number { background-color: #" + sn + ";}" + "/* IE 10 Consumer Preview */" + "background-image: -ms-linear-gradient(top, #" + fc + " " + fcn + "%, #" + sn + " " + snn + "%);" + "/* Opera */" + "background-image: -o-linear-gradient(top, #" + fc + " " + fcn + "%, #" + sn + " " + snn + "%);" + "/* Webkit (Safari/Chrome 10) */" + "background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #" + fc + "), color-stop(1, #" + sn + ")); " + "/* Webkit (Chrome 11+) */" + + "background-image: -webkit-linear-gradient(top, #" + fc + " " + fcn + "%, #" + sn + " " + snn + "%);" + "/* W3C Markup, IE10 Release Preview */" + + "background-image: linear-gradient(to bottom, #" + fc + " " + fcn + "%, #" + sn + " " + snn + "%);" + "</style>" + "<div id=';echo "''>";echo '</div>" + "';

echo "<textarea style='height:50px;width:100px;'";echo '>" + "/*style*/" + "&#013;" + "/* Mozilla Firefox */" + "&#013;" + "background-image: -moz-linear-gradient(top, #" + fc + " " + fcn + "%, #" + sn + " " + snn + "%);" + "&#013;" + "/* IE 10 Consumer Preview */" + "&#013;" + "background-image: -ms-linear-gradient(top, #" + fc + " " + fcn + "%, #" + sn + " " + snn + "%);" + "&#013;" + "/* Opera */" + "&#013;" + "background-image: -o-linear-gradient(top, #" + fc + " " + fcn + "%, #" + sn + " " + snn + "%);" + "&#013;" + "/* Webkit (Safari/Chrome 10) */" + "&#013;" + "background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #" + fc + "), color-stop(1, #" + sn + ")); " + "&#013;" + "/* Webkit (Chrome 11+) */" + "&#013;" + "background-image: -webkit-linear-gradient(top, #" + fc + " " + fcn + "%, #" + sn + " " + snn + "%);" +  "&#013;" + "/* W3C Markup, IE10 Release Preview */" + "&#013;" + "background-image: linear-gradient(to bottom, #" + fc + " " + fcn + "%, #" + sn + " " + snn + "%);" + "</textarea>" + "<div id=';echo "''>"; echo '</div>";';
echo "
			document.getElementById('out7').style.display ="; echo ' "block";';

echo '			return false;
		}
	</script>






</head>

<body>
    <form style="float:left;height:100%;width:100px;" action="" onsubmit="return test7()">




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
			onmousedown="'; echo "slide(event, 'horizontal', 75, 0, 100, 101, 0, 'the_first_color_number'"; echo ');" >&nbsp;</div>


	</div>








</div>

<div class="flap">Color</div>
<input onchange="return test7()" class="color {onImmediateChange:';echo "'updateInfo(this);'";echo '}" value="ffffff" style="font-size: 15px;height:15px;background-color:white;width:100px;border: 2px solid #ccc" type="text" id="the_first_color" />


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
			onmousedown="slide(event, ';echo "'horizontal', 75, 0, 500, 101, 0, 'the_second_color_number'"; echo ');">
			&nbsp;
		</div>
	</div>

</div>

<div class="flap">Color</div>
<input onchange="return test7()" class="color" value="91E842" style="font-size: 15px;height:15px;background-color:white;width:100px;border: 2px solid #ccc" type="text" id="the_second_color" />





         </form>
<div id="temple7" style="float:right;"></div>
    <div id="out7" style="margin-top:-43px;margin-left:5px;float:right;">
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


echo ' "<style>#temple9, .top-right" + "{" + "background-image: -moz-linear-gradient(top right, #" + fcc + " " + fcnc + "%, #" + snc + " " + snnc + "%);" +"/* IE 10 Consumer Preview */" + "&#013;" + "background-image: -ms-linear-gradient(top right, #" + fcc + " " + fcnc + "%, #" + snc + " " + snnc + "%);" + "/* Opera */" + "background-image: -o-linear-gradient(top right, #" + fcc + " " + fcnc + "%, #" + snc + " " + snnc + "%);" + "/* Webkit (Safari/Chrome 10) */" + "background-image: -webkit-gradient(linear, right top, left bottom, color-stop(0, #" + fcc + "), color-stop(1, #" + snc + ")); " + "/* Webkit (Chrome 11+) */" + "background-image: -webkit-linear-gradient(top right, #" + fcc + " " + fcnc + "%, #" + snc + " " + snnc + "%);" + "/* W3C Markup, IE10 Release Preview */" + "background-image: linear-gradient(to bottom left, #" + fcc + " " + fcnc + "%, #" + snc + " " + snnc + "%);" + "}" + "#horizontal_slider_91 { background-color: #" + snc + ";}" + "#horizontal_slider_9 { background-color: #" + fcc + ";}" + "#the_first_color_number2 { background-color: #" + fcc + ";}" + "#the_second_color_number2 { background-color: #" + snc + ";}" + "</style>" + "<div id=';echo "''>";echo '</div>" + "';

echo "<textarea style='height:50px;width:100px;'";echo '>" + "/*style*/" + "&#013;" + "background-image: -moz-linear-gradient(top right, #" + fcc + " " + fcnc + "%, #" + snc + " " + snnc + "%);" + "/* IE 10 Consumer Preview */" + "&#013;" + "background-image: -ms-linear-gradient(top right, #" + fcc + " " + fcnc + "%, #" + snc + " " + snnc + "%);" + "&#013;" + "/* Opera */" + "&#013;" + "background-image: -o-linear-gradient(top right, #" + fcc + " " + fcnc + "%, #" + snc + " " + snnc + "%);" + "&#013;" + "/* Webkit (Safari/Chrome 10) */" + "&#013;" + "background-image: -webkit-gradient(linear, right top, left bottom, color-stop(0, #" + fcc + "), color-stop(1, #" + snc + ")); " + "&#013;" + "/* Webkit (Chrome 11+) */" + "&#013;" + "background-image: -webkit-linear-gradient(top right, #" + fcc + " " + fcnc + "%, #" + snc + " " + snnc + "%);" +  "&#013;" + "/* W3C Markup, IE10 Release Preview */" + "&#013;" + "background-image: linear-gradient(to bottom left, #" + fcc + " " + fcnc + "%, #" + snc + " " + snnc + "%);" +  "</textarea>" + "<div id=';echo "''>"; echo '</div>";';
echo "
			document.getElementById('out9').style.display ="; echo ' "block";';

echo '			return false;
		}
	</script>






</head>

<body>
    <form style="float:left;height:100%;width:100px;" action="" onsubmit="return test9()">

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
			onmousedown="'; echo "slide(event, 'horizontal', 75, 0, 100, 101, 0, 'the_first_color_number2'"; echo ');" >&nbsp;</div>


	</div>


</div>



<div>

<div class="flap">Color</div>
<input onchange="return test9()" class="color {onImmediateChange:';echo "'updateInfo(this);'";echo '}" value="ffffff" style="font-size: 15px;height:15px;background-color:white;width:100px;border: 2px solid #ccc" type="text" id="the_first_color2" />

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
			onmousedown="slide(event, ';echo "'horizontal', 75, 0, 500, 101, 0, 'the_second_color_number2'"; echo ');">
			&nbsp;
		</div>
	</div>

</div>


<div class="flap">Color</div>
<input onchange="return test9()" class="color" value="61A0E8" style="font-size: 15px;height:15px;background-color:white;width:100px;border: 2px solid #ccc" type="text" id="the_second_color2" />




         </form>
<div id="temple9" style="float:right;"></div>
    <div id="out9" style="margin-top:-43px;margin-left:5px;float:right;">
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


echo ' "<style>#temple10, .top-left" + "{" + "background-image: -moz-linear-gradient(top left, #" + fccd + " " + fcncd + "%, #" + sncd + " " + snncd + "%);" + "/* IE 10 Consumer Preview */" + "background-image: -ms-linear-gradient(top left, #" + fccd + " " + fcncd + "%, #" + sncd + " " + snncd + "%);" + "/* Opera */" + "background-image: -o-linear-gradient(top left, #" + fccd + " " + fcncd + "%, #" + sncd + " " + snncd + "%);" + "/* Webkit (Safari/Chrome 10) */" + "background-image: -webkit-gradient(linear, left top, right bottom, color-stop(0, #" + fccd + "), color-stop(1, #" + sncd + ")); " + "/* Webkit (Chrome 11+) */" + "background-image: -webkit-linear-gradient(top left, #" + fccd + " " + fcncd + "%, #" + sncd + " " + snncd + "%);" + "/* W3C Markup, IE10 Release Preview */" + "background-image: linear-gradient(to bottom right, #" + fccd + " " + fcncd + "%, #" + sncd + " " + snncd + "%);" +  "}" + "#horizontal_slider_101 { background-color: #" + sncd + ";}" + "#horizontal_slider_10 { background-color: #" + fccd + ";}" + "#the_first_color_number3 { background-color: #" + fccd + ";}" + "#the_second_color_number3 { background-color: #" + sncd + ";}" + "</style>" + "<div id=';echo "''>";echo '</div>" + "';

echo "<textarea style='height:50px;width:100px;'";echo '>" + "/*style*/" + "&#013;" + "background-image: -moz-linear-gradient(top left, #" + fccd + " " + fcncd + "%, #" + sncd + " " + snncd + "%);" + "/* IE 10 Consumer Preview */" + "&#013;" + "background-image: -ms-linear-gradient(top left, #" + fccd + " " + fcncd + "%, #" + sncd + " " + snncd + "%);" + "&#013;" + "/* Opera */" + "&#013;" + "background-image: -o-linear-gradient(top left, #" + fccd + " " + fcncd + "%, #" + sncd + " " + snncd + "%);" + "&#013;" + "/* Webkit (Safari/Chrome 10) */" + "&#013;" + "background-image: -webkit-gradient(linear, left top, right bottom, color-stop(0, #" + fccd + "), color-stop(1, #" + sncd + ")); " + "&#013;" + "/* Webkit (Chrome 11+) */" + "&#013;" + "background-image: -webkit-linear-gradient(top left, #" + fccd + " " + fcncd + "%, #" + sncd + " " + snncd + "%);" +  "&#013;" + "/* W3C Markup, IE10 Release Preview */" + "&#013;" + "background-image: linear-gradient(to bottom right, #" + fccd + " " + fcncd + "%, #" + sncd + " " + snncd + "%);" + "</textarea>" + "<div id=';echo "''>"; echo '</div>";';
echo "
			document.getElementById('out10').style.display ="; echo ' "block";';

echo '			return false;
		}
	</script>






</head>

<body>
    <form style="float:left;height:100%;width:100px;" action="" onsubmit="return test10()">

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
			onmousedown="'; echo "slide(event, 'horizontal', 75, 0, 100, 101, 0, 'the_first_color_number3'"; echo ');" >&nbsp;</div>


	</div>



</div>

<div class="flap">Color</div>
<input onchange="return test10()" class="color {onImmediateChange:';echo "'updateInfo(this);'";echo '}" value="ffffff" style="font-size: 15px;height:15px;background-color:white;width:100px;border: 2px solid #ccc" type="text" id="the_first_color3" />

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
			onmousedown="slide(event, ';echo "'horizontal', 75, 0, 500, 101, 0, 'the_second_color_number3'"; echo ');">
			&nbsp;
		</div>
</div>
</div>

<div class="flap">Color</div>
<input onchange="return test10()" class="color" value="E86DA2" style="font-size: 15px;height:15px;background-color:white;width:100px;border: 2px solid #ccc" type="text" id="the_second_color3" />



         </form>
<div id="temple10" style="float:right;"></div>
    <div id="out10" style="margin-top:-43px;margin-left:5px;float:right;">
    </div>
</body>






    </div>


</div>

';







echo "
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
		displayObj.value = v 
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
 
    echo $after_widget;
  }
 
}
add_action( 'widgets_init', create_function('', 'return register_widget("RandomPostWidget");') );




//[foobar]
function lradius( $atts ){
 echo '


<style>


#main-body

{

width:200px;
font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
'; echo "



padding:1px;






/*style*/

border-top-left-radius:9px;
border-top-right-radius:9px;
border-bottom-right-radius:9px;
border-bottom-left-radius:9px;

-moz-border-top-left-radius:9px;
-moz-border-top-right-radius:9px;
-moz-border-bottom-right-radius:9px;
-moz-border-bottom-left-radius:9px;

-webkit-border-top-left-radius:9px;
-webkit-border-top-right-radius:9px;
-webkit-border-bottom-right-radius:9px;
-webkit-border-bottom-left-radius:9px;


";
echo '
';echo " 
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
height:100px;
width:100px;
font-size:10px;

}



";echo '


h2
{
font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
font-weight:100;
}

#out textarea, #out2 textarea, #out3 textarea, #out4 textarea, #out5 textarea, #out6 textarea, #out7 textarea, #out8 textarea, #out10 textarea {
background-color: #fff; 
background-image: 
linear-gradient(90deg, transparent 79px, #abced4 79px, #abced4 81px, transparent 81px),
linear-gradient(#eee .1em, transparent .1em);
background-size: 100% 1.2em;}






#client1

{height:200px;width:200px; background-image: url(/wp-content/plugins/lw-website-tools/images/retina_wood.png);}



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
width:100px;
font-size:10px;
}






*.horizontal_track {
	background-color: #bbb;
	width: 90px;
	line-height: 0px;
	font-size: 0px;
	text-align: left;
	padding: 4px;
	border: 1px solid;
	border-color: #ddd #999 #999 #ddd;
}
*.horizontal_slider {
	background-color: #666;
	width: 10px;
	height: 10px;
	position: relative;
	z-index: 2;
	line-height: 0;
	margin: 0;
	border: 2px solid;
	border-color: #999 #333 #333 #999;
}
*.horizontal_slit {
	background-color: #333;
	width: 80px;
	height: 5px;
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
	display:none;
	margin-top:0px;
	float:right;
	background-color: #bbb;
	color: #fff;
	width: 25px;
	text-align: right;
	padding: 0;
	border: 1px solid;
	border-color: #ddd #999 #999 #ddd;
}
.value_display {

	background-color: #bbb;
	color: #333;
	width: 20px;
	margin: 0 2px;
	text-align: right;
	font-size: 10pt;
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

	

</style>

<div id="client1"><script type="text/javascript">';
echo "	    function test2(){

			var tl = document.getElementById('top_left').value;
			var tr = document.getElementById('top_right').value;
			var bl = document.getElementById('bottom_left').value;
			var br = document.getElementById('bottom_right').value;
";


			echo "document.getElementById('out2').innerHTML =";


echo ' "<style>#temple3" + "{" + "border-top-left-radius:" + tl + "px;border-top-right-radius:" + tr + "px;border-bottom-right-radius:" + br + "px;border-bottom-left-radius:" + bl + "px;-moz-border-top-left-radius:" + tl + "px;-moz-border-top-right-radius:" + tr + "px;-moz-border-bottom-right-radius:" + br + "px;-moz-border-bottom-left-radius:" + bl + "px;-webkit-border-top-left-radius:" + tl + "px;-webkit-border-top-right-radius:" + tr + "px;-webkit-border-bottom-right-radius:" + br + "px;-webkit-border-bottom-left-radius:" + bl + "px;" + "}" + "</style>" + "" + "';

echo "<textarea style='height:100px;width:100px;float:right;'";

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
    <form style="float:left;height:100%;width:100px;" action="" onsubmit="return test2()">



<div class="flap">Top Left	<div class="display_holder" id="display_holder_1" >
		<!-- Default value: 80 -->
		<input type="text" class="value_display" id="top_left" value="5" onfocus="blur(this);" />
	</div>	</div>	<!-- Value display 1 (green) -->
<!-- Horizontal slider 1 (green) -->
	<div class="horizontal_track" id="horizontal_track_1" >
		<div class="horizontal_slit" id="horizontal_slit_1" >&nbsp;</div>
		<!-- total movement: 100 pixels, scale: 1 [value/pixel],
			default position: 80 pixels, connected to value_display_1 -->
		<div class="horizontal_slider" id="horizontal_slider_1" style="left: 5px;"
			onmousedown="'; echo "slide(event, 'horizontal', 75, 0, 100, 101, 0, 'top_left'"; echo ');myFunction();" >&nbsp;</div>


	</div>


<div class="flap">Top Right<!-- Value display 2 (blue)	-->
	<div class="display_holder" id="display_holder_2" >
		<!-- Default value: 35 -->
		<input type="text" class="value_display" id="top_right" value="5" onfocus="blur(this);" />
	</div></div>		<!-- Horizontal slider 2 (blue) -->
	<div class="horizontal_track" id="horizontal_track_2" >
		<div class="horizontal_slit" id="horizontal_slit_2" >&nbsp;</div>
		<!-- total movement: 100 pixels, scale: 1 [value/pixel],
			default position: 35 pixels, connected to value_display_2 -->
		<div class="horizontal_slider" id="horizontal_slider_2" style="left: 5px;"
			onmousedown="slide(event, ';echo "'horizontal', 75, 0, 100, 101, 0, 'top_right'"; echo ');">
			&nbsp;
		</div>
	</div>



<div class="flap">Bottom Left <div class="display_holder" id="display_holder_3" >
		<!-- Default value: 40 -->
		<input type="text" class="value_display" id="bottom_left" value="5" onfocus="blur(this);" />
	</div></div>	<!-- Value display 3 (red)	-->

	<!-- Horizontal slider 3 (red) -->
	<div class="horizontal_track" id="horizontal_track_3" >
		<div class="horizontal_slit" id="horizontal_slit_3" >&nbsp;</div>
		<!-- Total movement: 100 pixels, Scale: 1 [value/pixel],
			Default position: 40 pixels, Connected to value_display_3 -->
		<div class="horizontal_slider" id="horizontal_slider_3" style="left: 5px;"
			onmousedown="slide(event, ';echo "'horizontal', 75, 0, 100, 101, 0, 'bottom_left'";echo ');">&nbsp;</div>
	</div>

<div class="flap">Bottom Right	<div class="display_holder" id="display_holder_5" >
		<!-- Default value: 40 -->
		<input type="text" class="value_display" id="bottom_right" value="5" onfocus="blur(this);" />
	</div></div>	<!-- Value display 5 (red)	-->

	<!-- Horizontal slider 5 (red) -->
	<div class="horizontal_track" id="horizontal_track_5" >
		<div class="horizontal_slit" id="horizontal_slit_5" >&nbsp;</div>
		<!-- Total movement: 100 pixels, Scale: 1 [value/pixel],
			Default position: 40 pixels, Connected to value_display_3 -->
		<div class="horizontal_slider" id="horizontal_slider_5" style="left: 5px;"
			onmousedown="slide(event, ';echo "'horizontal', 75, 0, 100, 101, 0, 'bottom_right'";echo ');">&nbsp;</div>
	</div>

         </form>

<div id="temple3" style="float:right;"><br>Your Text! :D<br></div>
    <div id="out2" style="margin-top:-100px;margin-left:5px;float:right;">


    </div>
</body>
</div>
<br><br>

';
echo "
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





}
add_shortcode( 'lradius_tool', 'lradius' );








//[foobar]
function lshadow( $atts ){
 echo '


<style>


#main-body

{

width:200px;
font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
'; echo "



padding:1px;




/*style*/

border-top-left-radius:9px;
border-top-right-radius:9px;
border-bottom-right-radius:9px;
border-bottom-left-radius:9px;

-moz-border-top-left-radius:9px;
-moz-border-top-right-radius:9px;
-moz-border-bottom-right-radius:9px;
-moz-border-bottom-left-radius:9px;

-webkit-border-top-left-radius:9px;
-webkit-border-top-right-radius:9px;
-webkit-border-bottom-right-radius:9px;
-webkit-border-bottom-left-radius:9px;


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
height:100px;
width:100px;
font-size:10px;

}



";echo '


h2
{
font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
font-weight:100;
}



#client2

{height:200px;width:200px; background-image: url(/wp-content/plugins/lw-website-tools/images/retina_wood.png);}




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
width:100px;
font-size:10px;
}




*.horizontal_track {
	background-color: #bbb;
	width: 90px;
	line-height: 0px;
	font-size: 0px;
	text-align: left;
	padding: 4px;
	border: 1px solid;
	border-color: #ddd #999 #999 #ddd;
}
*.horizontal_slider {
	background-color: #666;
	width: 10px;
	height: 10px;
	position: relative;
	z-index: 2;
	line-height: 0;
	margin: 0;
	border: 2px solid;
	border-color: #999 #333 #333 #999;
}
*.horizontal_slit {
	background-color: #333;
	width: 80px;
	height: 5px;
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
*.display_holder {
	display:none;
	margin-top:0px;
	float:right;
	background-color: #bbb;
	color: #fff;
	width: 25px;
	text-align: right;
	padding: 0;
	border: 1px solid;
	border-color: #ddd #999 #999 #ddd;
}
.value_display {

	background-color: #bbb;
	color: #333;
	width: 20px;
	margin: 0 2px;
	text-align: right;
	font-size: 10pt;
	font-face: verdana, arial, helvetica, sans-serif;
	font-weight: bold;
	line-height: 12px;
	border: 0;
	cursor: default;
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






	

</style>

<div id="client2">




<script type="text/javascript">';
echo "	    function test(){

			var hl = document.getElementById('horizontal_length').value;
			var vl = document.getElementById('vertical_length').value;
			var br = document.getElementById('blur_radius').value;
			var sp = document.getElementById('spread').value;";


			echo "document.getElementById('out').innerHTML =";


echo ' "<style>#temple1" + "{" + "font-size:40pt;box-shadow:" + hl + "px" + " " + vl + "px" + " " + br + "px" + " " + sp + "px;" + "-webkit-box-shadow:" + hl + "px" + " " + vl + "px" + " " + br + "px" + " " + + sp + "px;" + "-moz-box-shadow" + hl + "px" + " " + vl + "px" + " " + br + "px" + " " + sp + "px;" + "}</style>" + "<div id=';echo "''>";echo '</div>" + "';

echo "<textarea style='height:100px;width:100px;'";

echo '>" + "/*style*/" + "&#013" + "box-shadow: " + hl + "px" + " " + vl + "px" + " " + br + "px" + " " + sp + "px;" + "&#013" + "-webkit-box-shadow: " + hl + "px" + " " + vl + "px" + " " + br + "px" + " " + sp + "px;" + "&#013" + "-moz-box-shadow: " + hl + "px" + " " + vl + "px" + " " + br + "px" + " " + sp + "px;" + "</textarea>" + "<div id=';
echo "''>"; echo '</div>";';
echo "
			document.getElementById('out').style.display ="; echo ' "block";';

echo '			return false;
		}
	</script>
</head>

<body>
    <form action="" style="float:left;height:100%;width:100px;" onsubmit="return test()">

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
			onmousedown="'; echo "slide(event, 'horizontal', 75, 0, 100, 101, 0, 'horizontal_length'"; echo ');" >&nbsp;</div>


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
			onmousedown="slide(event, ';echo "'horizontal', 75, 0, 100, 101, 0, 'vertical_length'"; echo ');">
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
			onmousedown="slide(event, ';echo "'horizontal', 75, 0, 100, 101, 0, 'blur_radius'";echo ');">&nbsp;</div>
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
			onmousedown="slide(event, ';echo "'horizontal', 75, 0, 100, 101, 0, 'spread'";echo ');">&nbsp;</div>
	</div>
    </form>


<div id="temple1" style="float:right;"></div>
    <div id="out" style="margin-top:-75px;margin-left:5px;float:right;" >
    </div>
</body>
</div>



<br><br>




';
echo "
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





}
add_shortcode( 'lbox_shadow', 'lshadow' );







//[foobar]
function lcsstrans( $atts ){
 echo '


<style>


#main-body

{

width:200px;
font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
'; echo "



padding:1px;




/*style*/

border-top-left-radius:9px;
border-top-right-radius:9px;
border-bottom-right-radius:9px;
border-bottom-left-radius:9px;

-moz-border-top-left-radius:9px;
-moz-border-top-right-radius:9px;
-moz-border-bottom-right-radius:9px;
-moz-border-bottom-left-radius:9px;

-webkit-border-top-left-radius:9px;
-webkit-border-top-right-radius:9px;
-webkit-border-bottom-right-radius:9px;
-webkit-border-bottom-left-radius:9px;


";
echo '
';echo " 
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
height:100px;
width:100px;
font-size:10px;

}



";echo '


h2
{
font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
font-weight:100;
}



#client3

{height:200px;width:200px;background-image: url(/wp-content/plugins/lw-website-tools/images/retina_wood.png);}




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
width:100px;
font-size:10px;
}




*.horizontal_track {
	background-color: #bbb;
	width: 90px;
	line-height: 0px;
	font-size: 0px;
	text-align: left;
	padding: 4px;
	border: 1px solid;
	border-color: #ddd #999 #999 #ddd;
}
*.horizontal_slider {
	background-color: #666;
	width: 10px;
	height: 10px;
	position: relative;
	z-index: 2;
	line-height: 0;
	margin: 0;
	border: 2px solid;
	border-color: #999 #333 #333 #999;
}
*.horizontal_slit {
	background-color: #333;
	width: 80px;
	height: 5px;
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
*.display_holder {
	display:none;
	margin-top:0px;
	float:right;
	background-color: #bbb;
	color: #fff;
	width: 25px;
	text-align: right;
	padding: 0;
	border: 1px solid;
	border-color: #ddd #999 #999 #ddd;
}
.value_display {

	background-color: #bbb;
	color: #333;
	width: 20px;
	margin: 0 2px;
	text-align: right;
	font-size: 10pt;
	font-face: verdana, arial, helvetica, sans-serif;
	font-weight: bold;
	line-height: 12px;
	border: 0;
	cursor: default;
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




	

</style>


<div id="client3">










<script type="text/javascript">';
echo "	    function test33(){

			var se = document.getElementById('scale').value;
			var re = document.getElementById('rotate').value;
			var tx = document.getElementById('translate_x').value;
			var ty = document.getElementById('translate_y').value;
			var sx = document.getElementById('skew_x').value;
			var sy = document.getElementById('skew_y').value;";


			echo "document.getElementById('out3').innerHTML =";


echo ' "<style>#temple4" + "{" + "background-color:#fff;height:100px;float:right;width:100px;" + "-moz-transform: scale(" + se + ") rotate(" + re + "deg) translateX(" + tx + "px) translateY(" + ty + "px) skewX(" + sx + "deg) skewY(" + sy + "deg);" + "-webkit-transform: scale(" + se + ") rotate(" + re + "deg) translateX(" + tx + "px) translateY(" + ty + "px) skewX(" + sx + "deg) skewY(" + sy + "deg);" + "-0-transform: scale(" + se + ") rotate(" + re + "deg) translateX(" + tx + "px) translateY(" + ty + "px) skewX(" + sx + "deg) skewY(" + sy + "deg);" + "-ms-transform: scale(" + se + ") rotate(" + re + "deg) translateX(" + tx + "px) translateY(" + ty + "px) skewX(" + sx + "deg) skewY(" + sy + "deg);" + "transform: scale(" + se + ") rotate(" + re + "deg) translateX(" + tx + "px) translateY(" + ty + "px) skewX(" + sx + "deg) skewY(" + sy + "deg);" + "}</style>" + "<div id=';echo ">";echo '</div><br>" + "';

echo "<textarea style='height:100px;width:100px;border:solid 2px #ccc;'";

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
    <form  style="float:left;height:100%;width:100px;" action="" onsubmit="return test33()">

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


		<div onchange="return test5()" class="horizontal_slider" id="horizontal_slider_13" style="left: 38px;"
			onmousedown="'; echo "slide(event, 'horizontal', 75, 0, 2, 101, 1, 'scale'"; echo ');" >&nbsp;</div>
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
			onmousedown="slide(event, ';echo "'horizontal', 75, 0, 360, 361, 0, 'rotate'"; echo ');">
			&nbsp;
		</div>
	</div>


<div class="flap">Translate X</div>	<!-- Value display 3 (red)	-->
	<div class="display_holder" id="display_holder_33" >
		<!-- Default value: 40 -->
		<input type="text" class="value_display" id="translate_x" value="0" onfocus="blur(this);" />
	</div>
	<!-- Horizontal slider 3 (red) -->
	<div class="horizontal_track" id="horizontal_track_33" >
		<div class="horizontal_slit" id="horizontal_slit_33" >&nbsp;</div>
		<!-- Total movement: 100 pixels, Scale: 1 [value/pixel],
			Default position: 40 pixels, Connected to value_display_3 -->
		<div class="horizontal_slider" id="horizontal_slider_33" style="left: 5px;"
			onmousedown="slide(event, ';echo "'horizontal', 75, 0, 100, 101, 0, 'translate_x'";echo ');">&nbsp;</div>
	</div>

<div class="flap">Translate Y</div>	<!-- Value display 5 (red)	-->
	<div class="display_holder" id="display_holder_53" >
		<!-- Default value: 40 -->
		<input type="text" class="value_display" id="translate_y" value="0" onfocus="blur(this);" />
	</div>
	<!-- Horizontal slider 5 (red) -->
	<div class="horizontal_track" id="horizontal_track_53" >
		<div class="horizontal_slit" id="horizontal_slit_53" >&nbsp;</div>
		<!-- Total movement: 100 pixels, Scale: 1 [value/pixel],
			Default position: 40 pixels, Connected to value_display_3 -->
		<div class="horizontal_slider" id="horizontal_slider_53" style="left: 5px;"
			onmousedown="slide(event, ';echo "'horizontal', 75, 0, 100, 101, 0, 'translate_y'";echo ');">&nbsp;</div>
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
			onmousedown="slide(event, ';echo "'horizontal', 75, 0, 100, 101, 0, 'skew_x'";echo ');">&nbsp;</div>
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
			onmousedown="slide(event, ';echo "'horizontal', 75, 0, 100, 101, 0, 'skew_y'";echo ');">&nbsp;</div>
	</div>


    </form>
<div id="temple4" style="height:100px;width:100px;float:right;"></div>
    <div id="out3" style="margin-top:-100px;margin-left:5px;float:right;" >
    </div>
</body>
</div>

<br><br><br><br><br>









';
echo "
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
		displayObj.value = v 
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





}
add_shortcode( 'lcss_transform', 'lcsstrans' );








//[foobar]
function ltextshadow( $atts ){
 echo '


<style>


#main-body

{

width:200px;
font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
'; echo "



padding:1px;




/*style*/

border-top-left-radius:9px;
border-top-right-radius:9px;
border-bottom-right-radius:9px;
border-bottom-left-radius:9px;

-moz-border-top-left-radius:9px;
-moz-border-top-right-radius:9px;
-moz-border-bottom-right-radius:9px;
-moz-border-bottom-left-radius:9px;

-webkit-border-top-left-radius:9px;
-webkit-border-top-right-radius:9px;
-webkit-border-bottom-right-radius:9px;
-webkit-border-bottom-left-radius:9px;


";
echo '
';echo " 
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
height:100px;
width:100px;
font-size:10px;

}



";echo '


h2
{
font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
font-weight:100;
}

#client4

{height:200px;width:200px;background-image: url(/wp-content/plugins/lw-website-tools/images/retina_wood.png);}



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
width:100px;
font-size:10px;
}




*.horizontal_track {
	background-color: #bbb;
	width: 90px;
	line-height: 0px;
	font-size: 0px;
	text-align: left;
	padding: 4px;
	border: 1px solid;
	border-color: #ddd #999 #999 #ddd;
}
*.horizontal_slider {
	background-color: #666;
	width: 10px;
	height: 10px;
	position: relative;
	z-index: 2;
	line-height: 0;
	margin: 0;
	border: 2px solid;
	border-color: #999 #333 #333 #999;
}
*.horizontal_slit {
	background-color: #333;
	width: 80px;
	height: 5px;
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
*.display_holder {
	display:none;
	margin-top:0px;
	float:right;
	background-color: #bbb;
	color: #fff;
	width: 25px;
	text-align: right;
	padding: 0;
	border: 1px solid;
	border-color: #ddd #999 #999 #ddd;
}
.value_display {

	background-color: #bbb;
	color: #333;
	width: 20px;
	margin: 0 2px;
	text-align: right;
	font-size: 10pt;
	font-face: verdana, arial, helvetica, sans-serif;
	font-weight: bold;
	line-height: 12px;
	border: 0;
	cursor: default;
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


<div id="client4">
	<script type="text/javascript" src="/wp-content/plugins/lw-website-tools/js/jscolor.js"></script>


';


 echo '




<script type="text/javascript">
';
echo "	    function test5(){

			var hl = document.getElementById('x').value;
			var vl = document.getElementById('y').value;
			var bl = document.getElementById('blur').value;
			var sc = document.getElementById('shadow_color').value;";


			echo "document.getElementById('out5').innerHTML =";


echo ' "<style>#temple2" + "{" + "" + "text-shadow: " + hl + "px " + vl + "px " + bl + "px #" + sc + ";" + "filter: dropshadow(color=#" + sc + ", offx=" + hl + ", offy=" + vl + ");" + "}" + "</style>" + "<div id=';echo "''>";echo '</div><br>" + "';


echo "<textarea style='height:100px;width:100px;border:solid 2px #ccc;'";

echo '>" + "/*style*/" + "&#013;" + "&#013;" + "text-shadow: " + hl + "px " + vl + "px " + bl + "px #" + sc + ";" + "&#013;" + "filter: dropshadow(color=#" + sc + ", offx=" + hl + ", offy=" + vl + ");" + "</textarea>" + "<div id=';
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


    <form action="" style="float:left;height:100%;width:100px;" onsubmit="return test5()">

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
			onmousedown="'; echo "slide(event, 'horizontal', 75, 0, 100, 101, 0, 'x'"; echo ');test5();" >&nbsp;</div>


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
			onmousedown="slide(event, ';echo "'horizontal', 75, 0, 100, 101, 0, 'y'"; echo ');">
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
			onmousedown="slide(event, ';echo "'horizontal', 75, 0, 30, 101, 0, 'blur'";echo ');">&nbsp;</div>
	</div>

<table>
<tr>
<td><br><br>
</td>
<td>
<div class="flap">Shadow-Color</div>
<input onchange="return test5();" class="color" value="000000" style="font-size: 15pt;height:15px;background-color:white;width:98px;border: 2px solid #ccc" id="shadow_color" type="text" name="" /></td>
</td>
</table>
  <p>

        </p>

';

echo '

    </form>

<div id="temple2" style="float:right"><br><br>Your Text :D</div>


    <div id="out5" style="margin-top:-100px;margin-left:5px;float:right;"></div>
</body>
</div>




<br><br>







';
echo "
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





}
add_shortcode( 'ltext_shadow', 'ltextshadow' );







//[foobar]
function lgradient( $atts ){
 echo '


<style>


#main-body

{

width:200px;
font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
'; echo "



padding:1px;




/*style*/

border-top-left-radius:9px;
border-top-right-radius:9px;
border-bottom-right-radius:9px;
border-bottom-left-radius:9px;

-moz-border-top-left-radius:9px;
-moz-border-top-right-radius:9px;
-moz-border-bottom-right-radius:9px;
-moz-border-bottom-left-radius:9px;

-webkit-border-top-left-radius:9px;
-webkit-border-top-right-radius:9px;
-webkit-border-bottom-right-radius:9px;
-webkit-border-bottom-left-radius:9px;


";
echo '
';echo " 
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
height:100px;
width:100px;
font-size:10px;

}



";echo '


h2
{
font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
font-weight:100;
}


#client5

{height:200px;width:200px;background-image: url(/wp-content/plugins/lw-website-tools/images/retina_wood.png);}


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
width:100px;
font-size:10px;
}




*.horizontal_track {
	background-color: lightgrey;
	width: 90px;
	line-height: 0px;
	font-size: 0px;
	text-align: left;
	padding: 4px;
	border: 1px solid;
	border-color: #ddd #999 #999 #ddd;
}
*.horizontal_slider {
	background-color: #666;
	width: 10px;
	height: 10px;
	position: relative;
	z-index: 2;
	line-height: 0;
	margin: 0;
	border: 2px solid;
	border-color: lightgrey grey grey lightgrey;
}
*.horizontal_slit {
	background-color: #fff;
	width: 80px;
	height: 5px;
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
*.display_holder {
	display:none;
	margin-top:0px;
	float:right;
	background-color: #bbb;
	color: #fff;
	width: 25px;
	text-align: right;
	padding: 0;
	border: 1px solid;
	border-color: #ddd #999 #999 #ddd;
}
.value_display {

	background-color: #bbb;
	color: #333;
	width: 20px;
	margin: 0 2px;
	text-align: right;
	font-size: 10pt;
	font-face: verdana, arial, helvetica, sans-serif;
	font-weight: bold;
	line-height: 12px;
	border: 0;
	cursor: default;
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




.to-top
{
display:inline-block;
height:50px;
width:50px;
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
	border: 1px solid;
	border-color: #ddd #999 #999 #ddd;
}

.top-right
{

display:inline-block;
height:50px;
width:50px;
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
	border: 1px solid;
	border-color: #ddd #999 #999 #ddd;
}


.top-left
{

display:inline-block;
height:50px;
width:50px;

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
	border: 1px solid;
	border-color: #ddd #999 #999 #ddd;


}



#header-text

{
font-size:72px;
font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
font-weight:100;
}

#main-body

{

width:200px;
font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
'; echo "



padding:1px;




/*style*/

border-top-left-radius:9px;
border-top-right-radius:9px;
border-bottom-right-radius:9px;
border-bottom-left-radius:9px;

-moz-border-top-left-radius:9px;
-moz-border-top-right-radius:9px;
-moz-border-bottom-right-radius:9px;
-moz-border-bottom-left-radius:9px;

-webkit-border-top-left-radius:9px;
-webkit-border-top-right-radius:9px;
-webkit-border-bottom-right-radius:9px;
-webkit-border-bottom-left-radius:9px;


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

height:100px;
width:100px;
font-size:10px;
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
height:100px;
width:100px;
font-size:10px;

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
height:100px;
width:100px;
font-size:10px;

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
height:100px;
width:100px;
font-size:10px;

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
height:100px;
width:100px;
font-size:10px;

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
height:100px;
width:100px;
font-size:10px;

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
height:100px;
width:100px;
font-size:10px;

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
height:100px;
width:100px;
font-size:10px;

}

";echo '


h2
{
font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
font-weight:100;
}


#client5

{height:200px;width:200px;}

#client4

{height:200px;width:200px;}

#client3

{height:200px;width:200px;}

#idone

{height:200px;width:200px;}

#client2

{height:200px;width:200px;}

#client1

{height:200px;width:200px;}


#help

{height:200px;width:200px;}

#yay1 select 

{


}


#yay1
{
	overflow:hidden;
	padding: 5px;
	width: 100px;
	font-family: Helvetica, sans-serif;
	font-size: 13px;
	margin: 0px 0px 10px 0px;
	border: 1px solid #ccc;
}


#plugin-title {
  background-image: url(http://www.therecipeminute.com/header.png);
}


#yay1:focus
{
border: 1px solid #900;
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



.to-top
{
display:inline-block;
height:50px;
width:50px;
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
	border: 1px solid;
	border-color: #ddd #999 #999 #ddd;
}

.top-right
{

display:inline-block;
height:50px;
width:50px;
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
	border: 1px solid;
	border-color: #ddd #999 #999 #ddd;
}


.top-left
{

display:inline-block;
height:50px;
width:50px;

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
	border: 1px solid;
	border-color: #ddd #999 #999 #ddd;


}
.flap {
width:100px;
font-size:10px;
}

	

</style>


<div id="client5">

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
    </script><center>
    <input id="tempDivName" type="hidden" />
 <a OnClick="MyFunction(';echo "'myDiv1'";echo ');"><div class="to-top" style="height:25px;width:25px;"></div></a>
<a OnClick="MyFunction(';echo "'myDiv2'";echo ');"><div class="top-right" style="height:25px;width:25px;"></div></a>
<a OnClick="MyFunction(';echo "'myDiv3'";echo ');"><div class="top-left" style="height:25px;width:25px;"></div></a></center>

    <div id="myDiv1" style="display:none">
     <script type="text/javascript">';
echo "	    function test7(){

			var fc = document.getElementById('the_first_color').value;
			var sn = document.getElementById('the_second_color').value;
			var fcn = document.getElementById('the_first_color_number').value;
			var snn = document.getElementById('the_second_color_number').value;";


			echo "document.getElementById('out7').innerHTML =";


echo ' "<style>#temple7, .to-top" + "{" + "background-image: -moz-linear-gradient(top, #" + fc + " " + fcn + "%, #" + sn + " " + snn + "%);" +  "}" + "#horizontal_slider_71 { background-color: #" + sn + ";}" + "#horizontal_slider_7 { background-color: #" + fc + ";}" + "#the_first_color_number { background-color: #" + fc + ";}" + "#the_second_color_number { background-color: #" + sn + ";}" + "/* IE 10 Consumer Preview */" + "background-image: -ms-linear-gradient(top, #" + fc + " " + fcn + "%, #" + sn + " " + snn + "%);" + "/* Opera */" + "background-image: -o-linear-gradient(top, #" + fc + " " + fcn + "%, #" + sn + " " + snn + "%);" + "/* Webkit (Safari/Chrome 10) */" + "background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #" + fc + "), color-stop(1, #" + sn + ")); " + "/* Webkit (Chrome 11+) */" + + "background-image: -webkit-linear-gradient(top, #" + fc + " " + fcn + "%, #" + sn + " " + snn + "%);" + "/* W3C Markup, IE10 Release Preview */" + + "background-image: linear-gradient(to bottom, #" + fc + " " + fcn + "%, #" + sn + " " + snn + "%);" + "</style>" + "<div id=';echo "''>";echo '</div>" + "';

echo "<textarea style='height:50px;width:100px;'";echo '>" + "/*style*/" + "&#013;" + "/* Mozilla Firefox */" + "&#013;" + "background-image: -moz-linear-gradient(top, #" + fc + " " + fcn + "%, #" + sn + " " + snn + "%);" + "&#013;" + "/* IE 10 Consumer Preview */" + "&#013;" + "background-image: -ms-linear-gradient(top, #" + fc + " " + fcn + "%, #" + sn + " " + snn + "%);" + "&#013;" + "/* Opera */" + "&#013;" + "background-image: -o-linear-gradient(top, #" + fc + " " + fcn + "%, #" + sn + " " + snn + "%);" + "&#013;" + "/* Webkit (Safari/Chrome 10) */" + "&#013;" + "background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #" + fc + "), color-stop(1, #" + sn + ")); " + "&#013;" + "/* Webkit (Chrome 11+) */" + "&#013;" + "background-image: -webkit-linear-gradient(top, #" + fc + " " + fcn + "%, #" + sn + " " + snn + "%);" +  "&#013;" + "/* W3C Markup, IE10 Release Preview */" + "&#013;" + "background-image: linear-gradient(to bottom, #" + fc + " " + fcn + "%, #" + sn + " " + snn + "%);" + "</textarea>" + "<div id=';echo "''>"; echo '</div>";';
echo "
			document.getElementById('out7').style.display ="; echo ' "block";';

echo '			return false;
		}
	</script>






</head>

<body>
    <form style="float:left;height:100%;width:100px;" action="" onsubmit="return test7()">




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
			onmousedown="'; echo "slide(event, 'horizontal', 75, 0, 100, 101, 0, 'the_first_color_number'"; echo ');" >&nbsp;</div>


	</div>








</div>

<div class="flap">Color</div>
<input onchange="return test7()" class="color {onImmediateChange:';echo "'updateInfo(this);'";echo '}" value="ffffff" style="font-size: 15px;height:15px;background-color:white;width:100px;border: 2px solid #ccc" type="text" id="the_first_color" />


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
			onmousedown="slide(event, ';echo "'horizontal', 75, 0, 500, 101, 0, 'the_second_color_number'"; echo ');">
			&nbsp;
		</div>
	</div>

</div>

<div class="flap">Color</div>
<input onchange="return test7()" class="color" value="91E842" style="font-size: 15px;height:15px;background-color:white;width:100px;border: 2px solid #ccc" type="text" id="the_second_color" />





         </form>
<div id="temple7" style="float:right;"></div>
    <div id="out7" style="margin-top:-43px;margin-left:5px;float:right;">
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


echo ' "<style>#temple9, .top-right" + "{" + "background-image: -moz-linear-gradient(top right, #" + fcc + " " + fcnc + "%, #" + snc + " " + snnc + "%);" +"/* IE 10 Consumer Preview */" + "&#013;" + "background-image: -ms-linear-gradient(top right, #" + fcc + " " + fcnc + "%, #" + snc + " " + snnc + "%);" + "/* Opera */" + "background-image: -o-linear-gradient(top right, #" + fcc + " " + fcnc + "%, #" + snc + " " + snnc + "%);" + "/* Webkit (Safari/Chrome 10) */" + "background-image: -webkit-gradient(linear, right top, left bottom, color-stop(0, #" + fcc + "), color-stop(1, #" + snc + ")); " + "/* Webkit (Chrome 11+) */" + "background-image: -webkit-linear-gradient(top right, #" + fcc + " " + fcnc + "%, #" + snc + " " + snnc + "%);" + "/* W3C Markup, IE10 Release Preview */" + "background-image: linear-gradient(to bottom left, #" + fcc + " " + fcnc + "%, #" + snc + " " + snnc + "%);" + "}" + "#horizontal_slider_91 { background-color: #" + snc + ";}" + "#horizontal_slider_9 { background-color: #" + fcc + ";}" + "#the_first_color_number2 { background-color: #" + fcc + ";}" + "#the_second_color_number2 { background-color: #" + snc + ";}" + "</style>" + "<div id=';echo "''>";echo '</div>" + "';

echo "<textarea style='height:50px;width:100px;'";echo '>" + "/*style*/" + "&#013;" + "background-image: -moz-linear-gradient(top right, #" + fcc + " " + fcnc + "%, #" + snc + " " + snnc + "%);" + "/* IE 10 Consumer Preview */" + "&#013;" + "background-image: -ms-linear-gradient(top right, #" + fcc + " " + fcnc + "%, #" + snc + " " + snnc + "%);" + "&#013;" + "/* Opera */" + "&#013;" + "background-image: -o-linear-gradient(top right, #" + fcc + " " + fcnc + "%, #" + snc + " " + snnc + "%);" + "&#013;" + "/* Webkit (Safari/Chrome 10) */" + "&#013;" + "background-image: -webkit-gradient(linear, right top, left bottom, color-stop(0, #" + fcc + "), color-stop(1, #" + snc + ")); " + "&#013;" + "/* Webkit (Chrome 11+) */" + "&#013;" + "background-image: -webkit-linear-gradient(top right, #" + fcc + " " + fcnc + "%, #" + snc + " " + snnc + "%);" +  "&#013;" + "/* W3C Markup, IE10 Release Preview */" + "&#013;" + "background-image: linear-gradient(to bottom left, #" + fcc + " " + fcnc + "%, #" + snc + " " + snnc + "%);" +  "</textarea>" + "<div id=';echo "''>"; echo '</div>";';
echo "
			document.getElementById('out9').style.display ="; echo ' "block";';

echo '			return false;
		}
	</script>






</head>

<body>
    <form style="float:left;height:100%;width:100px;" action="" onsubmit="return test9()">

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
			onmousedown="'; echo "slide(event, 'horizontal', 75, 0, 100, 101, 0, 'the_first_color_number2'"; echo ');" >&nbsp;</div>


	</div>


</div>



<div>

<div class="flap">Color</div>
<input onchange="return test9()" class="color {onImmediateChange:';echo "'updateInfo(this);'";echo '}" value="ffffff" style="font-size: 15px;height:15px;background-color:white;width:100px;border: 2px solid #ccc" type="text" id="the_first_color2" />

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
			onmousedown="slide(event, ';echo "'horizontal', 75, 0, 500, 101, 0, 'the_second_color_number2'"; echo ');">
			&nbsp;
		</div>
	</div>

</div>


<div class="flap">Color</div>
<input onchange="return test9()" class="color" value="61A0E8" style="font-size: 15px;height:15px;background-color:white;width:100px;border: 2px solid #ccc" type="text" id="the_second_color2" />




         </form>
<div id="temple9" style="float:right;"></div>
    <div id="out9" style="margin-top:-43px;margin-left:5px;float:right;">
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


echo ' "<style>#temple10, .top-left" + "{" + "background-image: -moz-linear-gradient(top left, #" + fccd + " " + fcncd + "%, #" + sncd + " " + snncd + "%);" + "/* IE 10 Consumer Preview */" + "background-image: -ms-linear-gradient(top left, #" + fccd + " " + fcncd + "%, #" + sncd + " " + snncd + "%);" + "/* Opera */" + "background-image: -o-linear-gradient(top left, #" + fccd + " " + fcncd + "%, #" + sncd + " " + snncd + "%);" + "/* Webkit (Safari/Chrome 10) */" + "background-image: -webkit-gradient(linear, left top, right bottom, color-stop(0, #" + fccd + "), color-stop(1, #" + sncd + ")); " + "/* Webkit (Chrome 11+) */" + "background-image: -webkit-linear-gradient(top left, #" + fccd + " " + fcncd + "%, #" + sncd + " " + snncd + "%);" + "/* W3C Markup, IE10 Release Preview */" + "background-image: linear-gradient(to bottom right, #" + fccd + " " + fcncd + "%, #" + sncd + " " + snncd + "%);" +  "}" + "#horizontal_slider_101 { background-color: #" + sncd + ";}" + "#horizontal_slider_10 { background-color: #" + fccd + ";}" + "#the_first_color_number3 { background-color: #" + fccd + ";}" + "#the_second_color_number3 { background-color: #" + sncd + ";}" + "</style>" + "<div id=';echo "''>";echo '</div>" + "';

echo "<textarea style='height:50px;width:100px;'";echo '>" + "/*style*/" + "&#013;" + "background-image: -moz-linear-gradient(top left, #" + fccd + " " + fcncd + "%, #" + sncd + " " + snncd + "%);" + "/* IE 10 Consumer Preview */" + "&#013;" + "background-image: -ms-linear-gradient(top left, #" + fccd + " " + fcncd + "%, #" + sncd + " " + snncd + "%);" + "&#013;" + "/* Opera */" + "&#013;" + "background-image: -o-linear-gradient(top left, #" + fccd + " " + fcncd + "%, #" + sncd + " " + snncd + "%);" + "&#013;" + "/* Webkit (Safari/Chrome 10) */" + "&#013;" + "background-image: -webkit-gradient(linear, left top, right bottom, color-stop(0, #" + fccd + "), color-stop(1, #" + sncd + ")); " + "&#013;" + "/* Webkit (Chrome 11+) */" + "&#013;" + "background-image: -webkit-linear-gradient(top left, #" + fccd + " " + fcncd + "%, #" + sncd + " " + snncd + "%);" +  "&#013;" + "/* W3C Markup, IE10 Release Preview */" + "&#013;" + "background-image: linear-gradient(to bottom right, #" + fccd + " " + fcncd + "%, #" + sncd + " " + snncd + "%);" + "</textarea>" + "<div id=';echo "''>"; echo '</div>";';
echo "
			document.getElementById('out10').style.display ="; echo ' "block";';

echo '			return false;
		}
	</script>






</head>

<body>
    <form style="float:left;height:100%;width:100px;" action="" onsubmit="return test10()">

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
			onmousedown="'; echo "slide(event, 'horizontal', 75, 0, 100, 101, 0, 'the_first_color_number3'"; echo ');" >&nbsp;</div>


	</div>



</div>

<div class="flap">Color</div>
<input onchange="return test10()" class="color {onImmediateChange:';echo "'updateInfo(this);'";echo '}" value="ffffff" style="font-size: 15px;height:15px;background-color:white;width:100px;border: 2px solid #ccc" type="text" id="the_first_color3" />

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
			onmousedown="slide(event, ';echo "'horizontal', 75, 0, 500, 101, 0, 'the_second_color_number3'"; echo ');">
			&nbsp;
		</div>
</div>
</div>

<div class="flap">Color</div>
<input onchange="return test10()" class="color" value="E86DA2" style="font-size: 15px;height:15px;background-color:white;width:100px;border: 2px solid #ccc" type="text" id="the_second_color3" />



         </form>
<div id="temple10" style="float:right;"></div>
    <div id="out10" style="margin-top:-49px;margin-left:5px;float:right;">
    </div>
</body>






    </div>


</div>


<br><br>






';
echo "
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





}
add_shortcode( 'lcss_gradient', 'lgradient' );




function limg_shortcode( $atts, $content = null ) {
   return '<style>.slide-container {height:700px;width:700px;}.image-container{position:relative;height:100px; /*Safari and Chrome*/}.image-container img {height:200px;width:200px;}


.image-container > img:first-child {
position:absolute;top:0px;left:0px;}

.image-container > img:first-child + img {
position:absolute;top:0px;left:200px;}


.image-container > img:first-child + img + img {
position:absolute;top:0px;left:400px;}


.image-container img:hover {z-index:99999;height:500px;width:500px;position:absolute;top:50%;left:50%;margin-top:-250px;margin-left:-250px;
}</style><div class="slide-container"><div class="image-container">' . $content . '</div></div>';
}
add_shortcode( 'limg', 'limg_shortcode' );





?>