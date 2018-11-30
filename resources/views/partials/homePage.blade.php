@include('partials/nav')
<section id="home">
    <div class="text-center">
        <h1 class="m-0">
            <a href="" class="typewrite" data-period="2000" data-type='[ "Hi, Im Si.", "I am Creative.", "I Love Design.", "I Love to Develop." ]'>
                <span class="wrap"></span>
            </a>
        </h1>
        <ul>
            @foreach($homeIcons as $icon)
            <li><a href="{{$icon->link}}" alt=""><i class="{{$icon->class}}"></i></a></li>
            @endforeach
        </ul>
        <a class="bg-transparent border-0" href="#about" alt="Down arrow"><i class="fas fa-angle-double-down"></i></a>
    </div>
</section>
