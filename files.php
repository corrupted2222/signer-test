<?php
$ipa = htmlspecialchars($_POST['ipaid']);
?>
<!DOCTYPE HTML>
<html>

<head>
    <title> IPA Signer </title>
</head>

<body>

<form action="signer.php?file=<?php echo $ipa ?>" method="post">

 <input type="text" name="certid" placeholder="p12">
 <input type="text" name="mpid" placeholder="mobileprosion">
 <input type="text" name="pass" placeholder="password">

  <button>Sign</button>

</form>

</body>
<html>