@extends('layouts.admin')

<div class="container">
    <button class="btn btn-lg" style="margin-top: 40px; margin-bottom: 15px"><a href="">Add New +</a></button>
    <div class="form-group row">
        <div class="col-xs-2">
            <p class=>Please select a genre</p>
            <select class="form-control input-lg">
                <option>Pop</option>
                <option>Rock</option>
                <option>Metal</option>
                <option>Hip-Hop</option>
                <option>Electronic</option>
                <option>Other</option>
            </select>
            <input type="submit" class="btn btn-lg" value="Proceed">
        </div>
    </div>
    {{--<button class="btn btn-lg" style="margin-top: 40px; margin-bottom: 15px"><a href="">Choose The Genre</a></button>--}}
    <br>
    <button class="btn btn-lg" style="margin-bottom: 15px"><a href="">Edit</a></button> <br>
</div>