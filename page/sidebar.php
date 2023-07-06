<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Menu Utama</div>
            <a class="nav-link" href="index.php">
                <div class="sb-nav-link-icon">
                    <i class="fas fa-tachometer-alt"></i>
                </div>
                Dashboard
            </a>

            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#menuSidebar" aria-expanded="false" aria-controls="menuSidebar">
                <div class="sb-nav-link-icon">
                    <i class="fas fa-list"></i>
                </div>
                Menu
                <div class="sb-sidenav-collapse-arrow">
                    <i class="fas fa-angle-down"></i>
                </div>
            </a>
            <div class="collapse" id="menuSidebar" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="index.php?hal=makanan">Makanan</a>
                    <a class="nav-link" href="#">Minuman</a>
                </nav>
            </div>

            <!-- Transaksi Section (Users Only) -->
            <?php
            if ($user_level == "user") { ?>
                <div class="sb-sidenav-menu-heading">Transaksi</div>
                <a class="nav-link" href="#">
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-pen"></i>
                    </div>
                    Order
                </a>
                <a class="nav-link" href="#">
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-cart-shopping"></i>
                    </div>
                    Keranjang
                </a>
            <?php
            } ?>
            <!-- End Transaksi -->

            <!-- Laporan Section (admin only) -->
            <?php
            if ($user_level == "admin") { ?>
                <div class="sb-sidenav-menu-heading">Laporan</div>
                <a class="nav-link" href="index.php?hal=konsumen">
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    Konsumen
                </a>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#orderSidebar" aria-expanded="false" aria-controls="orderSidebar">
                    <div class="sb-nav-link-icon">
                        <i class="fa-solid fa-clipboard-list"></i>
                    </div>
                    Transaksi
                    <div class="sb-sidenav-collapse-arrow">
                        <i class="fas fa-angle-down"></i>
                    </div>
                </a>
                <div class="collapse" id="orderSidebar" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="#">Pemesanan</a>
                        <a class="nav-link" href="#">Pembayaran</a>
                    </nav>
                </div>
            <?php
            } ?>
            <!-- End Laporan -->

        </div>
    </div>
</nav>