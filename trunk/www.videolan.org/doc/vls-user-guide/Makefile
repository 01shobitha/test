# Makefile for the VideoLAN Documentation in DocBook XML
# Written by Alexis de Lattre <alexis@videolan.org>

DOC := vls-user-guide

XML_DECL := /usr/lib/sgml/declaration/xml.decl

LANG = en

# We build HTML, PDF, RTF and TXT for the Web site
all: $(LANG)/$(DOC)-$(LANG).html $(LANG)/$(DOC)-$(LANG).pdf $(LANG)/$(DOC)-$(LANG).rtf $(LANG)/$(DOC)-$(LANG).txt

$(LANG)/$(DOC)-$(LANG).xml: $(DOC).xml
	mkdir -p $(LANG)
	xsltproc --stringparam lang $(LANG) ../common/multilanguage.xsl $^ | sed -e 's/id="$(DOC)"/id="$(DOC)-$(LANG)"/' > $@
	cp -R ../../images/documentation $(LANG)/images

$(LANG)/$(DOC)-$(LANG).html: $(LANG)/$(DOC)-$(LANG).xml
	jade -t sgml -d ../common/stylesheet-html.dsl $(XML_DECL) $^
	mv *.html $(LANG)
	rm -f $(LANG)/$(DOC)-$(LANG)-html.zip
	cd $(LANG) && zip $(DOC)-$(LANG)-html.zip *.html images/*.jpg

$(LANG)/$(DOC)-$(LANG).pdf: $(LANG)/$(DOC)-$(LANG).xml
	jade -t tex -d ../common/stylesheet-print-noicones.dsl -o $(basename $@).tex $(XML_DECL) $^
	cd $(LANG) && pdfjadetex $(DOC)-$(LANG).tex
	cd $(LANG) && rm -f *.tex *.out *.aux *.log
	cd $(LANG) && zip $(DOC)-$(LANG)-pdf.zip $(DOC)-$(LANG).pdf

$(LANG)/$(DOC)-$(LANG).rtf: $(LANG)/$(DOC)-$(LANG).xml
	cd $(LANG) && jade -t rtf -d ../../common/stylesheet-print-noicones.dsl -o $(DOC)-$(LANG).rtf $(XML_DECL) $(DOC)-$(LANG).xml
	rm -f $(LANG)/$(DOC)-$(LANG)-rtf.zip
	cd $(LANG) && zip $(DOC)-$(LANG)-rtf.zip $(DOC)-$(LANG).rtf images/*.jpg

$(LANG)/$(DOC)-$(LANG).txt: $(LANG)/$(DOC)-$(LANG).xml
	jade -t sgml -d ../common/stylesheet-txt.dsl -V nochunks $(XML_DECL) $^ > $^.html
	lynx -force_html -dump $^.html > $(LANG)/$(DOC)-$(LANG).txt
	rm -f $^.html

clean:
	rm -rf $(LANG)
