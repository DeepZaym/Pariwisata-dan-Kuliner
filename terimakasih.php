<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="thank-you-container">
        <h1>Terima Kasih, <span id="user-name"></span>!</h1>
        <p>Pesanan Anda telah kami terima dengan rincian sebagai berikut:</p>
        <div class="order-details">
            <p><strong>Nama Makanan:</strong> <span id="food-name"></span></p>
            <p><strong>Jumlah:</strong> <span id="quantity"></span></p>
            <p><strong>Alamat:</strong> <span id="address"></span></p>
            <p><strong>Kustomisasi:</strong> <span id="custom"></span></p>
            <p><strong>Total Harga:</strong> <span id="total-price"></span></p>
            <p><strong>Metode Pembayaran:</strong> <span id="payment-method"></span></p>
        </div>
    </div>
    <script>
        // Contoh data pengguna dan pesanan
        const userData = {
            userName: "John Doe",
            foodName: "Nasi Goreng",
            quantity: 2,
            address: "Jl. Kebon Jeruk No. 5",
            custom: "Tanpa bawang",
            totalPrice: "Rp50.000",
            paymentMethod: "Transfer Bank"
        };

        // Menampilkan data pada halaman
        document.getElementById("user-name").textContent = userData.userName;
        document.getElementById("food-name").textContent = userData.foodName;
        document.getElementById("quantity").textContent = userData.quantity;
        document.getElementById("address").textContent = userData.address;
        document.getElementById("custom").textContent = userData.custom;
        document.getElementById("total-price").textContent = userData.totalPrice;
        document.getElementById("payment-method").textContent = userData.paymentMethod;
    </script>
</body>
</html>
