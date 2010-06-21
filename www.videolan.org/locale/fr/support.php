<?php
   $title = "VideoLAN - User support";
   $lang = "fr";
   $menu = array( "fr", "support" );
   $additional_css = array("/panels.css");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php"); 
?>

<p id="disclaimer">Attention ! Seules les pages principales du site sont traduites pour des raisons de maintenabilité. Mais les pages restantes n'ont que peu de textes.</p>

<div id="left">
<h1> Support utilisateur </h1>

<p>VideoLAN est un logiciel libre, aussi le support utilisateur est fourni par la
communauté des utilisateurs et développeurs VideoLAN.</p>

<h2>Signaler un bug</h2>

<p>Si vous trouvez bugs, ou êtes confronté à un plantage, nous serions très
intéressés d'être informés de ces problèmes/suggestions. Voici quelques informations
detaillées sur la façon de soumettre des rapports de bug exploitables.</p>

<h3>Est-ce vraiement un nouveau bug?</h3>

<p>Cela peut sembler surprenant, mais beaucoup de rapports de bugs que nous recevons
ne concernent pas du tout des bugs, ou sont connus depuis plusieurs mois. S'il vous plait
vérifiez les points suivants:</p>

<ul class="bullets">

<li>Utilisez-vous la dernière version de VLC? Les rapports de bug sur d'anciennes
versions de VLC seront probablement ignorés, parce que les changements dans le code
peuvent rendre impossible la reproduction du bug, ou peuvent même l'avoir corrigé.
Vérifiez toujours que le problème que vous voulez signaler est toujours présent dans
la version courante de VLC.</li>

