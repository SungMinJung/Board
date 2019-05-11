@extends('layouts.app')

@section('content')


<div class="w3-card-4">
  <div class="w3-container w3-grey">
    <h2>게시물 등록</h2>
  </div>
  <form class="w3-container" action="{{route('board.store')}}" method="post">
    @csrf
    <p>      
    <label class="w3-text-grey"><b>제목</b></label>
    <input name="title" class="w3-input w3-border w3-sand" name="first" type="text"></p>
    <p>      
    <label class="w3-text-grey"><b>내용</b></label>
    <input  name="content" class="w3-input w3-border w3-sand" name="last" type="text"></p>
    <p>
    <button class="w3-btn w3-grey">등록</button></p>
  </form>
</div>


@endsection