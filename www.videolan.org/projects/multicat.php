<?php
   $title ="Multicat - the multicast swissknife";
   $lang = "en";
   $menu = array( "projects", "Multicat" );
   $body_color = "pink";
   $new_design = true;
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div class="container">
	<h1 class="bigtitle">Multicat</h1>
	<h2>Simple and efficient multicast and transport stream manipulation</h2>

	<p>The multicat package contains a set of tools designed to easily and
	efficiently manipulate multicast streams in general, and MPEG-2
	Transport Streams (ISO/IEC 13818-1) in particular.</p>

	<p>The multicat suite of applications is very lightweight and designed to
	operate in tight environments. Memory and CPU usages are kept to a minimum,
	and they feature only one thread of execution. It is designed to run on
	Linux, FreeBSD and Mac OS X.</p>

	<h2>The <code>multicat</code> program</h2>

	<p><code>multicat</code> itself is a 1 input/1 output application. Inputs and
	outputs can be network streams (unicast and multicast), files, directories, character
	devices or FIFOs. It is thought to be a multicast equivalent of the
	popular netcat tool. Typical applications are recording
	live transport streams, or playing out TS files without modification.
	Also it is able to record a continuous stream into a directory, rotate
	the files periodically, and make seamless extracts from it.</p>

	<p>Multicat tries to rebuild the internal clock of the input stream; but
	it wants to remain agnostic of what is transported, so in case of files
	the said clock is stored to an auxiliary file (example.aux accompanies
	example.ts) while recording. Other inputs are considered "live", and
	the input clock is simply derived from the reception time of the packets.</p>

	<h2>The <code>ingests</code> program</h2>

	<p><code>ingests</code> is a companion application designed to manipulate TS files. It
	reads the PCR values of the file, and builds the auxiliary file that is
	necessary for multicat.</p>

	<p> The combination of <code>ingests</code> and <code>multicat</code> makes
	a simple and efficient TS file streamer.</p>

	<h2>The <code>aggregartp</code> and <code>reordertp</code> programs</h2>

	<p><code>aggregartp</code> splits a single RTP stream (for instance a high-bitrate signal) to several contribution links with load balancing.</p>

	<p><code>reordertp</code> takes one or multiple inputs (from <code>aggregartp</code> or another source known to reorder and/or add jitter to packets) and smoothes them out to output the original stream in correct order.</p>

	<h2>Get Multicat</h2>

	<p> The latest official version of <code>Multicat</code>
	is numbered 2.3, and is available <a
	href="https://get.videolan.org/multicat/2.3/multicat-2.3.tar.bz2">here</a>.</p>

	<p><a href="/developers/bitstream.html">biTStream</a> needs to be installed at build-time.</p>

	<p>The code can be checked out using Git with <code>git clone
	https://code.videolan.org/videolan/multicat.git</code> and you can <a
	href="https://code.videolan.org/videolan/multicat">browse the source online</a>.</p>

	<p>User support and development is handled in the <a
	href="/developers/lists.html">multicat-devel mailing-list</a>.</p>
    <p>Contributions can be sent as pull requests in our <a href="https://github.com/videolan/multicat">github repository</a>.</p>
</div>

<?php footer('$Id: multicat.php 5717 2009-11-24 08:46:34Z md $'); ?>
