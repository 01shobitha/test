PHP_IGNORES = download-skins2 download-skins2-go skins skins_upload skins_old
SUBDIR = contest releases stats

PHP_FILES := index features libvlc screenshots skineditor skineditor_update \
             skins skins_upload streaming \
             download-altlinux download-android download-archlinux download-beos download-crux download-debian download-eyetv download-familiar download-fedora download-freebsd download-gentoo download-ios download-linupy download-macosx download-maemo download-mandriva download-redhat download-skins2-go download-skins download-slackware download-sources download-suse download-syllable download-ubuntu download-wince download-windows \
             index.an     download-windows.an     download-macosx.an    \
             index.ast    download-windows.ast    download-macosx.ast   \
             index.bn_IN  download-windows.bn_IN  download-macosx.bn_IN \
             index.bs     download-windows.bs     download-macosx.bs    \
             index.cs     download-windows.cs     download-macosx.cs    \
             index.da     download-windows.da     download-macosx.da    \
             index.de     download-windows.de     download-macosx.de    \
             index.et     download-windows.et     download-macosx.et    \
             index.fr     download-windows.fr     download-macosx.fr    \
             index.gd     download-windows.gd     download-macosx.gd    \
             index.gl     download-windows.gl     download-macosx.gl    \
             index.gu_IN  download-windows.gu_IN  download-macosx.gu_IN \
             index.he     download-windows.he     download-macosx.he    \
             index.hi     download-windows.hi     download-macosx.hi    \
             index.ja     download-windows.ja     download-macosx.ja    \
             index.km     download-windows.km     download-macosx.km    \
             index.mr     download-windows.mr     download-macosx.mr    \
             index.nb     download-windows.nb     download-macosx.nb    \
             index.nl     download-windows.nl     download-macosx.nl    \
             index.or     download-windows.or     download-macosx.or    \
             index.pl     download-windows.pl     download-macosx.pl    \
             index.pt_BR  download-windows.pt_BR  download-macosx.pt_BR \
             index.pt     download-windows.pt     download-macosx.pt    \
             index.ru     download-windows.ru     download-macosx.ru    \
             index.sk     download-windows.sk     download-macosx.sk    \
             index.th     download-windows.th     download-macosx.th    \
             index.tr     download-windows.tr     download-macosx.tr    \
             index.uk     download-windows.uk     download-macosx.uk    \
             index.ur     download-windows.ur     download-macosx.ur    \
             index.wa     download-windows.wa     download-macosx.wa    \
             index.zh     download-windows.zh     download-macosx.zh    \
                          download-windows        download-macosx            

download-windows.%.php: download-windows.php $(ROOT)/locale/%/LC_MESSAGES/website.po
	rm -f ./$@ && sed -e "s/language = \"\"/language = \"$*\"/" download-windows.php > ./$@;
	msgfmt -c -v -o $(ROOT)/locale/$*/LC_MESSAGES/website.mo $(ROOT)/locale/$*/LC_MESSAGES/website.po

download-macosx.%.php: download-macosx.php $(ROOT)/locale/%/LC_MESSAGES/website.po
	rm -f ./$@ && sed -e "s/language = \"\"/language = \"$*\"/" download-macosx.php > ./$@;
	msgfmt -c -v -o $(ROOT)/locale/$*/LC_MESSAGES/website.mo $(ROOT)/locale/$*/LC_MESSAGES/website.po


