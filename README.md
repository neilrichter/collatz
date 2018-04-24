# collatz.py

This script calculates the biggest sequences of [Collatz Conjecture](https://en.wikipedia.org/wiki/Collatz_conjecture).
The script never ends, and takes no parameter.

## The Algorithm:

For each number from 1 to infinite (as it never ends), we apply the Collatz conjecture and determine how much steps we do until we reach 1 (The Collatz conjecture says that regardless of the number we pick, we always reach 1). 

+ If the number is even :
  + Divide it by 2
+ If the number is odd :
  + Multiply by 3 and add 1 to the result
In both case, it represents 1 step.

Repeat until we reach 1.

## How to run it forever ?

I advise you to go on a server, and to run it in background as follows : 

```bash
nohup python3 collatz.py &
```

Logs are stored in the same directory as `collatz.py` is. You can check them whenever you want.

### Can I see it online without having to log into my server ?

Sure, I made the file `index.php` for that. But you can't use it as it is. You have to modify it a little bit.
As `collatz.py` writes in a log file every biggest sequence he finds, you have to update the path to the log file in `index.php` line 18.

I took care of fetching the PID automatically with the command line in the PHP file, you won't have to edit this line unless you rename the python file.
