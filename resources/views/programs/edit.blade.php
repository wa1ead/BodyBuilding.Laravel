@extends('layout')
@section('content')

<div class="content">

  <div class="flex justify-center">
    <h2>Edit an old Program</h2>
  </div>

  <div class="flex justify-center">
    <form action="{{route('programs.update', ['program'=>$program->id])}}" method="POST" >
      @csrf 
      @method('PUT')
      <div>
        <label for="program-name">Program</label>
        <input id="program-name" name="program-name" value="{{$program->name}}" type="text" >
        @error('program-name')
        <div class="form-error">
          {{$message}}
        </div>
        @enderror
      </div>

      <div>
        <label for="program-training">Training</label>
        <input id="program-training" name="program-training" value="{{$program->training}}" type="text" >
        @error('program-training')
        <div class="form-error">
          {{$message}}
        </div>
        @enderror
      </div>

      <div>
        <button type="submit">Save</button>
      </div>

    </form>
  </div>

</div>
</body>

</html>
@endsection