@extends('layout')
@section('content')

<div class="content">
  @foreach ($programs as $program)
  <div>
    <h2>{{ $program['program'] }}</h2>
    <p>{{ $program['training'] }}</p>
  </div>
  @endforeach

</div>
</body>

</html>
@endsection