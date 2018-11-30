<section id="contact" class="contact-me-area section-padding py-5">
    @if(Session()->has('success'))
    <div class="alert alert-success">
        {{ Session()->get('success') }}
    </div>
    @endif
    <div class="container">
        <div class="row text-center py-3">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Contact Me!</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 mx-auto">
                <form id="contactForm" class="contact-form" action="/contact" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input id="name" class="form-control" type="text" name="name" placeholder="Name" value="{{ old('name') }}">
                        </div>
                        <div class="col-md-6 form-group">
                            <input id="email" class="form-control" type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                        </div>
                        <div class="col-md-12 form-group">
                            <textarea id="message" class="form-control" name="message" placeholder="Message" rows="4">{{ old('message') }}</textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            <button class="btn" type="submit">Submit Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
