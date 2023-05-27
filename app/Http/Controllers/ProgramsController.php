<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramsController extends Controller
{
  private static function getData()
  {
    return [
      ['id' => 1, 'program' => 'pectoraux', 'training' => ' 4 séries de 12 répétitions – 1 minute 30 de repos'],
      ['id' => 2, 'program' => 'dos', 'training' => '3 séries de 12 répétitions – 1 minute 30 de repos'],
      ['id' => 3, 'program' => 'jambes', 'training' => ' 4 séries de 10 répétitions – 2 minutes de repos'],
      ['id' => 4, 'program' => 'épaules', 'training' => ' 3 séries de 12 répétitions – 2 minutes de repos'],
      ['id' => 5, 'program' => 'biceps', 'training' => ' 4 séries de 12 répétitions – 1 minute 30 de repos'],
      ['id' => 6, 'program' => 'triceps', 'training' => '  4 séries de 10 répétitions – 1 minute de repos']
    ];
  }
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view('programs.index');
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
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
  public function show(string $id)
  {
    //
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
