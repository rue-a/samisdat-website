<?php
header('Content-Type: text/css; charset=utf-8');

$cmsVar = array(
  'templ' => array(
    'width' => 470,
    'bgColor' => '#D1F1FF',
    'bgcolor' => '#D1F1FF',
    'font_color' => '#333333',
    'font_family' => 'verdana,helvetica,sans-serif',
    'font_size' => 12,
  ),
);
$cmsConfig = $cmsVar;

$HTTP_USER_AGENT = $_SERVER['HTTP_USER_AGENT'];
$ie = $ie6 = $ns4 = $moz = $opera = $safari = $ieMAC = $ms = 0;

if(preg_match("/(mozilla)\/([4]{1}.[0-9]{1,3})/i",$HTTP_USER_AGENT,$regs) && !preg_match("/(MSIE)/i",$HTTP_USER_AGENT,$regs))                                                                       { $ns4 = 1;   }
if(preg_match("/(mozilla)\/([4]{1}.[0-9]{1,3})/i",$HTTP_USER_AGENT,$regs) && preg_match("/(MSIE)/i",$HTTP_USER_AGENT,$regs) && !preg_match("/(opera) ([0-9]{1,2}.[0-9a-z]{1,3})/i",$HTTP_USER_AGENT,$regs)) { $ie = 1;    }
if(preg_match("/(mozilla)/i",$HTTP_USER_AGENT,$regs) && !preg_match("/(MSIE)/",$HTTP_USER_AGENT,$regs) && !preg_match("/(opera) ([0-9]{1,2}.[0-9a-z]{1,3})/i",$HTTP_USER_AGENT,$regs))                    { $moz = 1;   }
if(preg_match("/(opera) ([0-9]{1,2}.[0-9a-z]{1,3})/i",$HTTP_USER_AGENT,$regs))                                                                                                             { $opera = 1; if ($regs[2] > 8.0) $opera8 = 1; }
if(preg_match("/(opera)\/([0-9]{1,2}.[0-9a-z]{1,3})/i",$HTTP_USER_AGENT,$regs))                                                                                                             { $opera = 1; if ($regs[2] > 8.0) { $opera8 = 1; } }
if(preg_match("/(safari)/i",$HTTP_USER_AGENT,$regs))                                                                                                                                       { $safari = 1; }

if(preg_match("/(mozilla)\/([4]{1}.[0-9]{1,3})/i",$HTTP_USER_AGENT,$regs) && preg_match("/(MSIE)/i",$HTTP_USER_AGENT,$regs) && !preg_match("/(opera) ([0-9]{1,2}.[0-9a-z]{1,3})/i",$HTTP_USER_AGENT,$regs) && preg_match("/Mac/i",$HTTP_USER_AGENT,$regs)) { $ieMAC = 1;    }
$pic_standard_size         = '170';
$templ_width               = '470';
$templ_hspace              = '10';
$templ_txt_width           = '290';
$cms_headline_img_size     = '35';

?>
/*                                                                                                      */
/* #################################################################################################### */
/* # Datei css/print.css.php 1.0  (bluepageCMS V2.5.6.)                                                */
/* #################################################################################################### */
/* # Copyright © 2008 ISS-Oberlausitz (www.iss-ol.de)                                                   */
/* # Stand:  07.01.2008                                                                                 */
/* # Author: T.Hojenski                                                                                 */
/* # Email:  info@iss-ol.de                                                                             */
/* #################################################################################################### */
/*                                                                                                      */
@import url("./layout.css.php");
@import url("./basis.css.php");


#bluepage_body {
   background-image:none;
   background-color:#ffffff;
   font-size:15px;
   text-align:left;
   padding:0 5px;
   color:#000000;
   height:auto;
}
#bluepage {
   position:relative;
   top:0px;
   background-image:none;
   background-color:#ffffff;
   color:#000000;
   text-align:left;
   padding:0;
   margin:0;
   width:580px;
   height:auto;
}
.bluepage_td2,
.bluepage_tab {
   width:auto;
   height:auto;
   background-color:#ffffff;
}


#bluepage_head,
#bluepage_bottom,
#bluepage_bnr,
#log,
.bluepage_td1,
.bluepage_td3,
#bluepage_head_bnr,
#bluepage_head_space,
#bluepage_headnav,
#bluepage_head_lgsel,
.bluepage_bottom_nav_line_top,
#bluepage_bottom_nav_content,
#bluepage_bottom_spacer,
#bluepage_border_bottom,
#bluepage_bottom_sitenav,
#bluepage_bottom_moz_space
{
   display:none;
}


a,
a.link_in,
a.link_ex
 {
   padding:0;
   margin:0; 
}
  
body {
   height:auto;
}

.img_border,
.img_border150,
.img_border160,
.img_border175,
.img_border200,
.img_border260,
.img_border300,
.img_border320,
.img_border340,
.img_border360,
.img_border400,
.img_border560
{
   display:none;
}
img {
   position:relative;
}
  
