<div class="row">
    <div class="col-md-12">
        <div class='box '>
            <div class="box-header pad">
                <h4 class='box-title'>
                    Kritik & Saran</h4>
            </div>
            <hr>
            <div class='box-body table-responsive'>
                <div class="row">
                    <div class="col-md-12">
                        <form id="put" method="post">
                            <table class="table table-stripped table-hover" id="data-posts">
                                <thead>
                                <tr>
                                    <th>Nis</th>
                                    <th>Isi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($ks as $ks) { ?>
                                    <tr>
                                        <td>
                                            <?= $ks->nis ?>
                                        </td>
                                        <td>
                                            <?= $ks->isi ?>
                                        </td>
                                    </tr>
                                    <?php
                                } ?>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" language="javascript" class="init">
    $(document).ready(function () {
        $('#data-posts').dataTable();
    });
</script>