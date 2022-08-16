<?php
/*** *** *** *** *** ***
*	File: shoutbox.php
*	Start: September 20th, 2006
*	Author: Douglas Rennehan
*	License Info: http://www.opensource.org/licenses/gpl-license.php
*** *** *** *** *** ***
* This program is free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation; either version 2 of the License, or
* (at your option) any later version.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with this program; if not, write to the Free Software
* Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*** *** *** *** *** ***/
$shoutbox_file = 'shoutbox.db';
$config_file = 'config.db';
$admin_password = '80800';
$admin_salt = 'deneme';
error_reporting(E_ALL ^ E_NOTICE);
if (@ini_get('register_globals') == 1 || strtoupper(@ini_get('register_globals')) == 'ON') {
	if (!@ini_set('register_globals', 'Off') && !@ini_set('register_globals', 0)) {
	die('Could not turn register globals off. This is a major security risk and must be turned off.');
	}
}

$prefix = (PHP_SHLIB_SUFFIX == 'dl') ? 'php_' : '';
$gzip = false;
if (@extension_loaded('zlib')) {
ob_start('ob_gzhandler');
}
else {
	if (@dl($prefix . 'zlib.' . PHP_SHLIB_SUFFIX)) {
	$gzip = true;
	ob_start('ob_gzhandler');
	}
	else {
	ob_start();
	}
}

ob_implicit_flush(0);
function quote($object) {
	if (get_magic_quotes_gpc()) {
	$object = stripslashes($object);
	}

return addslashes($object);
}

session_start();
if (isset($_POST['GLOBALS']) || isset($_GET['GLOBALS']) || isset($_COOKIE['GLOBALS']) || isset($_SESSION['GLOBALS'])) {
die('Hacking is not permitted.');
}

if (isset($_SESSION) && !is_array($_SESSION)) {
die('Hacking is not permitted.');
}

header('Content-Type: text/html; charset=utf-8');
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Cache-Control: post-check, pre-check', false);
header('Pragma: no-cache');
$do = (isset($_GET['do']) && $_GET['do'] != '') ? $_GET['do'] : '';
$config_handle = fopen($config_file, 'r') or die('Error opening <b>' . $config_file . '</b> please make sure the permissions are correct (666).<br />');
$config_data = fread($config_handle, filesize($config_file));
fclose($config_handle);
$config_content = explode(';;;', $config_data);
for ($x = 0; $x < count($config_content); $x++) {
$config_real_content = explode('|', trim($config_content[$x]));
$last = '';
	foreach ($config_real_content as $key => $value) {
		if (($key & 1) == false) {
			if (!isset($config[$value])) {
			$config[$value] = '';
			$last = $value;
			}
		}
		else {
		$config[$last] = $value;
		}
	}
}

