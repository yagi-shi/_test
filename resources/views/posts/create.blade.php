<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF=8">
   <title>Blog</title>
</head>
    <body>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
            <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="お疲れ様ー－－ー－－">{{ old('post.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
             <input type="submit" value="保存"/>
        </form>
    </body>
</html>