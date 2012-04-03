PHP_IGNORES = download-skins2 download-skins2-go skins skins_upload skins_old
SUBDIR = contest releases

PHP_FILES := $(wildcard vlc/*.php) \
        index.fr index.de index.ru \
        download-windows.fr download-windows.de download-windows.ru \
        download-macosx.fr download-macosx.de download-macosx.ru

download-windows.%.php: download-windows.php $(ROOT)/locale/%/LC_MESSAGES/website.po
	rm -f ./$@ && sed -e "s/language = \"\"/language = \"$*\"/" download-windows.php > ./$@;
	msgfmt -c -v -o $(ROOT)/locale/$*/LC_MESSAGES/website.mo $(ROOT)/locale/$*/LC_MESSAGES/website.po

download-macosx.%.php: download-macosx.php $(ROOT)/locale/%/LC_MESSAGES/website.po
	rm -f ./$@ && sed -e "s/language = \"\"/language = \"$*\"/" download-macosx.php > ./$@;
	msgfmt -c -v -o $(ROOT)/locale/$*/LC_MESSAGES/website.mo $(ROOT)/locale/$*/LC_MESSAGES/website.po


