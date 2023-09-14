<!DOCTYPE html>
<html>
    <head>
        Welkom
    </head>
    <body>

        @foreach ($posts as $post)

        <h1>
            <a href="{{route('post.postSingle', [$post->id])}}" >
            {{$post->titel}}
       
            </a>
        </h1>
            
        @endforeach

    </body>
</html>
