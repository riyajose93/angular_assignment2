<form method="post" action="{{route('ab.update',$details->id)}}">
    @csrf
    @method('PATCH')
    Name: <input type="text"name="name" value="{{$details->name}}"><br>
    Roll no:<input type="text"name="rollno" value="{{$details->rollno}}"><br>
    class: <input type="text"name="class"value="{{$details->class}}"><br>
    college: <input type="text"name="college" value="{{$details->college}}"><br>
<!--   <input type="button" name='submit'value="Submit">-->
    <button type="submit" name="submit">UPDATE</button>
</form>