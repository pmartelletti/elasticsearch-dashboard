<?php

namespace App\Http\Controllers;

use App\App;
use Illuminate\Http\Request;

class AppController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function index(Request $request)
    {
        return App::paginate($request->get('limit', 15));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->validateApp($request, function(Request $request) {
            return App::create($request->all());
        });
    }

    protected function validateApp(Request $request, callable $callback)
    {
        $this->validate($request, [
            'name' => 'required',
            'enabled' => 'required|boolean',
            'settings' => 'sometimes|required|json'
        ]);

        return $callback($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\App  $app
     * @return \Illuminate\Http\Response
     */
    public function show(App $app)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\App  $app
     * @return \Illuminate\Http\Response
     */
    public function edit(App $app)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\App  $app
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, App $app)
    {
        return $this->validateApp($request, function(Request $request) use ($app) {
            return $app->update($request->all()) ? $app : response('Error!', 400);
        });
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\App  $app
     * @return \Illuminate\Http\Response
     */
    public function destroy(App $app)
    {
        //
    }
}
