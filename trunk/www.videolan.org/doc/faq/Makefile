# Makefile for the VideoLAN Documentation
# Written by Alexis de Lattre <alexis@videolan.org>
# Factorised by Sam Hocevar <sam@zoy.org>

DOC = videolan-faq
LANG = es fr en
EXT = html ps pdf rtf txt
XML_DECL := /usr/lib/sgml/declaration/xml.decl

# The generic rule: build all extensions for all languages
all: $(LANG)
$(LANG): %: $(foreach ext, $(EXT), $(DOC)-%.$(ext))

# The clean rule
clean:
	rm -f *.zip *.html *.pdf *.ps *.txt *.rtf *.dvi *.out *.aux *.log $(DOC)-*.xml *.tmp

# Specific rules for each extension
$(LANG:%=$(DOC)-%.xml): $(DOC).xml
	xsltproc --stringparam lang $(shell echo $(basename $@) | sed -e 's/.*-//') ../common/multilanguage.xsl $^ | sed -e 's/id="$(DOC)"/id="$(basename $@)"/' > $@

$(LANG:%=$(DOC)-%.html): %.html: %.xml
	jade -t sgml -d ../common/stylesheet-html.dsl $(XML_DECL) $^
	ln -sf $@ index.html
	zip $(basename $@)-html.zip $@

$(LANG:%=$(DOC)-%.pdf): %.pdf: %.xml
	jade -t tex -d ../common/stylesheet-print-noicones.dsl -o $(basename $@).tex $(XML_DEC) $^
	pdfjadetex $(basename $@).tex
	pdfjadetex $(basename $@).tex
	pdfjadetex $(basename $@).tex
	rm -f *.tex *.out *.aux *.log
	zip $(basename $@)-pdf.zip $@

$(LANG:%=$(DOC)-%.rtf): %.rtf: %.xml
	jade -t rtf -d ../common/stylesheet-print-noicones.dsl -o $@ $(XML_DECL) $^
	zip $(basename $@)-rtf.zip $@

$(LANG:%=$(DOC)-%.txt): %.txt: %.xml
	jade -t sgml -d ../common/stylesheet-txt.dsl -V nochunks $(XML_DECL) $^ > $^.html
#	w3m -dump $^.html > $@
	lynx -force_html -dump $^.html > $@
	rm -f $^.html

