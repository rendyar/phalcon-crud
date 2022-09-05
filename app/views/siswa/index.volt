<div class="container">
    <div class="row justify-content-center"><br><br>
        <div class="col-12">
              <a href="{{ url('siswa/create') }}" class="btn btn-primary mt-5">Tambah Siswa</a>
            <br>
            <br>
            <table class="table table-hover">
              <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Jurusan</th>
                </tr>
              </thead>
              <tbody>
                  {% for datasiswa in data %}
                <tr>
                    <td>{{ datasiswa.id_siswa }}</td>
                    <td>{{ datasiswa.nama_lengkap }}</td>
                    <td>{{ datasiswa.kelas }}</td>
                    <td>{{ datasiswa.jurusan }}</td>
                  <td>
                      <a href="{{ url('siswa/edit/' ~ datasiswa.id_siswa) }}" class="btn btn-info btn-small">Edit</a>
                      <a href="{{ url('siswa/delete/' ~ datasiswa.id_siswa) }}" class="btn btn-danger btn-small">Hapus</a>
                  </td>
                </tr>
                {% endfor %}
              </tbody>
            </table>
        </div>
    </div>
</div>