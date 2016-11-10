<div class="box pad col-lg-10" style="border-top : transparent">
    <div class='box-body table-responsive'>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-stripped table-hover" id="data-posts">
                    <thead>
                    <tr>
                        <th>Tipe</th>
                        <th>Agama</th>
                        <th>PKN</th>
                        <th>Matematika</th>
                        <th>IPA</th>
                        <th>IPS</th>
                        <th>B.Indonesia</th>
                        <th>B.Inggris</th>
                        <th>Penjas</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($nilai as $nilai) { ?>
                            <tr>
                                <td>
                                    <?= $nilai->kategori ?>
                                </td>
                                <td><?= $nilai->agama ?>
                                </td>
                                <td><?= $nilai->pkn ?>
                                </td>
                                <td><?= $nilai->mat ?>
                                </td>
                                <td><?= $nilai->ipa ?>
                                </td>
                                <td><?= $nilai->ips ?>
                                </td>
                                <td><?= $nilai->ips ?>
                                </td>
                                <td><?= $nilai->bing ?>
                                </td>
                                <td><?= $nilai->penjas ?>
                                </td>
                            </tr>
                        <?php
                    } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
