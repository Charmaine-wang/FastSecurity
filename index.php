<?php
declare (strict_types = 1);

// Setup variables
$user_lang = $_GET['user_lang'];
$lang_folder = 'languages';

// Get language file contents
$lang_file = file_get_contents($lang_folder . '/' . $user_lang.'.txt');

// PARSE FILE CONTENT TO AN ARRAY
$lang_row = explode(PHP_EOL, $lang_file);

foreach ($lang_row as $value) {
	$tmp_arr = explode('=', $value);
	$current_lang[$tmp_arr[0]] = $tmp_arr[1];
	unset($tmp_arr);
}
// END PARSE FILE CONTENT TO AN ARRAY


echo $current_lang['firstPage'];
?>
<br><br><br>

<a href="?user_lang=swedish">Svenska</a>
<a href="?user_lang=english">Engelska</a>
