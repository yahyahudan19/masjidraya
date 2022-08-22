@extends('admin._page.master')
@section('title','Tambah Kegiatan')
@section('content')
<div class="page-content">
    <div class="main-wrapper">
        <div class="row">
            <div class="col-sm-12 col-md-3">
              <div class="card stat-widget">
                  <div class="card-body">
                      {{-- <h5 class="card-title">Kegiatan</h5> --}}
                      <button class="btn btn-block btn-success m-t-md"><i data-feather="arrow-left-circle"></i>Kembali</button>          
                  </div>
              </div>
            </div>
          </div>   
          {{-- Content --}}
          <div class="row">
            <div class="col">
              <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tambah Kegiatan</h5>
                    <p>Silahkan Tambahkan kegiatan sesuai dengan nama, tanggal, dan tempat.</p>
                    <form class="row g-3 needs-validation" novalidate>
                      <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Name Kegiatan</label>
                        <input type="text" class="form-control" id="validationCustom01" value="Kajian" required>
                        <div class="valid-feedback">
                          Looks good!
                        </div>
                      </div>
                      <div class="col-md-4">
                        <label for="validationCustom02" class="form-label" data-provide="datepicker">Tanggal</label>
                        <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                        <div class="valid-feedback">
                          Looks good!
                        </div>
                      </div>
                      <div class="col-md-4">
                        <label for="validationCustomUsername" class="form-label">Waktu</label>
                        <div class="input-group has-validation">
                          <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                          <div class="invalid-feedback">
                            Please choose a username.
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label for="validationCustom03" class="form-label">City</label>
                        <input type="text" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                          Please provide a valid city.
                        </div>
                      </div>
                      <div class="col-md-3">
                        <label for="validationCustom04" class="form-label">State</label>
                        <select class="form-select" id="validationCustom04" required>
                          <option selected disabled value="">Choose...</option>
                          <option>...</option>
                        </select>
                        <div class="invalid-feedback">
                          Please select a valid state.
                        </div>
                      </div>
                      <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                          Please provide a valid zip.
                        </div>
                      </div>                
                      <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit</button>
                      </div>
                    </form>
                </div>
            </div>
            </div>
          </div>
    </div>
</div>
@stop