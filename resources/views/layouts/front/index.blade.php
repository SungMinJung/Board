
@extends('layouts.app')
@push('css')
<style>
.button {
  background-color: #e7e7e7; /* Green */
  border: none;
  color: white;
  padding: 12px 24px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: #e7e7e7; 
  color: black; 
  border: 2px solid #e7e7e7;
}

.button1:hover {background-color:white;}
}

</style>
@endpush

@section('content')

<div class="w3-container">
  <h4>□ 총 몇건의 게시물</h4><span>검색란</span>

  <table class="w3-table-all w3-hoverable">
    <thead>
      <tr class="w3-light-grey">
        <th>번호</th>
        <th>제 목</th>
        <th>작성일</th>
      </tr>
    </thead>
    @foreach($boards as $board)
    <tr>
      <td>{{$board->id}}</td>
      <td><a href="{{route('board.show',$board->id)}}">{{$board->title}}</a></td>
      <!-- <a href="{{route('board.show','$board->id')}}">게시글보기</a> -->
      <td>{{$board->created_at}}</td>
    </tr>
    @endforeach
  </table>
  페이지네이션
  <button class="button button1" onclick="location.href='{{route('board.create')}}'">글쓰기</button>
@endsection

@push('js')