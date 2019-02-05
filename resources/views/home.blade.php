@extends('layouts.app')

@section('content')

    <h1>Home</h1>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci assumenda commodi culpa, dignissimos
        exercitationem explicabo harum ipsum itaque iusto minima non omnis, quaerat quas quis ratione reprehenderit
        sapiente tenetur, vel!
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias amet culpa enim eos est impedit magni nam nobis
        nostrum porro possimus quos recusandae sunt, tenetur totam veritatis voluptatum? Ducimus, ea!
    </p>

@endsection

@section('sidebar')
    @parent
    <p>
        this is appended to the sidebar

    </p>

@endsection
