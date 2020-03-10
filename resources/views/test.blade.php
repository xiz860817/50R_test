<form action="{{action('DateController@store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="test" name="name">
    <input type="submit">
</form>
