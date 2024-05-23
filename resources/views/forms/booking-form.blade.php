<form id="check-availability-form" method="POST" class="booking-form" action="{{ route('booking-form') }}">
    @csrf
    <h4>Check Availability</h4>
    <div class="input--container">
        <label for="check_in" class="input--text">Check In</label>
        <input class="input" type="date" name="check_in" id="arrival" value={{$check_in ? $check_in : ''}} required>
    </div>
    <div class="input--container">
        <label for="check_out" class="input--text">Check Out</label>
        <input class="input" type="date" name="check_out" id="departure" value={{$check_out ? $check_out : ''}} required>
    </div>
    <div class="input--container">
        <label for="full_name" class="input--text">Fullname</label>
        <input class="input no-bg" type="text" name="full_name" id="fullname" value="nombre" required>
    </div>
    <div class="input--container">
        <label for="phone" class="input--text">Phone</label>
        <input class="input no-bg" type="text" name="phone" id="phone" value="phone" required>
    </div>
    <div class="input--container">
        <label for="email" class="input--text">Email</label>
        <input class="input no-bg" type="text" name="email" id="email" value="email@email.com" required>
    </div>
    <div class="input--container">
        <label for="special_request" class="input--text">Epecial request</label>
        <textarea class="input no-bg" name="special_request" id="special-request" required>texto</textarea>
    </div>
    <input type="number" name="room_id" id="id" hidden value={{$id}}>
    <a>
        <button class="submit" type="submit">
            {{ $check_in && $check_out ? 'BOOK NOW' : 'CHECK AVAILABILITY' }}
        </button>
    </a>
</form>