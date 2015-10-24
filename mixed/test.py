import  requests
import RPi.GPIO as g 
import time 
import os
import sys

led=13
g.setmode(g.BOARD) 
g.setup(led,g.OUT)


name = "test.txt"
current = open(name, "r")
curino = os.fstat(current.fileno()).st_ino
while True:

    while True:
        buf = current.read(1024)      
        if buf == "":
            break
        sys.stdout.write("jkjkjkjkj  "+buf)
        #g.output(led,int(buf))
        
    try:
        if os.stat(name).st_ino != curino:
            new = open(name, "r")
            current.close()
            current = new
            curino = os.fstat(current.fileno()).st_ino
            continue
    except IOError:
        pass
    time.sleep(1)








