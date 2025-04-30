<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home-Page</title>
</head>
<body>
<h1>This is Home Page</h1>



<p style="text-align: justify">  praesentium minus dicta enim nulla consequuntur, aspernatur corrupti asperiores porro quaerat quia ipsum. Fuga, perferendis velit labore corrupti aperiam, omnis enim recusandae impedit ut consequatur quae dicta modi?</p>

<p>My Name is {{ $name}}</p>

<h2>User Information:</h2>
<ul>
    <li><strong>Name:</strong> {{ $myData['name'] }}</li>
    <li><strong>Email:</strong> {{ $myData['email'] }}</li>
    <li><strong>Phone:</strong> {{ $myData['phone'] }}</li>
    <li><strong>Address:</strong> {{ $myData['address'] }}</li>
    <li><strong>Age:</strong> {{ $myData['age'] }}</li>
    <li><strong>Gender:</strong> {{ $myData['gender'] }}</li>
    <li><strong>Country:</strong> {{ $myData['country'] }}</li>
</ul>

<h3>Hobbies:</h3>
<ul>
    @foreach ($myData['hobbies'] as $hobby)
        <li>{{ $hobby }}</li>
    @endforeach
</ul>


@include('partials.footer')
</body>
</html>
