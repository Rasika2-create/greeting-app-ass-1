<?php
function getGreeting() {
    $hour = date('G');
    if ($hour >= 2 && $hour < 11) {
        return "Morning";
    } elseif ($hour >= 11 && $hour < 16) {
        return "Afternoon";
    } elseif ($hour >= 16 && $hour < 21) {
        return "Evening";
    } else {
        return "Night";
    }
}

$greeting = "";
$name = "";
$food = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $food = htmlspecialchars($_POST['food']);
    $greeting = getGreeting();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
    body{
        background-color: lavender;
    }
</style>
<body>
    <h1>Greeting App</h1>
    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label>Favorite Food:</label><br>
        <input type="radio" id="Samosa" name="food" value="Samosa" required>
        <label for="Samosa">Samosa</label><br>
        <input type="radio" id="Pasta" name="food" value="Pasta">
        <label for="Pasta">Pasta</label><br>
        <input type="radio" id="Sandwich" name="food" value="Sandwich">
        <label for="Sandwich">Sandwich</label><br><br>
        <button type="submit" style="background-color:green;">Submit</button>
    </form>

    <?php if ($greeting): ?>
        <h2 style="hover:red;"><?php echo "Good $greeting $name. Your favorite food is $food."; ?></h2>
    <?php endif; ?>
</body>
</html>
