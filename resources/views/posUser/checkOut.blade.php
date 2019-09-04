@extends('layouts.master')

@section('content')
<div  id="beta" class="main-content">
  <div class="container-fluid">
    <h3 class="page-title">Check Out</h3>
    <!-- Search -->
    <form class=" nav navbar-form navbar-right" action="/checkout" method="GET">
      <div class="input-group">
        <input name="cari" type="text" value="" class="form-control" placeholder="Search ..." autocomplete="off" >
        <span class="input-group-btn"><button type="submit" class="btn btn-primary">Go</button></span>
      </div>
    </form>

    <div class="row">
      <div class="col-md-12">
        <div class="panel">
          <div class="panel-heading">
          </div>

          <div class="panel-body"> 

            <form >
              <div class="form-group">
                @foreach($datas as $pesan)
                <table class="table table-condensed">
                  <thead class="thead-dark">
                    <tr>
                      <th>Kode</th>
                      <th>Pembeli</th>
                      <th>Makanan</th>
                      <th>Minuman</th>
                      <th>Harga</th>
                      <th>Tempat</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>

                  <tbody>

                    <tr>
                      <td>Kons</td>
                      <td>{{$pesan->nama}}</td>
                      <td>
                        @foreach($pesan->makanan as $makanan) 
                        {{$makanan->nama}} {{$makanan->harga}},
                        @endForeach
                      </td>
                      <td>
                        @foreach($pesan->Minuman as $minuman) 
                        {{$minuman->nama}} {{$minuman->harga}},
                        @endForeach
                      </td>
                      <td>{{$pesan->total}}</td>
                      <td>{{$pesan->tempat}}</td>
                      
                      <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal{{$pesan->id}}">
                          Bayar
                        </button> <span>|</span>
                        <a href="/checkout/{{$pesan->id}}/delete"class="btn btn-danger btn-sm">Hapus</a> <span>|</span>
                        <a href="/checkout/{{$pesan->id}}/edit" class="btn btn-warning btn-sm">Edit</a>

                      </td>
                    </tr>
                    
                  </tbody>
                </table>


                <!-- Modal -->
                <div class="modal fade" id="exampleModal{{$pesan->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hasil Cetak</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th scope="col">Nama Pembeli</th>
                              <th scope="col">Makanan</th>
                              <th scope="col">Minuman</th>
                              <th scope="col">Tempat</th>
                              <th scope="col">Total</th>
                            </tr>
                          </thead>
                          <tbody>                            
                            <tr>
                              <td>{{$pesan->nama}}</td>
                              <td>
                                @foreach($pesan->makanan as $makanan)
                                {{$makanan->nama}} {{$makanan->harga}},
                                @endForeach
                              </td>
                              <td>
                                @foreach($pesan->Minuman as $minuman)
                                {{$minuman->nama}} {{$minuman->harga}},
                                @endForeach
                              </td>
                              <td>{{$pesan->tempat}}</td>
                              <td>{{$pesan->total}}</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="modal-footer">
                        <form >
                          <button type="button"  class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button @click="checkout({{$pesan->id}})" type="submit"  class="btn btn-primary">Print</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                @endForeach
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop


@section('js')
<script>
  // const axios = require('axios');
  var app = new Vue({
    el: '#beta',
    methods: {
      checkout(id){
        axios.put('api/print/'+id).then(
          window.open('/print/' +id).window.print()
          ).catch(e => console.log(e))
      },
    }
  })
</script>

@endSection

