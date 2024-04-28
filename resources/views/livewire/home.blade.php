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
    <div class="container box my-5 mx-auto dark-bg rounded-3" style="width:50%">
        <div class="row pb-0 pe-lg-0 pt-lg-5 text-center mx-auto shadow">
            <div class="col-lg-10 p-lg-5 pt-lg-3 mx-auto">
                <h2 class="display-4 fw-bold primary-color">HAVE YOU TRIED OUR BURGERS?</h2>
                <p class="secondary-color">
                    Indulge your taste buds with our mouthwatering burgers, where every bite is a symphony of flavor. Our buns are more than just bread; they're pillowy clouds of perfection, perfectly toasted to complement the juicy, flavorful meat within. Each burger is crafted with care, ensuring that every bite is a culinary delight. So come experience the bliss of our phat buns and succulent, juicy meat at Burger Bar today.
                </p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center mb-4 mb-lg-3 pt-4">
                <a href="/menu" wire:navigate.hover ><button type="button" class="btn btn-outline-primary btn-lg px-4 me-md-2 bold text-center">CHECK OUR MENU</button></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu Hero End -->
    

    <div class="section text-center dark-bg parallax overlay py-5" 
        style="background-image: url('{{ asset('/images/bg1.jpg') }}')">
        <h2 class="display-2 fw-bold primary-color mb-0 mt-3">Refined Dining <br>
            <small class="display-2 fw-bold text-white mt-0 mb-3">Experience </small>
        </h2>
        <div class="col-lg-6 mx-auto">
            <p class="text-white mb-4">
            Indulge your taste buds with our mouthwatering burgers, where every bite is a symphony of flavor. Our buns are more than just bread; they're pillowy clouds of perfection, perfectly toasted to complement the juicy, flavorful meat within. Each burger is crafted with care, ensuring that every bite is a culinary delight. So come experience the bliss of our phat buns and succulent, juicy meat at Burger Bar today.            </p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center py-3">
            <a href="/about" wire:navigate.hover ><button type="button" class="btn btn-outline-primary btn-lg px-4 bold">LEARN MORE</button></a>
            </div>
        </div>
    </div>

</section>
