<?php $this->extend('adminview/index');

$this->Section('title');
?>

New Orders
<?php
$this->endSection();
$this->section('norder');
?>
<?php print_r($tran);?>
<?php //print_r($transactio);?>


<div class="main scrollbar ng-star-inserted">
    <div class="heading-section">
        <div class="inner-header-section scrollbar"><br>

            <div class="container-border ng-star-inserted"><span>   </span>(<span>20</span>*<span>500</span><span>G</span>) <br><span>Rallis India Limited</span><br><span style="margin-right: 15px;"><span>Ordered :</span> 5</span><span style="color: #4caf50;" class="ng-star-inserted"> Accepted: </span>

                <mat-form-field class="mat-form-field" style="text-align: center; width: 10%; margin-right: 15px;">
                    <div>
                        <div>

                            <div><input type="number" name="Accepted" matinput="" min="0" oninput="this.value = Math.abs(this.value)" max="5" id="mat-input-22" aria-invalid="false" aria-required="false" maxlength="2"><span>

                                </span></div>

                        </div>
                        <div class="ng-star-inserted"><span></span></div>

                        <div>

                            <div class="ng-star-inserted" style="opacity: 1; transform: translateY(0%);">
                                <!---->

                            </div>
                            <!---->
                        </div>
                    </div>
                </mat-form-field>
                <!----><span style="color: lightcoral;"> Discarded: </span>
                <!---->
                <mat-form-field class="mat-form-field" style="text-align: center; width: 10%; margin-right: 15px;">
                    <div>
                        <div>
                            <!---->
                            <!---->
                            <div><input type="number" name="Rejected" matinput="" min="0" max="2" id="mat-input-23" aria-invalid="false" aria-required="false" maxlength="2" disabled=""><span>
                                    <!---->
                                </span></div>
                            <!---->
                        </div>
                        <div><span></span></div>
                        <!---->
                        <div>
                            <!---->
                            <div class="ng-star-inserted" style="opacity: 1; transform: translateY(0%);">
                                <!---->
                                <div></div>
                            </div>
                            <!---->
                        </div>
                    </div>
                </mat-form-field>
                <!---->
                <!---->
                <!---->
            </div>
            <!----><button class="btn" style="float:right"><span class="btn btn-primary"> Save Accepted Quantity </span><span matripple="" class="mat-ripple mat-button-ripple"></span><span class="mat-button-focus-overlay"></span></button>
        </div>
    </div>
</div>





<?php $this->endsection(); ?>