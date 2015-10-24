#!/usr/bin/python

import RPi.GPIO as g 
import time 
import os
# not_executed = True while(True):
	# dt = list(time.localtime()) hour = dt[3] minute = dt[4]
	
	# if hour == 9 and minute == 54:
		# print hour, ' ', minute
led=36
g.setmode(g.BOARD) 
g.setup(led,g.OUT) 
g.output(led,1)
time.sleep(5)
print "Content-type:text/html\n"
print "Hellow world"
g.cleanup()
