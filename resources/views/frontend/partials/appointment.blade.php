<form id="booking-form" class="booking-form" data-toggle="validator">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="book-date" placeholder="Date" required data-error="Choose a date">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div> <!-- /.col -->
                                <div class="col-md-6">
                                    <select class="form-control" id="book-time" required data-error="Select a time">
                                        <option value="">Time</option>
                                        <option value="07:00 am">07:00 am</option>
                                        <option value="08:00 am">08:00 am</option>
                                        <option value="09:00 am">09:00 am</option>
                                        <option value="10:00 am">10:00 am</option>
                                        <option value="11:00 am">11:00 am</option>
                                        <option value="12:00 pm">12:00 pm</option>
                                        <option value="01:00 pm">01:00 pm</option>
                                        <option value="02:00 pm">02:00 pm</option>
                                        <option value="03:00 pm">03:00 pm</option>
                                        <option value="04:00 pm">04:00 pm</option>
                                        <option value="05:00 pm">05:00 pm</option>
                                        <option value="06:00 pm">06:00 pm</option>
                                        <option value="07:00 pm">07:00 pm</option>
                                        <option value="08:00 pm">08:00 pm</option>
                                        <option value="09:00 pm">09:00 pm</option>
                                        <option value="10:00 pm">10:00 pm</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div> <!-- /.col -->
                            </div> <!-- /.row -->
                            <div class="row mb15">
                                <div class="col-md-6">
                                    <select class="form-control" id="book-service" required data-error="Choose a service">
                                        <option value="">Service</option>
                                        <option value="Hair Styling and Treatments">Hair Styling &amp; Treatments</option>
                                        <option value="Shaves and Hot Towels">Shaves &amp; Hot Towels</option>
                                        <option value="Beard Styling and Treatments">Beard Styling &amp; Treatments</option>
                                        <option value="Signature Package">Signature Package</option>
                                        <option value="Barbershop Facials">Barbershop Facials</option>
                                        <option value="Treatment Lounge">Treatment Lounge</option>
                                        <option value="Wax Couch">Wax Couch</option>
                                        <option value="Wedding Package">Wedding Package</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div> <!-- /.col -->
                                <div class="col-md-6">
                                    <select class="form-control" id="book-stylist" required data-error="Choose a stylist">
                                        <option value="">Stylist</option>
                                        <option value="Paul Steels">Paul Steels</option>
                                        <option value="Sean Dick">Sean Dick</option>
                                        <option value="Paul Dos Reis">Paul Dos Reis</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div> <!-- /.col -->
                            </div> <!-- /.row -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="book-name" placeholder="Name" required data-error="Enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div> <!-- /.col -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="book-phone" placeholder="Phone" required data-error="Enter your phone number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div> <!-- /.col -->
                            </div> <!-- /.row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="book-email" placeholder="Email" required data-error="Enter your email address">
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
