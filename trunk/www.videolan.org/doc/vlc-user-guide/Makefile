# Makefile for the VideoLAN Documentation

DOC := vlc-user-guide

# We build HTML, PS, PDF, RTF and  TXT for the Web site
all: images html ps pdf rtf txt

# Get the images from the /images/documentation directory
images:
	rm -rf images
	cp -R ../../images/documentation images

html:
	/bin/cp ../common/magic-jpg.sgml ../common/magic.sgml
	sgmltools -b html -s ../common/stylesheet-html.dsl $(DOC).sgml
	mv $(DOC)/*.html .
	rmdir $(DOC)
	ln -sf book1.html index.html
	rm -f $(DOC)-html.zip
	zip $(DOC)-html.zip *.html images/*.jpg

ps:
	/bin/cp ../common/magic-eps.sgml ../common/magic.sgml
	sgmltools -b ps -s ../common/stylesheet-print.dsl $(DOC).sgml
	zip $(DOC)-ps.zip $(DOC).ps

pdf:
	/bin/cp ../common/magic-jpg.sgml ../common/magic.sgml
	sgmltools -b pdf -s ../common/stylesheet-print-noicones.dsl $(DOC).sgml
	zip $(DOC)-pdf.zip $(DOC).pdf

rtf:
	/bin/cp ../common/magic-jpg.sgml ../common/magic.sgml
	sgmltools -b rtf -s ../common/stylesheet-print-noicones.dsl $(DOC).sgml
	rm -f $(DOC)-rtf.zip
	zip $(DOC)-rtf.zip $(DOC).rtf images/*.jpg

txt:
	sgmltools -b txt $(DOC).sgml

clean:
	rm -f *.zip *.html *.pdf *.ps *.txt *.rtf
