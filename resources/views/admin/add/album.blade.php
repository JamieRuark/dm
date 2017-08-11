@extends('layouts.admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <form method="post">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Band Name"> <br>
                        <input type="text" name="name" class="form-control" placeholder="Album Name"> <br>
                        <input type="text" name="formed" class="form-control" placeholder="Year"> <br>
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
                    <input type="submit" name="" value="submit" class="btn btn-lg" style="margin-bottom: 15px">
                </form>
            </div>
        </div>
        <table class="table">
            <tr>
                <th>Band Name</th>
                <th>Album Name</th>
                <th>Year</th>
                <th>Producer</th>
                <th>Label</th>
            </tr>
            <tr>
                <td>Pantera</td>
                <td>Cowboys From Hell</td>
                <td>1990</td>
                <td>Terry Date</td>
                <td>EastWest<button class="btn btn-xs"><a href="">Remove</a></button></td>
            </tr>
        </table>
    </div>


@endsection
