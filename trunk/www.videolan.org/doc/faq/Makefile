# Makefile for the VideoLAN Documentation
# Written by Alexis de Lattre <alexis@videolan.org>

DOC := videolan-faq

# TODO : no more redundancy between the 2 languages

# The FAQ is available in english and spanish
all: en es fr

clean:
	rm -f *.zip *.html *.pdf *.ps *.txt *.rtf *.dvi *.out *.aux *.log

# ENGLISH

en: $(DOC)-en.html $(DOC)-en.ps $(DOC)-en.pdf $(DOC)-en.rtf $(DOC)-en.txt

$(DOC)-en.xml: $(DOC).xml
	xsltproc --stringparam lang en ../common/multilanguage.xsl $(DOC).xml > $(DOC)-en.xml.tmp
	sed -e 's/id=\"videolan-faq\"/id=\"videolan-faq-en\"/' $(DOC)-en.xml.tmp > $(DOC)-en.xml
	rm -f $(DOC)-en.xml.tmp

$(DOC)-en.html: $(DOC)-en.xml
	/bin/cp ../common/magic-jpg.xml ../common/magic.xml
	jade -t sgml -d ../common/stylesheet-html.dsl $(DOC)-en.xml
	ln -sf $(DOC)-en.html index.html
	zip $(DOC)-en-html.zip $(DOC)-en.html

$(DOC)-en.ps: $(DOC)-en.xml
	/bin/cp ../common/magic-eps.xml ../common/magic.xml
	jade -t tex -d ../common/stylesheet-print.dsl -o $(DOC)-en.tex $(DOC)-en.xml
	jadetex $(DOC)-en.tex
	jadetex $(DOC)-en.tex
	jadetex $(DOC)-en.tex
	rm -f *.tex *.out *.aux *.log
	dvips -o $(DOC)-en.ps $(DOC)-en.dvi
	zip $(DOC)-en-ps.zip $(DOC)-en.ps

$(DOC)-en.pdf: $(DOC)-en.xml
	/bin/cp ../common/magic-jpg.xml ../common/magic.xml
	jade -t tex -d ../common/stylesheet-print-noicones.dsl -o $(DOC)-en.tex $(DOC)-en.xml
	pdfjadetex $(DOC)-en.tex
	pdfjadetex $(DOC)-en.tex
	pdfjadetex $(DOC)-en.tex
	rm -f *.tex *.out *.aux *.log
	zip $(DOC)-en-pdf.zip $(DOC)-en.pdf

$(DOC)-en.rtf: $(DOC)-en.xml
	/bin/cp ../common/magic-jpg.xml ../common/magic.xml
	jade -t rtf -d ../common/stylesheet-print-noicones.dsl -o $(DOC)-en.rtf $(DOC)-en.xml
	zip $(DOC)-en-rtf.zip $(DOC)-en.rtf

$(DOC)-en.txt: $(DOC)-en.xml
	/bin/cp ../common/magic-jpg.xml ../common/magic.xml
	jade -t sgml -d ../common/stylesheet-txt.dsl -V nochunks $(DOC)-en.xml > dump-en.html
#	w3m -dump dump-en.html > $(DOC)-en.txt
	lynx -force_html -dump dump-en.html > $(DOC)-en.txt
	rm -f dump-en.html

# SPANISH

es: $(DOC)-es.html $(DOC)-es.ps $(DOC)-es.pdf $(DOC)-es.rtf $(DOC)-es.txt

$(DOC)-es.xml: $(DOC).xml
	xsltproc --stringparam lang es ../common/multilanguage.xsl $(DOC).xml > $(DOC)-es.xml.tmp
	sed -e 's/id=\"videolan-faq\"/id=\"videolan-faq-es\"/' $(DOC)-es.xml.tmp > $(DOC)-es.xml
	rm -f $(DOC)-es.xml.tmp

$(DOC)-es.html: $(DOC)-es.xml
	/bin/cp ../common/magic-jpg.xml ../common/magic.xml
	jade -t sgml -d ../common/stylesheet-html.dsl $(DOC)-es.xml
	zip $(DOC)-es-html.zip $(DOC)-es.html

$(DOC)-es.ps: $(DOC)-es.xml
	/bin/cp ../common/magic-eps.xml ../common/magic.xml
	jade -t tex -d ../common/stylesheet-print.dsl -o $(DOC)-es.tex $(DOC)-es.xml
	jadetex $(DOC)-es.tex
	jadetex $(DOC)-es.tex
	jadetex $(DOC)-es.tex
	rm -f *.tex *.out *.aux *.log
	dvips -o $(DOC)-es.ps $(DOC)-es.dvi
	zip $(DOC)-es-ps.zip $(DOC)-es.ps

