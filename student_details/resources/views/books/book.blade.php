<form method="post" action="{{route('book.store')}}">
    @csrf
    Title: <input type="text"name="title"><br>
    Body:<input type="text"name="body"><br>
<!--   <input type="button" name='submit'value="Submit">-->
    <button type="submit" name="submit">add</button>
</form>