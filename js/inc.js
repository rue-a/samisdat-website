/*
// ####################################################################################################
// # Datei inc.js V 1.0
// ####################################################################################################
// # Copyright � 2004-2007 ISS-Oberlausitz
// # Author: T.Hojenski
// # Email: info@iss-ol.de
// # URL:   http://www.bluepage-cms.com
// # Diese Datei geh�rt zu dem kommerziellen bluepage - CMS der ISS-Oberlausitz
// # Bitte beachten Sie die Lizenzbedingungen.
// # Unberechtigte Nutzung, �nderung oder Weitergabe �ber die Lizenzbedingungen hinaus
// # sind strafbar.
// # Eine unberechtigte Verwendung auch von Teilen des CMS-Systems kann zu Schadensersatz-
// # und/oder Unterlassungsanspr�chen f�hren.
// # Das Entfernen der Copyrighthinweise ist untersagt.
// ####################################################################################################
*/
/* DATEI: *.js */


/* Javascript Datei BLUEPAGE CMS 09 -2007 */
/* Copyright by ISS-Oberlausitz */
/* Author: T.Hojenski */
/* JavaScript to handle active class based on URL */

document.addEventListener('DOMContentLoaded', function () {
   const navItems = document.querySelectorAll('#bluepage_nav a');
   const currentUrl = window.location.href.split(/[?#]/)[0];

   navItems.forEach(item => {
      const itemUrl = item.href.split(/[?#]/)[0];
      if (itemUrl === currentUrl) {
         item.classList.add('active');
         let span = item.querySelector('span');
         if (span) {
            span.classList.add('active');
         }
         let parent = item.closest('ul').closest('li').querySelector('a');
         while (parent) {
            parent.classList.add('active');
            let parentSpan = parent.querySelector('span');
            if (parentSpan) {
               parentSpan.classList.add('active');
            }
            parent = parent.closest('ul')?.closest('li')?.querySelector('a');
         }
      }
      item.addEventListener('click', function () {
         navItems.forEach(nav => {
            nav.classList.remove('active');
            let navSpan = nav.querySelector('span');
            if (navSpan) {
               navSpan.classList.remove('active');
            }
         });
         this.classList.add('active');
         let span = this.querySelector('span');
         if (span) {
            span.classList.add('active');
         }
         let parent = this.closest('ul').closest('li').querySelector('a');
         while (parent) {
            parent.classList.add('active');
            let parentSpan = parent.querySelector('span');
            if (parentSpan) {
               parentSpan.classList.add('active');
            }
            parent = parent.closest('ul')?.closest('li')?.querySelector('a');
         }
      });
   });
});

var ie = document.all;
var dom = document.getElementById;

function popup(typ, lg, pf, id, InhId) {
   if (pf == '../' || !document.getElementById('popup_content')) {
      url = pf + 'media_view.php?typ=' + typ + '&lg=' + lg + '&pf=' + pf + '&id=' + id + '&InhId=' + InhId;
      opt = 'location=no,scrollbars=auto,toolbar=no,resizable=yes,left=' + ((screen.availWidth - 670) / 2) + ',top=' + (((screen.availHeight - 560) / 2) - 20) + ',width=675,height=560';
      galwindow = window.open(url, '_blank', opt);
      galwindow.moveTo(((screen.availWidth - 650) / 2), ((screen.availHeight - 560) / 2) - 20)
   } else {
      if ((document.getElementById && !document.all) || (navigator.userAgent.indexOf('Opera') > -1)) {
         document.getElementById('popup_content').style.top = window.pageXOffset + (window.innerHeight / 2);
         document.getElementById('popup_content').style.position = 'fixed';
         document.getElementById('bluepage_head_flash').style.display = 'none';
         document.getElementById('popup_content').style.display = 'block';
         document.getElementById('popup_background').style.display = 'block';
      } else if (document.all) {
         document.all('bluepage_body').style.overflowY = 'hidden';
         document.all('bluepage').style.marginRight = '17px';
         document.all('popup_content').style.top = document.body.scrollTop + ((document.body.clientHeight) / 2);
         document.all('bluepage_head_flash').style.display = 'none';
         document.all('popup_content').style.display = 'block';
         document.all('popup_background').style.display = 'block';
      }
      if (typ == 'gal' || typ == 'fgal') {
         makeRequest(typ, lg, pf, id, InhId);
      } else if (typ == 'flv') {
         makeRequest(typ, lg, pf, id, InhId);
      }
   }
}

function popup_close() {
   if ((document.getElementById && !document.all) || (navigator.userAgent.indexOf('Opera') > -1)) {
      document.getElementById('popup_content').style.display = 'none';
      document.getElementById('popup_content').innerHTML = '';
      document.getElementById('popup_background').style.display = 'none';
      document.getElementById('bluepage_head_flash').style.display = 'block';
   } else if (document.all) {
      document.all('popup_content').style.display = 'none';
      document.all('popup_content').innerHTML = '';
      document.all('popup_background').style.display = 'none';
      document.all('bluepage_body').style.overflowY = 'scroll';
      document.all('bluepage').style.marginRight = '0';
      document.all('bluepage_head_flash').style.display = 'block';
   }
}

function img_view(ds, lg, pf, inhId) {
   url = pf + './img_view.php?ds=' + ds + '&lg=' + lg + '&inhId=' + inhId;
   opt = 'location=no,scrollbars=auto,toolbar=no,resizable=yes,left=' + ((screen.availWidth - 720) / 2) + ',top=' + (((screen.availHeight - 650) / 2) - 20) + ',width=665,height=650';
   galwindow = window.open(url, '_blank', opt);
   galwindow.moveTo(((screen.availWidth - 720) / 2), ((screen.availHeight - 650) / 2) - 20)
}


var http_request = false;

function makeRequest(typ, lg, pf, id, InhId) {
   var url = 'incl/request.ajax.php?InhId=' + InhId + '&id=' + id + '&pfad=' + pf + '&typ=' + typ + '&zh=' + Math.random();
   http_request = false;
   http_request.responseText = '';
   if (window.XMLHttpRequest) { // Mozilla, Safari,...
      http_request = new XMLHttpRequest();
      if (http_request.overrideMimeType) {
         http_request.overrideMimeType('text/xml');
      }
   } else if (window.ActiveXObject) { // IE
      try {
         http_request = new ActiveXObject("Msxml2.XMLHTTP");
      } catch (e) {
         try {
            http_request = new ActiveXObject("Microsoft.XMLHTTP");
         } catch (e) { }
      }
   }
   if (!http_request) {
      alert('Giving up :( Cannot create an XMLHTTP instance');
      return false;
   }
   http_request.onreadystatechange = requestContents;
   http_request.open('GET', url, true);
   http_request.send(null);
}
function requestContents() {
   if (http_request.readyState == 4) {
      if (http_request.status == 200) {

         if (http_request.getResponseHeader("Content-Type").substr(0, 9) == 'text/html') {
            document.getElementById('popup_content').innerHTML = http_request.responseText;
         } else {
            var xmldoc = http_request.responseXML;
            var r_typ = xmldoc.getElementsByTagName('typ').item(0).firstChild.data;
            if (r_typ == 'gal') { // Galerie
               var r_html = xmldoc.getElementsByTagName('htmlcode').item(0).firstChild.data;
               document.getElementById('popup_content').innerHTML = r_html;
            } else if (r_typ == 'fgal') { // FTP-Galerie
               var r_html = xmldoc.getElementsByTagName('htmlcode').item(0).firstChild.data;
               document.getElementById('popup_content').innerHTML = r_html;
            } else if (r_typ == 'flv') { // Flashmovie
               var flv_html = xmldoc.getElementsByTagName('htmlcode').item(0).firstChild.data;
               var flv_file = xmldoc.getElementsByTagName('file').item(0).firstChild.data;
               var flv_img = xmldoc.getElementsByTagName('img').item(0).firstChild.data;
               var flv_win = xmldoc.getElementsByTagName('win').item(0).firstChild.data;
               var flv_w = xmldoc.getElementsByTagName('width').item(0).firstChild.data;
               var flv_h = xmldoc.getElementsByTagName('height').item(0).firstChild.data;
               var flv_auto = xmldoc.getElementsByTagName('autostart').item(0).firstChild.data;
               var flv_repeat = xmldoc.getElementsByTagName('repeat').item(0).firstChild.data;

               document.getElementById('popup_content').innerHTML = flv_html;

               var so = new SWFObject("incl/flvplayer.swf", "flashflv", flv_w, flv_h, "7", "#000000");
               so.addParam("scale", "noscale");
               so.addParam("salign", "TL");
               so.addParam("quality", "high");
               so.addParam("menu", "false");
               so.addVariable("file", flv_file);
               so.addVariable("image", flv_img);
               so.addVariable("autostart", flv_auto);
               so.addVariable("repeat", flv_repeat);
               so.write(flv_win)
                  ;
            }
         }
      } else {
         alert('Bei dem Request ist ein Problem aufgetreten.');
      }
   }
}

function hover_li(sel, w, h) {
   if (h == 'H') classZusatz = ' li_sitenav_h'; else classZusatz = '';
   if (w == true) {
      sel.parentNode.parentNode.className = 'li_sitenav2' + classZusatz;
   } else {
      sel.parentNode.parentNode.className = 'li_sitenav' + classZusatz;
   }
}

function addbookmark() {   // IE
   if (document.all && navigator.userAgent.indexOf('Opera') <= -1) {
      var bookmarkurl = document.URL
      var bookmarktitle = document.title;
      window.external.AddFavorite(bookmarkurl, bookmarktitle)
   } else {
      alert("Dieser Link funktioniert nur bei Benutzern des Internet-Explorers.\n\nBenutzen Sie bitte die Tastenkombination für\nNetscape/Mozilla:\t\tSTRG+D,\nOpera:\t\t\tSTRG+T.")
   }
}

function open_extern(url, att, w, h) {
   posh = parseFloat(((screen.availHeight - h) / 2) - 20);
   posw = parseFloat((screen.availWidth - w) / 2);
   opt = att + ',left=' + posw + ',top=' + posh + ',width=' + w + ',height=' + h;
   extWindow = window.open(url, '_blank', opt);
   extWindow.focus();
}
