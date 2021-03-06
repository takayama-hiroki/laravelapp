<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(Request $request)
    {
      $items = Person::all();
      return view('person.index',['items' => $items]);
    }

    public function find(Request $request)
    {
      return view('person.find',['input' => '']);
    }

    public function search(Request $request)
    {
      $min = $request->input * 1;
      $max = $min + 10;
      $item = Person::ageGreaterThan($min)->ageLessThan($max)->first();
      $param = ['input' => $request->input,'item' => $item];
      return view('person.find',$param);
    }

    public function add(Request $request)
    {
      return view('person.add');
    }

    public function create(Request $request)
    {
      $this->validate($request,Person::$rules);
      $person = new Person;
      $form = $request->all();
      unset($form['_token']);
      $person->fill($form)->save();
      return redirect('/person');
    }

    public function showEdit(Request $request)
    {
      $items = Person::all();
      return view('person.edit',['items' => $items]);
    }

    public function edit(Request $request)
    {
      $person = Person::find($request->id);

      $person->name = $request->name;
      $person->mail = $request->mail;
      $person->age = $request->age;
      $person->save();

      return redirect('/person');
    }
}
