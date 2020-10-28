@extends('dashboard.index')
@section('title', 'ADMIN PUSATNUSA')

    @section('content')

    <div class="container">

        {{-- DATA AKUN --}}
        @foreach ($ShowUser as $user)
        <div class="table-responsive" >
            <table class="table table-bordered table-striped text-center" >
                    <tr>
                        <b><th colspan="2" class="bg-primary text-light">DATA AKUN</th></b>
                    </tr>
                    <tr>
                        <th scope="col">ID AKUN</th>
                        <td scope="col">{{$user->id}}</td>
                    </tr>
                    <tr>
                        <th scope="col">NAMA AKUN</th>
                        <td scope="col">{{$user->name}}</td>
                    </tr>
                    <tr>
                        <th scope="col">EMAIL AKUN</th>
                        <td scope="col">{{$user->email}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        @endforeach

        <br/><br/>

        {{-- DATA PROFILE --}}
        @foreach ($ShowAnggota1 as $anggota)
        <div class="table-responsive" >
            <table class="table table-bordered table-striped text-center" >
                    <tr>
                        <b><th colspan="2" class="bg-primary text-light">DATA PROFILE</th></b>
                    </tr>
                    <tr>
                        <th scope="col">ID ANGGOTA</th>
                        <td scope="col">{{$anggota->idanggota}}</td>
                    </tr>
                    <tr>
                        <th scope="col">NOMOR ANGGOTA</th>
                        @foreach ($ShowAnggota as $ShowAnggota)

                        <td scope="col">{{$ShowAnggota->idanggota}}{{$ShowAnggota->provinsi_id}}{{$ShowAnggota->kabupaten_id}}{{$ShowAnggota->kecamatan_id}}{{$ShowAnggota->kelurahan_id}} </td>
                        @endforeach
                    </tr>
                    <tr>
                        <th scope="col">NIK</th>
                        <td scope="col">{{$anggota->nik}}</td>
                    </tr>
                    <tr>
                        <th scope="col">NPWP</th>
                        @if (empty($anggota->npwp_anggota))
                        <td scope="col">Tidak Mempunyai NPWP</td>
                        @else
                        <td scope="col">{{$anggota->npwp_anggota}}</td>
                        @endif
                    </tr>
                    <tr>
                        <th scope="col">NAMA ANGGOTA</th>
                        <td scope="col">{{$anggota->nama_anggota}}</td>
                    </tr>
                    <tr>
                        <th scope="col">TTL</th>
                        <td scope="col">{{$anggota->tempat_lahir}}, {{$anggota->tanggal_lahir}}</td>
                    </tr>
                    <tr>
                        <th scope="col">JENIS KELAMIN</th>
                        <td scope="col">{{$anggota->jenis_kelamin}}</td>
                    </tr>
                    <tr>
                        <th scope="col">AGAMA</th>
                        <td scope="col">{{$anggota->agama}}</td>
                    </tr>
                    <tr>
                        <th scope="col">ALAMAT LENGKAP</th>
                        <td scope="col">{{$anggota->alamat}}</td>
                    </tr>
                    <tr>
                        <th scope="col">PROVINSI</th>
                        @foreach ($ShowAnggota2 as $ShowAnggota2)
                        <td scope="col">{{$ShowAnggota2->nama}}</td>
                        @endforeach
                    </tr>
                    <tr>
                        <th scope="col">KABUPATEN</th>
                        <td scope="col">{{$anggota->nama}}</td>
                    </tr>
                    <tr>
                        <th scope="col">KECAMATAN</th>
                        <td scope="col">{{$anggota->kecamatan}}</td>
                    </tr><tr>
                        <th scope="col">KELURAHAN</th>
                        <td scope="col">{{$anggota->kelurahan}}</td>
                    </tr>
                    <tr>
                        <th scope="col">NOMOR TELP</th>
                        <td scope="col">{{$anggota->nomor_telp}}</td>
                    </tr>
                    <tr>
                        <th scope="col">EMAIL</th>
                        <td scope="col">{{$anggota->email}}</td>
                    </tr>
                    <tr>
                        <th scope="col">PEND TERAKHIR</th>
                        <td scope="col">{{$anggota->pend_terakhir}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        @endforeach

        <br/><br/>
        {{-- DATA ORGANISASI --}}
        @foreach ($ShowOrganisasi as $organisasi)
        <div class="table-responsive" >
            <table class="table table-bordered table-striped text-center" >
                    <tr>
                        <b><th colspan="2" class="bg-primary text-light">DATA ORGANISASI</th></b>
                    </tr>
                    <tr>
                        <th scope="col">ID ORGANISASI</th>
                        <td scope="col">{{$organisasi->id_organisasi}}</td>
                    </tr>
                    <tr>
                        <th scope="col">NAMA ORGANISASI</th>
                        <td scope="col">{{$organisasi->nama_organisasi}}</td>
                    </tr>
                    <tr>
                        <th scope="col">JABATAN ORGANISASI</th>
                        <td scope="col">{{$organisasi->jabatan_organisasi}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        @endforeach

        <br/><br/>
        {{-- DATA USAHA --}}
        @foreach ($ShowUsaha as $usaha)
        <div class="table-responsive" >
            <table class="table table-bordered table-striped text-center" >
                    <tr>
                        <b><th colspan="2" class="bg-primary text-light">DATA USAHA</th></b>
                    </tr>
                    <tr>
                        <th scope="col">ID USAHA</th>
                        <td scope="col">{{$usaha->idusaha}}</td>
                    </tr>
                    <tr>
                        <th scope="col">NAMA USAHA</th>
                        <td scope="col">{{$usaha->nama_usaha}}</td>
                    </tr>
                    <tr>
                        <th scope="col">NPWP USAHA</th>
                        @if (empty($usaha->npwp_usaha))
                        <td scope="col">Tidak Mempunyai NPWP</td>
                        @else
                        <td scope="col">{{$usaha->npwp_usaha}}</td>
                        @endif
                    </tr>
                    <tr>
                        <th scope="col">IZIN USAHA</th>
                        @if (empty($usaha->izin_usaha))
                        <td scope="col">Tidak Mempunyai Izin Usaha</td>
                        @else
                        <td scope="col">{{$usaha->izin_usaha}}</td>
                        @endif
                    </tr>
                    <tr>
                        <th scope="col">ALAMAT USAHA</th>
                        <td scope="col">{{$usaha->alamat_usaha}}</td>
                    </tr>
                    <tr>
                        <th scope="col">TAHUN BERDIRI</th>
                        <td scope="col">{{$usaha->tahun_berdiri}}</td>
                    </tr>
                    <tr>
                        <th scope="col">BIDANG USAHA</th>
                        <td scope="col">{{$usaha->bidang_usaha}}</td>
                    </tr>
                    <tr>
                        <th scope="col">KEPEMILIKAN USAHA</th>
                        <td scope="col">{{$usaha->kepemilikan_usaha}}</td>
                    </tr>
                    <tr>
                        <th scope="col">OMSET USAHA</th>
                        <td scope="col">{{$usaha->omset_usaha}}</td>
                    </tr>
                    <tr>
                        <th scope="col">JUMLAH KARYAWAN</th>
                        <td scope="col">{{$usaha->karyawan}}</td>
                    </tr>
                    <tr>
                        <th scope="col">DANA USAHA</th>
                        <td scope="col">{{$usaha->dana_usaha}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        @endforeach
    </div>

    @endsection
