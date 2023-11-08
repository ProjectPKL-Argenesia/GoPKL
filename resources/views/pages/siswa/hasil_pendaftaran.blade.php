@extends('layouts.user.main')
@section('content')
    @foreach ($penerimaans as $penerimaan)
        @if ($siswas->id == $penerimaan->pembimbing->permohonan->siswa_id)
            <div class="grid m-5 place-content-center">
                <div class="p-5 border border-gray-400 rounded-xl">
                    <div class="flex items-center mb-5 gap-x-2">
                        <img src="{{ asset('storage/' . $penerimaan->perusahaan->image) }}" alt="Image" width="100px" />
                        <div class="flex flex-col">
                            <div class="font-bold">{{ $penerimaan->perusahaan->nama }}</div>
                            <div class="badge badge-outline">6 Bulan</div>
                        </div>
                    </div>
                    <div class="my-5">
                        <div class="text-xs font-bold">{{ $penerimaan->pembimbing->guru->nama }}</div>
                        <div class="text-xs">{{ $penerimaan->perusahaan->alamat }}</div>
                    </div>
                    <div class="flex gap-2 my-5">
                        @php
                            $jurusanArray = explode(', ', $penerimaan->perusahaan->jurusan);
                            $uniqueJurusan = collect($jurusanArray)->unique();
                        @endphp
                        @foreach ($uniqueJurusan as $jurusan)
                            <div class="badge badge-secondary text-xs font-bold px-4 rounded-[8px]">{{ $jurusan }}
                            </div>
                        @endforeach
                    </div>
                    <div class="p-5 my-5 font-bold border border-black rounded-md">Keterangan:
                        {{ $penerimaan->keterangan }}
                    </div>
                    @if ($penerimaan->status)
                        <div class="btn bg-[#198754] hover:bg-[#198754] text-white my-5 font-bold w-full">Anda Diterima
                        </div>
                    @else
                        <div class="btn bg-[#DC3545] hover:bg-[#DC3545] text-white my-5 font-bold w-full">Anda Ditolak</div>
                    @endif
                </div>
            </div>
        @endif
    @endforeach
@endsection
