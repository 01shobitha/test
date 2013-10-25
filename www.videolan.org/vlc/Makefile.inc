PHP_IGNORES = download-skins2 download-skins2-go skins skins_upload skins_old
SUBDIR = contest releases stats

PHP_FILES := index features libvlc screenshots skineditor skineditor_update \
             skins skins_upload streaming \
             download-altlinux download-android download-archlinux download-beos download-crux download-debian download-eyetv download-familiar download-fedora download-freebsd download-gentoo download-ios download-linupy download-macosx download-maemo download-mandriva download-redhat download-skins2-go download-skins download-slackware download-sources download-suse download-syllable download-ubuntu download-wince download-windows \
             index.an     download-windows.an     download-macosx.an    \
             index.ar     download-windows.ar     download-macosx.ar    \
             index.ast    download-windows.ast    download-macosx.ast   \
             index.be     download-windows.be     download-macosx.be    \
             index.bg     download-windows.bg     download-macosx.bg    \
             index.bn_IN  download-windows.bn_IN  download-macosx.bn_IN \
             index.bs     download-windows.bs     download-macosx.bs    \
             index.ca     download-windows.ca     download-macosx.ca    \
             index.cs     download-windows.cs     download-macosx.cs    \
             index.cy     download-windows.cy     download-macosx.cy    \
             index.da     download-windows.da     download-macosx.da    \
             index.de     download-windows.de     download-macosx.de    \
             index.el     download-windows.el     download-macosx.el    \
             index.es     download-windows.es     download-macosx.es    \
             index.et     download-windows.et     download-macosx.et    \
             index.fi     download-windows.fi     download-macosx.fi    \
             index.fr     download-windows.fr     download-macosx.fr    \
             index.gd     download-windows.gd     download-macosx.gd    \
             index.gl     download-windows.gl     download-macosx.gl    \
             index.gu     download-windows.gu     download-macosx.gu    \
             index.he     download-windows.he     download-macosx.he    \
             index.hi     download-windows.hi     download-macosx.hi    \
             index.hr     download-windows.hr     download-macosx.hr    \
             index.hu     download-windows.hu     download-macosx.hu    \
             index.id     download-windows.id     download-macosx.id    \
             index.is     download-windows.is     download-macosx.is    \
             index.it     download-windows.it     download-macosx.it    \
             index.ja     download-windows.ja     download-macosx.ja    \
             index.ka     download-windows.ka     download-macosx.ka    \
             index.km     download-windows.km     download-macosx.km    \
             index.kn     download-windows.kn     download-macosx.kn    \
             index.ko     download-windows.ko     download-macosx.ko    \
             index.ky     download-windows.ky     download-macosx.ky    \
             index.lt     download-windows.lt     download-macosx.lt    \
             index.mk     download-windows.mk     download-macosx.mk    \
             index.mn_MN  download-windows.mn_MN  download-macosx.mn_MN \
             index.mr     download-windows.mr     download-macosx.mr    \
             index.my     download-windows.my     download-macosx.my    \
             index.nb     download-windows.nb     download-macosx.nb    \
             index.nl     download-windows.nl     download-macosx.nl    \
             index.or     download-windows.or     download-macosx.or    \
             index.pl     download-windows.pl     download-macosx.pl    \
             index.pt_BR  download-windows.pt_BR  download-macosx.pt_BR \
             index.pt     download-windows.pt     download-macosx.pt    \
             index.ro     download-windows.ro     download-macosx.ro    \
             index.ru     download-windows.ru     download-macosx.ru    \
             index.si     download-windows.si     download-macosx.si    \
             index.sk     download-windows.sk     download-macosx.sk    \
             index.sl     download-windows.sl     download-macosx.sl    \
             index.sr     download-windows.sr     download-macosx.sr    \
             index.sv     download-windows.sv     download-macosx.sv    \
             index.te     download-windows.te     download-macosx.te    \
             index.th     download-windows.th     download-macosx.th    \
             index.tr     download-windows.tr     download-macosx.tr    \
             index.uk     download-windows.uk     download-macosx.uk    \
             index.ur     download-windows.ur     download-macosx.ur    \
             index.uz     download-windows.uz     download-macosx.uz    \
             index.vi     download-windows.vi     download-macosx.vi    \
             index.wa     download-windows.wa     download-macosx.wa    \
             index.zh     download-windows.zh     download-macosx.zh    \
             index.zh_TW  download-windows.zh_TW  download-macosx.zh_TW \
                          download-windows        download-macosx

download-windows.%.php: download-windows.php $(ROOT)/locale/%/LC_MESSAGES/website.po
	rm -f ./$@ && sed -e "s/language = \"\"/language = \"$*\"/" download-windows.php > ./$@;
	msgfmt -c -v -o $(ROOT)/locale/$*/LC_MESSAGES/website.mo $(ROOT)/locale/$*/LC_MESSAGES/website.po

download-macosx.%.php: download-macosx.php $(ROOT)/locale/%/LC_MESSAGES/website.po
	rm -f ./$@ && sed -e "s/language = \"\"/language = \"$*\"/" download-macosx.php > ./$@;
	msgfmt -c -v -o $(ROOT)/locale/$*/LC_MESSAGES/website.mo $(ROOT)/locale/$*/LC_MESSAGES/website.po


