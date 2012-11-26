<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="page">
            <div class="header">
            </div>
            <div class="menu">
                <ul id="nav">
                    <li class="current"><a href="http://www.webdesignerwall.com">Home</a></li>
                    <li><a href="http://www.ndesign-studio.com">My Projects</a>
                        <ul>
                            <li><a href="http://www.ndesign-studio.com">N.Design Studio</a>
                                <ul>
                                    <li><a href="http://www.ndesign-studio.com/portfolio">Portfolio</a></li>
                                    <li><a href="http://www.ndesign-studio.com/wp-themes">WordPress Themes</a></li>
                                    <li><a href="http://www.ndesign-studio.com/wallpapers">Wallpapers</a></li>
                                    <li><a href="http://www.ndesign-studio.com/tutorials">Illustrator Tutorials</a></li>
                                </ul>
                            </li>
                            <li><a href="http://www.webdesignerwall.com">Web Designer Wall</a>
                                <ul>
                                    <li><a href="http://jobs.webdesignerwall.com">Design Job Wall</a></li>
                                </ul>
                            </li>
                            <li><a href="http://icondock.com">IconDock</a></li>
                            <li><a href="http://bestwebgallery.com">Best Web Gallery</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Multi-Levels</a>
                        <ul>
                            <li><a href="#">Team</a>
                                <ul>
                                    <li><a href="#">Sub-Level Item</a></li>
                                    <li><a href="#">Sub-Level Item</a>
                                        <ul>
                                            <li><a href="#">Sub-Level Item</a></li>
                                            <li><a href="#">Sub-Level Item</a></li>
                                            <li><a href="#">Sub-Level Item</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="#">Sub-Level Item</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Sales</a></li>
                            <li><a href="#">Another Link</a></li>
                            <li><a href="#">Department</a>
                                <ul>
                                    <li><a href="#">Sub-Level Item</a></li>
                                    <li><a href="#">Sub-Level Item</a></li>
                                    <li><a href="#">Sub-Level Item</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>	
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="content">
            <h1>Default template</h1>
                <?php echo $body; ?>
            </div>
            <div class="footer">
                
            </div>
        </div>
    </body>
</html>