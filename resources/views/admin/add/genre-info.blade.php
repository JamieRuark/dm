@extends('layouts.admin');

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <form method="post">
                <div class="form-group">
                    <input type="text" name="member1" class="form-control" placeholder="Name"> <br>
                    <input type="text" name="member2" class="form-control" placeholder="Born in"> <br>
                    <input type="text" name="member3" class="form-control" placeholder="Countries of origin cherez komy"> <br>
                    <input type="text" name="member4" class="form-control" placeholder="Originators cherez komy"> <br>
                    <input type="text" name="member5" class="form-control" placeholder="Predecessors cherez komy"> <br>
                        <select class="form-control input-md">
                            <option>Extremely popular</option>
                            <option>Very popular</option>
                            <option>Popular</option>
                            <option>Well known</option>
                            <option>Known</option>
                            <option>Not known much</option>
                            <option>Unknown</option>
                            <option>Totally unknown</option>
                        </select>
                </div>
                <div class="form-group">
                    <label for="comment">History</label>
                    <textarea class="form-control" rows="5" id="comment"></textarea> <br>

                    <div class="form-group">
                        <label for="exampleInputFile">Upload a picture</label>
                        <input type="file" id="exampleInputFile">
                        <p class="help-block">Upload a picture that represents the genre - jpg or .png formats only</p>
                    </div>

                </div>

                <input type="submit" name="" value="Proceed to Key Albums" class="btn btn-lg">
            </form>
        </div>
    </div>
</div>
@endsection