<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Acara Kegiatan</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-tagihan" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Acara</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Acara</th>
						<th>Detail</th>
						<th>Tanggal</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
			  $sql = $koneksi->query
			  ("SELECT * FROM tb_acara");
			  while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['acara']; ?>-
							<?php echo $data['detail']; ?>
						</td>
						<td>
							<?php echo $data['tanggal']; ?>
						</td>					
						<td>
							<a href="?page=detail-acara&kode=<?php echo $data['id_acara']; ?>" title="Detail"
							 class="btn btn-info btn-sm">
								<i class="fa fa-user"></i>
							</a>
							<a href="?page=edit-acara&kode=<?php echo $data['id_acara']; ?>" title="Ubah"
							 class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=del-acara&kode=<?php echo $data['id_acara']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
							 title="Selesai" class="btn btn-danger btn-sm">
								<i class="fa-solid fa-credit-card"></i>
								</>
						</td>
					</tr>

					<?php
			 		}
            		?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body -->