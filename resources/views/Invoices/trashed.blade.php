@extends('layout.base')
@section('content')
    <div class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Number</th>
            <th scope="col">Paid</th>
            <th scope="col">Issue date</th>
            <th scope="col">Collection date</th>
            <th scope="col">Buyer name</th>
            <th scope="col">Buyer surname</th>
            <th scope="col">Buyer street</th>
            <th scope="col">Amount</th>
            <th scope="col">Dettagli</th>
            <th scope="col">Edit</th>
          </tr>
        </thead>
        
        <tbody>
          @foreach($trashedInvoices as $invoice)
            <tr>
              <th scope="row">{{$invoice->number}}</th>
              <td>{{$invoice->paid ? 'yes' : 'no'}}</td>
              <td>{{$invoice->issue_date}}</td>
              <td>{{$invoice->collection_date}}</td>
              <td>{{$invoice->buyer_name}}</td>
              <td>{{$invoice->buyer_surname}}</td>
              <td>{{$invoice->buyer_street}}</td>
              <td>{{$invoice->amount}} $</td>
              <td><a href="{{route('invoices.show', ['invoice' => $invoice->id])}}" class="btn btn-primary">Mostra</a></td>
              <td><a href="{{route('invoices.edit', ['invoice' => $invoice->id])}}" class="btn btn-warning">Edit</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
      {{ $trashedInvoices->links() }}
@endsection