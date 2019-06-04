
			<div style="">
				<?php 
					if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
						echo '<div id="pesan" class="alert alert-success" style="display:none;">'.$_SESSION['pesan'].'</div>';
					}
					$_SESSION['pesan'] = '';
				?>
			</div>
	
			<p>
				<h1>Data Siswa</h1>
				<a class="btn btn-primary pull-right" style="margin-bottom: 10px;" href="form_siswa.html">Tambah</a>
			</p>
			<table id="example1" class="table table-responsive table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>NIS</th>
						<th>Nama</th>
						<th>Kelas</th>
						<th>Jenis Kelamin</th>
						<th>Telepon</th>
						<th>Alamat</th>
						<th>Opsi</th>
					</tr>
				</thead>
					<?php
						$no = 1;
						$data = mysqli_query ($koneksi, " select *
																
														  from 
														  siswa 
														  order by id_siswa DESC");
						while ($row = mysqli_fetch_array ($data))
						{
					?>
				<tbody>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $row['id_siswa']; ?></td>
						<td><?php echo $row['nama']; ?></td>
						<td><?php echo $row['kelas']; ?></td>
						<td><?php echo $row['jenis_kelamin']; ?></td>
						<td><?php echo $row['telepon']; ?></td>
						<td><?php echo $row['alamat']; ?></td>
						<td>
							<a href="edit_siswa-<?php echo $row['id_siswa']; ?>.html">Edit</a> |
							<a href="hapus_siswa-<?php echo $row['id_siswa']; ?>.html">Hapus</a>
						</td>
					</tr>
				</tbody>
					
				
				<?php
					}
				?>
			</table>
			<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
