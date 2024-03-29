<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale() )}}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Post</title>
        
        <!--フォント-->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <body>
        <!--親ビューを継承-->
        <x-app-layout>
            <!--ヘッダーを表示-->
            <x-slot name="header">
                ブログ一覧
            </x-slot>
            <!--ブログ編集画面へのリンク-->
            <div class="edit"><a href="/posts/{{ $post->id }}/edit">ブログを編集する</a></div>
            <!--ブログタイトル-->
            <h1 class="title">
                {{ $post->title }}
            </h1>
            <div class="content">
                <!--ブログ本文-->
                <div class="contnt__post">
                    <h3>本文</h3>
                    <p class="body">{{ $post->body }}</p>
                </div>
            </div>
            
            <!--カテゴリー名-->
            <a href="">{{ $post->category->name }}</a>
            
            <!--フッター-->
            <div class="footer">
                <!--一覧画面に戻るボタン-->
                <a href="/">ブログ一覧に戻る</a>
            </div>
        </x-app-layout>
    </body>
</html>