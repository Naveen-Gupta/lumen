<?php

		namespace App\Http\Controllers;
		use App\Http\Models\Person;
		use Illuminate\Http\Request;
		use App\Http\Controllers\Controller;

		class PersonController extends Controller
		{
			//to add person
		    public function addPerson(Request $request, Person $person){
		        if($person->addPerson($request)){
		            return response()->json([
		                'status' => 1,
		                'message' => 'person added successfully'
		            ]);
		        }
		        else{
		           return response()->json([
		                'status' => 0,
		                'message' => 'some problem occurs'
		            ]); 
		        }
		    }

		    //to fetch all persons list
		    public function fetchPersonsList(Request $request, Person $person){
		        if(count($person->getPersons())>0)
		        {
		            return response()->json([
		                'status' => 1,
		                'person_list' =>$person->getPersons()
		            ]);
		        }
		        else{
		             return response()->json([
		                'status' => 0,
		                'message' => 'no person found'
		            ]);
		        }
		    }

		    //to update persons details
		    public function updatePerson(Request $request, Person $person){
		        if($person->updatePerson($request)){
		            return response()->json([
		                'status' => 1,
		                'message' => 'person details updated successfully'
		            ]);
		        }
		        else{
		           return response()->json([
		                'status' => 0,
		                'message' => 'some problem occurs'
		            ]); 
		        }
		    }

		    
		    //to delete person
		    public function deletePerson(Request $request, Person $person){
		        if($person->deletePerson($request)){
		            return response()->json([
		                'status' => 1,
		                'message' => 'person deleted successfully'
		            ]);
		        }
		        else{
		           return response()->json([
		                'status' => 0,
		                'message' => 'some problem occurs'
		            ]); 
		        }
		    }
		    
		}