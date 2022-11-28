<!-- Menghubungkan dengan view template master -->
@extends('admin_master')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('admin_konten')

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Data Mobil</h4> </div> 
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Data Mobil</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Data Mobil</h3>
                            <div class="col-md-10">                                
                            </div>
                            <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#tambah">Tambah Mobil</button>
                            <div class="table-responsive">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Tipe</th>
                                            <th>Durasi</th>
                                            <th>Fasilitas</th>
                                            <th>Warna</th>
                                            <th>Kapasitas</th>
                                            <th>Transmisi</th>
                                            <th>Gambar</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($dat as $dt)
                                        <tr >
                                            <td>{{$dt->nama}}</td>
                                            <td>{{$dt->harga}}</td>
                                            <td>{{$dt->tipe}}</td>
                                            <td>{{$dt->durasi}}</td>
                                            <td>{{$dt->fasilitas}}</td>
                                            <td>{{$dt->warna}}</td>
                                            <td>{{$dt->kapasitas}}</td>
                                            <td>{{$dt->transmisi}}</td>
                                            <td> <img class="img" height="100px" src="images/mobil/{{$dt->gambar}}" alt=""> </td>
                                            <td>
                                                                                      
                                              <button type="submit" class="btn-sm btn-success" data-toggle="modal" data-target="#edit{{$dt->id}}"><i class="fa fa-pencil"></i> </button>                                              
                                              &nbsp; 
                                              <form action="adminmobil/{{ $dt->id }}" method="post">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="Delete" > 
                                            <Button type="submit" class="btn-sm btn-danger" onclick="return confirm('Yakin Hapus?')"><i class="fa fa-trash"></i></button>
                                            </form>

                                              <form action="{{ route('adminmobil.update',$dt->id) }}" method="post" enctype="multipart/form-data">
                                              <input type="hidden" name="_method" value="PUT">
        {{csrf_field()}}
          <div class="modal fade" id="edit{{$dt->id}}">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title">Edit Data Mobil</h5>
                          <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                          <div class="modal-body">
                            <input type="hidden" name="bookId" id="bookId" />
                          </div>
                      </div>
                      <div class="modal-body">
                      <div class="form-group">                                        
                        <div class="form-group">
                        <label for="example-text-input" class="col-form-label">Nama</label>
                        <input class="form-control" type="text" value="{{$dt->nama}}" name="nama">
                        </div>
                        <div class="form-group">
                        <label for="example-text-input" class="col-form-label">Harga</label>
                        <input class="form-control" type="number" value="{{$dt->harga}}" name="harga">
                        </div>
                        <div class="form-group">
                        <label for="example-text-input" class="col-form-label">Tipe</label>
                        <input class="form-control" type="text" value="{{$dt->tipe}}" name="tipe">
                        </div>                                            
                        <div class="form-group">
                        <label for="example-text-input" class="col-form-label">Durasi</label>
                        <input class="form-control" type="text" value="{{$dt->durasi}}" name="durasi">
                        </div>
                        <div class="form-group">
                        <label for="example-text-input" class="col-form-label">Fasilitas</label>
                        <input class="form-control" type="text" value="{{$dt->fasilitas}}" name="fasilitas">
                        </div>
                        <div class="form-group">
                        <label for="example-text-input" class="col-form-label">Warna</label>
                        <input class="form-control" type="text" value="{{$dt->warna}}" name="warna">
                        </div>
                        <div class="form-group">
                        <label for="example-text-input" class="col-form-label">Kapasitas</label>
                        <input class="form-control" type="text" value="{{$dt->kapasitas}}" name="kapasitas">
                        </div>
                        <div class="form-group">
                        <label for="example-text-input" class="col-form-label">Transmisi</label>
                        <input class="form-control" type="text" value="{{$dt->transmisi}}" name="transmisi">
                        </div>
                        <div class="form-group">
                        <label for="example-text-input" class="col-form-label">Gambar</label>
                        <input class="form-control" type="file" value="{{$dt->gambar}}" name="file">
                        </div>
                        <div class="form-footer">
                        <button type="submit" class="btn btn-primary mb-3" ><i class="ti-save"></i> Simpan</button> &nbsp;
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Batal</button>
                        </div>
                  </div>
              </div>
          </div>
        </div>
        </form>

                                              </td></td>
                                        </tr>
                                        @endforeach
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
           
        </div>

        <!-- /#page-wrapper -->
    </div>
    <form action="#" method="post">
          <div class="modal fade" id="hapus">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title">Konfirmasi</h5>
                          <div class="modal-body">
                            <input type="hidden" name="bookId" id="bookId" />
                          </div>
                      </div>
                      <div class="modal-body">
                          <p>Apakah anda yakin ingin menghapus data ini ?</p>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                          <button type="submit" class="btn btn-primary">Hapus</button>
                      </div>
                  </div>
              </div>
          </div>        
      </form>
    <form action="adminmobil" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
          <div class="modal fade" id="tambah">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title">Input Data Mobil</h5>
                          <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>                          
                      </div>
                      <div class="modal-body">
                      <div class="form-group">                                        
                        <div class="form-group">
                        <label for="example-text-input" class="col-form-label">Nama </label>
                        <input class="form-control" type="text" value="" name="nama">
                        </div>
                        <div class="form-group">
                        <label for="example-text-input" class="col-form-label">Harga</label>
                        <input class="form-control" type="number" value="" name="harga">
                        </div>
                        <div class="form-group">
                        <label for="example-text-input" class="col-form-label">Tipe</label>
                        <input class="form-control" type="text" value="" name="tipe">
                        </div>                                            
                        <div class="form-group">
                        <label for="example-text-input" class="col-form-label">Durasi</label>
                        <input class="form-control" type="text" value="" name="durasi">
                        </div>
                        <div class="form-group">
                        <label for="example-text-input" class="col-form-label">Fasilitas</label>
                        <input class="form-control" type="text" value="" name="fasilitas">
                        </div>
                        <div class="form-group">
                        <label for="example-text-input" class="col-form-label">Warna</label>
                        <input class="form-control" type="text" value="" name="warna">
                        </div>
                        <div class="form-group">
                        <label for="example-text-input" class="col-form-label">Kapasitas</label>
                        <input class="form-control" type="text" value="" name="kapasitas">
                        </div>
                        <div class="form-group">
                        <label for="example-text-input" class="col-form-label">Transmisi</label>
                        <input class="form-control" type="text" value="" name="transmisi">
                        </div>
                        <div class="form-group">
                        <label for="example-text-input" class="col-form-label">Gambar</label>
                        <input class="form-control" type="file" value="" name="file">
                        </div>
                        <div class="form-footer">
                        <button type="submit" class="btn btn-primary mb-3"><i class="ti-save"></i> Simpan</button> &nbsp;
                        <button type="reset" class="btn btn-dark mb-3"><i class="ti-reload"></i> Reset</button>
                        </div>
                  </div>
              </div>
          </div>
        </div>
        </div>
        </form>
        
        <form>
          
        </div>
        </form>
@endsection