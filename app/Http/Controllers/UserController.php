<?php

namespace p3\Http\Controllers;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //TDDO: Add
		$number = 0;
		
        return view('p3.users')->with("number", $number);
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
        # validate form input -------------------
         $this->validate($request, [ 
            'userNumber' => 'numeric|min:1|max:100',
         ]);

		# generate data -------------------------
		$number = $request->input('userNumber');
		
		// Fake name generator
		$generator = new \Nubs\RandomNameGenerator\Alliteration();
		
		$user = [];
		for ($i = 0; $i < $number; $i++) {
			$users[$i] = $generator->getName();
		}
			
         
		 return view('p3.users')->with("number", $number)->with("users", $users);
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
