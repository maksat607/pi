 #!/usr/bin/pythonimport RPi.GPIO as GPIOimport timeimport cgitbcgitb.enable()    print("Content-Type: text/html;charset=utf-8")print()    print("Hello World!")GPIO.setmode(GPIO.BOARD)# init list with pin numberspinList = [37,33]# loop through pins and set mode and state to 'low' GPIO.setup(33, GPIO.OUT) GPIO.output(33, False)# GPIO.setup(37, GPIO.OUT) # GPIO.output(37, False)# time to sleep between operations in the main loopSleepTimeL = 2# main looptry:
    while True:
        time.sleep(900)
        GPIO.output(33, True)
        time.sleep(900)
        GPIO.output(33, False)# End program cleanly with keyboardexcept KeyboardInterrupt:  print "  Quit"  # Reset GPIO settings  GPIO.cleanup()