<section id="service" class="py-5">
    <!-- Validations -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <!-- Title Section Edit -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12 title">
                @if($serviceTitles->state == 1)
                @auth
                <form action="/update/sectionTitle" method="post">
                    @csrf
                    <label>Section Title</label>
                    <input name="sectionTitle" type="text" class="form-control" value="{{$serviceTitles->content}}">
                    <div class="text-center">
                        <button class="btn btn-warning mt-2 mb-4">Confirm</button>
                    </div>
                </form>
                @endauth
                @else
                <div class="sectionTitle">
                    <h1 class="text-center">{{$serviceTitles->content}}</h1>
                    @auth
                    <div class="activeTitle text-center">
                        <form action="/edit/sectionTitle" method="post">
                            @csrf
                            <button class="btn btn-warning">Modify</button>
                        </form>
                    </div>
                    @endauth
                </div>
                @endif
            </div>
        </div>
    </div>
    <!-- Items Section Edit -->
    <div class="container mx-auto">
        @foreach($serviceItems->chunk(2) as $chunk)
        <div class="row">
            @foreach($chunk as $item)
            <div class="col-sm-6 my-3 sectionItem">
                <form action="/update/sectionItem/{{$item->id}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-sm-2 text-center">                        
                            @if($item->state == 1)
                            @auth
                            <div class="form-group">
                                <label for="mySelect">Icon</label>
                                <br>
                                <select class="form-control fas" name="itemIcon">
                                    @foreach($serviceIcons as $icon)
                                    @if($item->icon == $icon->class)
                                        <option value="{{$item->icon}}" selected class="fas">{!!$item->unicode!!}</option>
                                    @else
                                    <option value="{{$icon->class}}" class="fas">{!!$icon->unicode!!}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            @endauth
                            @else
                            <div class="itemIcon">
                                <i class="fas {{$item->icon}}"></i>
                            </div>
                            @endif
                        </div>
                        <div class="col-sm-10">
                            @if($item->state == 1)
                            @auth
                            <label>Item Title</label>
                            <input name="itemTitle" type="text" class="form-control" value="{{$item->title}}">
                            @endauth
                            @else
                            <div class="itemTitle">
                                <h2>{{$item->title}}</h2>
                            </div>
                            @endif
                            @if($item->state == 1)
                            @auth
                            <label>Item Text</label>
                            <textarea name="itemText" cols="47" rows="1">{{$item->text}}</textarea>
                            @endauth
                            @else
                            <div class="itemText">
                                <p>{{$item->text}}</p>
                            </div>
                            @endif
                        </div>
                    </div>
                    @if($item->state == 1)
                    @auth
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <button class="btn btn-warning">Confirm</button>
                            <a href="/delete/sectionItem/{{$item->id}}" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                    @endauth
                    @endif
                </form>
                @if($item->state == 0)
                <div class="row">
                    <div class="col-sm-12 text-center">
                        @auth
                        <div class="activeItem py-2 mb-3 text-center">
                            <form action="/edit/item/{{$item->id}}" method="post">
                                @csrf
                                <button class="btn btn-warning">Modify</button>
                            </form>
                        </div>
                        @endauth
                    </div>
                </div>
                @endif
            </div>
            @endforeach
        </div>
        @endforeach
    </div>
    <!-- Create Section -->
    <div class="container mx-auto my-5.5">
        @auth
        <div class="row">
            <div class="col-sm-12 text-center my-3">
                <i id="createToggle" class="fas fa-arrow-circle-down"></i>
            </div>
        </div>
        <div id="createSection" class="container mx-auto hide">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Create Elements</h3>
                </div>
                <div class="box-body">
                    <form action="/create/sectionItem" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="mySelect">Icon</label>
                            <br>
                            <select class="form-control fas" name="itemIcon">
                                @foreach($serviceIcons as $icon)
                                <option value="{{$icon->class}}" class="fas">{!!$icon->unicode!!}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input class="form-control" type="text" name="itemTitle">
                        </div>
                        <div class="form-group">
                            <label>Text</label>
                            <textarea class="form-control" name="itemText" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endauth
    </div>
</section>
