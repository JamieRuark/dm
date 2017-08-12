@extends('layouts.admin')

@section('content')
<div class="container" style="margin-top: 140px">
    <div class="row">
        <div class="col-sm-12">
            <table class="table">

                <tr>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Email</th>
                    <th>Joined</th>
                </tr>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->role }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->toDateTimeString() }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

<div class="container">
    {{ $users->links() }}
</div>

@endsection
