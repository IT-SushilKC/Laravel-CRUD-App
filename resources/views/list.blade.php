


<h1>Member List</h1>
<a href={{"add/"}}>Add New Members</a>  
<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Address</td>
        <td>Operation</td>
    </tr>
    
        @foreach ($members as $member)
        <tr>
            
        <td>{{$member['id']}}</td>
        <td>{{$member['name']}}</td>
        <td>{{$member['email']}}</td>
        <td>{{$member['address']}}</td>
        <td><a href={{"delete/".$member['id']}}>Delete</a>
        <a class="btn btn-secondary" href={{"edit/".$member['id']}}>Edit</a></td>
    </tr>
        @endforeach
    
</table>

