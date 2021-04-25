<?php $cats=array( array(1,"रोचक खबर"), array(1,"पत्रपत्रिकामा"), array(1,"प्रवास"));
foreach($cats as $cat):?>
<div class="col-md-4">
    <a href="/?cat=<?php echo $cat[0];?>">
        <div class="cat-title">
            <div class="inner-cat"><?php echo $cat[1];?>
            </div>
    </a>
    <div class="more"><a href="/?cat=<?php echo $cat[0];?>" class="more">थप समाचार</a></div>
</div>
<?php include( locate_template( 'templates/d1.php') ); ?>
</div>
<?php endforeach;?>