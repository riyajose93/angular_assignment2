<table border="1">
    <thead>
        <tr>
        <td>ID</td>
        <td>NAME</td>
        <td>ROLL NO</td>
        <td>CLASS</td>
        <td>COLLEGE</td>
        </tr>
    </thead>

<tbody>
    @foreach($details as $s)
    <tr>
        
        <td>{{$s->id}}</td>
        <td>{{$s->name}}</td>
        <td>{{$s->rollno}}</td>
        <td>{{$s->class}}</td>
        <td>{{$s->college}}</td>
        <td><a href="{{route('ab.edit',$s->id)}}">Edit</a>
        </td>
        <td><form action="{{route('ab.destroy',$s->id)}}"method="post">
        @csrf
        @method('DELETE')
        <button type="submit">DELETE</button>
            </form>
       </td>
    </tr>
    @endforeach
</tbody>
    </table>