@extends('layouts.admin');

@section('content')
      <div class="container">
            <div class="row">
                  <div class="col-sm-6">
                        {!! Form::model($subgenre, ['route' => ['admin.subgenre.update', $subgenre->id],  'files' => true]) !!}
                        @include('admin.subgenres.form')

                        {!! Form::submit('Proceed to Key Albums', ['class' => 'btn btn-lg']) !!}

                        {!! Form::close() !!}
                  </div>
            </div>
      </div>
@endsection
