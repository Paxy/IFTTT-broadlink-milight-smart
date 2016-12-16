import broadlink

#devices = broadlink.discover(timeout=1)
#print devices[0].mac
#print devices[0].host
#print devices[0].type


mac="B827EB8183B9".decode('hex')
devices = broadlink.gendevice(30016,('172.16.1.170', 80),mac)

devices.auth()
#devices.set_power(False)
devices.set_power(True)

