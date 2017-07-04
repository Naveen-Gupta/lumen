<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Person extends Model  
{
   protected $table = "persons";

   public function addPerson($request){

       $query = new Person();

       $query->firstname = $request->firstname;

       $query->lastname = $request->lastname;

       $query->email = $request->email;

       $query->city = $request->city;

       $query->save();

       return $query->id;
   }

   public function getPersons(){
       return Person::all(['firstname', 'lastname', 'email', 'city']);
   }

   public function updatePerson($request){

    $query = Person::find($request->id);

    if(!empty($request['firstname']))
       $query->firstname = $request->firstname;

    if(!empty($request['lastname']))
       $query->lastname = $request->lastname;

    if(!empty($request['email']))
       $query->email = $request->email;

    if(!empty($request['city']))
       $query->city = $request->city;

      $query->save();
       
    return $query;
   }


   public function deletePerson($request){

    $query = Person::find($request->id);

    if($query)
       return $query->delete(); 
    else 
        return null;         
   }
}