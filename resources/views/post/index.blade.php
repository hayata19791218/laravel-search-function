<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <title>検索機能</title>
    </head>
    <body class="index-body">
        <h1><span>本一覧</span><a href="{{route('post.create')}}">[本を追加する]</a></h1>
        <form action="{{route('post.index')}}" method="GET">
            <input type="text" name="keyword">
            <input type="submit" value="検索">
        </form>
        <table>
            <tr>
                <th>書籍名</th>
                <th>著者名</th>
            </tr>
            @forelse($posts as $post)
            <tr>
                <td><a href="{{ route('post.show',['post' => $post])}}">{{$post->title}}</a></td>
                <td>{{$post->author}}</td>
            </tr>
            @empty
            <tr>
                <td>なし</td>
                <td>なし</td>
            </tr>
            @endforelse
        </table>
    </body>
</html>