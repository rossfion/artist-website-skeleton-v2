<style>
    .welcome-grid {
        display:grid;
        grid-template-columns: repeat(2, 2fr);
    }

    .notes {
        font-size: 1.5em;
    }
</style>
<div class="welcome-grid">
    <section>
        <div>
            <p class="notes">This website is an update on a previous project of a similar nature that was built with PHP and Bootstrap. This version is built with the Trongate PHP framework.</p>
            <p>The contact form outputs to JSON</p>
        </div>
    </section>



    <!-- Side Area -->
    <div class="welcome-grid">
        <div>
            <section>
                <h2>Portfolio</h2>
                <ul>
                    <li><a href="#">Project One</a></li>
                    <li><a href="#">Project Two</a></li>
                    <li><a href="#">Project Three</a></li>
                    <li><a href="#">Project Four</a></li>
                    <li><a href="#">Project Five</a></li>

                </ul>
            </section>
            <h3>Send us an email</h3>
            <section>
                <h3>yourname@yourdomain.com</h3
            </section>
            <br>
            <section>
                <h3>Follow Us</h3>
                <div>
                    <ul>
                        <li><a href="#" target="_blank">Facebook</a></li>
                        <li><a href="#" target="_blank">Twitter</a></li>
                        <li><a href="#" target="_blank">LinkedIn</a></li>
                        <li><a href="#" target="_blank">Instagram</a></li>
                        <li><a href="#" target="_blank">Pinterest</a></li>
                        <li><a href="#" target="_blank">Skype</a></li>
                    </ul>
                </div>
            </section>

        </div><!-- ./col-md-4 -->
    </div><!-- ./ col-md-8 -->


</div>


<script src="js/vendor/modernizr-3.11.2.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<script src="js/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga = function () {
        ga.q.push(arguments)
    };
    ga.q = [];
    ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('set', 'anonymizeIp', true);
    ga('set', 'transport', 'beacon');
    ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async></script>
</div><!-- ./ container -->
</body>

</html>
