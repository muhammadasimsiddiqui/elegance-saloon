<form id="booking-form" class="booking-form" data-toggle="validator" action="/bookAppointment" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group" style="display: none;">
                <input type="text" class="form-control" placeholder="User Id" value="{{Auth::id()}}" name="user_id" required
                   >
                <div class="help-block with-errors"></div>
            </div>
        </div> <!-- /.col -->
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <input type="date" class="form-control" placeholder="Date" name="date" required
                    data-error="Choose a date">
                <div class="help-block with-errors"></div>
            </div>
        </div> <!-- /.col -->
        <div class="col-md-6">
            <div class="form-group">
                <input type="time" class="form-control" id="book-time" placeholder="Time" name="time"  required
                    data-error="Choose a time">
                <div class="help-block with-errors"></div>
            </div>
        </div> <!-- /.col -->
    </div> <!-- /.row -->
    <div class="row mb15">
        <div class="col-md-6">
            <select class="form-control" id="book-service" required data-error="Choose a service" name="service_id">
                <option value="" disabled selected>Service</option>
                @foreach ($Services as $ser)
                    <option value="{{ $ser->id }}">{{ $ser->name }}</option>
                @endforeach
            </select>
            <div class="help-block with-errors"></div>
        </div> <!-- /.col -->
        <div class="col-md-6">
            <select class="form-control" id="book-stylist" required data-error="Choose a stylist" name="stylist_id">
                <option value="" disabled selected>Stylist</option>
                @foreach ($Stylist as $st)
                    <option value="{{ $st->id }}">{{ $st->firstname }}{{ $st->lastname }}</option>
                @endforeach

            </select>
            <div class="help-block with-errors"></div>
        </div> <!-- /.col -->
    </div> <!-- /.row -->
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" id="book-name" name="name" placeholder="Name" required
                    data-error="Enter your name">
                <div class="help-block with-errors"></div>
            </div>
        </div> <!-- /.col -->
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" id="book-phone" placeholder="Phone" name="phone_number" required
                    data-error="Enter your phone number">
                <div class="help-block with-errors"></div>
            </div>
        </div> <!-- /.col -->
    </div> <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <input type="email" class="form-control" id="book-email" placeholder="Email" name="email" required
                    data-error="Enter your email address">
                <div class="help-block with-errors"></div>
            </div>
        </div> <!-- /.col -->
    </div> <!-- /.row -->
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <button type="submit" class="btn btn-primary hvr-in" id="book-submit">Book now</button>
            </div>
        </div> <!-- /.col -->
    </div> <!-- /.row -->
</form>
<div id="msgalert" class="hidden"></div>
