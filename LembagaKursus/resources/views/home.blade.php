@extends('layouts.global')

@section('title')
Ini Halaman Home
@endsection

@section('content')
<div class="container px-4 py-5">
<h2 class="pb-2 border-bottom">Good Bye Worlds!</h2>
<table class="table">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Nama</th>
<th scope="col">jenis kelas</th>
<th scope="col">tanggal masuk</th>
</tr>
</thead>
<tbody>
@foreach ($peserta as $pesertas)
<tr>
<th scope="row">{{ $pesertas->id }}</th>
<td>{{ $pesertas->Nama }}</td>
<td>{{ $pesertas->jenis_kelas}}</td>
<td>{{ pesertas->lembaga->nama }}</td>
{{-- Cukup Panggil seperti di atas --}}
</tr>
@endforeach
</tbody>
</table>
</div>
@endsection