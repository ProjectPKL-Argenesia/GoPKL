@extends('layouts.admin.main')

@section('content')
    <div>
        <div class="form-control p-7 grid justify-end">
            <label class="label">
                <span class="label-text text-black">Cari Siswa :</span>
            </label>
            <input type="text" placeholder="Masukkan data yang ingin anda cari" class="input input-bordered w-72 text-sm" />
        </div>
        <div class="overflow-x-auto p-7">
            <table class="table table-zebra">
                <!-- head -->
                <thead>
                    <tr class="border-b border-black text-sm text-black">
                        <th></th>
                        <th>Email</th>
                        <th>Nama</th>
                        <th>Verifikasi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswas as $siswa)
                        @if ($siswa->user->hasRole('siswa'))
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $siswa->user->email }}</td>
                                <td>{{ $siswa->nama }}</td>
                                <td class="">
                                    <button class="btn btn-primary btn-sm">info</button>
                                    <button class="btn btn-warning btn-sm">edit</button>
                                    <button class="btn btn-error btn-sm">hapus</button>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
