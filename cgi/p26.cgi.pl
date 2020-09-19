#!"C:\xampp\perl\bin\perl.exe"

use strict;
use CGI ':standard';
use Sys::Hostname;
my $host = hostname;
my $date = localtime();

print <<EOS
Content-type: text/html

<html>
<body>
<h3>Hostname : $host!</h3>
<h3>Current time: $date</h3>
<p>Did using Here document</p>
</body>
</html>
EOS
#