 #!/usr/bin/python
    while True:
        time.sleep(900)
        GPIO.output(33, True)
        time.sleep(900)
        GPIO.output(33, False)