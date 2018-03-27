@extends("layouts.app")

@section("content")
    <div class="container text-center">
        <br><br>
        <h1>Welcome to {{ config('app.name') }}</h1>
        <p>This is {{  $title }}</p>
    </div>
    <div>
        @if(count($service) > 0)
            <ul class="list-group">
                @foreach($service as $list)
                    <li class="list-group-item">{{ $list }}</li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection