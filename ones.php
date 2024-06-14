Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

Name: <input type="text" name="name">
E-mail: <input type="text" name="email">
Website: <input type="text" name="website">
Comment: <textarea name="comment" rows="5" cols="40"></textarea>

Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">

<form method="post" action="test_form.php">
<form method="post" action="test_form.php/"><script>alert('hacked')</script>
<?php $fruits =$_POST["fruits"];
echo $fruits[0];
?>