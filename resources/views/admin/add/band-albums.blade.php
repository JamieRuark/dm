@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <form method="post">
                <div class="form-group">
                    <button class="form-control btn btn-info btn-lg active" style="margin-top: 20px; padding-bottom: 32px">Add +</button> <br>
                </div>

            </form>
        </div>
    </div>
</div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <form method="post">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Year"> <br>
                        <input type="text" name="formed" class="form-control" placeholder="Name"> <br>
                        <input type="text" name="disbanded" class="form-control" placeholder="producer"> <br>
                        <input type="text" name="country" class="form-control" placeholder="label"> <br>
                        <label for="exampleInputFile">Upload an album cover</label>
                        <input type="file" id="exampleInputFile">
                    </div>
                    <div class="form-group">
                        <label for="comment">Description</label>
                        <textarea class="form-control" rows="5" id="description"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="form-control btn btn-success btn-lg active" style="margin-top: 20px; padding-bottom: 32px">Add +</button> <br>
                    </div>
                        <input type="submit" name="" value="proceed to members" class="btn btn-lg" style="margin-bottom: 15px">
                </form>
            </div>
        </div>
    </div>

@endsection
