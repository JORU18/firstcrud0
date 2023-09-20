@if ($errors->any())
    @foreach ($errors->all() as $item)
        <h1>{{ $item }}</h1>
    @endforeach
@endif
