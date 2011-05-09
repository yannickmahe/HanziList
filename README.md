HANZILIST
=========

Description
-----------
A list of the 2715 most commonly used Chinese characters (Hanzi), sorted by frequency of use.

Dump Files
----------

### hanzi.sql 

This file is a dump of the MySQL database. It is the main file: others are exports from this file
There is only 1 table, hanzi. Here is the description of the fields:

rank: rank of the frequency of use of the character, 1 being the most frequent.
char: the UTF-8 value of the character, in simplified  form
pinyin: the pinyin pronunciation of the character
pinyin_no_accents: the pinyin pronunciation of the character, without the tonal diacritics
meaning: the dictionnary meaning of the character
alternative & alternative2: the alternative form of the character
trad1 & trad2: the traditionnal form(s) of the character.

### hanzi.csv 
This file is a dump of the hanzi table, with same columns

### hanzi.bson
This file is a dump of an equivalent mongodb table, with document structure like this:
[_id] => MongoId Object (

    [$id] => 
    
)

[rank] => 

[char] => 

[pinyin] => 

[pinyin_no_accents] => 

[meaning] => 

[alternative] => 

[alternative2] => 

[trad1] => 

[trad2] => 


Migration files
---------------

In the 'migrations' folder, there are the scripts to migrate from mysql DB to CSV export and MongoDB. 
Change the values in include.php to use it from your local DB.

* mysql_to_csv.php dumps a CSV export of the Mysql DB
* mysql_to_mongodb.php exports the MysqlDB table to a MongoDB database (collection : 'hanzi').