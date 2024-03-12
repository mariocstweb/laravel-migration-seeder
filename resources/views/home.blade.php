@extends('layouts.main')

@section('main-content')
<section id="train-table">
  <div class="container">
    @if ($trains->isNotEmpty())
    <table class="table">
      <thead>
         <tr>
          <th scope="col">Company</th>
          <th scope="col">Departure Station</th>
          <th scope="col">Arrival Station</th>
          <th scope="col">Departure Time</th>
          <th scope="col">Arrival Time</th>
          <th scope="col">CP</th>
          <th scope="col">Number of Carriages</th>
          <th scope="col">Is Intime</th>
          <th scope="col">Deleted</th>
        </tr> 
      </thead>
      <tbody>
        @foreach ($trains as $train)
        <tr>
          <td>{{ $train->company }}</td>
          <td>{{ $train->departure_station }}</td>
          <td>{{ $train->arrival_station }}</td>
          <td>{{ $train->departure_time }}</td>
          <td>{{ $train->arrival_time }}</td>
          <td>{{ $train->cp }}</td>
          <td>{{ $train->number_of_carriages }}</td>
          <td>{{ $train->is_intime }}</td>
          <td>{{ $train->deleted }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @else
    <p>No trains found.</p>
    @endif
  </div>
</section>
@endsection
