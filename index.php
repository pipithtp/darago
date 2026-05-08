<?php include 'koneksi.php'; ?>

<h1>Produk Darago</h1>

<div style="display:flex; flex-wrap:wrap;">

<?php
$query = mysqli_query($conn, "SELECT * FROM products");

while ($data = mysqli_fetch_array($query)) {
?>
    <div style="
        width:200px; 
        border:1px solid #ccc; 
        padding:10px; 
        margin:10px;
        text-align:center;
        border-radius:10px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    ">
        <img src="assets/img/<?php echo $data['Gambar']; ?>" width="100"><br><br>

        <h3><?php echo $data['Nama']; ?></h3>

        <p>
        <?php echo $data['Jumlah']; ?> <?php echo $data['Satuan']; ?>
        </p>
        
        <p><b>Rp <?php echo number_format($data['Harga']); ?></b></p>

        <a href="cart.php?id=<?php echo $data['id']; ?>">
            <button>Tambah</button>
        </a>
    </div>
<?php } ?>

</div>