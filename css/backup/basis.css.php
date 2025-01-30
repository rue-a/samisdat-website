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
/*
$opera ? $s['10px']  = '0.85em'      : $s['10px']  = '0.825em';
$opera ? $s['180px'] = '15em'        : $s['180px'] = '14.7em';
$opera ? $s['370px'] = '30.8em'      : $s['370px'] = '30.2em';
$opera ? $s['560px'] = '46.7em'      : $s['560px'] = '45.65em';

$opera ? $s['270px'] = '22.5em'      : $s['270px'] = '22.05em';
$opera ? $s['20px']  = '1.7em'       : $s['20px']  = '1.65em';

#$ie ? $s['560px'] = '45.65em' :$opera ? $s['530px'] = '37.85em' : $s['530px'] = '36.8em';

$opera ? $s['220px'] = '15.7em'  : $s['220px'] = '15.3em';
$opera ? $s['130px'] = '9.3em'   : $s['130px'] = '9em';
$opera ? $s['30px']  = '2.15em'  : $s['30px']  = '2.1em';
$opera ? $s['20px']  = '1.45em'  : $s['20px']  = '1.4em';

$opera ? $t['530px'] = '48.2em'  : $t['530px'] = '49.1em';
$opera ? $t['350px'] = '31.8em'  : $t['350px'] = '32.4em';
$opera ? $t['170px'] = '15.45em' : $t['170px'] = '15.7em';
$opera ? $t['10px']  = '0.93em'  : $t['10px']  = '0.93em';
*/
?>
/*                                                                                                      */
/* #################################################################################################### */
/* # Datei css/basis.css.php 1.0  (bluepageCMS V2.5.6)                                                */
/* #################################################################################################### */
/* # Copyright © 2007 ISS-Oberlausitz (www.iss-ol.de)                                                   */
/* # Stand:  01.12.2007                                                                                 */
/* # Author: T.Hojenski                                                                                 */
/* # Email:  info@iss-ol.de                                                                             */
/* #################################################################################################### */
/*                                                                                                      */


<?php /* ###################################### Body / Head ###################################### */ ?>
<?php 
if ($ie) { 
   echo "html {\n";
   echo "  filter: expression(document.execCommand(\"BackgroundImageCache\", false, true));\n";
   echo "}\n";
}
?>
.barrierefrei {
   display:none;
}

<?php /* ###################################### Space  ###################################### */ ?>

.space1         { height:  1px; overflow:hidden; padding:0; margin:0; }
.space2         { height:  2px; overflow:hidden; padding:0; margin:0; }
.space5         { height:  5px; overflow:hidden; padding:0; margin:0; }
.space10        { height: 10px; overflow:hidden; padding:0; margin:0; }
.space15        { height: 15px; overflow:hidden; padding:0; margin:0; }
.space20        { height: 20px; overflow:hidden; padding:0; margin:0; }
.space30        { height: 30px; overflow:hidden; padding:0; margin:0; }
.space40        { height: 40px; overflow:hidden; padding:0; margin:0; }
.space50        { height: 50px; overflow:hidden; padding:0; margin:0; }
.space60        { height: 60px; overflow:hidden; padding:0; margin:0; clear:both; }
.space100       { height:100px; overflow:hidden; padding:0; margin:0; }
.space130       { height:130px; overflow:hidden; padding:0; margin:0; }

.space1em       { height: 1em;   overflow:hidden; padding:0; margin:0; }
.space1_5em     { height: 1.5em; overflow:hidden; padding:0; margin:0; }
.space3em       { height: 3em;   overflow:hidden; padding:0; margin:0; }

.hspace         { position:relative; top:0; left:0; padding:0; margin:0; width:<?php echo $templ_hspace; ?>px; height:10px; display:table-cell; <?php if ($ie) echo "float:left;\n"; ?> }
.hspace2        { position:relative; top:0; left:0; padding:0; margin:0; width:<?php echo $templ_hspace; ?>px; height:10px; display:table-cell; overflow:hidden; <?php if ($ie) echo "float:left;\n"; ?>  }
.pspace         { height:1px;   overflow:hidden; padding:0; margin:0; width:<?php echo $pic_standard_size; ?>px; }
.pspace5        { height: 5px;  overflow:hidden; padding:0; margin:0; width:<?php echo $templ_width; ?>px; }
.pspace10       { height:10px;  overflow:hidden; padding:0; margin:0; width:<?php echo $templ_width; ?>px; }

.p_space       { height:3px; overflow:hidden; padding:0; margin:0; clear:left; }

<?php /* ###################################### Templates ###################################### */ ?>

