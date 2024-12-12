<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome to the Dashboard!</h1>

    <h2>User Information</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>IC Number</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th>Emergency Mobile Number</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Role</th>
                <th>Nationality</th>
                <th>Address</th>
                <th>Father Name</th>
                <th>Father Contact</th>
                <th>Father Occupation</th>
                <th>Mother Name</th>
                <th>Mother Contact</th>
                <th>Mother Occupation</th>
                <th>Guardian Name</th>
                <th>Guardian Contact</th>
                <th>Guardian Occupation</th>
                <th>Blood Type</th>
                <th>Allergies</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->ic_number }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->mobilenumber }}</td>
                    <td>{{ $user->date_of_birth }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->role }}</td>
                    <td>{{ $user->nationality }}</td>
                    <td>{{ $user->address }}</td>
                    <td>{{ $user->fname }}</td>
                    <td>{{ $user->fcontact }}</td>
                    <td>{{ $user->foccupation }}</td>
                    <td>{{ $user->mname }}</td>
                    <td>{{ $user->mcontact }}</td>
                    <td>{{ $user->moccupation }}</td>
                    <td>{{ $user->gname }}</td>
                    <td>{{ $user->gcontact }}</td>
                    <td>{{ $user->goccupation }}</td>
                    <td>{{ $user->blood_type }}</td>
                    <td>{{ $user->allergies }}</td>
                    <!-- Add more data columns as needed -->
                </tr>
            @endforeach
        </tbody>
    </table>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>
