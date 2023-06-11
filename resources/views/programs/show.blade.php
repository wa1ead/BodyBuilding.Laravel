@extends('layout')
@section('content')

<div class="content">
  <h2>{{ $program['program'] }}</h2>
  <p>{{ $program['training'] }}</p>
</div>
<a class="edit-btn" href="{{route('programs.edit', $program->id)}}">Edit</a>
</body>

</html>
@endsection