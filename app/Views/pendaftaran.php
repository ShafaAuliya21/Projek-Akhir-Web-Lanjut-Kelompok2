<div class="container-fluid">
            <!-- Page Heading -->
            <div class="heading d-flex justify-content-between">
              <h1 class="h3 mb-4 text-gray-800">Tambah Data Obat</h1>
              <a href="data-obat.php">
                <button class="btn btn-danger">Batal</button>
              </a>
            </div>

            <div class="form-box">
              <form action="../proses_tambah_obat.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-6">
                    <div class="input-box">
                      <label>Kode Obat</label><br />
                      <input
                        type="text"
                        name="kode_obat"
                        placeholder="masukan kode obat"
                        required
                      />
                    </div>
                    <div class="input-box">
                      <label>Nama Obat</label><br />
                      <input
                        type="text"
                        name="nama_obat"
                        placeholder="masukan nama obat"
                        required
                      />
                    </div>
                    <div class="input-box">
                      <label>Kategori</label><br />
                      <select
                        class="form-select"
                        aria-label="Default select example"
                        name="kategori"
                        required
                      >
                        <option selected>Pilih Kategori</option>
                        <option value="Bebas">Bebas</option>
                        <option value="Terbatas">Terbatas</option>
                        <option value="Keras">Keras</option>
                      </select>
                    </div> 
                    <div class="input-box">
                      <label>Stok</label><br />
                      <input
                        type="number"
                        name="stok"
                        placeholder="masukan stok obat"
                        required
                      />
                    </div>  
                  </div>
                  <div class="col-6">
                    <div class="input-box">
                        <label>Harga Beli</label><br />
                        <input
                            type="number"
                            name="harga_beli"
                            placeholder="masukan harga beli"
                            required
                        />
                    </div>
                    <div class="input-box">
                        <label>Harga Jual</label><br />
                        <input
                            type="number"
                            name="harga_jual"
                            placeholder="masukan harga jual"
                            required
                        />
                    </div>
                    <div class="input-box">
                      <label>Status</label><br />
                      <select
                        class="form-select"
                        aria-label="Default select example"
                        name="status"
                        required
                      >
                        <option selected>Pilih Status</option>
                        <option value="Tersedia">Tersedia</option>
                        <option value="Hampir Habis">Hampir Habis</option>
                        <option value="Habis">Habis</option>
                      </select>
                    </div> 
                    <button  type="submit" class="btn btn-success">
                      Tambah
                    </button>
                  </div>