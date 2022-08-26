let menu = document.querySelector('#bar');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}


document.querySelector('#search-icon').onclick = () => {
    document.querySelector('#search-form').classList.toggle('active');
}

document.querySelector('#close').onclick = () => {
    document.querySelector('#search-form').classList.remove('active');
}

function loader() {
    document.querySelector('.loader-container').classList.add('fade-out');
}

function fadeOut() {
    setInterval(loader, 3000);
}

window.onload = fadeOut();

// to call out login or registration page

function popup(popup_name) {
    get_popup = document.getElementById(popup_name);
    if (get_popup.style.display=="flex"){
        get_popup.style.display="none"; 
    }
    else {
        get_popup.style.display="flex"
    }
}

// ADD TO CART FEATURE 

let carts = document.querySelectorAll(".add-to-cart");

let products = [
    {name: 'Delicost Burger',tag: 'burger',price: 4, inCart: 0},
    {name: 'Delnise Cakes',tag: 'cakes',price: 6, inCart: 0},
    {name: 'Chewda Namkeen',tag: 'namkeen',price: 3, inCart: 0},
    {name: 'Johnstone Cupcakes',tag: 'cupcakes',price: 5, inCart: 0},
    {name: 'Cold Drinks',tag: 'drinks',price: 10, inCart: 0},
    {name: 'Popsicles',tag: 'pop',price: 4, inCart: 0}    
]

for (let i=0; i < carts.length; i++){
    // console.log("my loop");
    carts[i].addEventListener('click', () => {
        console.log("added to cart");
        cartNumbers(products[i]);
        totalCost(products[i]);
    })
}

function onLoadCartNumbers(){
    let productNumbers = localStorage.getItem('cartNumbers');

    if (productNumbers) {
        document.querySelector('#bag span').textContent = productNumbers;
    }
}

function cartNumbers(products) {
    // console.log('the clicked is', products);
    let productNumbers = localStorage.getItem('cartNumbers');
    productNumbers = parseInt(productNumbers);
    
    if (productNumbers ){
        localStorage.setItem('cartNumbers', productNumbers + 1);
        document.querySelector('#bag span').textContent = productNumbers + 1;
    } else {
        localStorage.setItem('cartNumbers', 1);
        document.querySelector('#bag span').textContent = 1;
    }
    setItems(products);
}

function setItems(products) {
    console.log("inside set item function");
    console.log('my product is', products);

    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);
    // console.log("my carts item are", cartItems);

    if(cartItems != null){
        if (cartItems[products.tag] == undefined){
            cartItems = {
                ...cartItems,
                [products.tag]: products
            }
        }
        cartItems[products.tag].inCart += 1;  
    } else{
        products.inCart = 1;
        cartItems = {
            [products.tag]: products
        }
    }
    localStorage.setItem("productsInCart", JSON.stringify(cartItems));
}
// calculating the total cost now

function totalCost(products){
    // console.log("the price is", products.price);

    let cartCost = localStorage.getItem('totalCost');

    console.log("my cart cost is", cartCost);
    console.log(typeof cartCost);

    if(cartCost != null){
        cartCost = parseInt(cartCost);
        localStorage.setItem("totalCost", cartCost + products.price);
    }else{
        localStorage.setItem("totalCost", products.price);
    }  
}

function displayCart(){
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);
    // console.log(cartItems);

    let productContainer = document.querySelector(".products");
    let cartCost = localStorage.getItem('totalCost');
    // console.log(cartItems);

    if(cartItems && productContainer){
        // console.log("run");
        productContainer.innerHTML = '';
        Object.values(cartItems).map(item => {
            productContainer.innerHTML += `
            <div class = "product">
                <i id="bar" class="far fa-times"></i>
                <img src ="./IMG/${item.tag}.jpg">
                <span> ${item.name}</span>
            </div>   
            <div class = "price"> $${item.price},00</div>
            <div class = "quantity">
                <ion-icon name="arrow-back-outline"></ion-icon>
                <span>${item.inCart}</span>
                <ion-icon name="arrow-forward-outline"></ion-icon>
            </div> 
            <div class="total">
                $${item.inCart * item.price},00
            </div> 
            `
        });

        productContainer.innerHTML += `
            <div class = "basketTotalContainer">
                <h4 class = "basketTotalTitle"> Basket Total </h4>
                <h4 class = "basketTotal"> $${cartCost},00 </h4>
            </div>
        `;
    }
}

onLoadCartNumbers();
displayCart();

