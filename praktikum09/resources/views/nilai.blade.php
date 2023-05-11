@php
    $nama = 'Jia';
    $nilai = 98;
@endphp

@if ($nilai >= 60)
    @php
        $ket = "Lulus";
    @endphp
@else
    @php 
        $ket = "Gagal";
    @endphp
    
@endif
siswa {{ $nama }} dengan nilai {{ $nilai }} dinyatakan {{ $ket }}
