@section('title')
Time Sheet
@endsection

<div>
    <button wire:click="increment">increment</button>
    <h1>{{$count}}</h1>
</div>