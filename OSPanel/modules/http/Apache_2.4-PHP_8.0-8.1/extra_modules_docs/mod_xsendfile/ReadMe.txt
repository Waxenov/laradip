16 June 2019

                                                Apache Lounge Distribution

                                          mod_xsendfile 1.0-P1 Apache 2.4 Win64 VS16

# Original source by: Nils Maier
# Original Home: https://tn123.org/mod_xsendfile/
# Binary by: Steffen
# Mail: info@apachelounge.com
# Home: http://www.apachelounge.com/
#
# Included fix: https://github.com/nmaier/mod_xsendfile/issues/8


Build with Visual Studio® 2019 (VS16) 
--------------------------------------------
Be sure you have installed the Visual C++ Redistributable for Visual Studio 2015-2019.
Download and install, if you not have it already, see:

 http://www.apachelounge.com/download/

# Install:

- Copy mod_xsendfile.so to your modules folder 

# Add to your httpd.conf

LoadModule xsendfile_module modules/mod_xsendfile.so


# Configuration:

  See the Readme.html in the docs folder




Enjoy,

Steffen
