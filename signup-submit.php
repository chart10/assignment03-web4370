<!-- Christian Hart 001-68-3628 -->
<!-- NerdLuv Signup results -->

<!doctype html>
<html>
    <head>
        <title>NerdLuv Signup Submission</title>
        <link rel="stylesheet" href="nerdluv.css">
    </head>
    <body>
        <img class="bannerarea" src="imgs/nerdluv-logo-alt.png"
             alt="Nerd Luv: Where Meek Geeks Meet" width="300">
        <img class="bannerarea" src="imgs/pixel-heart.png"
             alt="pixel heart logo" height="70">

        <?php include("common.php");

            // Verify that the user in not already in singles.txt
            userAlready("$_POST[name]");
            // Verify input values are valid
            checkUserInfo("$_POST[name]","$_POST[type]",
                "$_POST[ageLow]","$_POST[ageHigh]");

            // Put gender preference array into a string
            $prefs = implode("",$_POST['pref']);

            // Add the user info to singles2.txt
            $myfile = fopen("singles2.txt", "a") or die("Unable to open file!");
            $user = "$_POST[name]" . "," . "$_POST[gender]" . "," . "$_POST[age]" . "," .
                strtoupper("$_POST[type]") . "," . "$_POST[os]" . "," . "$_POST[ageLow]"
                . "," . "$_POST[ageHigh]" . "," . "$prefs" . " \n";
            fwrite($myfile, $user);
            fclose($myfile);

            echo "<h1>Thank you!</h1>";

            echo "<p>Welcome to NerdLuv, $_POST[name]!</p>";

            echo "<p>Now <a class='inline' href='matches.php'>log in to see your matches!</a></p>";
        ?>

        <br>
        <p>Results and page (C) Copyright NerdLuv Inc.</p>
        <a href="index.php">
            <img src="imgs/pixel-heart.png" width="25px">
            Back to Home Page</a>
        <br>
        <a href="https://www.w3.org/standards/webdesign/htmlcss">
            <img src="imgs/w3c_cred.jpg" alt="W3C HTML5 and CSS Documentation" width="200">
        </a>
    </body>
</html>