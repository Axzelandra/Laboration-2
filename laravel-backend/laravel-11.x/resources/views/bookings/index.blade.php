<h1>Alla bokningar</h1>

<ul>
    @foreach($bookings as $booking)
        <li>{{ $booking->name }} - {{ $booking->date }}</li>
    @endforeach
</ul>
