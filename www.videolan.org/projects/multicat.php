<?php
   $title ="Multicat - the multicast swissknife";
   $lang = "en";
   $menu = array( "projects", "Multicat" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1>Multicat</h1>

<h2>Simple and efficient multicast and transport stream manipulation</h2>

<p>The multicat package contains a set of tools designed to easily and
efficiently manipulate multicast streams in general, and MPEG-2
Transport Streams (ISO/IEC 13818-1) in particular.</p>

<p>The multicat suite of applications is very lightweight and designed to
operate in tight environments. Memory and CPU usages are kept to a minimum,
and they feature only one thread of execution.</p>

<h2>The <code>multicat</code> program</h2>

<p><code>multicat</code> itself is a 1 input/1 output application. Inputs and
outputs can be network streams (unicast and multicast), files, character
devices or FIFOs.</p>

<p>Multicat tries to rebuild the internal clock of the input stream; but
it wants to remain agnostic of what is transported, so in case of files
the said clock is stored to an auxiliary file (example.aux accompanies
example.ts) while recording. Other inputs are considered "live", and
the input clock is simply derived from the reception time of the packets.</p>

<h2>The <code>ingests</code> program</h2>

<p><code>ingests</code> is a companion application designed to manipulate TS files. It
reads the PCR values of the file, and builds the auxiliary file that is
necessary for multicat.</p>

<h2>The <code>offsets</code> program</h2>

<p><code>offsets</code> is another companion application to manipulate auxiliary files.
Given an offset in time from the beginning of the file, it returns the offset
of the position in number of packets.</p>

<h2>The <code>aggregartp</code> and <code>desaggregartp</code> programs</h2>

<p><code>aggregartp</code> splits a single RTP stream to several contribution
links with load balancing.</p>

<p><code>desaggregartp</code> reorders incoming packets and reconstitutes the original
RTP stream.</p>

<p>These programs can be used to carry a high-bitrate signal over several contribution links.</p>

<h2>Get Multicat</h2>

<p> The latest official version of <code>Multicat</code>
is numbered 1.0, and is available via <a
href="http://downloads.videolan.org/pub/videolan/multicat/1.0/multicat-1.0.tar.bz2">HTTP</a>
or <a
href="ftp://ftp.videolan.org/pub/videolan/multicat/1.0/Multicat-1.0.tar.bz2">FTP</a>.</p>

<p> Hackers can participate to the development using <a
href="http://wiki.videolan.org/Subversion">Subversion</a>.
The code can be found at <code>svn://svn.videolan.org/multicat</code> and you can
<a href="http://svn.videolan.org/listing.php?repname=Multicat&path=%2F&sc=0">browse the source online</a>.</p>

<p>User support is handled in the <a
href="/support/lists.html">streaming</a>
mailing-list. There is also a developer-oriented <a
href="/developers/lists.html">mailing-list</a>.</p>

<br />
<br />
<br />

<?php footer('$Id: multicat.php 5717 2009-11-24 08:46:34Z md $'); ?>
