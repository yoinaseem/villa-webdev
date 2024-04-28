<section class="secondary-bg">

    <nav class="navbar navbar-expand-md">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link bold bg-dark mx-2 px-5 border-white border-2 rounded-2" href="#burgers">Burgers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link bold bg-dark mx-2 px-5 border-2 rounded-2" href="#sides">Sides</a>
          </li>
          <li class="nav-item">
            <a class="nav-link bold bg-dark mx-2 px-5 border-2 rounded-2" href="#drinks">Drinks</a>
          </li>
          <li class="nav-item">
            <a class="nav-link bold bg-dark mx-2 px-5 border-2 rounded-2" href="#extras">Extras</a>
          </li>
        </ul>
    </nav>

    <div class="row full-width pt-5">
        <h1 class="display-3 text-center" id="burgers">BURGERS</h1>
        @foreach ($menu as $burger)
            @if ($burger->category == "burger") 
            <div class="col-3 my-3" onclick="open_modal('{{$burger->name}}','{{$burger->image}}','{{$burger->price}}')">
                <div class="container box bg-light border p-2 pb-0 text-center rounded-3" data-bs-toggle="modal" data-bs-target="#menuModal">
                    <div class="row py-2 px-1">
                        <img src="/images/{{ $burger->image }}" width="200" class="rounded-4" >
                    </div>
                    <div class="row px-1">
                        <h4> {{ $burger->name }} </h4> 
                        <hr class="mb-2">
                    </div>
                    <div class="row text-start px-2">
                        <div class="col">
                            <h6 class="text-end" id="base-price">${{ $burger->price }}</h6>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
    </div>

    <div class="row full-width pt-5" id="sides">
        <h1 class="display-3 text-center">SIDES</h1>
        @foreach ($menu as $side)
            @if ($side->category == "side") 
            <div class="col-4 my-3">
                <div class="container box bg-light border p-2 pb-0 text-center rounded-3">
                    <div class="row py-2 px-1">
                        <img src="/images/{{ $side->image }}" width="200" class="rounded-4">
                    </div>
                    <div class="row px-1">
                        <h3> {{ $side->name }} </h3> 
                    </div>
                    <div class="row px-2">
                        <span class="text-start">Quantity:</span>
                    </div>
                    <div class="row text-start px-2">
                        <div class="col">
                            <button type="button" class="btn btn-outline-dark btn-sm bold my-1 px-1 py-0">
                                <i class="fa fa-minus fa-xs" aria-hidden="true"></i>
                            </button>
                            <span>1</span>
                            <button type="button" class="btn btn-outline-dark btn-sm bold my-1 px-1 py-0">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="col">
                            <h5 class="text-end align-bottom mb-1">${{ $side->price }}</h5>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        @endforeach

    </div>

    <div class="row full-width pt-5" id="drinks">
        <h1 class="display-3 text-center">DRINKS</h1>
        @foreach ($menu as $drink)
            @if ($drink->category == "drink") 
            <div class="col-4 my-3">
                <div class="container box bg-light border p-2 pb-0 text-center rounded-3">
                    <div class="row py-2 px-1">
                        <img src="/images/{{ $drink->image }}" width="200" class="rounded-4">
                    </div>
                    <div class="row px-1">
                        <h3 class=""> {{ $drink->name }} </h3> 
                    </div>
                    <div class="row px-2">
                        <span class="text-start">Quantity:</span>
                    </div>
                    <div class="row text-start px-2">
                        <div class="col">
                            <button type="button" class="btn btn-outline-dark btn-sm bold my-1 px-1 py-0">
                                <i class="fa fa-minus fa-xs" aria-hidden="true"></i>
                            </button>
                            <span>1</span>
                            <button type="button" class="btn btn-outline-dark btn-sm bold my-1 px-1 py-0">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="col">
                            <h5 class="text-end">${{ $drink->price }}</h5>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
    </div>

    <div class="row full-width py-5" id="extras">
        <h1 class="display-3 text-center">EXTRAS</h1>
        @foreach ($menu as $extra)
            @if ($extra->category == "extra") 
            <div class="col-4 my-3">
                <div class="container box bg-light border p-2 pb-0 text-center rounded-3">
                    <div class="row py-2 px-1">
                        <img src="/images/{{ $extra->image }}" width="200" class="rounded-4">
                    </div>
                    <div class="row px-1">
                        <h3> {{ $extra->name }} </h3> 
                    </div>
                    <div class="row px-2">
                        <span class="text-start">Quantity:</span>
                    </div>
                    <div class="row text-start px-2">
                        <div class="col">
                            <button type="button" class="btn btn-outline-dark btn-sm bold my-1 px-1 py-0">
                                <i class="fa fa-minus fa-xs" aria-hidden="true"></i>
                            </button>
                            <span>1</span>
                            <button type="button" class="btn btn-outline-dark btn-sm bold my-1 px-1 py-0">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="col">
                            <h5 class="text-end align-bottom mb-1">${{ $extra->price }}</h5>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
    </div>


    <div class="modal fade" id="menuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <!-- Modal body -->
                <div class="modal-body secondary-bg">
                    <div class="container bg-white border border-2 p-3 text-center">
                        <img src="" id="prod_image" style="height: 400px" class="pb-3 rounded-3">
                        <h2 class="text-center" id="prod_name"></h2>
                        <small>*Allergens: <em> {{$burger->allergens}}</small></em> 

                        <div class="row">
                            <div class="col-6 text-start">
                                <span class="pe-3">Quantity:</span><br>
                                <button id="decrement-btn" type="button" class="btn btn-outline-dark btn-sm bold my-1 px-1 py-0">
                                    -
                                </button>
                                <span id="counter-value" class="bold"></span>
                                <button id="increment-btn" type="button" class="btn btn-outline-dark btn-sm bold my-1 px-1 py-0">
                                    +
                                </button>
                            </div>
                            <div class="col-6 text-end">
                                <span>Price:</span><br>
                                <h4 id="prod_price"></h4>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer flex-center full-width" style="justify-content:center">
                    <button type="button" class="btn btn-outline-dark bold" data-bs-dismiss="modal" onclick="close_modal()">Add to Cart</button>
                </div>

            </div>
        </div>
    </div>
</section>
@assets
    <script src="{{ asset('/js/scripts.js') }}" defer></script>
@endassets