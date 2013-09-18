#!/bin/bash
# -x

# The -x might help to debug if you add it to the first line
# christoph.miebach@web.de

# create a subfolder transifex and configure tx to store the po files there
cd /home/christoph/videolan/www.videolan.org/transifex

# Nobody will care about line numbers in the pot file
# So, I create an current pot file and only alert if there are new msgids
# This will reduce the diff of updates a lot
# It's not a perfect check (if 2 msgids swap the order, there will be an alert)
# But then again, just update the pot file!
cd ..
svn up
make update-po

svn diff locale/website.pot > output_from_svn.txt

if grep -q "\+msgstr" output_from_svn.txt ; then
  echo "New mesages. Or at least moved messages..."
else
  echo "make update-po was not needed. Grabbing website.pot again from svn"
  svn revert locale/website.pot
  rm output_from_svn.txt
fi
cd -

# In this setup, there is a subfolder transifex in www.videolan.org
tx -d --traceback pull -r vlc-trans.vlc_website  -a  > pulling_log.txt
# -d   = debug  and 
# --traceback    just give more verbose output/spam the pulling_log

# pull  = fetch data from transifex
# -r vlc-trans.vlc_website  = download only the website not everything
# -a  all translations (including new ones)


./to_tx_diff.sh
# Compares existing po files with the ones from transifex

# Now a short howto for the remaining steps
echo "For each language there might be some work like this left:"
echo "cd transifex     ./into_svn.sh mr.po"
echo 'svn ci -m "Adding po files for gl (Galician), km (Khmer), mr (Marathi)"'

echo "modify Makefile.inc, vlc/Makefile.inc and include/header.php and make sure http://www.videolan.org/index.mr.html exists."
echo "let translators do a review, modify index.var = vlc/index.var and alternate_lang in index.php + vlc/index.php when it is done"
echo "RTL is done in include/header.php"
