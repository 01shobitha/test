# Makefile for the VideoLAN Documentation in DocBook XML
# Written by Alexis de Lattre <alexis@videolan.org>

DOC := videolan-howto

XML_DECL := /usr/lib/sgml/declaration/xml.decl

# We build HTML, PS, PDF, RTF and TXT for the Web site
all: img html ps pdf rtf txt

# Get the images from the /images/documentation directory
img:
	rm -rf images
	cp -R ../../images/documentation images

html:
	/bin/cp ../common/magic-jpg.xml ../common/magic.xml
	jade -t sgml -d ../common/stylesheet-html.dsl $(XML_DECL) $(DOC).xml > $(DOC)-en.html
	ln -sf $(DOC)-en.html index.html
	rm -f $(DOC)-en-html.zip
	zip $(DOC)-en-html.zip *.html images/*.jpg

ps:
	/bin/cp ../common/magic-eps.xml ../common/magic.xml
	jade -t tex -o $(DOC)-en.tex -d ../common/stylesheet-print.dsl $(XML_DECL) $(DOC).xml
	jadetex $(DOC)-en.tex
	jadetex $(DOC)-en.tex
	jadetex $(DOC)-en.tex
	rm -f *.tex *.out *.aux *.log
	dvips  -o $(DOC)-en.ps $(DOC)-en.dvi
	zip $(DOC)-en-ps.zip $(DOC)-en.ps

pdf:
	/bin/cp ../common/magic-jpg.xml ../common/magic.xml
	jade -t tex -o $(DOC)-en.tex -d ../common/stylesheet-print-noicones.dsl $(XML_DECL) $(DOC).xml
	pdfjadetex $(DOC)-en.tex
	pdfjadetex $(DOC)-en.tex
	pdfjadetex $(DOC)-en.tex
	rm -f *.tex *.out *.aux *.log
	zip $(DOC)-en-pdf.zip $(DOC)-en.pdf

rtf:
	/bin/cp ../common/magic-jpg.xml ../common/magic.xml
	jade -t rtf -o $(DOC)-en.rtf -d ../common/stylesheet-print-noicones.dsl $(XML_DECL) $(DOC).xml
	rm -f $(DOC)-en-rtf.zip
	zip $(DOC)-en-rtf.zip $(DOC)-en.rtf images/*.jpg

txt:
	/bin/cp ../common/magic-jpg.xml ../common/magic.xml
	jade -t sgml -V nochunks -d ../common/stylesheet-txt.dsl $(XML_DECL) $(DOC).xml > dump-en.html
	lynx -force_html -dump dump-en.html > $(DOC)-en.txt
	rm -f dump-en.html

clean:
	rm -f *.zip *.html *.pdf *.ps *.rtf *.txt *.dvi *.tex *.out *.aux *.log
