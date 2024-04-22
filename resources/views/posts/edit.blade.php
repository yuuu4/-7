<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
    </head>
      <x-app-layout>
    <x-slot name="header">
        
         </x-slot>
    <body class="antialiased">
        <h1 class="title">編集画面</h1>
        <div class="cotent">
        <form action="/posts/{{$post->id}}" method="POST">
           @csrf
           @method('PUT')
        <div class="content_title">
            <h2>タイトル</h2>
            <input type="text" name='post[title]' value="{{$post->title}}">
            <p class='title__error' style="color:red">{{$errors->first('post.title')}}</p>
        </div>
        <div class ='content_body'>
            <h2>本文</h2>
            <input type="text"name='post[body]' value="{{$post->body}}">
            </div>
          <input type="submit" value="保存">
        </form>
        </div>
    </body>
    </x-app-layout>
</html>