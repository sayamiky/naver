<div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            Pengguna Aplikasi <small>(Edit, Tambah & Hapus Pengguna)</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 <?php echo anchor('kamar/post','Tambah tipe',array('class'=>'btn btn-danger btn-sm')) ?> 
                             </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Jenis</th>
                                                <th>Nama Kamar</th>
                                                <th>Foto Kamar</th>
                                                <th>Deskripsi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr class="gradeU">
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $r->namajenis; ?></td>
                                            <td><?php echo $r->namakamar; ?></td>
                                            <td><?php echo $r->fotokamar; ?></td>
                                            <td><?php echo $r->deskripsi; ?></td>
                                            <td>
                                            <a  href="<?php echo site_url('kamar/post/'.$r->idkamar); ?>"
                                            <i class="fa fa-edit"></i></a> &nbsp;
                                            <a  href="<?php echo site_url('kamar/delete/'.$r->idkamar);?>" onclick="return confirm('Yakin Ingin Menghapus ?')"> <i class="fa fa-times"></i></a>
                                          </td>
                                            </tr>
                                        <?php $no++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /. ROW  -->