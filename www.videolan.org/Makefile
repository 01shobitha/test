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

PHPCGI := $(ROOT)php-cgi.sh
STRIP_HEADERS := $(ROOT)strip-headers.sh

all: real-all

include Makefile.inc

ifeq ($(PHP_FILES),)
  PHP_FILES := $(wildcard *.html)
endif

TARGETS := $(PHP_FILES:%.html=%.tmp)

real-all: $(TARGETS) all-recursive

clean: clean-recursive
	rm -f $(TARGETS)

%-recursive:
	@for d in $(SUBDIR) ; do \
		$(MAKE) -f $(NEXTROOT)Makefile -C $$d ROOT=$(NEXTROOT) $* \
		|| exit $$? ; \
	done


$(TARGETS): %.tmp: %.html $(ROOT)Makefile
	@echo "Preprocessing $@ ..."
	@DOCUMENT_ROOT=$(ROOT) $(PHPCGI) $< | $(STRIP_HEADERS) > $@

.PHONY: clean all

