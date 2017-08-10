@extends('layouts.admin');

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <form method="post">
                <div class="form-group">
                    <input type="text" name="member1_name" class="form-control" placeholder="Name">
                    <input type="text" name="member1_role" class="form-control" placeholder="Role">
                    <br>
                    <input type="text" name="member2_name" class="form-control" placeholder="Name">
                    <input type="text" name="member2_role" class="form-control" placeholder="Role">
                    <br>
                    <input type="text" name="member3_name" class="form-control" placeholder="Name">
                    <input type="text" name="member3_role" class="form-control" placeholder="Role">
                    <br>
                    <input type="text" name="member4_name" class="form-control" placeholder="Name">
                    <input type="text" name="member4_role" class="form-control" placeholder="Role">
                    <br>
                    <input type="text" name="member5_name" class="form-control" placeholder="Name">
                    <input type="text" name="member5_role" class="form-control" placeholder="Role">
                    <br>
                    <input type="text" name="member6_name" class="form-control" placeholder="Name">
                    <input type="text" name="member6_role" class="form-control" placeholder="Role">
                    <br>
                    <input type="text" name="member7_name" class="form-control" placeholder="Name">
                    <input type="text" name="member7_role" class="form-control" placeholder="Role">
                    <br>

                </div>
                <input type="submit" name="" value="Submit" class="btn btn-lg">
            </form>
        </div>
    </div>
</div>
@endsection