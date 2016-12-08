<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 08.12.2016
 * Time: 19:32
 * ../../controllers/AdminController.php
 * INSERT INTO `MyNews`.`news` (`id`, `title`, `text`, `date`) VALUES (NULL, '1', '1', '2016-12-02');
 */
?>
<form action= "../../controllers/AdminController.php" method="post">
	<input type="text" name="title">
	<input type="text" name="text">
	<input type="date" name="dat">
	<input type="submit" value="Send">
</form>
