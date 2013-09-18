#!/bin/bash
# -x

# christoph.miebach@web.de

# Probably way too long script for this easy task

#LANGUAGE=en
LANG=en_GB.utf8
ISO639="/home/christoph/videolan/locale_iso-639.def"
SVNDATA="/home/christoph/videolan/www.videolan.org/locale"
TXLANGNAMES="/home/christoph/videolan/language_names_transifex"

i=$1

f=$( basename $i )
MAPPED_LANG=`sed -n "s/Language mapping is:.*'\(.*\)': '${f%%.po}'.*/\1/ p" pulling_log.txt`
if [ -z "$MAPPED_LANG" ]
then
  MAPPED_LANG=${f%%.po}
fi
echo "Mapped to $MAPPED_LANG"

echo "${i%%.po}"
langcode="${i%%.po}"
langname=`sed -n "/^$/,$  s/^DEFINE_LANGUAGE_CODE3* .\"\(.*\)\", $langcode, .*/\1/ p" < $ISO639`
usedlangname=`sed -n "/^$/,$  s/^\(.*\)|$langcode.po.*/\1/ p" < /home/christoph/videolan/www.videolan.org/developers/i18n/languages`
txlangname=`sed -n "s/\(.*\)|$MAPPED_LANG$/\1/ p" $TXLANGNAMES`

echo "No_se uses $txlangname"
usedlangname=$txlangname
# TODO: usedlangname is obsolete, since we use one tx definition for all resources

echo $langname
echo $usedlangname

if [ -n "$usedlangname" ]; then
  echo "Using $usedlangname instead of $langname"
  langname=$usedlangname
else
  if [ -z "$langname" ]; then
    echo "No langname."
  fi
fi

sed "s/# SOME DESCRIPTIVE TITLE./# $langname translation/" < $i | \
sed "s/# Copyright (C) YEAR jb/# Copyright (C) 2013 VideoLAN/" > WIP.tmp
#sed "s/# Copyright (C) YEAR jb/# Copyright (C) 2013 VideoLAN/" > $SVNDATA/${i%%.po}/LC_MESSAGES/website.po

# SOME DESCRIPTIVE TITLE.
# Copyright (C) YEAR jb
# This file is distributed under the same license as the PACKAGE package.


if [ -f $SVNDATA/${i%%.po}/LC_MESSAGES/website.po ] ; then
  echo "exists"
  msgcat  --use-first WIP.tmp $SVNDATA/${i%%.po}/LC_MESSAGES/website.po >mergeresult.po
else
  echo "new file"
  mkdir -p $SVNDATA/${i%%.po}/LC_MESSAGES
  cp WIP.tmp mergeresult.po
fi
   

msgfmt -c -v mergeresult.po

msgmerge --no-wrap -U -v mergeresult.po $SVNDATA/website.pot


# Maybe cd to $SVNDATA   , we continue there anyway
if [ -f $SVNDATA/${i%%.po}/LC_MESSAGES/website.po ] ; then
  echo "exists"
  mv mergeresult.po  $SVNDATA/${i%%.po}/LC_MESSAGES/website.po
else
  mv mergeresult.po  $SVNDATA/${i%%.po}/LC_MESSAGES/website.po
  svn add --parents $SVNDATA/${i%%.po}/LC_MESSAGES/website.po
fi
