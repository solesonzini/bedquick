<?php

namespace App\Http\Controllers\BlancoController;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Blanco;
use Illuminate\Http\Request;

class BlancosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $blancos = Blanco::where('valueVan', 'LIKE', "%$keyword%")
                ->orWhere('valueAlbireo', 'LIKE', "%$keyword%")
                ->orWhere('valueQuantec', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $blancos = Blanco::paginate($perPage);
        }

        return view('blancos.index', compact('blancos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('blancos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Blanco::create($requestData);

        return redirect('blancos')->with('flash_message', 'Blanco added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $blanco = Blanco::findOrFail($id);

        return view('blancos.show', compact('blanco'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $blanco = Blanco::findOrFail($id);

        return view('blancos.edit', compact('blanco'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $blanco = Blanco::findOrFail($id);
        $blanco->update($requestData);

        return redirect('blancos')->with('flash_message', 'Blanco updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Blanco::destroy($id);

        return redirect('blancos')->with('flash_message', 'Blanco deleted!');
    }
}
