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
/* # Datei css/agora.css.php 1.0  (bluepageCMS V2.5.7)                                                */
/* #################################################################################################### */
/* # Copyright © 2008 ISS-Oberlausitz (www.iss-ol.de)                                                   */
/* # Stand:  17.09.2008                                                                                 */
/* # Author: T.Hojenski                                                                                 */
/* # Email:  info@iss-ol.de                                                                             */
/* #################################################################################################### */
/*                                                                                                      */

<?php /* ###################################### Agora ###################################### */ ?>

#agora_content {
   clear:left; 
   display:table; 
   overflow:hidden;
   position:relative;
   left:0;
   width:<?php echo $templ_width; ?>;
}

#agora_content table {
   padding:0;
   margin:0;
   width:100%;
}
#agora_content td {
   font-family:<?php echo $cmsVar['templ']['font_family']; ?>;
   font-size:10px;
   font-weight:normal;
   line-height:150%;
   color:<?php echo $cmsVar['templ']['font_color']; # 333333 ?>;
   vertical-align:top;
   margin-right:2px;
}
#agora_content .lefttext {
   width:auto;
}
#agora_content .termhighlight {
   color:#C70707;
}

#agora_content a {
   color:#B73A34;
   text-decoration:none;
   border-bottom:0px solid #B73A34;
}
#agora_content a:hover {
   color:#B73A34;
   text-decoration:none;
   border-bottom:1px solid #B73A34;
}
#agora_content a.link_back {
   color:#B73A34;
   text-decoration:none;
   background-image:url('../images/sys/link_back.gif');
   background-repeat:no-repeat;
   background-position:0px 1px;
   padding-left:15px;
   margin-right:0px;
   border-bottom:0px solid #B73A34;
}
#agora_content a.link_back:hover {
   color:#B73A34;
   text-decoration:none;
   background-image:url('../images/sys/link_back.gif');
   background-repeat:no-repeat;
   background-position:0px -49px;
   padding-left:15px;
   border-bottom:1px solid #B73A34;
}

#agora_content .img_a {
   text-decoration:none; 
   vertical-align:bottom;  
   display:block;
   background-color:#ffffff;
/*
*/
   background-image:url('../images/sys/loading.gif');
   background-repeat:no-repeat;
   background-position:center center;
}

.agora_img_border {
   position:relative;
   border:1px solid #CCCCCC;
   width:<?php if (!$ie) echo ($pic_standard_size-2); else echo $pic_standard_size; ?>;
   padding:0;
   margin:0;
}
.agora_img_border img {
   position:relative;
   top:<?php if ($ie) { echo "1px;"; } else echo "0"; ?>;
   padding:0;
   margin:0;
} 
.agora_img_zoom {
   position:absolute; 
   right:<?php if ($ie) { echo "-1px;"; } else echo "0"; ?>; 
   bottom:<?php if (!$ie) echo '0'; else echo '-1px;'; ?>; 
   width:19px; 
   height:15px; 
   background-image:url(../images/sys/lupe.gif);    
   cursor:pointer; 
   padding:0; 
   margin:0; 
   display:block;
}
#agora_content .agora_img_border a, 
#agora_content .agora_img_border a:hover {
   border:0px;
}
#agora_content a.link_dnl {
   background-image:url('../images/dnl/pdf.gif');
   background-repeat:no-repeat;
   padding-left:22px;
   height:25px;
}
#agora_content a.link_dnl:hover {
   background-image:url('../images/dnl/pdf.gif');
   background-repeat:no-repeat;
   padding-left:22px;
   height:25px;
   border:0px;
   text-decoration:underline;
}
#agora_content a.link_noborder:hover {
   border:0;
}
.frml_agora_select {
   width:<?php echo $pic_standard_size; ?>;
}
.frml_agora_input {
   width:<?php echo $templ_txt_width; ?>;
}
.frml_agora_input2 {
   width:40px;
}


td.righttext {
   text-align:right;
   padding-right:5px;
   background-color:#A9C4CF;
}
td.lefttextbib {
   text-align:left;
   padding-left:5px;
   background-color:#C2E0ED;
}
