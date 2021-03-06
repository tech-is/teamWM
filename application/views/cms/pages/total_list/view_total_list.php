<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>顧客・ペット一覧</h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <h2 class="card-inside-title">グループ登録</h2>
                                <div class="form-group" style="display:inline-flex;">
                                    <div class="form-line" style="margin-right: 10px">
                                        <input type="text" class="form-control" name="kind_group_name" id="select_group" placeholder="例：金・銀・銅">
                                    </div>
                                    <div class="wrapper">
                                        <button id="group_register" type="button" class="btn bg-black waves-effect waves-light">登録</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <h2 class="card-inside-title">グループ削除</h2>
                                <select id="delete_group" class="form-control show-tick" <?php echo !empty($groups)? "": "disabled";?>>
                                    <?php if(!empty($groups)): ?>
                                        <?php foreach ($groups as $group) : ?>
                                            <option value="<?php echo $group["kind_group_id"]; ?>">
                                                <?php echo $group["kind_group_name"]; ?>
                                            </option>
                                            <?php endforeach; ?>
                                    <?php else: ?>
                                        <option value="">
                                            -- グループが登録されていません --
                                        </option>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="button-wrapper m-t-20 m-b-20">
                            <button id="register" type="btn" class="btn bg-black waves-effect waves-light">顧客登録</button>
                            <button id="updateTotal" type="btn" class="btn bg-black m-l-10 waves-effect waves-light" disabled>顧客更新</button>
                        </div>
                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered table-striped table-hover" style="min-width:100%">
                                <thead>
                                    <tr>
                                        <th>ペットID</th>
                                        <th>顧客名</th>
                                        <th>ペット名</th>
                                        <th>電話番号</th>
                                        <th>メールアドレス</th>
                                        <th>グループ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($list as $data_array): ?>
                                    <tr>
                                    <?php foreach ($data_array as $column => $data): ?>
                                        <td><?php echo !empty($data)?$data: ""; ?></td>
                                    <?php endforeach;?>
                                    </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- モーダルウィンドウ カスタマー -->

