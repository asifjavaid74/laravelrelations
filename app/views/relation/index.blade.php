@foreach($articles as  $article)
    
<h1>{{$article->title}}<small>Posted By {{{$article->Posters->name}}}</small></h1>
    <p>{{$article->body}}</p>
@endforeach