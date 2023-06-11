@extends('layout')
@section('content')

<div class="content">
  <h2>{{ $program['program'] }}</h2>
  <p>{{ $program['training'] }}</p>
</div>


<a class="edit-btn" href="{{route('programs.edit', $program->id)}}">Edit</a>

<form action="{{route('programs.destroy', $program->id)}}" method="POST">
  @csrf
  @method('DELETE')
  <button class="delete-btn" value="delete" type="submit">Delete</button>
</form>

</body>
</html>
@endsection