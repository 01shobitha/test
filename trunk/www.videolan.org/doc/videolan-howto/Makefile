# Makefile for the VideoLAN Documentation in DocBook XML
# Written by Alexis de Lattre <alexis@videolan.org>

DOC := videolan-howto

XML_DECL := /usr/lib/sgml/declaration/xml.decl

EXT = html ps pdf rtf txt
LANG = en

# We build HTML, PS, PDF, RTF and TXT for the Web site
all: img $(LANG)

$(LANG): %: $(foreach ext, $(EXT), $(DOC)-%.$(ext))

# Get the images from the /images/documentation directory
img:
	rm -rf images
	cp -R ../../images/documentation images

$(LANG:%=$(DOC)-%.xml): $(DOC).xml
	xsltproc --stringparam lang $(shell echo $(basename $@) | sed -e 's/.*-//') ../common/multilanguage.xsl $^ | sed -e 's/id="$(DOC)"/id="$(basename $@)"/' > $@


$(LANG:%=$(DOC)-%.html): %.html: %.xml
	jade -t sgml -d ../common/stylesheet-html.dsl $(XML_DECL) $^
	ln -sf $@ index.html
	rm -f $(basename $@)-html.zip
	zip $(basename $@)-html.zip $@ images/*.jpg
	mkdir -p $(basename $@) 
	mv *.html $(basename $@)
	ln -sf $(DOC)-en/index.html $(DOC)-en.html
	rm -f $(DOC)-*.xml
	make $(DOC)-$(LANG).xml

<<<<<<< Makefile
=======
	# English is the default language
$(LANG:%=$(DOC)-%.ps): %.ps: %.xml 
	/bin/cp ../common/magic-eps.xml ../common/magic.xml
	make $@.xml
	jade -t tex -d ../common/stylesheet-print.dsl -o $(basename $@).tex $(XML_DECL) $^
	jadetex $(basename $@).tex
	jadetex $(basename $@).tex
	jadetex $(basename $@).tex
	rm -f *.tex *.out *.aux *.log
	dvips -o $@ $(basename $@).dvi
	zip $(basename $@)-ps.zip $@ images/*.jpg
	rm -f $(DOC)-*.xml
	make $(DOC)-$(LANG).xml
>>>>>>> 1.12

$(LANG:%=$(DOC)-%.pdf): %.pdf: %.xml
	jade -t tex -d ../common/stylesheet-print-noicones.dsl -o $(basename $@).tex $(XML_DECL) $^
	pdfjadetex $(basename $@).tex
	pdfjadetex $(basename $@).tex
	pdfjadetex $(basename $@).tex
	rm -f *.tex *.out *.aux *.log
	zip $(basename $@)-pdf.zip $@ images/*.jpg
	rm -f $(DOC)-*.xml
	make $(DOC)-$(LANG).xml

$(LANG:%=$(DOC)-%.rtf): %.rtf: %.xml
	jade -t rtf -d ../common/stylesheet-print-noicones.dsl -o $@ $(XML_DECL) $^
	rm -f $(basename $@)-rtf.zip
	zip $(basename $@)-rtf.zip $@ images/*.jpg
	rm -f $(DOC)-*.xml
	make $(DOC)-$(LANG).xml

$(LANG:%=$(DOC)-%.txt): %.txt: %.xml
	jade -t sgml -d ../common/stylesheet-txt.dsl -V nochunks $(XML_DECL) $^ > $^.html
#       w3m -dump $^.html > $@
	lynx -force_html -dump $^.html > $@
	rm -f $^.html
	rm -f $(DOC)-*.xml
	make $(DOC)-$(LANG).xml

clean:
	rm -rf *.zip *.html *.pdf  *.rtf *.txt *.dvi *.tex *.out *.aux *.log *.tmp $(DOC)-*.xml $(foreach lang, $(LANG), $(DOC)-$(lang))
