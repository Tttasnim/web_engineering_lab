const products = [
    {
        name: "Fruits",
        currentPrice: 24.99,
        discount: 10,
        applyDiscount: true,
        img: "https://hips.hearstapps.com/hmg-prod/images/gettyimages-467652436-67d4135402600.jpg"
    },
    {
        name: "Cake",
        currentPrice: 20.99,
        discount: 15,
        applyDiscount: true,
        img: "https://www.lolas.co.uk/cdn/shop/files/ChocolateandRaspberryDinners_0cacf994-7fe5-468a-b420-bfe00548554f_600x.jpg"
    },
    {
        name: "Milk Shake",
        currentPrice: 5.00,
        discount: 5,
        applyDiscount: false,
        img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_j2GiTUASpN2TRBC7GNNHQ8-JjEofeNE7wxkUUzXYFLQGM0RFWh3tHnurY74N8j9fu10"
    },
    {
        name: "Coffee",
        currentPrice: 9.99,
        discount: 8,
        applyDiscount: true,
        img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPUjLvjcgRw4g63F4_hY6psFI2deJhKXOuVA"
    }
];

let cart = [];

function renderProducts() {
    const section = document.getElementById("section1");
    products.forEach((item, index) => {
        const card = document.createElement("div");
        card.className = "productCard";

        const discountPrice = item.applyDiscount
            ? (item.currentPrice * (1 - item.discount / 100)).toFixed(2)
            : item.currentPrice.toFixed(2);

        card.innerHTML = `
            ${item.applyDiscount ? `<div class="discount-badge">${item.discount}% OFF</div>` : ""}
            <img src="${item.img}" alt="${item.name}" />
            <h3>${item.name}</h3>
            ${item.applyDiscount ? `<h4 class="old-price">$${item.currentPrice.toFixed(2)}</h4>` : ""}
            <h4>$${discountPrice}</h4>
            <button class="cart-btn" onclick="addToCart(${index})">Add to Cart</button>
        `;

        section.appendChild(card);
    });
}

function addToCart(index) {
    const item = products[index];
    const price = item.applyDiscount
        ? item.currentPrice * (1 - item.discount / 100)
        : item.currentPrice;

    cart.push({ name: item.name, price: price });

    updateCart();
}

function updateCart() {
    document.getElementById("cart-count").innerText = cart.length;
    const cartSidebar = document.getElementById("cartSidebar");
    const cartItems = document.getElementById("cartItems");
    const totalAmount = document.getElementById("totalAmount");

    cartSidebar.style.display = "flex";
    cartItems.innerHTML = "";
    let total = 0;

    cart.forEach(item => {
        const li = document.createElement("li");
        li.innerText = `${item.name} - $${item.price.toFixed(2)}`;
        cartItems.appendChild(li);
        total += item.price;
    });

    totalAmount.innerText = total.toFixed(2);
}

function closeCart() {
    document.getElementById("cartSidebar").style.display = "none";
}

renderProducts();
