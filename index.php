<?php

include 'db_connect.php';  //include the db_connect.php file

print "<H1>Showing the users of the sampledb that has been created in the RDS few seconds ago!</H1>\n";

//Create and set a new connection
$get = new Connection("db1"); //"db1" is user defined in db_connect.php

//Create a query: $var->query("SQL_STATEMENT"); $var is the variable you created a connection with.
$selectusers = $get->query("SELECT * FROM users");

//Do whatever you would like with the query
print "Total Number of user records";

print mysql_num_rows($selectusers);

//Use built in functions to make one line queries.
$rowarray = $get->fetch($selectusers);  //fetch() fetches the associated rows.

print "<tr>\n";  
foreach ($rowarray as $row) {
    foreach ($row as $col) {
        print "\t<td>$col</td>\n";
    }
    print "</tr>\n";
}  

?>
