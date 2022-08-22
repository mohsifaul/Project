<?php   
    if (isset($_GET['success']) && $_GET['success'] == 1 ) {
        echo "<div class='alert alert-success alert-dismissible fade show text-white' role='alert'>
        <span class='alert-icon'><i class='ni ni-like-2'></i></span>
        <span class='alert-text'><strong>Berhasil !</strong> Data berhasil ditambahkan.</span>
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
        </button>
    </div>";
    } elseif (isset($_GET['delete']) && $_GET['delete'] == 1 ) {
        echo "<div class='alert alert-danger alert-dismissible fade show text-white' role='alert'>
        <span class='alert-icon'><i class='ni ni-like-2'></i></span>
        <span class='alert-text'><strong>Berhasil !</strong> Data berhasil dihapus.</span>
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
        </button>
    </div>";
    } elseif (isset($_GET['edit']) && $_GET['edit'] == 1 ){
        echo "<div class='alert alert-warning alert-dismissible fade show text-white' role='alert'>
        <span class='alert-icon'><i class='ni ni-like-2'></i></span>
        <span class='alert-text'><strong>Berhasil !</strong> Data berhasil diubah.</span>
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
        </button>
    </div>";
    }
?>