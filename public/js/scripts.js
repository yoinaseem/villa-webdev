const counterValue = document.getElementById('counter-value');
const priceValue = document.getElementById('prod_price');
const basePrice = document.getElementById('base-price').innerHTML;
// var priceCalc = parseFloat(priceValue.innerHTML);
const incrementBtn = document.getElementById('increment-btn');
const decrementBtn = document.getElementById('decrement-btn');

function open_modal(name, image_name, price) {
    // console.log(name+image_name, price);
    counter = 1;
    console.log(priceValue, counter);

    var img = "/images/" + image_name;
    $("#prod_image").attr("src", img);
    $("#prod_name").text(name);
    $("#prod_price").text("$" + price);
    $("#counter-value").text(1);

}


incrementBtn.addEventListener('click', () => {
    counter++;
    counterValue.innerHTML = counter;
    console.log(counter);

    calc_price();
});

decrementBtn.addEventListener('click', () => {
    if (counter > 1) {
        counter--;
        counterValue.innerHTML = counter;
        console.log(counter);

        calc_price();
    }
});

function calc_price() {
    price = parseFloat(basePrice.replace('$', '')) * counter;
    console.log(counterValue, priceValue, basePrice, price);
    priceValue.innerHTML = '$' + price.toFixed(2);
}