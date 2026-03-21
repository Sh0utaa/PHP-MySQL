<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    form {
        margin: auto;
        width: 50%;
        padding: 20px;
        border: 1px solid black;
    }
</style>
<?php 
    $name = "";
    $email = "";
    $website = "";
    $comment = "";
    $gender = "";
    $error = "";

    if(isset($_GET['submit_form'])) {
        $name = $_GET['name'] ?? "";
        $email = $_GET['email'] ?? "";
        $website = $_GET['website'] ?? "";
        $comment = $_GET['comment'] ?? "";
        $gender = $_GET['gender'] ?? "";

        if(count_chars($name) <= 1) {
            $error = "saxeli unda shedgebodes minimum 2 asosgan";
        } elseif (count_chars($name) >= 50) {
            $error = "saxeli ar unda iyos 50 asoze meti";
        } elseif(str_contains($email, "@") !== true) {
            $error = "emaili chaweret swor formatshi";
        } elseif ($gender == "") {
            $error = "gtxovt airchiot tqveni sqesi";
        } else {
            $error = "tqven warmatebit gaiaret registracia";
        }
        $error . "<br><br>";
    }
?>
<body>
    <form method="get">
        <h1>PHP form Validation Example</h1>
        <?php echo $error; ?>
        Name: <input type="text" name="name" 
        value="<?php echo $name; ?>">
        <br><br>
        E-mail: <input type="text" name="email" 
        value="<?php echo $email; ?>">
        <br><br>
        Website: <input type="text" name="website"
        value="<?php echo $website; ?>">
        <br><br>
        Comment: <textarea name="comment" id="">
            <?php echo $comment; ?>
        </textarea> 
        <br><br>
        Gender:
        <input type="radio" name="gender" value="male"
        <?php if($gender == "male") echo "checked"; ?>> Male
        <input type="radio" name="gender" value="female"
        <?php if($gender == "female") echo "checked"; ?>> Female
        <br><br>
        <button type="submit" name="submit_form">submit</button>
    </form>
</body>
</html>