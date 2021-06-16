<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" width="50%">
    <tr>
    <th>Username</th>
    <th>Date of birth </th>
    <th>Email</th>
    <th>Telephone No</th>
    <th>NIC</th>
    <th>Gender</th>
    <th>Password</th>
    <th>Reenter Password</th>
    </tr>

    @foreach ($detail as $x)

    <tr>
    <td> {{$x['Name']}} </td>
    <td> {{$x['Userame']}} </td>
    <td> {{$x['DateOfBirth']}} </td>
    <td> {{$x['Email']}} </td>
    <td> {{$x['TelephoneNo']}} </td>
    <td> {{$x['NIC_no']}} </td>
    <td> {{$x['Gender']}} </td>
    <td> {{$x['Password']}} </td>
    <td> {{$x['Reenter_Password']}} </td>
    </tr>
    @endforeach


</body>
</html>