switch ($do) {
	case 'shouts':
		if (is_readable($shoutbox_file)) {
			if (!$file_handle = fopen($shoutbox_file, 'r')) {
			die('Error opening <b>' . $shoutbox_file . '</b> please make sure the permissions are correct (666).<br />');
			}

			if (!$file_data = fread($file_handle, filesize($shoutbox_file))) {
			die('Error reading from <b>' . $shoutbox_file . '</b>.');
			}

		fclose($file_handle);
		$content = explode(';', $file_data);
		$output_string = '';
			if (count($content) < 5) {
			$upuntil = count($content);
			}
			else {
			$upuntil = $config['total_shouts'];
			}

		$count = 0;
			for ($y = 0; $y < $upuntil; $y++) {
			$real_content = explode('|', trim($content[$y]));
			$name = base64_decode($real_content[1]);
			$message = base64_decode($real_content[2]);
				if ($name != '' && $message != '') {
				$output_string .= $config['name_start_tag'] . $name . $config['name_end_tag'] . ': ' . $config['message_start_tag'] . wordwrap($message, $config['break_length'], '<br />' . "\n", 1) . $config['message_end_tag'] . '<br />' . "\n";
				$count++;
				}
			}

			if ($count == 0) {
?>
There are no shouts! Be the first one :)
<?php
			}
			else {
			print($output_string);
			}
		}
		else {
		die('The <b>' . $shoutbox_file . '</b> is not readable. Please make sure the permissions are correct (666).<br />');
		}
	break;
	case 'shout':
	$message = (isset($_GET['message']) && $_GET['message'] != '') ? trim(htmlspecialchars(stripslashes(quote($_GET['message'])))) : '';
	$name = (isset($_GET['name']) && $_GET['name'] != '') ? trim(htmlspecialchars(stripslashes(quote($_GET['name'])))) : '';
		if ($message == '' || $name == '' || strlen($message) > $config['max_message_length'] || strlen($name) > $config['max_name_length']) {
		die('Error adding shout, your name/message was left empty, or they were too long.<br />');
		}
		else {

		$lastpostdiff = time() - $_SESSION['posttime'];
			if ($lastpostdiff < $config['flood_time']) {
			die('You must wait <b>' . $config['flood_time'] . '</b> seconds between each post. You have <b>' . (10 - $lastpostdiff) . '</b> seconds left');
			}
			else {
				if (!$file_handle = fopen($shoutbox_file, 'r')) {
				die('Error opening <b>' . $shoutbox_file . '</b> please make sure the permissions are correct (666).<br />');
				}

				if (!$file_data = fread($file_handle, filesize($shoutbox_file))) {
				die('Error reading from <b>' . $shoutbox_file . '</b>.');
				}

			fclose($file_handle);
			$new_data = $_SERVER['REMOTE_ADDR'] . '|' . base64_encode($name) . '|' . base64_encode($message) . '|' . time() . ";\n" . $file_data;
				if (is_writable($shoutbox_file)) {
					if (!$file_handle = fopen($shoutbox_file, 'w')) {
					die('Error opening <b>' . $shoutbox_file . '</b> please make sure the permissions are correct (666).<br />');
					}

					if (!fwrite($file_handle, $new_data)) {
					die('Error writing to <b>' . $shoutbox_file . '</b> please make sure the permissions are correct (666).<br />');
					}

				fclose($file_handle);
				$_SESSION['posttime'] = time();
				print('<html><head><meta http-equiv="Refresh" content="0; url=shoutbox.php?do=shouts" /></head><body>If you see this message, click <a href="shoutbox.php?do=shouts" target="_self">here</a>.</body></html>');
				}
				else {
				die('The <b>' . $shoutbox_file . '</b> cannot be written to. Please make sure the permissions are correct (666).<br />');
				}
			}
		}
	break;
	case 'admin':
	print('<' . '?' . 'xml version="1.0" encoding="utf-8"' . '?' . '>' . "\n");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

	<head>
		<title>Admin Control Panel</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Cache-Control" content="no-cache" />
		<meta http-equiv="Pragma" content="no-cache" />
		<meta http-equiv="Expires" content="-1" />
		<meta name="robots" content="noindex,nofollow" />
	</head>

	<body>

		<div align="left">
