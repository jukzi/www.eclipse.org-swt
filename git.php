<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Using SWT from Git</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <link rel="stylesheet" href="http://dev.eclipse.org/default_style.css" type="text/css">
    <link rel="stylesheet" href="swt.css" type="text/css">
    <link rel="shortcut icon" href="http://www.eclipse.org/images/eclipse.ico" type="image/x-icon">
</head>
<body bgcolor="#ffffff" text="#000000">
<table width="875px" class="swtpage">
<colgroup><col width="125px"><col width="750px"></colgroup>
<tr><?php include "sidebar.php"; ?>
<td valign="top" style="padding: 10px"><h1 style="padding: 0; margin: 0; border-bottom: 1px solid #000000;">Using SWT from Git</h1>
<h3>Git Web View</h3>
<p>SWT lives on git.eclipse.org in 2 repos - one for source and one for binaries. Both repos can be viewed online at:
<ul>
<li><a href="http://git.eclipse.org/c/platform/eclipse.platform.swt.git/">eclipse.platform.swt.git</a></li> 
<li><a href="http://git.eclipse.org/c/platform/eclipse.platform.swt.binaries.git/">eclipse.platform.swt.binaries.git</a></li>
</ul>

<h3>Cloning the SWT repos</h3>
Anonymous git access to the SWT repositories can be obtained through either http or git protocols. To clone the SWT repos from the command line:
<ul>
<li><tt>git clone http://git.eclipse.org/gitroot/platform/eclipse.platform.swt.git</tt></li>
<li><tt>git clone http://git.eclipse.org/gitroot/platform/eclipse.platform.swt.binaries.git</tt></li>
</ul>
</p>


<h3>Using EGit</h3>
<p>While it is possible to use git only from the command line to develop SWT, it is recommended to use EGit to allow you to perform all git operations from within Eclipse. Here is a quick guide to help you 
get set up (see also <a href="http://wiki.eclipse.org/Platform-releng/Git_Workflows#Clone_a_repo">Platform-releng/Git Workflows page</a>).<p>

<h4>Installing EGit</h4>
<p>
You can install EGit 1.0.0 from <a href="http://download.eclipse.org/releases/indigo">Indigo</a>, it's already available. From within Eclipse, you can select Help>Install New Software... and then select the 
Indigo site from the 'Work With' combo box. Select Eclipse EGit from underneath the 'Collaboration' section and install.
</p>
<h4>Getting the Source</h4>
<p>
Getting the source is a two step process. First you clone the repository to the location specified in the Git preferences pages, and then you
must import the repos into your workspace.
</p>
<h5>Cloning the SWT repos</h5>
<p>
<ol>
<li>Switch to the Git Repository Exploring perspective.</li>
<li>Click on Clone a Git repository
<center><p><img src="images/egit.clone.png" alt="Clone egit"></p></center>
</li>
<li>Paste one of the following URIs into the URI field, and EGit will fill in the rest for you

For committer access (substitute in proper userid):
<ul>
<li>ssh://userid@git.eclipse.org/gitroot/platform/eclipse.platform.swt.git</li>
<li>ssh://userid@git.eclipse.org/gitroot/platform/eclipse.platform.swt.binaries.git</li>
</ul>
</li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
</ol>
</p>
<h5>Importing the SWT repos</h5>
<h4>Configuring EGit </h4>
<p>
Open Eclipse Preferences..., and expand the Team item in the tree. Under the Git item, select Configuration. Add a name and 
an email - this will be used on all commits.

<center><p><img src="images/egit.prefs.name.png" alt="Adding user name and email"></p></center>
</p>

<h4></h4>

    <ol>
    <li>First, set up the CVSROOT.  Use <i>File &gt; Import... &gt; CVS &gt;
        Projects from CVS</i> and enter the information for the Eclipse
        CVS server.

        <center><p><img src="images/swt-cvsroot.png" alt="Host: dev.eclipse.org, Repository Path: /cvsroot/eclipse, and User: anonymous"></p></center>

    <li>Next, check out the <b>org.eclipse.swt</b> project, where all
        the Java code lives, along with the correct binary package for
        the DLLs from your platform.

        <center><p><img src="images/swt-checkout.png" alt="Specified modules: org.eclipse.swt, org.eclipse.swt.examples, org.eclipse.swt.gtk.linux.x86"></p></center>

        <p>Each platform has a module for the binaries categorized by
        toolkit, OS, and CPU architecture.  Examples:</p>

        <table style="border-collapse: collapse; border: 1px solid #000000; margin-left: auto; margin-right: auto; padding: 0px;" width="80%">
        <tr><th style="background: #0080c0; color: #ffffff; border: solid 1px #000000; padding: 4px;">Windows
            <td style="border: 1px solid #000000; padding: 4px; text-align: center;">org.eclipse.swt.win32.win32.x86
        <tr><th style="background: #0080c0; color: #ffffff; border: solid 1px #000000; padding: 4px;">Mac OS X
            <td style="border: 1px solid #000000; padding: 4px; text-align: center;">org.eclipse.swt.cocoa.macosx
            <tr><th style="background: #0080c0; color: #ffffff; border: solid 1px #000000; padding: 4px;">Linux GTK
            <td style="border: 1px solid #000000; padding: 4px; text-align: center;">org.eclipse.swt.gtk.linux.x86
        <tr><th style="background: #0080c0; color: #ffffff; border: solid 1px #000000; padding: 4px;">Linux Motif
            <td style="border: 1px solid #000000; padding: 4px; text-align: center;">org.eclipse.swt.motif.linux.x86
        </table><p></p>
        
        <p>You may also want to check out the <b>org.eclipse.swt.examples</b> and <b>org.eclipse.swt.snippets</b> projects.</p>

    <li>SWT has a different Eclipse <b>.classpath</b> file for each
        platform, so we need to set up Eclipse to use the right one.
        To do this we first show the <b>Navigator</b> view
        (<b>Window > Show View > Navigator</b>).

    <p></p>

    <li>Next, we expand <b>org.eclipse.swt</b> and find the
        <b>.classpath_<em>xxx</em></b> file for our platform and copy it to a file named
        <b>.classpath</b>.

        <center><p><img src="images/swt-classpath.png" alt="Name Conflict dialog with .classpath in the New Name field"></p></center>

    <li>After changing a <b>.classpath</b> file, it's usually a good
        idea to clean the projects that depend on it to make sure
        everyone is cool.
        <br>(Note that if you are building for a 64-bit platform, there is an extra step needed.
        Please see <a href="http://www.eclipse.org/swt/faq.php#gtk64">this FAQ</a> for details).

        <center><p><img src="images/swt-clean.png" alt="Using Project &gt; Clean... to recompile"></p></center>

    <li>We're ready to go!  To test our checkout, let's find an SWT
        application to run.  How about the ControlExample.

        <center><p><img src="images/swt-controlexample.png" alt="org.eclipse.swt.examples.controlexample.ControlExample in the Package Explorer view"></p></center>

    <li>After we've selected the ControlExample.java file, we can run
        it using <b>Run &gt; Run As &gt; Java Application</b>.

        <center><p><img src="images/swt-runas.png" alt="Shift+Alt+X J will also run the selected Java application"></p></center>

    </ol>
    
<p>And there you go!</p>

</table>
</body>
</html>