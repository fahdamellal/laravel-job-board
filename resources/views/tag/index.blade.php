<x-layout :title="$pagetitle">
    <h1>Tag Page</h1>

    @foreach ($tags as $tag)

        <h2>Id :  {{ $tag['id'] }}</h2>

        <h2>Title :  {{ $tag['title'] }}</h2>


    @endforeach

</x-layout>  