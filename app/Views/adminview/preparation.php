    <?php $this->extend('adminview/index');
    $this->Section ('title');
    ?>

    Preparation
    <?php $this->endSection(); ?>
      <?php $this->section ('style'); ?>
<style>
          .OrderPackageInfo {
    margin: 2vh 2vw 8vh 1vw;
    border-radius: 5px;
    box-shadow:0 0 2px 2px #bdafaf;
    transition: all .2s ease-in;
}
.OrderPackageInfo .HeaderRow {
    border-bottom: 2px solid #476cdb;
    font-family:'roboto';
    font-weight: 700;
    font-size: 18px;
    color: #476cdb;
    letter-spacing: 1px;
}

.OrderPackageInfo .OrderPackageInfoRow {
    display: grid;
    grid-template-columns: repeat(7,1fr) 2fr;
    align-items: center;
    justify-content: center;
    min-height: 50px;
}

.OrderPackageInfo .HeaderRow .OrderPackageInfoContent {
    font-size: 12px;
}

.OrderPackageInfo .OrderPackageInfoRow .OrderPackageInfoContent {
    text-align: center;
    padding-top: 5px;
    padding-bottom: 5px;
    font-family: "roboto";
    color:#476cdb;
    font-weight: 600;
    letter-spacing: .5px;
    align-self: center;
}
.OrderPackageInfo .OrderPackageInfoRowNumbers {
    border-top: 1px solid #476cdb;
    padding: 10px 0;
}

.OrderPackageInfo .OrderPackageInfoRow {
    display: grid;
    grid-template-columns: repeat(5,1fr) 2fr;
    align-items: center;
    justify-content: center;
    min-height: 50px;
}
.OrderPackageInfo .OrderPackageInfoRow .ProductAndCompanyBox {
    font-family: "roboto";
    color: #476cdb;
    font-weight: 700;
    text-transform: uppercase;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 100%;
    text-align: center;
    line-height: 22px;
    padding: 10px 10px 10px 0;
}
.OrderPackageInfo .OrderPackageInfoRow .ProductAndCompanyBox .ProductName {
    font-size: 15px;
    border-bottom: 1px solid #476cdb;
}
.OrderPackageInfo .OrderPackageInfoRow .ProductAndCompanyBox .CompanyName {
    font-size: 12px;
}
.OrderPackageInfo .OrderPackageInfoRow .OrderPackageNumbers {
    grid-column: 2/9;
    display: grid;
    grid-template-columns: repeat(4,1fr) 2fr;
}
.OrderPackageInfo .OrderPackageInfoRow .OrderPackageActionButton {
    font-family: "Poppins";
    font-size: 10px;
    display: flex;
    flex-direction: row;
    justify-content: space-evenly;
}
.OrderPackageInfo .OrderPackageInfoRow .OrderPackageActionButton .PositiveButton {
    font-family: "Poppins";
    text-align: center;
    transition: all .2s ease-in-out;
    text-transform: uppercase;
    outline: none;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    background: #4caf50;
    color: #fff;
    font-size: 10px;
    height: 21px;
}

.OrderPackageInfo .OrderPackageInfoRow .OrderPackageActionButton button {
    background: none;
    font-weight: 700;
    letter-spacing: .5px;
    border: none;
    border-radius: 4px;
    padding: 3px 10px;
    display: flex;
    align-items: center;
}
.OrderPackageInfo .OrderPackageInfoRow .OrderPackageActionButton .NegativeButton {
    font-family:"Poppins";
    text-align: center;
    transition: all .2s ease-in-out;
    text-transform: uppercase;
    outline: none;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    background: #f44336;
    color: #fff;
    font-size: 10px;
    height: 21px;
}
.OrderPackageInfo .OrderPackageInfoRow .OrderPackageActionButton button:hover {
    transform: scale(1.03);
}
</style>
      <?php $this->endSection(); ?>

    <?php
    $this->section ('content'); ?>

