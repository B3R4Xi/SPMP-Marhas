<table class="table text-center table-hover">
    <thead class=" text-primary">
        <th>No</th>
        <th>Guru</th>
        <th>Mata Pelajaran</th>
        <th>Kelas</th>
        <th>Hari</th>
        <th>Waktu</th>
        <th>Ruangan</th>
    </thead>
    <tbody>
        <?php $no=1;?>
        @foreach($jadwals as $jd => $data)
            {{-- <tr id="sid{{ $data->id }}"> --}}
            <td>{{ $loop->iteration }}</td>
            <td class="">{{ $data->teach->guru->nama_lengkap }}</td>
            <td class="">{{ $data->teach->mapel->nama_mapel }}</td>
            <td class="">{{ $data->teach->kelas->nama_kelas }}</td>
            <td class="">{{ $data->hari->nama_hari }}</td>
            <td class="">{{ $data->waktu->range }}</td>
            <td class="">{{ $data->lab->nama_lab }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
