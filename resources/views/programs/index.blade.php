@extends('layout')
@section('content')

<div class="content">
  <div class='programs'>
    <h1>PROGRAMS</h1>
  </div>
  @foreach ($programs as $program)
  <a href="{{route('programs.show', ['program' => $program['id']]) }}">
    <div>
      <h2>{{ $program['program'] }}</h2>
      <p>{{ $program['training'] }}</p>
    </div>
  </a>
  @endforeach

</div>
</body>

</html>
@endsection