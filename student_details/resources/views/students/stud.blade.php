<form method="post" action="{{route('ab.store')}}">
    @csrf
    Name: <input type="text"name="name"><br>
    Roll no:<input type="text"name="rollno"><br>
    class: <input type="text"name="class"><br>
    college: <input type="text"name="college"><br>
<!--   <input type="button" name='submit'value="Submit">-->
    <button type="submit" name="submit">add</button>
</form>