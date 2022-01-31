<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF=8">
   <title>Blog</title>
</head>
   <body>
    <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/posts/{{ $post->id }}" method="POST">
            {{ csrf_field() }}
            @method('PUT')
            <div class='content__title'>
            <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ $post->title }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="content_body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="お疲れ様ー－－ー－－">{{ $post->body }}</textarea>
                <p class="body___error" style="color:red">{{ $errors->first('post.body') }}</p>
             </div>
             <input type="submit" value="保存"/>
        </form>
    </div>
    </body>
</html>