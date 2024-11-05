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
                <option selected disabled>Select Type...</option>
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
        <hr>
        <table>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Address</th>
            </tr>
            @foreach ($pets as $pet)
                <tr>
                    <td>{{ $pet->name }}</td>
                    <td>{{ $pet->petType->name }}</td>
                    <td>{{ $pet->address }}</td>
                </tr>
            @endforeach
        </table>
        <hr>
        <table>
            <tr>
                <th>Type</th>
                <th>Amount</th>
            </tr>
            @foreach ($petTypes as $petType)
                <tr>
                    <td>{{ $petType->name }}</td>
                    <td>{{ $pets->where('pet_type_id', $petType->id)->count() }}</td>
                </tr>
            @endforeach
        </table>
    </body>
</html>