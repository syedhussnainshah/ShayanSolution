<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" width="200px"
        height="200px" alt="">
    <table class="table table-border table-striped table-dark">
        <tr>
            <th>Name</th>
            <td>{{ $data['name'] }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <th>{{ $data['email'] }}</th>
        </tr>
        <tr>
            <th>Phone</th>
            <td>{{ $data['phone'] }}</td>
        </tr>
        <tr>
            <th>Project Description</th>
            <td>{{ $data['projectDetails'] }}</td>
        </tr>
    </table>



</body>

</html>
