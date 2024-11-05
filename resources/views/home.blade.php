<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gripp Pets</title>
</head>
    <body>
        <form method="POST" action="/add-pet">
            @csrf
            <label for="name">Name</label>
            <input type="text" name="name">
            <br>
            <label for="type">Type</label>
            <select name="type">
                <option value="1">Cat</option>
                <option value="2">Dog</option>
                <option value="3">Fish</option>
                <option value="4">Rabbit</option>
            </select>
            <br>
            <label for="address">Address</label>
            <input type="text" name="address">
            <br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>