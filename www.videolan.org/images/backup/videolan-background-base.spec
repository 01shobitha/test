Summary: Background images from the VideoLAN project.
URL: http://www.videolan.org/goodies.html
Name: videolan-backgrounds-base
Version: 1
Release: 1
Copyright: GPL
#License: GPL
Group: Application/Multimedia
Packager: Jean-Paul Saman <jpsaman@wxs.nl>
Prefix: /usr/share
BuildRoot: /var/tmp/%{name}
Source: %{name}-%{version}-%{release}.tar.gz
BuildArch: noarch

%description
The VideoLAN project delivers multimedia streaming on a high-bandwidth IPv4 or IPv6 network in unicast or multicast under many OSes. This package contains background images donated to the VideoLAN project by several contributors.

%prep
%setup -q -n %{name}

%clean 
rm -fr $RPM_BUILD_ROOT/

%install
rm -fr $RPM_BUILD_ROOT/
mkdir -p $RPM_BUILD_ROOT/usr/share/backgrounds/images
cp -a $RPM_BUILD_DIR/videolan-backgrounds-base/*.{jpg,png} $RPM_BUILD_ROOT/usr/share/backgrounds/images

%files
%defattr(-,root,root)
/usr/share/backgrounds/images/VideoLAN.png       
/usr/share/backgrounds/images/vl2_1024x724.jpg   
/usr/share/backgrounds/images/vl3_1600x1200.jpg  
/usr/share/backgrounds/images/vl4_2872x2154.jpg
/usr/share/backgrounds/images/vl1_1024x768.jpg   
/usr/share/backgrounds/images/vl2_1600x1131.jpg  
/usr/share/backgrounds/images/vl4_1024x768.jpg
/usr/share/backgrounds/images/vl1_1600x1200.jpg  
/usr/share/backgrounds/images/vl3_1024x768.jpg   
/usr/share/backgrounds/images/vl4_1600x1200.jpg

%changelog
* Thu Oct 23 2003 Jean-Paul Saman <jpsaman@wxs.nl>
- First release of videolan background images base package.
