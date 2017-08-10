@extends('layouts.admin');

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <form method="post">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Name"> <br>
                    <input type="text" name="formed" class="form-control" placeholder="Formed in"> <br>
                    <input type="text" name="disbanded" class="form-control" placeholder="Disbanded in"> <br>
                    <input type="text" name="country" class="form-control" placeholder="Country"> <br>
                    <input type="text" name="genre_id" class="form-control" placeholder="Genre"> <br>
                    <input type="text" name="label" class="form-control" placeholder="Label"> <br>
                    <input type="text" name="popularity" class="form-control" placeholder="Popularity"> <br>
                </div>
                <div class="form-group">
                    <label for="comment">History</label>
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputFile">Upload a picture</label>
                    <input type="file" id="exampleInputFile">
                    <p class="help-block">Upload a picture that represents the genre - jpg or .png formats only</p>
                </div>

                <input type="submit" name="" value="proceed to discography" class="btn btn-lg">

            </form>
        </div>
    </div>
</div>
@endsection
