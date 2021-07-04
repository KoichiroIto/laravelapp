<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>kadai2</title>
    </head>
    <body>
        @if(!session('result'))
            <p>じゃんけん</p>
            <form method="post" action="kadai2">
                @csrf
                <input type="text" name="player">
                <input type="submit" value="ぽん">
            </form>
        @else
            <p>今までの戦歴
            <ul>
                @foreach(session('result') as $item)
                    <li>{{$item}}</li>
                @endforeach
            </ul>
            <p>じゃんけん</p>
            <form method="post" action="kadai2">
                @csrf
                <input type="text" name="player">
                <input type="submit" value="ぽん">
            </form>
        @endif
    </body>
</html>
