#!"C:\Strawberry\perl\bin\perl.exe"

use strict;
use CGI ':standard';
use DBI;
use Sys::Hostname;
print "Content-type: text/html\n\n";
my $dbh = DBI->connect("DBI:mysql:database=cgi","root","xyz");
die "Can't connect: ".DBI->errstr() unless $dbh;
my $host = hostname;
my $date = localtime();


if (param()) {
my $namee = param('name') ||'Unknown';
my $usne = param('id') ||'N/A';
my $rese = param('brn') || 0;
my $querrye = 'INSERT INTO SS VALUES (?,?,?)';
my $sthe = $dbh->prepare($querrye);
$sthe->execute($usne,$namee,$rese);
$sthe->finish;
}
my $sth = $dbh->prepare('SELECT * FROM SS');
$sth->execute();
print
header(),
<<EOF;
<p>Hostname:$host</p>
<p>Time:$date</p>
<h2>Insert Data</h2>
<form action="/cgi-bin/q33.cgi" method="get">
    ID  :  <input type="text" name="id">
<br>
<br>
Name:  <input type="text" name="name">
<br>
<br>
Branch:<input type = "text" name = "brn">
<br>
<br>
<input type="submit" value="Submit">
</form>
EOF
print
<<EOFF;
<h2>Student Covid 19 Results</h2>
<table border="5" bgcolor="pink">
<tr><th>ID</th><th>Name</th><th>Branch</th></tr>
EOFF

my($usn,$name,$res);
while (($usn,$name,$res) = $sth->fetchrow()) {
print "<tr><td>$usn</td><td>$name</td><td>$res</td></tr>\n";
}


$sth->finish;
$dbh->disconnect();