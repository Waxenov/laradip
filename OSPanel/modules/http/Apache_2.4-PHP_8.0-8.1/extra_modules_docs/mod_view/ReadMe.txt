16 June 2019
02 Feb 2020 updated this Readme


                                          Apache Lounge Distribution

                                      mod_view 2.2 for Apache 2.4 Win64 VS16

# Binary by: Steffen
# Mail: info@apachelounge.com
# Home: http://www.apachelounge.com/


Build with Visual Studio� 2019 (VS16) 
--------------------------------------------
Be sure you have installed the Visual C++ Redistributable for Visual Studio 2015-2019.
Download and install, if you not have it already, see:

 http://www.apachelounge.com/download/


# Install:

- Copy mod_view.so to your modules folder


# Add to your httpd.conf

LoadModule view_module modules/mod_view.so

# Configuration: See Manual.doc

# To Test:

Add the following example configuration to httpd.conf:

<IfModule mod_view.c>

    Alias /log "c:/apache24/logs"  

    <Directory /apache24/logs>
        ViewEnable on
        Require local
    </Directory>

</IfModule>

Replace c:/apache24/logs with the location of your log folder,
and edit the Require to your needs.

With the above example configuration, test the module specifying a URL of the form: 

http://localhost/logs/access.log?tail=20&refresh=20 

Replace acces.log with the name of an other log file you want to see in the folder c:/apache24/logs

You should see the last 20 lines of the access_log file every 20 seconds. 

If the log file has only <5 lines you do not see it in the browser.


Enjoy,


Steffen