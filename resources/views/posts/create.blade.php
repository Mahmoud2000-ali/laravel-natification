<h1>Create New Post</h1>

<form method="POST" action="{{route('posts.store')}}">

    <input type="text" name="title" placeholder="Enter Title">
    <input type="text" name="body" placeholder="Enter Body">
    <button type="submit">Submit</button>

</form>
