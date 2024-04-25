<section class="secondary-bg">
    <!-- Featured Carousel Start -->
    <div id="featuredCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('/images/featured1.jpg') }}" class="d-block w-100" data-bs-interval="2000" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/images/featured2.jpg') }}" class="d-block w-100" data-bs-interval="2000" alt="...">
            </div>
            <!-- <div class="carousel-item">
                <img src="{{ asset('/images/featured3.jpg') }}" class="d-block w-100" data-bs-interval="2000" alt="...">
            </div> -->
        </div>
    </div>
    <!-- Featured Carousel End -->

    <!-- Menu Hero Start -->
    <div class="container my-5 mx-auto dark-bg dyn-box">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 text-center mx-auto rounded-3 shadow-lg">
            <div class="col-lg-10 p-3 p-lg-5 pt-lg-3 mx-auto dyn-text">
                <h1 class="bold primary-color">OUR MENU</h1>
                <p class="secondary-color">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center mb-4 mb-lg-3">
                    <button type="button" class="btn btn-outline-primary btn-lg px-4 me-md-2 bold text-center">CHECK OUR MENU</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu Hero End -->


    <div class="container full-width py-5 "></div>

    <div class="section text-center dark-bg parallax overlay py-5" 
        style="background-image: url('{{ asset('/images/bg1.jpg') }}')">
        <h2 class="display-2 fw-bold primary-color mb-0 mt-3">Refined Dining <br>
            <small class="display-2 fw-bold text-white mt-0 mb-3">Experience </small>
        </h2>
        <div class="col-lg-6 mx-auto">
            <p class="text-white mb-4">
                Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.
            </p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center py-3">
                <button type="button" class="btn btn-primary btn-lg px-4 bold">LEARN MORE</button>
            </div>
        </div>
    </div>


    <div class="container py-5 full-width">
        <?php foreach ($items as $item): ?>
            <div class="row">
                <div class="col-6">
                    {{ $item->id }}
                    {{ $item->name }}
                </div>
            </div>
        <?php endforeach ?>
    </div>

</section>
