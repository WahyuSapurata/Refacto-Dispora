@extends('landing.layout')
@section('head-background')
    <div class="position-absolute w-100 z-index-n2 bg-others">
        <img src="{{ asset('bg.jpg') }}" class="w-100 backgriund-landing" alt="">
    </div>
@endsection
@section('content')
    <div class="container py-15">
        <div class="card mb-15">
            <div class="card-body border-primary" style="border-left: 5px solid; border-radius: 5px">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="lh-base fw-bolder fs-3x fs-lg-4x">{{ $module }}</h1>
                    </div>
                    <div class="col-md-4">
                        <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold justify-content-end">
                            <li class="breadcrumb-item pe-3"><a href="{{ route('home') }}" class="pe-3">Home</a></li>
                            <li class="breadcrumb-item pe-3 text-muted">{{ $module }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="fs-3 fw-bolder">TUPOKSI DINAS PEMUDA DAN OLAHRAGA</div>
            <ul class="fs-5" style="list-style-type: upper-alpha;">
                <li>
                    Dinas Pemuda dan Olahraga: Tugas, Fungsi dan Struktur Organisasi Dinas Pemuda dan Olahraga Berdasarkan
                    pada Peraturan Daerah Kota Makassar Nomor 3 Tahun 2009 (sebagai mana telah di rubah dengan peraturan
                    daerah nomor 7 tahun 2013 tentang struktur organisasi) tentang Pembentukan, Susunan Organisasi dan Tata
                    Kerja Dinas Pemuda dan Olahraga Kota Makassar (Lembaran Daerah Nomor 147 Tahun 2007) dengan tugas pokok
                    Dinas Pemuda dan Olahraga menyusun rencana, membina, mengembangkan dan mengawasi kegiatan peningkatan
                    kualitas sumber daya serta pemberdayaan kelembagaan kepemudaan dan keolahragaan yang ditindak lanjuti
                    dengan Peraturan Walikota Makassar Nomor 100 Tahun 2016 tentang Kedudukan, Susunan Organisasi, Tugas dan
                    Fungsi serta tata kerja Dinas Pemuda dan Olahraga. Dalam melaksanakan tugas Dinas Pemuda dan Olaharaga,
                    sebagaimana dalam Peraturan Walikota Makassar Nomor 100 Tahun 2016, yaitu dengan uraian tugas sebagai
                    berikut:
                    <ul style="list-style-type: lower-alpha;">
                        <li>
                            Melakukan penyadaran, pemberdayaan dan pengembangan pemuda dan kepemudaan terhadap pemuda
                            pelopor, wirausaha muda pemula, dan pemuda kader Kota Makassar;
                        </li>
                        <li>
                            Memberdayaan dan mengembangkan organisasi kepemudaan tingkat Kota Makassar;
                        </li>
                        <li>
                            Membina dan mengembangkan olahraga pendidikan pada jenjang pendidikan yang menjadi kewenangan
                            Kota Makassar;
                        </li>
                        <li>
                            Menyelenggarakan kejuaraanolahraga tingkat Kota Makassar;
                        </li>
                        <li>
                            Membina dan mengembangkan olahraga prestasi dan olaharaga rekreasi;
                        </li>
                        <li>
                            Membina dan mengembangkan organisasi olahraga dan organisasi kepramukaan tingkat Kota Makassar;
                        </li>
                    </ul>
                </li>
                <li>Kepala Dinas mempunyai tugas membantu walikota melaksanakan Urusan Pemerintahan Bidang kepemudaan dan
                    olahraga yang menjadi kewenangan Daerah dan Tugas Pembantuan yang ditugaskan kepada Daerah. dalam
                    melaksanakan tugas sebagaimana dimaksud pada ayat (1), menyelenggarakan</li>
            </ul>
            <div class="fs-3 fw-bolder">TUPOKSI KEPALA DINAS PEMUDA DAN OLAHRAGA</div>
            <div class="fs-5">
                Kepala Dinas mempunyai tugas membantu walikota melaksanakan Urusan Pemerintahan Bidang kepemudaan dan
                olahraga yang menjadi kewenangan Daerah dan Tugas Pembantuan yang ditugaskan kepada Daerah. dalam
                melaksanakan tugas sebagaimana dimaksud pada ayat (1), menyelenggarakan fungsi :
            </div>
            <ul class="fs-5" style="list-style-type: lower-alpha;">
                <li>
                    Perumusan kebijakan penyelenggaraan Urusan Pemerintahan bidang kepemudaan dan olahraga;
                </li>
                <li>Pelaksanaan kebijakan Urusan Pemerintahan bidang kepemudaan dan olahraga;</li>
                <li>Pelaksanaan evaluasi dan pelaporan Urusan Pemerintahan bidang kepemudaan dan olahraga;</li>
                <li>Pelaksanaan administrasi dinas Urusan Pemerintahan bidang kepemudaan dan olahraga;</li>
                <li>Pembinaan, pengoordinasian, pengelolaan, pengendalian, dan pengawasan program dan kegiatan bidang
                    kepemudaan dan olahraga;</li>
                <li>Pelaksanaan fungsi lain yang diberikan oleh walikota terkait dengan tugas dan fungsinya.</li>
            </ul>
            <div class="fs-3 fw-bolder">TUPOKSI SEKRETARIAT</div>
            <div class="fs-5">
                Sekretariat mempunyai tugas melaksanakan koordinasi pelaksanaan tugas, pembinaan dan pelayanan administrasi
                kepada semua unit organisasi di lingkungan dinas, Sekretariat menyelenggarakanfungsi :
            </div>
            <ul class="fs-5" style="list-style-type: lower-alpha;">
                <li>
                    Perencanaan operasional urusan perencanaan dan peloporan, keuangan, umum dan kepegawaian;
                </li>
                <li>Pelaksanaan urusan perencanaan dan pelaporan, keuangan, umum dan kepegawaian;</li>
                <li>Pengkoordinasian urusan perencanaan dan peloporan, keuangan, umum dan kepegawaian;</li>
                <li>Pengendalian, evaluasi dan pelaporan urusan perencanaan dan pelaporan, keuangan, umum dan kepegawaian;
                </li>
                <li>Pelaksanaan fungsi lain diberikan oleh atasan terkait tugas dan fungsinya.</li>
            </ul>
            <div class="fs-3 fw-bolder">TUPOKSI SUBBAGIAN PERENCANAAN DAN PELAPORAN</div>
            <div class="fs-5">
                Subbagian Perencanaan dan pelaporan mempunyai tugas melakukan penyiapan bahan koordinasi dan penyusunan
                rencana program kerja, monitoring dan evaluasi serta pelaporan pelaksanaan program dan kegiatan dinas. Dalam
                melaksanakan tugas, Subbagian Perencanaan menyelenggarakan fungsi sebagai berikut :
            </div>
            <ul class="fs-5" style="list-style-type: decimal;">
                <li>
                    perencanaan kegiatan di bidang perencanaan, evaluasi dan pelaporan;
                </li>
                <li>pelaksanaan kegiatan di bidang perencanaan, evaluasi dan pelaporan;</li>
                <li>pembagian tugas dan mengontrol pelaksanaan kegiatan di bidang perencanaan, evaluasi dan pelaporan;</li>
                <li>pelaksanaan fungsi lain yang diberikan oleh atasan terkait tugas dan fungsinya.
                </li>
            </ul>
            <div class="fs-5">
                Berdasarkan tugas dan fungsi sebagaimana dimaksud pada ayat (1) dan ayat (2), Subbagian Perencanaan dan
                Pelaporan mempunyai uraian tugas :
            </div>
            <ul class="fs-5" style="list-style-type: lower-alpha;">
                <li>
                    merencanakan, menyusun dan melaksanakan program dan kegiatan Subbagian Perencanaan dan Pelaporan;
                </li>
                <li>menyusun bahan Rencana Kerja dan Anggaran (RKA)/RKPA, Dokumen Pelaksanaan Anggaran (DPA)/DPPASubbagian
                    Perencanaan dan Pelaporan;</li>
                <li>melaksanakan Dokumen Pelaksanaan Anggaran (DPA)/DPPA Subbagian Perencanaan dan Pelaporan;</li>
                <li>menghimpun bahan dan menyusun Rencana Strategis (RENSTRA) dan Rencana Kerja (RENJA), Indikator Kinerja
                    Utama (IKU), Rencana Kerja dan Anggaran (RKA)/RKPA, Dokumen Pelaksanaan Anggaran (DPA)/DPPA dan
                    Perjanjian Kinerja (PK) dinas;
                </li>
                <li>menghimpun bahan dan menyusun Laporan Akuntabilitas Kinerja Instansi Pemerintah (LAKIP)/Sistem
                    Akuntabilitas Kinerja Instansi Pemerintah (SAKIP) dinas;</li>
                <li> menyiapkan bahan penyusunan Laporan Penyelenggaraan Pemerintahan Daerah (LPPD), Laporan Keterangan
                    Pertanggungjawaban (LKPJ) dan Laporan Akuntabilitas Kinerja Instansi Pemerintah (LAKIP)/Sistem
                    Akuntabilitas Kinerja Instansi Pemerintah (SAKIP) Kota dan segala bentuk pelaporan lainnya sesuai bidang
                    tugasnya;</li>
                <li> menghimpun, memaduserasikan dan menyiapkan bahan Rencana Kerja dan Anggaran (RKA)/RKPA, Dokumen
                    Pelaksanaan Anggaran (DPA)/DPPA dari setiap bidang untuk dikoordinasikan dengan Satuan Kerja Perangkat
                    Daerah terkait;</li>
                <li> menghimpun dan menganalisa data pelaporan kegiatan dari setiap bidang sebagai bahan evaluasi;</li>
                <li> mengevaluasi pelaksanaan tugas dan menginventarisasi permasalahan dilingkup tugasnya serta mencari
                    alternatif pemecahannya;</li>
                <li> mempelajari, memahami dan melaksanakan peraturan perundang-undangan yang berkaitan dengan lingkup
                    tugasnya sebagai pedoman dalam melaksanakan tugas;</li>
                <li> memberikan saran dan pertimbangan teknis kepada atasan;</li>
                <li> membagi tugas, memberi petunjuk, menilai dan mengevaluasi hasil kerja bawahan agar pelaksanaan tugas
                    dapat berjalan lancar sesuai dengan ketentuan yang berlaku;</li>
                <li> menyampaikan laporan pelaksanaan tugas dan/atau kegiatan kepada atasan;</li>
                <li> melaksanakan tugas kedinasan lain yang diberikan oleh atasan.</li>
            </ul>
            <div class="fs-3 fw-bolder">TUPOKSI SUBBAGIAN KEUANGAN</div>
            <div class="fs-5">
                Subbagian Keuangan mempunyai tugas melakukan administrasi dan akuntansi keuangan. Dalam melaksanakan tugas,
                Subbagian Keuangan menyelenggarakan fungsi :
            </div>
            <ul class="fs-5" style="list-style-type: decimal;">
                <li>perencanaan kegiatan di bidang administrasi dan akuntansi keuangan;</li>
                <li>pelaksanaan kegiatan di bidang administrasi dan akuntansi keuangan;</li>
                <li>pembagian tugas dan mengontrol pelaksanaan kegiatan di bidang administrasi dan akuntansi keuangan;</li>
                <li>pelaksanaan fungsi lain yang diberikan oleh atasan terkait tugas dan fungsinya.</li>
            </ul>
            <div class="fs-5">
                Berdasarkan tugas dan fungsi sebagaimana dimaksud pada ayat (1) dan ayat (2), Subbagian Keuangan mempunyai
                uraian tugas :
            </div>
            <ul class="fs-5" style="list-style-type: lower-alpha;">
                <li> merencanakan, menyusun dan melaksanakan program dan kegiatan Subbagian Keuangan;</li>
                <li> menyusun bahan Rencana Kerja dan Anggaran (RKA)/RKPA, Dokumen Pelaksanaan Anggaran (DPA)/DPPA Subbagian
                    Keuangan;</li>
                <li> melaksanakan Dokumen Pelaksanaan Anggaran (DPA)/DPPA Subbagian Keuangan;</li>
                <li> melaksanakan kegiatan administrasi dan akuntansi keuangan di lingkup dinas sesuai dengan peraturan
                    perundang-undangan yang berlaku;</li>
                <li> meneliti dan memverifikasi kelengkapan Surat Perintah Pembayaran (SPP) dan dokumen pencairan anggaran
                    lainnya sesuai dengan ketentuan peraturan perundang-undangan yang berlaku;</li>
                <li> menyiapkan dan menerbitkan Surat Perintah Membayar (SPM) lingkup dinas;</li>
                <li> menyusun segala bentuk pelaporan keuangan lingkup dinas sesuai dengan peraturan perundang-undangan yang
                    berlaku;</li>
                <li> mengevaluasi pelaksanaan tugas dan menginventarisasi permasalahan dilingkup tugasnya serta mencari
                    alternatif pemecahannya;</li>
                <li> mempelajari, memahami dan melaksanakan peraturan perundang-undangan yang berkaitan dengan lingkup
                    tugasnya sebagai pedoman dalam melaksanakan tugas;</li>
                <li> memberikan saran dan pertimbangan teknis kepada atasan;</li>
                <li> membagi tugas, memberi petunjuk, menilai dan mengevaluasi hasil kerja bawahan agar pelaksanaan tugas
                    dapat berjalan lancar sesuai dengan ketentuan yang berlaku;</li>
                <li> menyampaikan laporan pelaksanaan tugas dan/atau kegiatan kepada atasan;</li>
                <li> melaksanakan tugas kedinasan lain yang diberikan oleh atasan.</li>
            </ul>
            <div class="fs-3 fw-bolder">TUPOKSI SUBBAGIAN UMUM DAN KEPEGAWAIAN</div>
            <div class="fs-5">
                Subbagian Umum dan Kepegawaian mempunyai tugas melakukan urusan umum, penatausahaan surat menyurat, urusan
                rumah tangga, kehumasan, dokumentasi dan inventarisasi barang serta administrasi kepegawaian. Subbagian Umum
                dan Kepegawaian dalam melaksanakan tugas sebagaimana dimaksud dalam ayat (1), menyelenggarakan fungsi :
            </div>
            <ul class="fs-5" style="list-style-type: lower-alpha;">
                <li>perencanaan kegiatan urusan umum, penatausahaan surat menyurat, urusan rumah tangga, kehumasan,
                    dokumentasi dan inventarisasi barang serta administrasi kepegawaian;</li>
                <li>pelaksanaan kegiatan urusan umum, penatausahaan surat menyurat, urusan rumah tangga,kehumasan,
                    dokumentasi dan inventarisasi barang serta administrasi kepegawaian;</li>
                <li>pembagian tugas dan mengontrol pelaksanaan kegiatan urusan umum, penatausahaan surat menyurat, urusan
                    rumah tangga, kehumasan, dokumentasi dan inventarisasi barang serta administrasi kepegawaian;</li>
                <li>pelaksanaan fungsi lain yang diberikan oleh atasan terkait tugas dan fungsinya.</li>
            </ul>
            <div class="fs-5">
                Berdasarkan tugas dan fungsi sebagaimana dimaksud pada ayat (1) dan ayat (2), Subbagian Umum dan Kepegawaian
                mempunyai uraian tugas :
            </div>
            <ul class="fs-5" style="list-style-type: lower-alpha;">
                <li> merencanakan, menyusun dan melaksanakan program dan kegiatan Subbagian Umum dan Kepegawaian;</li>
                <li> menyusun bahan Rencana Kerja dan Anggaran (RKA)/RKPA, Dokumen Pelaksanaan Anggaran (DPA)/DPPA Subbagian
                    Umum dan Kepegawaian;</li>
                <li> melaksanakan Dokumen Pelaksanaan Anggaran (DPA)/DPPA Subbagian Umum dan Kepegawaian;</li>
                <li> mengatur administrasi dan pelaksanaan surat masuk dan surat keluar sesuai dengan tata naskah dinas yang
                    berlaku;</li>
                <li> melaksanakan urusan administrasi kepegawaian di lingkup dinas;</li>
                <li> meminta dan menganalisa rencana kebutuhan barang unit dari setiap bidang;</li>
                <li> membuat daftar kebutuhan barang dan rencana tahunan barang unit;</li>
                <li> menyusun kebutuhan biaya pemeliharaan barang;</li>
                <li> melaksanakan pengadaan, pemeliharaan dan pendistribusian barang di lingkup dinas;</li>
                <li> melakukan penyimpanan dokumen dan surat berharga lainnya tentang barang inventaris Daerah;</li>
                <li> melaksanakan tugas kehumasan dan protokoler dinas;</li>
                <li> menghimpun bahan dan menyusun Standar Operasional Prosedur (SOP) dan Standar Pelayanan (SP) dinas;</li>
                <li> menyiapkan bahan pembinaan dan pengembangan kapasitas organisasi dan tata laksana;</li>
                <li> mengevaluasi pelaksanaan tugas dan menginventarisasi permasalahan dilingkup tugasnya serta mencari
                    alternatif pemecahannya;</li>
                <li> mempelajari, memahami dan melaksanakan peraturan perundang-undangan yang berkaitan dengan lingkup
                    tugasnya sebagai pedoman dalam melaksanakan tugas;</li>
                <li> memberikan saran dan pertimbangan teknis kepada atasan;</li>
                <li> membagi tugas, memberi petunjuk, menilai dan mengevaluasi hasil kerja bawahan agar pelaksanaan tugas
                    dapat berjalan lancar sesuai dengan ketentuan yang berlaku;</li>
                <li> menyampaikan laporan pelaksanaan tugas dan/atau kegiatan kepada atasan;</li>
                <li> melaksanakan tugas kedinasan lain yang diberikan oleh atasan.</li>
            </ul>
            <div class="fs-3 fw-bolder">TUPOKSI BIDANG PEMBERDAYAAN PEMUDA</div>
            <div class="fs-5">
                Bidang Pemberdayaan Pemuda mempunyai tugas melaksanakan pembinaan dan pemberdayaan pemuda melalui
                peningkatan sumber daya dan kemitraan pemuda, peningkatan wawasan dan kapasitas pemuda serta peningkatan
                kreativitas dan kewirausahaan pemuda. Bidang Pemberdayaan Pemuda dalam melaksanakan tugas, menyelenggarakan
                fungsi :
            </div>
            <ul class="fs-5" style="list-style-type: lower-alpha;">
                <li> perencanaan kegiatan operasional di bidang pemberdayaan pemuda;</li>
                <li> pelaksanaan kegiatan di bidang pemberdayaan pemuda;</li>
                <li> pengoordinasian pelaksanaan kegiatan di bidang pemberdayaan pemuda;</li>
                <li> pengendalian, evaluasi dan pelaporan pelaksanaan kegiatan di bidang pemberdayaan pemuda;</li>
                <li> pelaksanaan fungsi lain yang diberikan oleh atasan terkait tugas dan fungsinya.</li>
            </ul>
            <div class="fs-3 fw-bolder">TUPOKSI BIDANG PENGEMBANGAN PEMUDA</div>
            <div class="fs-5">
                Bidang Pengembangan Pemuda mempunyai tugas melaksanakan pembinaan dan pengembangan organisasi kepemudaan dan
                kepramukaan serta organisasi/komunitas hobi.Dalam melaksanakan tugas Bidang Pengembangan Pemuda
                menyelenggarakan fungsi sebagai berikut :
            </div>
            <ul class="fs-5" style="list-style-type: lower-alpha;">
                <li> perencanaan kegiatan operasional di bidang pengembangan pemuda;</li>
                <li> pelaksanaan kegiatan di bidang pengembangan pemuda;</li>
                <li> pengoordinasian kegiatan di bidang pengembangan pemuda;</li>
                <li> pengendalian, evaluasi dan pelaporankegiatan di bidang pengembangan pemuda;</li>
                <li> pelaksanaan fungsi lain yang diberikan oleh atasan terkait tugas dan fungsinya.</li>
            </ul>
            <div class="fs-3 fw-bolder">TUPOKSI BIDANG PEMBUDAYAAN PEMUDA</div>
            <div class="fs-5">
                Bidang Pembudayaan Olahraga yang mempunyai tugas melaksanakan pembinaan dan pengembangan keolahragaan
                melalui pembudayaan olahraga. Bidang Pembudayaan Olahraga dalam melaksanakan tugas sebagaimana dimaksud
                dalam ayat (1), menyelenggarakan fungsi :
            </div>
            <ul class="fs-5" style="list-style-type: lower-alpha;">
                <li> perencanaan kegiatan operasional di bidang pembudayaan olahraga;</li>
                <li> pelaksanaan kegiatan di bidang pembudayaan olahraga;</li>
                <li> pengoordinasian kegiatan di bidang pembudayaan olahraga;</li>
                <li> pengendalian, evaluasi dan pelaporan kegiatan di bidang pembudayaan olahraga;</li>
                <li> pelaksanaan fungsi lain yang diberikan oleh atasan terkait tugas dan fungsinya.</li>
            </ul>
            <div class="fs-3 fw-bolder">TUPOKSI BIDANG PENINGKATAN PRESTASI OLAHRAGA</div>
            <div class="fs-5">
                Bidang Peningkatan Prestasi Olahraga mempunyai tugas melaksanakan pembinaan, pengembangan dan pemberdayaan
                peningkatan prestasi serta infrastruktur olahraga.Bidang Peningkatan Prestasi Olahraga dalam melaksanakan
                tugas sebagaimana dimaksud dalam ayat (1), menyelenggarakan fungsi :
            </div>
            <ul class="fs-5" style="list-style-type: lower-alpha;">
                <li> perencanaan kegiatan operasional di bidang peningkatan prestasi olahraga;</li>
                <li> pelaksanaan kegiatan di bidang peningkatan prestasi olahraga;</li>
                <li> pengoordinasian kegiatan di bidang peningkatan prestasi olahraga;</li>
                <li> pengendalian, evaluasi dan pelaporan kegiatan di bidang peningkatan prestasi olahraga;</li>
                <li> pelaksanaan fungsi lain yang diberikan oleh atasan terkait tugas dan fungsinya.</li>
            </ul>
        </div>
    </div>
@endsection
