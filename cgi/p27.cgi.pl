#!"C:\xampp\perl\bin\perl.exe"

use strict;
use CGI ':standard';
use Sys::Hostname;
my $host = hostname;
my $date = localtime();

print
header(),
start_html(-title => 'program 27'),
h3("Server name : $host"),
h3("Current time : $date"),
end_html();
