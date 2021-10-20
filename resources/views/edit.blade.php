<h1>Edit Members</h1>
<form action="/edit" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$member['id']}}">
    <input type="text" name="name" value="{{$member['name']}}">
    <input type="text" name="email" value="{{$member['email']}}">

    <input type="text" name="address" value="{{$member['address']}}">
   <button type="submit">Update</button>
</form>