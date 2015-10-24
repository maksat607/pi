#!/usr/bin/python
import RPi.GPIO as g
import Adafruit_DHT
import time

sensor = Adafruit_DHT.DHT22
led=11
g.setmode(g.BOARD) 
g.setup(led,g.OUT)


try:
	while True:
		
		if humidity is not None and temperature is not None:
			time.sleep(0.2)
			
			if temperature>30:
				g.output(11,True)
			else:
				g.output(11,False)
		else:
			print 'Failed to get reading. Try again!'
			
except KeyboardInterrupt:
	g.cleanup()
	f.close()
