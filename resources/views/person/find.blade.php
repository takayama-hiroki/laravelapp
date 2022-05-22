@extends('layouts.helloapp')

@section('title','Person.find')

@section('menubar')
  @parent
    検索ページ
@endsection

@section('content')
  <form action='/person/find' method="post">
    @csrf
    <input type="text" name="input" value="{{$input}}">
    <input type="submit" name="" value="find">
  </form>
  @if (isset($item))
  <table>
    <tr><th>Date</th></tr>
    <tr>
      <td>{{$item->getDate()}}</td>
    </tr>
  </table>
  @endif
@endsection

@section('footer')
copyright 2020 tuyano
@endsection
