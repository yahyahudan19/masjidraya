@extends('admin._page.master')
@section('title','Kegiatan')
@section('content')
<div class="page-content">
    <div class="main-wrapper">
        <div class="row">
            <div class="col-sm-12 col-md-12">
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
                      <button class="btn btn-block btn-warning m-t-md"><i data-feather="plus-circle"></i>Tambah</button>          
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
                    <table id="zero-conf" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Salary</th>
                                <th>Office</th>
                                <th>Extn.</th>
                                <th>E-mail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>$320,800</td>
                                <td>Edinburgh</td>
                                <td>5421</td>
                                <td>t.nixon@datatables.net</td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>$170,750</td>
                                <td>Tokyo</td>
                                <td>8422</td>
                                <td>g.winters@datatables.net</td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>$86,000</td>
                                <td>San Francisco</td>
                                <td>1562</td>
                                <td>a.cox@datatables.net</td>
                            </tr>                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Salary</th>
                                <th>Office</th>
                                <th>Extn.</th>
                                <th>E-mail</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@stop