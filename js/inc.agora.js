/*
// ####################################################################################################
// # Datei inc.js V 1.0
// ####################################################################################################
// # Copyright © 2004-2007 ISS-Oberlausitz
// # Author: T.Hojenski
// # Email: info@iss-ol.de
// # URL:   http://www.bluepage-cms.com
// # Diese Datei gehört zu dem kommerziellen bluepage - CMS der ISS-Oberlausitz
// # Bitte beachten Sie die Lizenzbedingungen.
// # Unberechtigte Nutzung, Änderung oder Weitergabe über die Lizenzbedingungen hinaus
// # sind strafbar.
// # Eine unberechtigte Verwendung auch von Teilen des CMS-Systems kann zu Schadensersatz-
// # und/oder Unterlassungsansprüchen führen.
// # Das Entfernen der Copyrighthinweise ist untersagt.
// ####################################################################################################
*/
/* DATEI: *.js */


/* Javascript Datei BLUEPAGE CMS 09 -2007 */
/* Copyright by ISS-Oberlausitz */
/* Author: T.Hojenski */

var ie = document.all;
var dom = document.getElementById;

function agora_popup(pf, vr, InhId) {
   if (pf == '../' || !document.getElementById('agora_popup_content')) {
      url = pf + 'agora_view.php?typ=agora&lg=de&pf=' + pf + '&' + vr + '&InhId=' + InhId;
      opt = 'location=no,scrollbars=auto,toolbar=no,resizable=yes,left=' + ((screen.availWidth - 860) / 2) + ',top=' + (((screen.availHeight - 700) / 2) - 20) + ',width=860,height=700';
      galwindow = window.open(url, '_blank', opt);
      galwindow.moveTo(((screen.availWidth - 860) / 2), ((screen.availHeight - 700) / 2) - 20)
   } else {
      if ((document.getElementById && !document.all) || (navigator.userAgent.indexOf('Opera') > -1)) {
         document.getElementById('agora_popup_content').style.top = window.pageXOffset + (window.innerHeight / 2);
         document.getElementById('agora_popup_content').style.position = 'fixed';
      } else if (document.all) {
         document.all('bluepage_body').style.overflowY = 'hidden';
         document.all('bluepage').style.marginRight = '17px';
         document.all('agora_popup_content').style.top = document.body.scrollTop + ((document.body.clientHeight) / 2);
      }
      agora_makeRequest('agora', 'de', pf, vr, InhId);
   }
}
var http_request = false;

function agora_makeRequest(typ, lg, pf, vr, InhId) {
   var url = 'incl/agora_request.ajax.php?InhId=' + InhId + '&' + vr + '&pfad=' + pf + '&typ=' + typ + '&zh=' + Math.random();
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
   http_request.onreadystatechange = agora_requestContents;
   http_request.open('GET', url, true);
   http_request.send(null);
}
function agora_requestContents() {
   if (http_request.readyState == 4) {
      if (http_request.status == 200) {

         if (http_request.getResponseHeader("Content-Type").substr(0, 9) == 'text/html') {
            document.getElementById('agora_popup_content').innerHTML = http_request.responseText;
         } else {
            var xmldoc = http_request.responseXML;
            var r_typ = xmldoc.getElementsByTagName('typ').item(0).firstChild.data;
            if (r_typ == 'agora') { // Galerie
               var r_html = xmldoc.getElementsByTagName('htmlcode').item(0).firstChild.data;
               var r_html2 = xmldoc.getElementsByTagName('htmlcode2').item(0).firstChild.data;
               var r_html3 = xmldoc.getElementsByTagName('htmlcode3').item(0).firstChild.data;
               var r_pdf = xmldoc.getElementsByTagName('htmlcodepdf').item(0).firstChild.data;
               var r_width = xmldoc.getElementsByTagName('width').item(0).firstChild.data;
               document.getElementById('agora_popup_content').innerHTML = r_html;
               document.getElementById('agora_nav2').innerHTML = r_html2;
               document.getElementById('agora_nav3').innerHTML = r_html3;
               document.getElementById('agora_pdf').innerHTML = r_pdf;
               //document.getElementById('agora_popup_content').width = (Math.round(r_width));
               window.resizeTo((Math.round(r_width) + 70), 780);
            }
         }
      } else {
         alert('Bei dem Request ist ein Problem aufgetreten.');
      }
   }
}
