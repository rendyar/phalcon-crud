<div class="container">
   <div class="row justify-content-center"><br><br>
       <div class="col-12">
            <?php echo $this->tag->form(array('siswa/store', 'role' => 'form')); ?>
               <label for="nama" class="my-2">Nama Lengkap</label>
               <br>
               <input class="form-control" type="text" name="isi_nama">
               <br>
               <label for="kelas" class="my-2">Kelas</label>
               <select class="form-select" aria-label="Default select example" name="isi_kelas">
                  <option selected value="">Pilih Kelas</option>
                  <option value="X">X</option>
                  <option value="XI">XI</option>
                  <option value="XII">XII</option>
               </select>
               <br>
               <label for="jurusan" class="my-2">Jurusan</label>
               <select class="form-select" aria-label="Default select example" name="isi_jurusan">
                     <option selected value="">Pilih Jurusan</option>
                     <option value="Multimedia">Multimedia</option>
                     <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                     <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                  </select>
               <br>
               <button class="btn btn-outline-primary" type="submit">Simpan</button>
               <a href="<?= $this->url->get('siswa') ?>" class="btn btn-outline-danger my-3 mx-2">Kembali</a>
            </form>
       </div>
   </div>
</div>