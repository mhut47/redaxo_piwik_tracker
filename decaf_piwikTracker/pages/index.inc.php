<?php
/**
 * piwikTracker Addon
 * 
 * @author Sven Kesting <sk@decaf.de>
 * @author <a href="http://www.decaf.de">www.decaf.de</a>
 * @package redaxo4
 * @version $Id$
 */
 
// Parameter
$Basedir = dirname(__FILE__);

$page = rex_request('page', 'string');
$subpage = rex_request('subpage', 'string');
$func = rex_request('func', 'string');

require $REX['INCLUDE_PATH'].'/layout/top.php';

rex_title($I18N->msg('piwik_headline'), $REX['ADDON']['pages']['decaf_piwikTracker']);

$piwik_config = parse_ini_file($REX['INCLUDE_PATH']. '/addons/decaf_piwikTracker/config/config.ini', true);
if (!$piwik_config['piwik']['tracker_url'] || !$piwik_config['piwik']['site_id'])
{
  $subpage = 'settings';
}

// Include Current Page
switch($subpage)
{
  case 'settings' :
    require $Basedir .'/settings.inc.php';
    break;

  default:
    $subpage = 'ministats';
    require $Basedir .'/ministats.inc.php';
    
}



require $REX['INCLUDE_PATH'].'/layout/bottom.php';

?>