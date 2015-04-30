<title>Material Design Avatars</title>
<h1>
	Material Design Avatars
	<img src="http://www.94cb.com//static/editor/dialogs/emotion/images/pp/i_f46.png" />
	<img src="http://www.94cb.com//static/editor/dialogs/emotion/images/pp/i_f25.png" />
	<img src="http://www.94cb.com//static/editor/dialogs/emotion/images/pp/i_f50.png" />
</h1>
<p>
<a href="https://github.com/lincanbin/Material-Design-Avatars" target="_blank">Fork on Github: https://github.com/lincanbin/Material-Design-Avatars</a>
</p>
<hr />
<form action="?" method="post">
	<p>
		<h3>Input a char:</h3>
<?php
$TestData = ['q','w','e','r','t','y','u','i','o','p','a','s','d','f',
			 'g','h','j','k','l','z','x','c','v','b','n','m','0','1',
			 '2','3','4','5','6','7','8','9','林','灿','斌','编','写',
			 '于','二','零','一','五','年','四','月','三','十','日'];
if(!empty($_POST['char'])){
	$Char = $_POST['char'];
}else{
	$Char = $TestData[mt_rand(0,count($TestData)-1)];
}
?>
		<input name="char" type="text" value="<?php echo $Char; ?>" />
	</p>
	<p>
		&nbsp;&nbsp;<input type="submit" value="Generate" />
	</p>
	<hr />
	<p>
		<h3>Output:</h3>
		<img src="avatar.php?char=<?php echo urlencode($Char); ?>&size=512">
		<img src="avatar.php?char=<?php echo urlencode($Char); ?>&size=256">
		<img src="avatar.php?char=<?php echo urlencode($Char); ?>&size=128">
		<img src="avatar.php?char=<?php echo urlencode($Char); ?>&size=64">
		<img src="avatar.php?char=<?php echo urlencode($Char); ?>&size=32">
	</p>
</form>