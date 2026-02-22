<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreScrumboardRequest;
use App\Models\Scrumboard;
use GuzzleHttp\Psr7\Query;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ScrumboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $boards = Scrumboard::query()
            ->orderByDesc('created_at')
            ->get();
        return response()->json($boards);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreScrumboardRequest $request)
    {
        $data = $request->validated();

        $board = Scrumboard::create($data);

        return response()->json([
            'id' => $board->id
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        Log::info('SHOW HIT', [$id]);
        $board = Scrumboard::findOrFail($id);

        return response()->json($board);

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
