all: clean html ps pdf rtf txt

html:
	rm -f *.html
	/bin/cp ../common/magic-jpg.sgml ../common/magic.sgml
	/bin/cp ../../images/plan-videolan-640.jpg .
	sgmltools -b html -s ../common/stylesheet-html.dsl vlc-user-guide.sgml
	mv vlc-user-guide/*.html .
	rmdir vlc-user-guide
	ln -sf book1.html index.html
	zip vlc-user-guide-html.zip *.html *.jpg

ps:
	/bin/cp ../common/magic-eps.sgml ../common/magic.sgml
	/bin/cp ../../images/plan-videolan-640.eps .
	sgmltools -b ps -s ../common/stylesheet-print.dsl vlc-user-guide.sgml
	zip vlc-user-guide-ps.zip vlc-user-guide.ps

pdf:
	/bin/cp ../common/magic-jpg.sgml ../common/magic.sgml
	/bin/cp ../../images/plan-videolan-640.jpg .
	sgmltools -b pdf -s ../common/stylesheet-print-noicones.dsl vlc-user-guide.sgml
	zip vlc-user-guide-pdf.zip vlc-user-guide.pdf

rtf:
	/bin/cp ../common/magic-jpg.sgml ../common/magic.sgml
	/bin/cp ../../images/plan-videolan-640.jpg .
	sgmltools -b rtf -s ../common/stylesheet-print-noicones.dsl vlc-user-guide.sgml
	zip vlc-user-guide-rtf.zip vlc-user-guide.rtf *.jpg

txt:
	sgmltools -b txt vlc-user-guide.sgml

clean:
	rm -f *.zip *.html *.pdf *.ps *.jpg *.txt
