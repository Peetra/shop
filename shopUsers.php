<?php // shopUsers.php
// $ = (isset($_GET[''])) ? (int) $_GET[''] : 0;

error_reporting(E_ALL);
$title = 'shopUsers';
include ('./shopOverall.php');
echo '<div><h3>' . $lang[''] . '</h3>';
echo '<p>' . $lang[''] . '</p></div>';

$uID = (isset($_POST['uID'])) ? (int) $_POST['uID'] : 0;
$fname = (isset($_POST['fname']) ? $_POST['fname'] : '');
$fname = mysql_real_escape_string($fname);
$lname = (isset($_POST['lname'])? $_POST['lname'] : '');
$lname= mysql_real_escape_string($lname);
$street = (isset($_POST['street'])? $_POST['street'] : '');
$street = mysql_real_escape_string($street);
$city = (isset($_POST['city'])? $_POST['city'] : '');
$city = mysql_real_escape_string($city);
$phone = (isset($_POST['phone'])? $_POST['phone'] : '');
$phone = mysql_real_escape_string($phone);
$email = (isset($_POST['email'])? $_POST['email'] : '');
$email = mysql_real_escape_string($email);
$password = (isset($_POST['password'])? $_POST['password'] : '');
$password = mysql_real_escape_string($password);
$zip = (isset($_POST['zip'])) ? (int) $_POST['zip'] : '';

?>
<h3><?=$lang['REGISTER'];?></h3>
<form method="post" action="shopUsers.php">
  <table>
    <tr>
	<td><?=$lang['FIRST NAME'];?></td>
	<!-- The required statement isn't supported in IE9, do not rely on in just yet. -->
	<td><input type="text" name="fname" required value="<?=stripslashes($fname);?>"></td>
    <tr>
	<td><?=$lang['LAST NAME'];?></td>
	<td><input type="text" name="lname" required value="<?=stripslashes($lname);?>"></td>
	<tr>
		<td><?=$lang['STREET ADDRESS'];?></td>
	<td><input type="text" name="street" required value="<?=stripslashes($street);?>"></td>
	<tr>
	<td><?=$lang['ZIP'];?></td>
	<td><input type="text" name="zip" required value="<?=$zip;?>"></td>
		<tr>
		<td><?=$lang['CITY'];?></td>
	<td><input type="text" name="city" required value="<?=stripslashes($city);?>"></td>
		<tr>
		<td><?=$lang['PHONE'];?></td>
	<td><input type="text" name="phone" value="<?=stripslashes($phone);?>"></td>
		<tr>
		<td><?=$lang['EMAIL'];?></td>
	<td><input type="text" name="email" value="<?=stripslashes($email);?>"></td>
		<tr>
		<td><?=$lang['PASSWORD'];?></td>
	<td><input type="password" name="password" value="<?=stripslashes($password);?>"></td>

	<tr>
	<td></td><td><input type="submit" name="send" value="<?=$lang['SEND']?>"><input type="reset" value="<?=$lang['RESET']?>"></td>
  </table>
</form>
<?php
if ($fname != '')
{
	$sql = "INSERT INTO {$prefix}customers (uID, fname, lname, street, zip, city, phone, email, password)
                        VALUES ('', '$fname', '$lname', '$street', '$zip', '$city', '$phone', '$email', '$password')";
                        mysql_query($sql);
}


        $sql = "SELECT * FROM {$prefix}customers ORDER BY 'fname' ASC";
        $result = mysql_query($sql);
        while($row=mysql_fetch_object($result))
		{
          echo '<small> ' . $row->uID . ' ';
          echo $row->fname . '__</small> ' ;
        }
        mysql_free_result($result);
where_am_i('', 'shopUsers');
//	include ('./styles/default/footer.html');
?>
