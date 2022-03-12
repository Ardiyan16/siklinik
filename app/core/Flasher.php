<?php 

class Flasher {
    public static function setFlash($pesan, $aksi, $tipe)
    {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi'  => $aksi,
            'tipe'  => $tipe
        ];
    }

    public static function flash()
    {
        if( isset($_SESSION['flash']) ) {
            echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">
                    Username atau Password <strong>' . $_SESSION['flash']['pesan'] . '</strong> ' . $_SESSION['flash']['aksi'] . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            unset($_SESSION['flash']);
        }
    }

    public static function flashUser($pesan, $aksi, $tipe)
    {
        $_SESSION['pesanuser'] = [
            'pesan' => $pesan,
            'aksi'  => $aksi,
            'tipe'  => $tipe
        ];
    }

    public static function pesanuser()
    {
        if( isset($_SESSION['pesanuser']) ) {
            echo '<div class="alert alert-' . $_SESSION['pesanuser']['tipe'] . ' alert-dismissible fade show" role="alert">
                    User <strong>' . $_SESSION['pesanuser']['pesan'] . '</strong> ' . $_SESSION['pesanuser']['aksi'] . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            unset($_SESSION['pesanuser']);
        }
    }

    public static function flashWilayah($pesan, $aksi, $tipe)
    {
        $_SESSION['pesanwilayah'] = [
            'pesan' => $pesan,
            'aksi'  => $aksi,
            'tipe'  => $tipe
        ];
    }

    public static function pesanwilayah()
    {
        if( isset($_SESSION['pesanwilayah']) ) {
            echo '<div class="alert alert-' . $_SESSION['pesanwilayah']['tipe'] . ' alert-dismissible fade show" role="alert">
                    Wilayah <strong>' . $_SESSION['pesanwilayah']['pesan'] . '</strong> ' . $_SESSION['pesanwilayah']['aksi'] . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            unset($_SESSION['pesanwilayah']);
        }
    }

    public static function flashPegawai($pesan, $aksi, $tipe)
    {
        $_SESSION['pesanpegawai'] = [
            'pesan' => $pesan,
            'aksi'  => $aksi,
            'tipe'  => $tipe
        ];
    }

    public static function pesanpegawai()
    {
        if( isset($_SESSION['pesanpegawai']) ) {
            echo '<div class="alert alert-' . $_SESSION['pesanpegawai']['tipe'] . ' alert-dismissible fade show" role="alert">
                    Pegawai <strong>' . $_SESSION['pesanpegawai']['pesan'] . '</strong> ' . $_SESSION['pesanpegawai']['aksi'] . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            unset($_SESSION['pesanpegawai']);
        }
    }

    public static function flashTindakan($pesan, $aksi, $tipe)
    {
        $_SESSION['pesantindakan'] = [
            'pesan' => $pesan,
            'aksi'  => $aksi,
            'tipe'  => $tipe
        ];
    }

    public static function pesantindakan()
    {
        if( isset($_SESSION['pesantindakan']) ) {
            echo '<div class="alert alert-' . $_SESSION['pesantindakan']['tipe'] . ' alert-dismissible fade show" role="alert">
                    Tindakan <strong>' . $_SESSION['pesantindakan']['pesan'] . '</strong> ' . $_SESSION['pesantindakan']['aksi'] . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            unset($_SESSION['pesantindakan']);
        }
    }

    public static function flashObat($pesan, $aksi, $tipe)
    {
        $_SESSION['pesanobat'] = [
            'pesan' => $pesan,
            'aksi'  => $aksi,
            'tipe'  => $tipe
        ];
    }

    public static function pesanobat()
    {
        if( isset($_SESSION['pesanobat']) ) {
            echo '<div class="alert alert-' . $_SESSION['pesanobat']['tipe'] . ' alert-dismissible fade show" role="alert">
                    Obat <strong>' . $_SESSION['pesanobat']['pesan'] . '</strong> ' . $_SESSION['pesanobat']['aksi'] . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            unset($_SESSION['pesanobat']);
        }
    }

    public static function flashPasien($pesan, $aksi, $tipe)
    {
        $_SESSION['pesanpasien'] = [
            'pesan' => $pesan,
            'aksi'  => $aksi,
            'tipe'  => $tipe
        ];
    }

    public static function pesanpasien()
    {
        if( isset($_SESSION['pesanpasien']) ) {
            echo '<div class="alert alert-' . $_SESSION['pesanpasien']['tipe'] . ' alert-dismissible fade show" role="alert">
                    Pasien <strong>' . $_SESSION['pesanpasien']['pesan'] . '</strong> ' . $_SESSION['pesanpasien']['aksi'] . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            unset($_SESSION['pesanpasien']);
        }
    }

    public static function flashPenanganan($pesan, $aksi, $tipe)
    {
        $_SESSION['pesanpenanganan'] = [
            'pesan' => $pesan,
            'aksi'  => $aksi,
            'tipe'  => $tipe
        ];
    }

    public static function pesanpenanganan()
    {
        if( isset($_SESSION['pesanpenanganan']) ) {
            echo '<div class="alert alert-' . $_SESSION['pesanpenanganan']['tipe'] . ' alert-dismissible fade show" role="alert">
                    Penanganan <strong>' . $_SESSION['pesanpenanganan']['pesan'] . '</strong> ' . $_SESSION['pesanpenanganan']['aksi'] . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            unset($_SESSION['pesanpenanganan']);
        }
    }
}