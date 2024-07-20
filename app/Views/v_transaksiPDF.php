<h1>Data Transaksi</h1>

<table border="1" width="100%" cellpadding="5">
    <tr>
        <th>No</th>
        <th>Username</th>
        <th>Total Harga</th>
        <th>Alamat</th>
        <th>Ongkir</th>
        <th>Status</th>
    </tr>

    <?php foreach ($transaction as $index => $transactionP) : ?>
        <tr>
            <td align="center"><?= $index + 1 ?></td>
            <td><?= $transactionP['username'] ?></td>
            <td align="right"><?= "Rp " . number_format($transactionP['total_harga'], 2, ",", ".") ?></td>
            <td align="center"><?= $transactionP['alamat'] ?></td>
            <td align="right"><?= "Rp " . number_format($transactionP['ongkir'], 2, ",", ".") ?></td>
            <td align="center"><?= ($transactionP['status'] == 1) ? "1" : "0" ?></td>
        </tr>
    <?php endforeach; ?>
</table>
Downloaded on <?= date("Y-m-d H:i:s") ?>
