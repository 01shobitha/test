# Makefile for the VideoLAN Documentation in DocBook XML
# Written by Alexis de Lattre <alexis@videolan.org>
# To build another language than the default one, do 'make LANG=foo'

# Document name
DOC := videolan-faq

# XML declaration
XML_DECL1 = /usr/lib/sgml/declaration/xml.decl
XML_DECL2 = /usr/share/sgml/declaration/xml.decl
XML_DECL := `test -f $(XML_DECL1) && echo $(XML_DECL1) || echo $(XML_DECL2)`

# Default language (English)
LANG = en

XSL= ../common/videolan-doc.xsl

# All available languages (used in 'make clean')
ALL_LANG = en fr es de it

# Build HTML, PDF, RTF and TXT outputs (for the web site)
all: $(LANG)/$(DOC)-$(LANG).html $(LANG)/$(DOC)-$(LANG).pdf $(LANG)/$(DOC)-$(LANG).rtf $(LANG)/$(DOC)-$(LANG).txt

init-$(LANG):
	mkdir -p $(LANG)/
	ln -sf ../../../images/documentation $(LANG)/images
	cp screen.css $(LANG)
	cp ../common/htaccess $(LANG)/.htaccess

# HTML output
$(LANG)/$(DOC)-$(LANG).html: init-$(LANG)
	xsltproc $(XSL) src/$(LANG)/$(DOC).xml
	mv *.html $(LANG)
	cd $(LANG) && cp index.html $(DOC)-$(LANG).html && cd ..
	rm -f $(LANG)/$(DOC)-$(LANG)-html.zip
	cd $(LANG) && zip $(DOC)-$(LANG)-html.zip *.html images/*.gif

# PDF output
$(LANG)/$(DOC)-$(LANG).pdf: init-$(LANG)
	jade -t tex -d ../common/stylesheet-print-noicones.dsl -o $(LANG)/$(DOC)-$(LANG).tex $(XML_DECL) src/$(LANG)/$(DOC).xml
	cd $(LANG) && pdfjadetex $(DOC)-$(LANG).tex
	cd $(LANG) && pdfjadetex $(DOC)-$(LANG).tex
	cd $(LANG) && pdfjadetex $(DOC)-$(LANG).tex
	cd $(LANG) && rm -f *.tex *.out *.aux *.log
	cd $(LANG) && zip $(DOC)-$(LANG)-pdf.zip $(DOC)-$(LANG).pdf

# RTF output
$(LANG)/$(DOC)-$(LANG).rtf:init-$(LANG)
	cd $(LANG) && jade -t rtf -d ../../common/stylesheet-print-noicones.dsl -o $(DOC)-$(LANG).rtf $(XML_DECL) ../src/$(LANG)/$(DOC).xml
	rm -f $(LANG)/$(DOC)-$(LANG)-rtf.zip
	cd $(LANG) && zip $(DOC)-$(LANG)-rtf.zip $(DOC)-$(LANG).rtf

# TXT output
$(LANG)/$(DOC)-$(LANG).txt:init-$(LANG)
	jade -t sgml -d ../common/stylesheet-txt.dsl -V nochunks $(XML_DECL) src/$(LANG)/$(DOC).xml > $(LANG)/dumpfortxt.html
	lynx -force_html -dump $(LANG)/dumpfortxt.html > $(LANG)/$(DOC)-$(LANG).txt
	rm -f $(LANG)/dumpfortxt.html

# Delete all outputs
clean:
	rm -rf $(ALL_LANG)

# All languages
all-lang:
	for l in $(ALL_LANG); do $(MAKE) LANG=$$l || exit 1; done

