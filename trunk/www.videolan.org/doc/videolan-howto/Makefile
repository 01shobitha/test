all: clean html ps pdf rtf txt

html:
	/bin/cp ../common/magic-jpg.sgml ../common/magic.sgml
	/bin/cp ../../images/plan-videolan-640.eps .
	sgmltools -b html -s ../common/stylesheet-html.dsl videolan-howto.sgml
	mv videolan-howto/*.html .
	rmdir videolan-howto
	ln -sf book1.html index.html
	zip videolan-howto-html.zip *.html *.jpg

ps:
	/bin/cp ../common/magic-eps.sgml ../common/magic.sgml
	/bin/cp ../../images/plan-videolan-640.eps .
	sgmltools -b ps -s ../common/stylesheet-print.dsl videolan-howto.sgml
	zip videolan-howto-ps.zip videolan-howto.ps

pdf:
	/bin/cp ../common/magic-jpg.sgml ../common/magic.sgml
	/bin/cp ../../images/plan-videolan-640.jpg .
	sgmltools -b pdf -s ../common/stylesheet-print-noicones.dsl videolan-howto.sgml
	zip videolan-howto-pdf.zip videolan-howto.pdf

rtf:
	/bin/cp ../common/magic-jpg.sgml ../common/magic.sgml
	/bin/cp ../../images/plan-videolan-640.jpg .
	sgmltools -b rtf -s ../common/stylesheet-print-noicones.dsl videolan-howto.sgml
	zip videolan-howto-rtf.zip videolan-howto.rtf *.jpg

txt:
	sgmltools -b txt videolan-howto.sgml

clean:
	rm -f *.zip *.html *.pdf *.ps *.txt
