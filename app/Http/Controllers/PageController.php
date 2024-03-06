<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Form_info;
use App\Http\Requests\FormInfoRequest;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $formInfo = Form_info::all();

        return view('home', ['data' => $formInfo]);
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
    public function store(FormInfoRequest $request)
    {
        $formInfo = new Form_info();
        $formInfo->name = htmlspecialchars($request->validated('name'));
        $formInfo->email = htmlspecialchars($request->validated('email'));
        $formInfo->message = htmlspecialchars($request->validated('message'));

        $item = $formInfo->save();

        if ($item) {
            return redirect()
                ->route('data.index')
                ->with(['success' => 'Data added successfully']);
        } else {
            return back()->withErrors(['msg' => 'Error with saving data ']);
        }
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
