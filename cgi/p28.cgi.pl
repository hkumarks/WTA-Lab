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
h2('CLIENT INFORMATION'),
'Information about the client:',
ul(
li('The remote host: ', remote_host()),
li('User name: ',user_name()), 
li('The user agent: ', user_agent()),
li('Path information: ', path_info()),
),
end_html();
