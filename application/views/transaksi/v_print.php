<style type="text/css">
 table{
 border-collapse: collapse;
 }
 tr>th{
 background-color: gray;
 }
 tr>th,tr>td{
 padding: 5px;
 }
</style>
<center>
<h2>Print Transaksi</h2>
<table border="1">
        <tr>
            <th>tanggal</th>
            <th>id</th>
            <th>nama</th>
            <th>pegawai</th>
            <th>jenis materai</th>
            <th>banyaknya</th>
            <th>jumlah</th>
            <th>foto</th>
        </tr>
         <?php foreach($transaksi as $tr): ?>
                    <tr>
                        <td><?=$tr->tanggal?></td>
                        <td><?=$tr->id?></td>
                        <td><?=$tr->nama?></td>
                        <td><?=$tr->pegawai?></td>
                        <td><?=$tr->jenis_materai?></td>
                        <td><?=$tr->banyaknya?></td>
                        <td><?=$tr->jumlah?></td>
                        <td><img src="<?= base_url('foto/').$tr->foto;?>"width="80px"></td>
                    </tr>
        <?php endforeach; ?>
</table>
</center>

            <script>
                window.print()
            </script>