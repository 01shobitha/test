PHP_IGNORES = download-skins2 download-skins2-go skins skins_upload skins_old
SUBDIR = contest releases stats

PHP_FILES := download-* index features libvlc screenshots skineditor skineditor_update \
             skins skins_upload streaming \
             index.fr index.de index.ru index.tr index.hi index.cs index.he \
             index.ja index.pl index.wa \
             download-windows.fr download-windows.de download-windows.ru \
             download-windows.tr download-windows.hi download-windows.cs \
             download-windows.he download-windows.ja download-windows.pl \
             download-macosx.fr download-macosx.de download-macosx.ru \
             download-macosx.tr download-macosx.hi download-macosx.cs \
             download-macosx.he download-macosx.ja download-macosx.pl \
             download-macosx.wa

download-windows.%.php: download-windows.php $(ROOT)/locale/%/LC_MESSAGES/website.po
	rm -f ./$@ && sed -e "s/language = \"\"/language = \"$*\"/" download-windows.php > ./$@;
	msgfmt -c -v -o $(ROOT)/locale/$*/LC_MESSAGES/website.mo $(ROOT)/locale/$*/LC_MESSAGES/website.po

download-macosx.%.php: download-macosx.php $(ROOT)/locale/%/LC_MESSAGES/website.po
	rm -f ./$@ && sed -e "s/language = \"\"/language = \"$*\"/" download-macosx.php > ./$@;
	msgfmt -c -v -o $(ROOT)/locale/$*/LC_MESSAGES/website.mo $(ROOT)/locale/$*/LC_MESSAGES/website.po


