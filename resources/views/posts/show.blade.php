<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF=8">
   <title>Blog</title>
</head>
   <body>
        <h1 class="title">{{ $post->title }}</h1>
        <p class='edit'>[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p> 
        <div class="content">
            <div class="content__post">
                <h3>なんやこれ</h3>
                <p>{{ $post->body }}</p>    
            </div>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>