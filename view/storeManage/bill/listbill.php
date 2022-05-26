<style>
    .th-1{
        width: 8%;
    }
    .th-2{
        width: 12%;
    }
    .th-3{
        width: 12%;
    }
    .th-4{
        width: 15%;
    }
    .th-5{
        width: 20%;
    
    }
    .th-6{
        width: 20%;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
    }
    .th-7{
        width: 13%;
    }
</style>
            <div class="article-admin">
                <h2 style="padding:2rem; color: #464646; font-size:1.5rem; text-transform: uppercase;">Danh sách đơn hàng</h2>
                <div class="article-content">
                    <div class="table_responsive">
                        <form action="">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="th-1">ID</th>
                                        <th class="th-2">Thời gian</th>
                                        <th class="th-4">Món</th>
                                        <th class="th-2">Tổng tiền</th>
                                        <th class="th-3">Trạng thái</th>
                                        <th class="th-6">Quản lý</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        if(isset($data['bill'])){
                                            $countOrders = 0;$countFood = 0;
                                            // var_dump($data['orders'][1]);
                                            // var_dump($data['bill']);
                                            foreach($data['bill'] as $bill){ 
                                            ?>
                                            <tr>
                                                <td class="td-center"><?=$bill['id_bill']?></td>
                                                <td><?=$bill['purchase_time']?></td>
                                                <td>
                                                    <ul>
                                                        <?php 
                                                            foreach($data['orders'][$countOrders] as $orders){
                                                                if($orders['fk_id_bill'] == $bill['id_bill']){ 
                                                                    foreach($data['food'][$countFood] as $food){
                                                                        // var_dump($food);
                                                                        if($food['id_food'] == $orders['fk_id_food']){ ?>
                                                                        <li><?=$orders['number_food']?> <?=$food['name_food']?></li>
                                                                        <?php  }
                                                                        $countFood++ ;
                                                                    }
                                                                }
                                                            }
                                                            $countOrders++;
                                                        ?>
                                                    </ul>
                                                </td>
                                                <td><?=number_format($bill['total_bill'])?>đ</td>
                                                <td>
                                                    <?php 
                                                        if ($bill['status_bill'] == 0) {
                                                            echo 'Đã hủy';
                                                        } elseif ($bill['status_bill'] == 1) {
                                                            echo 'Đang chờ';
                                                        } elseif ($bill['status_bill'] == 2) {
                                                            echo 'Đang giao';
                                                        } elseif ($bill['status_bill'] == 3) {
                                                            echo 'Đã giao';
                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <div class="td-button td-center">
                                                        <button type="button" class="button-1">Chi tiết</button>
                                                    </div>
                                                </td>
                                            </tr>
                                    <?php   }
                                        } else{
                                            
                                        }
                                    ?>
                                </tbody>
                            </table> 
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    