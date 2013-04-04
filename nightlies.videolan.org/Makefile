#!/usr/bin/make -f
#
# Makefile to build PHP-based websites statically
# by Remi Denis-Courmont
# $Id: Makefile 4638 2008-08-26 12:52:45Z dionoea $

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
			HERE=$(HERE)$$d/ || exit $$? ; \
	done

%.html: %.php $(ROOT)Makefile $(ROOT)/include/*.php
	@echo "Preprocessing $@ ..."
	@rm -f $@.tmp
	@cd $(ROOT) || exit 1 ; \
	if ! DOCUMENT_ROOT=$(ROOT) $(HERE)$(PHPCGI) $(HERE)$< > $(HERE)$@.tmp; then \
		cat $(HERE)$@.tmp | tail -1 ; \
		rm -f $(HERE)$@.tmp ; \
		exit 1 ; \
	fi
	@$(STRIP_HEADERS) < $@.tmp > $@.tmp2
	@mv -v $@.tmp2 $@
	@rm -f $@.tmp $@.tmp2

.PHONY: clean all

