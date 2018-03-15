@extends("layout.app")

@section('content')
    <h1>Contact us</h1>
    {!! Form::open(['url' => 'contact/submit']) !!}
    {{--empty string is for value--}}
    <div class="form-group">
        {{ Form::label('name', 'Full name:') }}
        {{Form::text('name','',['placeholder'=>'Enter your name','class'=>'form-control'])}}
    </div>

       <div class="form-group">
           {{ Form::label('email', 'E-Mail Address:') }}
           {{Form::text('email','',['placeholder'=>'Enter your email','class'=>'form-control'])}}
       </div>

    <div class="form-group">
        {{ Form::label('message', 'Message:') }}
        {{Form::textarea('message','',['placeholder'=>'Enter your message...','class'=>'form-control'])}}
    </div>
     <div>
         {{Form::submit('Send',['class' =>'btn btn-primary'])}}
     </div>

    {!! Form::close() !!}
@endsection