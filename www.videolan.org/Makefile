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

TARGETS := $(PHP_FILES:%.php=%.html)

real-all: $(TARGETS) all-recursive

clean: clean-recursive
	rm -f $(TARGETS) $(TARGETS:%=%.tmp)

%-recursive:
	@for d in $(SUBDIR) ; do \
		$(MAKE) -f $(NEXTROOT)Makefile -C $$d ROOT=$(NEXTROOT) $* \
		|| exit $$? ; \
	done

%.html: %.php $(ROOT)Makefile
	@echo "Preprocessing $@ ..."
	@rm -f $@.tmp
	@if ! DOCUMENT_ROOT=$(ROOT) $(PHPCGI) $< > $@.tmp; then \
		cat $@.tmp | tail -1 ; \
		exit 1 ; \
	fi
	@$(STRIP_HEADERS) < $@.tmp > $@
	@rm -f $@.tmp


.PHONY: clean all

