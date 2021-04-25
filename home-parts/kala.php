<?php $cats = array( array(-22,"साहित्य"), array(-12,"विश्व"), array(-6,"समाज")); foreach($cats as $cat):?>
    <div class="col-md-4">
        <div class="cat-title">
            <a href="/?cat=<?php echo $cat[0];?>">
                <div class="inner-cat"><?php echo $cat[1];?></div>
            </a>
            <div class="more"><a href="/?cat=<?php echo $cat[0];?>" class="more">थप समाचार</a></div>
        </div>
        <?php include( locate_template( 'templates/d1.php') ); ?>
    </div>
<?php endforeach;?>