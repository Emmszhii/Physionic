<?php wp_footer(); ?>

       

        <footer class="getInTouch py--10">
            <div class="container">
                <div class="getInTouch__wrapper">
                <?php if(get_field('touch_link')) : ?>
                    <?php while(the_repeater_field('touch_link')) : ?>
                    <ul>
                        <?php if(get_sub_field('touch_field')) : ?>
                            <?php while(the_repeater_field('touch_field')) : ?>
                                
                                
                                <?php echo get_sub_field('touch_content'); ?>
                            <?php endwhile;
                               
                            else: 
                                echo 'no content';
                            endif;
                                wp_reset_postdata();
                            ?>
                       
                    </ul>

                    <?php endwhile;
                    else: 
                        echo 'no content';
                    endif;
                        wp_reset_postdata();
                    ?>
                    

                </div>
            </div>
        </footer>

        <div class="allRightReserved py--3 bg--gray">
            <div class="container">
                <p class="text--center">Made With Love By Figmaland All Right Reserved</p>
            </div>
        </div>

        <script>
            
            const toogleMenu = document.querySelector('.toggle__menu');
            const nav = document.querySelector('.nav');
            const header = document.querySelector('.header');

            toogleMenu.addEventListener('click' , () =>{
                toogleMenu.classList.toggle('open');
                nav.classList.toggle("open");
                header.classList.toggle("open");
            });

        </script>

    </body>
</html>