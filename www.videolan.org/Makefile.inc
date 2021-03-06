# Subdirectories to be preprocessed
SUBDIR = doc security support vlc videolan projects developers locale press vlmc

# Files to be preprocessed
#PHP_FILES = # automatic
PHP_IGNORES =

# Additionnal dependencies

news.html: news.msg

news-rss.html: news.msg

index.html: news.msg

style/style.css: style/style.scss style/theme.scss style/mixins.scss
	@echo "Processing $< ..."
	sassc $< > $@ || sass $< > $@

style/style.min.css: style/style.css
	@echo "Processing $< ..."
	yui-compressor --type css $< > $@.tmp || cp $< $@.tmp
	rm -f $@ && mv $@.tmp $@

style/bootstrap.css: style/bootstrap.scss
	@echo "Processing $< ..."
	sassc $< > $@ || sass $< > $@

style/bootstrap.min.css: style/bootstrap.css
	@echo "Processing $< ..."
	yui-compressor --type css $< > $@.tmp || cp $< $@.tmp
	rm -f $@ && mv $@.tmp $@

style/slick.css: style/slick.scss style/slick-theme.scss
	@echo "Processing $< ..."
	sassc $< > $@ || sass $< > $@

style/slick.min.css: style/slick.css
	@echo "Processing $< ..."
	yui-compressor --type css $< > $@.tmp || cp $< $@.tmp
	rm -f $@ && mv $@.tmp $@

js/slick.min.js: js/slick.js
	@echo "Processing $< ..."
	yui-compressor --type js $< > $@.tmp || cp $< $@.tmp
	rm -f $@ && mv $@.tmp $@


locales: index.af.php \
         index.an.php \
         index.ar.php \
         index.ast.php \
         index.be.php \
         index.bg.php \
         index.bn.php \
         index.bn-IN.php \
         index.bs.php \
         index.ca.php \
         index.co.php \
         index.cs.php \
         index.cy.php \
         index.da.php \
         index.de.php \
         index.de-LU.php \
         index.dv.php \
         index.el.php \
         index.en-GB.php \
         index.es.php \
         index.es-MX.php \
         index.et.php \
         index.fa.php \
         index.fi.php \
         index.fo.php \
         index.fr.php \
         index.fy.php \
         index.gd.php \
         index.gl.php \
         index.gu.php \
         index.he.php \
         index.hi.php \
         index.hr.php \
         index.hu.php \
         index.id.php \
         index.is.php \
         index.it.php \
         index.ja.php \
         index.ka.php \
         index.km.php \
         index.kn.php \
         index.ko.php \
         index.ky.php \
         index.lo.php \
         index.lt.php \
         index.lv.php \
         index.mk.php \
         index.ml.php \
         index.mn-MN.php \
         index.mr.php \
         index.ms.php \
         index.my.php \
         index.nb.php \
         index.nl.php \
         index.or.php \
         index.pl.php \
         index.pt.php \
         index.pt-BR.php \
         index.ro.php \
         index.ru.php \
         index.si.php \
         index.sk.php \
         index.sl.php \
         index.sq.php \
         index.sr.php \
         index.sv.php \
         index.ta.php \
         index.te.php \
         index.th.php \
         index.tr.php \
         index.tt.php \
         index.uk.php \
         index.ur.php \
         index.uz.php \
         index.vi.php \
         index.zh.php \
         index.zh-TW.php \
         include/header.php
