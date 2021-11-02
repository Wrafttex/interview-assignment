# Job interview assignment
My take on the interview assignment for the intership position as a back-end dev.

## My solution
I chose to write my solution in PHP due to the ease of accessing databases, and based on that being what you guys mostly use.

My solution opens a connection to the database, to be able to execute more queries before closing the connection again. Currently my code takes a condition for the query and does the data fetching and deleting based on that variable. The data gets converted over to JSON format to make it more readable and easier to work with, before being saved to a file on disk. To ensure the data is complete on the disk it's read back and compared to what was fetched from the database before deleting the row in the database.


## Future improvements 
Improvements that could be made to the software includes, saving more data to the disk instead of overriding what is there when something new is saved to the file, also moving the connection string to a .env file to hide it so people won't get access to query the database. Another improvement could also be to add functionality of writing data the other way too, meaning reading data from the disk and pushing it to the database before deleting the data in the local file.