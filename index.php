<?php

$conn = mysqli_connect("localhost", "root", "", "db_pet");
if(isset($_POST['save'])){
    $namaPembeli = $_POST["nama_pembeli"];
    $alamat = $_POST["alamat_pembeli"];
    $namaBinatang = $_POST["nama_binatang"];
    
    $sql = "INSERT INTO identitas (nama_pembeli, alamat, nama_binatang) 
            VALUES ('$namaPembeli', '$alamat', '$namaBinatang')";

    if (mysqli_query($conn, $sql)){
        echo "<script>
            alert('DATA SUDAH DISIMPAN!!!');
            document.location.href = '';
            </script>";
    }

    mysqli_close($conn);
};  



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Welcome to HABI.PET</title>
</head>
<body>
    <div class="container-fluid" id="home">
        <div class="container">
            <h2><i class='bx bxs-cat'></i>HABI.PET</h2>
            <ul>
                <li>
                <a href="#home">
                        HOME
                </a>
                </li>
                <li><i class='bx bxs-dog' >
                    <a href="#adopt">
                        </i>ADOPT</li>
                    </a>
                <li>
                    <a href="#FOOD">
                        FOOD
                    </a>
                </li>
                <li>
                    <a href="#kontak">CONTACT</a>
                </li>
            </ul>
            <a href="https://wa.me/+6281288603469">
            <button class="btn">
                <ion-icon name="call-outline"></ion-icon>
                    +6281288603469
                </button>
            </a>
        </div>
        <div class="content">
            <h1>PET SHOP & PET FOOD</h1>
            <h3>Selamat datang! <br>
            Adopsi dan Sedia Kebutuhan Hewan Peliharaan Online Hanya di HABI.PET!
            <br>
            Menyediakan brand lokal dan internasional untuk PetLovers di seluruh Indonesia. <br>

            Kami memiliki kebutuhan hewan peliharaan kesayangan Anda dengan menawarkan berbagai produk pilihan makanan dan aksesoris hewan.
            </h3>
        </div>
    </div>
    <!-- ADOPSI -->
    <br>
    <div class="card-container" id="adopt">
            <div class="card">
                <img src="chio.jpeg" alt="Card 1 Image">
                <h2>Chio</h2>
                <p>Umur : 14 bulan 
                    <br>
                   Jenis : Domestik
                   <br>
                   Jenis kelamin : Laki Laki 
                </p>
                <br>
                <button class="batem" onclick="openModal()">ADOPSI</button>
            </div>
            <div class="card">
                <img src="oni.jpeg" alt="Card 2 Image">
                <h2>Oni</h2>
                <p>Umur : 24 bulan 
                    <br>
                   Jenis : Domestik
                   <br>
                   Jenis kelamin : Laki Laki 
                </p>
                <br>
                <button class="batem" onclick="openModal()">ADOPSI</button>
            </div>
            <div class="card">
                <img src="badrun.png" alt="Card 3 Image">
                <h2>Badrun</h2>
                <p>Umur : 7 bulan 
                    <br>
                   Jenis : Corgy
                   <br>
                   Jenis kelamin : Laki Laki 
                </p>
                <br>
                <button class="batem" onclick="openModal()">ADOPSI</button>
            </div>
        </div>
    </div>

    <!-- FOOD -->
    <div class="card-container" id="FOOD">
            <div class="card">
                <img src="wiskas.png" alt="Card 1 Image">
                <h2>Whiskas</h2>
                <p>Untuk kucing
                    <br>
                    Purrfectly Chiken
                   <br>
                   Rp.58.000,00
                </p>
                <br>
                <button class="batem" onclick="buyFoodModal()">BELI</button>
            </div>
            <div class="card">
                <img src="royalkenin2.png" alt="Card 2 Image">
                <h2>Royal Canin</h2>
                <p>Untuk kucing
                    <br>
                   Care Digest Sensitive
                   <br>
                   Rp.69.662,00
                </p>
                <br>
                <button class="batem" onclick="buyFoodModal()">BELI</button>
            </div>
            <div class="card">
                <img src="royalkenin.png" alt="Card 3 Image">
                <h2>Royal Canin</h2>
                <p>Untuk anjing
                    <br>
                   MAXI Adult
                   <br>
                   Rp.346.662,00 
                </p>
                <br>
                <button class="batem" onclick="buyFoodModal()">BELI</button>
            </div>
        </div>
    </div>
</head>
<body>   
    

<!-- adopsi -->
<div class="modal fade" id="buy" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content"> 
            <div class="modal-header bg-danger" style="border-radius: 5px 5px 0px 0px">
                <h4 class="modal-title" id="">Form Adopsi</h4>
            </div>
            <div class="modal-body">
                <form class="form-group" action="#" method="post">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" name="nama_pembeli" placeholder="Nama Pemilik" required>
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                        <input type="text" class="form-control" name="alamat_pembeli" placeholder="Alamat pemilik" required>
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                        <input type="text" class="form-control" name="nama_binatang" placeholder="Nama binatang" required>
                    </div>
                    <br>
            </div>
            <div class="modal-footer">
                <button type="button" onclick="closeModal()" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-primary" name="save"><i class="fa fa-check"></i>Simpan</button>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>

        <!-- FOOD -->
<div class="modal fade" id="buyFood" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content"> 
            <div class="modal-header bg-danger" style="border-radius: 5px 5px 0px 0px">
                <h4 class="modal-title" id="">Form Pembelian</h4>
            </div>
            <div class="modal-body">
                <form class="form-group" action="#" method="post">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" name="nama_pembeli" placeholder="Nama Pembeli" required>
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                        <input type="text" class="form-control" name="alamat_pembeli" placeholder="Alamat Pembeli" required>
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                        <input type="text" class="form-control" name="nama_binatang" placeholder="Nama Makanan" required>
                    </div>
                    <br>
            </div>
            <div class="modal-footer">
                <button type="button" onclick="closeModalFood()" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-primary" name="save"><i class="fa fa-check"></i>Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

    
    <script>
    
        function openModal() {
            document.getElementById("buy").style.display = "block";
        }

        function closeModal() {
            document.getElementById("buy").style.display = "none";
        }

        function buyFoodModal() {
            document.getElementById("buyFood").style.display = "block";
        }

        function closeModalFood() {
            document.getElementById("buyFood").style.display = "none";
        }
        
    </script>   

<footer id="kontak">
        <p>TERIMA KASIH SUDAH DATANG DI WEB HABI.PET</p>
        <p>Hubungi saya lebih lanjut</p>
        <div class="social-icons" id="sosial">
            <a href="https://wa.me/+6281288603469"><i class="fab fa-whatsapp"></i></a>
            <a href="https://twitter.com/pangeranhabibii"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/p.habibiii_/"><i class="fab fa-instagram"></i></a>
        </div>
        <p class="copyright">copyright punya habibi</p>
    </footer>   
</body>
</html>

