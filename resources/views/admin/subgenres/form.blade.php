@if ($errors->any())
      <div class="alert alert-danger">
            <ul>
                  @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                  @endforeach
            </ul>
      </div>
@endif

<div class="form-group row">
      <div class="col-xs-10">
            {!! Form::select('genre', ["" => '--please select a genre--'] + trans('genres.genre_names'), null, ['class' => 'form-control input-md']) !!}
      </div>
</div>

<div class="form-group">
      {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']); !!} <br/>
      {!! Form::text('born', null, ['class' => 'form-control', 'placeholder' => 'Born in']); !!}<br/>
      {!! Form::select('country_of_origin', ["" => '--please select country--'] + trans('general.countries'), null, ['class' => 'form-control input-md']) !!}<br/>
      {!! Form::select('popularity', ["" => '--please select popularity--'] + trans('genres.popularity'), null, ['class' => 'form-control input-md']) !!}
</div>
<div class="form-group">
      {!! Form::label('comment', 'History'); !!}
      {!! Form::textarea('history', null, ['rows' => 5, 'class' => 'form-control']) !!}<br>

      <div class="form-group">
            {!! Form::label('cover', 'Upload a picture'); !!}
            {!! Form::file('cover'); !!}
            <p class="help-block">Upload a picture that represents the genre - jpg or .png formats only</p>
      </div>

</div>
