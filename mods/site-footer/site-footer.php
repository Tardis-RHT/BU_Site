    <!-- footer -->
    <footer class="flex-footer">
        <div class="wrapper footer">
            <div class="footer__block-address">
                <p class="footer__address">
                    <?php echo LangDicts::$dict['address_text']; ?>
                </p>
                <a href="<?php echo get_home_url() ?>/about_bionic_school#map"><?php echo LangDicts::$dict['find_on_map_text']; ?></a>  
            </div>
            <div class="footer__block-contacts">
                <div>
                    <a class="footer__email" href="mailto:University@bionic-university.com">University@bionic-university.com</a>
                    <div>
                        <a class="footer__tel" href="tel:+380937285663">(093) 728-56-63</a>, 
                        <a class="footer__tel" href="tel:+380987349808">(098) 734-98-08</a>
                    </div>
                </div>
            </div>
            <div class="footer__block-soc">
                <a class="soc-link" href="https://www.linkedin.com/company/bionic-university?trk=prof-following-company-logo"><svg class="soc_icon"><use xlink:href="#linkedin"></use></svg><span class="nostyle">LinkedIn</span></a>
                <a class="soc-link" href="https://www.instagram.com/bionic_university/"><svg class="soc_icon"><use xlink:href="#instagram"></use></svg><span class="nostyle">Instagram</span></a>
                <a class="soc-link" href="https://www.facebook.com/BionicUniversity"><svg class="soc_icon"><use xlink:href="#facebook"></use></svg><span class="nostyle">Facebook</span></a>
            </div>
            <p class="footer__copyright">&#169; 2012 - <?php echo date('Y'); ?></p>
        </div>
    </footer>
    <!-- /footer -->