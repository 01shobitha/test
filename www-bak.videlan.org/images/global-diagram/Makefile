# Makefile that converts from DIA -> EPS
# Then you must use 'The Gimp' to :
#  - resize the image to a width of 800 px
#  - save as 'images/documentation/global-diagram.jpg'
#    with a quality around 0.80
# Eventually, if it looks fine, commit and scp the JPG file.

NAME := global-diagram

all:
	dia -e $(NAME).eps $(NAME).dia

clean:
	rm -f $(NAME).eps*
