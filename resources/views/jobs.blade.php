<h1>{{$heading}}<h1>

@if(count($jobs) == 0)
    <p>Não existem vagas de momento.</p>
@else
@foreach ($jobs as $job)

    <a href="/jobs/{{$job['id']}}"><h2>{{$job['title']}}</h2></a>
    <p>{{$job['description']}}</p>
    
@endforeach
@endif