@extends('layout.base')
@section('content')
<h1>Edit a Invoice</h1>

{{-- il metodo old() fa in modo che se si verifica un errore in un qualsiasi input il form non venga ripulito --}}
    <form method="POST" action="{{ route('comics.update', ['comic' => $comic->id]) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="number" class="form-label">Number</label>
            <input type="text" class="form-control @error('number') is-invalid @enderror" id="number" name="number" value="{{ old('number', $comic->number)}}">
            {{-- da aggiungere per avere il messaggio di errore nel singolo input --}}

            <div class="invalid-feedback">
                @error('number') {{ $message }} @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="paid" class="form-label">Paid</label>
            <input type="text" class="form-control @error('paid') is-invalid @enderror" id="paid" name="paid" value="{{ old('paid', $comic->paid)}}">
            {{-- da aggiungere per avere il messaggio di errore nel singolo input --}}

            <div class="invalid-feedback">
                @error('paid') {{ $message }} @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="buyer_name" class="form-label">Buyer name</label>
            <input type="text" class="form-control @error('buyer_name') is-invalid @enderror" id="buyer_name" name="buyer_name" value="{{ old('buyer_name', $comic->buyer_name)}}">
            <div class="invalid-feedback">
                @error('buyer_name') {{ $message }} @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="buyer_surname" class="form-label">Buyer Surname</label>
            <input type="text" class="form-control @error('buyer_surname') is-invalid @enderror" id="buyer_surname" name="type" value="{{ old('buyer_surname', $comic->buyer_surname)}}">
            <div class="invalid-feedback">
                @error('buyer_surname') {{ $message }} @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="buyer_street" class="form-label">Buyer Street</label>
            <input type="text" class="form-control @error('buyer_street') is-invalid @enderror" id="buyer_street" name="buyer_street" value="{{ old('buyer_street', $comic->buyer_street)}}">
            <div class="invalid-feedback">
                @error('buyer_street') {{ $message }} @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="issue_date" class="form-label">Issue Date</label>
            <input type="text" class="form-control @error('issue_date') is-invalid @enderror" id="issue_date" name="issue_date" value="{{ old('issue_date', $comic->issue_date)}}">
            <div class="invalid-feedback">
                @error('issue_date') {{ $message }} @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="collection_date" class="form-label">Collection Date</label>
            <input type="date" class="form-control @error('collection_date') is-invalid @enderror" id="collection_date" name="collection_date" value="{{ old('collection_date', $comic->collection_date)}}">
            <div class="invalid-feedback">
                @error('collection_date') {{ $message }} @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="amount" class="form-label">Amount</label>
            <input type="date" class="form-control @error('amount') is-invalid @enderror" id="amount" name="amount" value="{{ old('amount', $comic->amount)}}">
            <div class="invalid-feedback">
                @error('amount') {{ $message }} @enderror
            </div>
        </div>

        <button class="btn btn-primary">Submit</button>
    </form>
@endsection