@extends('layouts.helloapp')

@section('title','Person.edit')

@section('menubar')
  @parent
  editページ
@endsection

@section('content')
  <form action="/person/edit" method="post">
    @csrf
    <table>
      <tr>
        <th>name</th>
        <th>mail</th>
        <th>age</th>
      </tr>
      @foreach($items as $item)
      <tr>
        <td><input type="text" name="name" value="{{$item->name}}"></td>
        <td><input type="text" name="mail" value="{{$item->mail}}"></td>
        <td><input type="number" name="age" value="{{$item->age}}"></td>
        <td>
          <input type="hidden" name="id" value="{{$item->id}}">
          <input type="submit" value="send">
        </td>
      </tr>
      @endforeach
    </table>
  </form>
@endsection

@section('footer')
copyright 2020 tuyano
@endsection
