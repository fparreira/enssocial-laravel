@extends("template")

@section("title")Página de Login @endsection

@section("content")
<div class="jumbotron">


  Você precisa fazer o login
</div>

{!! Form::open(array('class'=>'form-horizontal')) !!}

{!! Form::close() !!}

@endsection
