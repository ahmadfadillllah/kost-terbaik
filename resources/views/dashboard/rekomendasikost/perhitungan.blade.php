{{-- Data Kost --}}
<div class="card">
    <div class="card-body">
        <h4>Data Kost</h4>
        <div class="m-t-25">
            <table id="data-table1" class="table">
                <thead>
                    <tr>
                        <th>Nama Kost</th>
                        <th>Fasilitas</th>
                        <th>Harga Sewa</th>
                        <th>Lokasi</th>
                        <th>Kenyamanan</th>
                        <th>Keamanan</th>
                        <th>Luas Kamar</th>
                        <th>Jarak Dari Kampus</th>
                        <th>Desain Rumah</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data['kost'] as $k)
                        <tr>
                            <td>{{ $k->nama_kost }}</td>
                            <td>{{ implode(', ', json_decode($k->fasilitas)) }}</td>
                            <td>@currency($k->harga_sewa)</td>
                            <td>{{ $k->lokasi }}</td>
                            <td>{{ $k->kenyamanan }}</td>
                            <td>{{ $k->keamanan }}</td>
                            <td>{{ $k->panjangkamar }}x{{ $k->lebarkamar }}</td>
                            <td>{{ $k->jarak_dari_kampus }}</td>
                            <td>{{ $k->desain_rumah }}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nama Kost</th>
                        <th>Fasilitas</th>
                        <th>Harga Sewa</th>
                        <th>Lokasi</th>
                        <th>Kenyamanan</th>
                        <th>Keamanan</th>
                        <th>Luas Kamar</th>
                        <th>Jarak Dari Kampus</th>
                        <th>Desain Rumah</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

{{-- Data Kost 2 --}}
<div class="card">
    <div class="card-body">
        <h4>Data Kost</h4>
        <p>Konversi Ke keterangan</p>
        <div class="m-t-25">
            <table id="data-table2" class="table">
                <thead>
                    <tr>
                        <th>Nama Kost</th>
                        <th>Fasilitas</th>
                        <th>Harga Sewa</th>
                        <th>Lokasi</th>
                        <th>Kenyamanan</th>
                        <th>Keamanan</th>
                        <th>Luas Kamar</th>
                        <th>Jarak Dari Kampus</th>
                        <th>Desain Rumah</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data['kost2'] as $k)
                        <tr>
                            <td>{{ $k->nama_kost }}</td>
                            <td>{{ $k->fasilitas }}</td>
                            <td>{{ $k->harga_sewa }}</td>
                            <td>{{ $k->lokasi }}</td>
                            <td>{{ $k->kenyamanan }}</td>
                            <td>{{ $k->keamanan }}</td>
                            <td>{{ $k->luas_kamar }}</td>
                            <td>{{ $k->jarak_dari_kampus }}</td>
                            <td>{{ $k->desain_rumah }}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nama Kost</th>
                        <th>Fasilitas</th>
                        <th>Harga Sewa</th>
                        <th>Lokasi</th>
                        <th>Kenyamanan</th>
                        <th>Keamanan</th>
                        <th>Luas Kamar</th>
                        <th>Jarak Dari Kampus</th>
                        <th>Desain Rumah</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

{{-- Data Kost 3 --}}
<div class="card">
    <div class="card-body">
        <h4>Normalisasi</h4>
        <div class="m-t-25">
            <table id="data-table3" class="table">
                <thead>
                    <tr>
                        <th>Nama Kost</th>
                        <th>Fasilitas</th>
                        <th>Harga Sewa</th>
                        <th>Lokasi</th>
                        <th>Kenyamanan</th>
                        <th>Keamanan</th>
                        <th>Luas Kamar</th>
                        <th>Jarak Dari Kampus</th>
                        <th>Desain Rumah</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($data['kost3'] as $key => $a)

                        <tr>
                            <td>{{ $data['kost3'][$key]->nama_kost }}</td>
                            <td>{{ $data['n_fasilitas'][$key] }}</td>
                            <td>{{ $data['n_harga_sewa'][$key] }}</td>
                            <td>{{ $data['n_lokasi'][$key] }}</td>
                            <td>{{ $data['n_kenyamanan'][$key] }}</td>
                            <td>{{ $data['n_keamanan'][$key] }}</td>
                            <td>{{ $data['n_luas_kamar'][$key] }}</td>
                            <td>{{ $data['n_jarak_dari_kampus'][$key] }}</td>
                            <td>{{ $data['n_desain_rumah'][$key] }}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nama Kost</th>
                        <th>Fasilitas</th>
                        <th>Harga Sewa</th>
                        <th>Lokasi</th>
                        <th>Kenyamanan</th>
                        <th>Keamanan</th>
                        <th>Luas Kamar</th>
                        <th>Jarak Dari Kampus</th>
                        <th>Desain Rumah</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

{{--Total dan ranking --}}
<div class="card">
    <div class="card-body">
        <h4>Hasil</h4>
        <div class="m-t-25">
            <table id="data-table3" class="table">
                <thead>
                    <tr>
                        <th>Nama Kost</th>
                        <th>Total</th>
                        <th>Rank</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($data['kost3'] as $key => $a)

                        <tr>
                            <td><a href="{{ route('rekomendasikost.show', $data['kost3'][$key]->id) }}">{{ $data['kost3'][$key]->nama_kost }}</a></td>
                            <td>{{ $data['total'][$key] }}</td>
                            <td>{{ $loop->iteration}}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nama Kost</th>
                        <th>Total</th>
                        <th>Rank</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
