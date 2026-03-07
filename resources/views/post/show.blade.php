<x-layout :title="$pagetitle">
    <h1>Show Page</h1>

        <h2>Id :  {{ $post['id'] }}</h2>

        <h2>Title :  {{ $post['title'] }}</h2>

        <h2>Body :  {{ $post['body'] }}</h2>

        <h2>Author :  {{ $post['author'] }}</h2>

        <h2>Published :  {{ $post['published'] }}</h2>
    
</x-layout>  