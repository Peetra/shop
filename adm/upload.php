<?php // adm/upload.php 
// if(!defined('LANG')) { exit; }
?>
<form action="upload_file.php" method="post" enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file" />
<br />
<input type="submit" name="submit" value="Submit" />
</form>

</body>
</html> 
<?
if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br />";
  }
else
  {
  echo "Upload: " . $_FILES["file"]["name"] . "<br />";
  echo "Type: " . $_FILES["file"]["type"] . "<br />";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
  echo "Stored in: " . $_FILES["file"]["tmp_name"];
  }
  
  if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 2000000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Error: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Stored in: " . $_FILES["file"]["tmp_name"];
    }
  }
else
  {
  echo "Invalid file";
  }
/*
 $_FILES = (isset($_GET['file'])) ? (int) $_GET['file'] : 0;
	$who_am_i = $_SERVER['PHP_SELF'];
	echo "<a href=\"../uploads/\">uploads</a>";
?>
<br>
<form method="get" enctype="multipart/form-data" action="">
<table class="pages">

<tr>
	<td> <?= $lang['NEW_PIC']?><br><span class="per75"><?= $lang['NEW_PIC_EXPLAIN']?></span>
	<td><input type="file" name="file" id="file" /></td>
	
<tr>
	<td><input type="submit" name="send">
	<td><input type="reset">
</table>
</form>

</table>
<?
// Uppladdningsfunktionen
// Baserar sig på http://www.sebastiansulinski.co.uk/web_design_tutorials/php/php_file_upload_4.php
function upload()
{
// define constant which contains the maximum file size in bytes
define('MAX_FILE_SIZE', 4000000);

$servern = $_SERVER['SERVER_NAME'];

if (array_key_exists('btn', $_GET))
{

// define new constant which contains the path the the upload folder
define('UPL_FLD','../uploads/');

// create new file name
$filename = substr($_FILES['frmfile']['name'], 0, strrpos($_FILES['frmfile']['name'], '.'));
$extension = strtolower(array_pop(explode('.', $_FILES['frmfile']['name'])));
$file = $filename . '_' .rand(1,999). '.' .$extension;
$file = strtolower($file);
$replace_theese_chars = array("(", " ", "å", "ä", "ö", "Å", "Ä", "Ö", ")");
$file = str_replace($replace_theese_chars, "_", $file);

// create variable and assign the formatted value of MAX_FILE_SIZE to it
$maxfs = number_format(MAX_FILE_SIZE/1024, 1).'KB';
$fsize = false;

// check the file size
if ($_FILES['frmfile']['size'] > 0 && $_FILES['frmfile']['size'] <= MAX_FILE_SIZE) 
{

	$fsize = true;

}

// allow MIME file types
$filetype = array('image/gif','image/jpeg','image/pjpeg','image/png'); // pjpeg e nån IE-grejs....
$ftype = false;

// check if uploaded file type is allowed
if (in_array($_FILES['frmfile']['type'], $filetype))
{
  $ftype = true;
}

if ($ftype && $fsize != '')
{
	switch($_FILES['frmfile']['error'])
	{
		case 0:
		// move file to the upload folder
		$upload = move_uploaded_file($_FILES['frmfile']['tmp_name'],UPL_FLD.$file);
		if ($upload)
		{
		/*http://fi.php.net/reserved.variables.server
$msg = 'Kuva' . $_FILES['frmfile']['name'].' on tallennettu nettiin ja löytyy osoitteesta <br /><dl class="codebox"><dt>Kopioi tämä img scr-koodin:</dt><dd><code>&lt;img src=&quot;img/kodittomat/' . $file . '&quot; width=&quot;500&quot; alt=&quot;[]&quot; title=&quot;&quot; /&gt;</code></dd></dl><br />:';

		} 
		else
		{
			$msg = 'Error.<br />Ole hyvä, yritä uudelleen.';
		}
		break;
		
		case 3:
		$msg = 'Error.<br />Ole hyvä, yritä uudelleen.';
		break;
		
		default:
		$msg = 'Error - please contact administrator. Tai jotain, nyt tarttisi kyllä tehdä jotain.';
	}
} 
elseif ($_FILES['frmfile']['error'] == 4)
{
	$msg = 'Valitse kuva koneeltasi';
}
else
{	
	$msg = $_FILES['frmfile']['name'] . ' ei voida hakea.<br />';
			if(!$ftype) 
			{
				$msg .= 'Hyväksytyt tiedostopäätteet: .gif, .jpg, .png<br />';
			}
			if(!$fsize)
			{
				$msg .= 'Tiedosto ei saa olla isompi kuin ' . $maxfs;
			}
}

}
// include ('./upload_template.html');

if(isset($msg)) 
{ 
	echo '<p class="warning">'.$msg.'</p>'; 
}

}
upload();
/*if ($_FILES["file"]["error"] > 0)
{
  echo "Error: " . $_FILES["file"]["error"] . "<br>";
}
else
  {
	  echo "Upload: " . $_FILES["file"]["name"] . "<br>";
	  echo "Type: " . $_FILES["file"]["type"] . "<br>";
	  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br>";
	  echo "Stored in: " . $_FILES["file"]["tmp_name"];
  }
  
  if ((($_FILES["file"]["type"] == "image/png") ||($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")) && ($_FILES["file"]["size"] < 200000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    	echo "Error: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
		echo "Upload: " . $_FILES["file"]["name"] . "<br>";
		echo "Type: " . $_FILES["file"]["type"] . "<br>";
		echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br>";
		echo "Stored in: " . $_FILES["file"]["tmp_name"];
    }
  }
else
  {
  echo "Invalid file";
  }
  
  //
    if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/pjpeg")) && ($_FILES["file"]["size"] < 20000000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("../shop/uploads/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "../shop/uploads/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "<a href=" . $who_am_i . "../shop/uploads/" . $_FILES["file"]["name"] . "\">uploads</a>";
      }
    }
  }
else
  {
  echo "Invalid file";
  }*/
  


