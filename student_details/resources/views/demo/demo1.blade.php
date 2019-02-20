<form method="post" action="{{route('stud.store')}}">
    @csrf
    name: <input type="text"name="name"><br>
    address:<input type="text"name="address"><br>
    qualification:<input type="text"name="qualification"><br>
    dob:<input type="text"name="dob"><br>
<!--   <input type="button" name='submit'value="Submit">-->
    <button type="submit" name="submit">add</button>
</form>