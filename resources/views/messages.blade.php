@extends("layout.app")

@section('content')
    <h1>Messages</h1>
    @if(count($messages) >0 )
     <ul class="list-group">
         @foreach($messages as $message)
             <li class="list-group-item">
                 Name: {{$message->name}}<br>E-mail: {{$message->email}}<br>Message: {{$message->message}}
             </li>

         @endforeach
     </ul>
    @endif


@endsection

@section('sidebar')
    @parent
    <p>Appended part to sidebar</p>
@endsection