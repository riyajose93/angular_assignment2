<form method="post" action="{{route('book.update',$books->id)}}">
    @method('PATCH')
    @csrf
    title<input type="text"name="title" value="{{$books->title}}"><br>
    body<input type="text"name="body" value="{{$books->body}}"><br>
<!--   <input type="button" name='submit'value="Submit">-->
    <button type="submit" name="submit">UPDATE</button>
</form>
