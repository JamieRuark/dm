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
</div>

<div class="container" style="margin-top: 60px">
    <div class="row">
        <div class="col-sm-12">
            <table class="table">
                <tr>
                    <th>Name</th>
                    <th>Genre</th>
                    <th>Born</th>
                    <th>Country</th>
                    <th>Popularity</th>
                </tr>
                <tr>
                    <td>Groove Metal</td>
                    <td>Metal</td>
                    <td>2003</td>
                    <td>USA</td>
                    <td>Very Popular<button class="btn btn-xs"><a href="">Edit</a></button></td>
                </tr>
            </table>
        </div>
    </div>
</div>