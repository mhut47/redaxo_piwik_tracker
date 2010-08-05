<?php
/**
 * piwikTracker Addon
 * 
 * @author Sven Kesting | sk@decaf.de
 * @author htttp://www.decaf.de
 * @package redaxo4
 * @version $Id$
 */
?>

<h3>
  <img width="200" height="73" alt="DECAF" align="right" style="margin: 0 10px 10px 0" src="data:image/png;base64,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" />
  Description:</h3>
<p>
  
  This addon will inject piwik tracking code into your pages to trigger the stat-server. For documentation on Piwik please visit <a href="http://dev.piwik.org/trac">http://dev.piwik.org/trac</a>.
</p>
<p>&nbsp;</p>

<h3>Installation:</h3>
<p>
  &nbsp;&nbsp;» copy all files to the REDAXO-addon folder. <br />
  &nbsp;&nbsp;» Make sure the  folders 'decaf_piwikTracker' and 'decaf_piwikTracker/config' are writable by the webserver<br />
  &nbsp;&nbsp;» activate the addon
</p>
<p>&nbsp;</p>

<h3>Changelog</h3>
<p><b>0.1</b>: Inital Release</p>
<p>&nbsp;</p>

<h3>Credits:</h3>
<p>
  <a href="mailto:sk@decaf.de">Sven Kesting</a> | <a href="http://www.decaf.de">DECAF&deg; agentur f&uuml;r digitale kommunikation</a><br />
  Special thanks to everyone who reported bugs and improvements for this addon.
</p>
<p>&nbsp;</p>

