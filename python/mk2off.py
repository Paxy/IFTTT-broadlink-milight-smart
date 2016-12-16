import broadlink

mac="B827EB8183B9".decode('hex')
devices = broadlink.gendevice(30016,('172.16.1.170', 80),mac)

devices.auth()
devices.set_power(False)