.templ_table            { padding:0; margin:0; clear:left; display:table; overflow:hidden;  }
.templ_table_background { padding:0; margin:0; clear:left; display:table; background-color:#85ACAF; }

.templ_tr        { padding:0; margin:0; display:table-row; overflow:hidden; }

.templ_end       { position:relative; clear:left; }
.templ_space     { position:relative; top:0; height:10px; padding:0; margin:0; overflow:hidden; }

.templ_td        { vertical-align:top;position:relative; top:0; left:0; padding:0; margin:0; overflow:hidden; display:table-cell; overflow:hidden; <?php if ($ie) echo "float:left;\n"; ?> }
.templ_td_pic    { vertical-align:top;position:relative; top:0; left:0; padding:0; margin:0; overflow:hidden; display:table-cell; overflow:hidden; <?php if ($ie) echo "float:left;\n"; ?> width:<?php echo $pic_standard_size; ?>px; }
.templ_td_rpic   { vertical-align:top;position:relative; top:0; left:0; padding:0; margin:0; overflow:hidden; display:table-cell; overflow:hidden; <?php if ($ie) echo "float:left;\n"; ?> width:45px; }
.templ_td_txt    { vertical-align:top;position:relative; top:0; left:0; padding:0; margin:0; overflow:hidden; display:table-cell; overflow:hidden; <?php if ($ie) echo "float:left;\n"; ?> width:<?php echo $templ_txt_width; ?>px; }
.templ_td_rtxt   { vertical-align:top;position:relative; top:0; left:0; padding:0; margin:0; overflow:hidden; display:table-cell; overflow:hidden; <?php if ($ie) echo "float:left;\n"; ?> width:<?php echo $cmsVar['templ']['width']-45; ?>px; }
.templ_td_templ  { vertical-align:top;position:relative; top:0; left:0; padding:0; margin:0; overflow:hidden; display:table-cell; overflow:hidden; width:<?php echo $cmsVar['templ']['width']; ?>px; }
.templ_td_nosize { vertical-align:top;position:relative; top:0; left:0; padding:0; margin:0; overflow:hidden; display:table-cell; overflow:hidden; <?php if ($ie) echo "float:left;\n"; ?> }

.templ_table_bgimg {
   width:<?php if ($ie) { echo "570px"; } else { echo "563px"; } ?>;
   padding:2px; margin:0;
   background-color:#EBEBEB;
   border:1px solid #B4B4B4;
}

.templ_tableborder {
   border:1px solid #9F9F9F;
   padding:2px; margin:0;
   /*
   background-image:url('../images/bg_img2.gif');
   */ 
}
.box_txt         { padding:0; margin:0; }
.box_pictxt      { padding: 5px 0 0 0; margin:0; }
.box_space       { height:  0.3em; overflow:hidden; padding:0; margin:0; clear:left; }
.box_spaces      { position:relative; height:  0.8em; overflow:hidden; padding:0; margin:0; clear:both; width:100%; }

.templ_end       { position:relative; clear:left;  }

.display_none    { display:none; }

<?php /* ###################################### Img  ###################################### */ ?>

.img                { position:relative; right:0; bottom:0; vertical-align:bottom; }
.imgbox             { position:relative; right:0; bottom:0; height:100%; width:100%; text-align:right;  overflow:hidden; }
.imgbox_bg          { position:relative;  height:100%; width:100%; text-align:right;  background-color:#CCCCCC; }
.imgbox_bg2         { position:relative; height:100%; width:100%; text-align:right;  background-color:#CCCCCC;}
.img_zoom           { position:absolute; right:0; bottom:0; width:19px; height:15px; background-image:url(../images/sys/lupe.gif);    cursor:pointer; padding:0; margin:0; display:block; }
.img_link           { position:absolute; right:0; bottom:0; width:19px; height:15px; background-image:url(../images/sys/piclink.gif); cursor:pointer; padding:0; margin:0; display:block; }
.img_icon           { vertical-align:text-bottom; }
.img_symb           { margin-right:2px; vertical-align:text-bottom; }
.img_pt             { margin-right:2px; margin-top:<?php if ($ms OR $safari) { echo 3; } else { echo 2; } ?>px; vertical-align:text-bottom; float:left; }

.img_a              { text-decoration:none; vertical-align:bottom;  display:block;}

.gimg_border        { position:absolute; left:0;  top:0; width:100%; height:100%; border:5px solid #CCCCCC; display:block; } 
.gimgbox_bg         { position:relative; right:0; bottom:0; height:100%; width:100%; text-align:right;  background-color:#CCCCCC; }
.gimgbox_gbg        { position:relative; right:0; bottom:0; height:100%; width:100%; text-align:right;  background-color:#CCCCCC; }

.img_border         { position:absolute; left:0;  top:0; width:100%; height:100%; border:1px solid #CCCCCC; }

.img_anker          { float:left; padding:0; margin:2px 0 0 2px; vertical-align:text-bottom; }
.img_sitenav        { padding:0; margin-top:2px; vertical-align:text-bottom; }

.headline_img {
   float:left;
   width:100%;
   height:<?php echo $cms_headline_img_size; ?>px; 
   padding:0; 
   margin:0;
}

.bluepage_galnav {
   clear:left;
   width:100%;
   text-align:center;
}
.pic_intxt_1        { position:relative; padding-bottom:5px; padding-right:10px; float:left; } 
.pic_intxt_2        { position:relative; padding-bottom:5px; padding-left:10px; float:right; } 

.pt_li              { position:relative; background-image:url(../images/sys/pt.gif); background-position: 3px top; background-repeat:no-repeat; clear:left;  }
.pt_li_content      { margin-left:13px; }

<?php /* ###################################### Formular ###################################### */ ?>

<?php
$opera ? $f['10px']  = $templ_hspace.'px'               : $f['10px']  = $templ_hspace.'px';               # Space
$opera ? $f['180px'] = ($pic_standard_size-18).'px'     : $f['180px'] = ($pic_standard_size-18).'px';     # Pic
$opera ? $f['370px'] = ($templ_txt_width-10).'px'       : $f['370px'] = ($templ_txt_width-10).'px';       # Txt
$opera ? $f['560px'] = ($templ_width-28).'px'           : $f['560px'] = ($templ_width-28).'px';           # Templ

$opera ? $f['30px']  = '30px'                      : $f['30px']  = '30px';
$opera ? $f['60px']  = '60px'                      : $f['60px']  = '60px';

$opera ? $f['470px'] = ($templ_width-100).'px'     : $f['470px'] = ($templ_width-128).'px';     # Templ - lp   (-100)
$opera ? $f['280px'] = ($templ_txt_width-100).'px' : $f['280px'] = ($templ_txt_width-110).'px'; # Txt   - lp   (-100)
$opera ? $f['525px'] = ($templ_width-35).'px'      : $f['525px'] = ($templ_width-63).'px';      # Templ - l    (-35)
$opera ? $f['335px'] = ($templ_txt_width-35).'px'  : $f['335px'] = ($templ_txt_width-45).'px';  # Txt   - l    (-35)
$opera ? $f['495px'] = ($templ_width-65).'px'      : $f['495px'] = ($templ_width-103).'px';      # Templ - p    (-65)
$opera ? $f['305px'] = ($templ_txt_width-65).'px'  : $f['305px'] = ($templ_txt_width-75).'px';  # Txt   - p    (-65)



/*
$opera ? $f['10px']  = '10px'        : $f['10px']  = '10px';
$opera ? $f['180px'] = '150px'       : $f['180px'] = '150px';
$opera ? $f['370px'] = '310px'       : $f['370px'] = '310px';
$opera ? $f['560px'] = '470px'       : $f['560px'] = '470px';

$opera ? $f['30px']  = '30px'        : $f['30px']  = '30px';
$opera ? $f['60px']  = '60px'        : $f['60px']  = '60px';

$opera ? $f['470px'] = '455px'       : $f['470px'] = '455px';
$opera ? $f['280px'] = '265px'       : $f['280px'] = '265px';
$opera ? $f['525px'] = '520px'       : $f['525px'] = '520px';
$opera ? $f['335px'] = '330px'       : $f['335px'] = '330px';
$opera ? $f['495px'] = '490px'       : $f['495px'] = '490px';
$opera ? $f['305px'] = '300px'       : $f['305px'] = '300px';
*/
?>

form                 { padding:0; margin:0; }

.input               { font-size:11px; font-family:<?php echo $cmsVar['templ']['font_family']; ?>; line-height:14px;  color:#000000; text-decoration:none;  font-weight:normal; width:320px; border:1px solid #666666; }
.button,
.frml_button         { font-size:0.9em; font-family:<?php echo $cmsVar['templ']['font_family']; ?>; padding:0.1em; color:#ffffff; text-decoration:none;  font-weight:bold;   border-width:1px; border-style:outset; background-color:#B73A34; text-align:center; width:8em; cursor:pointer; }

.frml_box_txt        { padding:0; margin:0; clear:left; width:<?php echo $f['370px']; ?>;  }
.frml_box_txt_2      { padding:0; margin:0; clear:left; width:<?php echo $f['560px']; ?>;  }
.frml_box_label      { padding:0; margin:0; float:left; width:<?php echo $f['560px']; ?>;  }
.frml_box_label_2    { padding:0; margin:0; float:left; width:<?php echo $f['180px']; ?>;  }
.frml_box_rlabel     { padding:0; margin:0; float:left; width:<?php echo $f['560px']; ?>; padding-bottom:5px; }
.frml_box_rlabel_2   { padding:0; margin:0; float:left; width:<?php echo $f['180px']; ?>; padding-bottom:5px; }
.frml_box_hspace     { padding:0; margin:0; float:left; width:<?php echo $f['10px']; ?>;  overflow:hidden;    }
.frml_box_hspace_2   { padding:0; margin:0; float:left; width:<?php echo $f['10px']; ?>;  overflow:hidden;    }
.frml_box_input      { padding:0; margin:0; float:left; width:<?php echo $f['560px']; ?>; overflow:hidden; }
.frml_box_input_2    { padding:0; margin:0; float:left; width:<?php echo $f['370px']; ?>; overflow:hidden; }
.frml_box_checkbox   { padding:0; margin:0; float:left; width:<?php echo $f['560px']; ?>; }
.frml_box_checkbox_2 { padding:0; margin:0; float:left; width:<?php echo $f['370px']; ?>; }
.frml_box_button     { padding:0; margin:0; float:left; width:<?php echo $f['280px']; ?>; }
.frml_box_button_2   { padding:0; margin:0; float:left; width:<?php echo $f['180px']; ?>; }

.frml, .frml_input, .frml_input_2, .frml_select, .frml_select_2, .frml_input_l, .frml_input_l_2, .frml_input_p, .frml_input_p_2,
.frml_input_o, .frml_input_o_2, .frml_input_ol, .frml_input_ol_2,  .frml_input_op, .frml_input_op_2, .frml_input_olp, .frml_input_olp_2  {
   font-size:11px;
   font-family:<?php echo $cmsVar['templ']['font_family']; ?>;
   line-height:1.4em;
   height:1.8em;
   padding:0.2em;
   color:#000000;
   text-decoration:none;
   font-weight:normal;
   border:1px solid #666666;
   margin:0;
}

.frml                { width:<?php echo $f['560px']; ?>;  }
.frml_input          { width:<?php echo $f['560px']; ?>; }     .frml_input_2       { width:<?php echo $f['370px']; ?>; }
.frml_input_l        { width:<?php echo $f['30px']; ?>; margin: 0 5px 0 0; }
.frml_input_p        { width:<?php echo $f['60px']; ?>; margin: 0 5px 0 0; }
.frml_input_olp      { width:<?php echo $f['470px']; ?>; }     .frml_input_olp_2   { width:<?php echo $f['280px']; ?>; }
.frml_input_ol       { width:<?php echo $f['525px']; ?>; }     .frml_input_ol_2    { width:<?php echo $f['335px']; ?>; }
.frml_input_op       { width:<?php echo $f['495px']; ?>; }     .frml_input_op_2    { width:<?php echo $f['305px']; ?>; }
.frml_input_o        { width:<?php echo $f['560px']; ?>; }     .frml_input_o_2     { width:<?php echo $f['370px']; ?>; }
.frml_select         { width:<?php echo $f['560px']; ?>; }     .frml_select_2      { width:<?php echo $f['370px']; ?>; }


.frml_checkbox {
   float:left;
   padding: 0;
   margin:0;
   width: 2em;
}
.frml_checkbox_txt {
   margin: 0;
   padding: 2px 0 2px 0;
   margin-left:25px;
}
.frml_line, .frml_line_2 {
   background-image:url('../images/line_h.gif');
   background-repeat:repeat-x;
   background-position:  0 center;
   height : 1em;
   overflow:hidden;
   padding : 0;
   margin : 0;
}
.frml_line   { width:<?php echo $f['560px']; ?>; }
.frml_line_2 { width:<?php echo $f['370px']; ?>; }

.frml_search {
   font-size:0.75em;
   font-family:<?php echo $cmsVar['templ']['font_family']; ?>;
   padding:0.2em;
   color:#000000;
   text-decoration:none;
   font-weight:normal;
   border:1px solid #666666;
   margin:0;
   width:10em;
}
.frml_error {
   color:#cc0000;
}
<?php /* ###################################### Standard ###################################### */ ?>

.tabtxt {
   font-family:<?php echo $cmsVar['templ']['font_family']; ?>;
   font-size:12px;
   font-weight:normal;
   line-height:150%;
   color:<?php echo $cmsVar['templ']['font_color']; # 333333 ?>;
}
.tabtxt2 {
   font-family:<?php echo $cmsVar['templ']['font_family']; ?>;
   font-size:12px;
   font-weight:bold;
   line-height:150%;
   color:<?php echo $cmsVar['templ']['font_color']; # 333333 ?>;
}


.barrierefrei {
   display:none;
}

.dl_anker           { clear:left; padding:0; margin:0; list-style-type:none; }
.dl_anker_icon      { float:left; padding:0; margin:0px; vertical-align:text-bottom; }
.dt_txt             { margin-left:10px; }

h1 {
   font-size : 20px;
   font-family : Verdana;
   line-height:130%;
   color : #333333;
   text-decoration:none;
   font-weight:normal;
   padding:10px 0 0 0;
   margin:0;
}

h2 {
   font-size : 12px;
   font-family : <?php echo $cmsVar['templ']['font_family']; ?>;
   color : #333333;
   text-decoration : none;
   font-weight : bold;
   padding : 0;
   margin-top : 0.2em;
   margin-bottom : 0.2em;
   line-height : 1.4em;
}
h3 {
   font-size : 1.1em;
   font-family : <?php echo $cmsVar['templ']['font_family']; ?>;
   color : #333333;
   text-decoration : none;
   font-weight : bold;
   padding : 0 0 0 0;
   margin : 0;
}
h4 {
   font-size : 1em;
   font-family : <?php echo $cmsVar['templ']['font_family']; ?>;
   color : #333333;
   text-decoration : none;
   font-weight : bold;
   padding : 0 0 0 0;
   margin : 0;
}

.templ_background h2 { color:#ffffff; }

hr { display:none; }

.hr_line {
   position:relative;
   top:-1px;
   left:-20px;
   background-image:url('../images/line_h.gif');
   background-repeat:repeat-x;
   background-position: top;
   height : 11px;
   overflow:hidden;
   width:510px;
   padding : 0;
   margin : 0;
}
.hr_lines {
   position:relative;
   top:-1px;
   left:-20px;
   background-image:url('../images/line_h.gif');
   background-repeat:repeat-x;
   background-position: -1px 0;
   height : 6px;
   overflow:hidden;
   width:510px;
   padding : 0;
   margin : 0;
}
.hr_line_headline {
   position:relative;
   top:-1px;
   left:-20px;
   background-image:url('../images/line_h.gif');
   background-repeat:repeat-x;
   background-position: top;
   height : 1px;
   overflow:hidden;
   width:510px;
   padding : 0;
   margin : 0;
}
.hr_line_search {
   background-image:url('../images/line_h.gif');
   background-repeat:repeat-x;
   background-position:  0 center;
   height : 1em;
   overflow:hidden;
   padding : 0;
   margin : 0;
   width:<?php echo $cmsVar['templ']['width']; ?>px;
}
.ul_smap {
   padding:0;
   margin:0 0 0 5px;
   font-family:tahoma,<?php echo $cmsVar['templ']['font_family']; ?>;
}
.ul_smap3 {
   padding:0;
   margin:0 0 0 20px;
   font-family:tahoma,<?php echo $cmsVar['templ']['font_family']; ?>;
   list-style-type:circle;
}
.li_smap {
   margin:0 0 0 1em;
   padding:0;
   color:#B73A34;
}

.ul_sitenav {
   margin:0;
   padding:0;
   list-style-type:none;
}
.li_sitenav {
   padding:0;
   margin:0px;
   list-style-type:none;
   width:100%;
   background-image:url('../images/sys/link_in.gif');
   background-repeat:no-repeat;
   background-position:0px 4px;
}
.li_sitenav2 {
   padding:0;
   margin:0px;
   list-style-type:none;
   width:100%;
   background-image:url('../images/sys/link_in.gif');
   background-repeat:no-repeat;
   background-position:0px 4px;
}
.li_sitenav_h {
   float:left;
   width:auto;
   margin-right:15px;
   <?php if (!$safari) echo "white-space:nowrap;\n"; ?>
}   
.span_sitenav {
   display:block;
   margin-left:15px;
}
a.slink, a.smap {
   color:#B73A34;
   text-decoration:none;
   font-weight:normal;
   padding:0;
   margin:0;
}
a.slink:hover, a.smap:hover {
   color:#B73A34;
   border-bottom:1px solid #B73A34;
   text-decoration:none;
}

a.smap, a.smap2, a.smap3 {
   color:#B73A34;
   border-bottom:0px solid #B73A34;
   text-decoration:none;
   font-weight:normal;
   padding:0;
   margin:0;
}
a.smap:hover, a.smap2:hover, a.smap3:hover {
   color:#B73A34;
   border-bottom:1px solid #B73A34;
   text-decoration:none;
}
a.smap2 {
   font-size:0.9em;
   font-weight:bold;
}
a.smap3 {
   font-size:0.9em;
}

.search {
   color:#C70707;
}


<?php /* ###################################### Links ###################################### */ ?>

a.bnav {
   font-weight:normal;
   color:#666666;
   text-decoration:none;
}
a.bnav:hover {
   color:#666666;
   text-decoration:none;
   border-bottom:1px solid #666666;
}
a.bnavb {
   font-weight:normal;
   color:#B73A34;
   text-decoration:none;
   border-bottom:1px solid #B73A34;
}

a.snavb:hover {
   text-decoration:underline;
}
a.ftxt {
   color:#ffffff;
   text-decoration:none;
}
a.ftxt:hover {
   color:#ffffff;
   text-decoration:underline;
}

a.link_in, a.link_ex, a.link_mail {
   color:#B73A34;
   text-decoration:none;
   background-image:url('../images/sys/link_in.gif');
   background-repeat:no-repeat;
   background-position:0px 1px;
   padding-left:15px;
   margin-right:0px;
   border-bottom:0px solid #B73A34;
}
a.link_in:hover, a.link_ex:hover, a.link_mail:hover {
   color:#B73A34;
   text-decoration:none;
   background-image:url('../images/sys/link_in.gif');
   background-repeat:no-repeat;
   background-position:0px 1px;
   padding-left:15px;
   border-bottom:1px solid #B73A34;
}
a.link_back {
   color:#B73A34;
   text-decoration:none;
   background-image:url('../images/sys/li.gif');
   background-repeat:no-repeat;
   background-position:0px 1px;
   padding-left:15px;
   margin-right:0px;
   border-bottom:0px solid #B73A34;
}
a.link_back:hover {
   color:#B73A34;
   text-decoration:none;
   background-image:url('../images/sys/li.gif');
   background-repeat:no-repeat;
   background-position:0px 1px;
   padding-left:15px;
   border-bottom:1px solid #B73A34;
}
a.link_icon {
   color:#B73A34;
   text-decoration:none;
   background-image:url('../images/sys/link_in.gif');
   background-repeat:no-repeat;
   background-position:0 1px;
   margin-right:0px;
   width:15px;
   float:left;
}
a.link_icon:hover {
   background-image:url('../images/sys/link_in2.gif');
   background-repeat:no-repeat;
   background-position:0 1px;
   width:7px;
   margin:0;
   float:left;
}
a.link_dnl, a.link_dnl2 {
   font-weight:normal;
   color:#B73A34;
   text-decoration:none;
   background-image:url('../images/sys/datei.gif');
   background-repeat:no-repeat;
   background-position:0px 0px;
   padding: 0 0 0 22px;
   height:25px;
   display:table-cell;
}
a.link_dnl:hover, a.link_dnl2:hover  {
   color:#B73A34;
   text-decoration:underline;
   background-image:url('../images/sys/datei.gif');
   background-repeat:no-repeat;
   background-position:0 0;
}
a.link_bnr {
   color:#ffffff;
   text-decoration:none;
   background-image:url('../images/sys/link_in.gif');
   background-repeat:no-repeat;
   background-position:0px 1px;
   padding-left:15px;
   margin-right:0px;
   border-bottom:0px solid #ffffff;
}
a.link_bnr:hover {
   color:#ffffff;
   text-decoration:none;
   background-image:url('../images/sys/link_in.gif');
   background-repeat:no-repeat;
   background-position:0px 1px;
   padding-left:15px;
   border-bottom:1px solid #ffffff;
}
a.none {
   color:#B73A34;
   text-decoration:underline;
}
a.none:hover {
   color:#666666;
   text-decoration:underline;
}

a.snavb, a.xnavb {
   font-weight:bold;
   color:#B73A34;
   text-decoration:underline;
   background-image:url('../images/sys/link_in.gif');
   background-repeat:no-repeat;
   background-position:0px 1px;
   padding-left:15px;
   margin-right:10px;
}
a.snavb:hover, a.xnav:hover {
   color:#B73A34;
   text-decoration:none;
   background-image:url('../images/sys/link_in.gif');
   background-repeat:no-repeat;
   background-position:0px 1px;
   border:1px solid #B73A34;
}

<?php /* ###################################### Galerie ###################################### */ ?>

#popup_content {
   position:absolute;
   top:50%;
   left:50%;
   width:650px;   
   height:540px;  
   margin-left:-325px;
   margin-top:-270px;
   background-color:#ffffff;
   font-size:12px; 
   font-family:arial,helvetica,sans-serif; 
   font-weight: normal; 
   text-decoration:none; 
   color:#000000;
   border:0px solid #ffffff;
   line-height:14px; 
   z-index:15000;
   padding:0;
   display:none;
}
#bluepage_popup_close {
   position:absolute;
   display:block;
   right:8px;
   top:7px;
   width:15px;
   height:15px;
   z-index:10;
}

#bluepage_popup_flash {
   position:relative;
   top:4px;
   left:0;
   width:660px;
   height:535px;
   text-align:center;
}
#bluepage_popup_flash_close {
   position:absolute;
   display:block;
   left:0px;
   bottom:10px;
   width:150px;
   height:25px;
   z-index:10;
}
#bluepage_flash_content {
   position:relative;
   top:32px;
   left:0;
   width:100%;
   height:440px;
   text-align:center;
   margin:auto;
   overflow:hidden;
   background-image:url('../images/loading.gif');
   background-repeat:no-repeat;
   background-position:center center;     
}


#bluepage_popup_gal {
   position:relative;
   top:4px;
   left:0;
   width:630px;
   height:535px;
   text-align:center;
}
.bluepage_gal_img {
   border:1px solid #999999;
}
.bluepage_gal_content {
   position:relative;
   top:5px;
   width:100%;
   height:484px;
   text-align:center;
   margin:auto;
   overflow:hidden;
   background-image:url('../images/loading.gif');
   background-repeat:no-repeat;
   background-position:center center;     
}
.bluepage_gal_titel {
   position:absolute;
   left:10px;
   top:2px;
   width:585px;
   text-align:left;
   margin:0;
   color:#000000;
   font-weight:bold; 
}
.bluepage_gal_txt {
   position:absolute;
   left:20px;
   bottom:10px;
   width:590px;
   text-align:left;
   margin:0;
}   
.bluepage_gal_txt2 {
   position:absolute;
   left:20px;
   bottom:10px;
   width:485px;
   text-align:left;     
   margin:0;   
}   
.bluepage_gal_nav {
   position:absolute;
   right:8px;
   bottom:0;
   width:140px;
   height:25px;
   text-align:right;
   margin:0;
}   
.bluepage_gal_nav_img {
   float:right; 
   width:18px; 
   height:20px;
}
.bluepage_gal_nav_img a {
   text-decoration:none;
   display:block;
   width:18px;
   height:20px;
}

.bluepage_gal_nav_img a.l        { background-image:url('../images/sys/lx.gif');   background-repeat:no-repeat; background-position:0 <?php if ($ie) { echo "-3px"; } else { echo "-2px"; }?>; }
.bluepage_gal_nav_img a.ll       { background-image:url('../images/sys/llx.gif');  background-repeat:no-repeat; background-position:0 <?php if ($ie) { echo "-3px"; } else { echo "-2px"; }?>; }
.bluepage_gal_nav_img a.r        { background-image:url('../images/sys/rx.gif');   background-repeat:no-repeat; background-position:0 <?php if ($ie) { echo "-3px"; } else { echo "-2px"; }?>; }
.bluepage_gal_nav_img a.rr       { background-image:url('../images/sys/rrx.gif');  background-repeat:no-repeat; background-position:0 <?php if ($ie) { echo "-3px"; } else { echo "-2px"; }?>; }

.bluepage_gal_nav_img a:hover {
   text-decoration:none;
   background-position:0 <?php if ($ie) { echo "-36px"; } else { echo "-35px"; }?>;
   background-repeat:no-repeat; 
}

.bluepage_gal_nav_txt {
   float:right; 
   width:auto; 
   height:20px;
   text-align:center;
   padding-left: 1px;
   padding-right: 5px;
}



.bluepage_galnavbox {
   position:relative;
   clear:left;      
   width:<?php echo $cmsVar['templ']['width']; ?>;
   text-align:center;
   color:<?php echo $cmsVar['templ']['font_color']; ?>;
   font-weight:bold;
   font-size:11px;
   line-height:14px;
   margin:0 auto; 
   height:15px;
}

.bluepage_galnav {
   position:absolute;
   left:50%;
   color:<?php echo $cmsVar['templ']['font_color']; ?>;
   font-weight:bold;
   margin:auto -80px; 
}
.bluepage_galnav_txt {
   float:left;
}
.bluepage_galnav_ll, .bluepage_galnav_l, .bluepage_galnav_r, .bluepage_galnav_rr {
   float:left;  
   width:23px;
   height:15px;
}
.bluepage_galpic_txt {
   font-size:11px;
}

.bluepage_galnav_ll a {
   background-image:url('../images/sys/llx.gif');
   background-repeat:no-repeat;
   background-position: 0 <?php if ($ie) { echo "-1px"; } else { echo "-2px"; }?>;
   text-decoration:none;
   display:block;
   width:23px;
   height:15px;
}
.bluepage_galnav_ll a:hover {
   background-position: 0 <?php if ($ie) { echo "-34px"; } else { echo "-35px"; }?>;
   text-decoration:none;
}
.bluepage_galnav_l a {
   background-image:url('../images/sys/lx.gif');
   background-repeat:no-repeat;
   background-position: 0 <?php if ($ie) { echo "-1px"; } else { echo "-2px"; }?>;
   text-decoration:none;
   display:block;
   width:23px;
   height:15px;     
}
.bluepage_galnav_l a:hover {
   background-position: 0 <?php if ($ie) { echo "-34px"; } else { echo "-35px"; }?>;
   text-decoration:none;
}

.bluepage_galnav_r a {
   background-image:url('../images/sys/rx.gif');
   background-repeat:no-repeat;
   background-position: right <?php if ($ie) { echo "-1px"; } else { echo "-2px"; } ?>;
   text-decoration:none;
   display:block;
   width:23px;
   height:15px;     
}
.bluepage_galnav_r a:hover {
   background-position: right <?php if ($ie) { echo "-34px"; } else { echo "-35px"; }?>;
   text-decoration:none;
}
.bluepage_galnav_rr a {
   background-image:url('../images/sys/rrx.gif');
   background-repeat:no-repeat;
   background-position: right <?php if ($ie) { echo "-1px"; } else { echo "-2px"; }?>;
   text-decoration:none;
   display:block;
   width:23px;
   height:15px;     
}
.bluepage_galnav_rr a:hover {
   background-position: right <?php if ($ie) { echo "-34px"; } else { echo "-35px"; }?>;
   text-decoration:none;
}

.bluepage_galnav_space {
   width:15px;
   height:15px;
   padding:0 7px;
}

<?php /* ###################################### templ_background ###################################### */ ?>

.templ_background {
   position:relative;
   left:-20px;
   background-color:#B73A34;
   /* width:<?php if ($moz) { echo ($cmsConfig['templ']['width']-11); } else { echo ($cmsConfig['templ']['width']-6); } ?>px; */
   <?php # if (!$safari) { if ($moz) { echo "min-"; } echo "height:100%;\n"; }  ?>
   padding:20px;
   color:#ffffff;
   width:<?php if ($ie) echo ($cmsVar['templ']['width']+40); else echo $cmsVar['templ']['width']; ?>px;
}

.background_0 {  background-color:#B73A34; }
.background_1 {  background-color:#7D8857; }

.background_0 a, 
.background_0 a:hover, 
.background_1 a, 
.background_1 a:hover 
{ 
   color:ffffff; 
   border-color:#ffffff;
}

<?php /* ###################################### Downloadarchiv ###################################### */ ?>

.div_dnlarchiv {
   padding:0;
   margin:0px;
   list-style-type:none;
   width:100%;
   font-size:0.9em;
   background-image:url('../images/dnl/datei.gif');
   background-repeat:no-repeat;
   background-position:0 0.2em;
   text-align:left;
}
.span_dnlarchiv {
   display:block;
   margin-left:25px;
}
.span_dnlarchiv_txt {
   display:block;
   margin-left:25px;
}
.span_dnlarchiv_info {
   display:block;
   margin-left:25px;
   font-style:italic;
   font-size:0.9em;
   line-height:1.2em;
}
a.link_dnlarchiv {
   color:#B73A34;
   border-bottom:0px solid #D1F1FF;
   text-decoration:none;
   font-weight:bold;
   padding:0;
   margin:0;
}
a.link_dnlarchiv:hover {
   color:#B73A34;
   border-bottom:1px solid #B73A34;
   text-decoration:none;
}
a.link_dnlarchiv_bnr {
   color:#ffffff;
   text-decoration:none;
   font-weight:bold;
   padding:0;
   margin:0;
}
a.link_dnlarchiv_bnr:hover {
   color:#ffffff;
   text-decoration:underline;
}
.bluepage_bnr_dnlarchiv_txt {
  font-size:11px;
  line-height:150%;
  margin:0 0 5px 8px;
}
