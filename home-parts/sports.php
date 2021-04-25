<?php $cats=array( array(1,"राजनीति"), array(1,"मनोरञ्जन"), array(1,"बजार"),array(1,"उधमी"));
foreach($cats as $cat):?>
<div class="col-md-3">
    <div class="cat-title">
        <div class="inner-cat"><?php echo $cat[1];?></div>
        <div class="more"><a href="#" class="more">थप समाचार</a></div>
    </div>
    <?php $cat=array('id'=>1,'name'=>'One','design'=>'d2'); include( locate_template( 'templates/d2.php') ); ?>
</div>
<?php endforeach;?>