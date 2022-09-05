<div class="container">
   <div class="row justify-content-center"><br><br>
       <div class="col-12">
            <?php echo $this->tag->form(array('siswa/update', 'role' => 'form')); ?>
               <input type="hidden" name="id_siswa" value=<?php echo $id ?>>
               <label for="nama" class="my-2">Nama Lengkap</label>
               <br>
               <input class="form-control" type="text" name="isi_nama" value=<?php echo $nama ?>>
               <br>
               <label for="kelas" class="my-2">Kelas</label>
               <select class="form-select" aria-label="Default select example" name="isi_kelas" value=<?php echo $kelas ?>>
                  <option selected value="<?php echo $kelas ?>"><?php echo $kelas ?></option>
                  <option value="X">X</option>
                  <option value="XI">XI</option>
                  <option value="XII">XII</option>
               </select>
               <br>
               <label for="jurusan" class="my-2">Jurusan</label>
               <select class="form-select" aria-label="Default select example" name="isi_jurusan">
                     <option selected value="<?php echo $jurusan ?>"><?php echo $jurusan ?></option>
                     <option value="Multimedia">Multimedia</option>
                     <option value="Rekaysa Perangkat Lunak">Rekaysa Perangkat Lunak</option>
                     <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                  </select>
               <br>
               <button class="btn btn-outline-primary" type="submit">Simpan</button>
               <a href="{{ url('siswa') }}" class="btn btn-outline-danger my-3 mx-2">Kembali</a>
            </form>
       </div>
   </div>
</div>