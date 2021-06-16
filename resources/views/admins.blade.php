<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="adduser" method="post">
    @csrf
    Name:
    <input type="text" name="Name" id="Name"><br><br>
    Username:
    <input type="text" name="Userame" id="Userame"><br><br>
    DateOfBirth:
    <input type="date" name="DateOfBirth" id="DateOfBirth"><br><br>
    Email:
    <input type="email" name="Email" id="Email"><br><br>
    TelephoneNo:
    <input type="text" name="TelephoneNo" id="TelephoneNo"><br><br>
    NIC_no:
    <input type="text" name="NIC_no" id="NIC_no"><br><br>
    Gender:
    <input type="text" name="Gender" id="Gender"><br><br>
    Password:
    <input type="password" name="Password" id="Password"><br><br>
    Reenter_Password:
    <input type="password" name="Reenter_Password" id="Reenter_Password"><br><br>

    <input type="submit" value="Add Data">
    

       </form>
</body>
</html>