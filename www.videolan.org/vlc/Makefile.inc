PHP_IGNORES = download-skins2 download-skins2-go skins skins_upload skins_old
SUBDIR = contest releases stats

PHP_FILES := index features libvlc screenshots skineditor skineditor_update \
             skins skins_upload streaming privacy \
             download-altlinux download-android download-archlinux download-beos download-crux download-chromeos download-debian download-eyetv download-familiar download-fedora download-freebsd download-gentoo download-ios download-appletv download-winrt download-linupy download-macosx download-maemo download-redhat download-skins2-go download-skins download-slackware download-sources download-suse download-syllable download-ubuntu download-wince download-windows download-windowsphone \
             index.af     download-windows.af     download-macosx.af    \
             index.an     download-windows.an     download-macosx.an    \
             index.ar     download-windows.ar     download-macosx.ar    \
             index.ast    download-windows.ast    download-macosx.ast   \
             index.be     download-windows.be     download-macosx.be    \
             index.bg     download-windows.bg     download-macosx.bg    \
             index.bn     download-windows.bn     download-macosx.bn    \
             index.bn-IN  download-windows.bn-IN  download-macosx.bn-IN \
             index.bs     download-windows.bs     download-macosx.bs    \
             index.ca     download-windows.ca     download-macosx.ca    \
             index.co     download-windows.co     download-macosx.co    \
             index.cs     download-windows.cs     download-macosx.cs    \
             index.cy     download-windows.cy     download-macosx.cy    \
             index.da     download-windows.da     download-macosx.da    \
             index.de     download-windows.de     download-macosx.de    \
             index.de-LU  download-windows.de-LU  download-macosx.de-LU \
             index.dv     download-windows.dv     download-macosx.dv    \
             index.el     download-windows.el     download-macosx.el    \
             index.en-GB  download-windows.en-GB  download-macosx.en-GB \
             index.es     download-windows.es     download-macosx.es    \
             index.es-MX  download-windows.es-MX  download-macosx.es-MX \
             index.et     download-windows.et     download-macosx.et    \
             index.fa     download-windows.fa     download-macosx.fa    \
             index.fi     download-windows.fi     download-macosx.fi    \
             index.fo     download-windows.fo     download-macosx.fo    \
             index.fr     download-windows.fr     download-macosx.fr    \
             index.fy     download-windows.fy     download-macosx.fy    \
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
             index.lo     download-windows.lo     download-macosx.lo    \
             index.lt     download-windows.lt     download-macosx.lt    \
             index.lv     download-windows.lv     download-macosx.lv    \
             index.mk     download-windows.mk     download-macosx.mk    \
             index.ml     download-windows.ml     download-macosx.ml    \
             index.mn-MN  download-windows.mn-MN  download-macosx.mn-MN \
             index.mr     download-windows.mr     download-macosx.mr    \
             index.ms     download-windows.ms     download-macosx.ms    \
             index.my     download-windows.my     download-macosx.my    \
             index.nb     download-windows.nb     download-macosx.nb    \
             index.nl     download-windows.nl     download-macosx.nl    \
             index.or     download-windows.or     download-macosx.or    \
             index.pl     download-windows.pl     download-macosx.pl    \
             index.pt-BR  download-windows.pt-BR  download-macosx.pt-BR \
             index.pt     download-windows.pt     download-macosx.pt    \
             index.ro     download-windows.ro     download-macosx.ro    \
             index.ru     download-windows.ru     download-macosx.ru    \
             index.si     download-windows.si     download-macosx.si    \
             index.sk     download-windows.sk     download-macosx.sk    \
             index.sl     download-windows.sl     download-macosx.sl    \
             index.sq     download-windows.sq     download-macosx.sq    \
             index.sr     download-windows.sr     download-macosx.sr    \
             index.sv     download-windows.sv     download-macosx.sv    \
             index.ta     download-windows.ta     download-macosx.ta    \
             index.te     download-windows.te     download-macosx.te    \
             index.th     download-windows.th     download-macosx.th    \
             index.tr     download-windows.tr     download-macosx.tr    \
             index.tt     download-windows.tt     download-macosx.tt    \
             index.uk     download-windows.uk     download-macosx.uk    \
             index.ur     download-windows.ur     download-macosx.ur    \
             index.uz     download-windows.uz     download-macosx.uz    \
             index.vi     download-windows.vi     download-macosx.vi    \
             index.zh     download-windows.zh     download-macosx.zh    \
             index.zh-TW  download-windows.zh-TW  download-macosx.zh-TW \
                          download-windows        download-macosx

download-windows.%.php: download-windows.php $(ROOT)/locale/%/LC_MESSAGES/website.po
	rm -f ./$@ && sed -e "s/language = \"\"/language = \"$*\"/" download-windows.php > ./$@;
	msgfmt -c -v -o $(ROOT)/locale/$*/LC_MESSAGES/website.mo $(ROOT)/locale/$*/LC_MESSAGES/website.po

download-macosx.%.php: download-macosx.php $(ROOT)/locale/%/LC_MESSAGES/website.po
	rm -f ./$@ && sed -e "s/language = \"\"/language = \"$*\"/" download-macosx.php > ./$@;
	msgfmt -c -v -o $(ROOT)/locale/$*/LC_MESSAGES/website.mo $(ROOT)/locale/$*/LC_MESSAGES/website.po


