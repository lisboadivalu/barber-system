<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeApiController extends Controller
{
    /**
     * @OA\Get(
     *      path="/",
     *      tags={"First Section Barber System"},
     *      summary="Home Page",
     *      description="Returns the home page",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *     )
     */
    public function home() {
        return view('welcome');
    }
}
