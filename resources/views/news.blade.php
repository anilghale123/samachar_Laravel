<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tato Khabar</title>
</head>

<body>
    <main>
        <header>
            <h1>Tato khabar 🔥</h1>
        </header>
        <section>
            <ul>
                @foreach($news as $item)
                <li>
                    <div>
                        <h1>{{$item['title']}}</h1>
                        <p>{{$item['description']}}</p>
                    </div>
                </li>
                @endforeach
            </ul>
        </section>
    </main>
</body>

</html>
