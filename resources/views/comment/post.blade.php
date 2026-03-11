<x-layout :title="$pagetitle">
    <h1>Post comments</h1>

        @foreach($comments as $comment)

        <h1>------</h1>

        <h2>Id :  {{ $comment['id'] }}</h2>

        <h2>Body :  {{ $comment['body'] }}</h2>

        @endforeach

    
</x-layout>  