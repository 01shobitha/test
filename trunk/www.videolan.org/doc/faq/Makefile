# Makefile for the VideoLAN Documentation
# Written by Alexis de Lattre <alexis@videolan.org>
# Factorised by Sam Hocevar <sam@zoy.org>

DOC = videolan-faq
LANG = es fr en
EXT = html ps pdf rtf txt

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
	cp ../common/magic-jpg.xml ../common/magic.xml
	jade -t sgml -d ../common/stylesheet-html.dsl $^
	ln -sf $@ index.html
	zip $(basename $@)-html.zip $@

$(LANG:%=$(DOC)-%.ps): %.ps: %.xml
	cp ../common/magic-eps.xml ../common/magic.xml
	jade -t tex -d ../common/stylesheet-print.dsl -o $(basename $@).tex $^
	jadetex $(basename $@).tex
	jadetex $(basename $@).tex
	jadetex $(basename $@).tex
	rm -f *.tex *.out *.aux *.log
	dvips -o $@ $(basename $@).dvi
	zip $(basename $@)-ps.zip $@

$(LANG:%=$(DOC)-%.pdf): %.pdf: %.xml
	cp ../common/magic-jpg.xml ../common/magic.xml
	jade -t tex -d ../common/stylesheet-print-noicones.dsl -o $(basename $@).tex $^
	pdfjadetex $(basename $@).tex
	pdfjadetex $(basename $@).tex
	pdfjadetex $(basename $@).tex
	rm -f *.tex *.out *.aux *.log
	zip $(basename $@)-pdf.zip $@

$(LANG:%=$(DOC)-%.rtf): %.rtf: %.xml
	cp ../common/magic-jpg.xml ../common/magic.xml
	jade -t rtf -d ../common/stylesheet-print-noicones.dsl -o $@ $^
	zip $(basename $@)-rtf.zip $@

$(LANG:%=$(DOC)-%.txt): %.txt: %.xml
	cp ../common/magic-jpg.xml ../common/magic.xml
	jade -t sgml -d ../common/stylesheet-txt.dsl -V nochunks $^ > $^.html
#	w3m -dump $^.html > $@
	lynx -force_html -dump $^.html > $@
	rm -f $^.html