<li>Avez-vous déjà réinitialisé vos préférences et redémarré VLC? Souvent
des préférences et option incorrectes sont la cause du problème que vous
constatez. La <a href="/doc/faq/fr/index.html#id239188">FAQ</a> décrit
comment le faire. (Désinstaller VLC n'efface pas les anciennes options.)
Vérifiez par deux foix que le problème persiste. </li>

<li>Certaines chose ne sont PAS supportées par VLC.
Nous avons une <a href="/vlc/features.html">liste</a>
des fonctionnalités supportées par VLC et une <a
href="https://trac.videolan.org/vlc/query?action=view&amp;type=enhancement&amp;order=priority">liste de choses</a> que nous aimerions
implémenter dans le futur. Si votre suggestion ne se trouve pas
dans cette liste, vous pouvez formuler une <i>demande de fonctionnalité</i> dans le
<a href="http://forum.videolan.org/viewforum.php?f=7">Forum
des demandes</a>, afin de demander aux développeurs de supporter cela. Souvenez-vous
que nous faisons tous cela sur notre temps libre. Il n'y a pas de limite
à l'implémentation de ces extensions et nous ne faisons
AUCUNE promesse sur le moment où nous les ajouterons à VLC. Si vous voulez
réellement quelque chose immédiatement, le plus simple est de l'implémenter vous même. Regardez <a
href="/developers/vlc.html">ici</a> pour voir comment vous pouvez
développer sur VLC.</li>

<li>De nombreux bug sont déjà connue. Parfois ils sont déjà
corrigé pour la prochaine version de VLC. S'il vous plait <a
href="https://trac.videolan.org/vlc/search?q=&amp;ticket=on">recherchez</a> la
liste des problèmes connus et corrigés. Si vous trouvez votre porblème, vérifier s'il est
déjà clôturé. La page du problème montrerar alors quelque chose comme:
<i>Ticket #87 (Closed: fixed)</i>.</li>

</ul>

<h3>Alors vous pensez tout de même avoir trouvé un bug?</h3>

<p>Alors il est temps de vous reporter aux <a
href="http://forum.videolan.org">forums</a>. <a
href="http://forum.videolan.org/search.php">Recherchez</a> les et
regardez si quelqun d'autre a posé une question semblable ou vu un
bug similaire.</p>

<p>Si vous êtes encore incertain au sujet de votre bogue, signalez svp
votre question ou problème dans le <a href="http://forum.videolan.org/">forum approprié</a>
et assurez vous d'inclure autant d'information que possible (voir également les
indications ci-dessous). Naturellement vous pouvez également nous envoyez vos problèmes
sur la <a href="/support/lists.html">liste de diffusion</a>.</p>

<p>Si vous sont sûr que vous avez trouvé un bogue et
que vous avez toutes les informations nécessaires, vous pouvez saisir un bogue sur notre <a
href="https://trac.videolan.org/vlc/">système de suivi</a>. Vous devrez vous
enregistrer pour saisir un bogue. N'oubliez pas d'entrer une adresse de messagerie
valide si vous voulez être averti du moment où votre bogue sera traité.</p>


<p>Quand vous signalez un bogue dans le forum, par mél ou dans un rapport,
fournissez svp autant d'informations que possible. <br />
Nous essayons de répondre à tous vos méls, posts et rapports, mais il y en a
tellement que nous n'avons parfois simplement pas le temps de le faire. Plus
vous fournissez de détails pertinents au sujet de votre question,meilleure
sera la chance que nous l'étudions complétement.</p>

<h3>Ce qu'il faut inclure dans votre rapport</h3>

<p>Veuillez recueillir les informations suivantes et les envoyer dans votre
rapport.</p>

<ul class="bullets">

<li>Assurez-vous que vous êtes enregistré sur le forum, ou que votre adresse 
mél de réponse est correcte, ainsi nous pourrons revenir vers vous avec
d'éventuelles questions complémentaires.</li>

<li>Votre <b>système</b> d'exploitation et la <b>version</b> que vous utilisez. VLC
fonctionne sur de nombreux systèmes et cette information est vraiment essentielle.<br
/><em>Par exemple: WinXP, MacOSX 10.2 ou Mandrake 8.1</em></li>

<li>Le <b>matériel</b> que vous utilisez. Faites attention à mentionner tous les
matériels audio et vidéo en cause qui pourraient être liés à l'utilisation de VLC.<br />
<i>Par exemple: iMac G4 ou Pentium4 avec GeForce3, et un adaptateur externe USB
dolby surround.</i></li>

<li>La <b>version</b> de VLC que vous utilisez.<br /><em>Par exemple: VLC 0.8.5 (Vous devriez bien entendu toujours utiliser la dernière version)</em></li>

<li>Le <b>contexte</b> précis dans lequel le problème est survenu. Veuillez le décrire avec autant de détails que possible.<br /><em>Par exemple: j'ai appuyé sur le bouton lecture en avance rapide et VLC a planté.</em></li>

<li>Pouvez-vous systématiquement <b>reproduire</b> le problème d'une certaine façon?<br />	<em>Par exemple: le plantage intervient toujours après 10 mn de lecture du DVD 'Matrix'.</em></li>

<li>Le type de <b>film/b> que vous regardiez et si oui ou non le problème apparaît avec d'autres DVD.<br /><em>Par exemple: DVD, Divx ou mpeg.</em></li>

<li>Si possible, un <b>extrait</b> de la vidéo en question:<br /> 
si le problème
est spécifique à un certain film, cela peut beaucoup aider si nous avons
le film lui-même. Dans ce cas veuillez transférer autant du fichier que vous le pouvez sur notre
<a href="ftp://streams.videolan.org/incoming">serveur FTP d'exemples</a>.
Donnez un nom distinctif au fichier, et transférez un fichier texte avec le même nom
dans lequel vous décrivez à nouveau le problème. Signalez ce transfert dans le
forum et donnez le nom de votre fichier. Cela permet d'assurer que nous trouverons
plus facilement votre exemple.</li>

</ul>

<h3>Remarques complémentaires</h3>

<p>Si vous pouvez, ou si cela s'applique à vous essayez de prendre en compte les points suivants.</p>

<h4>Utilisateurs de Mac OS X</h4>
<ul>

<li>Veuillez envoyer également la fin du fichier
~/Library/Logs/CrashReporter/VLC.crash.log si vous le pouvez. De nombreux plantages
VLC sont tracés dans ce fichier. Vous pouvez ouvrir ce fichier depuis VLC à partir
du menu Fenêtre / Messages. A présent cliquez sur le bouton
"Ouvrir le CrashLog".<br />
Veuillez vous assurer que vous envoyez le dernier plantage (à la fin du fichier) et
qu'il s'agit du plantage que vous avez décrit. Le champ de date/heure fournit
la période du plantage de sorte que vous puissez vérifier si c'est le plantage
que vous avez rencontré, et pas un autre rencontré plus tôt.</li>
</ul>

<h4>Problèmes de compilation</h4>
<ul>
<li>Assurez-vous que vous avez lu la <a href="/developers/vlc.html">documentation</a> développeur.</li>
<li>Fournissez le log complet décrivant le problème
<blockquote>
  <p>
  ./configure &lt;options&gt; &gt; logfile.txt 2&gt;&amp;1 <br />
  make 2&gt;&amp;1 > logfile.txt 2&gt;&amp;1
  </p>
</blockquote>
</li>
<li>Lorsque vous traitez une question de ./configure, veuillez fournir le fichier config.log généré.</li>
<li>La marque et la version de votre compilateur peuvent être également pertinents dans ce cas.</li>
</ul>

<p><em>>Ecrit par Derk-Jan Hartman, pour l'équipe VideoLAN.</em>
</p>

</div>

<div id="right">

<h2>Obtenir de l'aide</h2>

<?php panel_start("blue"); ?>
<h1>Les forums</h1>

<p>Nos <a href="http://forum.videolan.org">forums Web</a> peuvent vous aider
à trouver des réponses à vos problèmes et questions. Veuillez vérifier que votre
question n'a pas déjà reçue une réponse avant de la poser.</p>

<?php panel_end(); ?>



<?php panel_start("orange"); ?>
<h1>Les listes de diffusion</h1>

<p>Les listes de diffusion utilisateur sont dédiées au support utilisateur et
aux annonces de versions ou d'événements de VideoLAN. Veuillez consulter la page des <a
href="/support/lists.html">listes de diffusion</a> pour vous abonner, vous désabonner,
consulter les archives et prendre connaissance des règles et restrictions.</p>

<?php panel_end(); ?>

<h2>IRC</h2>

<p> Si vous voulez plus d'informations en temps réel, vous pouvez rencontrer de
nombreux développeurs et utilisateurs VideoLAN sur IRC.<br />
<strong>Souvenez-vous</strong> que tout le monde 
fait cela sur son temps libre. N'exigez pas une réponse
immédiate. Parfois les participants n'ont pas la maîtrise de
ce subjet particulier. Parfois aucun participant n'est présent. Si vous voulez
d'obtenir une VRAIE réponse il est souvent préférable d'aller sur les <a
href="/support/lists.html">listes de diffusions</a>.<br />
Prenez également en compte les problèmes de fuseaux horaires.
La majorité des participants sont en Europe.</p>

<ul class="bullets">
  <li>Réseau IRC: <code>irc.videolan.org</code></li>
  <li>Channel: <code>#videolan</code></li>
</ul>

<p> Vous pouvez vous connecter avec n'importe quel client IRC. Si vous n'arrivez pas à vous connecter
essayez l'interface Web <a href="http://krishna.videolan.org/cgi-bin/irc/irc.cgi">IRCWeb</a>.
</p>

<h2>Services de conseil</h2>

<p>Certaines sociétés fournissent un support professionnel pour VideoLAN. Leur liste
est fournie sur la page <a href="/vlc/partners.html">consultants</a>.</p>

</div>

<?php footer('$Id$'); ?>
