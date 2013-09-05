#!/bin/bash
# -x

# christoph.miebach@web.de

LANG=en
# we parse (for example) msgfmt output, so make sure it's the same everywhere
# This should provide english output:
# msgmerge --version


# With the right setup, the script could be stored anywhere.
# For now, I just leave it in the transifex folder
SVNDATA="/home/christoph/videolan/www.videolan.org/locale"
TXWEBSITE="/home/christoph/videolan/www.videolan.org/transifex"


# Some colors, not sure I use all of them
blue='\e[0;34m'
red='\e[0;31m'
NC='\e[0m' # No Color


rm log_merge.txt
rm log_diff.txt
rm debug_log.txt
rm translation-todo.txt
rm alternate_langs.txt
#echo -n "\"fr\"" >>alternate_langs.txt
# alternate_langs will contain the langcodes for complete translations

# processing of a single file with a call to an extra script would be the way to go
# but since the files are tiny, I don't care
for i in $( ls *po ); do
  echo $i  >> debug_log.txt
  echo $SVNDATA/${i%%.po}/LC_MESSAGES/website.po >> debug_log.txt

  msgfmt -v -c $i &> last_item.txt
  # cat last_item.txt
    
  if grep -q "^0 trans" last_item.txt ; then
    echo "ignore empty po file..." >> debug_log.txt
  else

    #61 translated messages, 14 untranslated messages.
    TRANS_DONE=`sed -n "s/^\([0-9]*\) translated.*/\1/ p" <last_item.txt`
    REMAINING=`sed -n "s/.* \([0-9]*\) untranslated.*/\1/ p" <last_item.txt`
      
    # if [ $TRANS_DONE -le 60 ]
    if grep -q "untrans" last_item.txt
    #I promised to pull complete translations, so here I ignore everything else
    then
      echo "$i is incomplete. $REMAINING missing. Skipping..."
      continue
    fi
	    
    cp $TXWEBSITE/$i current_file.po
    msgmerge --no-wrap -U current_file.po $SVNDATA/${i%%.po}/LC_MESSAGES/website.po &>>log_merge.txt
    msgmerge --no-wrap -U current_file.po $SVNDATA/website.pot &>>log_merge.txt


    diff -Naur $SVNDATA/${i%%.po}/LC_MESSAGES/website.po current_file.po |if grep -q "\+msgstr" ; then
      if [ -f $SVNDATA/${i%%.po}/LC_MESSAGES/website.po ] ; then
	echo -e "WORK: Please update this language soon: ${red}$i${NC}"
	echo "WORK: Please update this language soon: $i" >>translation-todo.txt
      else
	echo -e "WORK: Please create this file soon: ${red}$i${NC}"
	echo "WORK: Please create this file soon: $i" >>translation-todo.txt
      fi

      diff -Naur $SVNDATA/${i%%.po}/LC_MESSAGES/website.po $TXWEBSITE/$i >> log_diff.txt
    else
      echo -n ", \"${i%%.po}\"" >> alternate_langs.txt
    fi
    echo $i >> log_diff.txt

  fi
done
sort alternate_langs.txt|cat
rm current_file.po
