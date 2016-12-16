import broadlink

#devices = broadlink.discover(timeout=1)
#print devices[0].mac
#print devices[0].host
#print devices[0].type


mac="B4430DFBD380".decode('hex')
devices = broadlink.gendevice(10026,('172.16.1.167', 80),mac)

devices.auth()
print devices.check_temperature()


