<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSkateboardRequest;
use App\Http\Requests\UpdateSkateboardRequest;
use App\Models\Skateboard;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
class SkateboardController extends Controller
{
    /**
     * SkateboardController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $skateboards = Skateboard::paginate(10);
        return view('skateboard.index', compact('skateboards'));
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function store(StoreSkateboardRequest $request)
    {
        $data = $request->validated();
        $imageName = time().'.'.$request->img->extension();

        $request->img->move(public_path('images'), $imageName);

        $data['img'] = $imageName;
        $data['user_id'] = Auth::id();

        Skateboard::create($data);


        return redirect()->route('skateboards.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Skateboard $skateboard
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
//    public function show()
//    {
//        return view('skateboard.show');
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Skateboard $skateboard
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Skateboard $skateboard)
    {
        $this->authorize('edit', $skateboard);
        return view('skateboard.edit', compact('skateboard'));
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
        $this->authorize('update', $skateboard);
        $data = $request->validated();

        $skateboard->update($data);

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
        $this->authorize('delete', $skateboard);

        File::delete('images/'. $skateboard->img);
        $skateboard->delete();

        return redirect()->back();
    }
}
