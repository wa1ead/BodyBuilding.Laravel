<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;

class ProgramsController extends Controller
{
  private static function getData()
  {
    return [
      ['id' => 1, 'program' => 'pecs', 'training' => '4 sets of 12 repetitions – 1 minute 30 rest'],
      ['id' => 2, 'program' => 'back', 'training' => '3 sets of 12 repetitions – 1 minute 30 rest'],
      ['id' => 3, 'program' => 'legs', 'training' => '4 sets of 10 repetitions – 2 minutes rest'],
      ['id' => 4, 'program' => 'shoulders', 'training' => '3 sets of 12 repetitions – 2 minutes rest'],
      ['id' => 5, 'program' => 'biceps', 'training' => '4 sets of 12 repetitions – 1 minute 30 rest'],
      ['id' => 6, 'program' => 'triceps', 'training' => '4 sets of 10 repetitions – 1 minute rest'],
    ];
  }
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view('programs.index', [
      'programs' => Program::all()
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('programs.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {

    $request->validate([
      'program-name' => 'required',
      'program-training' => 'required'
    ]);

    $program = new Program();

    $program->name = strip_tags($request->input('program-name'));
    $program->training = strip_tags($request->input('program-training'));

    $program->save();

    return redirect()->route('programs.index');
  }

  /**
   * Display the specified resource.
   */
  public function show($program)
  {
    return view('programs.show', [
      'program' => Program::findOrFail($program)
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit($program)
  {
    return view('programs.edit', [
      'program' => Program::findOrFail($program)
    ]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, $program)
  {
    $request->validate([
      'program-name' => 'required',
      'program-training' => 'required'
    ]);

    $to_update = Program::findOrFail($program);

    $to_update->name = strip_tags($request->input('program-name'));
    $to_update->training = strip_tags($request->input('program-training'));

    $to_update->save();

    return redirect()->route('programs.show', $program);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
