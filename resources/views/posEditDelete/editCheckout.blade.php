@extends('layouts.master')

@section('content')
<div id="beta" class="main-content">
  <div class="container-fluid">
    <h3 class="page-title">Pesanan</h3>
    <div class="row">
      <div class="col-md-12">
        <div class="panel">
          <div class="panel-heading">

          </div>
          <div class="panel-body"> 
            <form action="/checkout/{{$datas -> id}}/update" method="POST">
              {{csrf_field()}}
              <div class="form-group">

                <label for="namaPemesan">Nama</label>
                <input name="nama" type="text" class="form-control" id="namaPemesan" placeholder="Pemesan" autocomplete="off" required="" value="{{$datas -> nama}}">
              </div>
              <div class="form-group">
                <label for="tempatPemesan">Tempat</label>
                <input name="tempat" type="text" class="form-control" id="tempatPemesan" placeholder="Tempat" autocomplete="off" required="" value="{{$datas -> tempat}}">
              </div>

              <!-- Tabel Makanan -->
              <div class="form-group">
                <h4 class="badge">Makanan</h4>
                <table class="table table-condensed">
                  <thead class="thead-dark">
                    <tr>
                      <th>Kode Makanan</th>
                      <th>Nama</th>
                      <th>Harga</th>
                      <th>Jumlah</th>
                      <th>Beli</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($makanans as $makanan)
                    <tr>
                      <td>Mk</td>
                      <td>{{$makanan->nama}}</td>
                      <td>{{$makanan->harga}}</td>
                      <td>
                       <select  name="jumlah1" id="jumlah{{$makanan->id}}" class="form-control">
                        <option value="{{$makanan->harga * 1}}">1</option>
                        <option value="{{$makanan->harga * 2}}">2</option>
                        <option value="{{$makanan->harga * 3}}">3</option>
                        <option value="{{$makanan->harga * 4}}">4</option>
                        <option value="{{$makanan->harga * 5}}">5</option>
                        <option value="{{$makanan->harga * 6}}">6</option>
                        <option value="{{$makanan->harga * 7}}">7</option>
                        <option value="{{$makanan->harga * 8}}">8</option>
                        <option value="{{$makanan->harga * 9}}">9</option>
                        <option value="{{$makanan->harga * 10}}">10</option>
                      </select>
                    </td>
                    <td>
                      <input @change="pushId({{$makanan->id}}), pushJumlah( document.getElementById('jumlah{{$makanan->id}}')), jj(document.getElementById('jumlah{{$makanan->id}}'))" name="beli[]" value="{{$makanan->id}}" class="form-check-input" type="checkbox" id="cd{{$makanan->id}}">
                      <input type="checkbox" id="cds{{$makanan->id}}" value="{{$makanan->id}}" name="beli[]" class="hidden"> 
                    </td>
                  </tr>
                  @endforeach
                </table>
              </div>

              <!-- Tabell Minuman -->
              <div class="form-group">
                <h3 class="badge">Minuman</h3>
                <table class="table table-condensed">
                  <thead class="thead-dark">
                    <tr>
                      <th>Kode Minuman</th>
                      <th>Nama</th>
                      <th>Harga</th>
                      <th>Jumlah</th>
                      <th>Beli</th>

                    </thead>
                    <tbody>
                      @foreach($minumans as $minuman)
                      <tr>
                        <td>Mn</td>
                        <td>{{$minuman->nama}}</td>
                        <td>{{$minuman->harga}}</td>

                        <td>
                         <select  name="jumlah" id="jumlahM{{$minuman->id}}" class="form-control">
                          <option value="{{$minuman->harga * 1}}">1</option>
                          <option value="{{$minuman->harga * 2}}">2</option>
                          <option value="{{$minuman->harga * 3}}">3</option>
                          <option value="{{$minuman->harga * 4}}">4</option>
                          <option value="{{$minuman->harga * 5}}">5</option>
                          <option value="{{$minuman->harga * 6}}">6</option>
                          <option value="{{$minuman->harga * 7}}">7</option>
                          <option value="{{$minuman->harga * 8}}">8</option>
                          <option value="{{$minuman->harga * 9}}">9</option>
                          <option value="{{$minuman->harga * 10}}">10</option>
                        </select>
                      </td>
                      <td>
                        <input @change="pushIdMinuman({{$minuman->id}}), pushJumlahMinuman( document.getElementById('jumlahM{{$minuman->id}}')), jj(document.getElementById('jumlahM{{$minuman->id}}'))" name="beli1[]" value="{{$minuman->id}}" class="form-check-input" type="checkbox" id="cdm{{$minuman->id}}">
                        <input type="checkbox" id="cdsm{{$minuman->id}}" value="{{$minuman->id}}" name="beli1[]" class="hidden"> 
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <input type="text" name="bacot" class="hidden" :value="bacot">
              </div>

              <div class="form-group">
                <label for="">Konfirmasi</label>
                <input :disabled="seti" type="checkbox" @change="ubah(),ubahM()" >
              </div>
                <button v-if="konfir" type="submit" class="btn btn-success">Tambah</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endSection

@section('js')
<script>
  // const axios = require('axios');
  var app = new Vue({
    el: '#beta',
    data(){
      return{
        jumlah: [],
        id: [],
        jumlahMinuman : [],
        idMinuman: [],
        konfir: false,
        seti:false,
        bacot:0
      }
    },
    methods: {
      jj(val){
        this.bacot += parseFloat(val.value);
      },
      pushJumlah(data){
        this.jumlah.push(data.value)
        console.log(this.jumlah)
        data.disabled = true
      },
      pushJumlahMinuman(data){
        this.jumlahMinuman.push(data.value)
        console.log(this.jumlahMinuman)
        data.disabled = true
      },
      pushId(data){
        this.id.push(data)
        console.log(this.id)
        data.disabled = true
        document.getElementById('cd'+data).disabled = true
        document.getElementById('cds'+data).checked = true
      },
      pushIdMinuman(data){
        this.idMinuman.push(data)
        console.log(this.idMinuman)
        data.disabled = true
        document.getElementById('cdm'+data).disabled = true
        document.getElementById('cdsm'+data).checked = true
      },
      ubah(){
        for (let i=0; i<this.id.length; i++){
          axios.put('api/makanan/'+this.id[i],{
            jumlah : this.jumlah[i]
          }).then(()=>{
            Swal.fire("Mantul", "success", "success")
          }).catch(e => console.log(e))
        }
        this.konfir = true
        this.seti = true
      },
      ubahM(){
        for (let i=0; i<this.idMinuman.length; i++){
          axios.put('api/minuman/'+this.idMinuman[i],{
            jumlah : this.jumlahMinuman[i]
          }).then(()=>{
            Swal.fire("Mantul", "success", "success")
          }).catch(e => console.log(e))
        }
        this.konfir = true
        this.seti = true
      },
    }
  })
</script>  
@stop