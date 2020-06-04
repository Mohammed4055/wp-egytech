        <footer class="footer-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 item text">
                        <div class="aboutus">
                            <h3>about us</h3>
                            <p>egytech is an egyption news website specialized in technology we love technology and we believe that all people 
                                have the right to know what is happening in the technology world . <br/> we hope that you enjoy our website : )</p>
                        </div>
                        <div>
                            <h3>categories</h3>
                            <ul>
                                <li><a href="#">hardware</a></li>
                                <li><a href="#">software</a></li>
                                <li><a href="#">earnmoney</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 item text contactus" id="contactus">
                        <form class="contactform">
                            <h3>contact us</h3>
                            <input class="name"type="text" id="name" name="name" placeholder="Your name...">
                            <input class="email"type="email" id="email" name="email" placeholder="Your Email...">
                            <textarea class="massage" id="subject" name="subject" placeholder="Write something..." style="height:200px"></textarea>
                            <input type="submit" value="send">
                        </form>
                    </div>
                </div>
                <div class="col item social">
                    <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
                </div>
                <p class="copyright"><span class="brand"><?php bloginfo('name')?></span> &copy; 2020</p>
            </div>
        </footer>
    <?php wp_footer();?>
    </body>
</html>