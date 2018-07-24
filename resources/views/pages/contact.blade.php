




@extends('main')

@section('title',' Contact me')

@section('content')
       <div class="row">
            <div class="col-md-8 offset-md-2">
                <h3>Contact me</h3>
                <hr>
                <form action="" method="get" accept-charset="utf-8">
                    <div class="form-group">
                        <label name="email">Email:</label>
                        <input id="email" type="" name="email" class="form-control" placeholder="ex: youremail@email.com">
                    </div>

                    <div class="form-group">
                        <label name="subject">Subject:</label>
                        <input id="subject" type="" name="subject" class="form-control" placeholder="Subject...">
                    </div>

                    <div class="form-group">
                        <label name="message">Message:</label>
                        <textarea name="message" id="message" rows="10" class="form-control" placeholder="Enter message here..."></textarea>
                    </div>

                    <input type="submit" value="Send Message" class="btn btn-success"">
                </form>
            </div>
       </div>
@endsection