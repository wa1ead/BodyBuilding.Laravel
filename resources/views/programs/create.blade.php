@extends('layout')
@section('content')

<div class="content">

  <div class="flex justify-center">
    <h2>Create a new Program</h2>
  </div>

  <div class="flex justify-center">
    <form action="" method="post" class="form bg-white p-6 border-1">
      <div>
        <label for="program-name">Program</label>
        <input id="program-name" name="program-name" type="text" >
      </div>
      <div>
        <label for="program-training">Training</label>
        <input id="program-training" name="program-training" type="text" >
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