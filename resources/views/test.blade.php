<form action="{{ action('DateController@store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="test" name="title">
    <input type="submit">
</form>
