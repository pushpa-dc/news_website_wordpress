<?php $cats=array( array(0,"राजनीति"), array(0,"मनोरञ्जन"), array(0,"बजार"),array(0,"उधमी"));
foreach($cats as $cat):?>
<div class="col-md-3">
    <div class="cat-title">
        <a href="/?cat=<?php echo $cat[0];?>">
            <div class="inner-cat"><?php echo $cat[1];?></div>
        </a>
        <div class="more"><a href="/?cat=<?php echo $cat[0];?>" class="more">थप समाचार</a></div>
    </div>
    <?php include( locate_template( 'templates/d2.php') ); ?>
</div>
<?php endforeach;?>