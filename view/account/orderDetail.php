<div class="main">
    <div class="main-width">
        <div class="history">
            <div class="history-title">
                <span>Lịch sử đơn hàng</span>
            </div>
            <div class="history-form">
                <table class="history-order">
                    <thead>
                        <tr class="history-tr">
                            <th class="history-th-1 history-th">Mã đơn hàng</th>
                            <th class="history-th-2 history-th">Thời gian</th>
                            <th class="history-th-3 history-th">Địa điểm</th>
                            <th class="history-th-4 history-th">Tổng tiền</th>
                            <th class="history-th-5 history-th">Trạng thái</th>
                            <th class="history-th-6 history-th">Chi tiết</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php
                            if (!isset($_SESSION['billUser'])) {

                            } else {
                                foreach ($_SESSION['billUser'] as $billUser) { ?>
                                <tr class="history-tr">
                                <td class="history-td"><?=$billUser['id_bill']?></td>
                                <td class="history-td"><?=$billUser['purchase_time']?></td>
                                <td class="history-td">
                                    <span class="history-locantion-name"><?=$billUser['name_store']?> - <?=$billUser['street_store']?></span> <br>
                                    <span class="history-location"><?=$billUser['number_store']?> <?=$billUser['street_store']?>, 
                                    <?php foreach($data['ward'] as $wardAdd) {
                                        if ($billUser['ward_store'] == $wardAdd['id'])
                                        echo $wardAdd['_name'];
                                    }?>, 
                                    <?php foreach($data['district'] as $districtAdd) {
                                        if ($billUser['district_store'] == $districtAdd['id'])
                                        echo $districtAdd['_name'];
                                    }?>, 
                                    <?php foreach($data['province'] as $provinceAdd) {
                                        if ($billUser['city_store'] == $provinceAdd['id'])
                                        echo $provinceAdd['_name'];
                                    }?></span>
                                </td>
                                <td class="history-td">
                                    <span class="history-sum"><?=number_format($billUser['total_bill'])?>đ</span> <br>
                                    <!-- <span class="history-items">2 items</span> -->
                                </td>
                                <td class="history-td">
                                    <?php 
                                        if ($billUser['status_bill'] == 0) {
                                            echo '<span>Đã hủy</span> <br>';
                                        } elseif ($billUser['status_bill'] == 1) {
                                            echo '<span>Đang chờ</span> <br>';
                                        } elseif ($billUser['status_bill'] == 2) {
                                            echo '<span>Đang giao</span> <br>';
                                        } elseif ($billUser['status_bill'] == 3) {
                                            echo '<span>Đã giao</span> <br>';
                                        }
                                    ?>
                                </td>
                                <td class="history-td">
                                    <a href="#">Chi tiết đơn hàng</a>
                                </td>
                            </tr>    
                        <?php   }
                            }
                            ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>