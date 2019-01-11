<?php
$query=mysqli_query($koneksi, "SELECT * FROM akun ORDER BY id DESC") or die(mysqli_error($koneksi));
?>
<!--inner block start-->
<div style="margin-left: 218px;height:80vh;"class="inner-block">

       <!--mainpage chit-chating-->
       <div class="chit-chat-layer1">
         <div class="col-md-6 chit-chat-layer1-left">
           <div class="work-progres">
             <div class="chit-chat-heading">
               Data Buku-Buku
             </div><br>
             <div class="table-responsive">
               <table class="table table-hover">
                 <thead>
                   <tr>
                     <th>No.</th>
                     <th>Username</th>
                   </tr>
                 </thead>
                 <tbody>
                   <?php $i=1; ?>
                   <?php while($data=mysqli_fetch_assoc($query)){ ?>
                   <tr>
                     <td><?php echo $i++;?></td>
                     <td><?php echo $data['username'];?></td>
                     <td>
                       <a class="label label-danger" href="proses\hapus-user.php?id=<?php echo $data['id'];?>">HAPUS</a>
                     </td>
                   </tr>
                   <?php } ?>
                 </tbody>
               </table>
             </div>
           </div>
           </div>
         </div>
         <!--main page chit chating end here-->

       </div>
       <!--inner block end here-->
