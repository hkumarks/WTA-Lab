#!"C:\xampp\perl\bin\perl.exe"

use strict;
use CGI ':standard';
use Sys::Hostname;
my $host = hostname;
my $date = localtime();
if(param)
{
my $name = param('yourname') || 'qwerty';
my $age = param('age') || 0;
my @params = param();

print
header(),
start_html('Your Name and Age'),
p("Hostname:$host",br(),"Time:$date"),
"Hello $name, you are $age years old.",
hr(),
'The parameters entered are: ',
b("@params"),
end_html();
}
else
{
print
header(),
<<EOHTML;
<html>
<head>
<title>Enter Your Name and Age</title>
</head>
<body bgcolor="#ffffff">
<form action="/perl/p31.cgi.pl" method="get">
Name: <input type="text" name="yourname">
<br>
<br>
Age:  <input type="text" name="age">
<br>
<br>
<input type="submit" value="Submit">
</form>
</body>
</html>
EOHTML
}