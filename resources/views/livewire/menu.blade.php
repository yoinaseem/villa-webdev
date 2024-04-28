<section class="secondary-bg">
    <nav class="navbar navbar-expand-md">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link bold bg-dark mx-2 px-5 border-white border-2 rounded-2" href="#">Burgers <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link bold bg-dark mx-2 px-5 border-2 rounded-2" href="#">Sides <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link bold bg-dark mx-2 px-5 border-2 rounded-2" href="#">Drinks <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link bold bg-dark mx-2 px-5 border-2 rounded-2" href="#">Extras <span class="sr-only">(current)</span></a>
          </li>
        </ul>
    </nav>

    <div class="row full-width pt-5">
        <h1 class="display-3 text-center">BURGERS</h1>
        @foreach ($menu as $burger)
            @if ($burger->category == "burger") 
            <div class="col-4 my-3" onclick="open_modal('{{$burger->name}}','{{$burger->image}}','{{$burger->price}}')">
                <div class="container box bg-light border p-2 pb-0 text-center rounded-3">
                    <div class="row py-2 px-1">
                        <img src="/images/{{ $burger->image }}" width="200" class="rounded-4" >
                    </div>
                    <div class="row px-1">
                        <h3 class=""> {{ $burger->name }} </h3> 
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
                            <h5 class="text-end align-bottom mb-1">${{ $burger->price }}</h5>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
    </div>

    <div class="row full-width pt-5">
        <h1 class="display-3 text-center">SIDES</h1>

        @foreach ($menu as $side)
            @if ($side->category == "side") 
            <div class="col-4 my-3">
                <div class="container box bg-light border p-2 pb-0 text-center rounded-3">
                    <div class="row py-2 px-1">
                        <img src="/images/{{ $side->image }}" width="200" class="rounded-4">
                    </div>
                    <div class="row px-1">
                        <h3 class=""> {{ $side->name }} </h3> 
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

    <div class="row full-width pt-5">
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
                            <h5 class="text-end align-bottom mb-1">${{ $drink->price }}</h5>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
    </div>

    <div class="row full-width py-5">
        <h1 class="display-3 text-center">EXTRAS</h1>
        @foreach ($menu as $extra)
            @if ($extra->category == "extra") 
            <div class="col-4 my-3">
                <div class="container box bg-light border p-2 pb-0 text-center rounded-3">
                    <div class="row py-2 px-1">
                        <img src="/images/{{ $extra->image }}" width="200" class="rounded-4">
                    </div>
                    <div class="row px-1">
                        <h3 class=""> {{ $extra->name }} </h3> 
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


    <div class="modal" id="menuModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="close_modal()"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body pt-0">
                    <!-- <h4 id='heading'></h4> -->
                    <img src="" id="prod_image" style="width:100%; height: 400px" class="pb-3">
                    <h2 class="text-center" style="text-transform: uppercase" id="prod_name"></h2>
                    <h4 class="text-center" style="text-transform: uppercase" id="prod_price"></h4>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <div class="col text-start">
                        <button type="button" class="btn btn-outline-dark btn-sm bold my-1 px-1 py-0">
                            <i class="fa fa-minus fa-xs" aria-hidden="true"></i>
                        </button>
                        <span>1</span>
                        <button type="button" class="btn btn-outline-dark btn-sm bold my-1 px-1 py-0">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </button>
                    </div>
                    <button type="button" class="btn btn-outline-dark bold" data-bs-dismiss="modal" onclick="close_modal()">Add to Cart</button>
                </div>

            </div>
        </div>
    </div>
</section>
