#!/usr/bin/python
import RPi.GPIO as g
import time
g.setmode(g.BOARD)
pin=13
g.setup(pin,g.OUT)
g.output(pin,0)


