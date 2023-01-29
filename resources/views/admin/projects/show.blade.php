@extends('layouts.admin')

@section('content')
<div class="content d-flex flex-column">

    <h1 class="py-5">Project {{$project->title}}</h1>

    <div class="container">
        <div class="row row-cols-2 g-4">
            <div class="col">
                @if($project->cover_img)
                <div class="img_window">
                    <img class="img-fluid w-100 mb-3" src="{{asset('storage/' . $project->cover_img)}}" alt="">
                </div>
                @endif
            </div>
            <div class="col">
                <h4>Project title: </h4>
                <p>{{$project->title}}</p>
                <h4>Project slug: </h4>
                <p>{{$project->slug}}</p>
                <h4>Type: </h4>
                <p>{{$project->type ? $project->type->name : 'No type'}}</p>
                <!-- c'è una tipologia assegnata? se si, mostra il nome, altrimenti No type -->
                <h4>Technologies: </h4>
                <!-- se le tecnologie nella lista sono più di 0 le mostro -->
                @if(count($project->technologies) > 0)
                <!-- per ogni tecnologia assegnata mostro in nome -->
                @foreach($project->technologies as $technology)
                <span>#{{$technology->name}} </span>
                @endforeach

                @else
                <p>No technology assigned for this project</p>
                @endif

                <h4 class="pt-3">Project description: </h4>
                <p>{{$project->description}}</p>
            </div>
        </div>

        <a class="btn btn-warning mt-5 ms-auto" href="{{route('admin.projects.edit', $project->slug)}}"><i
                class="fa-solid fa-pencil"></i> edit</a>

    </div>

</div>

@endsection