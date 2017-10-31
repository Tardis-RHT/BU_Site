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
                <a class="soc-link" href="#"><svg class="soc_icon"><use xlink:href="#linkedin"></use></svg><span class="nostyle">LinkedIn</span></a>
                <a class="soc-link" href="#"><svg class="soc_icon"><use xlink:href="#instagram"></use></svg><span class="nostyle">Instagram</span></a>
                <a class="soc-link" href="#"><svg class="soc_icon"><use xlink:href="#facebook"></use></svg><span class="nostyle">Facebook</span></a>
            </div>
            <div class="footer__block footer__sponsor">
                <div class="footer__sponsor-wrap" >
                    <p>
                        <?php echo LangDicts::$dict['Initiator']; ?>
                    </p>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/bionichill.png" alt="Bionic Hill"></a>
                </div>
            </div>
            <p class="footer__copyright">&#169; 2012 - 2017</p>
        </div>
    </footer>
    <!-- /footer -->