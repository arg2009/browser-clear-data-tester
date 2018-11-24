<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Ramsey\Uuid\Uuid;

class IndexController extends Controller
{
    const COOKIE_NAME = 'data-checking-cookie';
    const COOKIE_YEARS_LIFETIME = 10;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function index()
    {
        if(Cookie::has(self::COOKIE_NAME)) {
            return response(
                view('index')
                    ->with(['browserId' => Cookie::get(self::COOKIE_NAME)])
            );
        }
        else {
            $newBrowserId = Uuid::uuid4();
            return response(
                view('index')
                    ->with(['newBrowserId' => $newBrowserId])
            )->cookie(self::COOKIE_NAME, $newBrowserId, mktime(
                0,0,0,1,1,(int) date("Y") + self::COOKIE_YEARS_LIFETIME
                )
            );
        }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
