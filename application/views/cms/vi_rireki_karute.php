﻿<!--待ち受け画面-->

<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <form
                            action="<?php echo base_url(); ?>Karte_history/"
                            target="" method="post">
                            <h2>カルテ入力</h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <p><b>カルテ表示</b></p>
                                <div class="form-group" style="display:inline-flex;">
                                    <div class="form-line" style="margin-right: 10px">
                                        <input type="text" class="form-control" name="karute_id" id="find_reg"
                                            placeholder="ID番号" required>
                                        <label class="form-label"></label>
                                    </div>
                                    <div class="wrapper" style="margin: 6px">
                                        <button type="submit" name="karute_in" value="1"
                                            class="btn btn-primary waves-effect">カルテ入力</button>
                                    </div>
                                    <div class="wrapper" style="margin: 6px">
                                        <button type="submit" id="karute_his" name="karute_his" value="2"
                                            class="btn btn-primary waves-effect">カルテ履歴一覧</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered table-striped table-hover dataTable">
                                <thead>
                                    <tr>
                                        <th>カルテid</th>
                                        <th>カルテ履歴</th>
                                        <th>カルテタイトル</th>
                                        <th>カルテコメント</th>
                                        <th>顧客名</th>
                                        <th>顧客TEL</th>
                                        <th>顧客メール</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                for ($i = 0; $i < count($r_karute); $i++) {
                                    $disply = $r_karute[$i];
                                    echo "<tr>";
                                    echo "<td>$disply[karute_id]</td>";
                                    echo "<td>$disply[karute_created_at]</td>";
                                    echo "<td>$disply[karute_title]</td>";
                                    echo "<td>$disply[karute_comment]</td>";
                                    echo "<td><a href=/Karte_history/rireki?customer_id=$disply[customer_id]>$disply[customer_name]</td>";
                                    echo "<td>$disply[customer_tel]</td>";
                                    echo "<td>$disply[customer_mail]</td>";
                                    echo "</tr>";
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
</form>

<!-- Jquery Core Js -->
<script src="../assets/cms/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="../assets/cms/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="../assets/cms/plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="../assets/cms/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="../assets/cms/plugins/node-waves/waves.js"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="../assets/cms/plugins/jquery-datatable/jquery.dataTables.js"></script>
<!-- <script src="../assets/cms/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="../assets/cms/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="../assets/cms/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="../assets/cms/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="../assets/cms/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="../assets/cms/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="../assets/cms/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="../assets/cms/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script> -->

<!--ボタン効果Sweetalert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- flatpickr -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/ja.js"></script>

<!-- Custom Js -->
<script src="../assets/cms/js/admin.js"></script>
<script src="../assets/cms/js/pages/rireki/rireki.js"></script>
<script>
    // テーブル行クリックの設定 データテーブル tbody要素に対して
    $('#datatable tbody').on("click", "tr", function() {
        if ($(this).find('.dataTables_empty').length == 0) {
            var owner = $(this);
            $("#datatable tr").removeClass("active"); //他のボタン押したら離れる
            owner.addClass("active"); //アクティブにする
            let row = $('#datatable').DataTable().rows(this).data();
            console.log(row);
            $("#find_reg").val(row[0][0]); //予約ボタン
        }
    });
</script>
</body>

</html>