<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
      'programs' => self::getData()
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
    //
  }

  /**
   * Display the specified resource.
   */
  public function show($program)
  {
    $programs = self::getData();

    $index = array_search($program, array_column($programs, 'id'));

    if ($index === false) {
      abort(404);
    }
    return view('programs.show', [
      'program' => $programs[$index]
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
