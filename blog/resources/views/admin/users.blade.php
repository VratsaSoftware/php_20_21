@extends ("layouts.master")

@section('title','All Users')

<h1>All users</h1>
@section('content')

<table class="table table-responsive">
<thead>
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">IsApproved?</th>
        <th scope="col">Created At</th>
    </tr>
</thead>
<tbody>
    @foreach ($users as $user)  
    <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email}}</td>
        <td>{{ $user->approved}}</td>
        <td>{{ $user->created_at}}</td>
        <td>{{ isset($user->profile->first_name) ? $user->profile->first_name : 'None'}}</td>
        <td>{{ isset($user->profile->family) ? $user->profile->family : 'None'}}</td>
        <td>{{ isset($user->profile->phone) ? $user->profile->phone : 'None'}}</td>
        <td>{{ !isset($user->profile->address) ? 'None' : $user->profile->address}}</td>
    </tr>
       
    @endforeach

</tbody>


</table>

    
@endsection
