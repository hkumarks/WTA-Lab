#!"C:\Strawberry\perl\bin\perl.exe"
use strict;
use CGI ':standard';
use DBI;
use Sys::Hostname;

print "Content-type: text/html\n\n";
my $dbh = DBI->connect("DBI:mysql:harsha","root","");
die "Can't connect: ".DBI->errstr() unless $dbh;
print "Successfully connected to the database.<br><br>";

my $host = hostname;
my $date = localtime();

my $sth = $dbh->prepare('SELECT * FROM student');
$sth->execute();
print
header(),
<<EOF;
<p>Hostname:$host</p>
<p>Time:$date</p>
<h2>Student Table</h2>
<table border="5">
<tr><th>ID</th><th>Name</th><th>Branch</th></tr>
EOF

my($id,$name,$branch);
while (($id,$name,$branch) = $sth->fetchrow()) {
print "<tr><td>$id</td><td>$name</td><td>$branch</td></tr>\n";
}

$sth->finish;
$dbh->disconnect();