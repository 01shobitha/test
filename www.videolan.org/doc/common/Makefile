# Makefile for the VideoLAN Documentation in DocBook XML
# Written by Alexis de Lattre <alexis@videolan.org>
# To build another language than the default one, do 'make LANG=foo'

# XML declaration
XML_DECL1 = /usr/lib/sgml/declaration/xml.decl
XML_DECL2 = /usr/share/sgml/declaration/xml.decl
XML_DECL = `test -f $(XML_DECL1) && echo $(XML_DECL1) || echo $(XML_DECL2)`

# Build HTML, PDF, RTF and TXT outputs (for the web site)
all: $(LANG)/$(DOC)-$(LANG).html $(LANG)/$(DOC)-$(LANG).pdf $(LANG)/$(DOC)-$(LANG).rtf $(LANG)/$(DOC)-$(LANG).txt

# Extract one language (XML to XML transformation) and prepare the repository
$(LANG)/$(DOC)-$(LANG).xml: *.xml ../common/*.xml ../common/multilanguage.xsl
	mkdir -p $(LANG)
	xsltproc --stringparam lang $(LANG) ../common/multilanguage.xsl $(DOC).xml | sed -e 's/id="$(DOC)"/id="$(DOC)-$(LANG)" lang="$(LANG)"/' > $@
	cp -R ../../images/documentation $(LANG)/images

# HTML output
$(LANG)/$(DOC)-$(LANG).html: $(LANG)/$(DOC)-$(LANG).xml ../common/stylesheet-html.dsl
	jade -t sgml -d ../common/stylesheet-html.dsl $(XML_DECL) $(LANG)/$(DOC)-$(LANG).xml
	mv *.html $(LANG)
	rm -f $(LANG)/$(DOC)-$(LANG)-html.zip
	cd $(LANG) && zip $(DOC)-$(LANG)-html.zip *.html images/*.jpg images/*.gif

# PDF output
$(LANG)/$(DOC)-$(LANG).pdf: $(LANG)/$(DOC)-$(LANG).xml ../common/stylesheet-print-noicones.dsl
	jade -t tex -d ../common/stylesheet-print-noicones.dsl -o $(LANG)/$(DOC)-$(LANG).tex $(XML_DECL) $(LANG)/$(DOC)-$(LANG).xml
	cd $(LANG) && pdfjadetex $(DOC)-$(LANG).tex
	cd $(LANG) && pdfjadetex $(DOC)-$(LANG).tex
	cd $(LANG) && pdfjadetex $(DOC)-$(LANG).tex
	cd $(LANG) && rm -f *.tex *.out *.aux *.log
	cd $(LANG) && zip $(DOC)-$(LANG)-pdf.zip $(DOC)-$(LANG).pdf

# RTF output
$(LANG)/$(DOC)-$(LANG).rtf: $(LANG)/$(DOC)-$(LANG).xml ../common/stylesheet-print-noicones.dsl
	cd $(LANG) && jade -t rtf -d ../../common/stylesheet-print-noicones.dsl -o $(DOC)-$(LANG).rtf $(XML_DECL) $(DOC)-$(LANG).xml
	rm -f $(LANG)/$(DOC)-$(LANG)-rtf.zip
	cd $(LANG) && zip $(DOC)-$(LANG)-rtf.zip $(DOC)-$(LANG).rtf images/*.jpg

# TXT output
$(LANG)/$(DOC)-$(LANG).txt: $(LANG)/$(DOC)-$(LANG).xml ../common/stylesheet-txt.dsl
	jade -t sgml -d ../common/stylesheet-txt.dsl -V nochunks $(XML_DECL) $(LANG)/$(DOC)-$(LANG).xml > $(LANG)/dumpfortxt.html
	lynx -force_html -dump $(LANG)/dumpfortxt.html > $(LANG)/$(DOC)-$(LANG).txt
	rm -f $(LANG)/dumpfortxt.html

# Delete all outputs
clean:
	rm -rf $(ALL_LANG)

# All languages
all-lang:
	for l in $(ALL_LANG); do $(MAKE) LANG=$$l || exit 1; done

