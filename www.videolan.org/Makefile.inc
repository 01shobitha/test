# Subdirectories to be preprocessed
SUBDIR = doc events security support team vlc vlma projects developers locale press

# Files to be preprocessed
#PHP_FILES = # automatic
PHP_IGNORES = mirror mirror-geo retrieve get_count

# Additionnal dependencies

news.html: news.msg

index.html: news.msg

