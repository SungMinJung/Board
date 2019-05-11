@extends('layouts.app')

@section('content')


<div class="w3-card-4">
  <div class="w3-container w3-grey">
    <h2>{{$board->id}}번째 게시물</h2>
  </div>
  <form class="w3-container">
    
    <p>      
    <label class="w3-text-grey"><b>제목</b></label>
    <span class="w3-input w3-border w3-sand">{{$board->title}}</span>
    <p>      
    <label class="w3-text-grey"><b>내용</b></label>
    <span class="w3-input w3-border w3-sand">{{$board->content}}</span>
    <p>

    </p>
    

  </form>
</div>
<div class="text-center">
<button class="w3-btn w3-grey" onclick="goBack()">뒤로가기</button>
</div>

@push('js')
<script>
function goBack()
{
    window.history.go(-1);
}
</script>
@endpush
@endsection