<?php if(!empty($transactio)):?>
    <main id="newOrderTab">

   <div class="order">
       

        <div class="totalorder">
            <?php echo count($transactio); ?> orders
        </div>
        <span class="verticleline"></span>

        <div class="orderinfo">

            <div class="OrderStamp"><span class="OrderNumber">ORDER #
                    <?= $tran->transactionid;?>
                </span><span class="VerticalLine2"></span><span class="OrderNumber">
                    <?= $tran->date;?>
                </span><span class="VerticalLine2"></span><span class="OrderNumber">
                    <?= $tran->time;?>
                </span></div>

            <div class="BuyerStamp"><a href="#">
                    <?= $tran->custname;?>
                </a></div>

        </div>


    </div>


    <div>

        <!-- Sidebar -->
        <div class="subsidebar scrollbar">
            <div class="orderListingContainer">
                <div class="OrderList ng-star-inserted">

                    <?php foreach ($transactio as $user) : ?>
                    <div class="ordersBox active ng-star-inserted">

                        <a href="<?php echo base_url('admin/ad/preparation/' . $user->transactionid) ?>">
                            <div class="listHeader">
                                <span>Order #
                                    <?=  $user->transactionid; ?>
                                </span>
                                <span class="update-time">
                                    <?=$user->date; ?>
                                </span>
                            </div>
                            <p class="directionLtr">
                                <?= $user->custname; ?>
                            </p>
                            <p class="directionLtr">
                                <?= $user->custmobile; ?>
                            </p>
                        </a>

                    </div>
                    <?php  endforeach; ?>
                </div>
            </div>
        </div>

    </div>
    <div class="main scrollbar ng-star-inserted">
        <div class="heading-section">
            <form name="discard" method="post"
                action="<?php echo base_url('admin/ad/preparation/' . $tran->transactionid) ?>">
                <div class="inner-header-section scrollbar"><br>
                    <div class="OrderPackageInfo">
                        <div class="HeaderRow OrderPackageInfoRow"><span
                                class="OrderPackageInfoContent">PRODUCT</span><span
                                class="OrderPackageInfoContent">SKU</span><span
                                class="OrderPackageInfoContent">ORDERED</span><span
                                class="OrderPackageInfoContent">ACCEPTED</span><span
                                class="OrderPackageInfoContent">DISCARDED</span><span
                                class="OrderPackageInfoContent">ACTIONS</span></div>
                        <div class="OrderPackageInfoRow OrderPackageInfoRowNumbers ng-star-inserted">
                            <div class="ProductAndCompanyBox" style="grid-row: 1 / 2;">
                                <div class="ProductName">
                                    <?= $tran->productname;?>
                                </div>
                                <div class="CompanyName">
                                    <?= $tran->productcompany;?>
                                </div>
                            </div>
                            <div class="OrderPackageNumbers ng-star-inserted"><span class="OrderPackageInfoContent">
                                    <?= $tran->sku;?>
                                </span>
                                <span name="orderedqty"class="OrderPackageInfoContent"><?= $tran->orderedqty;?> <input type="text" name="orderedqty" value="<?= $tran->orderedqty;?>" style="height:0.1px;width:0.1px;border:none;"></span>

                                 <span class="OrderPackageInfoContent">
                                    <?= $tran->acceptedqty;?>
                                </span><span class="OrderPackageInfoContent">
                                    <?= $tran->discardedqty;?>
                                </span><span class="OrderPackageInfoContent OrderPackageActionButton">
                                    <button type="submit" class="PositiveButton"> PROCESS </button>
                                    <button type="submit" class="NegativeButton"
                                        onclick="discard.action='<?php echo base_url('admin/ad/discarded/' . $tran->transactionid) ?>'">
                                        DISCARD </button></span></div>
                            <!---->
                            <!---->
                        </div>
                        <!---->
                    </div>

                </div>
            </form>
            <?php else:?>
            <h1>Sorry! No records found</h1>
            <?php endif; ?>
        
        </div>
                    </div>    
           
    
                 

            

</main>



   

    
    <?php $this->endsection();?>