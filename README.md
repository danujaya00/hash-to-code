# hash-to-code
**Assignment** Small PHP program which finds the 4-character pin when hash code is given.

## Assignment: Reversing an MD5 hash (password cracking)

In this assignment, we build code to reverse an MD5 hash using a brute force technique where we simply 'forward hash' all possible combinations of characters in strings. This would be similar to a situation where an e-commerce site stored hashed passwords in its database and we somehow have gotten our hands on the database contents, and we want to take the hashed password and determine the actual plaintext passwords.

This following is a list of people, and their hashed PIN values.

| email              | pin   | hash_pin                                |
|--------------------|-------|-----------------------------------------|
| csev@umich.edu     | ????  | 0bd65e799153554726820ca639514029        |
| nabgilby@umich.edu | ????  | aa36c88c27650af3b9868b723ae15dfc        |
| pconway@umich.edu  | ????  | 1ca906c1ad59db8f11643829560bab55        |
| font@umich.edu     | ????  | 1d8d70dddf147d2d92a634817f01b239        |
| collemc@umich.edu  | ????  | acf06cdd9c744f969958e1f085554c8b        |

You should be able to easily crack all but one of these PINs using your application. The simplest brute force approach generally is done by writing a series of nested loops that go through all possible combinations of characters. This is one of the reasons that password policies specify that you include upper case, lower case, numbers, and punctuation in passwords is to make brute force cracking more difficult. Significantly increasing the length of the password to something like 20-30 characters is a very good way to make brute force cracking more difficult.

Please note that cracking passwords without proper authorization is illegal and unethical.
