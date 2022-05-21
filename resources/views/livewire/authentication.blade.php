@section('title')
Time Sheet
@endsection

<div>
    <div class="container-fluid" id="landing">
        <div class="landing-checkpasscode w-25 text-center">
            <img src="{{asset('img/hd-logo.png')}}" alt="techno logo">
            @if (session()->has('message'))
                <div class="alert alert-danger">
                    {{ session('message') }}
                </div>
            @endif
            <form wire:submit.prevent="checkpasscode">
              <div class="form-group">
                <input type="password" name="passcode" class="form-control @error('passcode') is-invalid @enderror" placeholder="Enter Technodream passcode" wire:model="passcode">
              </div>
              <button type="submit" class="btn btn-outline-primary btn-block">Proceed</button>
            </form>
          </div>
    </div>
</div>