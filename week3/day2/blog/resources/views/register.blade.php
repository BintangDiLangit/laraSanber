<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    <form action="/welcome" method="POST">
        @csrf
        <label for="fName">First Name: </label><br /><br />
        <input type="text" name="fName" id="fName" /><br /><br />

        <label for="lName">Last Name: </label><br /><br />
        <input type="text" name="lName" id="lName" /><br /><br />

        <label>Gender: </label><br /><br />
        <input type="radio" name="gender" /> Male<br />
        <input type="radio" name="gender" /> Female<br />
        <input type="radio" name="gender" /> Other<br /><br />

        <label>Nasionality: </label> <br /><br />
        <select name="nasio" id="ns">
            <option value="indo">Indonesian</option>
            <option value="singapore">Singaporean</option>
            <option value="malaysia">Malaysian</option>
            <option value="australia">Australian</option>
        </select><br /><br />

        <label>Language Spoken: </label> <br /><br />
        <input type="checkbox" name="language" /> Bahasa Indonesia <br />
        <input type="checkbox" name="language" /> English <br />
        <input type="checkbox" name="language" /> Other <br /><br />

        <label for="bio">Bio: </label><br />
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea><br />

        <button type="submit" name="signup">Sign Up</button>
    </form>
</body>

</html>