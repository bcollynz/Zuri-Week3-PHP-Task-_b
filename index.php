<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
     
</head>

<body>
      <form  method="POST" action="user_data.php">
        <label for ="name"> Name: <input placeholder="Full Name" type="text" name="name" required></label><br>
        <label for ="email"> Email: <input placeholder="Email" type="email" name="email" required></label><br>
        <label for="gender">Gender:</label>
            <Select name="gender" id="gender" required>
              <option value="select">Select Gender</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </Select><br><br>
          <label for="birthday">Date of Birth:</label>
            <input type="date" id="birthday" name="birthday">
          </div><br>

        <button type="submit">Submit</button>

</form>
</body>
</html>