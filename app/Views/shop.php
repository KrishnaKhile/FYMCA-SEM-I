<?php $this->extend('template/layout');
$this->Section ('title');
?>

Shop | krishnaS
<?php
$this->endSection();
$this->section ('content');
?>
<div  style="background-color:lightblue; height:200px;width:40%;border:2px solid black;margin: auto;margin-top:20px;margin-bottom:20px;">
    <form style="padding-left: 30px;" method="post" action="/admin/Menu/new">
    <h4>Id: <input type="text" name="rn"></h4>
        <h4>Name: <input type="text" name="name"></h4>
     <h4>Contact: <input type="text" name="contact"></h4>
     <input type="submit" value="Create">
     <input type="reset" name="Reset">

    </form>
   
</div>




<?php $this->endsection();?>