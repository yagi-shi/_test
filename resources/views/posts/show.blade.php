<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF=8">
   <title>Blog</title>
</head>
   <body>
        <h1 class="title">{{ $post->title }}</h1>
        <p class='edit'>[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p> 
        <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
    @csrf
    @method('DELETE')
    <button type="submit">delete</button> 
</form>
        <div class="content">
            <div class="content__post">
                <h3>なんやこれ</h3>
                <p>{{ $post->body }}</p>    
            </div>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        <script>
        function DELETE();confirm('本当に消去しますか?')
        if ( function DELETE )
            {
            console.log('消去しました')};
        </script>
    </body>
</html>