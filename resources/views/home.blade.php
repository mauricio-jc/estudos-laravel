@extends('layouts.app')

@section('content')
<h1>Você está logado como Fulano</h1>
<hr>

<div class="row">
    <div class="col m6 pl-0">
        <div class="card">
            <div class="card-content">
                <span class="card-title">Post 1</span>
                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
                <a href="#">Ver Post</a>
                <a href="#">Comentar</a>
            </div>
        </div>
    </div>
    <div class="col m6 pr-0">
        <div class="card">
            <div class="card-content">
                <span class="card-title">Post 2</span>
                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
                <a href="#">Ver Post</a>
                <a href="#">Comentar</a>
            </div>
        </div>
    </div>
</div>

@endsection
