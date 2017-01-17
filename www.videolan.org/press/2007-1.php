<?php
   $title = "VideoLAN - Press Release - GPLv2";
   $lang = "en";
   $menu = array( "vlc" );
   require($_SERVER["DOCUMENT_ROOT"]."include/header.php");
?>

<div id="fullwidth">

<h1>VLC media player to remain under GNU GPL version 2</h1>

<p>
VLC media player (VLC) is an open-source cross-platform media player
and streaming solution.
In 2001, VLC was released under the OSI-approved
GNU General Public version 2,
with the commonly-offered option to use &quot;any later version&quot;
thereof (though there was not any such later version at the time).
</p>

<p>
Following the release by the Free Software Foundation (FSF)
of the new version 3 of its GNU General Public License (GPL)
on the 29th of June 2007,
contributors to the VLC media player,
and other software projects hosted at <a
href="//www.videolan.org">videolan.org</a>,
debated the possibility of <em>updating</em> the licensing terms
for future version of the VLC media player and other hosted projects,
to version 3 of the GPL.
</p>

<p>
The VideoLAN project is a strong supporter of open-source and free software,
and strives to provide a state-of-the-art multimedia framework
for the indiscriminate benefit of all of its users, its contributors,
and the open-source community at large.
It is our understanding that our software licensing terms
are of the utmost importance to protecting the rights of our contributors
at the same time as the freedoms and benefits of our users.
</p>

<p>
We recognize that certain changes to the GPL constitute certain improvements
and would help foster the long-term significance and quality
of open-source softwares.
In particular, we welcome:
</p>
<ul class="bullets">
<li>the extended compatibility with other open-source licenses,
</li>
<li>making the license terms less specific to the US legal system
(this is especially important to our project which is historically
 based in Europe),
</li>
<li>various clarifications
    such as the more explicit interaction with patents.
</li>
</ul>
<p>
However, several of our key contributors and users have clearly stated
their objection to the clause on Installation Information,
a.k.a. the &quot;Tivo clause&quot;:
</p>
<blockquote>
<p>
“Installation Information” for a User Product means any methods, procedures,
authorization keys, or other information required to install and execute
modified versions of a covered work in that User Product from a modified
version of its Corresponding Source.
The information must suffice to ensure that the continued functioning of the
modified object code is in no case prevented or interfered with solely because
modification has been made.
</p>
<p>
If you convey an object code work under this section in, or with, or
specifically for use in, a User Product, and the conveying occurs as part of a
transaction in which the right of possession and use of the User Product is
transferred to the recipient in perpetuity or for a fixed term (regardless of
how the transaction is characterized), the Corresponding Source conveyed under
this section must be accompanied by the Installation Information.
(...)
</p>
</blockquote>

<p>
There is strong concern that these new additional requirements might not
match the industrial and economic reality of our time,
especially in the market of consumer electronics.
It is our belief that changing our licensing terms to GPL version 3
would currently not be in the best interest of our community as a whole.
Consequently, we plan to keep distributing future versions of
VLC media player under the terms of the GPL version 2.
</p>

<p>
We would however like to remind our users that,
because VLC media player depends on a wide range of open-source libraries,
we may be forced into distributing certain, if not all,
of our official binary releases under GPL version 3,
should any single of those libraries switch to a license
that is incompatible with GPL version 2
(at the time of writing, the only identified case is libsmbclient
 from the Samba project).
We expect that third-party binary releases
(such as those made by Linux and BSD distributions)
will be similarly impacted.
<strong>Nevertheless, we will continue to distribute
the VLC media player source code
under GPL &quot;version 2 or any later version&quot;
until further notice.</strong>
</p>

<p>
R&eacute;mi Denis-Courmont,<br/>
on behalf of the VideoLAN project,<br/>
videolan<span style="display: none;">removethis</span>@videolan.org
</p>

<p>
References:
</p>
<dl>
<dt>VLC media player</dt>
<dd><a href="//www.videolan.org/vlc/">http://www.videolan.org/vlc/</a>
</dd>
<dt>GNU General Public License</dt>
<dd><a href="http://www.gnu.org/licenses/old-licenses/gpl-2.0.html"
     >http://www.gnu.org/licenses/old-licenses/gpl-2.0.html</a>
</dd>
<dt>Free Software Foundation</dt>
<dd><a href="http://www.fsf.org/">http://www.fsf.org/</a>
</dd>
<dt>Samba project</dt>
<dd><a href="http://www.samba.org/">http://www.samba.org/</a>
</dd>
</dl>

</div>

<?php footer('$Id$'); ?>
