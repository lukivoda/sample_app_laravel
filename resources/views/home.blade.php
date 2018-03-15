@extends("layout.app")

@section('content')
 <h1>Home</h1>
 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi at beatae, deleniti expedita iste iusto quas. Atque dolor explicabo facere hic minima nemo nesciunt quos velit? Cumque, eaque nihil! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque commodi cupiditate debitis, deleniti dicta dolorum, error fuga in ipsa itaque odit quas quo ratione sint voluptatem! Dolorem maiores officiis omnis.</p>
@endsection

@section('sidebar')
    @parent
 <p>Appended part to sidebar</p>
@endsection