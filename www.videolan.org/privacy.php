<?php
   $title = 'Legal';
   $body_color = "green";
   $new_design = true;
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div class="container" style="max-width: 1000px !important;">
   <h1 class="bigtitle">Privacy policy</h1>

    <h2>Introduction</h2>
    <p>VideoLAN is a <a href="/videolan/">non-profit organization</a> based in France,
    managed by volunteers.</p>
    <p>There is no business-model around VideoLAN, and the only revenue we receive is through donations.</p>

    <p>For privacy policies and conformance to <a href="https://www.eugdpr.org/">GDPR</a>,
    a few distinctions will be done between:<br />
    <ul>
        <li>VLC software,</li>
        <li>VLC mobile versions,<li>
        <li>the main VideoLAN website,</li>
        <li>community VideoLAN websites.</li>
    </ul>

    For each of the previous software/websites, we'll detail the different privacy policies.</p>

    <h2>IP logs</h2>
    <p>For <b>all</b> of the VideoLAN services, IPs can be found in connection logs.</p>
    <p>Those logs are deleted after 3 months, and are not correlated with any other user information.</p>

    <h2>VLC</h2>
    <p>VLC software does not use any user account, and does not collect any user data, when working.</p>
    <p>VideoLAN does not collect any data, nor any telemetry, when VLC is being run.</p>
    <p>However, some limited personal information could be collected or shared in 3 precise cases:
    <ul>
        <li>during the crash report process,</li>
        <li>during updates checking,</li>
        <li>for metadata retrieval.</li>
    </ul>

    <h3>VLC crash reporting</h3>
    <p>When VLC on Windows or VLC on macOS crash, a dialog popup suggesting to
    share the crash with VideoLAN can be shared.<br />
    If accepted, some information can go to the VideoLAN servers:
    <ul>
        <li>Operating System version,</li>
        <li>CPU and GPU,</li>
        <li>Symbolic StackTrace of the process,</li>
        <li>List of DLLs loaded by the process.
    </ul>
    </p>
    <p>This data is only sent on explicit request from the user.</p>
    <p>This data does not contain any name, username, email from the user or IP from the user.</p>
    <p>This data can be deleted on request.</p>
    <p>This data is kept for 6 months, before deletion.</p>

    <h3>VLC update mechanism</h3>
    <p>When VLC on Windows or VLC on macOS wants to check if a new version is available,
    a request is made to the VideoLAN servers.<br />
    This request can contain:
    <ul>
        <li>Operating System version,</li>
        <li>CPU version,</li>
        <li>VLC version.</li>
    </ul>
    </p>
    <p>This update mechanism is accepted on the first run of VLC, and can be disabled at every moment, in VLC preferences.</p>
    <p>The information sent does not contain any name, username, email from the user or IP from the user.</p>
    <p>No information from the request is kept after the transaction.</p>
    <p>The connection logs can contain some limited information (like user-agents) next to the IP.</p>

    <h3>VLC metadata requests</h3>
    <p>VLC can automatically search online for metadata associated to your media, to 3rd parties.</p>
    <p>Those requests can contain information about the media, including artist, title, album, etc...<p>
    <p>This metadata mechanism is accepted on the first run of VLC, and can be disabled at every moment, in VLC preferences.</p>
    <p>The main 3rd parties that can be contacted by VLC, automatically are:
    <ul>
        <li>last.fm,</li>
        <li>Google Images,</li>
        <li>VideoLAN MusicBrainz instance.</li>
    </ul>
    <p>Please refer to those services for their own privacy policy.</p>
    <p>Please note that the list of services can be changed by the user.</p>
    <p>VideoLAN does not have access to any of those requests and data, except in the MusicBrainz case, detailed below, in this document.</p>

    <h2>VLC mobile</h2>
    <p>The mobile versions of VLC have the exact same metadata requests than VLC, as detailed above. The main case of VLC applies in the same way.</p>

    <p>However, the crashes and updates are handled by the Stores of each platforms, where the user has downloaded VLC from.</p>

    <p>Please refer to those platforms for information about the privacy policies.</p>

    <h2>Main VideoLAN website</h2>
    <p>The main website of VideoLAN, aka <em>www.videolan.org</em>, does not create or use any user account.</p>
    <p>There are no registration forms, or any similar mechanism.</p>
    <p>Therefore, no personal information is stored at any moment, about the user, by VideoLAN.</p>
    <p><em>www.videolan.org</em> currently uses <em>Google Analytics</em> for statistics about the visits on the website.<br />
    GoogleAnalytics was configured in the most private configuration, and is compatible with GDPR.<br />
    Please refer to Google for their privacy policy.</p>

    <h2>Community VideoLAN websites</h2>
    <p>The community websites from VideoLAN are related to development and community, and are the following:
    <ul>
    <li><a href="//code.videolan.org/">gitlab</a></li>
    <li><a href="//wiki.videolan.org/">wiki</a></li>
    <li><a href="//forum.videolan.org/">forum</a></li>
    <li><a href="//trac.videolan.org/vlc">bugtracker</a></li>
    <li><a href="//patches.videolan.org/vlc">patchwork</a></li>
    </ul>
    </p>

    <p>Each of those websites have different users system, but work in a similar way.</p>
    <p>No user information is processed in any way other than being able to log in and have a profile,</p>
    <p>No user information is shared to any 3rd party, and Google Analytics is not used,</p>
    <p>One can modify their user information at any time, through the options of those websites,</p>
    <p>One can request deletion of their account, by contacting VideoLAN,</p>
    <p>One can request that any post, page, information created be made private, even if no personal information was part of it.</p>

    <h2>MusicBrainz</h2>
    <p>VideoLAN is running a MusicBrainz instance, that can be used to find information about a music, and artist and so on.</p>
    <p>Those automatic requests can contain information about the media, including artist, title, album, etc...<p>
    <p>This metadata mechanism is accepted on the first run of VLC, and can be disabled at every moment, in VLC preferences.</p>
    <p>The information sent does not contain any name, username, email from the user.</p>
    <p>No information from the request is kept after the transaction.</p>
    <p>The connection logs can contain some limited information (like user-agents) and partial search next to the IP.</p>
</div>

<?php footer();?>
