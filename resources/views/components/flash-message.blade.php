@props(['status'=>'info'])

@php
if(session('status') == 'info'){
    $bgColor = 'bg-blue-300';
}
if(session('status') === 'alert'){
    $bgColor = 'bg-red-500';
}
@endphp


@if (session('message'))
    <div class="{{$bgColor}} w-1/2 max-auto p-2 text-white" >
        {{session('message')}}
    </div>
@endif
