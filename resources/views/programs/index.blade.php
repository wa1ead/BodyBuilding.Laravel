@extends('layout')
@section('content')

<div class="content">
  <div class='programs'>
    <h2>PROGRAMS</h2>
  </div>
  @foreach ($programs as $program)
  <a href="{{route('programs.show', ['program' => $program['id']]) }}">
    <div>
      <h3>{{ $program['name'] }}</h3>
      <p>{{ $program['training'] }}</p>
    </div>
  </a>
  @endforeach
</div>

</body>
</html>
@endsection