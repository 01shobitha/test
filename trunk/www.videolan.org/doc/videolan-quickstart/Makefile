all: clean html ps pdf rtf txt

html:
	/bin/cp ../common/magic-jpg.sgml ../common/magic.sgml
	/bin/cp ../../images/plan-videolan-640.jpg .
	/bin/cp ../common/fdl.txt .
	sgmltools -b html -s ../common/stylesheet-html.dsl videolan-quickstart.sgml
	mv videolan-quickstart/*.html .
	rmdir videolan-quickstart
	ln -s book1.html index.html
	zip videolan-quickstart-html.zip *.html *.jpg

ps:
	/bin/cp ../common/magic-eps.sgml ../common/magic.sgml
	/bin/cp ../../images/plan-videolan-640.eps .
	/bin/cp ../common/fdl.txt .
	sgmltools -b ps -s ../common/stylesheet-print.dsl videolan-quickstart.sgml
	zip videolan-quickstart-ps.zip videolan-quickstart.ps

pdf:
	/bin/cp ../common/magic-jpg.sgml ../common/magic.sgml
	/bin/cp ../../images/plan-videolan-640.jpg .
	/bin/cp ../common/fdl.txt .
	sgmltools -b pdf -s ../common/stylesheet-print-noicones.dsl videolan-quickstart.sgml
	zip videolan-quickstart-pdf.zip videolan-quickstart.pdf

rtf:
	/bin/cp ../common/magic-jpg.sgml ../common/magic.sgml
	/bin/cp ../../images/plan-videolan-640.jpg .
	/bin/cp ../common/fdl.txt .
	/bin/cp ../../images/plan-videolan-640.jpg .
	sgmltools -b rtf -s ../common/stylesheet-print-noicones.dsl videolan-quickstart.sgml
	zip videolan-quickstart-rtf.zip videolan-quickstart.rtf *.jpg

txt:
	sgmltools -b txt videolan-quickstart.sgml

clean:
	rm -f *.zip *.html *.pdf *.ps
