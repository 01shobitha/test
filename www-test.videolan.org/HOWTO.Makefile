  The purpose of the Makefile is to preprocess website's pages
statically through the PHP processor, so as to reduce the load on the
web server.

  In each directories, you should create a Makefile.inc file that will
be included by the Makefile scripts. In that file, you can create a
SUBDIR variable to specify the list of subdirectories.

  You can optionnaly define a PHP_FILES variable to specify the list of
files to be preprocessed (without trailing .html/.php). It defaults to
"*.php". Additionnaly, PHP_IGNORE can be used to explicitly exclude
some PHP scripts from static preprocessing.

-- 
Remi Denis-Courmont
