<?php
include "header.php";
include "proses\koneksi.php";

$id=$_GET['id'];
$query=mysqli_query($koneksi, "SELECT * FROM buku WHERE id='$id'") or die(mysqli_error($koneksi));
$data=mysqli_fetch_assoc($query);
?>

 <!--inner block start-->
 <div style="margin-left: 218px;height:100vh;"class="inner-block">

        <!--FORM Edit Buku-->
        <div class="chit-chat-layer1">
        	<div class="col-md-6 chit-chat-layer1-left">
            <div class="work-progres">
              <div class="chit-chat-heading">
                Edit Buku
              </div><br>
              <form class="form-horizontal" action="proses/proses_edit.php" method="post" enctype="multipart/form-data">
                <div>
                  <input type="hidden" name="id" value="<?php echo $data['id'];?>">
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Judul:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="judul" value="<?php echo $data['judul'];?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Penulis:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="penulis" value="<?php echo $data['penulis'];?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <table style="margin-left:150px;" border="0px">
                    <tr>
                      <td> <b>Tahun terbit</b> </td>
                      <td>
                        <div class="col-sm-10">
                          <select style="padding:10px;" name="year" id="year" value="<?php echo $data['tahun'];?>"></select>
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
                          <select style="padding:10px;" name="genre" value="<?php echo $data['genre'];?>">
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
                    <textarea rows="8" cols="62" placeholder="Buku ini menceritakan apa sih?" name="mytextarea"><?php echo $data['sinopsis'];?></textarea>
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
          <!--FORM Edit Buku end here-->

          <div class="chit-chat-layer1">
            <div class="col-md-6 chart-layer1-right">
              <div class="work-progres">
                <div class="chit-chat-heading">
                  Edit File
                </div><br>
                <form class="form-horizontal" action="proses/proses_edit-file.php" method="post" enctype="multipart/form-data">
                  <div>
                    <input type="hidden" name="id" value="<?php echo $data['id'];?>">
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2">File:</label>
                    <div class="col-sm-10">
                      <input type="file" name="file" style="padding:5px 0px;" value="<?php echo $data['file'];?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <input type="submit" value="Upload" class="btn btn-default"></input>
                    </div>
                  </div>
                </form>

                <div class="chit-chat-heading">
                  Edit Cover
                </div><br>
                <form class="form-horizontal" action="proses/proses_edit-cover.php" method="post" enctype="multipart/form-data">
                  <div>
                    <input type="hidden" name="id" value="<?php echo $data['id'];?>">
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2">Cover:</label>
                    <div class="col-sm-10">
                      <input type="file" name="cover" style="padding:5px 0px;"value="<?php echo $data['cover'];?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <input type="submit" value="Upload" class="btn btn-default"></input>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

        </div>
        <!--inner block end here-->
        <?php include "footer.html" ?>
