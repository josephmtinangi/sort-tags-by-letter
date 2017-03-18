<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tags</title>
    <link rel="stylesheet" href="/css/bulma.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

<div class="section hero is-info">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">Tags</h1>
            <p class="subtitle">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam laudantium commodi voluptatum eaque iste suscipit.
            </p>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <ul class="has-column">
            @foreach($tags as $tag)
                <li class="title is-5">
                    <a href="/tags/{{ $tag->id }}">
                        {{ $tag->name }}
                    </a>
                </li>
            @endforeach        
        </ul>
    </div>
</div>

</body>
</html>