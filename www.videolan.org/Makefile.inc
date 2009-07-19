# Subdirectories to be preprocessed
SUBDIR = doc security support vlc videolan projects developers locale press

# Files to be preprocessed
#PHP_FILES = # automatic
PHP_IGNORES = mirror mirror-geo retrieve get_count mirror-geo-redirect

# Additionnal dependencies

news.html: news.msg

index.html: news.msg

