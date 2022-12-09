<?php $this->extend('adminview/index');
$this->Section ('title');
?>

Discard
<?php
$this->endSection();
$this->section ('content');
?>


<?php if(!empty($transactio)):?>
 <main id="newOrderTab">
    <div class="order">
        <div class="totalorder">
            <?php echo count($transactio); ?> orders
        </div>
        <span class="verticleline"></span>

        <div class="orderinfo">
            
            <div class="OrderStamp"><span class="OrderNumber">ORDER #<?= $tran->transactionid;?></span><span class="VerticalLine2"></span><span class="OrderNumber"><?= $tran->date;?></span><span class="VerticalLine2"></span><span class="OrderNumber"><?= $tran->time;?></span></div>

            <div class="BuyerStamp"><a href="#"> <?= $tran->custname;?> </a></div>

        </div>


    </div>


    <div>

        <!-- Sidebar -->
        <div class="subsidebar scrollbar">
            <div class="orderListingContainer">
                <div class="OrderList">
                    
                    <?php foreach ($transactio as $user) : ?>
                        <div class="ordersBox active">

                            <a href="<?php echo base_url('admin/ad/discard/' . $user->transactionid) ?>">
                                <div class="listHeader">
                                    <span>Order #<?=  $user->transactionid; ?></span>
                                    <span class="update-time"><?=$user->date; ?></span>
                                </div>
                                <p class="directionLtr"><?= $user->custname; ?> </p>
                                <p class="directionLtr"><?= $user->custmobile; ?></p>
                            </a>

                        </div>
                    <?php  endforeach; ?>
                </div>
            </div>
        </div>

    </div>


    <div class="main ">
    <div class="heading-section">
    
        <div class="inner-header-section">
            <div class="container-border"><span> <?= $tran->productname; ?></span><br><span> <?= $tran->productcompany; ?></span><span style="float:right;"> Discarded | <?= $tran->discardedqty; ?></span><br><span
                   ><?= $tran->date; ?></span></div>

        </div>
  
    <?php else:?>
<h1>Sorry! No records found</h1>
        <?php endif; ?>

  
    </div>
</div>


    




</main>
<?php $this->endsection();?>