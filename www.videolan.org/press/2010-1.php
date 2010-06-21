<?php
   $title = "VideoLAN - Press Release";
   $lang = "en";
   $menu = array( "vlc" );
   require($_SERVER["DOCUMENT_ROOT"]."include/header.php");
?>

<div id="fullwidth">

<div class="press">
<h1>Press Release about Shoutcast Removal in VLC</h1>

<h2>Introduction</h2>

SHOUTcast Radio is a web site which provides a directory of radio stations avalaible on the Internet.
It provides categorizations of such stations, so it is easier to find one that matches your interest.
According to users feedback, the integration of such directory inside VLC is one of the best features of the software.</p>

<p>Starting from VLC 1.1.0, the SHOUTcast module is not available on the distributed VLC any longer, because AOL Corporation 
is hindering Open Source Software.</p>

<p>During the last year, the VLC developers have received several injunctions by e-mail from employees at AOL,
asking us to either comply to a license not compatible with free software or remove the SHOUTcast capability in VLC.</p>

<p>The license states at Chapter 4.4:</p>
<blockquote>
"When sold or distributed to End Users, the Integrated Product shall not [...] (c) incorporate any
Publically Available Software, in whole or in part, in a manner that may subject SHOUTcast Radio or
the SHOUTcast Radio Materials, in whole or in part, to all or part of the license obligations of any
Publically Available Software. As used herein, the term "Publicly Available Software" means any
software that contains, or is derived in any manner (in whole or in part) from, any software that is
distributed as free software, open source software or similar licensing or distribution models; and
that requires as a condition of use, modification or distribution that such software or other software
incorporated into, derived from or distributed with such software: (1) be disclosed or distributed in
source code form; (2) be licensed for the purpose of making derivative works; or (3) be
redistributable at no charge."</blockquote></p>

<p>Moreover, the license forces us to integrate the spyware and adware based Shoutcast Radio Toolbar inside your browser as stated at chapter 6.6:

<blockquote>
"Integrated Product.
You agree to promote the SHOUTcast Radio toolbar on your web site and within the
documentation of the Integrated Product subject to placement agreed to by You and Nullsoft in
writing. If the Integrated Product is a software download, You agree to bundle the SHOUTcast
Radio toolbar with the Integrated Product."
</blockquote>

<p>
Since it is obviously impossible for VLC to comply with such licensing terms, we had to remove the support from the default VLC.
Other free software multimedia players, like Amarok, are not able to comply with the license terms either and have therefore removed their 
SHOUTcast support.</p>

<p>However, we are providing a way to integrate the "icecast directory" that provides an open source equivalent to SHOUTcast.
If you know and like a radio station currently listed on the SHOUTcast directory, please make sure this radio is also available on the icecast directory
and let the radio owner know about how AOL treats their content.</p>

<p>We want to emphasise the fact that features like SHOUTcast or icecast browsing are now doable using our new extension framework and
you will find user-contributed extensions on http://addons.videolan.org/</p>

<h2>Contact AOL</h2>
<p>Please direct your complaints about the removal of Shoutcast to the following responsible people from AOL Corporation:</p>
<ul>
<li>Faisal Sultan <a href="mailto:faisal.sultan@corp.aol.com">faisal.sultan@corp.aol.com</a></li>
<li>Saran Anurag <a href="mailto:anurag.saran@corp.aol.com">anurag.saran@corp.aol.com</a></li>
<li>Lisa Namerow <a href="mailto:Lisa.Namerow@corp.aol.com">Lisa.Namerow@corp.aol.com</a></li>
<li>Robert Wilson <a href="mailto:robert.wilson@corp.aol.com">robert.wilson@corp.aol.com</a></li>
</ul>

<p>To contact VideoLAN, see the contact page.</p>

<p>The entire license can be found here: <a href="/press/LicenseAgreement_SHOUTcast.pdf">License in pdf</a></p>
<p>
References:
</p>
<dl>
<dt>VLC media player</dt>
<dd><a href="http://www.videolan.org/vlc/">http://www.videolan.org/vlc/</a>
</dd>
</dl>
</div>

</div>

<?php footer('$Id: 2007-1.php 6098 2010-05-26 23:50:46Z jb $'); ?>
