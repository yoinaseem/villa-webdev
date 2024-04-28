function open_modal(name, image_name, price){
    // console.log(name+image_name, price);
   
    var img = "/images/"+image_name;
    $("#prod_image").attr("src",img);
    $("#prod_name").text(name);
    $("#prod_price").text("$" + price);
    $('#menuModal').show();
}

function close_modal(){
    $('#menuModal').toggle();
}

function increment(){
    
}

function decrement(){

}

function calc_price(){

}