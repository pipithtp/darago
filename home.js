// === DATA DUMMY KATEGORI & PRODUK ===
const categories = ["Mi Kering", "Mi Instan", "Bihun", "Bumbu", "Snack"];
const products = [];

for (let i = 1; i <= 27; i++) {
    let catIndex = i % 5; 
    let category = categories[catIndex]; 
    let namaProduk = "";
    let harga = 0;

    if(category === "Mi Kering") { 
        namaProduk = "Mi Urai / Burung Dara Pipih Pack " + i; 
        harga = 12000 + (i * 500); 
    }
    else if(category === "Mi Instan") { 
        namaProduk = "Mi Instan Rasa Kaldu Ayam Varian " + i; 
        harga = 3500 + (i * 100); 
    }
    else if(category === "Bihun") { 
        namaProduk = "Bihun Jagung Burung Dara " + i; 
        harga = 8000 + (i * 200); 
    }
    else if(category === "Bumbu") { 
        namaProduk = "Bumbu Praktis Mi Goreng Spesial " + i; 
        harga = 4000 + (i * 150); 
    }
    else if(category === "Snack") { 
        namaProduk = "Snack Mi Kress Kriuk " + i; 
        harga = 2500 + (i * 100); 
    }

    products.push({
        id: i,
        name: namaProduk,
        category: category,
        price: harga,
        image: "Logo Burung Dara.png" 
    });
}

const productGrid = document.getElementById('product-grid');

function formatRupiah(angka) {
    return new Intl.NumberFormat('id-ID', { 
        style: 'currency', currency: 'IDR', minimumFractionDigits: 0 
    }).format(angka);
}

function renderProducts(productList) {
    productGrid.innerHTML = '';
    productList.forEach((product, index) => {
        const card = document.createElement('div');
        card.className = 'product-card';
        
        // Memasukkan HTML dengan format QTY dan Tombol Baru
        card.innerHTML = `
            <p class="product-category-label">${product.category}</p>
            <img src="${product.image}" alt="${product.name}" class="product-img">
            <h3 class="product-title">${product.name}</h3>
            <p class="product-price">${formatRupiah(product.price)}</p>
            
            <!-- Kontrol QTY -->
            <div class="qty-control">
                <button class="qty-btn minus-btn">-</button>
                <input type="number" class="qty-input" value="1" min="1" id="qty-${product.id}">
                <button class="qty-btn plus-btn">+</button>
            </div>

            <!-- Tombol Pesan & Keranjang -->
            <div class="action-buttons">
                <button class="btn-pesan" onclick="pesanSekarang('${product.name}', ${product.id})">Pesan Sekarang</button>
                <button class="btn-cart-icon" onclick="tambahKeKeranjang('${product.name}', ${product.id})">🛒</button>
            </div>
        `;
        productGrid.appendChild(card);
    });

    // Menambahkan logika (Event Listener) untuk tombol + dan - setelah dirender
    const minusBtns = document.querySelectorAll('.minus-btn');
    const plusBtns = document.querySelectorAll('.plus-btn');
    const qtyInputs = document.querySelectorAll('.qty-input');

    plusBtns.forEach((btn, index) => {
        btn.addEventListener('click', () => {
            let currentValue = parseInt(qtyInputs[index].value);
            qtyInputs[index].value = currentValue + 1;
        });
    });

    minusBtns.forEach((btn, index) => {
        btn.addEventListener('click', () => {
            let currentValue = parseInt(qtyInputs[index].value);
            if (currentValue > 1) { // Mencegah angka turun di bawah 1
                qtyInputs[index].value = currentValue - 1;
            }
        });
    });
}

// Fungsi dummy untuk Pop-up Alert
window.pesanSekarang = function(nama, id) {
    const qty = document.getElementById(`qty-${id}`).value;
    alert(`Mengarahkan ke pembayaran untuk ${qty}x ${nama}...`);
}

window.tambahKeKeranjang = function(nama, id) {
    const qty = document.getElementById(`qty-${id}`).value;
    alert(`${qty}x ${nama} berhasil ditambahkan ke keranjang!`);
}

// Render awal saat halaman dimuat
renderProducts(products);

// LOGIKA FILTER KATEGORI
const catButtons = document.querySelectorAll('.cat-btn');
catButtons.forEach(btn => {
    btn.addEventListener('click', () => {
        catButtons.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        const selectedCategory = btn.innerText;
        if (selectedCategory === "Semua") {
            renderProducts(products);
        } else {
            const filteredProducts = products.filter(p => p.category === selectedCategory);
            renderProducts(filteredProducts);
        }
    });
});