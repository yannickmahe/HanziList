A list of the 2715 most commonly used Chinese characters (Hanzi), sorted by frequency of use.

hanzi.sql file is a dump of the MySQL database.
There is only 1 table, hanzi. Here is the description of the fields:

rank: rank of the frequency of use of the character, 1 being the most frequent.
char: the UTF-8 value of the character, in simplified  form
pinyin: the pinyin pronunciation of the character
pinyin_no_accents: the pinyin pronunciation of the character, without the tonal diacritics
meaning: the dictionnary meaning of the character
alternative & alternative2: the alternative form of the character
trad1 & trad2: the traditionnal form(s) of the character.

hanzi.csv file is a dump of the table, with same columns

hanzi.bson is a dump of an equivalent mongodb table, with document structure like this:
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


in migrations folder, there is the script to migrate from mysql DB to CSV export. Change the values in include.php to get it from your local DB.