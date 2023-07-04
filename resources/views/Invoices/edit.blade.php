@extends('layout.base')
@section('content')
<h1>Edit a Invoice</h1>

{{-- il metodo old() fa in modo che se si verifica un errore in un qualsiasi input il form non venga ripulito --}}
    <form method="POST" action="{{ route('comics.update', ['comic' => $comic->id]) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Number</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $comic->title)}}">
            {{-- da aggiungere per avere il messaggio di errore nel singolo input --}}

            <div class="invalid-feedback">
                @error('title') {{ $message }} @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Paid</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $comic->title)}}">
            {{-- da aggiungere per avere il messaggio di errore nel singolo input --}}

            <div class="invalid-feedback">
                @error('title') {{ $message }} @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Buyer name</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{ old('thumb', $comic->thumb)}}">
            <div class="invalid-feedback">
                @error('thumb') {{ $message }} @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Buyer Surname</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{ old('type', $comic->type)}}">
            <div class="invalid-feedback">
                @error('type') {{ $message }} @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Buyer Street</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{ old('series', $comic->series)}}">
            <div class="invalid-feedback">
                @error('series') {{ $message }} @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Issue Date</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price', $comic->price)}}">
            <div class="invalid-feedback">
                @error('price') {{ $message }} @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Collection Date</label>
            <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{ old('sale_date', $comic->sale_date)}}">
            <div class="invalid-feedback">
                @error('sale_date') {{ $message }} @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Amount</label>
            <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{ old('sale_date', $comic->sale_date)}}">
            <div class="invalid-feedback">
                @error('sale_date') {{ $message }} @enderror
            </div>
        </div>

        <button class="btn btn-primary">Submit</button>
    </form>
@endsection