#! /bin/sh


DATEMIN=`date -d '2 months ago' +%Y%m%d`;


echo "Two months ago, we were on : $DATEMIN";

cd build/;

#those have folder in it
#sid-i386 sid-amd64 intrepid-i386
for i in win32 win64 wince source
do 
	echo "Entering folder $i...";
	cd  $i;
	if [ ! -d backup ]; then
		echo "Making a backup dir in $i"
		mkdir backup
	fi
	for j in `ls -1 -b  | xargs`
	do 
		day=`echo $j |cut -d- -f2`;

		if [[ $day < $DATEMIN ]]; then
			echo "Older than it should be  $i/$j";
			DATETEST=`date -d $day +%u`
			if [[ $DATETEST = 1 ]];
			then
				mv $j backup/
				echo "Backing it up"
			else	
				rm -rf $j/
				echo "GO TO /dev/null"
			fi
		fi
	done
	cd ..;
done

#those have just files in it
for i in macosx macosx-intel
do 
	echo "Entering folder $i...";
	cd  $i;
	if [ ! -d backup ]; then
		echo "Making a backup dir in $i"
		mkdir backup
	fi
	for j in `ls -1 -b  | xargs`
	do 
		day=`echo $j |cut -d- -f2`;

		if [[ $day < $DATEMIN ]]; then
			echo "Older than it should be  $i/$j";
			DATETEST=`date -d $day +%u`
			if [[ $DATETEST = 1 ]];
			then
				mv $j backup/
				echo "Backing it up"
			else	
				rm -rf $j
				echo "GO TO /dev/null"
			fi
		fi
	done
	cd ..;
done

cd ..; # quitting build/
