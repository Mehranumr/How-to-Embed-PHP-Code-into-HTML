<?php

/**
 * Embedding PHP Inside HTML
 *
 *
 * PHP version 5*
 *
 * LICENSE: This source file is subject to version 5 of the PHP license
 * If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to mehranumr@gmail.com so i can mail you a copy immediately.
 *
 * @category   PHP
 * @package    Embedding PHP Inside HTML
 * @author     Original Author <mehranumr@gmail.com>
 * @copyright  2017-mehranumr
 * @since      File available since Release 0.1
 * @deprecated File deprecated in Release 0.2
 */

//initializing params


$text="Hello Mehran";
$name="Mehran"
?>

<html>
<body>
	<h2>Example-1</h2>
	<input type="text" value= "<?php echo $text; ?>" >

	<h2>Example-2</h2>

	$name = Mehran;
	<br>

	The name in $name is: <?=$name?>
</body>
</html>