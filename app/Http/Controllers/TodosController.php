<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::all();

        return response()->json([
            'success' => true,
            'message' => 'To-Do List retrieved successfully.',
            'data' => $todos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
    //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'title' => 'required|max:100',
            'description' => 'nullable',
            'is_completed' => 'boolean',

        ]);

        $todo = Todo::Create([
            'title' => $request->title,
            'description' => $request->description,
            'is_completed' => $request->is_completed,
        ]);

        return response()->json([
            'secess' => true,
            'message' => 'To-Do created successfully',
            'data' => $todo
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $todo = Todo::find($id);
        if(!$todo)
        {
            return response()->json([
                'sccess' => false,
                'message' => 'To-Do not found',
            ], 404);
        }
        $validated = $request->validate([
            'title' => 'sometimes|required|max:100',
            'description' => 'nullable',
            'is_completed' => 'boolean',
        ]);

        $todo->update($validated);
        return response()->json([
                'success' => true,
                'message' => 'To-Do updated successfully.',
                'data' => $todo
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $todo = Todo::find($id);
        if(!$todo)
        {
            return response()->json([
                'sccess' => false,
                'message' => 'To-Do not found',
            ], 404);
        }
        $todo->delete();
        return response()->json([
            'success' => true,
            'message' => 'To-Do deleted successfully.',
        ]);
    }
}
