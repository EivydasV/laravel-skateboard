<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSkateboardRequest;
use App\Http\Requests\UpdateSkateboardRequest;
use App\Models\Skateboard;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SkateboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('skateboard.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('skateboard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreSkateboardRequest $request
     * @return Response
     */
    public function store(StoreSkateboardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Skateboard $skateboard
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show()
    {
        return view('skateboard.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Skateboard $skateboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Skateboard $skateboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateSkateboardRequest $request
     * @param Skateboard $skateboard
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateSkateboardRequest $request, Skateboard $skateboard)
    {
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Skateboard $skateboard
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Skateboard $skateboard)
    {
        $skateboard->delete();

        return redirect()->route('skateboards.index');
    }
}
