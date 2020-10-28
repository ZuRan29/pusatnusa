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
        @foreach ($ShowPengajuanModal as $modal)
        <div class="table-responsive" >
            <table class="table table-bordered table-striped text-center" >
                    <tr>
                        <b><th colspan="2" class="bg-primary text-light">DATA PROFILE</th></b>
                    </tr>
                    <tr>
                        <th scope="col">ID PENGAJUAN MODAL</th>
                        <td scope="col">{{$modal->idpengajuanmodal}}</td>
                    </tr>
                    <tr>
                        <th scope="col">NAMA ANGGOTA PENGAJU</th>
                        <td scope="col">{{$modal->nama_pengaju}}</td>
                    </tr>
                    <tr>
                        <th scope="col">NOMOR INDUK KEPENDUDUKAN </th>
                        <td scope="col">{{$modal->nik_pengaju}}</td>
                    </tr>
                    <tr>
                        <th scope="col">NOMOR KARTU KELUARGA</th>
                        <td scope="col">{{$modal->nokk_pengaju}}</td>
                    </tr>
                    <tr>
                        <th scope="col">NOMOR POKOK WAJIB POJOK</th>
                        @if (empty($modal->npwp_pengaju))
                        <td scope="col">Tidak Mempunyai NPWP</td>
                        @else
                        <td scope="col">{{$modal->npwp_pengaju}}</td>
                        @endif
                    </tr>
                    <tr>
                        <th scope="col">TEMPAT LAHIR, DAN TANGGAL LAHIR</th>
                        <td scope="col">{{$modal->tempat_lahir}},  {{$modal->tanggal_lahir}}</td>
                    </tr>
                    <tr>
                        <th scope="col">JENIS KELAMIN</th>
                        <td scope="col">{{$modal->jenis_kelamin}}</td>
                    </tr>
                    <tr>
                        <th scope="col">PROVINSI</th>
                        @foreach ($ShowPengajuanModal1 as $ShowPengajuanModal1)
                        <td scope="col">{{$ShowPengajuanModal1->nama}}</td>
                        @endforeach
                    </tr>
                    <tr>
                        <th scope="col">KABUPATEN</th>
                        <td scope="col">{{$modal->nama}}</td>
                    </tr>
                    <tr>
                        <th scope="col">KECAMATAN</th>
                        <td scope="col">{{$modal->kecamatan}}</td>
                    </tr>
                    <tr>
                        <th scope="col">KELURAHAN</th>
                        <td scope="col">{{$modal->kelurahan}}</td>
                    </tr>
                    <tr>
                        <th scope="col">ALAMAT LENGKAP</th>
                        <td scope="col">{{$modal->alamat_pengaju}}</td>
                    </tr>
                    <tr>
                        <th scope="col">EMAIL</th>
                        <td scope="col">{{$modal->email_pengaju}}</td>
                    </tr>
                    <tr>
                        <th scope="col">NOMOR TELEPON (WhatsApp)</th>
                        <td scope="col">{{$modal->notelp_pengaju}}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <br/>
        {{-- DATA USAHA --}}
        <div class="table-responsive" >
            <table class="table table-bordered table-striped text-center" >
                    <tr>
                        <b><th colspan="2" class="bg-primary text-light">DATA USAHA</th></b>
                    </tr>
                    <tr>
                        <th scope="col">DATA USAHA</th>
                        <td scope="col">{{$modal->datausaha_pengaju}}</td>
                    </tr>
                    <tr>
                        <th scope="col">NAMA USAHA</th>
                        <td scope="col">{{$modal->namausaha_pengaju}}</td>
                    </tr>
                    <tr>
                        <th scope="col">NPWP USAHA</th>
                        @if (empty($modal->npwpusaha_pengaju))
                        <td scope="col">Tidak Mempunyai NPWP</td>
                        @else
                        <td scope="col">{{$modal->npwpusaha_pengaju}}</td>
                        @endif
                    </tr>
                    <tr>
                        <th scope="col">IZIN USAHA</th>
                        @if (empty($modal->izinusaha_pengaju))
                        <td scope="col">Tidak Mempunyai Izin Usaha</td>
                        @else
                        <td scope="col">{{$modal->izinusaha_pengaju}}</td>
                        @endif
                    </tr>
                    <tr>
                        <th scope="col">ALAMAT USAHA</th>
                        <td scope="col">{{$modal->alamatusaha_pengaju}}</td>
                    </tr>
                    <tr>
                        <th scope="col">BIDANG USAHA</th>
                        <td scope="col">{{$modal->bidangusaha_pengaju}}</td>
                    </tr>
                    <tr>
                        <th scope="col">DETAIL BIDANG USAHA</th>
                        <td scope="col">{{$modal->detailbidangusaha_pengaju}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br/>
        <div class="table-responsive" >
            <table class="table table-bordered table-striped text-center" >
                    <tr>
                        <b><th colspan="2" class="bg-primary text-light">DATA PENGAJUAN MODAL</th></b>
                    </tr>
                    <tr>
                        <th scope="col">JUMLAH MODAL YANG DIAJUKAN</th>
                        <td scope="col">{{$modal->jumlahmodal_pengaju}}</td>
                    </tr>
                    <tr>
                        <th scope="col">ALASAN PENGAJUAN MODAL</th>
                        <td scope="col">{{$modal->alasanmodal_pengaju}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        @endforeach
    </div>

    @endsection
