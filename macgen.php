<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Generating the SWT PI Code for Cocoa</title>
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
<td valign="top" style="padding: 10px"><h1 style="padding: 0; margin: 0; border-bottom: 1px solid #000000;">Generating the SWT PI Code for Cocoa</h1>

<p>Most of the platform interface and C code used by SWT on the Mac/Cocoa port is generated by the <b>MacGeneratorUI</b>
class included in the SWT Tools plugin available on the <a href="updatesite.php">SWT Tools Update Sites</a>. This page 
describes how to use this tool when fixing bugs or adding features to SWT for cocoa.</p>

<h3>Installing the plugin</h3>

<ol>
<li>Install the plugin using the <a href="updatesite.php">SWT Tools Update Site</a>.
    <p></p>
<li>Restart Eclipse and show the view <b>Mac Generator</b> from the <b>SWT Tools</b> category.
    <p></p>
</ol>

<h3>Using the tool</h3>

<ol>
	<li>The tool shows a list of Mac frameworks on the left side.
    <p></p>
    <p></p>
    <center><img src="images/macgen.jpg" alt="MacGeneratorUI"></center>
    <p></p>
<li>Items from the list can be checked to be generated.
    <p></p>
<li>Once the desired items are checked, press the generate tool bar button to generate
	all the necessary JNI code. This includes the java binding for Cocoa classes, 
	the C source for the JNI Natives and also supporting files for the tool. All files are under
	<tt>Eclipse SWT PI/cocoa</tt> directory and if appropriate should be released into CVS.
    <p></p>
<li>Compile the new C code.  To compile the code, right-click on the <tt>build.xml</tt> file in the
    <tt>Eclipse SWT PI/cocoa/library</tt> directory, and choose
	<i>"Run As -> Ant Build..."</i>. Select the JRE tab, and check "Run in the same JRE as the workspace".
    Select the Refresh tab, and check "Refresh resources upon completion" to refresh your workspace
    after running the build to ensure Eclipse picks up the fresh binaries. Now select the "Run" button.
    <p></p>
    <center><img src="images/buildxml.png" alt="build.xml"></center>
    <p></p>
    <p></p>
</ol>

</table>
</body>
</html>