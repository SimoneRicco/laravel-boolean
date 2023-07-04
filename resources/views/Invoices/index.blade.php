@extends('layout.base')
@section('content')
    {{-- Link per Paginator {{ $users->links() }} --}}

{{-- @foreach($invoices as $invoice) --}}
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Paid</th>
        <th scope="col">Issue_date</th>
        <th scope="col">Collection_date</th>
        <th scope="col">Buyer_name</th>
        <th scope="col">Buyer_surname</th>
        <th scope="col">Buyer_street</th>
        <th scope="col">Amount</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
      </tr>
    </tbody>
  </table>
  {{-- @endforeach --}}
@endsection