<!-- #END# Input -->
<section id="modalArea_register" class="modalArea">
    <div id="modalBg_register" class="modalBg"></div>
    <div class="modalWrapper">
        <div class="modalContents" id="modalContents_register">
            <div id="C_cancel" class="closeModal">
                <span style="font-size:30px;">
                    ×
                </span>
            </div>
            <form id="total_form" enctype="multipart/form-data">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <h3>顧客新規登録</h3>
                        <div class="form-group">
                            <label for="customer_name">名前<span style="color: red; margin-left: 10px">必須</span></label>
                            <div class="form-line">
                                <input type="text" class="form-control" name="customer_name" placeholder="山田　太郎"
                                    required>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <label for="customer_kana">カナ(全角)<span
                                    style="color: red; margin-left: 10px">必須</span></label>
                            <div class="form-line">
                                <input type="text" class="form-control" name="customer_kana" placeholder="ヤマダ　タロウ"
                                    required>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <label for="customer_mail">メールアドレス<span
                                    style="color: red; margin-left: 10px">必須</span></label>
                            <div class="form-line">
                                <input type="mail" class="form-control" name="customer_mail" placeholder="半角英数字"
                                    required>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <label for="customer_tel">電話番号<span style="color: red; margin-left: 10px">必須</span></label>
                            <div class="form-line">
                                <input type="text" class="form-control" name="customer_tel"
                                    pattern="\d{2,4}-?\d{3,4}-?\d{3,4}" title="固定回線の場合は市外局番付きハイフン（-）無しでご記入ください。"
                                    placeholder="半角数字 " required>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <label for="customer_zip_adress">郵便番号<span
                                    style="color: red; margin-left: 10px">必須</span></label>
                            <div class="form-line">
                                <input type="text" class="form-control" name="customer_zip_adress"
                                    pattern="\d{3}-?\d{4}" title="郵便番号は、3桁の数字、ハイフン（-）無しで、4桁の数字の順で記入してください。"
                                    placeholder="半角数字" required>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <label for="customer_zip_adress">住所<span
                                    style="color: red; margin-left: 10px">必須</span></label>
                            <div class="form-line">
                                <input type="text" class="form-control" name="customer_address"
                                    placeholder="(例: 東京都中央区日本橋茅場町〇〇番地〇〇マンション〇〇号)" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="customer_magazine">備考</label>
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" name="customer_add_info"
                                    placeholder="顧客に関する情報：例：夏に旅行をする"></textarea>
                            </div><br>
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <p><b>グループ選択</b></p>
                                    <select name="customer_group_id" class=" form-control show-tick">
                                        <?php foreach ($groups as $group) : ?>
                                        <option value="<?php echo $group["kind_group_id"]; ?>">
                                            <?php echo $group["kind_group_name"]; ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="customer_id" value="">
                        <input type="hidden" id="pet_id" value="">
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h3>ペット登録</h3>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group form-float">
                                    <label for="pet_name">ペット名<span
                                            style="color: red; margin-left: 10px">必須</span></label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="pet_name" placeholder="名前"
                                            required>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <label for="pet_classification">分類<span
                                            style="color: red; margin-left: 10px">必須</span></label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="pet_classification"
                                            placeholder="分類" required>
                                    </div>
                                    <div class="help-info">犬、猫、鳥</div>
                                </div>
                                <div class="form-group form-float">
                                    <label for="pet_type">種類<span
                                            style="color: red; margin-left: 10px">必須</span></label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="pet_type" placeholder="種類"
                                            required>
                                    </div>
                                    <div class="help-info">トイ・プードル</div>
                                </div>
                                <div class="form-group form-float">
                                    <label class="form-label">性別</label>
                                    <div class="form-line">
                                        <input type="radio" name="pet_animal_gender" id="male" value="1"
                                            class="with-gap" checked />
                                        <label for="male">オス</label>
                                        <input type="radio" name="pet_animal_gender" id="female" value="2"
                                            class="with-gap">
                                        <label for="female" class="m-l-20">メス</label>
                                        <input type="radio" name="pet_animal_gender" id="other" value="3"
                                            class="with-gap">
                                        <label for="other" class="m-l-20">その他</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <label for="date">生年月日</label>
                                        <input id="date" name="pet_birthday" class="form-control" type="date">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <label class="with-gap">去勢</label>
                                        <input type="radio" name="pet_contraception" id="on" value="1" class="with-gap">
                                        <label for="on">有</label>
                                        <input type="radio" name="pet_contraception" id="off" value="2" class="with-gap"
                                            checked />
                                        <label for="off">無</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <label for="pet_body_height">体高</label>
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="pet_body_height"
                                            placeholder="体高">
                                    </div>
                                    <div class="help-info">cm</div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group form-float">
                                    <label for="pet_body_height">体重</label>
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="pet_body_weight"
                                            placeholder="体重">
                                    </div>
                                    <div class="help-info">kg</div>
                                </div>
                                <div class="form-group form-float">
                                    <label for="pet_information">備考</label>
                                    <div class="form-line">
                                        <textarea name="pet_information" cols="30" rows="5"
                                            class="form-control no-resize" placeholder="備考："></textarea>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <label for="pet_photo">写真</label>
                                    <div id="img_wrapper" style="margin-bottom: 10px">
                                        <img src="">
                                    </div>
                                    <input type="file" id="files" name="pet_img" size="20"
                                        accept="image/png,image/jpeg,image/gif">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pull-right">
                    <button id="send_register" type="submit" class="btn m-t-15 m-l-10 waves-effect">登録</button>
                    <button id="sendUpdateData" type="submit" class="btn m-t-15 m-l-10 waves-effect">更新</button>
                    <button class="btn m-t-15 m-l-10 waves-effect" type="reset">クリア</button>
                    <button type="reset" id="P_cancel" class="btn m-t-15 m-l-10 waves-effect">キャンセル</button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Jquery Core Js -->
<script src="<?php echo base_url(); ?>assets/cms/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="<?php echo base_url(); ?>assets/cms/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="<?php echo base_url(); ?>assets/cms/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="<?php echo base_url(); ?>assets/cms/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="<?php echo base_url(); ?>assets/cms/plugins/node-waves/waves.js"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="<?php echo base_url(); ?>assets/cms/plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>assets/cms/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/cms/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/cms/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="<?php echo base_url(); ?>assets/cms/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/cms/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>assets/cms/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>assets/cms/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/cms/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

<!--Sweetalert -->
<script src="<?php echo base_url(); ?>assets/cms/plugins/sweetalert/sweetalert.min.js"></script>

<!-- flatpickr -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/ja.js"></script>

<!-- Custom Js -->
<script src="<?php echo base_url(); ?>assets/cms/js/admin.js"></script>
<script src="<?php echo base_url(); ?>assets/cms/js/common.js"></script>
<script src="<?php echo base_url(); ?>assets/cms/js/pages/total/total.js">
</script>

</body>

</html>