<?php
		if ($_SESSION['shout_pass_hash'] == sha1(sha1($admin_password) + md5($admin_salt))) {
		$action = (isset($_GET['action'])) ? $_GET['action'] : '';
			switch ($action) {
				default:
				$file_handle = fopen($shoutbox_file, 'r') or die('Could not open <b>' . $shoutbox_file . '</b> please make sure the permissions are correct (666).');
				$file_data = fread($file_handle, filesize($shoutbox_file));
				fclose($file_handle);
				$file_content = explode(';', $file_data);
?>
			Clicking the 'archive' link will archive all the shouts before that shout (including the shout) and will display the archived content, you may then copy and paste it to a file. Clicking the 'clear' link will clear all the shouts from that date, and any time before it.<br />
			<table border="0" cellpadding="2" cellspacing="1" width="66%">
				<tr>
					<th>IP</th>
					<th>Title</th>
					<th>Message</th>
					<th>Date</th>
					<th>Delete</th>
					<th>Archive</th>
					<th>Clear</th>
				</tr>
<?php
					for ($x = 0; $x < count($file_content); $x++) {
					$real_file_content = explode('|', $file_content[$x]);
						if ($real_file_content[2] != '' && $real_file_content[1] != '') {
?>
				<tr>
					<td><?php echo $real_file_content[0]; ?></td>
					<td><?php echo substr(base64_decode($real_file_content[1]), 0, 15); ?>...</td>
					<td><?php echo substr(base64_decode($real_file_content[2]), 0, 15); ?>...</td>
					<td><?php echo date('D M d, Y g:i a', $real_file_content[3]); ?></td>
					<td>
						<a href="shoutbox.php?do=admin&amp;action=delete&amp;time=<?php echo $real_file_content[3]; ?>">Delete</a>
					</td>
					<td>
						<a href="shoutbox.php?do=admin&amp;action=archive&amp;time=<?php echo $real_file_content[3]; ?>">Archive</a>
					</td>
					<td>
						<a href="shoutbox.php?do=admin&amp;action=clearfromdate&amp;time=<?php echo $real_file_content[3]; ?>">Clear</a>
					</td>
				</tr>
<?php
						}
					}
?>
			</table>
<?php
				break;
				case 'delete':
				$time = (isset($_GET['time']) && is_numeric($_GET['time'])) ? abs($_GET['time']) : '';
					if ($time == '') {
?>
			No time specified.
<?php
					}
					else {
					$file_handle = fopen($shoutbox_file, 'r') or die('Could not open <b>' . $shoutbox_file . '</b>, please make sure the permissions are correct (666).');
					$file_data = fread($file_handle, filesize($shoutbox_file));
					fclose($file_handle);
					$file_content = explode(';', $file_data);
						for ($x = 0; $x < count($file_content); $x++) {
						$real_file_content = explode('|', $file_content[$x]);
							if ($real_file_content[3] == $time) {
							$ip = $real_file_content[0];
							$name = $real_file_content[1];
							$message = $real_file_content[2];
							$file_data = preg_replace('/' . preg_quote($ip) . '\|' . preg_quote($name) . '\|' . preg_quote($message) . '\|' . $time . ';' . "\n" . '/', '', $file_data);
							break;
							}
						}
					
					$file_handle = fopen($shoutbox_file, 'w') or die('Could not open <b>' . $shoutbox_file . '</b>, please make sure the permissions are correct (666).');
					fwrite($file_handle, $file_data);
					fclose($file_handle);
?>
			Successfully deleted entry. <a href="shoutbox.php?do=admin">Back to admin panel</a>.
<?php
					}
				break;
				case 'clearfromdate':
				$time = (isset($_GET['time']) && is_numeric($_GET['time'])) ? abs($_GET['time']) : '';
					if ($time == '') {
?>
			No time specified.
<?php
					}
					else {
					$file_handle = fopen($shoutbox_file, 'r') or die('Could not open <b>' . $shoutbox_file . '</b>, please make sure the permissions are correct (666).');
					$file_data = fread($file_handle, filesize($shoutbox_file));
					fclose($file_handle);
					$file_content = explode(';', $file_data);
					$string_to_replace = '/';
						for ($x = 0; $x < count($file_content); $x++) {
						$real_file_content = explode('|', $file_content[$x]);
							if ($real_file_content[3] <= $time && $real_file_content[3] != 1 && $real_file_content[2] != '' && $real_file_content[1] != '') {
							$string_to_replace .= preg_quote($real_file_content[0]) . '\|' . preg_quote($real_file_content[1]) . '\|' . preg_quote($real_file_content[2]) . '\|' . preg_quote($real_file_content[3]) . ';';
							}
						}

					$string_to_replace .= '/';
					$file_data = preg_replace($string_to_replace, '', $file_data);
					$file_data = preg_replace("/\n{2,}/i", '', $file_data);
					$file_handle = fopen($shoutbox_file, 'w') or die('Could not open <b>' . $shoutbox_file . '</b>, please make sure the permissions are correct (666).');
					fwrite($file_handle, $file_data);
					fclose($file_handle);
?>
			Successfully cleared specified shouts. <a href="shoutbox.php?do=admin">Back to admin panel</a>.
<?php
					}
				break;
				case 'archive':
				$time = (isset($_GET['time']) && is_numeric($_GET['time'])) ? abs($_GET['time']) : '';
					if ($time == '') {
?>
			No time specified.
<?php
					}
					else {
					$file_handle = fopen($shoutbox_file, 'r') or die('Could not open <b>' . $shoutbox_file . '</b>, please make sure the permissions are correct (666).');
					$file_data = fread($file_handle, filesize($shoutbox_file));
					fclose($file_handle);
					$archive = 'Shoutbox Archive - Generated on ' . date('D M d, Y g:i a', time()) . ' by Quadodo.shoutbox' . "<br /><br />";
					$file_content = explode(';', $file_data);
						for ($x = 0; $x < count($file_content); $x++) {
						$real_file_content = explode('|', $file_content[$x]);
							if ($real_file_content[3] <= $time && $real_file_content[3] != 1 && $real_file_content[2] != '' && $real_file_content[1] != '') {
							$archive .= $real_file_content[0] . '|' . base64_decode($real_file_content[1]) . '|' . base64_decode($real_file_content[2]) . '|' . date('D M d, Y g:i a', $real_file_content[3]) . "<br />\n";
							}
						}
					
					print($archive);
					}
				break;
			}
		}
		else {
			if (isset($_GET['process'])) {
			$password = $_POST['password'];
				if ($password == $admin_password) {
				$_SESSION['shout_pass_hash'] = sha1(sha1($password) + md5($admin_salt));
				header('Location: shoutbox.php?do=admin');
				exit;
				}
				else {
?>
			That is not a valid password. Please try again.
<?php
				}
			}
			else {
?>
			<form action="shoutbox.php?do=admin&amp;process" method="post">
				<table border="0">
					<tr>
						<td>Password:</td>
						<td><input type="password" name="password" /></td>
					</tr>
				</table>
				<br />
				<input type="submit" value="Go" />
			</form>
<?php
			}
		}
?>
		</div>

	</body>

</html>
<?php
	break;
}
ob_end_flush();
?>