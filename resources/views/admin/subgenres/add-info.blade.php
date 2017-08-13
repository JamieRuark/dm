@extends('layouts.admin');

@section('content')
      <div class="container">
            <div class="row">
                  <div class="col-sm-6">
                        <form method="post" action="{{ route('admin.subgenre.store') }}" enctype="multipart/form-data">
                              {{ csrf_field() }}

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
                                          <select class="form-control input-md" name="genre">
                                                <option value="">--please select a genre--</option>

                                                @foreach(trans('genres.genre_names') as $key=>$value)
                                                      <option value="{{ $key }}" {{ old('genre') === $key ? 'selected' : ''}}>{{ $value }}</option>
                                                @endforeach
                                          </select>
                                    </div>
                              </div>

                              <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}"> <br>
                                    <input type="text" name="born" class="form-control" placeholder="Born in" value="{{ old('born') }}"> <br>

                                    <select class="form-control input-md" name="country_of_origin">
                                          <option value="">--please select country--</option>

                                          @foreach(trans('general.countries') as $key=>$value)
                                                <option value="{{ $key }}"  {{ old('country_of_origin') === $key ? 'selected' : ''}}>{{ $value }}</option>
                                          @endforeach
                                    </select>

                                    <br/>

                                    {{--<input type="text" name="member4" class="form-control" placeholder="Originators cherez komy"> <br>--}}
                                    {{--<input type="text" name="member5" class="form-control" placeholder="Predecessors cherez komy"> <br>--}}
                                    <select class="form-control input-md" name="popularity">
                                          <option value="">--please select popularity--</option>

                                          @foreach(trans('genres.popularity') as $key=>$value)
                                                <option value="{{ $key }}"  {{ old('popularity') === $key ? 'selected' : ''}}>{{ $value }}</option>
                                          @endforeach
                                    </select>
                              </div>
                              <div class="form-group">
                                    <label for="comment">History</label>
                                    <textarea class="form-control" rows="5" id="history" name="history">{{ old('history') }}</textarea> <br>

                                    <div class="form-group">
                                          <label for="exampleInputFile">Upload a picture</label>
                                          <input type="file" id="exampleInputFile" name="cover">
                                          <p class="help-block">Upload a picture that represents the genre - jpg or .png formats only</p>
                                    </div>

                              </div>

                              <input type="submit" name="" value="Proceed to Key Albums" class="btn btn-lg">
                        </form>
                  </div>
            </div>
      </div>
@endsection
