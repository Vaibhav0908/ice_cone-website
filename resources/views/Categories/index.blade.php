@extends("/com_layouts")
@section('content')

    <div class="bodyy">
        <div class="row m-0 p-0">
            <div class="col-2 m-0 p-0"></div>
            <div class="col-9 m-0 p-0">
                <h1 class="text-center"><strong>Categories List</strong></h1>
                <div class="row m-0 p-0">
                    @foreach($categories->take(7) as $category)
                        <div class="col-lg-2 col-md-3 col-5 border rounded-3 m-2 category">
                            <dl>
                                <dt class="text-center">
                                    <img src="{{ $category->image }}" alt="img1" width="100%" height="200px" loading="lazy">
                                    {{ $category->id}}
                                    {{ $category->name }} <br>
                                    {{ $category->price }} <small><i class="fa-solid fa-indian-rupee-sign"></i></small> <br>
                                    <button class="btn btn-outline-primary add-to-cart" data-id="{{ $category->id }}">Add To Cart</button>
                                    <hr>
                                </dt>
                                <dd>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam,
                                    minus.</dd>
                            </dl>
                        </div>
                    @endforeach

                    @foreach($categories->splice(7) as $category)
                            <div class="col-lg-2 col-md-3 col-5 border rounded-3 m-2 category d-none extra-category">
                                <dl>
                                    <dt class="text-center">
                                        <img src="{{ $category->image }}" alt="img1" width="100%" height="200px" loading="lazy">
                                        {{ $category->id}}
                                        {{ $category->name }} <br>
                                        {{ $category->price }} <small><i class="fa-solid fa-indian-rupee-sign"></i></small> <br>
                                        <button class="btn btn-outline-primary add-to-cart" data-id="{{ $category->id }}">Add To Cart</button>
                                        <hr>
                                    </dt>
                                    <dd>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam,
                                        minus.</dd>
                                </dl>
                            </div>
                    @endforeach
                </div>
                <button id="viewBtn" class="btn btn-success m-2">View All Products...</button>
                <div class="col-1 m-0 p-0"></div>
            </div>
        </div>
@endsection