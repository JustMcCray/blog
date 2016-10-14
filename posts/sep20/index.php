<?php
    include("../../php/header.php");
?>
   <div class="body">
        <div class="page">
            <div class="copy">
                <h4>Tue Sep 20, 2016</h4>
                <p class="clear">Learned another thing. Instead of having to render from After Effects directly, there's an Adobe Media Encoder that you can push the file to. This allows you to keep using After Effects while the video exports, and it exports faster. But AME doesn't render ray-traced objects, which is what my video is made of. So rendering it out, I end up with floating text instead of on the sides of the letters. Instead of using AME, I now still have to use After Effects to export. This file takes five hours to export, so I have to do it overnight.</p>
                <div class="vid">
                    <video controls poster="../../images/sep20.png">
                        <source src="../../images/animation2.mp4">
                    </video>
                </div>
                <a href="https://youtu.be/OvOW4MsrFIg">
                    <p class="clear">Click here for the full size video.</p>
                </a>
                </div>
            <?php
                include("../../php/sidebar.php");
            ?>
        </div>
    </div>
<?php
    include("../../php/footer.php");
?>