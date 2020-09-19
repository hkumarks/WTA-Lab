#!"C:\xampp\perl\bin\perl.exe"

use strict;
use CGI ':standard';
use Sys::Hostname;

my $host = hostname;
my $date = localtime();

my $env_path = $ENV{PATH_INFO} || '';
my $method_path = path_info() || '';


print
header,
start_html(-title => 'Path Information'),
p("Hostname:$host",br(),"Time:$date"),
'From %ENV: ',
b($env_path),
br(),
'From path_info(): ',
b($method_path),
end_html();
