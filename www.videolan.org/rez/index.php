<?php
   $title = "VideoLAN - Tests sur la Residence de l'Ecole Centrale !";
   $lang = "fr";
   $date = "5 Juin 2004";
   $menu = array( "home", "overview" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");
?>

<h1> VideoLAN - Tests de diffusion sur la Rez </h1>

<h2>Si tu n'as aucune id�e de ce qu'est VideoLAN</h2>

<p> Tu es probablement GPA et tu viens d'arriver sur la rez, il y a peu
de chances pour que tu aies d�j� eu l'occasion d'utiliser VideoLAN.
En bref : VideoLAN est un ensemble de logiciels libres d�velopp�s par
des centraliens et par toute une communaut� de d�veloppeurs ext�rieurs
� l'Ecole, qui permet de diffuser de la vid�o haute-qualit� sur un
r�seau informatique. En pratique, cela signifie que chaque �tudiant,
depuis sa chambre, peut regarder tout ce que est diffus� � ce moment
par les serveurs de VideoLAN (NX, des cha�nes hertziennes, des cha�nes
satellites, la TNT, des radios ...). </p>

<h2>Personne n'est parfait</h2>

<p> VideoLAN est encore en d�veloppement et il est possible que
les diffusions ne soient pas toujours sans faille. Des coupures,
ralentissements ou autres probl�mes sont toujours possibles, m�me si
elles devraient �tre de moins en moins fr�quentes. Ce n'est pas non
plus un "service" aux membres. Les membres actifs de VideoLAN g�rent
les diffusions dans la mesure du temps libre qu'ils ont � y consacrer.
</p>

<h2>Ceux chez qui �a ne marchera pas...</h2>

<ul>

<li>La d�compression de Vid�o est relativement gourmande en ressources.
Ton ordinateur doit donc �tre cadenc� � au moins 400 MHz et avoir 64 Mo
de RAM minimum.</li>

<li>Les cartes r�seau de VIA pour ordinateurs portables (les 3Com
PCMCIA) ont du mal � supporter un flux r�seau important et occupent
alors beaucoup de ressources processeur. Sur une majorit� de portables
dot�s de ces cartes, la vid�o risque d'�tre saccad�e. Si ton portable
est peu puissant, ce ne sera probablement fluide que sur les flux dont le
d�bit n'est pas trop �lev� (comme les flux satellites, par exemple).
Le m�me probl�me peut se poser avec les cartes r�seau 10 Mbit/s pour
ordinateurs fixes</li>

</ul>

<h2>N�cessaire</h2>

<p>Pour utiliser VideoLAN, il suffit d'installer un lecteur multim�dia :
VLC (VideoLAN Client). VLC est capable de lire :</p>
<ul>
<li>des fichiers MPEG 1, MPEG 2, MPEG 4, DivX, XviD, mov, wma,...</li>
<li>des DVDs, sans aucune consid�ration de zone g�ographique,</li>
<li>des vid�os depuis le r�seau, ce que nous utiliserons ici.</li>
</ul>

<h2>Installer et lancer VLC</h2>

<h3>Sous Windows</h3>

<p>Assure-toi que ta version de DirectX est sup�rieure ou �gale � 7.
Si tu as une version trop vieille, installe la derni�re version de
directX disponible sur <a href="http://download.microsoft.com/download/8/1/e/81ed90eb-dd87-4a23-aedc-298a9603b4e4/directx_9c_redist.exe">le site de Microsoft</a> ou dans les mises � jour pour Windows XP.</p>

<p>T�l�charge l'installeur Windows sur la <a
href="/vlc/download-windows.html">page de t�l�chargement du VLC
Windows</a> et double-clique dessus pour lancer la proc�dure
d'installation.</p>

<p>Pour lancer le programme, il suffit de double-cliquer sur le c�ne !</p>

<p>Attention, sous Windows 2000 / XP, il vous faut les droits
d'administrateur sur votre syst�me pour pouvoir lire depuis le
r�seau.</p>

<p>Sous Windows 95 / 98 / ME, VLC est instable, et peut faire planter
la machine. Nous te conseillons d'installer une version plus robuste
de Windows, comme Windows 2000 ou XP Pro (tu peux en obtenir une
gratuitement en �tant membre de VIA).</p>

<h3>Sous Mac OS X</h3>

<p>T�l�charge le package Mac OS X depuis <a
href="/vlc/download-macosx.html">la page de t�l�chargement du VLC pour
Mac OS X</a>. Ouvre le package et copie le contenu sur ton disque dur,
par exemple dans le r�pertoire <code>/Applications</code>.</p>

<p>Pour le lancer, il suffit de double-cliquer sur le c�ne !</p>

<h3>Sous Linux Debian</h3>

<p>Suis les instructions pour installer VLC depuis
<a href="/vlc/download-debian.html">la page de t�l�chargement du VLC
pour Debian GNU/Linux</a>.</p>

<p>Pour le lancer, il suffit ensuite de taper <b>vlc</b>.</p>

<h3>Sous Unix / Linux</h3>

<p> R�f�re-toi au <a href="/doc/videolan-quickstart/">VideoLAN
Quickstart</a>, section 2.1. </p>

<h2>Comment se servir du client VideoLAN ?</h2>

<p>La proc�dure est la m�me quel que soit le syst�me d'exploitation.</p>

<p>Lance VLC :</p>

<ul>

<li><p>sous Windows et MacOS, clique sur l'icone du VLC :</p></li>

<li><p>sous Linux et Mac OS X, lance la ligne de commande suivante :</p>

<pre>
  % vlc
</pre>

</li>

</ul>

<p>Pour que la liste des canaux disponibles s'affiche dans la playlist,
va dans le menu "Param�tres, Pr�f�rences...". S�lectionne "Playlist", "Services Discovery" et coche la case "Annonces SAP".</p>

<p>Clique ensuite sur <b>Enregistrer</b> pour ne plus avoir � faire
cette manipulation � chaque fois que tu lances VLC</p>

<p style="text-align:center;">

<img src="/images/videolan_sap.jpg" alt="Pr�f�rences"
style="text-align:center;"/>

</p>


<p>Pour ouvrir une cha�ne, clique sur le bouton "Playlist" de
l'interface. L'ensemble des canaux disponibles s'affiche. Double clique
sur l'un d'entre eux pour le s�lectionner.</p>

<p>Pour passer en plein �cran, appuie sur "f". Pour revenir � une
fen�tre vid�o, appuie de nouveau sur "f".</p>

<p>Pour changer de langue ou de sous-titre, fais un clic droit sur
l'image et s�lectionne la langue ou le sous-titre dans les sous menus
"audio" et "vid�o".</p>
<h2> Je veux regarder la t�l�vision via le r�seau Wifi</h2>

<p>Les tests effectu�s r�cemment ont montr� que cela est possible pour quelques cha�nes afin de ne pas saturer le r�seau et ne pas �crouler le serveur qui fait la diffusion. 
En effet, Cette solution est tr�s couteuse en terme de bande passante et en terme de load du serveur qui diffuse ces cha�nes.</p>

<p> Dans un premier temps, deux cha�nes sont disponibles qui sont TF1 et France 2. </p>

<p>Pour pouvoir les regarder, il suffit de suivre la d�marche suivante:
<ul>
<li>Aller dans Fichier puis Ouvrir un flux r�seau</li>
<li>Dans l'onglet R�seau cocher HTTP/HTTPS/FTP/MMS </li>
<li>Copier-coller l'adresse de la chaine correspondante dans le zone URL</li>
</ul></p>

<p>Cette adresse est </p>
<p>
<ul>
<li>wifi.videolan.org:8880/fr2 pour France2</li>
<li>wifi.videolan.org:8880/tf1 pour TF1 </li>
</ul>
</p>


<h2>Je veux donner mon avis</h2>
<h3>Voter pour une cha�ne</h3>
<p>Depuis cette ann�e, tu peux <a href="http://videolan-vote.via.ecp.fr/">
voter</a> pour ajouter de nouvelles cha�nes lorsque cela est possible.
Nous t'en informerons essentiellement par les news sur ecp.via.videolan.
</p>

<h3>Je voudrais ajouter une cha�ne</h3>
<p>Nous sommes pr�ts � rajouter des cha�nes dans la mesure du possible :
qu'elle soit gratuite et que nous puissions techniquement l'ajouter.
Tu peux envoyer tes propositions sur ecp.via.videolan.</p>

<h2>Que faire si ca ne marche pas ?</h2>

<ul>

<li>Tout d'abord, il arrive malheureusement assez souvent qu'il y ait
des coupures de courant dans le local VideoLAN

<p>Etat de l'�lectricit� au local VideoLAN en ce moment :
<span style="color:red; size:+1;">
<?php include("elec.txt"); ?>
</span>.</p></li>

<li>Si l'image "saute" ou est remplie de "blocs" de couleurs, il peut �tre n�cessaire d'augmenter la taille du cache. Pour cela, va dans le menu Param�tres, Pr�f�rences, section Input/Codecs, Access Modules, UDP/RTP, s�lectionne "options avanc�es", et mets 1000 dans la bo�te "Taille du cache". Clique sur "sauvegarder" et "quitter".</li>

<li>Si rien ne s'affiche, c'est peut-�tre que le diffusion a �t�
temporairement interrompue sur ce canal. Essaie en un autre !</li>

<li>V�rifie que tu n'as pas un firewall logiciel install� sur ta machine
qui bloquerait le flux ou les requ�tes d'abonnement � ce dernier (IGMP). En cas de probl�mes, l'acc�s aux ports 1234 et 9875 pour les ips 138.195.* est n�cessaire.
</li>

<li>Il peut parfois arriver que VLC ne fonctionne pas, ou que
l'interface ne soit plus visible. Dans ce cas, il s'agit souvent d'un
probl�me avec le fichier de configuration de VLC, qui comporte des
param�tres erron�s. Le plus simple est alors de le supprimer.

<br/><br/>

Sous Windows, celui-ci se trouve sous :<br/> <b>c:\Documents and
Settings\[votre nom d'utilsateur]\Application Data\vlc\vlcrc</b>

<br/><br/>

Sur les syst�mes UNIX, il s'agit du fichier <b>~/.vlc/vlcrc</b>.

<br/><br/>

Pour MacOS X, supprimer le fichier : <br/>

<b>/Library/Preferences/VLC</b>

<br/><br/></li>

<li>Le Client VideoLAN plante ! Si tu es sous Windows 95 / 98 /
ME, c'est un probl�me connu. Nous te conseillons de passer � une
version plus robuste de Windows comme 2000 ou XP pro.</li>

<li>Tu es sous Linux et �a ne marche pas ? V�rifie que tu as bien
compil� le support du Multicast dans ton noyau. Cette option se trouve
dans le menu "Networking Options" et s'appelle "IP: Multicasting".
Pour plus d'informations sur la compilation d'un noyau, lis la <a
href="http://www.via.ecp.fr/~alexis/formation-linux/config-noyau.html">
Formation Linux</a>.</li>

</ul>

<h2>Obtenir de l'aide, rapporter un bug</h2>
<ul>
<li>Tu peux utiliser le forum <code>ecp.via.videolan</code> pour tous les
probl�mes concernant l'utilisation de VideoLAN. N'oublie pas de pr�ciser
la version de VLC ("Help", puis "About"), le syst�me d'exploitation que tu
utilises et ta version de DirectX si tu es sous Windows.</li>

<li> Un channel <code>#videolan</code> est disponible sur le serveur IRC
<code>irc.freenode.net</code>.</li>

<li>Pour rapporter un bug, tu peux utiliser <a
href="http://bugzilla.videolan.org">Bugzilla</a>.</li>

<li>De fa�on g�n�rale, avant de poser un question ou de reporter un
probl�me, va dans le menu "Vue", puis "Messages". On y retrouve un
grand nombre d'informations n�cessaires � la compr�hension du probl�me.
Les messages en rouge, plus particuli�rement, signalent habituellement
des erreurs.</li>

</ul>
<?php footer('$Id$'); ?>
