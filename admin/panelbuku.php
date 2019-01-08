<?php
$query=mysqli_query($koneksi, "SELECT * FROM buku ORDER BY id DESC") or die(mysqli_error($koneksi));
?>

 <!--inner block start-->
 <div style="margin-left: 218px;height:100vh;"class="inner-block">

        <!--FORM Tambah Buku-->
        <div class="chit-chat-layer1">
        	<div class="col-md-6 chit-chat-layer1-left">
            <div class="work-progres">
              <div class="chit-chat-heading">
                Tambah Buku
              </div><br>
              <form class="form-horizontal" action="proses/proses_tambah.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="control-label col-sm-2">Judul:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="judul" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Penulis:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="penulis" required>
                  </div>
                </div>
                <div class="form-group">
                  <table style="margin-left:150px;" border="0px">
                    <tr>
                      <td> <b>Tahun terbit</b> </td>
                      <td>
                        <div class="col-sm-10">
                          <select style="padding:10px;" name="year" id="year"></select>
                          <script>
                            var start = 1900;
                            var end = new Date().getFullYear();
                            var options = "";
                            for(var year = start ; year <=end; year++){
                            options += "<option>"+ year +"</option>";
                            }
                            document.getElementById("year").innerHTML = options;
                          </script>
                        </div>
                      </td>
                      <td> <b>Genre</b> </td>
                      <td>
                        <div class="col-sm-10">
                          <select style="padding:10px;" name="genre">
                            <option value="fiksi">Fiksi</option>
                            <option value="nonfiksi">Non-Fiksi</option>
                            <option value="komedi">Komedi</option>
                            <option value="percintaan">Percintaan</option>
                            <option value="thriller">Thriller</option>
                          </select>
                        </div>
                      </td>
                    </tr>
                  </table>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Sinopsis:</label>
                  <div class="col-sm-10">
                    <textarea rows="8" cols="62" placeholder="Buku ini menceritakan apa sih?" name="mytextarea"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">File:</label>
                  <div class="col-sm-10">
                    <input type="file" name="file" style="padding:5px 0px;" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Foto Karyawan:</label>
                  <div class="col-sm-10">
                    <input type="file" name="cover" style="padding:5px 0px;" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" value="Submit" class="btn btn-default"></input>
                  </div>
                </div>
              </form>
            </div>
            </div>
          </div>

          <!--FORM Tambah Buku end here-->

          <!-- DAFTAR DATA BUKU -->
          <div class="chit-chat-layer1">
          	<div class="col-md-6 chart-layer1-right">
              <div class="work-progres">
                <div class="chit-chat-heading">
                  Data Buku-Buku
                </div><br>
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Tahun</th>
                        <th>Genre</th>
                        <th>Sinopsis</th>
                        <th>Cover</th>
                        <th>File</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=1; ?>
                      <?php while($data=mysqli_fetch_assoc($query)){ ?>
                      <tr>
                        <td><?php echo $i++;?></td>
                        <td><?php echo $data['judul'];?></td>
                        <td><?php echo $data['penulis'];?></td>
                        <td><?php echo $data['tahun'];?></td>
                        <td><?php echo $data['genre'];?></td>
                        <td style="width:50%;"><?php echo substr($data["sinopsis"],0,50)?>...</td>
                        <td><?php echo $data['cover'];?></td>
                        <td><?php echo $data['file'];?></td>
                        <td>
                          <a class="label label-info" href="edit.php?id=<?php echo $data['id'];?>">EDIT</a>
                          <a>  ||  </a>
                          <a class="label label-danger" href="proses\hapus.php?id=<?php echo $data['id'];?>">HAPUS</a>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- DAFTAR DATA BUKU end here-->

        </div>
        <!--inner block end here-->
