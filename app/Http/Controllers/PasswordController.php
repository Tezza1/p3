<?php

namespace p3\Http\Controllers;

use Illuminate\Http\Request;

class PasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $number = 0;
		 
		return view('p3.password')->with("number", $number);
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
            'numberLength' => 'numeric|min:10|max:25',
         ]);
		
		
		# generate output ------------------------
		 $number = $request->input('numberLength');
		 
		# declare variables
		$inclNumber = "";
		$caseErr = "";
		$case = "";
		$specialCharacterErr = "";
		$specialCharacters = "";
		
		// PHP VALIDATION TO INCLUDE NUMBERS
          if (empty($_POST["includeNumber"])){
          }
          else {
             $checkItem = $_POST["includeNumber"];
             if ($checkItem == "yes") {
                $inclNumber = "YES";
             }
          }
		  
		 // PHP VALIDATION TO CHECK CASE OF LETTERS
        $item = $_POST["radioCase"];
		  if ($item == "lowerCase") {
			  $case = "LOWER";
		  }
		  elseif ($item == "upperCase") {
			  $case = "UPPER";
		  }
		  elseif ($item == "mixedCase") {
			  $case = "MIXED";
		  }
		  else {
			  $case = "ERROR";
		  }
           
		   
		  // PHP VALIDATION TO CHECK IF SPECIAL CHARACTERS ARE INCLUDED
           $item2 = $_POST["specialCharacters"];
           if ($item2 == "none") {
               $specialCharacters = "NO";
           }
           elseif ($item2 == "combo1") {
               $specialCharacters = "YES";
           }
           else {
               $specialCharacters = "ERROR";
           }
		   
		   // GENERATE PASSWORD
		 $password = array();
		 for ($i = 0; $i < $number; $i++) {
			// insert number
			if ($inclNumber == "YES" && $i%3 == 0) {
				$elementItem = rand(48,57);
			}
			elseif ($specialCharacters == "YES" && $i%5 == 0) {
				$elementItem = rand(35,38);
			}
			else {
				if ( $case == "LOWER") {
					$elementItem = rand(97,122);
				}
				elseif ( $case == "UPPER") {
					$elementItem = rand(65,90);
				}
				elseif ($case == "MIXED") {
					$choose = rand(1,10);
					if ($choose%2 == 0){
						$elementItem = rand(97,122);
					}
					else {
						$elementItem = rand(65,90);
					}
				}
				else {
					// No items selected
				}
			}
			if ($case != ""){
				   $password[$i] = chr($elementItem);
			}
		 }
     		
		 return view('p3.password')->with("number", $number)->with("password", $password);
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
