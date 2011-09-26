<?php // shopUsers.php

// $ = (isset($_GET[''])) ? (int) $_GET[''] : 0;

error_reporting(E_ALL);
include ('./shopOverall.php');
$title = $lang[''];
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

$zip = (isset($_POST['zip'])) ? (int) $_POST['zip'] : 0;

?>
<h3>Rekisteröidy</h3>
<form method="post" action="">
  <table>
    <tr>
	<td>Etunimi</td>
	<td><input type="text" name="fname" value="<?php echo stripslashes($fname); ?>"></td>
    <tr>
	<td>Sukunimi</td>
	<td><input type="text" name="lname" value="<?php echo stripslashes($lname); ?>"></td>
	<tr>
		<td>Katusoite</td>
	<td><input type="text" name="street" value="<?php echo stripslashes($street); ?>"></td>
	<tr>
	<td>zip</td>
	<td><input type="text" name="zip" value="<?php echo $zip; ?>"></td>	
		<tr>
		<td>city</td>
	<td><input type="text" name="city" value="<?php echo stripslashes($city); ?>"></td>
	
		<tr>
		<td>phonenumero</td>
	<td><input type="text" name="phone" value="<?php echo stripslashes($phone); ?>"></td>
	
		<tr>
		<td>Sähköposti</td>
	<td><input type="text" name="email" value="<?php echo stripslashes($email); ?>"></td>
	
	<tr>
	<td></td><td><input type="submit" name="laheta" value="Lähetä"><input type="reset"></td>
  </table>
</form>
<?php
if ($fname != '')
{
	$sql = "INSERT INTO {$prefix}customers (uID, fname, lname, street, zip, city, phone, email)
                        VALUES ('', '$fname', '$lname', '$street', '$zip', '$city', '$phone', '$email')";
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

	include ('./styles/default/footer.html');
?>
