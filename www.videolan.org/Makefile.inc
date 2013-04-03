# Subdirectories to be preprocessed
SUBDIR = doc security support vlc videolan projects developers locale press vlmc

# Files to be preprocessed
#PHP_FILES = # automatic
PHP_IGNORES =

# Additionnal dependencies

news.html: news.msg

news-rss.html: news.msg

index.html: news.msg

style/style.css: style/style.css.in
	@echo "Processing $@.in ..."
	yui-compressor --type css $< > $@.tmp || cp $< $@.tmp
	rm -f $@ && mv $@.tmp $@

locales: index.an.php index.ast.php index.bg.php index.bn_IN.php index.bs.php index.by.php \
         index.ca.php \
         index.cs.php index.da.php index.de.php \
         index.el.php index.es.php index.et.php index.fi.php index.fr.php index.gd.php index.ge.php index.gl.php index.gu.php \
         index.he.php index.hi.php \
         index.hr.php \
         index.is.php \
         index.it.php \
         index.ja.php index.km.php index.mk.php index.mr.php index.nb.php index.nl.php index.or.php \
         index.pl.php index.pt.php index.pt_BR.php index.ro.php index.ru.php index.sk.php index.sr.php index.th.php index.tr.php \
         index.uk.php index.ur.php index.wa.php index.zh.php include/header.php

