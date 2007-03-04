<?php
/* think tank forums
 *
 * header.inc.php
 *
 * the following variables are accepted:
 * 	$label		secured
 *
 * being an include script, there are no sanity checks.
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
 <head>
  <title>think tank forums <?php echo $ttf_config["version"]; ?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <style type="text/css">
   @import "_style.css";
  </style>
  <script type="text/javascript">
	<!--
	// Nannette Thacker http://www.shiningstar.net
	function confirmaction()
	{
	var agree=confirm("are you sure you wish to take this action?");
	if (agree)
		return true ;
	else
		return false ;
	}
	// -->
  </script>
 </head>
 <body>
  <a href="/"><img id="ttf" src="images/header.gif" width="600" height="46" border="0" alt="think tank forums!" /></a>
  <div id="label"><span class="indent"><?php echo $label; ?></span></div>
  <div id="enclosure">
   <div class="menu_one"> 
<?php
  if (isset($ttf["uid"])) {
   if (isset($ttf["avatar_type"])) {
?>
    <img src="avatars/<?php echo $ttf["uid"].".".$ttf["avatar_type"]; ?>" alt="avatar!" width="30" height="30" align="absmiddle" />
<?php
   };
?>
    <b>hi, <?php echo $ttf["username"]; ?>!</b>
   </div>
   <div class="menu_two">
    � <a href="search.php">search</a><br />
    � <a href="editprofile.php">edit your profile</a><br />
    � <a href="logout.php">log out</a>
<?php	
	if ($ttf["perm"] == 'admin') {
?>
   </div>
   <div class="menu_one"><b>administrate!</b></div>
   <div class="menu_two">
    � <a href="admin_dbms.php">dbms tables</a><br />
    � <a href="admin_user.php">users</a><br />
    � <a href="http://code.google.com/p/thinktankforums/">ttf development</a>
<?php
	};
   } else {
?>
    <b>log in to ttf!</b>
   </div>
   <div class="menu_two">
    <form action="login.php" method="post">
     <input type="text" name="username" maxlength="16" size="16" /><br />
     <input type="password" name="password" maxlength="32" size="16" /><br />
     <input type="submit" value="let's go!" />
    </form>
   </div>
   <div class="menu_one">
    <b>lack an account?</b>
   </div>
   <div class="menu_two">
    � <a href="register.php">register an account</a><br />
    � <a href="search.php">search the forums</a>
<?php	 
   };
?>
   </div>
   <!-- end header.inc.php -->
