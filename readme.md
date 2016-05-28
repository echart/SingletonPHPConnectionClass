## What is that?

A PHP Connection class, using singleton design pattern

This class use PDO to connect with a pgsql database, with a config.ini file to do that.

## Example

The example is the index.php.

First you need include the class/Connection.php, than just call the static method getInstance like:

$con = Connection::getInstance();

If you already have an instance of Connection, the class will get that. If doesn't, the class will create a new object. Without duplications.

After that, you just need to call the connect() method and use PDO.

easy.

## License

Free for use.