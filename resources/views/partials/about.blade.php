<section id="about" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center">{{$abouts->aboutTitle}}</h1>
            </div>
        </div>
        <div class="row container mx-auto">
            <div class="col-sm-6 text-center p-0">
                <img src="storage/images/portrait.jpg" alt="my portrait">
            </div>
            <div class="col-sm-6 p-0">
                <p class="aboutMe">{{$abouts->contentTitle}}</p>
                <p class="myLorem">{{$abouts->contentText}}</p>
            </div>
        </div>
        @auth
        <div class="row text-center pt-5">
            <div class="col-sm-12">
                <form action="/edit/about">
                @csrf
                    <button class="btn btn-warning">Edit</button>
                </form>
            </div>
        </div>
        @endauth
    </div>
</section>
