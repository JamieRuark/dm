@extends('layouts.admin')

<div class="container">
    <button class="btn btn-lg" style="margin-top: 40px; margin-bottom: 15px"><a href="">Add New +</a></button>
    <button class="btn btn-lg" style="margin-top: 40px; margin-bottom: 15px"><a href="">Solo Artist +</a></button>
    <button class="btn btn-lg" style="margin-top: 40px; margin-bottom: 15px"><a href="">Band +</a></button>
    <br>
    <button class="btn btn-lg" style="margin-bottom: 15px"><a href="">Edit</a></button> <br>

</div>

<div class="container" style="margin-top: 60px">
    <div class="row">
        <div class="col-sm-12">
            <table class="table">
                <tr>
                    <th>Name</th>
                    <th>Formed in</th>
                    <th>Disbanded</th>
                    <th>Country</th>
                    <th>Subgenre</th>
                    <th>Label</th>
                    <th>Popularity</th>
                </tr>
                <tr>
                    <td>Pantera</td>
                    <td>1981</td>
                    <td>2003</td>
                    <td>USA</td>
                    <td>Groove Metal</td>
                    <td>EastWest</td>
                    <td>9000000<button class="btn btn-xs"><a href="">Edit</a></button></td>
                </tr>
            </table>
        </div>
    </div>
</div>




{{--<link href="/storage/bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet">--}}
{{--<script src="/storage/bootstrap-editable/js/bootstrap-editable.min.js"></script>--}}