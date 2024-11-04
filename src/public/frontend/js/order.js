let openShopping = document.querySelector('.open-shopping');
let closeShopping = document.querySelector('.close-shopping');
let list = document.querySelector('.product-list');
let listCard = document.querySelector('.cart-list');
let body = document.querySelector('body');
let total = document.querySelector('.total-price');
let quantity = document.querySelector('.total-quantity');

openShopping.addEventListener('click', () => {
    body.classList.add('shopping-active');
});

closeShopping.addEventListener('click', () => {
    body.classList.remove('shopping-active');
});

let products = [
    {
        id: 1,
        name: 'PRODUCT NAME 1',
        image: '1.PNG',
        price: 120000
    },
    {
        id: 2,
        name: 'PRODUCT NAME 2',
        image: '2.PNG',
        price: 120000
    },
    // Tambahkan data produk yang lain di sini
];

let cartItems = [];

function initApp() {
    products.forEach((product, index) => {
        let newDiv = document.createElement('div');
        newDiv.classList.add('product-item');
        newDiv.innerHTML = `
            <img src="image/${product.image}" alt="${product.name}">
            <div class="product-info">
                <div class="product-name">${product.name}</div>
                <div class="product-price">${product.price.toLocaleString()}</div>
                <button class="add-to-cart" onclick="addToCart(${index})">Add To Cart</button>
            </div>`;
        list.appendChild(newDiv);
    });
}

function addToCart(index) {
    let existingItem = cartItems.find(item => item.id === products[index].id);
    if (existingItem) {
        existingItem.quantity++;
    } else {
        cartItems.push({
            id: products[index].id,
            name: products[index].name,
            price: products[index].price,
            quantity: 1
        });
    }
    updateCart();
}

function updateCart() {
    listCard.innerHTML = '';
    let totalPrice = 0;
    let totalQuantity = 0;
    cartItems.forEach(item => {
        totalPrice += item.price * item.quantity;
        totalQuantity += item.quantity;
        let newCartItem = document.createElement('div');
        newCartItem.classList.add('cart-item');
        newCartItem.innerHTML = `
            <img src="image/${item.image}" alt="${item.name}">
            <div class="cart-item-info">
                <div class="cart-item-name">${item.name}</div>
                <div class="cart-item-price">${item.price.toLocaleString()}</div>
                <div class="cart-item-quantity">${item.quantity}</div>
                <button class="remove-from-cart" onclick="removeFromCart(${item.id})">Remove</button>
            </div>`;
        listCard.appendChild(newCartItem);
    });
    total.innerText = totalPrice.toLocaleString();
    quantity.innerText = totalQuantity;
}

function removeFromCart(id) {
    let index = cartItems.findIndex(item => item.id === id);
    if (index !== -1) {
        cartItems.splice(index, 1);
        updateCart();
    }
}

initApp();
