all: html ps pdf zip

html:
	rm -f *.html
	/bin/cp ../common/magic-jpg.sgml ../common/magic.sgml
	sgmltools -b html -s ../common/stylesheet-html.dsl videolan-quickstart.sgml
	mv videolan-quickstart/*.html .
	rmdir videolan-quickstart
	ln -s book1.html index.html

zip:
	zip videolan-quickstart.zip *.html *.jpg

ps:
	/bin/cp ../common/magic-eps.sgml ../common/magic.sgml
	sgmltools -b ps -s ../common/stylesheet-print.dsl videolan-quickstart.sgml

pdf:
	/bin/cp ../common/magic-jpg.sgml ../common/magic.sgml
	sgmltools -b pdf -s ../common/stylesheet-print.dsl videolan-quickstart.sgml
