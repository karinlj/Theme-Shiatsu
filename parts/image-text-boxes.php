
<section class="image-text-boxes">
        <div class="container-boxes">
                
                 <div class="card-container" >

                        <?php if(is_active_sidebar('image-box1')) : ?>
                            <?php dynamic_sidebar('image-box1'); ?>
                        <?php endif; ?>
                 </div>
                 <div class="card-container" >
                        <?php if(is_active_sidebar('image-box2')) : ?>
                            <?php dynamic_sidebar('image-box2'); ?>
                        <?php endif; ?>
                 </div>
                 <div class="card-container" >    
                        <?php if(is_active_sidebar('image-box3')) : ?>
                            <?php dynamic_sidebar('image-box3'); ?>
                         <?php endif; ?>
                 </div>
        </div>
</section>