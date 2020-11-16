<?php
/*
  +----------------------------------------------------------------------+
  | PHP Version 7.1.33                                                   |
  +----------------------------------------------------------------------+
  | Copyright (c) 1997-2020 The PHP Group                                |
  +----------------------------------------------------------------------+
  | This source file is subject to version 3.0 of the PHP license,       |
  | that is bundled with this package in the file LICENSE, and is        |
  | available through the world-wide-web at the following url:           |
  | http://www.php.net/license/3_0.txt.                                  |
  | If you did not receive a copy of the PHP license and are unable to   |
  | obtain it through the world-wide-web, please send a note to          |
  | license@php.net so we can mail you a copy immediately.               |
  +----------------------------------------------------------------------+
  | Author:  dineshkummarc@yahoo.com <dineshkummarc at yahoo.com>        |
  +----------------------------------------------------------------------+
*/

echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\">\n";
echo "<html>\n";
echo " <head>\n";
echo "  <title>Phpmemadmin</title>\n";
echo "  <link rel=stylesheet href=\"style/example.css\" type=\"text/css\">\n";
echo "  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n";
echo " </head>\n";
echo " <body>\n";

if (!isset($_POST['step']) || !is_numeric($_POST['step'])) {
    $step = 1;
} else {
    $step = $_POST['step'];
}

echo "  <h1>Phpmemadmin</h1>\n";
echo "  <h2>" . _('Selection step') . " " . $step . "</h2>\n";

switch ($step) {

    case 1:
        $step++;

        echo " <form method=\"post\" action=\"\">\n";
        echo "  <input type=\"radio\" name=\"language\" value=\"en_EN\" checked> I prefer to see phpmemadmin.php<br>\n";
        echo "  <input type=\"radio\" name=\"language\" value=\"en_EN\"> I prefer to see memcache.php<br>\n";
        echo "	<input type=\"radio\" name=\"language\" value=\"en_EN\"> I prefer to see memcached.php<br>\n";
        // echo "  <input type=\"hidden\" name=\"step\" value=\"" . $step . "\">";
        echo "  <br>\n";
        echo "  <input type=\"submit\" name=\"submit\" value=\"" . _('Go to step') . " " . $step . "\">";
        echo " </form>\n";
        break;

    case 2:
        $step++;

        echo "<p>" . _('This installer expects you to have a PowerDNS database accessable from this server. This installer also expects you to have never ran Phpmemadmin before, or that you want to overwrite the Phpmemadmin part of the database. If you have had Phpmemadmin running before, any data in the following tables will be destroyed: perm_items, perm_templ, perm_templ_items, users and zones. This installer will, of course, not touch the data in the PowerDNS tables of the database. However, it is recommended that you create a backup of your database before proceeding.') . "</p>\n";

        echo "<p>" . _('The alternative for this installer is a manual installation. Refer to the Phpmemadmin.org website if you want to go down that road.') . "</p>\n";

        echo "<p>" . _('Finally, if you see any errors during the installation process, a problem report would be appreciated. You can report problems (and ask for help) on the <a href="http://groups.google.com/group/Phpmemadmin" target=\"blank\">Phpmemadmin</a> mailinglist.') . "</p>";

        echo "<p>" . _('Do you want to proceed now?') . "</p>\n";

        echo "<form method=\"post\">";
        echo "<input type=\"hidden\" name=\"language\" value=\"" . $language . "\">";
        echo "<input type=\"hidden\" name=\"step\" value=\"" . $step . "\">";
        echo "<input type=\"submit\" name=\"submit\" value=\"" . _('Go to step') . " " . $step . "\">";
        echo "</form>";
        break;

}

echo "<div class=\"footer\">";
echo "<a href=\"http://www.Phpmemadmin.org/\">a complete(r) <strong>Phpmemadmin</strong> v$VERSION</a> - <a href=\"http://www.Phpmemadmin.org/credits.html\">credits</a>";
echo "</div></body></html>";

?>
