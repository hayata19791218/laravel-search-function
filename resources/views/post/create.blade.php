<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <title>検索機能</title>
    </head>
    <body class="create-body">
        <h1>本を追加</h1>
        <form action="{{route('post.store')}}" method="post">
            @csrf
            <label for="title"><input class="title" type="text" name="title" placeholder="本のタイトル"></label>
            <label for="author"><input class="author" type="text" name="author" placeholder="著者"></label>
            <label for="body"><textarea class="body" name="body" cols="30" rows="10" placeholder="本の内容"></textarea></label>
            <button type="submit" class="submit">追加する</button>
        </form>
    </body>
</html>