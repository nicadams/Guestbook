<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Guestbook</title>
</head>
<body>
<?php if( $posted == true ) echo '<h3>Thanks for your entry</h3>'; ?>
<?php
echo '<ul>';
foreach( $entries as $entry ) {
 echo '<li><strong>Posted by <a href="#">'.$entry['name'].'</a></strong><p>'.$entry['comment'].'</p></li>'
}
echo '</ul>';
?>
<form method="post" action="">
<fieldset>
 <legend>Submit a comment</legend>
 <input type="text" name="name"> <lable>Name</label>
 <input type="text" name="email"> <label>E-mail</label>
 <textarea name="comment"></textarea> <label>Comment</label>
 <input type="submit" name="submit" value="submit">
</fieldset>
</form>
</body>
</html>