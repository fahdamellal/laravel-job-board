<x-layout :title="$pagetitle">
    <h1>Show Page</h1>

        @foreach($comments as $comment)

        <h1>------</h1>

        <h2>Id :  {{ $comment['id'] }}</h2>

        <h2>PostId :  {{ $comment['post_id'] }}</h2>

        <h2>Body :  {{ $comment['body'] }}</h2>

        <h2>Author :  {{ $comment['author'] }}</h2>

        @endforeach

    
</x-layout>  