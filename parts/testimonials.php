<!--for testimonials widget-->

<section class="testimonials-outer">
    <h2>Vad mina kunder säger</h2>

        <div class="testimonials-inner">
            
            <i class="fa fa-angle-left btn-slider prev" aria-hidden="true"></i>
            
            <div class="slides">
            <?php if(is_active_sidebar('testimonials')) : ?>
                <?php dynamic_sidebar('testimonials'); ?>
            <?php endif; ?>
            </div> 
            
            <i class="fa fa-angle-right btn-slider next" aria-hidden="true"></i>

        </div>
</section>
