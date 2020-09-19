#!"C:\xampp\perl\bin\perl.exe"

use strict;
use CGI ':standard';
use Sys::Hostname;
my $host = hostname;
my $date = localtime();

print "Content-type: text/html\n";
print "\n";
print "<html>\n";
print "<h3>Host Name: $host</h3>\n";
print "<h3>Current time: $date</h3>\n";
print "</html>\n";
