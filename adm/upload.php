<?php // adm/upload.php 
// if(!defined('LANG')) { exit; }
$FILES = (isset($_GET['file'])) ? (int) $_GET['file'] : 0;
	$who_am_i = $_SERVER['PHP_SELF'];
	echo "<a href=\"../uploads/\">store</a>";
?>
<!-- Create new page html-->
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
  
  if ((($_FILES["file"]["type"] == "image/gif")|| ($_FILES["file"]["type"] == "image/jpeg")|| ($_FILES["file"]["type"] == "image/pjpeg"))&& ($_FILES["file"]["size"] < 200000))
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
    if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/pjpeg")) && ($_FILES["file"]["size"] < 20000000))
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
      echo "Stored in: " . "<a href=" . $who_am_i . "../shop/uploads/" . $_FILES["file"]["name"] . "\">store</a>";
      }
    }
  }
else
  {
  echo "Invalid file";
  }
  


