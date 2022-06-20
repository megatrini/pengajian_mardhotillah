<title>Pengajian</title>
@extends('layouts.master')
@section('content')
<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              <h1 class="panel-title"><b>Pengajian</b></h1>
              <div class="right">
                <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-default">
              </div>
            </div>
            <div class="panel-body">
              <table align="center" class="table table-hover">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Tanggal</th>
                    <th>Materi Ceramah</th>
                    <th>Penceramah</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data_pengajian as $png )
                  <tr>
                    <td>{{$png->id}}</td>
                    <td>{{$png->tanggal}}</td>
                    <td>{{$png->materi}}</td>
                    <td>{{$png->penceramah}}</td>
                    {{-- {{-- <td> <a href="/bayarzakat/edit/{{$bayarzakat->id_bzkt}}" class="btn btn-warning btn-sm">Edit</a>
                      <a href="/bayarzakat/delete/{{$bayarzakat->id_bzkt}}" class="btn btn-danger btn-sm" onclick="return confirm('Data akan dihapus, apakah anda yakin ?')"> Delete</a>
                    </td> --}}
                  </tr> 
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
{{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Pembayaran Zakat Fitrah</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/bayarzakat/create" method="POST">
          {{csrf_field()}}
          <!-- nama kk -->
          <div class="form-group">
            <label for="exampleInputEmail1">Nama KK</label>
            <input name="nama_kk" type="text" class="form-control" id="exampleInputEmail1" 
            aria-describedby="Nama Muzakki">
          </div>
          <!-- jumlah tanggungan-->
          <div class="form-group">
            <label for="exampleInputEmail1">Jumlah Tanggungan</label>
            <input name="jmlh_tgn" type="text" class="form-control" id="exampleInputEmail1" 
            aria-describedby="Jumlah Tanggungan">
          </div>
          {{-- jenis bayar --}}
          {{-- <div class="form-group">
          <label for="exampleInputEmail1">Kategori</label>
          <select name="jenis_bayar" class="form-control" id="exampleFormControlSelect1">
            <option value="">---Pilih Jenis Bayar---</option>
            <option value="beras">Beras</option>
            <option value="uang">Uang</option>
          </select>
         </div>
          {{-- Jumlah tanggungan bayar --}}
          {{-- <div class="form-group">
            <label for="exampleInputEmail1">Jumlah Tanggungan Bayar</label>
            <input name="jmlh_tgn_byr" type="text" class="form-control" id="exampleInputEmail1" 
            aria-describedby="Jumlah Tanggungan bayar">
          </div>
         {{-- jumlah beras if jenis bayar choose beras --}}
         
         {{-- <div class="form-group">
            <label for="exampleInputEmail1">Jumlah Beras</label>
            <input name="jmlh_beras" type="text 
            class="form-control" id="exampleInputEmail1" class="form-control" aria-describedby="Jumlah Beras">
          </div>
          {{-- jumlah uang if jenis bayar choose uang --}}
          {{-- <div class="form-group">
            <label for="exampleInputEmail1">Jumlah Uang</label>
            <input name="jmlh_uang" type="text" class="form-control" id="exampleInputEmail1" 
            aria-describedby="Jumlah Uang">
          </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div> --}} 
  @stop