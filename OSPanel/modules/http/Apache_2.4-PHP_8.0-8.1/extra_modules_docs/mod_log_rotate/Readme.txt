 
  May 29, 2020
                                  Apache Haus Distribution 
                        
  Application:       Mod-log-rotate 1.0.2 for Apache 2.4.x
  Distribution File: mod-log-rotate-1.0.2-2.4.x-x64-vc16.zip 
 
  Original source by: Andy Armstrong
  Original Home:      http://www.hexten.net/ 
  
  Win64 binary by: Gregg 
  Mail:            info@apachehaus.com 
  Home:            http://www.apachehaus.com 

  ** This build for Apache 2.4.x x64 only! **

  Supported Windows Versions:
  Windows Vista/7/8/8.1/10 x64 
  Windows Server 2008/2012/2016/2019 x64 

 NOTES:

  Modules built on Visual C++ 2019 do not run on Windows XP or Windows Server 2003

  This module is built with Visual Studio® 2019 x64, be sure to install the 
  new Visual C++ 2019 x64 Redistributable Package, download from;

  https://aka.ms/vs/16/release/VC_redist.x64.exe

  
  INTRODUCTION 

  If you host a lot of virtual servers on a single Apache box and use the supplied 
  rotatelogs program to rotate the logs you'll notice that your process table is 
  cluttered up with an instance of rotatelogs for each virtual server. With 
  mod_log_rotate the log rotation is handled by the server process so you save a
  bunch of processes and file descriptors.

  INSTALL

  Copy mod_log_rotate.so to your Apache 2.4.x modules folder
  .../Apache24/modules/mod_log_rotate.so

  # Add to your httpd.conf:

    LoadModule log_rotate_module modules/mod_log_rotate.so
    RotateLogs On

  CONFIGURATION DIRECTIVES:
  
  RotateLogs On|Off    Enable / disable automatic log rotation. Once enabled
                       mod_log_rotate takes responsibility for all log output
                       server wide even if RotateLogs Off is subsequently
                       used. That means that the BufferedLogs directive that
                       is implemented by mod_log_config will be ignored.
 
  RotateLogsLocalTime  Normally the log rotation interval is based on UTC.
                       For example an interval of 86400 (one day) will cause
                       the logs to rotate at UTC 00:00. When this option is
                       on, log rotation is timed relative to the local time.
 
  RotateInterval       Set the interval in seconds for log rotation. The
                       default is 86400 (one day). The shortest interval that
                       can be specified is 60 seconds. An optional second
                       argument specifies an offset in minutes which is
                       applied to UTC (or local time if RotateLogsLocalTime
                       is on). For example RotateInterval 86400 60 will
                       cause logs to be rotated at 23:00 UTC.
 
