<?php $this->extend('adminview/index');
$this->Section('title');
?>

New Orders
<?php
$this->endSection();
$this->section('content');
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
                <div class="OrderList ng-star-inserted">
                    
                    <?php foreach ($transactio as $user) : ?>
                        <div class="ordersBox active ng-star-inserted">

                            <a href="<?php echo base_url('admin/ad/neworder/' . $user->transactionid) ?>">
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


    <div class="main scrollbar ng-star-inserted">
    <div class="heading-section">
    <form method="post" action="<?php echo base_url('admin/ad/neworder/' . $tran->transactionid) ?>">
        <div class="inner-header-section scrollbar"><br>

            <div class="container-border ng-star-inserted"><span> <?= $tran->productname;?>  </span>(<span><?= $tran->sku;?></span>) <br><span><?= $tran->productcompany;?></span><br><span style="margin-right: 15px;"><span>Ordered :</span id="orderedqty"> <?= $tran->orderedqty;?></span><span style="color: #4caf50;" class="ng-star-inserted"> Accepted: </span>

                <mat-form-field class="mat-form-field" style="text-align: center; width: 10%; margin-right: 15px;">
                    <div>
                        <div>

                            <div>
                            <input type="number" name="acceptedqty"  id="accepted" value="<?= $tran->orderedqty;?>"  matinput="" min="0"   max="<?= $tran->orderedqty;?>" maxlength="5" onblur="reSum();" >
                                <span>

                                </span></div>

                        </div>
                        <div class="ng-star-inserted"><span></span></div>

                        <div>

                            <div class="ng-star-inserted" style="opacity: 1; transform: translateY(0%);">
                                

                            </div>
                            
                        </div>
                    </div>
                </mat-form-field>
                <span style="color: lightcoral;"> Discarded: </span>
                
                <mat-form-field class="mat-form-field" style="text-align: center; width: 10%; margin-right: 15px;">
                    <div>
                        <div>
                            
                            <div>
                            <input type="number" name="discardedqty" id="discarded" value="0" matinput="" min="0" max="<?= $tran->orderedqty;?>"  maxlength="5" onblur="reSum();" ;/> <br>
                                   
                                </div>
                             
                        </div>
                        <div><span></span></div>
                         
                        <div>
                             
                            <div class="ng-star-inserted" style="opacity: 1; transform: translateY(0%);">
                                 
                                <div></div>
                            </div>
                             
                        </div>
                    </div>
                </mat-form-field>
                 
                 
                 
            </div>
            <!-- <input type="submit" value="update"> -->
            <button class="btn" type="submit" style="float:right"><span class="btn btn-primary"> Save Accepted Quantity </span><span matripple="" class="mat-ripple mat-button-ripple"></span><span class="mat-button-focus-overlay"></span></button>
        </div>
    </form>
    <?php else:?>
<h1>Sorry! No records found</h1>
        <?php endif; ?>

  
    </div>
</div>


    




</main>



<?php $this->endsection();?>

<?php $this->section('script');?>
<script type="text/javascript">
                   

                    function reSum()
        {
            var num1 = <?= $tran->orderedqty;?>;
            var num2 = parseInt(document.getElementById("accepted").value);
            var num3 = num1-num2;
            document.getElementById("discarded").value = num3;
            // console.log(num3);

        }
        </script>



<?php $this->endsection();?>
