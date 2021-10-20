<h1>Add Members</h1>
<form action="" method="post">
    @csrf
    <input type="text" name="name" placeholder="Enter Your Name" style="cursor:crosshair;">
    <input type="text" name="email" placeholder="Enter Your E-Mail">

    <input type="text" name="address" placeholder="Enter Your Address">
    <input type="submit" name="submit">
   
</form>
<a href={{"/list"}}>List</a>