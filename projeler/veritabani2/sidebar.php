<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" style="background-color: #beb8af !important ;
    background-image: linear-gradient(180deg, #6d134c 10%, #6d134c 100%) !important;" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-truck-moving"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Kargo Admin</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani2/index.php"?>">
        <i class="fas fa-fw fa-truck-loading"></i>
        <span>Anasayfa</span></a>
</li>



<!-- Nav Item - Pages Collapse Menu -->


<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-truck"></i>
        <span>Yola Çıkacaklar</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Yola Çıkacaklar:</h6>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani2/kargocikan/ekle.php"?>">Ekle</a>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani2/kargocikan/sil.php"?>">Sil</a>
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Stok" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-truck"></i>
        <span>İadeler</span>
    </a>
    <div id="Stok" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">İadeler:</h6>
            <a class="collapse-item" href=<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani2/kargoiade/ekle.php"?>>Ekle</a>
            <a class="collapse-item" href=<?php echo"http://$_SERVER[HTTP_HOST]/projeler/veritabani2/kargoiade/duzen.php"?>>Düzenle</a>
            <a class="collapse-item" href=<?php echo"http://$_SERVER[HTTP_HOST]/projeler/veritabani2/kargoiade/sil.php"?>>Sil</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#sulama" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-truck"></i>
        <span>Ürünler</span>
    </a>
    <div id="sulama" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Ürünler:</h6>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/projeler/veritabani2/kargourun/ekle.php"?>">Ürün Ekle</a>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/projeler/veritabani2/kargourun/duzen.php"?>">Ürün Düzenle</a>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/projeler/veritabani2/kargourun/sil.php"?>">Ürün Sil</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Firma" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-truck"></i>
        <span>Alınıcak Kargolar</span>
    </a>
    <div id="Firma" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Alınıcak Kargolar:</h6>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/projeler/veritabani2/kargoalım/ekle.php"?>">Ekle</a>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/projeler/veritabani2/kargoalım/sil.php"?>">Sil</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#İade" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-truck"></i>
        <span>Kargo Durum </span>
    </a>
    <div id="İade" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Kargo Durum ekle sil:</h6>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/projeler/veritabani2/kargodurum/ekle.php"?>">Ekle</a>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/projeler/veritabani2/kargodurum/sil.php"?>">Sil</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#İades" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-truck"></i>
        <span>Kategori ve mal </span>
    </a>
    <div id="İades" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Ekle/Sil:</h6>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/projeler/veritabani2/ozel/kekle.php"?>">Kategori ekle</a>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/projeler/veritabani2/ozel/ksil.php"?>">Kategori Sil</a>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/projeler/veritabani2/ozel/mekle.php"?>">Mal Ekle</a>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/projeler/veritabani2/ozel/msil.php"?>">Mal Sil</a>
        </div>
    </div>
</li>
<li class="nav-item">
<a class="nav-link" href="<?php echo"http://$_SERVER[HTTP_HOST]/projeler/veritabani2/cari.php"?>"  aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-truck"></i> 
        <span>CARİ</span>
        </a>
</li>
<!-- Divider -->



</ul>