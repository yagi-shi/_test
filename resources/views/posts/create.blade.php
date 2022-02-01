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
                <input type="text" name="post[title]" placeholder="タイトル"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="お疲れ様ー－－ー－－"></textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <div class="category">
                <h2>Category</h2>
                <select name="post[category_id]">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
             <input type="submit" value="保存"/>
        </form>
    </body>
</html>