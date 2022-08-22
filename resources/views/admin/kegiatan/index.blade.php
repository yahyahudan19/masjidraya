@extends('admin._page.master')
@section('title','Kegiatan')
@section('content')
<div class="page-content">
    <div class="main-wrapper">
        <div class="row">
            <div class="col-sm-12 col-md-3">
              <div class="card stat-widget">
                  <div class="card-body">
                      <h5 class="card-title">Kegiatan</h5>
                      <div class="transactions-list">
                        <div class="tr-item">
                          <div class="tr-company-name">
                            <div class="tr-icon tr-card-icon tr-card-bg-success text-success">
                              <i data-feather="trending-up"></i>
                            </div>
                            <div class="tr-text">
                              <h4>6</h4>
                              <p>Jumlah Kegiatan</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="btn btn-block btn-warning m-t-md" data-bs-toggle="modal" data-bs-target="#modalKegiatan"><i data-feather="plus-circle"></i>Tambah</button>          
                  </div>
              </div>
            </div>
          </div>   
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Daftar Kegiatan</h5>
                    {{-- <p>When using tables to display data, you will often wish to display column information in groups. DataTables fully supports colspan and rowspan in the table's header, assigning the required order listeners to the TH element suitable for that column.</p> --}}
                    <table id="zero-conf" class="table invoice-table" style="width:100%">
                        <thead>
                            <tr>
                                <th>Kegiatan</th>
                                <th>Deskripsi</th>
                                <th>Waktu</th>
                                <th>Thumbnail</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Kajian Rutin Nawak Hijrah</td>
                                <td>Ini Deskripsi</td>
                                <td>22 Maret 2022 16.00 </td>
                                <td>Thumbnail </td>
                                <td>
                                    <a href="#"><i data-feather="edit"></i></a>
                                    <a href="#"><i data-feather="eye"></i></a>
                                    <a href="#"><i data-feather="trash-2"></i></a>
                                </td>
                            </tr>                                                       
                            <tr>
                                <td>Kajian Rutin Muslimah</td>
                                <td>Ini Deskripsi</td>
                                <td>22 Maret 2022 16.00 </td>
                                <td>Thumbnail </td>
                                <td>
                                    <a href="#"><i data-feather="edit"></i></a>
                                    <a href="#"><i data-feather="eye"></i></a>
                                    <a href="#"><i data-feather="trash-2"></i></a>
                                </td>
                            </tr>                                                       
                        </tbody>                        
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<!-- Modal Kegiatan -->
<div class="modal fade" id="modalKegiatan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          Woohoo, you're reading this text in a modal!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@stop