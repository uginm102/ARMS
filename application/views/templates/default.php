<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" />
        <link href="/css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="page">
            <div class="header">
                        <div class="projectTitle" >
                            <h1>
                                <span>ARMS</span>
                            </h1>
                       </div>
                        <div id="minName" class="minName">
                            <h2>
                                <span>Arcademic Records Management System</span>
                            </h2>
                        </div>
                        <div class="usernameAccount" >
                            <asp:LinkButton ID="lbtnMyAccount" runat="server">
                                <asp:Label ID="lblUsername" runat="server" Text="Unknown user"></asp:Label> | My Account
                            </asp:LinkButton>
                        </div>
                        <div class="logout" >
                            <asp:LoginStatus ID="loginStatus" runat="server" />
                        </div>
            </div>
            <div class="menu">
                <ul id="nav">
                    <li class="current"><a href="#">Home</a></li>
                    <li>
                        <?php echo anchor('marks/listMarks', 'Marks'); ?>
                    </li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <h3><?php echo $action; ?></h3>
            <?php echo anchor('marks/add', 'New Marks'); ?>
            <form action="<?php echo base_url(); ?>index.php/marks/search" method="post"><input type="text" name="q"></input><input type="submit"></input></form>
            <div class="content">
            
                <?php echo $body; ?>
            </div>
            <div class="footer">
                
            </div>
        </div>
    </body>
</html>