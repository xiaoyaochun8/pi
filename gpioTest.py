try:
    import RPi.GPIO as GPIO
except RuntimeError:
    print("import error")

print "rpi_version: ", GPIO.RPI_REVISION
print "version: ", GPIO.VERSION

GPIO.setmode(GPIO.BOARD)

GPIO.setup(7,GPIO.OUT)

print GPIO.input(7)

#GPIO.setmode(GPIO.BOARD)

GPIO.setup(11,GPIO.OUT,initial=GPIO.HIGH)

print GPIO.input(11)

GPIO.cleanup()

#print GPIO.input(7)
