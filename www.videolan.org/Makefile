#!/usr/bin/make -f
#
# Makefile to build PHP-based websites statically
# by Remi Denis-Courmont
# $Id$

ifeq ($(ROOT),)
  ROOT := ./
  NEXTROOT := ../
else
  NEXTROOT := ../$(ROOT)
endif

PHPCGI := $(ROOT)bin/php-cgi.sh
STRIP_HEADERS := $(ROOT)bin/strip-headers.sh

all: real-all

include Makefile.inc

ifneq ($(PHP_FILES),)
  PHP_FILES := $(PHP_FILES:%=%.php)
else
  PHP_FILES := $(wildcard *.php)
endif

ifneq ($(PHP_IGNORES),)
  PHP_FILES := $(filter-out $(PHP_IGNORES:%=%.php), $(PHP_FILES))
endif

TARGETS := $(PHP_FILES:%.php=%.html) $(ROOT)/news-rss.html $(ROOT)/style/style.min.css \
	$(ROOT)/style/bootstrap.min.css \
	$(ROOT)/style/slick.min.css \
	$(ROOT)/js/slick.min.js

real-all: $(TARGETS) all-recursive

clean: clean-recursive
	rm -f $(TARGETS) $(TARGETS:%=%.tmp)
	rm -rf index.*.php

%-recursive:
	@for d in $(SUBDIR) ; do \
		$(MAKE) -f $(NEXTROOT)Makefile -C $$d ROOT=$(NEXTROOT) $* \
			HERE=$(HERE)$$d/ || exit $$? ; \
	done

%.html: %.php $(ROOT)Makefile $(ROOT)/include/*.php 
	@echo "Preprocessing $@ ..."
	@rm -f $@.tmp
	@cd $(ROOT) || exit 1 ; \
	if ! REQUEST_URI=$(ROOT)$(HERE) DOCUMENT_ROOT=$(ROOT) $(HERE)$(PHPCGI) $(HERE)$< > $(HERE)$@.tmp; then \
		cat $(HERE)$@.tmp | tail -1 ; \
		rm -f $(HERE)$@.tmp ; \
		exit 1 ; \
	fi
	@$(STRIP_HEADERS) < $@.tmp > $@.tmp2
	@mv -v $@.tmp2 $@
	@rm -f $@.tmp $@.tmp2


index.%.php: index.php $(ROOT)/locale/%/LC_MESSAGES/website.po $(ROOT)/include/*.php
	rm -f ./$@
	sed -e "s/language = \"\"/language = \"$*\"/" index.php > ./$@;
	msgfmt -c -v -o $(ROOT)/locale/$*/LC_MESSAGES/website.mo $(ROOT)/locale/$*/LC_MESSAGES/website.po

clean-locale:
	rm -fv index.*.php index.*.html

update-po:
	xgettext -f locale/POTFILES -o locale/website.pot -L PHP --foreign-user --copyright-holder=jb --package-name=VideoLAN\'s\ websites

.PHONY: clean all

