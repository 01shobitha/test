all: html ps pdf rtf

html:
	rm -f *.html
	/bin/cp ../common/magic-jpg.sgml ../common/magic.sgml
	sgmltools -b html -s ../common/stylesheet-html.dsl videolan-quickstart.sgml
	mv videolan-quickstart/*.html .
	rmdir videolan-quickstart
	ln -s book1.html index.html
	zip videolan-quickstart-html.zip *.html ../../../doc/plan-global/plan-videolan-640.jpg

ps:
	/bin/cp ../common/magic-eps.sgml ../common/magic.sgml
	sgmltools -b ps -s ../common/stylesheet-print.dsl videolan-quickstart.sgml
	zip videolan-quickstart-ps.zip videolan-quickstart.ps

pdf:
	/bin/cp ../common/magic-jpg.sgml ../common/magic.sgml
	sgmltools -b pdf -s ../common/stylesheet-print-noicones.dsl videolan-quickstart.sgml
	zip videolan-quickstart-pdf.zip videolan-quickstart.pdf

rtf:
	/bin/cp ../common/magic-jpg.sgml ../common/magic.sgml
	sgmltools -b rtf -s ../common/stylesheet-print-noicones.dsl videolan-quickstart.sgml
	zip videolan-quickstart-rtf.zip videolan-quickstart.rtf ../../../doc/plan-global/plan-videolan-640.jpg

clean:
	rm -f *.zip *.html *.pdf *.ps
