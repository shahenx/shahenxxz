<?php
    /* -*- coding: utf-8; mode: php; tab-width: 4; indent-tabs-mode: nil; c-basic-offset: 4 -*- vim:set fenc=utf-8 filetype=php et sw=4 ts=4 sts=4: */
    /* Copyright (c) 2007, 2014, The MacPorts Project. */
    include_once("includes/common.inc");
    print_header('The MacPorts Project -- Home', 'utf-8');
    $portsdb_info = portsdb_gather_information();
?>


<div id="content">

    <h2 class="hdr">The MacPorts Project Official Homepage</h2>

    <p>The MacPorts Project is an open-source community initiative to design an easy-to-use system for compiling, installing,
    and upgrading either command-line, X11 or Aqua based open-source software on the <a href="http://www.apple.com/macos/">Mac
    operating system</a>. To that end we provide the command-line driven MacPorts software package under a <a
    href="http://opensource.org/licenses/BSD-3-Clause">3-Clause BSD License</a>, and through it easy access to thousands of ports
    that <a href="<?php print $guide_url . '#introduction'; ?>"> greatly simplify</a> the task of <a href="<?php print $guide_url
    . '#using'; ?>">compiling and installing</a> open-source software on your Mac.</p>

    <p>We provide a single software tree that attempts to track the latest release of every software title (port) we distribute,
    without splitting them into &#8220;stable&#8221; Vs. &#8220;unstable&#8221; branches, targeting mainly OS X El Capitan v10.11 and later
    (including macOS High Sierra v10.13).
    There are currently <a href="ports.php">
    <b><?php print $portsdb_info['num_ports']; ?></b> ports</a> in our tree, distributed among <?php print $portsdb_info['num_categories']; ?>
    different categories, and more are being added on a regular basis.</p>

    <h3 class="subhdr">Getting started</h3>

    <p>For information on installing MacPorts please see the <a href="install.php">installation</a> section of this site and
    explore the myriad of download options we provide and our base system requirements.</p>

    <p>If you run into any problems installing and/or using MacPorts we also have many options to help you, depending on how
    you wish to get <a href="contact.php">get in touch with us</a>. Other important help resources are our online documentation,
    A.K.A <a href="<?php print $guide_url; ?>"> The MacPorts Guide</a>, and our Trac <a href="<?php print $trac_url; ?>">Wiki
    server &amp; bug tracker</a>.</p>

    <p><b>Latest MacPorts <a href="install.php">release</a>: <?php print $macports_version_latest; ?></b></p>

<?php /*
    <h3 class="subhdr">Getting involved: Students</h3>

    <div class="row">
        <div class="column">
            <p> <b>Google Summer of Code</b> is a program to encourage students' participation in Open Source development and offers a stipend to work on the project with an organization for three months. MacPorts has been participating in the program since 2007! </p>

            <p>We are looking for students to join us in making <?php print date('Y'); ?> the best Summer of Code yet. Applicants will be paired with The MacPorts Project mentors to guide them through the coding tasks. This is a great opportunity to gain exposure to real-world software development scenarios. You don't have to be a proven developer, we'd like to have students who are committed to helping MacPorts. </p>

            <p> We have a list of ideas with possible tasks for MacPorts and additional information about the process at <a href="<?php print $trac_url . 'wiki/SummerOfCode'; ?>">wiki/SummerOfCode</a>. We are always open to new ideas. Research on the idea, draft an initial proposal and get it reviewed. </p>
        </div>
        <div class="column" style="text-align: center;padding-top: 20px">
            <a href="<?php print $trac_url . 'wiki/SummerOfCode'; ?>"> <img src="img/gsoc.png"> </a>
        </div>
    </div>
*/ ?>

    <h3 class="subhdr">Getting involved</h3>


    <p>There are many ways you can get involved with MacPorts and peer users, system administrators &amp; developers alike.
    Browse over to the &#8220;<a href="contact.php">Contact Us</a>&#8221; section of our site and:</p>

    <ul>
        <li>Explore our <a href="contact.php#Lists">mailing lists</a>, either if it is for some general user support or to
        keep on top of the latest MacPorts developments and commits to our software repository.</li>
        <li>Check out our <a href="contact.php#Tracker">Support &amp; Development</a> portal for some bug reporting and live
        tutorials through the integrated Wiki server.</li>
        <li>Or simply come join us for a friendly <a href="contact.php#IRC">IRC chat</a> if you wish for more direct contact
        with the <a href="contact.php#Individuals">people behind</a> it all.</li>
    </ul>

    <p>If on the other hand you are interested in joining The MacPorts Project in any way, then don't hesitate to contact the
    project's management team, &#8220;<a href="contact.php#PortMgr">PortMgr</a>&#8221;, to explain your particular interest
    and present a formal application. We're always looking for more helping hands that can extend and improve our ports tree
    and documentation, or take MacPorts itself beyond its current limitations and into new areas of the vast software packaging
    field. We're eager to hear from you!</p>

</div>


<?php
    print_footer();
    if ($portsdb_info['connection_handler'] !== false) {
        pg_close($portsdb_info['connection_handler']);
    }
?>