$(DOC)-es.pdf: $(DOC)-es.xml
	/bin/cp ../common/magic-jpg.xml ../common/magic.xml
	jade -t tex -d ../common/stylesheet-print-noicones.dsl -o $(DOC)-es.tex $(DOC)-es.xml
	pdfjadetex $(DOC)-es.tex
	pdfjadetex $(DOC)-es.tex
	pdfjadetex $(DOC)-es.tex
	rm -f *.tex *.out *.aux *.log
	zip $(DOC)-es-pdf.zip $(DOC)-es.pdf

$(DOC)-es.rtf: $(DOC)-es.xml
	/bin/cp ../common/magic-jpg.xml ../common/magic.xml
	jade -t rtf -d ../common/stylesheet-print-noicones.dsl -o $(DOC)-es.rtf $(DOC)-es.xml
	zip $(DOC)-es-rtf.zip $(DOC)-es.rtf

$(DOC)-es.txt: $(DOC)-es.xml
	/bin/cp ../common/magic-jpg.xml ../common/magic.xml
	jade -t sgml -d ../common/stylesheet-txt.dsl -V nochunks $(DOC)-es.xml > dump-es.html
#	w3m -dump dump-es.html > $(DOC)-es.txt
	lynx -force_html -dump dump-es.html > $(DOC)-es.txt
	rm -f dump-es.html

# FRENCH

fr: $(DOC)-fr.html $(DOC)-fr.ps $(DOC)-fr.pdf $(DOC)-fr.rtf $(DOC)-fr.txt

$(DOC)-fr.xml: $(DOC).xml
	xsltproc --stringparam lang fr ../common/multilanguage.xsl $(DOC).xml > $(DOC)-fr.xml.tmp
	sed -e 's/id=\"videolan-faq\"/id=\"videolan-faq-fr\"/' $(DOC)-fr.xml.tmp > $(DOC)-fr.xml
	rm -f $(DOC)-fr.xml.tmp

$(DOC)-fr.html: $(DOC)-fr.xml
	/bin/cp ../common/magic-jpg.xml ../common/magic.xml
	jade -t sgml -d ../common/stylesheet-html.dsl $(DOC)-fr.xml
	ln -sf $(DOC)-fr.html index.html
	zip $(DOC)-fr-html.zip $(DOC)-fr.html

$(DOC)-fr.ps: $(DOC)-fr.xml
	/bin/cp ../common/magic-eps.xml ../common/magic.xml
	jade -t tex -d ../common/stylesheet-print.dsl -o $(DOC)-fr.tex $(DOC)-fr.xml
	jadetex $(DOC)-fr.tex
	jadetex $(DOC)-fr.tex
	jadetex $(DOC)-fr.tex
	rm -f *.tex *.out *.aux *.log
	dvips -o $(DOC)-fr.ps $(DOC)-fr.dvi
	zip $(DOC)-fr-ps.zip $(DOC)-fr.ps

$(DOC)-fr.pdf: $(DOC)-fr.xml
	/bin/cp ../common/magic-jpg.xml ../common/magic.xml
	jade -t tex -d ../common/stylesheet-print-noicones.dsl -o $(DOC)-fr.tex $(DOC)-fr.xml
	pdfjadetex $(DOC)-fr.tex
	pdfjadetex $(DOC)-fr.tex
	pdfjadetex $(DOC)-fr.tex
	rm -f *.tex *.out *.aux *.log
	zip $(DOC)-fr-pdf.zip $(DOC)-fr.pdf

$(DOC)-fr.rtf: $(DOC)-fr.xml
	/bin/cp ../common/magic-jpg.xml ../common/magic.xml
	jade -t rtf -d ../common/stylesheet-print-noicones.dsl -o $(DOC)-fr.rtf $(DOC)-fr.xml
	zip $(DOC)-fr-rtf.zip $(DOC)-fr.rtf

$(DOC)-fr.txt: $(DOC)-fr.xml
	/bin/cp ../common/magic-jpg.xml ../common/magic.xml
	jade -t sgml -d ../common/stylesheet-txt.dsl -V nochunks $(DOC)-fr.xml > dump-fr.html
#	w3m -dump dump-fr.html > $(DOC)-fr.txt
	lynx -force_html -dump dump-fr.html > $(DOC)-fr.txt
	rm -f dump-fr.html


