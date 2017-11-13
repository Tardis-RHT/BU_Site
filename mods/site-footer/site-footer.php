    <!-- footer -->
    <footer class="flex-footer">
        <div class="wrapper footer">
            <div class="footer__block footer__block-sm">
                <a href="mailto:University@bionic-university.com">University@bionic-university.com</a>
                <p class="footer__address">
                    <?php echo LangDicts::$dict['address_text']; ?>
                </p>      
            </div>
            <div class="footer__block footer__block-sm">
                <a class="footer_tel" href="tel:+380937285663">(093) 728-56-63</a>
                <a class="footer_tel" href="tel:+380987349808">(098) 734-98-08</a>
            </div>
            <div class="footer__soc">
                <a class="soc-link" href="#"><svg class="soc_icon"><use xlink:href="https://www.linkedin.com/company/bionic-university?trk=prof-following-company-logo"></use></svg><span class="nostyle">LinkedIn</span></a>
                <a class="soc-link" href="#"><svg class="soc_icon"><use xlink:href="https://www.instagram.com/bionic_university/"></use></svg><span class="nostyle">Instagram</span></a>
                <a class="soc-link" href="#"><svg class="soc_icon"><use xlink:href="https://www.facebook.com/BionicUniversity"></use></svg><span class="nostyle">Facebook</span></a>
            </div>
            <div class="footer__block footer__sponsor">
                <div class="footer__sponsor-wrap" >
                    <p>
                        <?php echo LangDicts::$dict['Initiator']; ?>
                    </p>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/bionichill.png" alt="Bionic Hill"></a>
                </div>
            </div>
            <p class="footer__copyright">&#169; 2012 - <?php echo date('Y'); ?></p>
        </div>
    </footer>
    <!-- /footer -->