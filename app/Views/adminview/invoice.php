<?php $this->extend('adminview/index');
$this->Section ('title');
?>

Invoice
<?php $this->endSection();?>

<?php $this->section ('style1');?>
<style>
    .heading-section {
    margin: 10px 0;
}
.heading-section .inner-header-section {
    /* overflow-y: scroll; */
    /* direction: ltr; */
}
.slideInLeft {
    -webkit-animation-name: fadeIn;
    animation-name: fadeIn;
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
}
.challan-container {
    background: #476cdb;
    padding: 3px 10px;
    color: #fff;
    line-height: 21px;
}
.pending-ship {
    padding: 6px;
    border: 1px solid #e0e0e0;
    line-height: 22px;
}
.mat-raised-button:not {
    box-shadow: 0 3px 1px -2px rgb(0 0 0 / 20%), 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%);
}

.mat-raised-button {
    box-sizing: border-box;
    position: relative;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    cursor: pointer;
    outline: none;
    border: none;
    -webkit-tap-highlight-color: transparent;
    display: inline-block;
    white-space: nowrap;
    text-decoration: none;
    vertical-align: baseline;
    text-align: center;
    margin: 0;
    min-width: 64px;
    line-height: 36px;
    padding: 0 16px;
    border-radius: 4px;
    overflow: visible;
    transform: translate3d(0, 0, 0);
    transition: background 400ms cubic-bezier(0.25, 0.8, 0.25, 1),box-shadow 280ms cubic-bezier(0.4, 0, 0.2, 1);
}
.mat-fab, .mat-flat-button, .mat-mini-fab, .mat-raised-button {
    color: rgba(0,0,0,.87);
    background-color: #fff;
}
.mat-focus-indicator, .mat-mdc-focus-indicator {
    position: relative;
}
.mat-button, .mat-fab, .mat-flat-button, .mat-icon-button, .mat-mini-fab, .mat-raised-button, .mat-stroked-button {
    font-family: Roboto,Helvetica Neue,sans-serif;
    font-size: 14px;
    font-weight: 500;
}
</style>
<?php $this->endSection();?>

<?php $this->section ('content');?>


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
                <div class="OrderList ">
                    
                    <?php foreach ($transactio as $user) : ?>
                        <div class="ordersBox active ">

                            <a href="<?php echo base_url('admin/ad/invoice/' . $user->transactionid) ?>">
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


    <div class="main scrollbar ">
    <div class="heading-section">
    <form method="post" action="<?php echo base_url('admin/ad/invoice/' . $tran->transactionid) ?>">
        <div class="inner-header-section scrollbar"><br>

        <div  class="heading-section ">
        <div  class="">
            <div  class="slideInLeft ">
                <div  class="pending-section ">
                    <div  class="challan-container">
                        <div  style="float: right; margin-top: 4.5px;"><button type="submit"
                                class="mat-focus-indicator mat-raised-button mat-button-base"
                                style="float: right; color: #476cdb; border-radius: 5%;"><span
                                    class="mat-button-wrapper"> Ship </span><span matripple=""
                                    class="mat-ripple mat-button-ripple"></span><span
                                    class="mat-button-focus-overlay"></span></button></div><span
                            >Challan No: <?= $tran->transactionid;?></span><br ><span
                            >Dealer Name: <?= $tran->custname;?></span><br
                            ><span  class="shipment-price"
                            style="font-size: 16px;"><b >₹<?= $tran->amt ?></b></span><br
                            >
                    </div>
                    <div  class="pending-ship "><span 
                            style="color: #000000; font-size: 18px;"><?= $tran->productname;?> <?= $tran->sku;?></span><br
                            ><span ><?= $tran->productcompany;?></span><span 
                            style="float: right; color: #476cdb; font-size: 16px;">Qty |<?= $tran->acceptedqty;?></span>
                        <div  style="clear: both;"><span 
                                class="order-date"><b >Order Date:</b> <?= $tran->date;?></span><br
                                >
                    </div>
                    <!---->
                </div>
                <!---->
            </div>
            <!---->
        </div>
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
<?php $this->section('script1');?>
<script type="text/javascript">
                   
//console.log(<?= 1;//$tran->amt;?>);
                    function reSum()
        {
            var num1 = <?= $tran->acceptedqty;?>;
            var num2 = <?= $tran->amt;?>;
            var num3 = num1*num2;
            // document.getElementById("totalamt").innerHTML ="₹ " + num3;
            console.log(num1);

        }
        </script>



<?php $this->endsection();?>
