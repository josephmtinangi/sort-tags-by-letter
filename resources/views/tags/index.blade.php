<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tags</title>
    <link rel="stylesheet" href="/css/bulma.css">
</head>
<body>

<div class="section">
    <div class="container">
        <ul>
            @foreach($tags as $tag)
                <li>{{ $tag->name }}</li>
            @endforeach        
        </ul>
    </div>
</div>

</body>
</html>