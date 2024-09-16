<div id="top">
    <div id="left">
        <div id="info">
            <img src="<?= BASEURL ?>public/assets/img/AnnexBios-logo.png" alt="">
            <p>AnnexBios Leidsche Rijn is een moderne   <br> en sfeervolle bioscoop gelegen aan het <br> Berlijnplein in Utrecht. Met de nieuwste 
                <br> technologie op het gebied van beeld en <br>  geluid biedt AnnexBios een ultieme filmervaring.</p>
            <a href="" id="footerButtonA">
                <div id="footerButton">
                    <p>LEES MEER</p>
                </div>
            </a>
        </div>
        <div id="navigation">
            <h3>Navigation</h3>
            <div id="footerNav">
                <a href="/" class="footerNavItem">
                    <p>Werken bij</p>
                </a>
                <a href="/" class="footerNavItem">
                    <p>Veelgestelde vragen</p>
                </a>
                <a href="/" class="footerNavItem">
                    <p>Vestigingen</p>
                </a>
                <a href="/" class="footerNavItem">
                    <p>Contact</p>
                </a>
            </div>
        </div>
        <div id="socials">
            <h3>Socials</h3>

            <div id="footerSocialIcons">
                <a href="/" class="social">
                    <img src="<?= BASEURL ?>public/assets/img/icons/facebook.png" alt="">
                </a>
                <a href="/" class="social">
                    <img src="<?= BASEURL ?>public/assets/img/icons/x.png" alt="">
                </a>
                <a href="/" class="social">
                    <img src="<?= BASEURL ?>public/assets/img/icons/instagram.png" alt="">
                </a>
            </div>
        </div>
    </div>
    <div id="right">
        <img src="<?= BASEURL ?>public/assets/img/footer-filmrol.png" alt="">
    </div>
</div>

<div id="bottom">
    <div id="content">
        <p><a href="/">Voorwaarden</a> | <a href="/">Privacy beleid</a> | <a href="/">Cookie disclaimer</a></p>
        <p>&copy; 2024-<?= Date("Y") ?> AnnexBios // Powered by <a href="https://www.rileydeman.com/" target="_blank" class="poweredByText">rileydeman</a>, Jesse & Tristan</p>
    </div>
</div>

<?php $conn -> close(); ?>