 <?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=Laporan.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
 
 <table border="1" width="100%">

  <thead>

   <tr>

    <th>Nama Kegiatan</th>
    <th>Jenis Kegiatan</th>
    <th>Tanggal Kegiatan</th>
    <th>Jenis Anggaran</th>
    <th>Status</th>
    <th>Jumlah</th>
    <th>Submited</th>
    <th>Tanggal Submit</th>

  </tr>

</thead>

<tbody>

 <?php $i=1; foreach($tbl_kegiatan as $tbl_kegiatan) { ?>
 <tr>
 <td><?php echo $tbl_kegiatan->nama_kegiatan; ?></td>
  <td><?php echo $tbl_kegiatan->jenis_kegiatan; ?></td>
  <td><?php echo $tbl_kegiatan->tanggal; ?></td>
  <td><?php echo $tbl_kegiatan->jenis_anggaran; ?></td>
  <td><?php echo $tbl_kegiatan->status; ?></td>
  <td><?php echo $tbl_kegiatan->jumlah; ?></td>
  <td><?php echo $tbl_kegiatan->submited; ?></td>
  <td><?php echo $tbl_kegiatan->tanggal_submit; ?></td>
</tr>
<?php $i++; } ?>

</tbody>

</table>