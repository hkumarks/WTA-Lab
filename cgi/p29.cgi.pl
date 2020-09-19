#!"C:\xampp\perl\bin\perl.exe"

use strict;
use CGI ':standard';
use Sys::Hostname;
my $host = hostname;
my $date = localtime();


print
header(),
start_html(),
p("Hostname:$host",br(),"LocalTime:$date"),
h2('SERVER INFORMATION'),
'Here is some information about the server:',
ul(
li('The server name: ', server_name()),
li('The server software: ', server_software()),
li('Virtual Host:',virtual_host()),
li('The server port: ', server_port()),
li('The script name: ', script_name())
),
end_html();
